<!DOCTYPE html>
<html lang="id">

<head>
    <title>Biodata</title>
</head>

<body>
    <h1>BIODATA</h1>
    <form action="{{ url('/biodata') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td colspan=2>BIODATA</td>
            </tr>
            <tr>
                <td>NPM:</td>
                <td><input type="text" id="NPM" name="NPM"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" id="Nama" name="Nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" id="Alamat" name="Alamat"></td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td><input type="text" id="Program_Studi" name="Program_Studi"></td>
            </tr>
            <tr>
                <td colspan=2><button type="submit">Kirim</button></td>
            </tr>
        </table>
    </form>
</body>

</html>
