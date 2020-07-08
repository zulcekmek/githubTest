<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Maklumat Laporan <?php echo e(auth()->user()->name); ?></div>

                <div class="card-body">

                    <?php echo $__env->make('layouts/alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>PERKARA</th>
                                    <th>TANDAKAN</th>
                                    <th>CATATAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $laporan->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td scope="row"><?php echo e($detail->perkara_id); ?></td>
                                    <td>
                                        <?php echo e($detail->perkara->butiran); ?>

                                        
                                    </td>
                                    <td>
                                        <?php echo e($detail->tandakan); ?>

                                    </td>
                                    <td>
                                        <?php echo e($detail->catatan); ?>

                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        </div>

                        <div class="card">
                            <div class="card-header">Catatan Tambahan</div>
                            <div class="card-body">
                                <?php echo e($laporan->catatan_tambahan); ?>

                            </div>
                            <div class="card-footer">
                                <a href="<?php echo e(route('pentadbir.laporan.index')); ?>" class="btn btn-default">Kembali</a>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\etugas\resources\views/template_pentadbir/template_laporan/show.blade.php ENDPATH**/ ?>