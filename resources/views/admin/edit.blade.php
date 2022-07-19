@extends('template.main')
@section('content')

    <form action="/updatedata/{{ $data->id }}" method="post" enctype="multipart/form-row">
        @csrf
        <br>
        <br>
        <br>
        <div class="container">
            <div class=" text-center mt-5 ">
                <h1>Form Edit Vanue</h1>
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
                                                    <input type="text" name="nama_gedung"
                                                        value="{{ $data->nama_gedung }}" class="form-control"
                                                        placeholder="Nama Vanue" required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Alamat *</label>
                                                    <input type="text" name="alamat" value="{{ $data->alamat }}"
                                                        class="form-control" placeholder="Alamat" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Harga </label>
                                                    <input type="text" name="harga" value="{{ $data->harga }}"
                                                        class="form-control" placeholder="Harga" required="required">
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
