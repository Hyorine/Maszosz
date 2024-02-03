<div class="admin-galery-delet-div">
        <h1><?php echo e(__('messages.admingaleryDeleth1')); ?></h1>
        <?php if(session('imageDeletsuccess')): ?>
            <p style="color:green;"><?php echo e(session('imageDeletsuccess')); ?></p>
        <?php endif; ?>
        <?php if(session('imageDeleterror')): ?>
            <p style="color:red;"><?php echo e(session('imageDeleterror')); ?></p>
        <?php endif; ?>
    <div class="table-fixed-div">
        <table class="table table-bordered tabel-fixed">
            <thead >
                <tr >
                    <th><?php echo e(__('messages.admingaleryDeletneve')); ?></th>
                    <th><?php echo e(__('messages.admingaleryDelettorol')); ?></th>
                </tr>
            </thead >
            <tbody>
                <?php $__currentLoopData = $imageNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imageName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><a href="<?php echo e(asset(str_replace(public_path(), '', $imageName))); ?>" target="_blank"><?php echo e(asset(str_replace(public_path(), '', $imageName))); ?></a></td>
                        <td>
                            <form action="<?php echo e(route('delete.image')); ?>" method="post" onsubmit="return confirm('Are you sure?')">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="imageName" value="<?php echo e(basename($imageName)); ?>">
                                <button type="submit"><?php echo e(__('messages.admingaleryDeletGomb')); ?></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div><?php /**PATH /home/vagrant/code/maszosz/resources/views/adminGaleryDelet.blade.php ENDPATH**/ ?>