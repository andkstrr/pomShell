<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bahan Bakar Shell</title>
</head>
<body>
<?php 

include('logicShell.php');
if(isset($_POST["btn-submit"])) {
    $beli = new Beli();
    $beli->setHarga(15420, 16130, 18130, 16510);
    $beli->jenis = ($_POST['jenis']);
    $beli->jumlah = ($_POST['jumlah']);

    echo $beli->cetakPembelian();
}

?>
<form method="POST" style= "margin: 20px 0 0 440px;">
    <label for="jumlah">Masukkan Jumlah Liter: </label>
    <input type="number" id="jumlah" name="jumlah" min="1" required style="margin-bottom: 5px"><br>
    <label for="jenis">Pilih Tipe Bahan Bakar: </label>
    <select name="jenis" id="jenis" style="margin-bottom: 5px">
        <option disabled selected>-- Bahan Bakar Shell --</option>
        <option value="SSuper">Shell Super</option>
        <option value="SVPower">Shell V-Power</option>
        <option value="SVPowerDiesel">Shell V-Power Diesel</option>
        <option value="SVPowerNitro">Shell V-Power Nitro</option>
    </select> <br>
    <input type="submit" value="Beli" name="btn-submit" style="margin-right: 22%;">
</form>
</body> 
</html>
