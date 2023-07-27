<!-- app/Views/admin/create_mahasiswa.php -->

<!DOCTYPE html>
<html>
    <style>
         h1{
            color: red;
        }
        input[type=text], select {
        width: 75%;
        padding: 0px 2px;
        margin: 2px 0;
        display: inline-block;
        border: 2px solid black;
        border-radius: 1px;
        box-sizing: border-box;
        font-size: 20px;
        }

        input[type=submit] {
        width: 100%;
        background-color: aqua;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        position: right;
        }

        input[type=submit]:hover {
        background-color: black;

        }
    
    </style>
<head>
    <title>Create Pemain</title>
</head>
<body>
    <h1>Create Pemain</h1>
    <link rel="stylesheet" href="css/edit.css">

    <form method="post" action="<?= site_url('storePemain') ?>">
        <label>Nama:</label>
        <input type="text" name="nama" required><br>

        <label>Posisi:</label>
        <input type="text" name="posisi" required><br>

        <label>Team:</label>
        <input type="text" name="team" required><br>

        <button type="submit" value="Submit">Simpan</button>
    </form>
    <a href="pemain" class="back-link">Back to Data Pemain</a>
</body>
</html>