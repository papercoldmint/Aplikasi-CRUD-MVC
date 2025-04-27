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
            <a href="index.php?action=create" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Data
            </a>
        </header>

        <?php if ($mahasiswa->rowCount() > 0) : ?>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $mahasiswa->fetch(PDO::FETCH_ASSOC)) : ?>
                    <tr>
                        <td><?= htmlspecialchars($row['id']) ?></td>
                        <td><?= htmlspecialchars($row['nama']) ?></td>
                        <td><?= htmlspecialchars($row['nim']) ?></td>
                        <td class="action-buttons">
                            <a href="index.php?action=edit&id=<?= $row['id'] ?>" class="btn btn-edit">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="index.php?action=delete&id=<?= $row['id'] ?>" class="btn btn-danger">
                                <i class="fas fa-trash"></i> Hapus
                            </a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <?php else : ?>
            <div class="alert alert-info">
                <i class="fas fa-info-circle"></i> Tidak ada data mahasiswa.
            </div>
        <?php endif; ?>
    </div>
</body>
</html>