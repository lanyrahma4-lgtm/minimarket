<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
</head>
<body>

    <h1>Validation</h1>

    <?php if($errors->any()): ?>
        <div>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="/submit-form" method="POST">
        <?php echo csrf_field(); ?>

        <label>Nama:</label>
        <input type="text" name="name">
        <button type="submit">Cek Validasi</button>
        <br><br>

    </form>

</body>
</html><?php /**PATH C:\laragon\www\minimarket\resources\views/form.blade.php ENDPATH**/ ?>