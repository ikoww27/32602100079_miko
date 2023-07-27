<!-- app/Views/admin/edit_mahasiswa.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Pemain</title>
</head>
<body>
    <h1>Edit Pemain</h1>
    <link rel="stylesheet" href="css/style1.css">
    
    <form method="post" action="<?= site_url('updatePemain/' . $pemain['id']) ?>">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $pemain['nama'] ?>" required><br>

        <label>Posisi:</label>
        <input type="text" name="posisi" value="<?= $pemain['posisi'] ?>" required><br>

        <label>Team:</label>
        <input type="text" name="team" value="<?= $pemain['team'] ?>" required><br>

        <button type="submit" value="Update">Update</button>
    </form>
    <a href="/pemain" class="back-link">Back to Data Pemain</a>
    </body>
</html>