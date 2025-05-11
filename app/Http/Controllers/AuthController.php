<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserModel;
class AuthController extends Controller
{
    public function login()
    {
        if(Auth::check()){ // jika sudah login, maka redirect ke halaman home
            return redirect('/');
        }
        return view('auth.login');
    }
    public function postlogin(Request $request)
    {
        if($request->ajax() || $request->wantsJson()){
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
        return response()->json([
            'status' => true,
            'message' => 'Login Berhasil',
            'redirect' => url('/')
        ]);
        }
        return response()->json([
            'status' => false,
            'message' => 'Login Gagal'
        ]);
        }
        return redirect('login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'nama' => 'required|min:3|max:50',
            'username' => 'required|min:4|max:20|unique:m_user,username',
            'password' => 'required|min:6|max:20|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validasi gagal',
                'msgField' => $validator->errors()
            ]);
        }

        try {
            $user = UserModel::create([
                'level_id' => 3, // Untuk register dari halaman register hanya untuk staff
                'username' => $request->username,
                'nama' => $request->nama,
                'password' => $request->password, // Otomatis di-hash karena ada casts 'hashed'
                'created_at' => now(),
                'updated_at' => now()
            ]);

            Auth::login($user);

            return response()->json([
                'status' => true,
                'message' => 'Registrasi berhasil',
                'redirect' => url('/')
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Registrasi gagal: ' . $e->getMessage()
            ]);
        }
    }
}