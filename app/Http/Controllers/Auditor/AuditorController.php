<?php

namespace App\Http\Controllers\Auditor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Auditor;
use App\Models\UnitAudit;
use Illuminate\Support\Facades\Validator;


use Illuminate\Support\Facades\Auth;

class AuditorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('auditor.index');
    }

    public function createProfile()
    {
        
        $userID = Auth()->user()->id;
        $auditor = Auditor::with('user', 'unit_audit')
            ->whereHas('user', function ($query) use ($userID) {
                $query->where('id', $userID);
            })
            ->first();
        
        return view('auditor.profile', compact('auditor'));
        
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_user' => 'required',
            'id_unit_audit'=>'required',
            'nama_auditor' => 'required|string|max:60',
            'nip_auditor' => 'required|string|max:60',

            // Tambahkan aturan validasi lainnya sesuai kebutuhan
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $auditor = new Auditor();
        $auditor->id_user = $request->input('id_user');
        $auditor->id_unit_audit = $request->input('id_unit_audit');
        $auditor->nama_auditor = $request->input('nama_auditor');
        $auditor->nip_auditor = $request->input('nip_auditor');

        
        // Simpan atribut lainnya sesuai kebutuhan
        $auditor->save();

        // Redirect ke halaman setelah data berhasil disimpan
        return redirect()->back()->with('success', 'Berhasil Ditambahkan');
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
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
