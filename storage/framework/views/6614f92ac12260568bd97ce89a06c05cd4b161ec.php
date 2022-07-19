<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->



    <title>Sewa Gedung</title>
</head>

<body>
    
    <?php $__env->startSection('content'); ?>
        <div class="container">
            <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e($message); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <div class="card mt-5">
                <div class="card-header">
                    List Booking
                    <div class="text-end">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Tambah
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <table id="add-row" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Gedung</th>
                                    <th scope="col">Nama Penyewa</th>
                                    <th scope="col">Kontak</th>
                                    <th scope="col">Tanggal Mulai</th>
                                    <th scope="col">Tanggal Selesai</th>
                                    <th scope="col">Status</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $no = 1;
                                $date = date('Y-m-d');
                                ?>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        
                                        if ($row->status != 'expired') {
                                            if ($date > $row->selesai) {
                                                DB::table('mous')
                                                    ->where('id', $row->id)
                                                    ->update([
                                                        'status' => 'expired',
                                                    ]);
                                        
                                                $row->status = 'expired';
                                            }
                                        }
                                    ?>
                                    <tr>
                                        <th scope="row"> <?php echo e($no++); ?> </th>
                                        <td><?php echo e($row->judul); ?></td>
                                        <td><?php echo e($row->judul); ?></td>
                                        <td><?php echo e($row->pihak); ?></td>
                                        <td><?php echo e($row->mulai); ?></td>
                                        <td><?php echo e($row->selesai); ?></td>
                                        <td>
                                            <span
                                                class=" <?php echo e($row->status === 'aktif' ? 'badge rounded-pill bg-success' : 'badge rounded-pill bg-danger'); ?> badge rounded-pill">
                                                <?php echo e($row->status); ?></span>
                                        </td>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/insertdata" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="pihak" name="pihak" placeholder="Pihak"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <input type="date" class="form-control" id="mulai" name="mulai"
                                        placeholder="Tanggal Mulai : yy-mm-dd" required>
                                </div>
                                <div class="mb-3">
                                    <input type="date" class="form-control" id="selesai" name="selesai"
                                        placeholder="Tanggal Selesai : yy-mm-dd" required>
                                </div>
                                <div class="mb-3">
                                    <input type="file" class="form-control" id="file" name="file" placeholder="File">
                                </div>
                                <div class="mb-3">
                                    <input type="hidden" class="form-control" id="status" name="status"
                                        placeholder="Status" value="aktif">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    <?php $__env->stopSection(); ?>


</body>

</html>

<?php echo $__env->make('template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\sewagedung\resources\views/admin/homeadmin.blade.php ENDPATH**/ ?>