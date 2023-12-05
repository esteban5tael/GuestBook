<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo $__env->yieldContent('title', ''); ?></title>

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/materialize.min.css')); ?>">
    <link href="<?php echo e(asset('assets/css/icon.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/datatables.min.css')); ?>">
    <link rel="icon" href="<?php echo e(asset('assets/img/favicon.ico')); ?>" type="image/x-icon">

    <?php echo $__env->yieldContent('styles'); ?>
</head>

<body>
    <header>
        <?php echo $__env->make('layouts.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div>

                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </div>


    </main>

    <?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(asset('assets/js/materialize.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jq.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatables.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>
<?php /**PATH D:\xampp\htdocs\php\laravel\facultadAutodidacta\GuestBook\resources\views/layouts/base.blade.php ENDPATH**/ ?>