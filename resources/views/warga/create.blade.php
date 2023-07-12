@extends('layouts.app')
@section('title', 'Data Warga')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Warga</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ url('home') }}">Home</a></li>
                            <li class="active">Data</li>
                            <li class="active">Tambah Data</li>
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
                            <strong>Tambah Data </strong>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('warga') }}" class="btn btn-secondary btn-sm">
                                <i class="fa fa-undo"></i>Back
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                                <form action="{{  url('warga') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label >RT</label></br>
                                        <select  class="form-control"  name="id_rt" autofocus required> 
                                            <option value="" >- Pilih RT -</option> 
                                            @foreach ($rt as $rt) 
                                            <option value="{{ $rt->id }}" >{{ $rt->nama_rt }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label >Nomor Hp</label>
                                        <input type="text" name="no_hp" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label >Pekerjaan</label>
                                        <input type="text" name="pekerjaan" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label >Alamat</label>
                                        <input type="text" name="alamat" class="form-control" autofocus required>
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