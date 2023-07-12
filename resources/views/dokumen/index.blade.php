@extends('layouts.user')

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
                            <li><a href="{{ url('home') }}">Home</a></li>
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
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                            <tread>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Dokumen</th>
                                    <th>File</th>
                                </tr>   
                            <tread>
                            <tbody>
                                @foreach($dokumen as $key => $item)
                                <tr>
                                    <td>{{ $dokumen->firstItem() + $key }}</td>
                                    <td>{{ $item->nama_dokumen }}</td>
                                    <td><a href="{{ url('file/'.$item->file)}}" target="_blank">Download</a></td>
                                    
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