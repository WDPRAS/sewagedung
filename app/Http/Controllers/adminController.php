<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class adminController extends Controller
{
    public function index()
    {

        $data = User::all();
        return view('admin.homeadmin', compact('data'));
    }

    public function tambah()
    {
        return view('tambahdata');
    }

    public function insertdata(Request $request)
    {
        $data = User::create($request->all());
        if ($request->hasFile('file')) {
            $request->file('file')->move('filePDF/', $request->file('file')->getClientOriginalName());
            $data->file = $request->file('file')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('homeadmin')->with('success', 'Data Berhasil Ditambah');
    }

    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('homeadmin')->with('success', 'Data Berhasil Dihapus');
    }

    public function ambildata($id)
    {
        $data = User::find($id);
        return view('editdata', compact('data'));
    }
    public function updatedata(Request $request, $id)
    {
        $data = User::find($id);
        $data->update($request->all());
        return redirect()->route('homeadmin')->with('success', 'Data Berhasil Diupdate');
    }
}
