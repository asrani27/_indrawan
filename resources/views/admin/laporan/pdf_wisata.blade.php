<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
</head>

<body>

    <table width="100%">
        <tr>
            <td width="15%">

            </td>
            <td style="text-align: center;" width="60%">
                <font size="24px"><b>RANCANG BANGUN APLIKASI OBJEK WISATA<br /> PADA DINAS PARIWISATA <br />PROVINSI
                        KALIMANTAN SELATAN <br />BERBASIS WEB</b></font>
            </td>
            <td width="15%">
            </td>
        </tr>
    </table>
    <hr>
    <h3 style="text-align: center">LAPORAN DATA WISATA<br>
    </h3>
    <br />
    <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Tgl</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>isi</th>
        </tr>
        @php
        $no =1;
        @endphp

        @foreach ($data as $key => $item)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{\Carbon\Carbon::parse($item->created_at)->format('d M Y H:i:s')}}</td>
            <td>
                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('/storage/gambar/'.$item->gambar))) }}"
                    width="200px">
            </td>
            <td>{{$item->judul}}</td>
            <td width="50%">{!!$item->isi!!}</td>
        </tr>
        @endforeach
    </table>

    <table width="100%">
        <tr>
            <td width="60%"></td>
            <td></td>
            <td><br />Banjarmasin, {{\Carbon\Carbon::now()->translatedFormat('d F Y')}}<br />
                Kepala Dinas <br />Provinsi Kalimantan Selatan<br /><br /><br /><br /><br />

                <u>-</u><br />
                NIP.
            </td>
        </tr>
    </table>
</body>

</html>