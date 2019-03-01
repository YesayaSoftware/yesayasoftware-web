<?php $__env->startSection('auth-link'); ?>
    Already have an account?

    <a href="<?php echo e(route('login')); ?>" class="font-normal text-blue-light">
        Login
        <i class="fa fa-arrow-right"></i>
    </a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="mt-10">
        <h1 class="text-center text-white font-thin mb-4">
            Create an account
        </h1>

        <p class="text-center text-grey-dark text-sm font-normal">
            Start commenting and get notified for new updates
        </p>
    </div>

    <div class="mt-5 flex justify-content-center">
        <div class="w-1/3"></div>

        <div class="w-2/5 bg-white shadow-md rounded p-10">
            <form method="POST" action="<?php echo e(route('register')); ?>">
                <?php echo csrf_field(); ?>

                <div class="mb-3">
                    <div class="input-floating-icon-group">
                        <i class="fa fa-user"></i>

                        <input class="border text-grey-dark font-thin font-sm rounded w-full p-3<?php echo e($errors->has('name') ? ' border border-red' : ''); ?>"
                               name="name"
                               type="text"
                               placeholder="<?php echo e(__('Your name')); ?>"
                               value="<?php echo e(old('name')); ?>"
                               required
                               autofocus>
                    </div>

                    <?php if($errors->has('name')): ?>
                        <p class="text-red text-xs italic mt-2">
                            <?php echo e($errors->first('name')); ?>.
                        </p>
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <div class="input-floating-icon-group">
                        <i class="fa fa-envelope"></i>

                        <input class="border text-grey-dark font-thin font-sm rounded w-full p-3<?php echo e($errors->has('email') ? ' border border-red' : ''); ?>"
                               name="email"
                               type="text"
                               placeholder="<?php echo e(__('Email Address')); ?>"
                               value="<?php echo e(old('email')); ?>"
                               required>
                    </div>

                    <?php if($errors->has('email')): ?>
                        <p class="text-red text-xs italic mt-2">
                            <?php echo e($errors->first('email')); ?>.
                        </p>
                    <?php endif; ?>
                </div>

                <div class="mb-6">
                    <div class="input-floating-icon-group">
                        <i class="fa fa-lock"></i>

                        <input class="border rounded text-grey-dark font-thin font-sm rounded w-full p-3<?php echo e($errors->has('password') ? ' border border-red' : ''); ?>"
                               name="password"
                               type="password"
                               placeholder="Password (at least 8 chars)"
                               required>
                    </div>

                    <?php if($errors->has('password')): ?>
                        <p class="text-red text-xs italic mt-2">
                            <?php echo e($errors->first('password')); ?>.
                        </p>
                    <?php endif; ?>
                </div>

                <div class="mb-6">
                    <div class="input-floating-icon-group">
                        <i class="fa fa-lock"></i>

                        <input class="border rounded text-grey-dark font-thin font-sm rounded w-full p-3<?php echo e($errors->has('password_confirmation') ? ' border border-red' : ''); ?>"
                               name="password_confirmation"
                               type="password"
                               placeholder="Password (at least 8 chars)"
                               required>
                    </div>

                    <?php if($errors->has('password_confirmation')): ?>
                        <p class="text-red text-xs italic mt-2">
                            <?php echo e($errors->first('password_confirmation')); ?>.
                        </p>
                    <?php endif; ?>
                </div>

                <div class="form-check form-check-policies mb-5">
                    <label class="font-thin text-sm form-check-label" for="user_accepted_policies">
                        <input name="accepted_policies"
                               type="hidden"
                               value="0">

                        <input class="boolean required form-check-input"
                               label="false"
                               required="required"
                               data-title="Please confirm"
                               data-placement="left"
                               data-trigger="manual"
                               data-offset="0, 55"
                               aria-required="true"
                               type="checkbox"
                               value="1"
                               name="accepted_policies"
                               id="user_accepted_policies">


                        By creating an account you agree to receive notifications when you register your account for verification and when new content is published on Yesaya Software.
                    </label>
                </div>

                <div class="text-center">
                    <button type="submit" class="button-colored rounded-full shadow w-1/2 p-4 text-sm text-white font-medium tracking-wider">
                        <?php echo e(__('Register')); ?>


                        <i class="fa fa-arrow-right w-5"></i>
                    </button>
                </div>
            </form>

        </div>

        <div class="w-1/3"></div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>