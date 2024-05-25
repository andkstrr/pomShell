<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar Shell</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .shell-img {
            width: 500px;
            height: auto;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="form-container">
        <!-- <img src="assets/.jpg" alt="" class="shell-img"> -->
        <form method="POST">
            <h4 class="text-center mt-2 mb-3">Pom Bensin Shell</h4>
            <div class="form-group">
                <label for="jumlah">Masukkan Jumlah Liter:</label>
                <input type="number" id="jumlah" name="jumlah" class="form-control" min="1" required>
            </div>
            <div class="form-group">
                <label for="jenis">Pilih Tipe Bahan Bakar:</label>
                <select name="jenis" id="jenis" class="form-control" required>
                    <option disabled selected>-- Bahan Bakar Shell --</option>
                    <option value="SSuper">Shell Super</option>
                    <option value="SVPower">Shell V-Power</option>
                    <option value="SVPowerDiesel">Shell V-Power Diesel</option>
                    <option value="SVPowerNitro">Shell V-Power Nitro</option>
                </select>
            </div>
            <button type="submit" name="btn-submit" class="btn btn-primary">Beli</button>
        </form>
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
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
