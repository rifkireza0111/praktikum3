<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <form method="GET" action="praktikum1.php" class="w-75 mt-5 mx-auto p-4 border shadow-sm" style="background-color: skyblue">
        <h2>Toko Elektronik</h2>
        <hr />
        <div class="container px-3">
            <div class="form-group row">
                <label for="custname" class="col-4 col-form-label">Customer</label>
                <div class="col-8">
                    <input name="custname" id="custname" placeholder="Masukan nama customer" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih produk</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input value="handphone" name="produk" id="handphone" type="radio" class="custom-control-input" required>
                        <label for="handphone" class="custom-control-label">Handphone</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input value="charger" name="produk" id="charger" type="radio" class="custom-control-input" required>
                        <label for="charger" class="custom-control-label">Charger</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input value="earphone" name="produk" id="earphone" type="radio" class="custom-control-input" required>
                        <label for="earphone" class="custom-control-label">Earphone</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                <div class="col-8">
                    <input name="jumlah" id="jumlah" placeholder="Jumlah beli" type="number" min=0 class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <input name="submit" type="submit" name="submit" value="Submit" class="btn btn-primary">
                </div>
            </div>
            <div class="form-group">
                <p class="my-1">List Harga</p>
                <ol>
                    <li>Handphone: 2.000.000</li>
                    <li>charger: 100.000</li>
                    <li>earphone: 75.0000</li>
                </ol>
            </div>
        </div>
    </form>


    <?php

    if (isset($_POST['submit'])){
        $cst = $_POST['custname'];
        $prd = $_POST['produk'];
        $jml = $_POST['jumlah'];
        $btn = $_POST['submit'];


        switch ($prd) {
            case "handphone":
                $total = $jml * 2000000;
                break;
            case "charger":
                $total = $jml * 100000;
                break;
            case "earphone":
                $total = $jml * 75000;
                break;
        }

        echo '<br>Nama Customer ' . $cst;
        echo '<br>Nama Produk ' . $prd;
        echo '<br>Jumlah Beli ' . $jml; 
        echo '<br>total belanja ' . $total;
        echo '<br>Submit ' . $btn;
    }



    ?>



</body>

</html>