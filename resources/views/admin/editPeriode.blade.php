@extends('layouts.admin')

@section('title', 'Data Periode Audit')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Data Periode Audit</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="">Home</a></li>
                            <li class="active">Periode Audit</li>
                            <li class="active">Edit Data</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content')
<div class="content mt-3">

            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <strong>Edit Data </strong>
                        </div>
                        <div class="pull-right">
                            <a href="{{ route('periode.index') }}" class="btn btn-secondary btn-sm">
                                <i class="fa fa-undo"></i>Back
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                            <form action="{{ route('periode.update', $periode->id) }}" method="POST" enctype="multipart/form-data">
    
    @csrf
    @method('PUT')
                                    <div class="form-group">
                                        <label >Tanggal Awal Audit</label>
                                        <input type="date" name="tanggal_awal_audit" class="form-control" value="{{ $periode->tanggal_awal_audit }}" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label >Tanggal Akhir Audit</label>
                                        <input type="date" name="tanggal_akhir_audit" class="form-control" value="{{ $periode->tanggal_akhir_audit }}" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label >Nomor SK Tugas Audit</label>
                                        <input type="text" name="no_sk_tugas_audit" class="form-control" value="{{ $periode->no_sk_tugas_audit }}" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">File SK</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file_sk" name="file_sk" class="form-control-file" value="{{ $periode->file_sk }}" ></div>
                                    </div>
                                    <div class="form-group">
                                        <label >Tanggal SK</label>
                                        <input type="date" name="tanggal_sk" class="form-control" value="{{ $periode->tanggal_sk }}" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label >Ketua SPI</label>
                                        <input type="text" name="ketua_spi" class="form-control" value="{{ $periode->ketua_spi }}" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label >NIP Ketua SPI</label>
                                        <input type="text" name="nip_ketua_spi" class="form-control" value="{{ $periode->nip_ketua_spi }}" autofocus required>
                                    </div>
                                    <button type="submit" class="btn btn-success">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .content -->
@endsection