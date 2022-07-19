
<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $gedung; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($item->nama); ?></h5>
                <p class="card-text">Alamat <?php echo e($item->alamat); ?></p>
                <p class="card-text">Harga <?php echo e($item->harga); ?></p>

                

            </div>
            <!-- Button trigger modal -->
            <?php
                
                $status = DB::table('gedung')
                    ->join('booking', 'gedung.id', '=', 'booking.id_gedung')
                    ->where('booking.id_gedung', '=', $item->id)
                    ->get();
                
                // dd($status);
                
            ?>

            <a href="tambahboooking/<?php echo e($item->id); ?>"
                class="btn btn-primary  <?php echo e($item->status = 1 ? 'disabled-link' : 'badge-success'); ?> ">
                Pesan</a>

            <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span
                    class="badge badge-pill <?php echo e($item->status > 0 ? 'badge-success' : 'badge-danger'); ?> "><?php echo e($item->status > 0 ? 'Sudah Dipesan' : 'Belum Dipesan'); ?></span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\sewagedung\resources\views/home.blade.php ENDPATH**/ ?>