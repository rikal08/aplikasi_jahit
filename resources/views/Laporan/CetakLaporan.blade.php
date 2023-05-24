<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>

    <table style="width:100%" align="left">


        <tr>
            {{-- <td style="width: 150px"> <img width="110px"
                    src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('template/img/bg.png'))) }}"
                    alt="" /></td> --}}
            <td style="line-height: 10px">
                <h2>JASA PENJAHIT PAKAIAN</h2>
                <h1>CV. AGUS JAYA TAILOR</h1>
                <p>Jalan Raya Ampang No.41, Kelurahan Alai Parak Kopi (+62) 8674534567 | agusjayatailor@gmail.com</p>
                <h3>Laporan Pemesanan</h3>
            </td>
        </tr>
    </table>
    <hr style="border: 2px solid #222">
    <br>
    <span style="background-color: #bbb;padding: 10px; width:100%;color:#fff;text-align:center;">Periode Laporan:
        {{ $bulan }} / {{ $tahun }}</span>
    <br><br><br>
    <table id="customers">
        <tr>
            <th>No</th>
            <th>No Transaksi</th>
            <th>Tanggal Pemesanan</th>
            <th>Nama Pelanggan</th>
            <th>Total Harga</th>
            <th>Status</th>
        </tr>
        @php
            $no = 1;
            $total =0;
        @endphp
        @foreach ($pemesanan as $item)
        {{ $total = $total+$item->total_harga }}
        <tr>
            <td>{{ $no++; }}</td>
            <td>{{ $item->no_transaksi; }}</td>
            <td>{{ $item->created_at; }}</td>
            <td>{{ $item->name; }}</td>
            <td>{{ $item->status }}</td>
            <td>{{ number_format($item->total_harga) }}</td>
      
        </tr>
        
        @endforeach
            <tr>
              <td colspan="5">Total Pendapatan</td>
              <td>Rp. {{ number_format($total,2) }}</td>
            </tr>

    </table>
    <br><br><br>
    <table style="width: 100%" align="center">
        <tr>
            <td style="text-align: center">Dilaporan Oleh: <br><br><br><br>(................................)</td>
            <td style="text-align: center">Padang, {{ date('d-m-Y') }} <br> Mengetahui Pimpinan: <br><br><br><br>(................................)</td>
        </tr>
    </table>

</body>

</html>
