<!-- app/Views/admin/mahasiswa.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Pemain</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <h1>Data Pemain Sepak Bola</h1>

    <a href="<?= site_url('createPemain') ?>"><button>Tambah Pemain Baru</button></a>
    <a href="team"><button>Menuju Halaman Team</button></a>
     <link rel="stylesheet" type="text/css" href="/css/style1.css"> 
   
   
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Posisi</th>
                <th>Team</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pemain as $pmn) : ?>
                <tr>
                    <td><?= $pmn['id'] ?></td>
                    <td><?= $pmn['nama'] ?></td>
                    <td><?= $pmn['posisi'] ?></td>
                    <td><?= $pmn['team'] ?></td>
                    <td class ="action">
                    <a href="<?= site_url('editPemain/' . $pmn['id']) ?>"> <i data-feather="edit"></i></a>
                    <a href="<?= site_url('deletePemain/' . $pmn['id']) ?>">  <i data-feather="delete"></i></a>



                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script>feather.replace()</script>
</body>
</html>