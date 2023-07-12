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
                            <strong>RT {{ $rt->nama_rt }}</strong>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                            <tread>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Warga</th>
                                    <th>Nomor Hp</th>
                                    <th>Pekerjaan</th>
                                    <th>Alamat</th>
                                </tr>   
                            <tread>
                            <tbody>
                                <?php $i = 0; ?>
                                @foreach($warga as $item)
                                
                                <tr>
                                        @if($item->id_rt == $rt->id)
                                        <?php $i++; ?>
                                            <td>{{ $i }}</td>
                                            <td>{{ $item->user->nama }}</td>
                                            <td>{{ $item->no_hp }}</td>
                                            <td>{{ $item->pekerjaan }}</td>
                                            <td>{{ $item->alamat }}</td>
                                        @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- .content -->

@endsection