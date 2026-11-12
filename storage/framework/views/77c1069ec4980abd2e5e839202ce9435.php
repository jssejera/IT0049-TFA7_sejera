<label for="full_name">Full name</label>
<input id="full_name" name="full_name" value="<?php echo e(old('full_name', $customer->full_name ?? '')); ?>" required maxlength="255">
<label for="email">Email address</label>
<input id="email" type="email" name="email" value="<?php echo e(old('email', $customer->email ?? '')); ?>" required maxlength="255">
<label for="phone">Phone</label>
<input id="phone" name="phone" value="<?php echo e(old('phone', $customer->phone ?? '')); ?>" maxlength="30">
<p class="hint">Full name and a valid email address are required.</p>
<?php /**PATH C:\xampp\htdocs\laravel-pos-eloquent_sejera\resources\views/customers/form.blade.php ENDPATH**/ ?>