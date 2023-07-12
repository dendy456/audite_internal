
 @extends('layouts.app')
@section('title', 'Data')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Warga</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ url('main') }}">Home</a></li>
                            <li class="active">Data</li>
                            <li class="active">Data Warga</li>
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
                            <strong>Data Warga</strong>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('wargaAdmin/create') }}" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i>Tambah
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                            <tread>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>RT</th>
                                    <th>Nomor HP</th>
                                    <th>Pekerjaan</th>
                                    <th>Alamat</th>
                                    <th></th>
                                </tr>   
                            <tread>
                            <tbody>
                                <tr>
                                <?php $i = 0; ?>
                                @foreach($warga as $item)
                                
                                <tr>    
                                     <?php
                                        $cari = App\Models\User::where('id','=',$item->id_user)->get();
                                    ?>

                                    @if($cari->count())

                                        @if($item->id_user == $item->user->id)
                                        <?php $i++; ?>
                                            <td>{{ $i }}</td>
                                            <td><a href="{{ url('wargaAdmin/'.$item->id) }}" class="">{{ $item->user->nama }}</a></td>
                                            <td>{{ $item->rt->nama_rt }}</td>
                                            <td>{{ $item->no_hp }}</td>
                                            <td>{{ $item->pekerjaan }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td class="text-center">
                                            <a href="{{ url('wargaAdmin/'.$item->id.'/edit') }}" class="btn btn-primary btn-sm">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <form action="{{ url('wargaAdmin/'.$item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin untuk menghapus data ?')">
                                            @method('delete')      
                                            @csrf
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                        @endif

                                    @else
                                    <td></td>
                                    <td><font color="red">Data User tidak ada, silahkan untuk menghapus data</font></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                        <form action="{{ url('wargaAdmin/'.$item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin untuk menghapus data ?')">
                                        @method('delete')      
                                        @csrf
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>

                                    @endif
                                        
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $warga->links() }}
                    </div>
                </div>
            </div>
        </div><!-- .content -->

@endsection