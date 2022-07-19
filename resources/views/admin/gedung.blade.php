@extends('template.main')
@section('content')
    <div class="container">
        {{-- @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif --}}
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
                            @foreach ($gedung as $row)
                                {{-- @php
                                        
                                        if ($row->status != 'expired') {
                                            if ($date > $row->selesai) {
                                                DB::table('')
                                                    ->where('id', $row->id)
                                                    ->update([
                                                        'status' => 'expired',
                                                    ]);
                                        
                                                $row->status = 'expired';
                                            }
                                        }
                                    @endphp --}}
                                <tr>
                                    <th scope="row"> {{ $no++ }} </th>
                                    <td>{{ $row->nama_gedung }}</td>
                                    <td>{{ $row->alamat }}</td>
                                    <td>{{ $row->harga }}</td>
                                    <td>
                                        <a href="/ambildata/{{ $row->id }}" class="btn btn-warning"><i
                                                class="fa fa-pen"></i></a>
                                        <a href="/delete/{{ $row->id }}" class="btn btn-danger delete"
                                            data-id="{{ $row->id }}"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach

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
                            @csrf

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
                                <button type="submit" class="btn btn-primary tambahgedung">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
