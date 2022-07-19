<?php

namespace App\Http\Controllers;

use App\Models\bookingModel;
use App\Models\gedungModel;
use Illuminate\Http\Request;

class gedungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gedung = gedungModel::all();

        return view('home', compact('gedung'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahgedung()
    {
        $gedung = gedungModel::all();
        return view('admin.gedung', compact('gedung'));
    }
    public function insertdata(Request $request)
    {
        $data = gedungModel::create($request->all());
        if ($request->hasFile('file')) {
            $request->file('file')->move('img/', $request->file('file')->getClientOriginalName());
            $data->file = $request->file('file')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('gedung')->with('toast_success', 'Vanue berhasil ditambah !');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function ambildata($id)
    {
        $data = gedungModel::find($id);
        return view('admin.edit', compact('data'));
    }
    public function updatedata(Request $request, $id)
    {
        $data = gedungModel::find($id);
        $data->update($request->all());
        return redirect()->route('gedung')->with('toast_success', 'Data Vanue Berhasil Diedit !');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = gedungModel::find($id);
        $data->delete();
        return redirect()->route('gedung')->with('toast_success', 'Data Berhasil Dihapus');
    }
}
