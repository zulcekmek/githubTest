<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('Daftar Pengguna')); ?></div>

                <div class="card-body">

                    <?php echo $__env->make('layouts/alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <form method="POST" action="<?php echo e(route('laporan.store')); ?>">
                        <?php echo csrf_field(); ?>

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
                                <?php $__currentLoopData = $senarai_perkara; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perkara): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td scope="row"><?php echo e($perkara->id); ?></td>
                                    <td>
                                        <?php echo e($perkara->butiran); ?>

                                        <input type="hidden" name="perkara[]" value="<?php echo e($perkara->id); ?>">
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <select name="tandakan[<?php echo e($perkara->id); ?>]" class="form-control <?php $__errorArgs = ['tandakan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                <option value="">-- Sila Pilih --</option>
                                                <option value="YA">YA</option>
                                                <option value="TIDAK">TIDAK</option>
                                            </select>
                                            <?php $__errorArgs = ['tandakan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="catatan[<?php echo e($perkara->id); ?>]" class="form-control <?php $__errorArgs = ['catatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                            <?php $__errorArgs = ['catatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        </div>

                        <div class="card">
                            <div class="card-header">Catatan Tambahan</div>
                            <div class="card-body">
                                <div class="form-group">
                                    <textarea name="catatan_tambahan" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo e(route('laporan.index')); ?>" class="btn btn-default">Kembali</a>
                                <button type="submit" class="btn btn-primary">
                                    Hantar
                                </button>
                            </div>
                        </div>
                        

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\etugas\resources\views/template_pengguna/template_laporan/create.blade.php ENDPATH**/ ?>