<?php $__env->startSection('content'); ?>
<p class="eyebrow">Customer records</p><h1>Edit Customer</h1>
<div class="form-card">
    <?php echo $__env->make('partials.errors', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <form method="POST" action="<?php echo e(route('customers.update', $customer)); ?>">
        <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
        <?php echo $__env->make('customers.form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <div class="actions"><button class="button" type="submit">Update customer</button><a class="button secondary" href="<?php echo e(route('customers.index')); ?>">Cancel</a></div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-pos-eloquent_sejera\resources\views/customers/edit.blade.php ENDPATH**/ ?>