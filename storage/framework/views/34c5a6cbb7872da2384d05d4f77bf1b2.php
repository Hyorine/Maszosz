<nav class="nav">
        <a href="/"><?php echo e(__('messages.MenuHome')); ?></a>
        <a class="nav-link" href="<?php echo e(route('galleryShow')); ?>"><?php echo e(__('messages.MenuGaleri')); ?></a>
        <a class="nav-link" href="<?php echo e(route('contacts')); ?>"><?php echo e(__('messages.MenuContent')); ?></a> 
        <?php if(Auth::check()): ?>
                <!-- <a>forum</a>-->
                <a class="nav-link" href="<?php echo e(route('encyclopedia.showMonsters')); ?>"><?php echo e(__('messages.MenuEnciklopedia')); ?></a>
                 <a  class="nav-link" href="<?php echo e(route('eventsShow')); ?>"><?php echo e(__('messages.MenuEvent')); ?></a> 
                <?php if(session('roles')[0]  < 3): ?>
                <a class="nav-link" href="<?php echo e(route('admin')); ?>"><?php echo e(__('messages.Adminfelulet')); ?></a>
                <?php endif; ?>
                <a class="nav-link" href="<?php echo e(route('logout')); ?>"><?php echo e(__('messages.Menulogout')); ?></a>
        <?php else: ?>
                <a class="nav-link" href="<?php echo e(route('registration')); ?>"><?php echo e(__('messages.MenuReg')); ?></a>
                 <a class="nav-link" href="<?php echo e(route('login')); ?>" class="login"><?php echo e(__('messages.MenuLogin')); ?></a>
        <?php endif; ?>
</nav><?php /**PATH /home/vagrant/code/maszosz/resources/views/navbar.blade.php ENDPATH**/ ?>