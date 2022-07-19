
<?php $__env->startSection('content'); ?>
    <div class="container">
        
        <div class="card mt-5">
            <div class="card-header">
                List Gedung
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
                                <th scope="col">Alamat</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Aksi</th>


                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no = 1;
                            $date = date('Y-m-d');
                            ?>
                            <?php $__currentLoopData = $gedung; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                <tr>
                                    <th scope="row"> <?php echo e($no++); ?> </th>
                                    <td><?php echo e($row->nama_gedung); ?></td>
                                    <td><?php echo e($row->alamat); ?></td>
                                    <td><?php echo e($row->harga); ?></td>
                                    <td>
                                        <a href="/ambildata/<?php echo e($row->id); ?>" class="btn btn-warning"><i
                                                class="fa fa-pen"></i></a>
                                        <a href="/delete/<?php echo e($row->id); ?>" class="btn btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <!-- Modal tambah -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Gedung</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/insertdata" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="nama_gedung" name="nama_gedung"
                                    placeholder="Nama Gedung" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    placeholder="Alamat" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="harga" name="harga" placeholder="harga"
                                    required>
                            </div>
                            <div class="mb-3">
                                <input type="file" class="form-control" id="file" name="file" placeholder="File">
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
        <!-- Modal edit -->
        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Basis Data\sewagedung - Copy\resources\views/admin/gedung.blade.php ENDPATH**/ ?>