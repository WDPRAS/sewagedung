
<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $gedung; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form action="/updatedatabooking/<?php echo e($d->id); ?>" method="post" enctype="multipart/form-row">
            <?php echo csrf_field(); ?>
            <div class="container">
                <div class=" text-center mt-5 ">
                    <h1>Edit Status Booking Vanue</h1>
                </div>
                <div class="row ">
                    <div class="col-lg-7 mx-auto">
                        <div class="card mt-2 mx-auto p-4 bg-light">
                            <div class="card-body bg-light">
                                <div class="container">
                                    <form id="contact-form" role="form">
                                        <div class="controls">
                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label>Name Vanue*</label>
                                                        <input type="text" name="nama_gedung"
                                                            value="<?php echo e($d->nama_gedung); ?>" class="form-control"
                                                            placeholder="Please enter your name *" required="required">

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Name Penyewa *</label>
                                                        <input type="text" name="nama_penyewa"
                                                            value="<?php echo e($d->nama_penyewa); ?>" class="form-control"
                                                            placeholder="Please enter your contact *" required="required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Status </label>
                                                        <input type="text" name="status" value="<?php echo e($d->status); ?>"
                                                            class="form-control" placeholder="Please enter your date *"
                                                            required="required">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <div class="card-body">
                                                            <h6 class="card-subtitle mb-2 text-muted">Note Status</h6>
                                                            <h6 class="card-subtitle mb-2 text-muted">1 = Dibooked</h6>
                                                            <h6 class="card-subtitle mb-2 text-muted">2 = Dikonfirmasi</h6>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.8 -->
                    </div>
                    <!-- /.row-->
                </div>
            </div>

        </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\sewagedung - Copy\resources\views/admin/editbooking.blade.php ENDPATH**/ ?>