<?php

namespace App\Http\Controllers\Auditee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Auditee;
use Illuminate\Support\Facades\Validator;


use Illuminate\Support\Facades\Auth;

class AuditeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('auditee.index');
    }

    public function createProfile()
    {
        $userID = Auth()->user()->id;
        $auditee = Auditee::whereHas('user', function ($query) use ($userID) {
            $query->where('id', $userID);
        })->first();

        return view('auditee.profile', compact('auditee'));
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
        'nama_auditee' => 'required|string|max:255',
        'sub_bagian' => 'required|string|max:255',
        // Tambahkan aturan validasi lainnya sesuai kebutuhan
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $auditee = new Auditee();
    
    $auditee->id_user = $request->input('id_user');
    $auditee->nama_auditee = $request->input('nama_auditee');
    $auditee->sub_bagian = $request->input('sub_bagian');
    
    // Simpan atribut lainnya sesuai kebutuhan
    $auditee->save();

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
