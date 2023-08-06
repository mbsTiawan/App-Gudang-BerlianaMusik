<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<table class="table table-responsive" border="solid" id="table-permintaan">

<thead>
    <tr>
        <th scope="col">Kode Transaksi</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Nama Mitra</th>
        <th scope="col">Jumlah Diminta</th>
        <th scope="col">Nama Penyewa</th>
        <th scope="col">Tanggal Diminta</th>
        <th scope="col">Status</th>
    </tr>
</thead>
<tbody>
    <?php
    foreach ($count as $pr): ?>
        <tr>
            <td><?= $pr['kd_pr'] ?></td>
            <td><?= $pr['nama_brg'] ?></td>
            <td><?= $pr['nama_mitra'] ?></td>
            <td><?= $pr['jumlah_diminta'] ?></td>
            <td><?= $pr['nama_penyewa'] ?></td>
            <td><?= $pr['tanggal_diminta'] ?></td>
            <td>
                <?php
                $statusClass = $pr['status'] == "Belum Selesai" ? "status_btn_red" : ($pr['status'] == "Pending" ? "status_btn_yellow" : "status_btn");
                ?>
                <a data-id="<?= $pr['kd_pr'] ?>" id="BTN_UPDATE_PERMINTAAN" class="btn <?= $statusClass ?>">
                    <?= $pr['status'] ?>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
</style>
</body>
</html>