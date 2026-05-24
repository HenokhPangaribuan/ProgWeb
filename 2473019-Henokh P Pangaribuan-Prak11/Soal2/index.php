<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Data Siswa</title>
    <style>
        body {
            font-family: Arial;
        }

        .container {
            width: 700px;
            margin: auto;
            border: 1px solid #ddd;
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        .btn {
            padding: 7px 15px;
            color: white;
            text-decoration: none;
            border-radius: 3px;
        }

        .tambah {
            background: #4CAF50;
        }

        .edit {
            background: #2196F3;
        }

        .hapus {
            background: #f44336;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border-bottom: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background: #eee;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Data Siswa</h2>
        <a href="tambah.php" class="btn tambah">Tambah Data</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
            <?php
            $data = mysqli_query($koneksi, "SELECT * FROM siswa");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $d['id']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['kelas']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn edit">Edit</a>
                        <a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn hapus">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>