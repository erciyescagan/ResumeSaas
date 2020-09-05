<?php echo e($user); ?>

<?php if(auth()->user()->id == $user->id): ?>
    <form action="<?php echo e('/logout'); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="submit">
    </form>
<?php endif; ?>
<?php /**PATH C:\wamp\www\ResumeSaas\resources\views/profile.blade.php ENDPATH**/ ?>
