<!DOCTYPE html>
<html>
    <head>
        <title>Input data Barang</title>
    </head>
<body bgcolor="55ccdd">
    <h2 align="center">Form Input Barang</h2>
    <br/>
    <form method="post" action="proses.php">
        <table align="center">
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <select id="status" name="status">
                    <option value="Baik">Baik</option>
                    <option value="Rusak">Rusak</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="SIMPAN" name="submit">
                    <input type="reset" value="BATAL">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>