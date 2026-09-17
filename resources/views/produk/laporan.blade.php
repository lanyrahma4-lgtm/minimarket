<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $data['judul'] }}</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f9d1d9;
            color: #333;
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 40px 20px;
        }
        .container {
            width: 95%;
            max-width: 1200px;
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }
        h1 {
            color: #838f58;
            margin-bottom: 10px;
            font-size: 30px;
            text-align: center;
        }
        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 950px;
        }
        th {
            background-color: #838f58;
            color: white;
            padding: 14px 12px;
            text-align: center;
            font-size: 14px;
        }
        td {
            padding: 13px 12px;
            border-bottom: 1px solid #eee;
            font-size: 14px;
        }
        tbody tr:hover {
            background-color: #fff5f8;
        }
        .center {
            text-align: center;
        }
        .right {
            text-align: right;
        }
        .stock {
            color: #838f58;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>{{ $data['judul'] }}</h1>

        <div class="table-wrapper">

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Periode Penjualan</th>
                        <th>Nama Produk</th>
                        <th>SKU</th>
                        <th>Total Transaksi</th>
                        <th>Produk Terjual</th>
                        <th>Total Pendapatan</th>
                        <th>Sisa Stok</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($data['detail_produk'] as $produk)

                    <tr>
                        <td class="center">{{ $produk['no'] }}</td>
                        <td>{{ $produk['periode_penjualan'] }}</td>
                        <td>{{ $produk['nama_produk'] }}</td>
                        <td class="center">{{ $produk['sku'] }}</td>
                        <td class="center">{{$produk['total_transaksi'] }}</td>
                        <td class="center">{{ $produk['total_produk_terjual'] }}</td>
                        <td class="right">Rp {{ number_format($produk['total_pendapatan'], 0, ',', '.') }}</td>
                        <td class="center stock">{{ $produk['stok_tersisa'] }}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</body>
</html>