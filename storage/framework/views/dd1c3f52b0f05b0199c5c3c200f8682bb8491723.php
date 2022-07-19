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
            
            <div class="card mt-5">
                <div class="card-header">
                    List Booking
                    <div class="text-end">
                        <!-- Button trigger modal -->
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
                                    <th scope="col">Aksi</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $no = 1;
                                $date = date('Y-m-d');
                                ?>
                                <?php
                                    // $gedung = gedungModel::join('booking', 'gedung.id', '=', 'id_gedung')->get();
                                    $gedung = DB::table('gedung')
                                        ->join('booking', 'gedung.id', '=', 'id_gedung')
                                        ->get();
                                    // dd($gedung);
                                ?>
                                <?php $__currentLoopData = $gedung; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <tr>
                                        <th scope="row"> <?php echo e($no++); ?> </th>
                                        <td><?php echo e($row->nama_gedung); ?></td>
                                        <td><?php echo e($row->nama_penyewa); ?></td>
                                        <td><?php echo e($row->kontak); ?></td>
                                        <td><?php echo e($row->tgl_mulai); ?></td>
                                        <td><?php echo e($row->tgl_selesai); ?></td>
                                        <td>
                                            <span
                                                class="badge rounded-pill <?php echo e($row->status == 1 ? 'bg-danger' : 'bg-success'); ?>"><?php echo e($row->status == 2 ? 'dikonfirmasi' : 'dibooking'); ?></span>
                                        </td>
                                        <td>
                                            <a href="/ambildatabooking/<?php echo e($row->id); ?>" class="btn btn-warning"><i
                                                    class="fa fa-pen"></i></a>
                                        </td>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>
    <?php $__env->stopSection(); ?>


</body>

</html>

<?php echo $__env->make('template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\sewagedung - Copy\resources\views/admin/booking.blade.php ENDPATH**/ ?>