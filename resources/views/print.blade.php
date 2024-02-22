<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sertifikat</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @page {
            margin: 0;
            size: 2000px 1414px;
            /* height: 1414px;
            width: 2000px; */
        }

        body {
            padding: 0;
            margin: 0;
        }

        .certificate-image {
            width: 100%;
            /* height: 1414px;
            width: 2000px;
            margin: auto;
            display: block */
        }

        .certificate-title {
            font-size: 80px;
            /* background-color: red; */
            padding: 100px
        }

        .certificate-subtitle {
            font-size: 100px;
            padding: 0
        }

        .certificate-sub-subtitle {
            font-size: 55px;
            padding: 0;
            /* padding-top: 100px; */
        }

        .certificate-name {
            font-size: 60px;
        }

        .certificate-text {
            font-size: 40px;
        }

        .certificate-subtext {
            font-size: 30px;
        }

        .certificate-border {
            margin: auto;
            border: 0px solid black;
            width: 60%;
            text-align: center;
        }

        .certificate-no {
            font-size: 30px; 
            /* margin-left: 80px;  */
            align-items: center;
            text-align: center;
        }

        .signature-image {
            width: 300px;

            height: 150px;
            object-fit: cover !important;
        }
    </style>
</head>

<body>
    <div style="width: 100%; position: absolute;margin: 0">
        <img 
        @if ($peserta->sertif->desain == 1)
        src="{{ asset('sertif/sertif1.png') }}"
        
        @elseif ($peserta->sertif->desain == 2)
        src="{{ asset('sertif/sertif2.png') }}"
        @elseif ($peserta->sertif->desain == 3)
        src="{{ asset('sertif/sertif3.png') }}"
    
        @endif
        class="certificate-image" alt="">

    </div>
    <div style="position: relative; padding: 0;padding-top: 200px; text-align: center;">
        <span class="certificate-no">{{ $peserta->no_sertif }}</span><br>
        <span class="certificate-title">Sertifikat</span><br><br>
        <span class="certificate-text">Dengan bangga kami berikan kepada</span><br>
        <span class="certificate-name">{{ $peserta->nama }}</span><br><br>
        <hr style="width: 40%"><br><br><br>
        <span class="certificate-text">karena telah mengikuti pelatihan
        </span><br><br><br>
        <span class="certificate-text">{{ $peserta->tema_pelatihan }}</span><br><br><br>
        <span class="certificate-text">Pada tanggal {{ $peserta->sertif->tanggal }}
        </span><br>
        <br><br><br><br><br>
        <table class="certificate-border">
            <tr>
                <td><img class="signature-image" src="{{ asset($peserta->sertif->ttd_pimpinan) }}"
                        alt="{{ $peserta->sertif->ttd_pimpinan }}">
                </td>
                <td rowspan="4" style="font-size: 75px">X</td>
                <td><img class="signature-image" src="{{ asset($peserta->sertif->ttd_pengajar) }}"
                        alt="{{ $peserta->sertif->ttd_pengajar }}"></td>
            </tr>
            <tr>
                <td>
                    <hr style="width: 40%">
                </td>
                <td>
                    <hr style="width: 40%">
                </td>
            </tr>
            <tr>
                <td class="certificate-text">{{ $peserta->sertif->ceo }}</td>
                <td class="certificate-text">{{ $peserta->sertif->nama_pengajar }}</td>
            </tr>
            <tr>
                <td class="certificate-subtext">Pimpinan</td>
                <td class="certificate-subtext">Pengajar dari {{ $peserta->sertif->instansi_pengajar }}</td>
            </tr>
        </table>
    </div>
</body>

</html>

</body>
</html>