@extends('layouts.admin')

@section('title', 'Unit Audit')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data unit Audit</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="">Home</a></li>
                            <li class="active">Data unit Audit</li>
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
                            <strong>Data Unit Audit</strong>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('unit/create') }}" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i>Tambah
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                            <tread>
                                <tr>
                                    <th>No.</th>
                                    <th>Periode Audit</th>
                                    <th>Standar Ruang Lingkup</th>
                                    <th>Nama Unit</th>
                                    <th>Tanggal Audit</th>
                                    <th>Ketua Tim</th>
                                    <th>NIP Ketua Tim</th>
                                    <th></th>
                                </tr>   
                            <tread>
                            <tbody>
                                @foreach($unit as $key=>$item)
                                <tr>
                                    <td>{{ $unit->firstItem() + $key }}</td>
                                    <td><a href="{{ url('unit/'.$item->id_periode_audit) }}" class="">{{ $item->id_periode_audit }}<a></td>
                                    <td><a href="{{ url('unit/'.$item->id_standar_ruang_lingkup) }}" class="">{{ $item->id_standar_ruang_lingkup }}<a></td>
                                    <td>{{ $item->nama_unit }}</td>
                                    <td>{{ $item->tanggal_audit }}</td>
                                    <td>{{ $item->ketua_tim }}</td>
                                    <td>{{ $item->nip_ketua_tim }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('unit.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ route('unit.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin untuk menghapus data ?')">
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
                        {{ $unit->links() }}
                    </div>
                </div>
            </div>
        </div><!-- .content -->

@endsection