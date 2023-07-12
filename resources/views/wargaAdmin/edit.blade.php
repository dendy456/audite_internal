@extends('layouts.app')
@section('title', 'Data Warga')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Data Warga</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ url('main') }}">Home</a></li>
                            <li class="active">Data</li>
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
                            <a href="{{ url('wargaAdmin') }}" class="btn btn-secondary btn-sm">
                                <i class="fa fa-undo"></i>Back
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                                <form action="{{ url('wargaAdmin/'.$warga->id) }}"  method="POST">
                                @method('put')  
                                    @csrf
                                    <div class="form-group">
                                        <label >RT</label></br>
                                        <select  class="standardSelect"  name="id_rt" value="{{ $warga->id_rt }}"> 
                                            <option value="{{ $warga->id_rt }}" >{{ $warga->rt->nama_rt }}</option> 
                                            @foreach ($rt as $r) 
                                            <option value="{{ $r->id }}" >{{ $r->nama_rt }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label >Akun User</label></br>
                                        <select  class="standardSelect"  name="id_user" value="{{ $warga->id_user }}"> 
                                            <option value="{{ $warga->id_user }}" >{{ $warga->user->nama }}</option> 
                                            @foreach ($user as $us) 
                                            <option value="{{ $us->id }}" >{{ $us->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label >Nomor Hp</label>
                                        <input type="text" name="no_hp" class="form-control" value="{{ $warga->no_hp }}" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label >Pekerjaan</label>
                                        <input type="text" name="pekerjaan" class="form-control" value="{{ $warga->pekerjaan }}" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label >Alamat</label>
                                        <input type="text" name="alamat" class="form-control" value="{{ $warga->alamat }}" autofocus required>
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