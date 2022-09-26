<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Peminjaman</title>
</head>
<body>

    <style>
        .kop-surat{
            text-align: center;
        }
    </style>
    @auth
    <form action="/riwayat/downloadpf/{{ $data->id }}" method="GET"></form>
    <div class="kop-surat">
        <h3>SURAT PERMOHONAN</h3>
        <h3>PEMINJAMAN BARANG INVENTARIS BADAN EKSEKUTIF MAHASISWA FASILKOM</h3>
        <h3>UNIVERSITAS SINGAPERBANGSA KARAWANG</h3>
        <p>Jl. HS.Ronggo Waluyo, Puseurjaya, Kec. Telukjambe Tim., Kabupaten Karawang, Jawa Barat 41361</p>
    </div>
    <hr>
    <p style="text-align:right">Karawang , {{ $data->tanggal_pinjam }}</p>
    <table>
        <h4 style="margin-bottom: 5px;">Peminjam</h4>
        <tr>
            <td>Nama</td>
            <td>: {{ Auth::user()->nama }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: {{ Auth::user()->email }}</td>
        </tr>
    </table>
    <p>Yth.</p>
    <p style="font-weight: bold;">Ketua BEM Fasilkom</p>
    <p style="font-weight: bold;">Universitas Singaperbangsa Karawang</p>
    <p style="margin-bottom:5px;">di Tempat.</p>
    <p>Dengan hormat,</p>
    <p>Saya menyatakan peminjaman barang inventaris milik BEM Fasilkom dengan ketentukan sebagai berikut :</p>
    
    <table style="margin-left: 20px;">
        <tr>
            <td>Nama Barang</td>
            <td>: {{ $data->barang }}</td>
        </tr>
        <tr>
            <td>Jumlah Barang</td>
            <td>: {{ $data->jumlah }}</td>
        </tr>
        <tr>
            <td>Durasi Pinjam</td>
            <td>: {{ $data->durasi }} Hari</td>
        </tr>
        <tr>
            <td>Tanggal Pinjam</td>
            <td>: {{ $data->tanggal_pinjam }}</td>
        </tr>
    </table>

    <p>Demikian surat permohonan peminjaman barang ini saya/kami sampaikan, dan saya/kami ucapkan terima kasih.</p>
    <br>
    <br>
    <p style="text-align: center;">Peminjam <span style="margin-left:150px">Ketua BEM Fasilkom</span></p>
    <p style="text-align:center; font-weight: bold;margin-top:150px">{{ Auth::user()->nama }} <span style="margin-left:150px;">Nama Ketua BEM Fasilkom</span></p>
    @endauth
</body>
</html>