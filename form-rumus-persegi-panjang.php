<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/plugins/bootstrap-5/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <!-- konten di sini -->
    <div class="card mt-5">
        <div class="card-header bg-info text-white"> 
            Rumus Persegi Panjang
        </div>
        <div class="card-body">
        <form action="proses.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Panjang</label>
                <input type="number" name="panjang" class="form-control"  placeholder="isi dengan panjang persegi">
            </div>
            <div class="mb-3">
                <label class="form-label">Lebar</label>
                <input type="number" name="lebar" class="form-control"  placeholder="isi dengan lebar persegi">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
    </div>
</body>
</html>