@extends('template.main')
@section('content')
    <div class="modal-body">
        @foreach ($tambahbooking as $item)
            <form action="/insertdatabooking" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="hidden" class="form-control" name="id_gedung" placeholder="" value="{{ $item->id }}"
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
                                                                placeholder="Please enter your name *"
                                                                value="{{ Auth::user()->name }}">
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
        @endforeach
    </div>
    <script>
        $('.tambahbooking').click(function() {
            swal({
                title: "Good job!",
                text: "Vanue berhasil Dibooking",
                icon: "success",

            });
        })
    </script>
@endsection
