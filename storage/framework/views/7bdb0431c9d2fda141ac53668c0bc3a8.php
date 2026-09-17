<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Produk</title>

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
        }
        .container {
            width: 90%;
            max-width: 600px;
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            text-align: center;
        }
        h1 {
            color: #d56989;
            margin-bottom: 25px;
            font-size: 30px;
        }
        p {
            font-size: 17px;
            line-height: 1.7;
            color: #555;
            margin-bottom: 30px;
        }
        strong {
            color: #d56989;
            font-size: 20px;
        }
        a {
            display: inline-block;
            text-decoration: none;
            background-color: #d56989;
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }
        a:hover {
            background-color: #f3cc97;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Detail Produk</h1>

        <p>
            Anda sedang melihat detail untuk produk dengan ID:
            <strong><?php echo e($id); ?></strong>
        </p>

        <a href="<?php echo e(url('/produk')); ?>">
            Kembali ke katalog
        </a>

    </div>

</body>
</html><?php /**PATH C:\laragon\www\minimarket\resources\views/produk/detail.blade.php ENDPATH**/ ?>