<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Produk Minimarket</title>

    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #fff7fa;
            margin: 0;
            padding: 40px;
            color: #333;
        }
        h2 {
            text-align: center;
            color: #c05a7a;
            margin-bottom: 25px;
            font-size: 28px;
        }
        h1 {
            text-align: center;
            color: #808080;
            margin-bottom: 15px;
            font-size: 15px;
        }

        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(192, 90, 122, 0.12);
        }
        thead {
            background-color: #e9a8ba;
            color: white;
        }
        th {
            padding: 14px 16px;
            font-size: 15px;
            font-weight: 600;
        }
        td {
            padding: 14px 16px;
            text-align: center;
            border-bottom: 1px solid #f3dce3;
            font-size: 14px;
        }
        tbody tr {
            transition: 0.2s;
        }
        tbody tr:hover {
            background-color: #fff1f5;
        }
        tbody tr:last-child td {
            border-bottom: none;
        }
        td img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid #f0d3dc;
        }
    </style>
</head>

<body>
    <h2>Daftar Produk Cemil.in</h2>
    <h1>Prabowo pernah beli di sini</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>SKU</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($produk as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['sku'] }}</td>
                <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                <td>{{ $item['stok'] }}</td>
                <td><img src="{{ asset('images/' . $item['gambar']) }}"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>