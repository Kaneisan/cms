<!DOCTYPE html>
<html>
<head>
<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<style type="text/css">
table tr td,
table tr th{
font-size: 9pt;

}
</style>
<center>
<h5>Laporan User</h4>
</center>
    <table class='table table-bordered'>
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Roles</th>
                <th scope="col">Register</th>
            </tr>
        </thead>
    <tbody>
    @php $i=1 @endphp
    @foreach($users as $a)
        <tr>
            <td scope="row">{{ $i++ }}</td>
            <td>{{$a->name}}</td>
            <td>{{$a->email}}</td>
            <td>{{$a->roles}}</td>
            <td>{{$a->created_at}}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>
