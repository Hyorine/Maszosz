<nav>
        <a href="/"><?php echo e(__('messages.MenuHome')); ?></a>
        <?php if(Auth::check()): ?>
                <a class="nav-link" href="<?php echo e(route('logout')); ?>"><?php echo e(__('messages.Menulogout')); ?></a>
        <?php else: ?>
                <a class="nav-link" href="<?php echo e(route('registration')); ?>"><?php echo e(__('messages.MenuReg')); ?></a>
                 <a class="nav-link" href="<?php echo e(route('login')); ?>" class="login"><?php echo e(__('messages.MenuLogin')); ?></a>
        <?php endif; ?>
</nav><?php /**PATH /home/vagrant/code/UrlapKeszito/resources/views/navbar.blade.php ENDPATH**/ ?>