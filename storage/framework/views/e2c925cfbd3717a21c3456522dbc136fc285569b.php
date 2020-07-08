<?php $__env->startSection('content'); ?>

<div class="container">
        
<div class="row pt-4">

<div class="col-12">

<div class="card">
  <div class="card-header">Dashboard</div>
  <div class="card-body">

    <?php echo $__env->make('layouts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <ul>
      <li><a href="<?php echo e(route('laporan.index')); ?>">Semak Rekod Laporan</a></li>
      <li><a href="<?php echo e(route('laporan.create')); ?>">Hantar Laporan</a></li>
    </ul>

  </div>
</div>
    
</div><!-- /.col -->

</div><!-- /.row -->

</div><!-- /.container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\etugas\resources\views/template_pengguna/dashboard.blade.php ENDPATH**/ ?>