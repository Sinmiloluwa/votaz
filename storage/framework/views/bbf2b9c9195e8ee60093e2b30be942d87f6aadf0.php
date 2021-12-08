<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h3>Buy Movie Tickets N500.00</h3>
        <form method="POST" action="<?php echo e(route('pay')); ?>" accept-charset="UTF-8" class="form-horizontal" role="form">
    <div class="row" style="margin-bottom:40px;">
        <div class="col-md-8 col-md-offset-2">
            <p>
                <div>
                    ₦ 1000
                </div>
            </p>
            <input type="hidden" name="email" value="otemuyiwa@gmail.com"> 
            <!-- <input type="hidden" name="orderID" value="345"> -->
            <input type="hidden" name="amount" value="100000"> 
            <!-- <input type="hidden" name="quantity" value="3"> -->
            <input type="hidden" name="currency" value="NGN">
            <input type="hidden" name="metadata" value="<?php echo e(json_encode($array = ['key_name' => 'value',])); ?>" > 
            <input type="hidden" name="reference" value="<?php echo e(Paystack::genTranxRef()); ?>"> 
            
            
            <?php echo e(csrf_field()); ?> 

            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 

            <p>
                <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                    <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                </button>
            </p>
        </div>
    </div>
</form>

#
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppo\htdocs\voting\resources\views/home.blade.php ENDPATH**/ ?>