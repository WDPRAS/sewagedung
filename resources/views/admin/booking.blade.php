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
    @extends('template.main')
    @section('content')
        <div class="container">
            {{-- @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $message }}

                </div>
            @endif --}}
            <div class="card mt-5">
                <div class="card-header">
                    List Booking

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
                                @php
                                    // $gedung = gedungModel::join('booking', 'gedung.id', '=', 'id_gedung')->get();
                                    $gedung = DB::table('gedung')
                                        ->join('booking', 'gedung.id', '=', 'id_gedung')
                                        ->get();
                                    // dd($gedung);
                                @endphp
                                @foreach ($gedung as $row)
                                    @php
                                        
                                        if ($row->status != 0) {
                                            if ($date > $row->tgl_selesai) {
                                                DB::table('booking')
                                                    ->where('id', $row->id)
                                                    ->update([
                                                        'status' => 0,
                                                    ]);
                                        
                                                $row->status = 0;
                                            }
                                        }
                                    @endphp
                                    <tr>
                                        <th scope="row"> {{ $no++ }} </th>
                                        <td>{{ $row->nama_gedung }}</td>
                                        <td>{{ $row->nama_penyewa }}</td>
                                        <td>{{ $row->kontak }}</td>
                                        <td>{{ $row->tgl_mulai }}</td>
                                        <td>{{ $row->tgl_selesai }}</td>
                                        <td>
                                            <span
                                                class="badge rounded-pill {{ $row->status == 1 ? 'bg-danger' : 'bg-success' }}">{{ $row->status == 2 ? 'dikonfirmasi' : 'dibooking' }}</span>
                                        </td>
                                        <td>
                                            <a href="/ambildatabooking/{{ $row->id }}" class="btn btn-warning"><i
                                                    class="fa fa-pen"></i></a>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
