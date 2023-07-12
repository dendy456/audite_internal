<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UnitAudit;

class UnitController extends Controller
{
    public function index()
    {
        $unit = UnitAudit::simplePaginate(5);

        return view('admin.unit', compact('unit'));// Logika untuk menampilkan halaman utama
    }

    public function create()
    {
        $unit = UnitAudit::all();

        return view('admin.addUnit')
        ->with('admin',$unit);// Logika untuk menampilkan halaman pembuatan data baru
    }

    public function store(Request $request)
    {
        $max = UnitAudit::max('id');
        $id = $max +1;

        $unit = new UnitAudit;
        $unit->id                       = $id;
        $unit->id_periode_audit         = $request->input('id_periode_audit');
        $unit->id_standar_ruang_lingkup = $request->input('id_standar_ruang_lingkup');
        $unit->nama_unit	            = $request->input('nama_unit');
        $unit->tanggal_audit            = $request->input('tanggal_audit');
        $unit->ketua_tim                = $request->input('ketua_tim');
        $unit->nip_ketua_tim	        = $request->input('nip_ketua_tim');
        $unit->save();
        return redirect('unit')->with('status', 'Data unit Berhasil Ditambah!');// Logika untuk menyimpan data baru yang dikirimkan melalui form
    }

    public function show($id)
    {
        $unit = UnitAudit::find($id);// Logika untuk menampilkan data berdasarkan ID yang diberikan
    }

    public function edit($id)
    {
        $unit = UnitAudit::find($id);

        return view('admin.editUnit')
        ->with('admin',$unit);// Logika untuk menampilkan halaman edit data berdasarkan ID yang diberikan
    }

    public function update(Request $request, $id)
    {
        $unit = UnitAudit::find($id);
        $unit->id                       = $id;
        $unit->id_periode_audit         = $request->input('id_periode_audit');
        $unit->id_standar_ruang_lingkup = $request->input('id_standar_ruang_lingkup');
        $unit->nama_unit	            = $request->input('nama_unit');
        $unit->tanggal_audit            = $request->input('tanggal_audit');
        $unit->ketua_tim                = $request->input('ketua_tim');
        $unit->nip_ketua_tim	        = $request->input('nip_ketua_tim');
        $unit->save();
        return redirect('unit')->with('status', 'Data unit Berhasil Diupdate!');
        // Logika untuk memperbarui data berdasarkan ID yang diberikan dan data yang dikirimkan melalui form
    }

    public function destroy($id)
    {
        $unit = UnitAudit::find($id);
        $unit->delete();
        return redirect('unit')->with('status', 'Data unit Berhasil Dihapus!');
    }    
}
