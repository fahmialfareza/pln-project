@extends('adminlte::page')

@section('title', 'Lihat Data (Trafo)')

@section('content_header')
<h1>Lihat Data (Trafo)</h1> <br>
@if (session('status'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-check"></i> Berhasil</h5>
    {{ session('status') }}
</div>
@endif
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Lihat Data (Trafo)</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="data_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6"></div>
                        <div class="col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 table-responsive">
                            <table id="data" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="data_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_desc" tabindex="0" aria-controls="data" rowspan="1" colspan="1" aria-sort="descending">ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="data" rowspan="1" colspan="1">Merk</th>
                                        <th class="sorting" tabindex="0" aria-controls="data" rowspan="1" colspan="1">Type</th>
                                        <th class="sorting" tabindex="0" aria-controls="data" rowspan="1" colspan="1">No. Serie</th>
                                        <th class="sorting" tabindex="0" aria-controls="data" rowspan="1" colspan="1">Tanggal</th>
                                        <th class="sorting" tabindex="0" aria-controls="data" rowspan="1" colspan="1">Lokasi</th>
                                        <th class="sorting" tabindex="0" aria-controls="data" rowspan="1" colspan="1">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($trafo as $dat)
                                    <tr role="row" class="odd">
                                        <td tabindex="0" class="sorting_1">
                                            @if ($dat->id)
                                                DOCT-ID-{{ $dat->id }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            @if ($dat->hu_merk)
                                                {{ $dat->hu_merk }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            @if ($dat->hu_type)
                                                {{ $dat->hu_type }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            @if ($dat->hu_no_serie)
                                                {{ $dat->hu_no_serie }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            @if ($dat->hu_tanggal)
                                                {{ Carbon\Carbon::createFromFormat('Y-m-d', $dat->hu_tanggal)->translatedFormat('l, d F Y') }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            @if ($dat->hu_lokasi)
                                                {{ $dat->hu_lokasi }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            <a target="_blank" href="{{ route('data.trafo.print', $dat->id) }}" class="btn btn-primary"><i class="fas fa-print"></i></a>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-show-{{ $dat->id }}">
                                                Lihat
                                            </button>
                                            <a href="{{ route('data.trafo.edit', $dat->id) }}" class="btn btn-primary">
                                                Edit
                                            </a>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $dat->id }}">
                                                Hapus
                                            </button>

                                            <!-- Modal Show -->
                                            <div id="modal-show-{{ $dat->id }}" class="modal fade" role="dialog">
                                                <div class="modal-dialog modal-xl">
                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">DOCT-ID-{{ $dat->id }}</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="card card-primary">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">2.4 Hasil Uji Proteksi Over Current dan Grounf Fault Relay Sisi LV</h3>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Merk</label>
                                                                                            <input type="text" class="form-control"
                                                                                              @if ($dat->hu_merk)
                                                                                                  value="{{ $dat->hu_merk }}"
                                                                                              @else
                                                                                                  value="-"
                                                                                              @endif
                                                                                              name="hu_merk" placeholder="Merk ..." readonly>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Type</label>
                                                                                            <input type="text" class="form-control"
                                                                                            @if ($dat->hu_type)
                                                                                                value="{{ $dat->hu_type }}"
                                                                                            @else
                                                                                                value="-"
                                                                                            @endif
                                                                                             name="hu_type" placeholder="Type ..." readonly>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>No. Serie</label>
                                                                                            <input type="text" class="form-control"
                                                                                            @if ($dat->hu_no_serie)
                                                                                                value="{{ $dat->hu_no_serie }}"
                                                                                            @else
                                                                                                value="-"
                                                                                            @endif
                                                                                             name="hu_no_serie" placeholder="No. Serie ..." readonly>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Rating</label>
                                                                                            <input type="text" class="form-control"
                                                                                            @if ($dat->hu_rating)
                                                                                                value="{{ $dat->hu_rating }}"
                                                                                            @else
                                                                                                value="-"
                                                                                            @endif
                                                                                             name="hu_rating" placeholder="Rating ..." readonly>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Karakteristik</label>
                                                                                            <input type="text" class="form-control"
                                                                                            @if ($dat->hu_karakteristik)
                                                                                                value="{{ $dat->hu_karakteristik }}"
                                                                                            @else
                                                                                                value="-"
                                                                                            @endif
                                                                                             name="hu_karakteristik" placeholder="Karakteristik ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <div class="form-group">
                                                                                            <label>Tanggal</label>
                                                                                            <input type="text" class="form-control"
                                                                                              @if ($dat->hu_tanggal)
                                                                                                value="{{ Carbon\Carbon::createFromFormat('Y-m-d', $dat->hu_tanggal)->translatedFormat('l, d F Y') }}"
                                                                                              @else
                                                                                                value="-"
                                                                                              @endif
                                                                                              name="hu_tanggal" placeholder="Tanggal ..." readonly>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Lokasi</label>
                                                                                            <input type="text" class="form-control"
                                                                                            @if ($dat->hu_lokasi)
                                                                                                value="{{ $dat->hu_lokasi }}"
                                                                                            @else
                                                                                                value="-"
                                                                                            @endif
                                                                                             name="hu_lokasi" placeholder="Lokasi ..." readonly>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Bay</label>
                                                                                            <input type="text" class="form-control"
                                                                                            @if ($dat->hu_bay)
                                                                                                value="{{ $dat->hu_bay }}"
                                                                                            @else
                                                                                                value="-"
                                                                                            @endif
                                                                                             name="hu_bay" placeholder="Bay ..." readonly>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Ratio CT</label>
                                                                                            <input type="text" class="form-control"
                                                                                            @if ($dat->hu_ratio_ct)
                                                                                                value="{{ $dat->hu_ratio_ct }}"
                                                                                            @else
                                                                                                value="-"
                                                                                            @endif
                                                                                             name="hu_ratio_ct" placeholder="Ratio CT ..." readonly>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Alat Uji</label>
                                                                                            <input type="text" class="form-control"
                                                                                            @if ($dat->hu_alat_uji)
                                                                                                value="{{ $dat->hu_alat_uji }}"
                                                                                            @else
                                                                                                value="-"
                                                                                            @endif
                                                                                             name="hu_alat_uji" placeholder="Alat Uji ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="card card-secondary">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">1. Arus Kerja Minimum dan Kembali</h3>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <h4>Arus Nominal (In)</h4>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa R</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->akmk_fasa_r_arus_nominal }}" name="akmk_fasa_r_arus_nominal" placeholder="Fasa R ..." readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa S</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->akmk_fasa_s_arus_nominal }}" name="akmk_fasa_s_arus_nominal" placeholder="Fasa S ..." readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa T</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->akmk_fasa_t_arus_nominal }}" name="akmk_fasa_t_arus_nominal" placeholder="Fasa T ..." readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa GFR</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->akmk_fasa_gfr_arus_nominal }}" name="akmk_fasa_gfr_arus_nominal" placeholder="Fasa GFR ..."
                                                                                              readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <h4>Setting (Is)</h4>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa R</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->akmk_fasa_r_setting }}" name="akmk_fasa_r_setting" placeholder="Fasa R ..." readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa S</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->akmk_fasa_s_setting }}" name="akmk_fasa_s_setting" placeholder="Fasa S ..." readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa T</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->akmk_fasa_t_setting }}" name="akmk_fasa_t_setting" placeholder="Fasa T ..." readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa GFR</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->akmk_fasa_gfr_setting }}" name="akmk_fasa_gfr_setting" placeholder="Fasa GFR ..." readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <h4>Arus Kerja (Ip)</h4>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa R</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->akmk_fasa_r_arus_kerja }}" name="akmk_fasa_r_arus_kerja" placeholder="Fasa R ..." readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa S</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->akmk_fasa_s_arus_kerja }}" name="akmk_fasa_s_arus_kerja" placeholder="Fasa S ..." readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa T</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->akmk_fasa_t_arus_kerja }}" name="akmk_fasa_t_arus_kerja" placeholder="Fasa T ..." readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa GFR</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->akmk_fasa_gfr_arus_kerja }}" name="akmk_fasa_gfr_arus_kerja" placeholder="Fasa GFR ..." readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <h4>Arus Kembali (Id)</h4>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa R</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->akmk_fasa_r_arus_kembali }}" name="akmk_fasa_r_arus_kembali" placeholder="Fasa R ..." readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa S</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->akmk_fasa_s_arus_kembali }}" name="akmk_fasa_s_arus_kembali" placeholder="Fasa S ..." readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa T</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->akmk_fasa_t_arus_kembali }}" name="akmk_fasa_t_arus_kembali" placeholder="Fasa T ..." readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa GFR</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->akmk_fasa_gfr_arus_kembali }}" name="akmk_fasa_gfr_arus_kembali" placeholder="Fasa GFR ..."
                                                                                              readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <h4>Ratio (Id/Ip)</h4>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa R</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->akmk_fasa_r_ratio }}" name="akmk_fasa_r_ratio" placeholder="Fasa R ..." readonly>
                                                                                            %
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa S</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->akmk_fasa_s_ratio }}" name="akmk_fasa_s_ratio" placeholder="Fasa S ..." readonly>
                                                                                            %
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa T</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->akmk_fasa_t_ratio }}" name="akmk_fasa_t_ratio" placeholder="Fasa T ..." readonly>
                                                                                            %
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa GFR</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->akmk_fasa_gfr_ratio }}" name="akmk_fasa_gfr_ratio" placeholder="Fasa GFR ..." readonly>
                                                                                            %
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="card card-success">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">2. Karakteristik Waktu</h3>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="row">
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>tms OCR</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->kw_tms_ocr }}" name="kw_tms_ocr" placeholder="tms OCR ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>tms OCR (variabel)</label>
                                                                                            <input type="text" class="form-control" value="{{ $dat->kw_tms_ocr_variable ? $dat->kw_tms_ocr_variable : '-' }}" name="kw_tms_ocr_variable" placeholder="tms OCR variabel ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>tms GFR</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->kw_tms_gfr }}" name="kw_tms_gfr" placeholder="tms OCR ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>tms GFR (variabel)</label>
                                                                                            <input type="text" class="form-control" value="{{ $dat->kw_tms_gfr_variable ? $dat->kw_tms_gfr_variable : '-' }}" name="kw_tms_gfr_variable" placeholder="tms GFR variabel ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <h4>Fasa R</h4>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>1.5 x Is</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->kw_fasa_r_satu_lima }}" name="kw_fasa_r_satu_lima" placeholder="1.5 x Is ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>2 x Is</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->kw_fasa_r_dua }}" name="kw_fasa_r_dua" placeholder="2 x Is ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>3 x Is</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->kw_fasa_r_tiga }}" name="kw_fasa_r_tiga" placeholder="3 x Is ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>4 x Is</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->kw_fasa_r_empat }}" name="kw_fasa_r_empat" placeholder="4 x Is ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <h4>Fasa S</h4>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>1.5 x Is</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->kw_fasa_s_satu_lima }}" name="kw_fasa_s_satu_lima" placeholder="1.5 x Is ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>2 x Is</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->kw_fasa_s_dua }}" name="kw_fasa_s_dua" placeholder="2 x Is ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>3 x Is</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->kw_fasa_s_tiga }}" name="kw_fasa_s_tiga" placeholder="3 x Is ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>4 x Is</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->kw_fasa_s_empat }}" name="kw_fasa_s_empat" placeholder="4 x Is ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <h4>Fasa T</h4>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>1.5 x Is</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->kw_fasa_t_satu_lima }}" name="kw_fasa_t_satu_lima" placeholder="1.5 x Is ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>2 x Is</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->kw_fasa_t_dua }}" name="kw_fasa_t_dua" placeholder="2 x Is ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>3 x Is</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->kw_fasa_t_tiga }}" name="kw_fasa_t_tiga" placeholder="3 x Is ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>4 x Is</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->kw_fasa_t_empat }}" name="kw_fasa_t_empat" placeholder="4 x Is ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <h4>Fasa GFR</h4>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>1.5 x Is</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->kw_fasa_gfr_satu_lima }}" name="kw_fasa_gfr_satu_lima" placeholder="1.5 x Is ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>2 x Is</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->kw_fasa_gfr_dua }}" name="kw_fasa_gfr_dua" placeholder="2 x Is ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>3 x Is</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->kw_fasa_gfr_tiga }}" name="kw_fasa_gfr_tiga" placeholder="3 x Is ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>4 x Is</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->kw_fasa_gfr_empat }}" name="kw_fasa_gfr_empat" placeholder="4 x Is ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="card card-info">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">3. Waktu Kerja Sesaat (Instantaneous / Moment)</h3>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <h4>Setting IHS-1</h4>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa R</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_r_setting_ihs_satu }}" name="wks_fasa_r_setting_ihs_satu" placeholder="Fasa R ..."
                                                                                              readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa S</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_s_setting_ihs_satu }}" name="wks_fasa_s_setting_ihs_satu" placeholder="Fasa S ..."
                                                                                              readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa T</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_t_setting_ihs_satu }}" name="wks_fasa_t_setting_ihs_satu" placeholder="Fasa T ..."
                                                                                              readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa GFR</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_gfr_setting_ihs_satu }}" name="wks_fasa_gfr_setting_ihs_satu" placeholder="Fasa GFR ..."
                                                                                              readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <h4>Arus Uji IHS-1</h4>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa R</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_r_arus_uji_ihs_satu }}" name="wks_fasa_r_arus_uji_ihs_satu" placeholder="Fasa R ..."
                                                                                              readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa S</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_s_arus_uji_ihs_satu }}" name="wks_fasa_s_arus_uji_ihs_satu" placeholder="Fasa S ..."
                                                                                              readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa T</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_t_arus_uji_ihs_satu }}" name="wks_fasa_t_arus_uji_ihs_satu" placeholder="Fasa T ..."
                                                                                              readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa GFR</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_gfr_arus_uji_ihs_satu }}" name="wks_fasa_gfr_arus_uji_ihs_satu" placeholder="Fasa GFR ..."
                                                                                              readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <h4>Waktu Kerja IHS-1</h4>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa R</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_r_waktu_kerja_ihs_satu }}" name="wks_fasa_r_waktu_kerja_ihs_satu" placeholder="Fasa R ..."
                                                                                              readonly>
                                                                                            sekon
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa S</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_s_waktu_kerja_ihs_satu }}" name="wks_fasa_s_waktu_kerja_ihs_satu" placeholder="Fasa S ..."
                                                                                              readonly>
                                                                                            sekon
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa T</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_t_waktu_kerja_ihs_satu }}" name="wks_fasa_t_waktu_kerja_ihs_satu" placeholder="Fasa T ..."
                                                                                              readonly>
                                                                                            sekon
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa GFR</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_gfr_waktu_kerja_ihs_satu }}" name="wks_fasa_gfr_waktu_kerja_ihs_satu"
                                                                                              placeholder="Fasa GFR ..." readonly>
                                                                                            sekon
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <h4>Setting IHS-2</h4>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa R</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_r_setting_ihs_dua }}" name="wks_fasa_r_setting_ihs_dua" placeholder="Fasa R ..." readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa S</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_s_setting_ihs_dua }}" name="wks_fasa_s_setting_ihs_dua" placeholder="Fasa S ..." readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa T</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_t_setting_ihs_dua }}" name="wks_fasa_t_setting_ihs_dua" placeholder="Fasa T ..." readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa GFR</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_gfr_setting_ihs_dua }}" name="wks_fasa_gfr_setting_ihs_dua" placeholder="Fasa GFR ..."
                                                                                              readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <h4>Arus Uji IHS-2</h4>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa R</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_r_arus_uji_ihs_dua }}" name="wks_fasa_r_arus_uji_ihs_dua" placeholder="Fasa R ..."
                                                                                              readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa S</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_s_arus_uji_ihs_dua }}" name="wks_fasa_s_arus_uji_ihs_dua" placeholder="Fasa S ..."
                                                                                              readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa T</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_t_arus_uji_ihs_dua }}" name="wks_fasa_t_arus_uji_ihs_dua" placeholder="Fasa T ..."
                                                                                              readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa GFR</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_gfr_arus_uji_ihs_dua }}" name="wks_fasa_gfr_arus_uji_ihs_dua" placeholder="Fasa GFR ..."
                                                                                              readonly>
                                                                                            Ampere
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <h4>Waktu Kerja IHS-2</h4>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa R</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_r_waktu_kerja_ihs_dua }}" name="wks_fasa_r_waktu_kerja_ihs_dua" placeholder="Fasa R ..."
                                                                                              readonly>
                                                                                            sekon
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa S</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_s_waktu_kerja_ihs_dua }}" name="wks_fasa_s_waktu_kerja_ihs_dua" placeholder="Fasa S ..."
                                                                                              readonly>
                                                                                            sekon
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa T</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_t_waktu_kerja_ihs_dua }}" name="wks_fasa_t_waktu_kerja_ihs_dua" placeholder="Fasa T ..."
                                                                                              readonly>
                                                                                            sekon
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa GFR</label>
                                                                                            <input type="number" class="form-control" value="{{ $dat->wks_fasa_gfr_waktu_kerja_ihs_dua }}" name="wks_fasa_gfr_waktu_kerja_ihs_dua"
                                                                                              placeholder="Fasa GFR ..." readonly>
                                                                                            sekon
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="card card-warning">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">4. Setting Akhir Relay</h3>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <h4>Posisi Setting</h4>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <h4>Fasa R</h4>
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>In</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_r_posisi_in }}" name="sar_fasa_r_posisi_in" placeholder="In ..." readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>Is</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_r_posisi_is }}" name="sar_fasa_r_posisi_is" placeholder="Is ..." readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>tms</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_r_posisi_tms }}" name="sar_fasa_r_posisi_tms" placeholder="tms ..." readonly>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-3">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-1</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_r_posisi_ihs_satu }}" name="sar_fasa_r_posisi_ihs_satu" placeholder="IHS-1 ..."
                                                                                                      readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-3">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-2</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_r_posisi_ihs_dua }}" name="sar_fasa_r_posisi_ihs_dua" placeholder="IHS-2 ..."
                                                                                                      readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <h4>Hasil Test Setting</h4>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <h4>Fasa R</h4>
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>I Kerja</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_r_hasil_kerja }}" name="sar_fasa_r_hasil_kerja" placeholder="I Kerja ..." readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>I Kembali</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_r_hasil_kembali }}" name="sar_fasa_r_hasil_kembali" placeholder="I Kembali ..."
                                                                                                      readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>t</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_r_hasil_t }}" name="sar_fasa_r_hasil_t" placeholder="tms ..." readonly>
                                                                                                    detik
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-1 (Ampere)</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_r_hasil_ihs_satu_a }}" name="sar_fasa_r_hasil_ihs_satu_a"
                                                                                                      placeholder="IHS-1 (Ampere) ..." readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-1 (detik)</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_r_hasil_ihs_satu_det }}" name="sar_fasa_r_hasil_ihs_satu_det"
                                                                                                      placeholder="IHS-1 (detik) ..." readonly>
                                                                                                    detik
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-2 (Ampere)</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_r_hasil_ihs_dua_a }}" name="sar_fasa_r_hasil_ihs_dua_a"
                                                                                                      placeholder="IHS-2 (Ampere) ..." readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-2 (detik)</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_r_hasil_ihs_dua_det }}" name="sar_fasa_r_hasil_ihs_dua_det"
                                                                                                      placeholder="IHS-2 (detik) ..." readonly>
                                                                                                    detik
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <h4>Fasa S</h4>
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>In</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_s_posisi_in }}" name="sar_fasa_s_posisi_in" placeholder="In ..." readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>Is</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_s_posisi_is }}" name="sar_fasa_s_posisi_is" placeholder="Is ..." readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>tms</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_s_posisi_tms }}" name="sar_fasa_s_posisi_tms" placeholder="tms ..." readonly>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-3">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-1</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_s_posisi_ihs_satu }}" name="sar_fasa_s_posisi_ihs_satu" placeholder="IHS-1 ..."
                                                                                                      readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-3">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-2</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_s_posisi_ihs_dua }}" name="sar_fasa_s_posisi_ihs_dua" placeholder="IHS-2 ..."
                                                                                                      readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <h4>Fasa S</h4>
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>I Kerja</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_s_hasil_kerja }}" name="sar_fasa_s_hasil_kerja" placeholder="I Kerja ..." readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>I Kembali</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_s_hasil_kembali }}" name="sar_fasa_s_hasil_kembali" placeholder="I Kembali ..."
                                                                                                      readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>t</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_s_hasil_t }}" name="sar_fasa_s_hasil_t" placeholder="tms ..." readonly>
                                                                                                    detik
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-1 (Ampere)</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_s_hasil_ihs_satu_a }}" name="sar_fasa_s_hasil_ihs_satu_a"
                                                                                                      placeholder="IHS-1 (Ampere) ..." readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-1 (detik)</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_s_hasil_ihs_satu_det }}" name="sar_fasa_s_hasil_ihs_satu_det"
                                                                                                      placeholder="IHS-1 (detik) ..." readonly>
                                                                                                    detik
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-2 (Ampere)</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_s_hasil_ihs_dua_a }}" name="sar_fasa_s_hasil_ihs_dua_a"
                                                                                                      placeholder="IHS-2 (Ampere) ..." readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-2 (detik)</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_s_hasil_ihs_dua_det }}" name="sar_fasa_s_hasil_ihs_dua_det"
                                                                                                      placeholder="IHS-2 (detik) ..." readonly>
                                                                                                    detik
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <h4>Posisi Setting</h4>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <h4>Fasa T</h4>
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>In</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_t_posisi_in }}" name="sar_fasa_t_posisi_in" placeholder="In ..." readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>Is</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_t_posisi_is }}" name="sar_fasa_t_posisi_is" placeholder="Is ..." readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>tms</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_t_posisi_tms }}" name="sar_fasa_t_posisi_tms" placeholder="tms ..." readonly>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-3">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-1</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_t_posisi_ihs_satu }}" name="sar_fasa_t_posisi_ihs_satu" placeholder="IHS-1 ..."
                                                                                                      readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-3">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-2</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_t_posisi_ihs_dua }}" name="sar_fasa_t_posisi_ihs_dua" placeholder="IHS-2 ..."
                                                                                                      readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <h4>Hasil Test Setting</h4>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <h4>Fasa T</h4>
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>I Kerja</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_t_hasil_kerja }}" name="sar_fasa_t_hasil_kerja" placeholder="I Kerja ..." readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>I Kembali</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_t_hasil_kembali }}" name="sar_fasa_t_hasil_kembali" placeholder="I Kembali ..."
                                                                                                      readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>t</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_t_hasil_t }}" name="sar_fasa_t_hasil_t" placeholder="tms ..." readonly>
                                                                                                    detik
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-1 (Ampere)</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_t_hasil_ihs_satu_a }}" name="sar_fasa_t_hasil_ihs_satu_a"
                                                                                                      placeholder="IHS-1 (Ampere) ..." readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-1 (detik)</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_t_hasil_ihs_satu_det }}" name="sar_fasa_t_hasil_ihs_satu_det"
                                                                                                      placeholder="IHS-1 (detik) ..." readonly>
                                                                                                    detik
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-2 (Ampere)</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_t_hasil_ihs_dua_a }}" name="sar_fasa_t_hasil_ihs_dua_a"
                                                                                                      placeholder="IHS-2 (Ampere) ..." readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-2 (detik)</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_t_hasil_ihs_dua_det }}" name="sar_fasa_t_hasil_ihs_dua_det"
                                                                                                      placeholder="IHS-2 (detik) ..." readonly>
                                                                                                    detik
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <h4>Posisi Setting</h4>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <h4>Fasa GFR</h4>
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>In</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_gfr_posisi_in }}" name="sar_fasa_gfr_posisi_in" placeholder="In ..." readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>Is</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_gfr_posisi_is }}" name="sar_fasa_gfr_posisi_is" placeholder="Is ..." readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>tms</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_gfr_posisi_tms }}" name="sar_fasa_gfr_posisi_tms" placeholder="tms ..." readonly>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-3">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-1</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_gfr_posisi_ihs_satu }}" name="sar_fasa_gfr_posisi_ihs_satu" placeholder="IHS-1 ..."
                                                                                                      readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-3">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-2</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_gfr_posisi_ihs_dua }}" name="sar_fasa_gfr_posisi_ihs_dua" placeholder="IHS-2 ..."
                                                                                                      readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <h4>Hasil Test Setting</h4>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <h4>Fasa GFR</h4>
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>I Kerja</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_gfr_hasil_kerja }}" name="sar_fasa_gfr_hasil_kerja" placeholder="I Kerja ..."
                                                                                                      readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>I Kembali</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_gfr_hasil_kembali }}" name="sar_fasa_gfr_hasil_kembali" placeholder="I Kembali ..."
                                                                                                      readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>t</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_gfr_hasil_t }}" name="sar_fasa_gfr_hasil_t" placeholder="tms ..." readonly>
                                                                                                    detik
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-1 (Ampere)</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_gfr_hasil_ihs_satu_a }}" name="sar_fasa_gfr_hasil_ihs_satu_a"
                                                                                                      placeholder="IHS-1 (Ampere) ..." readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-1 (detik)</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_gfr_hasil_ihs_satu_det }}" name="sar_fasa_gfr_hasil_ihs_satu_det"
                                                                                                      placeholder="IHS-1 (detik) ..." readonly>
                                                                                                    detik
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-2 (Ampere)</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_gfr_hasil_ihs_dua_a }}" name="sar_fasa_gfr_hasil_ihs_dua_a"
                                                                                                      placeholder="IHS-2 (Ampere) ..." readonly>
                                                                                                    Ampere
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <!-- text input -->
                                                                                                <div class="form-group">
                                                                                                    <label>IHS-2 (detik)</label>
                                                                                                    <input type="number" class="form-control" value="{{ $dat->sar_fasa_gfr_hasil_ihs_dua_det }}" name="sar_fasa_gfr_hasil_ihs_dua_det"
                                                                                                      placeholder="IHS-2 (detik) ..." readonly>
                                                                                                    detik
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="card card-danger">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">5. Pengujian Fungsi</h3>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <h4>Fasa R</h4>
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Indikasi</label>
                                                                                            <input type="text" class="form-control" value="{{ $dat->pj_fasa_r_indikasi }}" name="pj_fasa_r_indikasi" placeholder="Indikasi ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>PMT</label>
                                                                                            <input type="text" class="form-control" value="{{ $dat->pj_fasa_r_pmt }}" name="pj_fasa_r_pmt" placeholder="PMT ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa T</label>
                                                                                            <input type="text" class="form-control" value="{{ $dat->pj_fasa_r_keterangan }}" name="pj_fasa_r_keterangan" placeholder="Keterangan ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <h4>Fasa S</h4>
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Indikasi</label>
                                                                                            <input type="text" class="form-control" value="{{ $dat->pj_fasa_s_indikasi }}" name="pj_fasa_s_indikasi" placeholder="Indikasi ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>PMT</label>
                                                                                            <input type="text" class="form-control" value="{{ $dat->pj_fasa_s_pmt }}" name="pj_fasa_s_pmt" placeholder="PMT ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa T</label>
                                                                                            <input type="text" class="form-control" value="{{ $dat->pj_fasa_s_keterangan }}" name="pj_fasa_s_keterangan" placeholder="Keterangan ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <h4>Fasa T</h4>
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Indikasi</label>
                                                                                            <input type="text" class="form-control" value="{{ $dat->pj_fasa_t_indikasi }}" name="pj_fasa_t_indikasi" placeholder="Indikasi ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>PMT</label>
                                                                                            <input type="text" class="form-control" value="{{ $dat->pj_fasa_t_pmt }}" name="pj_fasa_t_pmt" placeholder="PMT ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa T</label>
                                                                                            <input type="text" class="form-control" value="{{ $dat->pj_fasa_t_keterangan }}" name="pj_fasa_t_keterangan" placeholder="Keterangan ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <h4>Fasa GFR</h4>
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Indikasi</label>
                                                                                            <input type="text" class="form-control" value="{{ $dat->pj_fasa_gfr_indikasi }}" name="pj_fasa_gfr_indikasi" placeholder="Indikasi ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>PMT</label>
                                                                                            <input type="text" class="form-control" value="{{ $dat->pj_fasa_gfr_pmt }}" name="pj_fasa_gfr_pmt" placeholder="PMT ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                        <!-- text input -->
                                                                                        <div class="form-group">
                                                                                            <label>Fasa T</label>
                                                                                            <input type="text" class="form-control" value="{{ $dat->pj_fasa_gfr_keterangan }}" name="pj_fasa_gfr_keterangan" placeholder="Keterangan ..." readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="card card-dark">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">6. Catatan</h3>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="form-group">
                                                                                    <label>Catatan</label>
                                                                                    <textarea class="form-control" rows="5" name="catatan" readonly>{{ $dat->catatan ? $dat->catatan : '-'  }}</textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="card card-primary">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">Pelaksana</h3>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="form-group">
                                                                                    <label>Pelaksana 1</label>
                                                                                    <input type="text" class="form-control" value="{{ $dat->pelaksana_satu ? $dat->pelaksana_satu : '-' }}" name="pelaksana_satu" placeholder="Pelaksana 1 ..." readonly>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Pelaksana 2</label>
                                                                                    <input type="text" class="form-control" value="{{ $dat->pelaksana_dua ? $dat->pelaksana_dua : '-' }}" name="pelaksana_dua" placeholder="Pelaksana 2 ..." readonly>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Pelaksana 3</label>
                                                                                    <input type="text" class="form-control" value="{{ $dat->pelaksana_tiga ? $dat->pelaksana_tiga : '-' }}" name="pelaksana_tiga" placeholder="Pelaksana 3 ..." readonly>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Pelaksana 4</label>
                                                                                    <input type="text" class="form-control" value="{{ $dat->pelaksana_empat ? $dat->pelaksana_empat : '-' }}" name="pelaksana_empat" placeholder="Pelaksana 4 ..." readonly>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Pelaksana 5</label>
                                                                                    <input type="text" class="form-control" value="{{ $dat->pelaksana_lima ? $dat->pelaksana_lima : '-' }}" name="pelaksana_lima" placeholder="Pelaksana 5 ..." readonly>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Pelaksana 6</label>
                                                                                    <input type="text" class="form-control" value="{{ $dat->pelaksana_enam ? $dat->pelaksana_enam : '-' }}" name="pelaksana_enam" placeholder="Pelaksana 6 ..." readonly>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="card card-secondary">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">Supervisi</h3>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="form-group">
                                                                                    <label>Supervisi</label>
                                                                                    <input type="text" class="form-control" value="{{ $dat->supervisi ? $dat->supervisi : '-' }}" name="supervisi" placeholder="Supervisi ..." readonly>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-center">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <a target="_blank" href="{{ route('data.trafo.print', $dat->id) }}" class="btn btn-primary"><i class="fas fa-print"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal Delete -->
                                            <div class="modal fade" id="modal-delete-{{ $dat->id }}" style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content bg-danger">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Hapus Data</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Apakah kamu yakin mau hapus data ini?</p>
                                                        </div>
                                                        <form role="form" method="POST" action="{{ route('data.trafo.destroy', $dat->id) }}">
                                                            @csrf
                                                            {{ method_field('DELETE') }}
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>
                                                                <button type="submit" class="btn btn-outline-light">Ya</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
@stop

@section('css')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@stop

@section('plugins.Datatables', true)

@section('js')
<script>
    console.log('Hi!');
</script>
<script>
    $(function() {
        $('#data').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
@stop
