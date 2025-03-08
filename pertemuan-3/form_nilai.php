<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> form nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <br>
    <div class="container">
        <div class="card">
            <div class="card-body">
            <form method="post" action="hasil-nilai.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Mahasiswa</label> 
                <div class="col-8">
                <input id="nama" name="nama" placeholder="masukan nama lengkap" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                <input id="nim" name="nim" placeholder="masukan nim kamu" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="Rombel" class="col-4 col-form-label">Rombel</label> 
                <div class="col-8">
                <input id="Rombel" name="Rombel" placeholder="Masukan Rombel kamu" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata kuliah</label> 
                <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select" required="required">
                    <option value="Pemweb2">Pemweb 2</option>
                    <option value="Basis Data">Basis data</option>
                    <option value="Jaringan komputer">Jaringan komputer</option>
                    <option value="UI UX">UI UX</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="tugas" class="col-4 col-form-label">Nilai tugas</label> 
                <div class="col-8">
                <input id="tugas" name="tugas" placeholder="Masukan nilai tugas kamu" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <input id="uts" name="uts" placeholder="Masukan nilai Uts kamu" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="uas" class="col-4 col-form-label">Nilai Uas</label> 
                <div class="col-8">
                <input id="uas" name="uas" placeholder="Masukan nilai uas kamu" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>