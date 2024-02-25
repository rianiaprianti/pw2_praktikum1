<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Siswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS */
        body {
            margin: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h3 {
            color: #333;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Daftar Nilai Siswa</h3>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Tugas</th>
                    <th>Nilai Akhir</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $ar_nilai = [
                    ['id' => 1, 'nim' => '01101', 'uts' => 80, 'uas' => 84, 'tugas' => 78],
                    ['id' => 2, 'nim' => '01121', 'uts' => 70, 'uas' => 50, 'tugas' => 68],
                    ['id' => 3, 'nim' => '01130', 'uts' => 60, 'uas' => 86, 'tugas' => 70],
                    ['id' => 4, 'nim' => '01134', 'uts' => 90, 'uas' => 91, 'tugas' => 82]
                ];

                foreach ($ar_nilai as $key => $nilai) : ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $nilai['nim'] ?></td>
                        <td><?= $nilai['uts'] ?></td>
                        <td><?= $nilai['uas'] ?></td>
                        <td><?= $nilai['tugas'] ?></td>
                        <?php
                        $nilai_akhir = ($nilai['uts'] + $nilai['uas'] + $nilai['tugas']) / 3;
                        ?>
                        <td><?= number_format($nilai_akhir, 2, ',', '.') ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
