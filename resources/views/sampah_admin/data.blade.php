@extends('layouts.app')
@section('title', 'Sampah')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Sampah</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ url('main') }}">Home</a></li>
                            <li class="active">Sampah</li>
                            <li class="active">Data Sampah</li>
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
                            <strong>Data Sampah</strong>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                            <tread>
                                <tr>
                                    <th>No.</th>
                                    <th>Pemilik</th>
                                    <th>Jenis Sampah</th>
                                    <th>Berat Sampah</th>
                                    <th>Alamat</th>
                                    <th>Tanggal</th>
                                    <th></th>
                                </tr>   
                            <tread>
                            <tbody>
                                @foreach($sampah as $key => $item)
                                <tr>
                                    <td>{{ $sampah->firstItem() + $key }}</td>
                                    <td>{{ $item->user->nama }}</td>
                                    <td>{{ $item->jenis_sampah }}</td>
                                    <td>{{ $item->berat_sampah }} Kg</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td class="text-center">
                                        <form action="{{ url('sampah/destroy/'.$item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin untuk menghapus data ?')">
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
                        {{ $sampah->links() }}
                    </div>
                </div>
            </div>
        </div><!-- .content -->

@endsection