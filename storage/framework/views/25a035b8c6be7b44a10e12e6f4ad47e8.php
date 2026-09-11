<?php $__env->startSection('title', 'BYD Sales | Mobil Listrik Impian Anda'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('sections.hero', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('sections.about', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('sections.product', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('sections.promo', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('sections.testimonial', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('sections.faq', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('sections.contact', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php if(session('success')): ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    alert("<?php echo e(session('success')); ?>");
    if ("<?php echo e(session('wa')); ?>") window.open("<?php echo e(session('wa')); ?>", '_blank');
});
</script>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\HYPE AMD\Documents\byd-sales-MultiPage\resources\views/home.blade.php ENDPATH**/ ?>