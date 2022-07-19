<?php

namespace App\Http\Controllers;

use App\Models\bookingModel;
use App\Models\gedungModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking = bookingModel::all();
        return view('home', compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $tambahbooking = gedungModel::select('*')->where('id', $id)->get();
        return view('content.tambahbooking', ['tambahbooking' => $tambahbooking]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = bookingModel::create([
            'id_gedung' => $request->id_gedung,
            'nama_penyewa' => $request->nama_penyewa,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai,
            'kontak' => $request->kontak,
            'status' => $request->status,
        ]);
        $data->save();

        return redirect('/')->with('success', 'Silahkan melakukan pembayaran kepada admin atau hub +6281555955154
        maximal pembayaran 24 jam ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ambildatabooking($id)
    {
        $gedung = DB::table('gedung')
            ->join('booking', 'gedung.id', '=', 'id_gedung')->where('booking.id', '=', $id)
            ->get();
        // $d = bookingModel::find($id);
        return view('admin.editbooking', compact('gedung'));
    }
    public function updatedatabooking(Request $request, $id)
    {
        $d = bookingModel::find($id);
        $d->update($request->all());
        return redirect('/booking')->with('toast_success', 'Status berhasil diubah !');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function booking()
    {
        $booking = bookingModel::all();
        return view('admin.booking', compact('booking'));
    }
}
