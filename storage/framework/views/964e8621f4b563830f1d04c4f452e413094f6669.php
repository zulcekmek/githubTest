<?php $__env->startSection('content'); ?>

<div class="container">
        
<div class="row pt-4">

<div class="col-12">

<div class="card">
  <div class="card-header"><?php echo $page_title; ?></div>
  <div class="card-body">

    <?php echo $__env->make('layouts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <p>
        <a href="<?php echo e(route('pentadbir.users.create')); ?>" class="btn btn-primary">
            Tambah User
        </a>
    </p>
  
  <table class="table table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>NRIC</th>
                <th>EMAIL</th>
                <th>JAWATAN</th>
                <th>PENEMPATAN</th>
                <th>TINDAKAN</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $senarai_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td scope="row"><?php echo e($user->id); ?></td>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->nric); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->jawatan); ?></td>
                <td><?php echo e($user->penempatan_id); ?></td>
                <td>
                    <a href="<?php echo e(route('pentadbir.users.edit', $user->id)); ?>" class="btn btn-info">
                        EDIT
                    </a>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-<?php echo e($user->id); ?>">
                        DELETE
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="modal-delete-<?php echo e($user->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">

                            <form method="POST" action="<?php echo e(route('pentadbir.users.destroy', $user->id)); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            Adakah anda pasti ingin menghapuskan rekod <?php echo e($user->name); ?>?
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">DELETE</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                        
                    
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    

    <?php echo $senarai_users->links(); ?>

    <?php echo $senarai_users->render(); ?>


  </div>
</div>
    
</div><!-- /.col -->

</div><!-- /.row -->

</div><!-- /.container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\etugas\resources\views/template_pentadbir/template_users/senarai.blade.php ENDPATH**/ ?>