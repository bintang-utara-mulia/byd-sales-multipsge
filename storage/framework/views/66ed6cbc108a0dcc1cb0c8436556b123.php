<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $__env->yieldContent('title', 'BYD Sales'); ?></title>

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body
    x-data="{
        bookingOpen: false,

        booking:{
            nama:'',
            whatsapp:'',
            kota:'',
            mobil:'',
            tanggal:'',
            jam:'',
            catatan:''
        }
    }"
    class="bg-white text-gray-800 font-[Poppins]">

    
    <?php echo $__env->make('sections.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>



    <?php echo $__env->make('sections.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
    <?php echo $__env->make('sections.whatsapp', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


</body>

</html><?php /**PATH C:\Users\HYPE AMD\Documents\byd-sales-MultiPage\resources\views/layouts/app.blade.php ENDPATH**/ ?>