<!-- app/Views/admin/edit_dosen.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit team</title>
</head>
<body>
    <h1>Edit team</h1>
    <link rel="stylesheet" href="css/style1.css">
    
    <form method="post" action="<?= site_url('updateTeam/' . $team['id']) ?>">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $team['nama'] ?>" required><br>
        <label>Slogan:</label>
        <input type="text" name="slogan" value="<?= $team['slogan'] ?>" required><br>
        <label>Asal:</label>
        <input type="text" name="asal" value="<?= $team['asal'] ?>" required><br>
        

        <button type="submit" value="Update">Update</button>
    </form>
    <a href="/team" class="back-link">Back to Data Team</a>
</body>
</html>