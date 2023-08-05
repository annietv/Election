
<?php $__env->startSection('content'); ?>

<div class="content">
    <div class="container-fluid">
        <div class="row  p-3">

            <table class="table" id="example2">
                <thead>
                    <th>#</th>
                    <th>Ward</th>
                    <th>LGA</th>
                    <th>State</th>
                    <th>Polling Unit No.</th>
                    <th>Polling Unit Name</th>
                    <th>Polling Unit Desc</th>
                </thead>
                <?php
                $i=1
                ?>
                <tbody>
                    <?php $__currentLoopData = $polling_unit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $ward_id=$row->ward_id;
                    $lga_id=$row->lga_id;
                    $ward=DB::select("SELECT * FROM ward WHERE ward_id=?",[$ward_id]);
                    $lga=DB::select("SELECT * FROM lga WHERE lga_id=?",[$lga_id]);
                    ?>
                    <?php $__currentLoopData = $ward; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wards): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $lga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lgas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $state_id=$lgas->state_id;
                    $state=DB::select("SELECT * FROM states WHERE state_id=?",[$state_id]);
                    ?>
                    <?php $__currentLoopData = $state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $states): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo e($wards->ward_name); ?></td>
                        <td><?php echo e($lgas->lga_name); ?></td>
                        <td><?php echo e($states->state_name); ?></td>
                        <td><?php echo e($row->polling_unit_number); ?></td>
                        <td><?php echo e($row->polling_unit_name); ?></td>
                        <td><?php echo e($row->polling_unit_description); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vote\resources\views/src/polling-unit.blade.php ENDPATH**/ ?>