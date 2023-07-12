
 @extends('layouts.app')

@section('title', 'Data Dokumen')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Data Dokumen</h1>
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
                            <a href="{{ url('/dokumens') }}" class="btn btn-secondary btn-sm">
                                <i class="fa fa-undo"></i>Back
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                                <form action="{{ url('/dokumens/'.$dokumen->id) }}" method="POST" files="true" enctype="multipart/form-data">
                                @method('PUT')     
                                @csrf
                                    <div class="form-group">
                                        <label >Nama Dokumen</label>
                                        <input type="text" name="nama_dokumen" class="form-control" value="{{ $dokumen->nama_dokumen }}" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label for="file-input" class=" form-control-label">File input</label>
                                        <input type="file" id="file-input" name="file" class="form-control-file" value="{{ $dokumen->file }}" autofocus required>
                                    </div></br></br>

                                    <button type="submit" class="btn btn-success">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .content -->
@endsection