<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>
<body>
    <h3>Dosen STT - NF</h3>
    <table border="1">
        <thead>
            <tr align='center'>
                <th width = '40'>No</th>
                <th width = '200'>NIDN</th>
                <th width = '200'>Pendidikan</th>
                <th width='200'>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor =1;
            foreach ($dosen as $dsn) {
            ?>
            <tr align='center'>
                <td><?php echo $nomor ?></td>
                <td><?php echo $dsn -> nidn ?></td>
                <td><?php echo $dsn -> pendidikan ?></td>
                <td>
                    <a href="<?php echo base_url("index.php/mahasiswa/detail_dosen/$dsn->id") ?>">Detail; </a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>