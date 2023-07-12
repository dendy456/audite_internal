@extends('layouts.user')
@section('title', 'Data')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data User</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ url('home') }}">Home</a></li>
                            <li class="active">Data</li>
                            <li class="active">Data User</li>
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
            
            <div class="sufee-login d-flex align-content-center flex-wrap">
                <div class="container">
                    <div class="login-content">
                        
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <h3 class="profile-username text-left">{{ auth()->user()->nama }}</h3>
                        @foreach($warga as $item)        
                        @if($item->id_user == auth()->user()->id)
                                <p class="text-muted text-left">- {{ $item->pekerjaan }} -</p>
                                <hr>
                                
                                <strong>
                                <i class="fa fa-user"></i>
                                RT
                                </strong>
                                <p class="text-muted">
                                    {{ $item->rt->nama_rt}}
                                </p>
                                <hr>
                                <strong>
                                <i class="fa fa-phone"></i>
                                    No Tlp
                                </strong>
                                <p class="text-muted">
                                    {{ $item->no_hp }}
                                </p>
                                <hr>
                                <strong>
                                    <i class="fa fa-map-marker"></i>
                                    Alamat
                                </strong>
                                  <p class="text-muted">
                                    {{ $item->alamat }}
                                </p>
                                <hr>
                            
                                <a href="{{ url('warga/'.$item->id.'/edit') }}" class="btn btn-primary btn-block">Setting</a>
                            </div>
                        @endif
                        
                        @endforeach
                            <?php
                            $cari = App\Models\Warga::where('id_user','=',auth()->user()->id)->get();
                            ?>

                            @if($cari->count())

                            @else
                            
                            <p class="text-muted text-left">- Dimohon untuk Melengkapi Data Anda -</p>
                            <a href="{{ url('warga/create') }}" class="btn btn-primary btn-block">Setting</a>

                            @endif
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .content -->

@endsection