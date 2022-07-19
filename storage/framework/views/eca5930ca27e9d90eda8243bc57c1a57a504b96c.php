
<?php $__env->startSection('content'); ?>
    <div class="modal-body">
        <?php $__currentLoopData = $tambahbooking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="/insertdatabooking" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <input type="hidden" class="form-control" name="id_gedung" placeholder="" value="<?php echo e($item->id); ?>"
                        required>
                </div>
                <div class="container">
                    <div class=" text-center mt-5 ">
                        <h1>Form Booking Vanue</h1>
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
                                                            <label>Name *</label>
                                                            <input type="text" name="nama_penyewa" class="form-control"
                                                                placeholder="Please enter your name *" required="required">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Contact *</label>
                                                            <input type="text" name="kontak" class="form-control"
                                                                placeholder="Please enter your contact *"
                                                                required="required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Tanggal Mulai </label>
                                                            <input type="date" name="tgl_mulai" class="form-control"
                                                                placeholder="Please enter your date *" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Tanggal Selesai </label>
                                                            <input type="date" name="tgl_selesai" class="form-control"
                                                                placeholder="Please enter your date *" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="hidden" class="form-control" id="status"
                                                            name="status" placeholder="Status" value="1">
                                                    </div>
                                                    <div class>

                                                        <button type="submit"
                                                            class="btn btn-primary tambahbooking">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
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
    </div>
    <script>
        $('.tambahbooking').click(function() {
            swal({
                title: "Good job!",
                text: "You clicked the button!",
                icon: "success",
                button: "Aww yiss!",
            });
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\sewagedung - Copy\resources\views/content/tambahbooking.blade.php ENDPATH**/ ?>