<?php $__env->startSection('content'); ?>

<div class="container">
        
<div class="row pt-4">

<div class="col-12">

<div class="card">
  <div class="card-header">Senarai Laporan</div>
  <div class="card-body">

    <?php echo $__env->make('layouts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <p>
        <a href="<?php echo e(route('laporan.create')); ?>" class="btn btn-primary">
            Hantar Laporan
        </a>
    </p>
  
  <table class="table table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>PETUGAS</th>
                <th>PENEMPATAN</th>
                <th>CATATAN</th>
                <th>TARIKH</th>
                <th>TINDAKAN</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $senarai_laporan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $laporan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td scope="row"><?php echo e($laporan->id); ?></td>
                <td><?php echo e($laporan->user->name); ?></td>
                <td><?php echo e($laporan->penempatan->kod); ?></td>
                <td><?php echo e($laporan->catatan_tambahan); ?></td>
                <td><?php echo e($laporan->created_at); ?></td>
                <td>
                    <a href="<?php echo e(route('laporan.show', $laporan->id)); ?>" class="btn btn-info">
                        Lihat Detail
                    </a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    

    <?php echo $senarai_laporan->links(); ?>


  </div>
</div>
    
</div><!-- /.col -->

</div><!-- /.row -->

</div><!-- /.container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\etugas\resources\views/template_pengguna/template_laporan/index.blade.php ENDPATH**/ ?>