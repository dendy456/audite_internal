
 @extends('layouts.app')
@section('title', 'Data')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Dokumen</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ url('main') }}">Home</a></li>
                            <li class="active">Data</li>
                            <li class="active">Dokumen</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content')
<div class="content mt-3">

            <div class="animated fadeIn">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <strong>Data Dokumen</strong>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('/dokumens/create') }}" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i>Tambah
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                            <tread>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Dokumen</th>
                                    <th>File</th>
                                    <th></th>
                                </tr>   
                            <tread>
                            <tbody>
                                @foreach($dokumen as $key => $item)
                                <tr>
                                    <td>{{ $dokumen->firstItem() + $key }}</td>
                                    <td>{{ $item->nama_dokumen }}</td>
                                    <td><a href="{{ url('file/'.$item->file)}}" target="_blank">Download</a></td>
                                    <td class="text-center">
                                        <a href="{{ url('/dokumens/'.$item->id.'/edit') }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ url('/dokumens/'.$item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin untuk menghapus data ?')">
                                        @method('delete')        
                                        @csrf
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $dokumen->links() }}
                    </div>
                </div>
            </div>
        </div><!-- .content -->

@endsection