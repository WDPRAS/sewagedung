@extends('template.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('home.css') }}">
    @if ($message = Session::get('success'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}

        </div>
    @endif
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{ asset('img/benjamin-child-0sT9YhNgSEs-unsplash99.jpg') }}" class="d-block w-100"
                    alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ asset('img/0000.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/001.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="row">
        <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
            <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                @foreach ($gedung as $item)
                    <!-- Button trigger modal -->
                    @php
                        
                        $status = DB::table('gedung')
                            ->join('booking', 'gedung.id', '=', 'booking.id_gedung')
                            ->where('booking.id_gedung', '=', $item->id)
                            ->get();
                        
                        // dd($status);
                        
                    @endphp
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <img src={{ asset('img/' . $item->file) }} class="card-img-top" alt="...">
                            {{--  --}}
                            {{-- <div class="label-top shadow-sm badge rounded-pill">
                                Belum dipesan
                            </div> --}}
                            @foreach ($status as $item)
                                @if ($item->status == 1)
                                    <div class="label-top shadow-sm badge rounded-pill bg-danger" style="font-size: 12px">
                                        Dibooking
                                    </div>
                                @elseif ($item->status == 0)
                                    <div class="label-top shadow-sm badge rounded-pill">
                                        Belum dipesan
                                    </div>
                                @elseif ($item->status == 2)
                                    <div class="label-top shadow-sm badge rounded-pill bg-primary">
                                        dikonfirmasi
                                    </div>
                                @endif
                            @endforeach
                            {{--  --}}
                            <div class="card-body">
                                <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-primary"><i
                                            class="fa-solid fa-coins"></i> {{ $item->harga }}</span>
                                    <span class="float-end" style="color: #636262"><i class="fa-solid fa-location-dot"></i>
                                        {{ $item->alamat }}</span>

                                </div>

                                <h5 class="card-title">{{ $item->nama_gedung }}</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab
                                    accusantium ad alias, aliquid amet aspernatur
                                </p>
                                @php
                                    
                                    $status = DB::table('gedung')
                                        ->join('booking', 'gedung.id', '=', 'booking.id_gedung')
                                        ->where('booking.id_gedung', '=', $item->id)
                                        ->get();
                                    
                                    // dd($status);
                                    
                                @endphp

                                @if ($item->status == 1)
                                    <a href="tambahboooking/{{ $item->id }}" class="btn btn-primary" hidden>
                                        Pesan</a>
                                @elseif ($item->status == 2)
                                    <a href="tambahboooking/{{ $item->id }}" class="btn btn-primary" hidden>
                                        Pesan</a>
                                @elseif ($item->status == 0)
                                    <a href="tambahboooking/{{ $item->id }}" class="btn btn-primary">
                                        Pesan</a>
                                @endif


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

{{-- @section('script')
    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
    </script>
@endsection --}}
