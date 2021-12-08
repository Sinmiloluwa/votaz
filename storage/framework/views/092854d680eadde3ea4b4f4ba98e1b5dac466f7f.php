<?php $__env->startComponent('mail::message'); ?>
# Email Verification

<b>Hello, you're a click away</b><br>

Kindly click the button below to verify your email and start voting

<?php $__env->startComponent('mail::button', ['url' => $details['url'],'color' => 'success']); ?>
Verify
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?><?php /**PATH C:\xamppo\htdocs\voting\resources\views/mail/verify.blade.php ENDPATH**/ ?>