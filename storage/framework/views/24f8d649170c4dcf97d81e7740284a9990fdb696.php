<?php $__env->startSection('content'); ?>
    <div class="bg-white rounded shadow">
        <div class="border-b py-8 font-bold text-black text-center text-xl tracking-widest uppercase">
            Login
        </div>

        <form class="bg-grey-lightest px-10 py-10" method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <input class="border w-full p-3<?php echo e($errors->has('email') ? ' border border-red' : ''); ?>"
                       name="email"
                       type="text"
                       placeholder="<?php echo e(__('E-Mail Address')); ?>"
                       value="<?php echo e(old('email')); ?>"
                       required
                       autofocus>

                <?php if($errors->has('email')): ?>
                    <p class="text-red text-xs italic mt-2">
                        <?php echo e($errors->first('email')); ?>.
                    </p>
                <?php endif; ?>
            </div>

            <div class="mb-6">
                <input class="border w-full p-3<?php echo e($errors->has('password') ? ' border border-red' : ''); ?>"
                       name="password"
                       type="password"
                       placeholder="**************"
                       required>

                <?php if($errors->has('password')): ?>
                    <p class="text-red text-xs italic mt-2">
                        <?php echo e($errors->first('password')); ?>.
                    </p>
                <?php endif; ?>
            </div>

            <div class="flex">
                <button type="submit" class="bg-yesayasoftware hover:bg-blue-dark w-full p-4 text-sm text-white uppercase font-bold tracking-wider">
                    <?php echo e(__('Login')); ?>

                </button>
            </div>
        </form>

        <div class="border-t px-10 py-6">
            <div class="flex justify-between">
                <a href="#"
                   class="font-bold text-primary hover:text-primary-dark no-underline">
                    Don't have an account?
                </a>

                <a href="<?php echo e(route('password.request')); ?>"
                   class="text-grey-darkest hover:text-black no-underline">
                    Forgot Password?
                </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>