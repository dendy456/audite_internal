@extends('layouts.app')
@section('title', 'Data RT')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data RT</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ url('main') }}">Home</a></li>
                            <li class="active">Data</li>
                            <li class="active">RT</li>
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
                            <strong>Data RT</strong>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('rt/create') }}" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i>Tambah
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                            <tread>
                                <tr>
                                    <th>No.</th>
                                    <th>RT</th>
                                    <th>Kelurahan</th>
                                    <th></th>
                                </tr>   
                            <tread>
                            <tbody>
                                @foreach($rt as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><a href="{{ url('rt/'.$item->id) }}" class="">{{ $item->nama_rt }}</a></td>
                                    <td>{{ $item->kelurahan }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('rt/'.$item->id.'/edit') }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ url('rt/'.$item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin untuk menghapus data ?')">
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
                    </div>
                </div>
            </div>
        </div><!-- .content -->

@endsection