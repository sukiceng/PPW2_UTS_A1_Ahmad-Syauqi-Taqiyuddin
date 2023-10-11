<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layout.app')

@section('content')
    <h1>Data Pemain</h1>
    <table>
        <tr>
            <th>Nama Pemain</th>
            <th>No Punggung</th>
            <th>Posisi</th>
        </tr>
        @foreach($pemain as $p)
            <tr>
                <td>{{ $p->nama_pemain }}</td>
                <td>{{ $p->no_punggung }}</td>
                <td>{{ $p->posisi }}</td>
            </tr>
        @endforeach
    </table>
@endsection
</body>
</html>
