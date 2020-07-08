<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php if(session('mesej-sukses')): ?>

    <div class="alert alert-success">
        <?php echo e(session('mesej-sukses')); ?>

    </div>

<?php endif; ?>

<?php if(session('mesej-gagal')): ?>

    <div class="alert alert-danger">
        <?php echo e(session('mesej-gagal')); ?>

    </div>

<?php endif; ?><?php /**PATH C:\laragon\www\etugas\resources\views/layouts/alerts.blade.php ENDPATH**/ ?>