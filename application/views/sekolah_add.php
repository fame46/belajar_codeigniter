<!DOCTYPE html>
<html>

<head>
    <title>Membuat Form Tambah Sekolah</title>
</head>

<body>
    <center>
        <h2>Form Tambah Data Sekolah</h2>
        <form method="post" action="<?= base_url('sekolah/save'); ?>">
            <table border="1">
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Nama Sekolah</td>
                    <td><input type="text" name="nama_sekolah"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="kirim" value="Masukkan Data"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>