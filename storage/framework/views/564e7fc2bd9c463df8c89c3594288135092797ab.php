
<?php $__env->startSection('content'); ?>

<div class="content">
    <div class="container-fluid">
        <div class="row  p-3">

            <div class="col-lg-8">
                <div class="alert-success">

                </div>
                <form action="<?php echo e(route('storepollingUnit')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="col-12 py-2">
                        Polling Unit ID
                        <input type="text" name="polling_unit_id" id="" class="form-control">
                    </div>
                    <div class="col-12 py-2">
                        Ward ID
                        <input type="text" name="ward_id" id="" class="form-control">
                    </div>
                    <div class="col-12 py-2">
                        LGA ID
                        <input type="text" name="lga_id" id="" class="form-control">
                    </div>
                    <div class="col-12 py-2">
                        Ward
                        <select name="uniquewardid" class="form-control js-example-basic-multiple-limit" id="">
                            <option value="">Select Option</option>
                            <?php
                            $ward=DB::table("ward")->get();
                            ?>
                            <?php $__currentLoopData = $ward; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($rows->uniqueid); ?>"><?php echo e($rows->ward_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-12 py-2">
                        Polling Unit Number
                        <input type="text" name="polling_unit_number" id="" class="form-control">
                    </div>
                    <div class="col-12 py-2">
                        Polling Unit Name
                        <input type="text" name="polling_unit_name" id="" class="form-control">
                    </div>
                    <div class="col-12 py-2">
                        Polling Unit Description
                        <textarea name="polling_unit_description" class="form-control" id="compose-textarea" cols="30"
                            rows="10"></textarea>
                    </div>

                    <div class="col-12 py-2">
                        Latitude
                        <input type="text" name="lat" id="" class="form-control">
                    </div>
                    <div class="col-12 py-2">
                        Longitude
                        <input type="text" name="long" id="" class="form-control">
                    </div>
                    <div class="col-12 py-2">

                        <button class="btn btn-primary" type="submit"><i class="fa fa-plus-square"></i> Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vote\resources\views/src/addPolling.blade.php ENDPATH**/ ?>