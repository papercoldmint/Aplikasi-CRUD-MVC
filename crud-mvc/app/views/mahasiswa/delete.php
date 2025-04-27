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

        <div class="confirmation-box">
            <div class="alert alert-warning">
                <i class="fas fa-exclamation-triangle"></i> Anda yakin ingin menghapus data ini?
            </div>

            <div class="data-preview">
                <div class="data-item">
                    <span class="label">ID:</span>
                    <span class="value"><?= htmlspecialchars($data['id']) ?></span>
                </div>
                <div class="data-item">
                    <span class="label">Nama:</span>
                    <span class="value"><?= htmlspecialchars($data['nama']) ?></span>
                </div>
                <div class="data-item">
                    <span class="label">NIM:</span>
                    <span class="value"><?= htmlspecialchars($data['nim']) ?></span>
                </div>
            </div>

            <form method="POST" action="index.php?action=destroy&id=<?= $data['id'] ?>" class="confirmation-form">
                <div class="form-actions">
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash"></i> Ya, Hapus
                    </button>
                    <a href="index.php" class="btn btn-back">
                        <i class="fas fa-times"></i> Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>