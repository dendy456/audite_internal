<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PeriodeAudit;

use Str;

class PeriodeController extends Controller
{
    public function index()
    {
        $periode = PeriodeAudit::simplePaginate(5);

        return view('admin.periode', compact('periode'));// Logika untuk menampilkan halaman utama
    }

    public function create()
    {
        $periode = PeriodeAudit::all();

        return view('admin.addPeriode')
        ->with('admin',$periode);// Logika untuk menampilkan halaman pembuatan data baru
    }

    public function store(Request $request)
    {
        $max = PeriodeAudit::max('id');
        $id = $max +1;

        $periode = new PeriodeAudit;
        $periode->id    = $id;
        $periode->tanggal_awal_audit  = $request->input('tanggal_awal_audit');
        $periode->tanggal_akhir_audit = $request->input('tanggal_akhir_audit');
        $periode->no_sk_tugas_audit	  = $request->input('no_sk_tugas_audit');
        if ($request->hasFile('file_sk')){
            $file_sk       = $request->file('file_sk');
            $fileName   = "file"."-".Str::random(5).".".$file_sk->getClientOriginalExtension();
            $file_sk->move(public_path('/file/'),$fileName);
        }
        $periode->file_sk = ($request->hasFile('file_sk')) ? $fileName : $periode->file_sk;
        $periode->tanggal_sk          = $request->input('tanggal_sk');
        $periode->ketua_spi	          = $request->input('ketua_spi');
        $periode->nip_ketua_spi       = $request->input('nip_ketua_spi');
        $periode->save();
        return redirect()->back()->with('success', 'Data Periode Berhasil Tambah!');// Logika untuk menyimpan data baru yang dikirimkan melalui form
    }

    public function show($id)
    {
        $periode = PeriodeAudit::find($id);// Logika untuk menampilkan data berdasarkan ID yang diberikan
    }

    public function edit($id)
    {
        $periode = PeriodeAudit::find($id);

        return view('admin.editPeriode', compact('periode'));// Logika untuk menampilkan halaman edit data berdasarkan ID yang diberikan
    }

    public function update(Request $request, $id)
    {
        $periode = PeriodeAudit::find($id);
        $periode->id    = $id;
        $periode->tanggal_awal_audit  = $request->input('tanggal_awal_audit');
        $periode->tanggal_akhir_audit = $request->input('tanggal_akhir_audit');
        $periode->no_sk_tugas_audit	  = $request->input('no_sk_tugas_audit');
        if ($request->hasFile('file_sk')){
            $file_sk       = $request->file('file_sk');
            $fileName   = "file"."-".Str::random(5).".".$file_sk->getClientOriginalExtension();
            $file_sk->move(public_path('/file/'),$fileName);
        }
        $periode->file_sk = ($request->hasFile('file_sk')) ? $fileName : $periode->file_sk;
        $periode->tanggal_sk          = $request->input('tanggal_sk');
        $periode->ketua_spi	          = $request->input('ketua_spi');
        $periode->nip_ketua_spi       = $request->input('nip_ketua_spi');
        $periode->save();
        return redirect()->back()->with('success', 'Data Periode Berhasil Diupdate!');
        // Logika untuk memperbarui data berdasarkan ID yang diberikan dan data yang dikirimkan melalui form
    }

    public function destroy($id)
    {
        $periode = PeriodeAudit::find($id);
        $periode->delete();
        return redirect()->back()->with('success', 'Data Periode Berhasil Diupdate!');
    }    
}