<?php include 'kalkulasi.php'; ?>
<html>
    <head>
        <title>Konversi Mata Uang</title>
    </head>
    <body>
        <h1>Rp <?= $rp; ?></h1>
        <h1>$ <?= $dl; ?></h1>
        <h1>฿ <?= $bt; ?></h1>
        <h1>¥ <?= $y; ?></h1>
        <hr>
        <form action="" method="GET">
            <label>Rupiah</label>
            <input type="number" name="rupiah">
            <input type="submit" name="dor" value="rp">
            <br>
            <label>Dollar</label>
            <input type="number" name="dollar">
            <input type="submit" name="dor" value="dl">
            <br>
            <label>Baht</label>
            <input type="number" name="baht">
            <input type="submit" name="dor" value="bt">
            <br>
            <label>Yen</label>
            <input type="number" name="yen">
            <input type="submit" name="dor" value="y">
        </form>
        <a href="index.php">
            <button>Bersihkan</button>
        </a>
    </body>
</html>