<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikat</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .sertifikat {
            position: relative;
            width: 800px;
            height: 600px;
            margin: 50px auto;
            border: 2px solid #000;
            box-sizing: border-box;
            background: url('{{ asset("sertif/sertif1.png") }}') no-repeat center center;
            background-size: cover;
        }

        .nama-peserta {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        font-size: 24px;
        color: #000;
        padding: 10px; /* menambahkan padding */
    }

    .ttd-pimpinan {
        position: absolute;
        bottom: 160px;
        left: 155px;
        text-align: left;
        font-size: 16px;
        color: #000;
        padding: 5px; /* menambahkan padding */
    }

    .nama-pimpinan {
        position: absolute;
        bottom: 105px;
        left: 193px;
        text-align: left;
        font-size: 16px;
        color: #000;
        padding: 5px; /* menambahkan padding */
    }

    .ttd-pengajar {
        position: absolute;
        bottom: 160px;
        right: 155px;
        text-align: right;
        font-size: 16px;
        color: #000;
        padding: 5px; /* menambahkan padding */
    }

    .nama-pengajar {
        position: absolute;
        bottom: 105px;
        right: 193px;
        text-align: right;
        font-size: 16px;
        color: #000;
        padding: 5px; /* menambahkan padding */
    }
    </style>
</head>

<body>

    <div class="sertifikat">
        <div class="nama-peserta">Nama Peserta</div>
        <div class="ttd-pimpinan">
            <img src="ttd_pimpinan.png" alt="Tanda Tangan Pimpinan">
        </div>
        <div class="nama-pimpinan">
            <div>Nama Pimpinan</div>
        </div>
        
        <div class="ttd-pengajar">
            <img src="ttd_pengajar.png" alt="Tanda Tangan Pengajar">
        </div>
        <div class="nama-pengajar">
            <div>Nama Pengajar</div>
        </div>
    </div>

</body>

</html>
