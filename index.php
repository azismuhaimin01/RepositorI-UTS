<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS ONLINE</title>
</head>
<body style="background-color: silver">
    <div style="width: 70%; background-color: white; margin: 10px auto; padding: 20px;">
        <h1 style="text-align: center">INPUT DATA PASIEN VIRUS COVID-19</h1>
        <hr>
        <form action="berhasil.php" method="POST">
            <h3 style="display: block; margin-bottom: 5px;">Nama Wilayah</h3>
            <select name="wilayah" style="width: 100%; height: 40px;">
                <option value="DKI Jakarta">DKI Jakarta</option>
                <option value="Banten">Banten</option>
                <option value="Jawa Barat">Jawa Barat</option>
                <option value="Jawa Tengah">Jawa Tengah</option>
            </select>

            <h3 style="display: block; margin-bottom: 5px;">Jumlah Positif</h3>
            <input type="text" name="jumlahpositif" style="width: 100%; height: 40px;" required>

            <h3 style="display: block; margin-bottom: 5px;">Jumlah Dirawat</h3>
            <input type="text" name="jumlahdirawat" style="width: 100%; height: 40px;" required>

            <h3 style="display: block; margin-bottom: 5px;">Jumlah Sembuh</h3>
            <input type="text" name="jumlahsembuh" style="width: 100%; height: 40px;" required>

            <h3 style="display: block; margin-bottom: 5px;">Jumlah Meninggal</h3>
            <input type="text" name="jumlahmeninggal" style="width: 100%; height: 40px;" required>

            <h3 style="display: block; margin-bottom: 5px;">Nama Operator</h3>
            <input type="text" name="namaoperator" style="width: 100%; height: 40px;" required>

            <h3 style="display: block; margin-bottom: 5px;">Nim Mahasiswa</h3>
            <input type="text" name="nimmhs" style="width: 100%; height: 40px;" required>

            <button type="submit" name="simpan" style="margin-top: 15px; height: 40px; background-color: blue; color: white;">SIMPAN</button>
            <button onclick="window.location.href='index.php'" style="margin-top: 15px; height: 40px; background-color: red; color: white;">BATAL</button>
        </form>
    </div>
</body>
</html>