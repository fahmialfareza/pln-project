@extends('adminlte::page')

@section('title', 'Tambah Data')

@section('content_header')
<h1>Tambah Data</h1>
@stop

@section('content')
    <div class="container-fluid">
        <form role="form" method="POST" action="{{ route('data.store') }}">
            @csrf
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
                                        <input type="text" class="form-control" value="{{ old('hu_merk') }}" name="hu_merk" placeholder="Merk ...">
                                    </div>
                                    <div class="form-group">
                                        <label>Type</label>
                                        <input type="text" class="form-control" value="{{ old('hu_type') }}" name="hu_type" placeholder="Type ...">
                                    </div>
                                    <div class="form-group">
                                        <label>No. Serie</label>
                                        <input type="text" class="form-control" value="{{ old('hu_no_serie') }}" name="hu_no_serie" placeholder="No. Serie ...">
                                    </div>
                                    <div class="form-group">
                                        <label>Rating</label>
                                        <input type="text" class="form-control" value="{{ old('hu_rating') }}" name="hu_rating" placeholder="Rating ...">
                                    </div>
                                    <div class="form-group">
                                        <label>Karakteristik</label>
                                        <input type="text" class="form-control" value="{{ old('hu_karakteristik') }}" name="hu_karakteristik" placeholder="Karakteristik ...">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="date" class="form-control" value="{{ old('hu_tanggal') }}" name="hu_tanggal" placeholder="Tanggal ...">
                                    </div>
                                    <div class="form-group">
                                        <label>Lokasi</label>
                                        <input type="text" class="form-control" value="{{ old('hu_lokasi') }}" name="hu_lokasi" placeholder="Lokasi ...">
                                    </div>
                                    <div class="form-group">
                                        <label>Bay</label>
                                        <input type="text" class="form-control" value="{{ old('hu_bay') }}" name="hu_bay" placeholder="Bay ...">
                                    </div>
                                    <div class="form-group">
                                        <label>Ratio CT</label>
                                        <input type="text" class="form-control" value="{{ old('hu_ratio_ct') }}" name="hu_ratio_ct" placeholder="Ratio CT ...">
                                    </div>
                                    <div class="form-group">
                                        <label>Alat Uji</label>
                                        <input type="text" class="form-control" value="{{ old('hu_alat_uji') }}" name="hu_alat_uji" placeholder="Alat Uji ...">
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
                                        <input type="number" class="form-control" onchange="change()" id="akmk_fasa_r_arus_nominal" value="{{ old('akmk_fasa_r_arus_nominal') }}" name="akmk_fasa_r_arus_nominal" placeholder="Fasa R ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa S</label>
                                        <input type="number" class="form-control" onchange="change()" id="akmk_fasa_s_arus_nominal" value="{{ old('akmk_fasa_s_arus_nominal') }}" name="akmk_fasa_s_arus_nominal" placeholder="Fasa S ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa T</label>
                                        <input type="number" class="form-control" onchange="change()" id="akmk_fasa_t_arus_nominal" value="{{ old('akmk_fasa_t_arus_nominal') }}" name="akmk_fasa_t_arus_nominal" placeholder="Fasa T ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa GFR</label>
                                        <input type="number" class="form-control" onchange="change()" id="akmk_fasa_gfr_arus_nominal" value="{{ old('akmk_fasa_gfr_arus_nominal') }}" name="akmk_fasa_gfr_arus_nominal" placeholder="Fasa GFR ...">
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
                                        <input type="number" class="form-control" id="akmk_fasa_r_setting" onchange="change()" value="{{ old('akmk_fasa_r_setting') }}" name="akmk_fasa_r_setting" placeholder="Fasa R ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa S</label>
                                        <input type="number" class="form-control" id="akmk_fasa_s_setting" onchange="change()" value="{{ old('akmk_fasa_s_setting') }}" name="akmk_fasa_s_setting" placeholder="Fasa S ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa T</label>
                                        <input type="number" class="form-control" id="akmk_fasa_t_setting" onchange="change()" value="{{ old('akmk_fasa_t_setting') }}" name="akmk_fasa_t_setting" placeholder="Fasa T ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa GFR</label>
                                        <input type="number" class="form-control" id="akmk_fasa_gfr_setting" onchange="change()" value="{{ old('akmk_fasa_gfr_setting') }}" name="akmk_fasa_gfr_setting" placeholder="Fasa GFR ...">
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
                                        <input type="number" class="form-control" id="akmk_fasa_r_arus_kerja" onchange="change()" value="{{ old('akmk_fasa_r_arus_kerja') }}" name="akmk_fasa_r_arus_kerja" placeholder="Fasa R ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa S</label>
                                        <input type="number" class="form-control" id="akmk_fasa_s_arus_kerja" onchange="change()" value="{{ old('akmk_fasa_s_arus_kerja') }}" name="akmk_fasa_s_arus_kerja" placeholder="Fasa S ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa T</label>
                                        <input type="number" class="form-control" id="akmk_fasa_t_arus_kerja" onchange="change()" value="{{ old('akmk_fasa_t_arus_kerja') }}" name="akmk_fasa_t_arus_kerja" placeholder="Fasa T ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa GFR</label>
                                        <input type="number" class="form-control" id="akmk_fasa_gfr_arus_kerja" onchange="change()" value="{{ old('akmk_fasa_gfr_arus_kerja') }}" name="akmk_fasa_gfr_arus_kerja" placeholder="Fasa GFR ...">
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
                                        <input type="number" class="form-control" id="akmk_fasa_r_arus_kembali" onchange="change()" value="{{ old('akmk_fasa_r_arus_kembali') }}" name="akmk_fasa_r_arus_kembali" placeholder="Fasa R ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa S</label>
                                        <input type="number" class="form-control" id="akmk_fasa_s_arus_kembali" onchange="change()" value="{{ old('akmk_fasa_s_arus_kembali') }}" name="akmk_fasa_s_arus_kembali" placeholder="Fasa S ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa T</label>
                                        <input type="number" class="form-control" id="akmk_fasa_t_arus_kembali" onchange="change()" value="{{ old('akmk_fasa_t_arus_kembali') }}" name="akmk_fasa_t_arus_kembali" placeholder="Fasa T ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa GFR</label>
                                        <input type="number" class="form-control" id="akmk_fasa_gfr_arus_kembali" onchange="change()" value="{{ old('akmk_fasa_gfr_arus_kembali') }}" name="akmk_fasa_gfr_arus_kembali" placeholder="Fasa GFR ...">
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
                                        <input type="number" class="form-control" value="{{ old('akmk_fasa_r_ratio') }}" name="akmk_fasa_r_ratio" placeholder="Fasa R ...">
                                        %
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa S</label>
                                        <input type="number" class="form-control" value="{{ old('akmk_fasa_s_ratio') }}" name="akmk_fasa_s_ratio" placeholder="Fasa S ...">
                                        %
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa T</label>
                                        <input type="number" class="form-control" value="{{ old('akmk_fasa_t_ratio') }}" name="akmk_fasa_t_ratio" placeholder="Fasa T ...">
                                        %
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa GFR</label>
                                        <input type="number" class="form-control" value="{{ old('akmk_fasa_gfr_ratio') }}" name="akmk_fasa_gfr_ratio" placeholder="Fasa GFR ...">
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
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>tms OCR</label>
                                        <input type="number" class="form-control" id="kw_tms_ocr" onchange="change()" value="{{ old('kw_tms_ocr') }}" name="kw_tms_ocr" placeholder="tms OCR ...">
                                        SI
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>tms GFR</label>
                                        <input type="number" class="form-control" id="kw_tms_gfr" onchange="change()" value="{{ old('kw_tms_gfr') }}" name="kw_tms_gfr" placeholder="tms OCR ...">
                                        SI
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
                                        <input type="number" class="form-control" value="{{ old('kw_fasa_r_satu_lima') }}" name="kw_fasa_r_satu_lima" placeholder="1.5 x Is ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>2 x Is</label>
                                        <input type="number" class="form-control" id="kw_fasa_r_dua" onchange="change()" value="{{ old('kw_fasa_r_dua') }}" name="kw_fasa_r_dua" placeholder="2 x Is ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>3 x Is</label>
                                        <input type="number" class="form-control" value="{{ old('kw_fasa_r_tiga') }}" name="kw_fasa_r_tiga" placeholder="3 x Is ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>4 x Is</label>
                                        <input type="number" class="form-control" value="{{ old('kw_fasa_r_empat') }}" name="kw_fasa_r_empat" placeholder="4 x Is ...">
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
                                        <input type="number" class="form-control" value="{{ old('kw_fasa_s_satu_lima') }}" name="kw_fasa_s_satu_lima" placeholder="1.5 x Is ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>2 x Is</label>
                                        <input type="number" class="form-control" id="kw_fasa_s_dua" onchange="change()" value="{{ old('kw_fasa_s_dua') }}" name="kw_fasa_s_dua" placeholder="2 x Is ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>3 x Is</label>
                                        <input type="number" class="form-control" value="{{ old('kw_fasa_s_tiga') }}" name="kw_fasa_s_tiga" placeholder="3 x Is ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>4 x Is</label>
                                        <input type="number" class="form-control" value="{{ old('kw_fasa_s_empat') }}" name="kw_fasa_s_empat" placeholder="4 x Is ...">
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
                                        <input type="number" class="form-control" value="{{ old('kw_fasa_t_satu_lima') }}" name="kw_fasa_t_satu_lima" placeholder="1.5 x Is ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>2 x Is</label>
                                        <input type="number" class="form-control" id="kw_fasa_t_dua" onchange="change()" value="{{ old('kw_fasa_t_dua') }}" name="kw_fasa_t_dua" placeholder="2 x Is ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>3 x Is</label>
                                        <input type="number" class="form-control" value="{{ old('kw_fasa_t_tiga') }}" name="kw_fasa_t_tiga" placeholder="3 x Is ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>4 x Is</label>
                                        <input type="number" class="form-control" value="{{ old('kw_fasa_t_empat') }}" name="kw_fasa_t_empat" placeholder="4 x Is ...">
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
                                        <input type="number" class="form-control" value="{{ old('kw_fasa_gfr_satu_lima') }}" name="kw_fasa_gfr_satu_lima" placeholder="1.5 x Is ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>2 x Is</label>
                                        <input type="number" class="form-control" id="kw_fasa_gfr_dua" onchange="change()" value="{{ old('kw_fasa_gfr_dua') }}" name="kw_fasa_gfr_dua" placeholder="2 x Is ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>3 x Is</label>
                                        <input type="number" class="form-control" value="{{ old('kw_fasa_gfr_tiga') }}" name="kw_fasa_gfr_tiga" placeholder="3 x Is ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>4 x Is</label>
                                        <input type="number" class="form-control" value="{{ old('kw_fasa_gfr_empat') }}" name="kw_fasa_gfr_empat" placeholder="4 x Is ...">
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
                                        <input type="number" class="form-control" id="wks_fasa_r_setting_ihs_satu" onchange="change()" value="{{ old('wks_fasa_r_setting_ihs_satu') }}" name="wks_fasa_r_setting_ihs_satu" placeholder="Fasa R ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa S</label>
                                        <input type="number" class="form-control" id="wks_fasa_s_setting_ihs_satu" onchange="change()" value="{{ old('wks_fasa_s_setting_ihs_satu') }}" name="wks_fasa_s_setting_ihs_satu" placeholder="Fasa S ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa T</label>
                                        <input type="number" class="form-control" id="wks_fasa_t_setting_ihs_satu" onchange="change()" value="{{ old('wks_fasa_t_setting_ihs_satu') }}" name="wks_fasa_t_setting_ihs_satu" placeholder="Fasa T ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa GFR</label>
                                        <input type="number" class="form-control" id="wks_fasa_gfr_setting_ihs_satu" onchange="change()" value="{{ old('wks_fasa_gfr_setting_ihs_satu') }}" name="wks_fasa_gfr_setting_ihs_satu" placeholder="Fasa GFR ...">
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
                                        <input type="number" class="form-control" id="wks_fasa_r_arus_uji_ihs_satu" onchange="change()" value="{{ old('wks_fasa_r_arus_uji_ihs_satu') }}" name="wks_fasa_r_arus_uji_ihs_satu" placeholder="Fasa R ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa S</label>
                                        <input type="number" class="form-control" id="wks_fasa_s_arus_uji_ihs_satu" onchange="change()" value="{{ old('wks_fasa_s_arus_uji_ihs_satu') }}" name="wks_fasa_s_arus_uji_ihs_satu" placeholder="Fasa S ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa T</label>
                                        <input type="number" class="form-control" id="wks_fasa_t_arus_uji_ihs_satu" onchange="change()" value="{{ old('wks_fasa_t_arus_uji_ihs_satu') }}" name="wks_fasa_t_arus_uji_ihs_satu" placeholder="Fasa T ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa GFR</label>
                                        <input type="number" class="form-control" id="wks_fasa_gfr_arus_uji_ihs_satu" onchange="change()" value="{{ old('wks_fasa_gfr_arus_uji_ihs_satu') }}" name="wks_fasa_gfr_arus_uji_ihs_satu" placeholder="Fasa GFR ...">
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
                                        <input type="number" class="form-control" id="wks_fasa_r_waktu_kerja_ihs_satu" onchange="change()" value="{{ old('wks_fasa_r_waktu_kerja_ihs_satu') }}" name="wks_fasa_r_waktu_kerja_ihs_satu" placeholder="Fasa R ...">
                                        sekon
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa S</label>
                                        <input type="number" class="form-control" id="wks_fasa_s_waktu_kerja_ihs_satu" onchange="change()" value="{{ old('wks_fasa_s_waktu_kerja_ihs_satu') }}" name="wks_fasa_s_waktu_kerja_ihs_satu" placeholder="Fasa S ...">
                                        sekon
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa T</label>
                                        <input type="number" class="form-control" id="wks_fasa_t_waktu_kerja_ihs_satu" onchange="change()" value="{{ old('wks_fasa_t_waktu_kerja_ihs_satu') }}" name="wks_fasa_t_waktu_kerja_ihs_satu" placeholder="Fasa T ...">
                                        sekon
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa GFR</label>
                                        <input type="number" class="form-control" id="wks_fasa_gfr_waktu_kerja_ihs_satu" onchange="change()" value="{{ old('wks_fasa_gfr_waktu_kerja_ihs_satu') }}" name="wks_fasa_gfr_waktu_kerja_ihs_satu" placeholder="Fasa GFR ...">
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
                                        <input type="number" class="form-control" id="wks_fasa_r_setting_ihs_dua" onchange="change()" value="{{ old('wks_fasa_r_setting_ihs_dua') }}" name="wks_fasa_r_setting_ihs_dua" placeholder="Fasa R ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa S</label>
                                        <input type="number" class="form-control" id="wks_fasa_s_setting_ihs_dua" onchange="change()" value="{{ old('wks_fasa_s_setting_ihs_dua') }}" name="wks_fasa_s_setting_ihs_dua" placeholder="Fasa S ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa T</label>
                                        <input type="number" class="form-control" id="wks_fasa_t_setting_ihs_dua" onchange="change()" value="{{ old('wks_fasa_t_setting_ihs_dua') }}" name="wks_fasa_t_setting_ihs_dua" placeholder="Fasa T ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa GFR</label>
                                        <input type="number" class="form-control" id="wks_fasa_gfr_setting_ihs_dua" onchange="change()" value="{{ old('wks_fasa_gfr_setting_ihs_dua') }}" name="wks_fasa_gfr_setting_ihs_dua" placeholder="Fasa GFR ...">
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
                                        <input type="number" class="form-control" id="wks_fasa_r_arus_uji_ihs_dua" onchange="change()" value="{{ old('wks_fasa_r_arus_uji_ihs_dua') }}" name="wks_fasa_r_arus_uji_ihs_dua" placeholder="Fasa R ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa S</label>
                                        <input type="number" class="form-control" id="wks_fasa_s_arus_uji_ihs_dua" onchange="change()" value="{{ old('wks_fasa_s_arus_uji_ihs_dua') }}" name="wks_fasa_s_arus_uji_ihs_dua" placeholder="Fasa S ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa T</label>
                                        <input type="number" class="form-control" id="wks_fasa_t_arus_uji_ihs_dua" onchange="change()" value="{{ old('wks_fasa_t_arus_uji_ihs_dua') }}" name="wks_fasa_t_arus_uji_ihs_dua" placeholder="Fasa T ...">
                                        Ampere
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa GFR</label>
                                        <input type="number" class="form-control" id="wks_fasa_gfr_arus_uji_ihs_dua" onchange="change()" value="{{ old('wks_fasa_gfr_arus_uji_ihs_dua') }}" name="wks_fasa_gfr_arus_uji_ihs_dua" placeholder="Fasa GFR ...">
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
                                        <input type="number" class="form-control" id="wks_fasa_r_waktu_kerja_ihs_dua" onchange="change()" value="{{ old('wks_fasa_r_waktu_kerja_ihs_dua') }}" name="wks_fasa_r_waktu_kerja_ihs_dua" placeholder="Fasa R ...">
                                        sekon
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa S</label>
                                        <input type="number" class="form-control" id="wks_fasa_s_waktu_kerja_ihs_dua" onchange="change()" value="{{ old('wks_fasa_s_waktu_kerja_ihs_dua') }}" name="wks_fasa_s_waktu_kerja_ihs_dua" placeholder="Fasa S ...">
                                        sekon
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa T</label>
                                        <input type="number" class="form-control" id="wks_fasa_t_waktu_kerja_ihs_dua" onchange="change()" value="{{ old('wks_fasa_t_waktu_kerja_ihs_dua') }}" name="wks_fasa_t_waktu_kerja_ihs_dua" placeholder="Fasa T ...">
                                        sekon
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa GFR</label>
                                        <input type="number" class="form-control" id="wks_fasa_gfr_waktu_kerja_ihs_dua" onchange="change()" value="{{ old('wks_fasa_gfr_waktu_kerja_ihs_dua') }}" name="wks_fasa_gfr_waktu_kerja_ihs_dua" placeholder="Fasa GFR ...">
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
                                                <input type="number" class="form-control" id="sar_fasa_r_posisi_in" readonly value="{{ old('sar_fasa_r_posisi_in') }}" name="sar_fasa_r_posisi_in" placeholder="In ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Is</label>
                                                <input type="number" class="form-control" id="sar_fasa_r_posisi_is" readonly value="{{ old('sar_fasa_r_posisi_is') }}" name="sar_fasa_r_posisi_is" placeholder="Is ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>tms</label>
                                                <input type="number" class="form-control" id="sar_fasa_r_posisi_tms" readonly value="{{ old('sar_fasa_r_posisi_tms') }}" name="sar_fasa_r_posisi_tms" placeholder="tms ...">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-1</label>
                                                <input type="number" class="form-control" id="sar_fasa_r_posisi_ihs_satu" readonly value="{{ old('sar_fasa_r_posisi_ihs_satu') }}" name="sar_fasa_r_posisi_ihs_satu" placeholder="IHS-1 ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-2</label>
                                                <input type="number" class="form-control" id="sar_fasa_r_posisi_ihs_dua" readonly value="{{ old('sar_fasa_r_posisi_ihs_dua') }}" name="sar_fasa_r_posisi_ihs_dua" placeholder="IHS-2 ...">
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
                                                <input type="number" class="form-control" id="sar_fasa_r_hasil_kerja" readonly value="{{ old('sar_fasa_r_hasil_kerja') }}" name="sar_fasa_r_hasil_kerja" placeholder="I Kerja ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>I Kembali</label>
                                                <input type="number" class="form-control" id="sar_fasa_r_hasil_kembali" readonly value="{{ old('sar_fasa_r_hasil_kembali') }}" name="sar_fasa_r_hasil_kembali" placeholder="I Kembali ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>t</label>
                                                <input type="number" class="form-control" id="sar_fasa_r_hasil_t" readonly value="{{ old('sar_fasa_r_hasil_t') }}" name="sar_fasa_r_hasil_t" placeholder="tms ...">
                                                detik
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-1 (Ampere)</label>
                                                <input type="number" class="form-control" id="sar_fasa_r_hasil_ihs_satu_a" readonly value="{{ old('sar_fasa_r_hasil_ihs_satu_a') }}" name="sar_fasa_r_hasil_ihs_satu_a" placeholder="IHS-1 (Ampere) ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-1 (detik)</label>
                                                <input type="number" class="form-control" id="sar_fasa_r_hasil_ihs_satu_det" readonly value="{{ old('sar_fasa_r_hasil_ihs_satu_det') }}" name="sar_fasa_r_hasil_ihs_satu_det" placeholder="IHS-1 (detik) ...">
                                                detik
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-2 (Ampere)</label>
                                                <input type="number" class="form-control" id="sar_fasa_r_hasil_ihs_dua_a" readonly value="{{ old('sar_fasa_r_hasil_ihs_dua_a') }}" name="sar_fasa_r_hasil_ihs_dua_a" placeholder="IHS-2 (Ampere) ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-2 (detik)</label>
                                                <input type="number" class="form-control" id="sar_fasa_r_hasil_ihs_dua_det" readonly value="{{ old('sar_fasa_r_hasil_ihs_dua_det') }}" name="sar_fasa_r_hasil_ihs_dua_det" placeholder="IHS-2 (detik) ...">
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
                                            <h4>Fasa S</h4>
                                        </div>
                                        <div class="col-sm-2">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>In</label>
                                                <input type="number" class="form-control" id="sar_fasa_s_posisi_in" readonly value="{{ old('sar_fasa_s_posisi_in') }}" name="sar_fasa_s_posisi_in" placeholder="In ...">
                                                Ampere0
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Is</label>
                                                <input type="number" class="form-control" id="sar_fasa_s_posisi_is" readonly value="{{ old('sar_fasa_s_posisi_is') }}" name="sar_fasa_s_posisi_is" placeholder="Is ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>tms</label>
                                                <input type="number" class="form-control" id="sar_fasa_s_posisi_tms" readonly value="{{ old('sar_fasa_s_posisi_tms') }}" name="sar_fasa_s_posisi_tms" placeholder="tms ...">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-1</label>
                                                <input type="number" class="form-control" id="sar_fasa_s_posisi_ihs_satu" readonly value="{{ old('sar_fasa_s_posisi_ihs_satu') }}" name="sar_fasa_s_posisi_ihs_satu" placeholder="IHS-1 ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-2</label>
                                                <input type="number" class="form-control" id="sar_fasa_s_posisi_ihs_dua" readonly value="{{ old('sar_fasa_s_posisi_ihs_dua') }}" name="sar_fasa_s_posisi_ihs_dua" placeholder="IHS-2 ...">
                                                Ampere
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h4>Hasil Test Setting</h4>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4>Fasa S</h4>
                                        </div>
                                        <div class="col-sm-2">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>I Kerja</label>
                                                <input type="number" class="form-control" id="sar_fasa_s_hasil_kerja" readonly value="{{ old('sar_fasa_s_hasil_kerja') }}" name="sar_fasa_s_hasil_kerja" placeholder="I Kerja ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>I Kembali</label>
                                                <input type="number" class="form-control" id="sar_fasa_s_hasil_kembali" readonly value="{{ old('sar_fasa_s_hasil_kembali') }}" name="sar_fasa_s_hasil_kembali" placeholder="I Kembali ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>t</label>
                                                <input type="number" class="form-control" id="sar_fasa_s_hasil_t" readonly value="{{ old('sar_fasa_s_hasil_t') }}" name="sar_fasa_s_hasil_t" placeholder="tms ...">
                                                detik
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-1 (Ampere)</label>
                                                <input type="number" class="form-control" id="sar_fasa_s_hasil_ihs_satu_a" readonly value="{{ old('sar_fasa_s_hasil_ihs_satu_a') }}" name="sar_fasa_s_hasil_ihs_satu_a" placeholder="IHS-1 (Ampere) ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-1 (detik)</label>
                                                <input type="number" class="form-control" id="sar_fasa_s_hasil_ihs_satu_det" readonly value="{{ old('sar_fasa_s_hasil_ihs_satu_det') }}" name="sar_fasa_s_hasil_ihs_satu_det" placeholder="IHS-1 (detik) ...">
                                                detik
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-2 (Ampere)</label>
                                                <input type="number" class="form-control" id="sar_fasa_s_hasil_ihs_dua_a" readonly value="{{ old('sar_fasa_s_hasil_ihs_dua_a') }}" name="sar_fasa_s_hasil_ihs_dua_a" placeholder="IHS-2 (Ampere) ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-2 (detik)</label>
                                                <input type="number" class="form-control" id="sar_fasa_s_hasil_ihs_dua_det" readonly value="{{ old('sar_fasa_s_hasil_ihs_dua_det') }}" name="sar_fasa_s_hasil_ihs_dua_det" placeholder="IHS-2 (detik) ...">
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
                                                <input type="number" class="form-control" id="sar_fasa_t_posisi_in" readonly value="{{ old('sar_fasa_t_posisi_in') }}" name="sar_fasa_t_posisi_in" placeholder="In ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Is</label>
                                                <input type="number" class="form-control" id="sar_fasa_t_posisi_is" readonly value="{{ old('sar_fasa_t_posisi_is') }}" name="sar_fasa_t_posisi_is" placeholder="Is ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>tms</label>
                                                <input type="number" class="form-control" id="sar_fasa_t_posisi_tms" readonly value="{{ old('sar_fasa_t_posisi_tms') }}" name="sar_fasa_t_posisi_tms" placeholder="tms ...">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-1</label>
                                                <input type="number" class="form-control" id="sar_fasa_t_posisi_ihs_satu" readonly value="{{ old('sar_fasa_t_posisi_ihs_satu') }}" name="sar_fasa_t_posisi_ihs_satu" placeholder="IHS-1 ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-2</label>
                                                <input type="number" class="form-control" id="sar_fasa_t_posisi_ihs_dua" readonly value="{{ old('sar_fasa_t_posisi_ihs_dua') }}" name="sar_fasa_t_posisi_ihs_dua" placeholder="IHS-2 ...">
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
                                                <input type="number" class="form-control" id="sar_fasa_t_hasil_kerja" readonly value="{{ old('sar_fasa_t_hasil_kerja') }}" name="sar_fasa_t_hasil_kerja" placeholder="I Kerja ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>I Kembali</label>
                                                <input type="number" class="form-control" id="sar_fasa_t_hasil_kembali" readonly value="{{ old('sar_fasa_t_hasil_kembali') }}" name="sar_fasa_t_hasil_kembali" placeholder="I Kembali ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>t</label>
                                                <input type="number" class="form-control" id="sar_fasa_t_hasil_t" readonly value="{{ old('sar_fasa_t_hasil_t') }}" name="sar_fasa_t_hasil_t" placeholder="tms ...">
                                                detik
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-1 (Ampere)</label>
                                                <input type="number" class="form-control" id="sar_fasa_t_hasil_ihs_satu_a" readonly value="{{ old('sar_fasa_t_hasil_ihs_satu_a') }}" name="sar_fasa_t_hasil_ihs_satu_a" placeholder="IHS-1 (Ampere) ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-1 (detik)</label>
                                                <input type="number" class="form-control" id="sar_fasa_t_hasil_ihs_satu_det" readonly value="{{ old('sar_fasa_t_hasil_ihs_satu_det') }}" name="sar_fasa_t_hasil_ihs_satu_det" placeholder="IHS-1 (detik) ...">
                                                detik
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-2 (Ampere)</label>
                                                <input type="number" class="form-control" id="sar_fasa_t_hasil_ihs_dua_a" readonly value="{{ old('sar_fasa_t_hasil_ihs_dua_a') }}" name="sar_fasa_t_hasil_ihs_dua_a" placeholder="IHS-2 (Ampere) ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-2 (detik)</label>
                                                <input type="number" class="form-control" id="sar_fasa_t_hasil_ihs_dua_det" readonly value="{{ old('sar_fasa_t_hasil_ihs_dua_det') }}" name="sar_fasa_t_hasil_ihs_dua_det" placeholder="IHS-2 (detik) ...">
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
                                                <input type="number" class="form-control" id="sar_fasa_gfr_posisi_in" readonly value="{{ old('sar_fasa_gfr_posisi_in') }}" name="sar_fasa_gfr_posisi_in" placeholder="In ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Is</label>
                                                <input type="number" class="form-control" id="sar_fasa_gfr_posisi_is" readonly value="{{ old('sar_fasa_gfr_posisi_is') }}" name="sar_fasa_gfr_posisi_is" placeholder="Is ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>tms</label>
                                                <input type="number" class="form-control" id="sar_fasa_gfr_posisi_tms" readonly value="{{ old('sar_fasa_gfr_posisi_tms') }}" name="sar_fasa_gfr_posisi_tms" placeholder="tms ...">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-1</label>
                                                <input type="number" class="form-control" id="sar_fasa_gfr_posisi_ihs_satu" readonly value="{{ old('sar_fasa_gfr_posisi_ihs_satu') }}" name="sar_fasa_gfr_posisi_ihs_satu" placeholder="IHS-1 ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-2</label>
                                                <input type="number" class="form-control" id="sar_fasa_gfr_posisi_ihs_dua" readonly value="{{ old('sar_fasa_gfr_posisi_ihs_dua') }}" name="sar_fasa_gfr_posisi_ihs_dua" placeholder="IHS-2 ...">
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
                                                <input type="number" class="form-control" id="sar_fasa_gfr_hasil_kerja" readonly value="{{ old('sar_fasa_gfr_hasil_kerja') }}" name="sar_fasa_gfr_hasil_kerja" placeholder="I Kerja ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>I Kembali</label>
                                                <input type="number" class="form-control" id="sar_fasa_gfr_hasil_kembali" readonly value="{{ old('sar_fasa_gfr_hasil_kembali') }}" name="sar_fasa_gfr_hasil_kembali" placeholder="I Kembali ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>t</label>
                                                <input type="number" class="form-control" id="sar_fasa_gfr_hasil_t" readonly value="{{ old('sar_fasa_gfr_hasil_t') }}" name="sar_fasa_gfr_hasil_t" placeholder="tms ...">
                                                detik
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-1 (Ampere)</label>
                                                <input type="number" class="form-control" id="sar_fasa_gfr_hasil_ihs_satu_a" readonly value="{{ old('sar_fasa_gfr_hasil_ihs_satu_a') }}" name="sar_fasa_gfr_hasil_ihs_satu_a" placeholder="IHS-1 (Ampere) ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-1 (detik)</label>
                                                <input type="number" class="form-control" id="sar_fasa_gfr_hasil_ihs_satu_det" readonly value="{{ old('sar_fasa_gfr_hasil_ihs_satu_det') }}" name="sar_fasa_gfr_hasil_ihs_satu_det" placeholder="IHS-1 (detik) ...">
                                                detik
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-2 (Ampere)</label>
                                                <input type="number" class="form-control" id="sar_fasa_gfr_hasil_ihs_dua_a" readonly value="{{ old('sar_fasa_gfr_hasil_ihs_dua_a') }}" name="sar_fasa_gfr_hasil_ihs_dua_a" placeholder="IHS-2 (Ampere) ...">
                                                Ampere
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>IHS-2 (detik)</label>
                                                <input type="number" class="form-control" id="sar_fasa_gfr_hasil_ihs_dua_det" readonly value="{{ old('sar_fasa_gfr_hasil_ihs_dua_det') }}" name="sar_fasa_gfr_hasil_ihs_dua_det" placeholder="IHS-2 (detik) ...">
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
                                        <input type="text" class="form-control" value="{{ old('pj_fasa_r_indikasi') }}" name="pj_fasa_r_indikasi" placeholder="Indikasi ...">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>PMT</label>
                                        <input type="text" class="form-control" value="{{ old('pj_fasa_r_pmt') }}" name="pj_fasa_r_pmt" placeholder="PMT ...">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa T</label>
                                        <input type="text" class="form-control" value="{{ old('pj_fasa_r_keterangan') }}" name="pj_fasa_r_keterangan" placeholder="Keterangan ...">
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
                                        <input type="text" class="form-control" value="{{ old('pj_fasa_s_indikasi') }}" name="pj_fasa_s_indikasi" placeholder="Indikasi ...">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>PMT</label>
                                        <input type="text" class="form-control" value="{{ old('pj_fasa_s_pmt') }}" name="pj_fasa_s_pmt" placeholder="PMT ...">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa T</label>
                                        <input type="text" class="form-control" value="{{ old('pj_fasa_s_keterangan') }}" name="pj_fasa_s_keterangan" placeholder="Keterangan ...">
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
                                        <input type="text" class="form-control" value="{{ old('pj_fasa_t_indikasi') }}" name="pj_fasa_t_indikasi" placeholder="Indikasi ...">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>PMT</label>
                                        <input type="text" class="form-control" value="{{ old('pj_fasa_t_pmt') }}" name="pj_fasa_t_pmt" placeholder="PMT ...">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa T</label>
                                        <input type="text" class="form-control" value="{{ old('pj_fasa_t_keterangan') }}" name="pj_fasa_t_keterangan" placeholder="Keterangan ...">
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
                                        <input type="text" class="form-control" value="{{ old('pj_fasa_gfr_indikasi') }}" name="pj_fasa_gfr_indikasi" placeholder="Indikasi ...">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>PMT</label>
                                        <input type="text" class="form-control" value="{{ old('pj_fasa_gfr_pmt') }}" name="pj_fasa_gfr_pmt" placeholder="PMT ...">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fasa T</label>
                                        <input type="text" class="form-control" value="{{ old('pj_fasa_gfr_keterangan') }}" name="pj_fasa_gfr_keterangan" placeholder="Keterangan ...">
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
                                <textarea class="form-control" rows="5" value="{{ old('catatan') }}" name="catatan"></textarea>
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
                                <input type="text" class="form-control" value="{{ old('pelaksana_satu') }}" name="pelaksana_satu" placeholder="Pelaksana 1 ...">
                            </div>
                            <div class="form-group">
                                <label>Pelaksana 2</label>
                                <input type="text" class="form-control" value="{{ old('pelaksana_dua') }}" name="pelaksana_dua" placeholder="Pelaksana 2 ...">
                            </div>
                            <div class="form-group">
                                <label>Pelaksana 3</label>
                                <input type="text" class="form-control" value="{{ old('pelaksana_tiga') }}" name="pelaksana_tiga" placeholder="Pelaksana 3 ...">
                            </div>
                            <div class="form-group">
                                <label>Pelaksana 4</label>
                                <input type="text" class="form-control" value="{{ old('pelaksana_empat') }}" name="pelaksana_empat" placeholder="Pelaksana 4 ...">
                            </div>
                            <div class="form-group">
                                <label>Pelaksana 5</label>
                                <input type="text" class="form-control" value="{{ old('pelaksana_lima') }}" name="pelaksana_lima" placeholder="Pelaksana 5 ...">
                            </div>
                            <div class="form-group">
                                <label>Pelaksana 6</label>
                                <input type="text" class="form-control" value="{{ old('pelaksana_enam') }}" name="pelaksana_enam" placeholder="Pelaksana 6 ...">
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
                                <input type="text" class="form-control" value="{{ old('supervisi') }}" name="supervisi" placeholder="Supervisi ...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-footer d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop

@section('css')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
<script>
  function change() {
    document.getElementById("sar_fasa_r_posisi_in").value = document.getElementById("akmk_fasa_r_arus_nominal").value;
    document.getElementById("sar_fasa_s_posisi_in").value = document.getElementById("akmk_fasa_s_arus_nominal").value;
    document.getElementById("sar_fasa_t_posisi_in").value = document.getElementById("akmk_fasa_t_arus_nominal").value;
    document.getElementById("sar_fasa_gfr_posisi_in").value = document.getElementById("akmk_fasa_gfr_arus_nominal").value;
    document.getElementById("sar_fasa_r_posisi_is").value = document.getElementById("akmk_fasa_r_setting").value;
    document.getElementById("sar_fasa_s_posisi_is").value = document.getElementById("akmk_fasa_s_setting").value;
    document.getElementById("sar_fasa_t_posisi_is").value = document.getElementById("akmk_fasa_t_setting").value;
    document.getElementById("sar_fasa_gfr_posisi_is").value = document.getElementById("akmk_fasa_gfr_setting").value;
    document.getElementById("sar_fasa_r_posisi_tms").value = document.getElementById("kw_tms_ocr").value;
    document.getElementById("sar_fasa_s_posisi_tms").value = document.getElementById("kw_tms_ocr").value;
    document.getElementById("sar_fasa_t_posisi_tms").value = document.getElementById("kw_tms_ocr").value;
    document.getElementById("sar_fasa_gfr_posisi_tms").value = document.getElementById("kw_tms_gfr").value;
    document.getElementById("sar_fasa_r_posisi_ihs_satu").value = document.getElementById("wks_fasa_r_setting_ihs_satu").value;
    document.getElementById("sar_fasa_s_posisi_ihs_satu").value = document.getElementById("wks_fasa_s_setting_ihs_satu").value;
    document.getElementById("sar_fasa_t_posisi_ihs_satu").value = document.getElementById("wks_fasa_t_setting_ihs_satu").value;
    document.getElementById("sar_fasa_gfr_posisi_ihs_satu").value = document.getElementById("wks_fasa_gfr_setting_ihs_satu").value;
    document.getElementById("sar_fasa_r_posisi_ihs_dua").value = document.getElementById("wks_fasa_r_setting_ihs_dua").value;
    document.getElementById("sar_fasa_s_posisi_ihs_dua").value = document.getElementById("wks_fasa_s_setting_ihs_dua").value;
    document.getElementById("sar_fasa_t_posisi_ihs_dua").value = document.getElementById("wks_fasa_t_setting_ihs_dua").value;
    document.getElementById("sar_fasa_gfr_posisi_ihs_dua").value = document.getElementById("wks_fasa_gfr_setting_ihs_dua").value;
    document.getElementById("sar_fasa_r_hasil_kerja").value = document.getElementById("akmk_fasa_r_arus_kerja").value;
    document.getElementById("sar_fasa_s_hasil_kerja").value = document.getElementById("akmk_fasa_s_arus_kerja").value;
    document.getElementById("sar_fasa_t_hasil_kerja").value = document.getElementById("akmk_fasa_t_arus_kerja").value;
    document.getElementById("sar_fasa_gfr_hasil_kerja").value = document.getElementById("akmk_fasa_gfr_arus_kerja").value;
    document.getElementById("sar_fasa_r_hasil_kembali").value = document.getElementById("akmk_fasa_r_arus_kembali").value;
    document.getElementById("sar_fasa_s_hasil_kembali").value = document.getElementById("akmk_fasa_s_arus_kembali").value;
    document.getElementById("sar_fasa_t_hasil_kembali").value = document.getElementById("akmk_fasa_t_arus_kembali").value;
    document.getElementById("sar_fasa_gfr_hasil_kembali").value = document.getElementById("akmk_fasa_gfr_arus_kembali").value;
    document.getElementById("sar_fasa_r_hasil_t").value = document.getElementById("kw_fasa_r_dua").value;
    document.getElementById("sar_fasa_s_hasil_t").value = document.getElementById("kw_fasa_s_dua").value;
    document.getElementById("sar_fasa_t_hasil_t").value = document.getElementById("kw_fasa_t_dua").value;
    document.getElementById("sar_fasa_gfr_hasil_t").value = document.getElementById("kw_fasa_gfr_dua").value;
    document.getElementById("sar_fasa_r_hasil_ihs_satu_a").value = document.getElementById("wks_fasa_r_arus_uji_ihs_satu").value;
    document.getElementById("sar_fasa_s_hasil_ihs_satu_a").value = document.getElementById("wks_fasa_s_arus_uji_ihs_satu").value;
    document.getElementById("sar_fasa_t_hasil_ihs_satu_a").value = document.getElementById("wks_fasa_t_arus_uji_ihs_satu").value;
    document.getElementById("sar_fasa_gfr_hasil_ihs_satu_a").value = document.getElementById("wks_fasa_gfr_arus_uji_ihs_satu").value;
    document.getElementById("sar_fasa_r_hasil_ihs_satu_det").value = document.getElementById("wks_fasa_r_waktu_kerja_ihs_satu").value;
    document.getElementById("sar_fasa_s_hasil_ihs_satu_det").value = document.getElementById("wks_fasa_s_waktu_kerja_ihs_satu").value;
    document.getElementById("sar_fasa_t_hasil_ihs_satu_det").value = document.getElementById("wks_fasa_t_waktu_kerja_ihs_satu").value;
    document.getElementById("sar_fasa_gfr_hasil_ihs_satu_det").value = document.getElementById("wks_fasa_gfr_waktu_kerja_ihs_satu").value;
    document.getElementById("sar_fasa_r_hasil_ihs_dua_a").value = document.getElementById("wks_fasa_r_arus_uji_ihs_dua").value;
    document.getElementById("sar_fasa_s_hasil_ihs_dua_a").value = document.getElementById("wks_fasa_s_arus_uji_ihs_dua").value;
    document.getElementById("sar_fasa_t_hasil_ihs_dua_a").value = document.getElementById("wks_fasa_t_arus_uji_ihs_dua").value;
    document.getElementById("sar_fasa_gfr_hasil_ihs_dua_a").value = document.getElementById("wks_fasa_gfr_arus_uji_ihs_dua").value;
    document.getElementById("sar_fasa_r_hasil_ihs_dua_det").value = document.getElementById("wks_fasa_r_waktu_kerja_ihs_dua").value;
    document.getElementById("sar_fasa_s_hasil_ihs_dua_det").value = document.getElementById("wks_fasa_s_waktu_kerja_ihs_dua").value;
    document.getElementById("sar_fasa_t_hasil_ihs_dua_det").value = document.getElementById("wks_fasa_t_waktu_kerja_ihs_dua").value;
    document.getElementById("sar_fasa_gfr_hasil_ihs_dua_det").value = document.getElementById("wks_fasa_gfr_waktu_kerja_ihs_dua").value;
  }
</script>
@stop
