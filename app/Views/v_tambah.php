<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New User</title>
</head>
<body>
<form action="/crud/create" method="post">
    <label>
        Nama:
        <input type="text" name="nama">

    </label>
    <br>
    <label>
        Alamat:
        <input type="text" name="alamat">
    </label>
    <br>
    <label>
        Pekerjaan:
        <input type="text" name="perkerjaan">
    </label>
    <br>
    <button type="submit">Save</button>
</form>
</body>
</html>