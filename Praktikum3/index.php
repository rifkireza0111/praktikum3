<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div>
    <div class="row">
        <div class="col-md-12">
        <form method="POST" action="jumlah_nilai.php" class="w-75 mt-5 mx-auto p-4 border shadow-sm" style="background-color: #F2EFE5">
                <div class="form-group row">
                    <label for="identitas_mahasiswa" class="col-4 col-form-label">
                        <h5 style="color: #31363F">Nama Panjang :</h5>
                        </label>
                    <div class="col-8">
                        <input id="identitas" name="identitas" placeholder="Masukkan Nama" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">
                        <h5 style="color: #31363F">Mata Kuliah :</h5>
                        </label>
                    <div class="col-8">
                        <select id="mata_kuliah" name="mata_kuliah" class="custom-select" required>
                            <option value="">Pilih Mata Kuliah</option>
                            <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                            <option value="Basis Data I">Basis Data I</option>
                            <option value="Pemrograman Web">Pemrograman Web</option>
                            <option value="ui/ux">ui/ux</option>
                            <option value="PPKN">PPKN</optiion>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uts" class="col-4 col-form-label">
                    <h5 style="color: #31363F">Nilai UTS :</h5>
                    </label>
                    <div class="col-8">
                        <input id="hasiluts" name="hasiluts" placeholder="Nilai UTS" type="text" class="form-control"required> 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uas" class="col-4 col-form-label">
                    <h5 style="color: #31363F">Nilai UAS :</h5>
                    </label>
                    <div class="col-8">
                        <input id="hasiluas" name="hasiluas" placeholder="Nilai UAS" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tugas" class="col-4 col-form-label">
                    <h5 style="color: #31363F">Nilai Tugas :</h5>                   
                 </label>
                    <div class="col-8">
                        <input id="hasiltugas" name="hasiltugas" placeholder="Nilai Tugas" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button id="submit" name="submit" type="submit"  class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
            <hr>
        </div>
    </div>
</div>
    
</body>
</html>