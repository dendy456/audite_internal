@extends('layouts.admin')

@section('title', 'Periode Audit')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Periode Audit</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="">Home</a></li>
                            <li class="active">Data Periode Audit</li>
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
                            <strong>Data Periode Audit</strong>
                        </div>
                        <div class="pull-right">
                            <a href="{{ route('periode.create') }}" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i>Tambah
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                            <tread>
                                <tr>
                                    <th>No.</th>
                                    <th>Tanggal Awal</th>
                                    <th>Tanggal Akhir</th>
                                    <th>Nomor SK</th>
                                    <th>File</th>
                                    <th>Tanggal SK</th>
                                    <th>Ketua SPI</th>
                                    <th>NIP Ketua SPI</th>
                                    <th></th>
                                </tr>   
                            <tread>
                            <tbody>
                                @foreach($periode as $key=>$item)
                                <tr>
                                    <td>{{ $periode->firstItem() + $key }}</td>
                                    <td>{{ $item->tanggal_awal_audit }}</td>
                                    <td>{{ $item->tanggal_akhir_audit }}</td>
                                    <td>{{ $item->no_sk_tugas_audit }}</td>
                                    <td>{{ $item->file_sk }}</td>
                                    <td>{{ $item->tanggal_sk }}</td>
                                    <td>{{ $item->ketua_spi }}</td>
                                    <td>{{ $item->nip_ketua_spi }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('periode.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ route('periode.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin untuk menghapus data ?')">
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
                        {{ $periode->links() }}
                    </div>
                </div>
            </div>
        </div><!-- .content -->

@endsection