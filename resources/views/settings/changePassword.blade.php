@extends('adminlte::page')

@section('title', 'Ubah Kata Sandi')

@section('content_header')
<h1>Ubah Kata Sandi</h1> <br>
@if (session('status'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-check"></i> Berhasil</h5>
    {{ session('status') }}
</div>
@endif
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ubah Kata Sandi</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('settings.changepassword') }}">
                        @csrf
                        @foreach ($errors->all() as $error)
                          @if ($error == 'validation.same')
                              <p class="text-danger">Kata Sandi Baru dan Konfirmasi Kata Sandi Baru Harus Sama!</p>
                          @else
                              <p class="text-danger">{{ $error }}</p>
                          @endif
                        @endforeach
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Kata Sandi Saat Ini</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password Baru</label>
                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Konfirmasi Kata Sandi Baru</label>
                            <div class="col-md-6">
                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Ubah Kata Sandi
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="shortcut icon" href="/assets/img/image.png"/>
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
