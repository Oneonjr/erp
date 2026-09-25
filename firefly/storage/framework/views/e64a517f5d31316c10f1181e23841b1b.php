<?php $__env->startSection('content'); ?>


    
    <?php if(session()->has('success')): ?>
        <div class="alert alert-success" role="alert">
            <strong><?php echo e(trans('firefly.flash_success')); ?></strong> <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger" role="alert">
            <ul>
            <?php $__currentLoopData = $errors->getBags(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $bag->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <div id="client-errors" class="alert alert-danger" role="alert" style="display:none;">
        <ul id="client-errors-list"></ul>
    </div>

    <div class="card mb-2">
        <div class="card-body register-card-body">
            <p class="login-box-msg"><?php echo e(trans('firefly.register_new_account')); ?></p>

            <form action="<?php echo e(route('register')); ?>" method="post">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="invite_code" value="<?php echo e($inviteCode ?? ''); ?>">
                <div class="input-group mb-2">
                    <input type="email" name="email" autofocus required value="<?php echo e($email); ?>" class="form-control"
                           placeholder="<?php echo e(trans('form.email')); ?>"/>
                    <div class="input-group-text"> <em class="bi bi-envelope"></em> </div>
                </div>
                <div class="input-group mb-2">
                    <input type="password" autocomplete="new-password" required class="form-control"
                           placeholder="<?php echo e(trans('form.password')); ?>" minlength="16" name="password"/>
                    <div class="input-group-text"> <em class="bi bi-lock"></em> </div>
                </div>
                <div class="input-group mb-2">
                    <input type="password" autocomplete="new-password" minlength="16" required class="form-control"
                           placeholder="<?php echo e(trans('form.password_confirmation')); ?>" name="password_confirmation"/>
                    <div class="input-group-text"> <em class="bi bi-lock"></em> </div>
                </div>
                <div class="row">
                    <div class="col-12">
                            <input type="checkbox" id="verify_password" name="verify_password" value="1">
                            <label for="verify_password">
                                <?php echo e(trans('form.verify_password')); ?>

                                <a href="#"
                                    data-bs-toggle="modal" data-bs-target="#passwordModal"
                                ><span
                                        class="bi bi-question-circle"></span></a>
                            </label>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-4 offset-8">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form>

            <p class="mb-1 mt-3">
                <a href="<?php echo e(route('login')); ?>"><?php echo e(trans('firefly.want_to_login')); ?></a>
            </p>
            <p class="mb-0">
                <a href="<?php echo e(route('password.reset.request')); ?>"><?php echo e(trans('firefly.forgot_my_password')); ?></a>
            </p>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->

    <?php echo $__env->make('partials.password-modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script nonce="<?php echo e($JS_NONCE); ?>">
        var route = '<?php echo e(route('register')); ?>';
        var passwordLengthError = '<?php echo e(blade_escape_js((string)trans('validation.min.string', ['attribute' => 'password', 'min' => 16]))); ?>';
        var passwordMatchError = '<?php echo e(blade_escape_js(trans('validation.confirmed', ['attribute' => 'password']))); ?>';
        var waitForVerify = '<?php echo e(blade_escape_js(trans('validation.verifying_password'))); ?>';
        var needSecurePassword = '<?php echo e(blade_escape_js(trans('validation.secure_password'))); ?>';
        </script>
    <script nonce="<?php echo e($JS_NONCE); ?>" src="v1/js/ff/auth/register.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.v3.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/resources/views/auth/register.blade.php ENDPATH**/ ?>