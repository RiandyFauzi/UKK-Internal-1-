<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

    <center>
        <h2>Penerimaan Peserta Didik Baru <br> SMK Merdeka Belajar</h2>
        <h3 class="mb-200">2021</h3>
    </center>

    <br>
    <div class="my-100">
        <br>@if ($daftar->id
        < '10' )<p><b>No Reg:</b> 000{{ $daftar->id }}</p>

            @elseif($daftar->id
            < '99' ) <p><b>No Reg:</b> 00{{ $daftar->id }}</p>

                @endif
                <p><b>Nama :</b> {{ $daftar->nama }}</p>
                <p><b>Jenis kelamin :</b> {{ $daftar->jk }}</p>
                <p><b>Alamat :</b> {{ $daftar->alamat }}</p>
                <p><b>Agama Lahir :</b> {{ $daftar->agama }}</p>
                <p><b>Alamat :</b> {{ $daftar->alamat }}</p>
                <p><b>Asal Sekolah :</b> {{ $daftar->asal_sekolah }}</p>
                <p><b>Minat Jurusan :</b> {{ $daftar->minat_jurusan }}</p>

    </div>

    <small class="text-align: right;"> Terdaftar pada {{ $daftar->created_at->format('d F y')}}</small>
</body>


</html>