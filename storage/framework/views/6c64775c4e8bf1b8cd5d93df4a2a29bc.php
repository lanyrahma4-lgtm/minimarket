<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #fbd9e5;
            color: #333;
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }
        .container {
            width: 100%;
            max-width: 900px;
            background-color: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }
        h1 {
            text-align: center;
            color: #d56989;
            margin-bottom: 30px;
            font-size: 28px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 10px;
        }
        th {
            background-color: #d56989;
            color: white;
            padding: 14px;
            text-align: left;
        }
        td {
            padding: 14px;
            border-bottom: 1px solid #e5e7eb;
        }
        tbody tr:hover {
            background-color: #f8fafc;
        }
        tbody tr:last-child td {
            border-bottom: none;
        }
        td:first-child {
            font-weight: bold;
            color: #d56989;
        }
        a {
            display: inline-block;
            text-decoration: none;
            background-color: #d56989;
            color: white;
            padding: 8px 15px;
            border-radius: 6px;
            font-size: 14px;
            transition: 0.3s;
        }
        a:hover {
            background-color: #f3cc97;
            transform: translateY(-1px);
        }
        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }
            h1 {
                font-size: 23px;
            }
            th, td {
                padding: 10px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Katalog Produk: <?php echo e($kategori); ?></h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $__currentLoopData = $daftarProduk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item['id']); ?></td>
                    <td><?php echo e($item['nama']); ?></td>
                    <td>Rp <?php echo e(number_format($item['harga'], 0, ',', '.')); ?></td>
                    <td>
                        <a href="<?php echo e(url('/produk/' . $item['id'])); ?>">
                            Lihat Detail
                        </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

    </div>

</body>
</html>
<?php /**PATH C:\laragon\www\minimarket\resources\views/produk/index.blade.php ENDPATH**/ ?>