
<?php $__env->startSection('content'); ?>

<div class="content">
    <div class="container-fluid">
        <div class="row  p-3">

            <table class="table" id="example2">
                <thead>
                    <th>#</th>
                    <th>Parties</th>
                    <th>Results</th>
                    <th>Polling Unit No.</th>
                    <th>Polling Unit Name</th>
                    <th>Polling Unit Desc</th>
                </thead>
                <?php
                $i=1
                ?>
                <tbody>
                    <?php $__currentLoopData = $parties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo e($row->partyname); ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>

            </table>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vote\resources\views/src/allParties.blade.php ENDPATH**/ ?>