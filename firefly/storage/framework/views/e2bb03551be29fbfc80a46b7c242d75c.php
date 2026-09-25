<div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <?php echo e(__('firefly.secure_pw_title')); ?>

                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?php echo e(__('firefly.close')); ?>"></button>
            </div>
            <div class="modal-body">
                <p>
                    <?php echo e(__('firefly.secure_pw_history')); ?>

                </p>
                <p>
                    <?php echo e(__('firefly.secure_pw_ff')); ?>

                </p>
                <p>
                    <?php echo e(__('firefly.secure_pw_check_box')); ?>

                </p>

                <h4><?php echo e(__('firefly.secure_pw_working_title')); ?></h4>
                <p>
                    <?php echo __('firefly.secure_pw_working'); ?>

                </p>
                <h4><?php echo e(__('firefly.secure_pw_should')); ?></h4>
                <p>
                    <?php echo e(__('firefly.secure_pw_long_password')); ?>

                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo e(__('firefly.close')); ?></button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/partials/password-modal.blade.php ENDPATH**/ ?>