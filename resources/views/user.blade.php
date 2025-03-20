<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>
<body>

    <h1>Data User</h1>
    <a href="/user/tambah">+ Tambah User</a>
    <table id="userTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>ID Level Pengguna</th>
                <th>Kode Level</th>
                <th>Nama Level</th>
                <th>Aksi</th>
            </tr>
        </thead>
    </table>

    <script>
        $(document).ready(function() {
            $('#userTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ url("user/list") }}',
                columns: [
                    { data: 'user_id', name: 'user_id' },
                    { data: 'username', name: 'username' },
                    { data: 'nama', name: 'nama' },
                    { data: 'level_id', name: 'level_id' },
                    { 
                        data: 'level', 
                        name: 'level.level_kode', 
                        render: function(data, type, row) {
                            return data ? data.level_kode : 'N/A';
                        } 
                    },
                    { 
                        data: 'level', 
                        name: 'level.level_nama', 
                        render: function(data, type, row) {
                            return data ? data.level_nama : 'N/A';
                        } 
                    },
                    { data: 'aksi', name: 'aksi', orderable: false, searchable: false }
                ]
            });
        });
    </script>

</body>
</html>
