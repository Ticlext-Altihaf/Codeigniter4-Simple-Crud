<!DOCTYPE html>
<html>
<head>
    <title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
<center><h1>Membuat CRUD dengan CodeIgniter </h1></center>
<center><?php echo anchor('crud/create','Tambah Data'); ?></center>
<table style="margin:20px auto;" border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Pekerjaan</th>
        <th>Action</th>
    </tr>
    <?php
    #source: malescoding.com
    $no = 1;
    foreach($users as $u){
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u['nama'] ?></td>
            <td><?php echo $u['alamat'] ?></td>
            <td><?php echo $u['perkerjaan'] ?></td>
            <td>
                <?php echo anchor('crud/update/'.$u['id'],'Edit'); ?>
                <?php echo anchor('crud/delete/'.$u['id'],'Hapus'); ?>
            </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>


