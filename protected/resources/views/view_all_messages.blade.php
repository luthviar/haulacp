<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container table-responsive">
    <h2>Lihat Inbox</h2>
    <p>Ini adalah kumpulan pesan yang dikirim oleh berbagai orang dari website utama haula.</p>
    <table class="table">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Judul</th>
            <th>Instansi</th>
            <th>No HP</th>
            <th>Email</th>
            <th>Pesan</th>
            <th>Waktu Dikirim</th>
        </tr>
        </thead>
        <tbody>
        @for($i=0,$j=1;$i<count($all_msg);$i++,$j++)
            <tr>
                <td>{{$j}}</td>
                <td>{{ $all_msg[$i]->name }}</td>
                <td>{{ $all_msg[$i]->judul }}</td>
                <td>{{ $all_msg[$i]->instansi }}</td>
                <td>{{ $all_msg[$i]->no_hp }}</td>
                <td>{{ $all_msg[$i]->email }}</td>
                <td>{{ $all_msg[$i]->pesan }}</td>
                <td>{{ \Carbon\Carbon::parse($all_msg[$i]->created_at)->diffForHumans() }}</td>
            </tr>
        @endfor

        </tbody>
    </table>
</div>

</body>
</html>
