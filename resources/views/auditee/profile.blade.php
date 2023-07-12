@extends('layouts.auditee')
@section('title', 'Auditee')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Data Profile </h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="">Home</a></li>
                            <li class="active">Profile </li>
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
                            <a href="{{ url('profile') }}" class="btn btn-secondary btn-sm">
                                <i class="fa fa-undo"></i>Back
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                            <form action="{{ route('editProfile') }}" method="POST">
                                @csrf
                                @method('PUT') 
                                
                                @if (!empty($auditee->nama_auditee))
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama_auditee" class="form-control" value="{{ $auditee->nama_auditee }}" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label>Sub Bagian</label>
                                    <input type="text" name="sub_bagian" class="form-control" value="{{ $auditee->sub_bagian }}" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="id_user" class="form-control" value="{{ Auth::user()->id }}" autofocus required>
                                </div>
                                    <button type="submit" class="btn btn-success" hidden>Save</button>
                                @else
                                <div class="form-group">
                                    <label>Nama Auditee</label>
                                    <input type="text" name="nama_auditee" class="form-control" value="" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label>Sub Bagian</label>
                                    <input type="text" name="sub_bagian" class="form-control" value="" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="id_user" class="form-control" value="{{ Auth::user()->id }}" autofocus required>
                                </div>
                                    <button type="submit" class="btn btn-success">Save</button>
                                @endif
                            </form>


                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .content -->
@endsection