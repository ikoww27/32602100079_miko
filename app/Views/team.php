
<!DOCTYPE html>
<html>
<head>
    <title>Team</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <h1>Data Team</h1>

    <a href="<?= site_url('createteam') ?>"><button>Tambah team Baru</button></a>
    <a href="pemain"><button>Menuju Halaman Pemain</button></a>
    <link rel="stylesheet" type="text/css" href="/css/style2.css"> 


    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Slogan</th>
                <th>Asal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($team as $tm) : ?>
                <tr>
                    <td><?= $tm['id'] ?></td>
                    <td><?= $tm['nama'] ?></td>
                    <td><?= $tm['slogan'] ?></td>
                    <td><?= $tm['asal'] ?></td>
                    <td>
                        <a href="<?= site_url('editTeam/' . $tm['id']) ?>"> <i data-feather="edit"></i></a>
                        <a href="<?= site_url('deleteTeam/' . $tm['id']) ?>"> <i data-feather="delete"></i> </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script>feather.replace()</script>
</body>
</html>