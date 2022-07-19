;
<?php $__env->startSection('content'); ?>
    <div class="modal-body">
        <?php $__currentLoopData = $tambahbooking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="/insertdatabooking" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <input type="text" class="form-control" name="id_gedung" placeholder="" value="<?php echo e($item->id); ?>"
                        required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="nama_penyewa" name="nama_penyewa" placeholder="Nama"
                        required>
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" id="kontak" name="kontak" placeholder="No Hp" required>
                </div>
                <div class="mb-3">
                    <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai"
                        placeholder="Tanggal Mulai : yy-mm-dd" required>
                </div>
                <div class="mb-3">Tanggal Selesai
                    <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai"
                        placeholder="Tanggal Selesai : yy-mm-dd" required>
                </div>
                <div class="mb-3">
                    <input type="hidden" class="form-control" id="status" name="status" placeholder="Status" value="1">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\sewagedung\resources\views/content/tambahbooking.blade.php ENDPATH**/ ?>