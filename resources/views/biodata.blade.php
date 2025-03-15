<!DOCTYPE html>
<html lang="id">

<head>
    <title>Biodata</title>
</head>

<body>
    <h1>BIODATA</h1>
    <table>
        {{-- Bagian 4 --}}
        {{-- <tr>
            <td>NPM</td>
            <td>007</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>Teguh Wiharko</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>Bandung</td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>Teknik Informatika</td>
        </tr> --}}

        <tr>
            <td>NPM</td>
            <td>{{ $NPM }}</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>{{ $Nama }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>{{ $Alamat }}</td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>{{ $Program_Studi }}</td>
        </tr>

    </table>
</body>

</html>
