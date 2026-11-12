<?php $__env->startSection('content'); ?>
<p class="eyebrow">POS user records</p><h1>Add User</h1>
<div class="form-card">
    <?php echo $__env->make('partials.errors', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <form method="POST" action="<?php echo e(route('users.store')); ?>">
        <?php echo csrf_field(); ?>
        <?php echo $__env->make('users.form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <div class="actions"><button class="button" type="submit">Save user</button><a class="button secondary" href="<?php echo e(route('users.index')); ?>">Cancel</a></div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-pos-eloquent_sejera\resources\views/users/create.blade.php ENDPATH**/ ?>