<!DOCTYPE html>
<html>
<head>
<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<style type="text/css">
table tr td,
table tr th{
font-size: 9pt;

}
</style>
<center>
<h5>Laporan Artikel</h4>
</center>
    <table class='table table-bordered' width:"350px">
        <thead>
            <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Gambar</th>
            </tr>
        </thead>
    <tbody>
    @php $i=1 @endphp
    @foreach($article as $a)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{$a->title}}</td>
            <td>{{$a->content}}</td>
            <td>{{$a->feature_image}}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>
