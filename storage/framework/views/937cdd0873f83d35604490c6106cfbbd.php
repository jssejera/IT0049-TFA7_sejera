<?php $__env->startSection('content'); ?>
<p class="eyebrow">POS user records</p><h1>Edit User</h1>
<div class="form-card">
    <?php echo $__env->make('partials.errors', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <form method="POST" action="<?php echo e(route('users.update', $user)); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
        <?php echo $__env->make('users.form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <label for="avatar">Profile picture</label>
        <input id="avatar" type="file" name="avatar" accept="image/jpeg,image/png,image/webp">
        <p class="hint">Optional. JPG, PNG, or WEBP only, maximum 2 MB. The image is resized to a 300 × 300 display-ready thumbnail.</p>
        <div class="actions"><button class="button" type="submit">Update user</button><a class="button secondary" href="<?php echo e(route('users.index')); ?>">Cancel</a></div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-pos-eloquent_sejera\resources\views/users/edit.blade.php ENDPATH**/ ?>