
<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('profile.update', $profile->id)); ?>" method="POST" class="container">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div class="d-flex align-items-center justify-content-center my-4 w-100">
            <h1>Edit Profile</h1>
        </div>

        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <?php if(!empty($profile)): ?>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="<?php echo e($profile->name); ?>" required>
                                <?php else: ?>
                                    <input type="text" name="name" id="name" class="form-control">
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="gender" class="form-label">Gender</label>
                                <select name="gender" id="gender" aria-label="Default select example"
                                    class="form-select">
                                    <option value="" hidden></option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-3">
                            <div class="form-group">
                                <label for="place_of_birth" class="form-label">Place Of Birth</label>
                                <select name="place_of_birth" id="place_of_birth" aria-label="Default select example"
                                    class="form-select">
                                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-3">
                            <div class="form-group">
                                <label for="date_of_birth" class="form-label">Date Of Birth</label>
                                <?php if(!empty($profile->date_of_birth)): ?>
                                    <input type="date" name="date_of_birth" id="date_of_birth" class="form-control"
                                        value="<?php echo e($profile->date_of_birth); ?>">
                                <?php else: ?>
                                    <input type="date" name="date_of_birth" id="date_of_birth" class="form-control">
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="col-lg-12 mt-3">
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <?php if(!empty($profile->address)): ?>
                                    <textarea name="address" id="address" rows="3" class="form-control"><?php echo e($profile->address); ?></textarea>
                                <?php else: ?>
                                    <textarea name="address" id="address" rows="3" class="form-control"></textarea>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group text-end w-100 mt-3">
                            <button type="submit" class="btn btn-success position-relative px-4">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js-extra'); ?>
    <script>
        $(document).ready(function() {
           $('#gender').find('option[value="<?php echo e($profile->gender); ?>"]').prop('selected', 'selected').change();
           $('#place_of_birth').find('option[value="<?php echo e($profile->city->id); ?>"]').prop('selected', 'selected').change();
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\SMT5\Web Prog\GSLC\resources\views/famdiner/editProfile.blade.php ENDPATH**/ ?>