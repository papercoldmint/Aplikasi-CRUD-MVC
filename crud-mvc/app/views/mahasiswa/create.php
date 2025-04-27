<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/crud-mvc/public/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1><?= $title ?></h1>
            <a href="index.php" class="btn btn-back">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </header>

        <form method="POST" action="index.php?action=store" class="form">
            <div class="form-group">
                <label for="nama">Nama Mahasiswa</label>
                <input type="text" id="nama" name="nama" required class="form-control" placeholder="Masukkan nama">
            </div>
            
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" id="nim" name="nim" required class="form-control" placeholder="Masukkan NIM">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan
                </button>
                <button type="reset" class="btn btn-danger">
                    <i class="fas fa-undo"></i> Reset
                </button>
            </div>
        </form>
    </div>
</body>
</html>