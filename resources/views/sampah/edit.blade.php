@extends('layouts.user')

@section('title', 'Data Sampah')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Data Sampah</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ url('home') }}">Home</a></li>
                            <li class="active">Sampah</li>
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
                            <a href="{{ url('sampahs') }}" class="btn btn-secondary btn-sm">
                                <i class="fa fa-undo"></i>Back
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                                <form action="{{ url('sampahs/update/'.$sampah->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label >Jenis Sampah</label>
                                        <input type="text" name="jenis_sampah" class="form-control" value="{{ $sampah->jenis_sampah }}" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label >Berat Sampah</label>
                                        <input type="text" name="berat_sampah" class="form-control" value="{{ $sampah->berat_sampah }}" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label >Alamat</label>
                                        <input type="text" name="alamat" class="form-control" value="{{ $sampah->alamat }}" autofocus required>
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