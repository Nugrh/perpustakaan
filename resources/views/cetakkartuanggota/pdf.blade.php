<!doctype html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .center{
            width: 512px;
            height: 256px;
            margin: auto;
            font-size: larger;
            padding: 24px;
            color: #343a40;
            border: #3d4852 solid 3px;
            border-radius: 10px;

        }

        pre{
            margin-bottom: 4px;
        }
    </style>
</head>
<body>

<form action="">
    <input type="hidden" name="id" id="id" value="{{ $users->id }}">
</form>

<div class="card" style="">
    <div class="card-body border">
        <div class="center">
            <strong>Kartu Anggota Perpustakaan</strong>
            <hr>
            <pre>id        : {{ $users->id }}</pre>
            <pre>Nama      : {{ $users->name }}</pre>
            <pre>NIS       : {{ $users->nis }}</pre>
            <pre>Alamat    : {{ $users->alamat }}</pre>
            <pre>Nomor HP  : {{ $users->no_hp }}</pre>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
