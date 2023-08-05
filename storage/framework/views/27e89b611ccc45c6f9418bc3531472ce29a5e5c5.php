
<?php $__env->startSection('content'); ?>

<div class="content">
    <div class="container-fluid">
        <div class="row  p-3">

            <div class="col-lg-8">
                <form action="<?php echo e(route('storeParty')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="col-12 py-2">
                        Result ID
                        <input type="text" name="result_id" id="" class="form-control">
                    </div>
                    <div class="col-12 py-2">
                        Polling Unit
                        <select name="polling_unit_uniqueid" class="form-control js-example-basic-multiple-limit" id="">
                            <option value="">Select Option</option>
                            <?php
                            $polling_unit=DB::table("polling_unit")->get();
                            ?>
                            <?php $__currentLoopData = $polling_unit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($row->uniqueid); ?>"><?php echo e($row->polling_unit_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-12 py-2">
                        Parties
                        <select name="party_abbreviation" class="form-control js-example-basic-multiple-limit" id="">
                            <option value="">Select Option</option>
                            <?php
                            $party=DB::table("party")->get();
                            ?>
                            <?php $__currentLoopData = $party; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($parties->partyid); ?>"><?php echo e($parties->partyid); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-12 py-2">
                        Party Score
                        <input type="text" name="party_score" id="" class="form-control">
                    </div>
                    <div class="col-12 py-2">
                        Enter By
                        <input type="text" name="entered_by_user" id="" class="form-control">
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vote\resources\views/src/storeParty.blade.php ENDPATH**/ ?>