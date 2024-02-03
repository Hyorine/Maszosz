<div >
    <div class="admininterface-row">
        <div>
             <?php echo $__env->make('adminUsers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="image-section">
        
        </div>
    </div>
    <div class="admininterface-row">
        <div class="image-section">
            <?php echo $__env->make('adminGalery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="image-section">
            <?php echo $__env->make('adminGaleryDelet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <div class="admininterface-row">
        <div class="monster-section"><?php echo $__env->make('adminMonster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
        <div><?php echo $__env->make('adminMonsterDelet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
    </div>
    <div class="admininterface-row">
        <div class="image-section">
            <?php echo $__env->make('adminNews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="image-section">
        <?php echo $__env->make('eventDelet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div><?php /**PATH /home/vagrant/code/maszosz/resources/views/adminbase.blade.php ENDPATH**/ ?>