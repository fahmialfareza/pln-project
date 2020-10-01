@extends('adminlte::page')

<?php
    $title = 'Edit Data DOC-ID-' . $penghantar->id;
?>

@section('title', $title)

@section('content_header')
<h1>Edit Data DOCP-ID-{{ $penghantar->id }}</h1>
@stop

@section('content')
<div class="container-fluid">
  <form role="form" method="POST" action="{{ route('data.penghantar.update', $penghantar->id) }}">
      @csrf
      {{ method_field('PUT') }}
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <div class="card card-primary">
                      <div class="card-header">
                          <h3 class="card-title">1.3 Hasil Uji Proteksi Over Current Dan Ground Fault Relay</h3>
                      </div>
                      <div class="card-body">
                          <div class="row">
                              <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Merk</label>
                                      <input type="text" class="form-control" value="{{ old('hu_merk', $penghantar->hu_merk) }}" name="hu_merk" placeholder="Merk ...">
                                  </div>
                                  <div class="form-group">
                                      <label>Type</label>
                                      <input type="text" class="form-control" value="{{ old('hu_type', $penghantar->hu_type) }}" name="hu_type" placeholder="Type ...">
                                  </div>
                                  <div class="form-group">
                                      <label>No. Serie</label>
                                      <input type="text" class="form-control" value="{{ old('hu_no_serie', $penghantar->hu_no_serie) }}" name="hu_no_serie" placeholder="No. Serie ...">
                                  </div>
                                  <div class="form-group">
                                      <label>Rating</label>
                                      <input type="text" class="form-control" value="{{ old('hu_rating', $penghantar->hu_rating) }}" name="hu_rating" placeholder="Rating ...">
                                  </div>
                                  <div class="form-group">
                                      <label>Karakteristik</label>
                                      <input type="text" class="form-control" value="{{ old('hu_karakteristik', $penghantar->hu_karakteristik) }}" name="hu_karakteristik" placeholder="Karakteristik ...">
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label>Tanggal</label>
                                      <input type="date" class="form-control" value="{{ old('hu_tanggal', $penghantar->hu_tanggal) }}" name="hu_tanggal" placeholder="Tanggal ...">
                                  </div>
                                  <div class="form-group">
                                      <label>Lokasi</label>
                                      <input type="text" class="form-control" value="{{ old('hu_lokasi', $penghantar->hu_lokasi) }}" name="hu_lokasi" placeholder="Lokasi ...">
                                  </div>
                                  <div class="form-group">
                                      <label>Bay</label>
                                      <input type="text" class="form-control" value="{{ old('hu_bay', $penghantar->hu_bay) }}" name="hu_bay" placeholder="Bay ...">
                                  </div>
                                  <div class="form-group">
                                      <label>Ratio CT</label>
                                      <input type="text" class="form-control" value="{{ old('hu_ratio_ct', $penghantar->hu_ratio_ct) }}" name="hu_ratio_ct" placeholder="Ratio CT ...">
                                  </div>
                                  <div class="form-group">
                                      <label>Alat Uji</label>
                                      <input type="text" class="form-control" value="{{ old('hu_alat_uji', $penghantar->hu_alat_uji) }}" name="hu_alat_uji" placeholder="Alat Uji ...">
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
                                      <input type="number" step="0.0001" class="form-control" onchange="change()" id="akmk_fasa_r_arus_nominal" value="{{ old('akmk_fasa_r_arus_nominal', $penghantar->akmk_fasa_r_arus_nominal) }}" name="akmk_fasa_r_arus_nominal" placeholder="Fasa R ...">
                                      Ampere
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa S</label>
                                      <input type="number" step="0.0001" class="form-control" onchange="change()" id="akmk_fasa_s_arus_nominal" value="{{ old('akmk_fasa_s_arus_nominal', $penghantar->akmk_fasa_s_arus_nominal) }}" name="akmk_fasa_s_arus_nominal" placeholder="Fasa S ...">
                                      Ampere
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa T</label>
                                      <input type="number" step="0.0001" class="form-control" onchange="change()" id="akmk_fasa_t_arus_nominal" value="{{ old('akmk_fasa_t_arus_nominal', $penghantar->akmk_fasa_t_arus_nominal) }}" name="akmk_fasa_t_arus_nominal" placeholder="Fasa T ...">
                                      Ampere
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa GFR</label>
                                      <input type="number" step="0.0001" class="form-control" onchange="change()" id="akmk_fasa_gfr_arus_nominal" value="{{ old('akmk_fasa_gfr_arus_nominal', $penghantar->akmk_fasa_gfr_arus_nominal) }}" name="akmk_fasa_gfr_arus_nominal" placeholder="Fasa GFR ...">
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
                                      <input type="number" step="0.0001" class="form-control" id="akmk_fasa_r_setting" onchange="change()" value="{{ old('akmk_fasa_r_setting', $penghantar->akmk_fasa_r_setting) }}" name="akmk_fasa_r_setting" placeholder="Fasa R ...">
                                      Ampere
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa S</label>
                                      <input type="number" step="0.0001" class="form-control" id="akmk_fasa_s_setting" onchange="change()" value="{{ old('akmk_fasa_s_setting', $penghantar->akmk_fasa_s_setting) }}" name="akmk_fasa_s_setting" placeholder="Fasa S ...">
                                      Ampere
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa T</label>
                                      <input type="number" step="0.0001" class="form-control" id="akmk_fasa_t_setting" onchange="change()" value="{{ old('akmk_fasa_t_setting', $penghantar->akmk_fasa_t_setting) }}" name="akmk_fasa_t_setting" placeholder="Fasa T ...">
                                      Ampere
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa GFR</label>
                                      <input type="number" step="0.0001" class="form-control" id="akmk_fasa_gfr_setting" onchange="change()" value="{{ old('akmk_fasa_gfr_setting', $penghantar->akmk_fasa_gfr_setting) }}" name="akmk_fasa_gfr_setting" placeholder="Fasa GFR ...">
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
                                      <input type="number" step="0.0001" class="form-control" id="akmk_fasa_r_arus_kerja" onchange="change()" value="{{ old('akmk_fasa_r_arus_kerja', $penghantar->akmk_fasa_r_arus_kerja) }}" name="akmk_fasa_r_arus_kerja" placeholder="Fasa R ...">
                                      Ampere
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa S</label>
                                      <input type="number" step="0.0001" class="form-control" id="akmk_fasa_s_arus_kerja" onchange="change()" value="{{ old('akmk_fasa_s_arus_kerja', $penghantar->akmk_fasa_s_arus_kerja) }}" name="akmk_fasa_s_arus_kerja" placeholder="Fasa S ...">
                                      Ampere
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa T</label>
                                      <input type="number" step="0.0001" class="form-control" id="akmk_fasa_t_arus_kerja" onchange="change()" value="{{ old('akmk_fasa_t_arus_kerja', $penghantar->akmk_fasa_t_arus_kerja) }}" name="akmk_fasa_t_arus_kerja" placeholder="Fasa T ...">
                                      Ampere
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa GFR</label>
                                      <input type="number" step="0.0001" class="form-control" id="akmk_fasa_gfr_arus_kerja" onchange="change()" value="{{ old('akmk_fasa_gfr_arus_kerja', $penghantar->akmk_fasa_gfr_arus_kerja) }}" name="akmk_fasa_gfr_arus_kerja" placeholder="Fasa GFR ...">
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
                                      <input type="number" step="0.0001" class="form-control" id="akmk_fasa_r_arus_kembali" onchange="change()" value="{{ old('akmk_fasa_r_arus_kembali', $penghantar->akmk_fasa_r_arus_kembali) }}" name="akmk_fasa_r_arus_kembali" placeholder="Fasa R ...">
                                      Ampere
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa S</label>
                                      <input type="number" step="0.0001" class="form-control" id="akmk_fasa_s_arus_kembali" onchange="change()" value="{{ old('akmk_fasa_s_arus_kembali', $penghantar->akmk_fasa_s_arus_kembali) }}" name="akmk_fasa_s_arus_kembali" placeholder="Fasa S ...">
                                      Ampere
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa T</label>
                                      <input type="number" step="0.0001" class="form-control" id="akmk_fasa_t_arus_kembali" onchange="change()" value="{{ old('akmk_fasa_t_arus_kembali', $penghantar->akmk_fasa_t_arus_kembali) }}" name="akmk_fasa_t_arus_kembali" placeholder="Fasa T ...">
                                      Ampere
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa GFR</label>
                                      <input type="number" step="0.0001" class="form-control" id="akmk_fasa_gfr_arus_kembali" onchange="change()" value="{{ old('akmk_fasa_gfr_arus_kembali', $penghantar->akmk_fasa_gfr_arus_kembali) }}" name="akmk_fasa_gfr_arus_kembali" placeholder="Fasa GFR ...">
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
                                      <input type="number" step="0.0001" class="form-control" id="akmk_fasa_r_ratio" readonly value="{{ old('akmk_fasa_r_ratio', $penghantar->akmk_fasa_r_ratio) }}" name="akmk_fasa_r_ratio" placeholder="Fasa R ...">
                                      %
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa S</label>
                                      <input type="number" step="0.0001" class="form-control" id="akmk_fasa_s_ratio" readonly value="{{ old('akmk_fasa_s_ratio', $penghantar->akmk_fasa_s_ratio) }}" name="akmk_fasa_s_ratio" placeholder="Fasa S ...">
                                      %
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa T</label>
                                      <input type="number" step="0.0001" class="form-control" id="akmk_fasa_t_ratio" readonly value="{{ old('akmk_fasa_t_ratio', $penghantar->akmk_fasa_t_ratio) }}" name="akmk_fasa_t_ratio" placeholder="Fasa T ...">
                                      %
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa GFR</label>
                                      <input type="number" step="0.0001" class="form-control" id="akmk_fasa_gfr_ratio" readonly value="{{ old('akmk_fasa_gfr_ratio', $penghantar->akmk_fasa_gfr_ratio) }}" name="akmk_fasa_gfr_ratio" placeholder="Fasa GFR ...">
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
                                      <input type="number" step="0.0001" class="form-control" id="kw_tms_ocr" onchange="change()" value="{{ old('kw_tms_ocr', $penghantar->kw_tms_ocr) }}" name="kw_tms_ocr" placeholder="tms OCR ...">
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>tms OCR (variabel)</label>
                                      <input type="text" class="form-control" value="{{ old('kw_tms_ocr_variable', $penghantar->kw_tms_ocr_variable) }}" name="kw_tms_ocr_variable" placeholder="tms OCR variabel ...">
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>tms GFR</label>
                                      <input type="number" step="0.0001" class="form-control" id="kw_tms_gfr" onchange="change()" value="{{ old('kw_tms_gfr', $penghantar->kw_tms_gfr) }}" name="kw_tms_gfr" placeholder="tms GFR ...">
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>tms GFR (variabel)</label>
                                      <input type="text" class="form-control" value="{{ old('kw_tms_gfr_variable', $penghantar->kw_tms_gfr_variable) }}" name="kw_tms_gfr_variable" placeholder="tms GFR variabel ...">
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
                                      <input type="number" step="0.0001" class="form-control" value="{{ old('kw_fasa_r_satu_lima', $penghantar->kw_fasa_r_satu_lima) }}" name="kw_fasa_r_satu_lima" placeholder="1.5 x Is ...">
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>2 x Is</label>
                                      <input type="number" step="0.0001" class="form-control" id="kw_fasa_r_dua" onchange="change()" value="{{ old('kw_fasa_r_dua', $penghantar->kw_fasa_r_dua) }}" name="kw_fasa_r_dua" placeholder="2 x Is ...">
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>3 x Is</label>
                                      <input type="number" step="0.0001" class="form-control" value="{{ old('kw_fasa_r_tiga', $penghantar->kw_fasa_r_tiga) }}" name="kw_fasa_r_tiga" placeholder="3 x Is ...">
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>4 x Is</label>
                                      <input type="number" step="0.0001" class="form-control" value="{{ old('kw_fasa_r_empat', $penghantar->kw_fasa_r_empat) }}" name="kw_fasa_r_empat" placeholder="4 x Is ...">
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
                                      <input type="number" step="0.0001" class="form-control" value="{{ old('kw_fasa_s_satu_lima', $penghantar->kw_fasa_s_satu_lima) }}" name="kw_fasa_s_satu_lima" placeholder="1.5 x Is ...">
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>2 x Is</label>
                                      <input type="number" step="0.0001" class="form-control" id="kw_fasa_s_dua" onchange="change()" value="{{ old('kw_fasa_s_dua', $penghantar->kw_fasa_s_dua) }}" name="kw_fasa_s_dua" placeholder="2 x Is ...">
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>3 x Is</label>
                                      <input type="number" step="0.0001" class="form-control" value="{{ old('kw_fasa_s_tiga', $penghantar->kw_fasa_s_tiga) }}" name="kw_fasa_s_tiga" placeholder="3 x Is ...">
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>4 x Is</label>
                                      <input type="number" step="0.0001" class="form-control" value="{{ old('kw_fasa_s_empat', $penghantar->kw_fasa_s_empat) }}" name="kw_fasa_s_empat" placeholder="4 x Is ...">
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
                                      <input type="number" step="0.0001" class="form-control" value="{{ old('kw_fasa_t_satu_lima', $penghantar->kw_fasa_t_satu_lima) }}" name="kw_fasa_t_satu_lima" placeholder="1.5 x Is ...">
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>2 x Is</label>
                                      <input type="number" step="0.0001" class="form-control" id="kw_fasa_t_dua" onchange="change()" value="{{ old('kw_fasa_t_dua', $penghantar->kw_fasa_t_dua) }}" name="kw_fasa_t_dua" placeholder="2 x Is ...">
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>3 x Is</label>
                                      <input type="number" step="0.0001" class="form-control" value="{{ old('kw_fasa_t_tiga', $penghantar->kw_fasa_t_tiga) }}" name="kw_fasa_t_tiga" placeholder="3 x Is ...">
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>4 x Is</label>
                                      <input type="number" step="0.0001" class="form-control" value="{{ old('kw_fasa_t_empat', $penghantar->kw_fasa_t_empat) }}" name="kw_fasa_t_empat" placeholder="4 x Is ...">
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
                                      <input type="number" step="0.0001" class="form-control" value="{{ old('kw_fasa_gfr_satu_lima', $penghantar->kw_fasa_gfr_satu_lima) }}" name="kw_fasa_gfr_satu_lima" placeholder="1.5 x Is ...">
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>2 x Is</label>
                                      <input type="number" step="0.0001" class="form-control" id="kw_fasa_gfr_dua" onchange="change()" value="{{ old('kw_fasa_gfr_dua', $penghantar->kw_fasa_gfr_dua) }}" name="kw_fasa_gfr_dua" placeholder="2 x Is ...">
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>3 x Is</label>
                                      <input type="number" step="0.0001" class="form-control" value="{{ old('kw_fasa_gfr_tiga', $penghantar->kw_fasa_gfr_tiga) }}" name="kw_fasa_gfr_tiga" placeholder="3 x Is ...">
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>4 x Is</label>
                                      <input type="number" step="0.0001" class="form-control" value="{{ old('kw_fasa_gfr_empat', $penghantar->kw_fasa_gfr_empat) }}" name="kw_fasa_gfr_empat" placeholder="4 x Is ...">
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
                                  <h4>Setting</h4>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa R</label>
                                      <input type="number" step="0.0001" class="form-control" id="wks_fasa_r_setting" onchange="change()" value="{{ old('wks_fasa_r_setting', $penghantar->wks_fasa_r_setting) }}" name="wks_fasa_r_setting" placeholder="Fasa R ...">
                                      Ampere
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa S</label>
                                      <input type="number" step="0.0001" class="form-control" id="wks_fasa_s_setting" onchange="change()" value="{{ old('wks_fasa_s_setting', $penghantar->wks_fasa_s_setting) }}" name="wks_fasa_s_setting" placeholder="Fasa S ...">
                                      Ampere
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa T</label>
                                      <input type="number" step="0.0001" class="form-control" id="wks_fasa_t_setting" onchange="change()" value="{{ old('wks_fasa_t_setting', $penghantar->wks_fasa_t_setting) }}" name="wks_fasa_t_setting" placeholder="Fasa T ...">
                                      Ampere
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa GFR</label>
                                      <input type="number" step="0.0001" class="form-control" id="wks_fasa_gfr_setting" onchange="change()" value="{{ old('wks_fasa_gfr_setting', $penghantar->wks_fasa_gfr_setting) }}" name="wks_fasa_gfr_setting"
                                        placeholder="Fasa GFR ...">
                                      Ampere
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-12">
                                  <h4>Arus Uji</h4>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa R</label>
                                      <input type="number" step="0.0001" class="form-control" id="wks_fasa_r_arus_uji" onchange="change()" value="{{ old('wks_fasa_r_arus_uji', $penghantar->wks_fasa_r_arus_uji) }}" name="wks_fasa_r_arus_uji" placeholder="Fasa R ...">
                                      Ampere
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa S</label>
                                      <input type="number" step="0.0001" class="form-control" id="wks_fasa_s_arus_uji" onchange="change()" value="{{ old('wks_fasa_s_arus_uji', $penghantar->wks_fasa_s_arus_uji) }}" name="wks_fasa_s_arus_uji" placeholder="Fasa S ...">
                                      Ampere
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa T</label>
                                      <input type="number" step="0.0001" class="form-control" id="wks_fasa_t_arus_uji" onchange="change()" value="{{ old('wks_fasa_t_arus_uji', $penghantar->wks_fasa_t_arus_uji) }}" name="wks_fasa_t_arus_uji" placeholder="Fasa T ...">
                                      Ampere
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa GFR</label>
                                      <input type="number" step="0.0001" class="form-control" id="wks_fasa_gfr_arus_uji" onchange="change()" value="{{ old('wks_fasa_gfr_arus_uji', $penghantar->wks_fasa_gfr_arus_uji) }}" name="wks_fasa_gfr_arus_uji"
                                        placeholder="Fasa GFR ...">
                                      Ampere
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-12">
                                  <h4>Waktu Kerja</h4>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa R</label>
                                      <input type="number" step="0.0001" class="form-control" id="wks_fasa_r_waktu_kerja" onchange="change()" value="{{ old('wks_fasa_r_waktu_kerja', $penghantar->wks_fasa_r_waktu_kerja) }}" name="wks_fasa_r_waktu_kerja"
                                        placeholder="Fasa R ...">
                                      sekon
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa S</label>
                                      <input type="number" step="0.0001" class="form-control" id="wks_fasa_s_waktu_kerja" onchange="change()" value="{{ old('wks_fasa_s_waktu_kerja', $penghantar->wks_fasa_s_waktu_kerja) }}" name="wks_fasa_s_waktu_kerja"
                                        placeholder="Fasa S ...">
                                      sekon
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa T</label>
                                      <input type="number" step="0.0001" class="form-control" id="wks_fasa_t_waktu_kerja" onchange="change()" value="{{ old('wks_fasa_t_waktu_kerja', $penghantar->wks_fasa_t_waktu_kerja) }}" name="wks_fasa_t_waktu_kerja"
                                        placeholder="Fasa T ...">
                                      sekon
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Fasa GFR</label>
                                      <input type="number" step="0.0001" class="form-control" id="wks_fasa_gfr_waktu_kerja" onchange="change()" value="{{ old('wks_fasa_gfr_waktu_kerja', $penghantar->wks_fasa_gfr_waktu_kerja) }}" name="wks_fasa_gfr_waktu_kerja"
                                        placeholder="Fasa GFR ...">
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
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>In</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_r_posisi_in" readonly value="{{ old('sar_fasa_r_posisi_in', $penghantar->sar_fasa_r_posisi_in) }}" name="sar_fasa_r_posisi_in" placeholder="In ...">
                                              Ampere
                                          </div>
                                      </div>
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>Is</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_r_posisi_is" readonly value="{{ old('sar_fasa_r_posisi_is', $penghantar->sar_fasa_r_posisi_is) }}" name="sar_fasa_r_posisi_is" placeholder="Is ...">
                                              Ampere
                                          </div>
                                      </div>
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>tms</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_r_posisi_tms" readonly value="{{ old('sar_fasa_r_posisi_tms', $penghantar->sar_fasa_r_posisi_tms) }}" name="sar_fasa_r_posisi_tms" placeholder="tms ...">
                                          </div>
                                      </div>
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>Moment</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_r_posisi_moment" readonly value="{{ old('sar_fasa_r_posisi_moment', $penghantar->sar_fasa_r_posisi_moment) }}" name="sar_fasa_r_posisi_moment"
                                                placeholder="Moment ...">
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
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_r_hasil_kerja" readonly value="{{ old('sar_fasa_r_hasil_kerja', $penghantar->sar_fasa_r_hasil_kerja) }}" name="sar_fasa_r_hasil_kerja" placeholder="I Kerja ...">
                                              Ampere
                                          </div>
                                      </div>
                                      <div class="col-sm-2">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>I Kembali</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_r_hasil_kembali" readonly value="{{ old('sar_fasa_r_hasil_kembali', $penghantar->sar_fasa_r_hasil_kembali) }}" name="sar_fasa_r_hasil_kembali"
                                                placeholder="I Kembali ...">
                                              Ampere
                                          </div>
                                      </div>
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>t</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_r_hasil_t" readonly value="{{ old('sar_fasa_r_hasil_t', $penghantar->sar_fasa_r_hasil_t) }}" name="sar_fasa_r_hasil_t" placeholder="tms ...">
                                              detik
                                          </div>
                                      </div>
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>Moment (Ampere)</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_r_hasil_moment_a" readonly value="{{ old('sar_fasa_r_hasil_moment_a', $penghantar->sar_fasa_r_hasil_moment_a) }}" name="sar_fasa_r_hasil_moment_a"
                                                placeholder="Moment (Ampere) ...">
                                              Ampere
                                          </div>
                                      </div>
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>Moment (detik)</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_r_hasil_moment_det" readonly value="{{ old('sar_fasa_r_hasil_moment_det', $penghantar->sar_fasa_r_hasil_moment_det) }}" name="sar_fasa_r_hasil_moment_det"
                                                placeholder="Moment (detik) ...">
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
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>In</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_s_posisi_in" readonly value="{{ old('sar_fasa_s_posisi_in', $penghantar->sar_fasa_s_posisi_in) }}" name="sar_fasa_s_posisi_in" placeholder="In ...">
                                              Ampere
                                          </div>
                                      </div>
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>Is</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_s_posisi_is" readonly value="{{ old('sar_fasa_s_posisi_is', $penghantar->sar_fasa_s_posisi_is) }}" name="sar_fasa_s_posisi_is" placeholder="Is ...">
                                              Ampere
                                          </div>
                                      </div>
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>tms</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_s_posisi_tms" readonly value="{{ old('sar_fasa_s_posisi_tms', $penghantar->sar_fasa_s_posisi_tms) }}" name="sar_fasa_s_posisi_tms" placeholder="tms ...">
                                          </div>
                                      </div>
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>Moment</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_s_posisi_moment" readonly value="{{ old('sar_fasa_s_posisi_moment', $penghantar->sar_fasa_s_posisi_moment) }}" name="sar_fasa_s_posisi_moment"
                                                placeholder="Moment ...">
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
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_s_hasil_kerja" readonly value="{{ old('sar_fasa_s_hasil_kerja', $penghantar->sar_fasa_s_hasil_kerja) }}" name="sar_fasa_s_hasil_kerja" placeholder="I Kerja ...">
                                              Ampere
                                          </div>
                                      </div>
                                      <div class="col-sm-2">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>I Kembali</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_s_hasil_kembali" readonly value="{{ old('sar_fasa_s_hasil_kembali', $penghantar->sar_fasa_s_hasil_kembali) }}" name="sar_fasa_s_hasil_kembali"
                                                placeholder="I Kembali ...">
                                              Ampere
                                          </div>
                                      </div>
                                      <div class="col-sm-2">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>t</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_s_hasil_t" readonly value="{{ old('sar_fasa_s_hasil_t', $penghantar->sar_fasa_s_hasil_t) }}" name="sar_fasa_s_hasil_t" placeholder="tms ...">
                                              detik
                                          </div>
                                      </div>
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>Moment (Ampere)</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_s_hasil_moment_a" readonly value="{{ old('sar_fasa_s_hasil_moment_a', $penghantar->sar_fasa_s_hasil_moment_a) }}" name="sar_fasa_s_hasil_moment_a"
                                                placeholder="Moment (Ampere) ...">
                                              Ampere
                                          </div>
                                      </div>
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>Moment (detik)</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_s_hasil_moment_det" readonly value="{{ old('sar_fasa_s_hasil_moment_det', $penghantar->sar_fasa_s_hasil_moment_det) }}" name="sar_fasa_s_hasil_moment_det"
                                                placeholder="Moment (detik) ...">
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
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>In</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_t_posisi_in" readonly value="{{ old('sar_fasa_t_posisi_in', $penghantar->sar_fasa_t_posisi_in) }}" name="sar_fasa_t_posisi_in" placeholder="In ...">
                                              Ampere
                                          </div>
                                      </div>
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>Is</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_t_posisi_is" readonly value="{{ old('sar_fasa_t_posisi_is', $penghantar->sar_fasa_t_posisi_is) }}" name="sar_fasa_t_posisi_is" placeholder="Is ...">
                                              Ampere
                                          </div>
                                      </div>
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>tms</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_t_posisi_tms" readonly value="{{ old('sar_fasa_t_posisi_tms', $penghantar->sar_fasa_t_posisi_tms) }}" name="sar_fasa_t_posisi_tms" placeholder="tms ...">
                                          </div>
                                      </div>
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>Moment</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_t_posisi_moment" readonly value="{{ old('sar_fasa_t_posisi_moment', $penghantar->sar_fasa_t_posisi_moment) }}" name="sar_fasa_t_posisi_moment"
                                                placeholder="Moment ...">
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
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_t_hasil_kerja" readonly value="{{ old('sar_fasa_t_hasil_kerja', $penghantar->sar_fasa_t_hasil_kerja) }}" name="sar_fasa_t_hasil_kerja" placeholder="I Kerja ...">
                                              Ampere
                                          </div>
                                      </div>
                                      <div class="col-sm-2">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>I Kembali</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_t_hasil_kembali" readonly value="{{ old('sar_fasa_t_hasil_kembali', $penghantar->sar_fasa_t_hasil_kembali) }}" name="sar_fasa_t_hasil_kembali"
                                                placeholder="I Kembali ...">
                                              Ampere
                                          </div>
                                      </div>
                                      <div class="col-sm-2">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>t</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_t_hasil_t" readonly value="{{ old('sar_fasa_t_hasil_t', $penghantar->sar_fasa_t_hasil_t) }}" name="sar_fasa_t_hasil_t" placeholder="tms ...">
                                              detik
                                          </div>
                                      </div>
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>Moment (Ampere)</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_t_hasil_moment_a" readonly value="{{ old('sar_fasa_t_hasil_moment_a', $penghantar->sar_fasa_t_hasil_moment_a) }}" name="sar_fasa_t_hasil_moment_a"
                                                placeholder="Moment (Ampere) ...">
                                              Ampere
                                          </div>
                                      </div>
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>Moment (detik)</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_t_hasil_moment_det" readonly value="{{ old('sar_fasa_t_hasil_moment_det', $penghantar->sar_fasa_t_hasil_moment_det) }}" name="sar_fasa_t_hasil_moment_det"
                                                placeholder="Moment (detik) ...">
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
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>In</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_gfr_posisi_in" readonly value="{{ old('sar_fasa_gfr_posisi_in', $penghantar->sar_fasa_gfr_posisi_in) }}" name="sar_fasa_gfr_posisi_in" placeholder="In ...">
                                              Ampere
                                          </div>
                                      </div>
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>Is</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_gfr_posisi_is" readonly value="{{ old('sar_fasa_gfr_posisi_is', $penghantar->sar_fasa_gfr_posisi_is) }}" name="sar_fasa_gfr_posisi_is" placeholder="Is ...">
                                              Ampere
                                          </div>
                                      </div>
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>tms</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_gfr_posisi_tms" readonly value="{{ old('sar_fasa_gfr_posisi_tms', $penghantar->sar_fasa_gfr_posisi_tms) }}" name="sar_fasa_gfr_posisi_tms" placeholder="tms ...">
                                          </div>
                                      </div>
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>Moment</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_gfr_posisi_moment" readonly value="{{ old('sar_fasa_gfr_posisi_moment', $penghantar->sar_fasa_gfr_posisi_moment) }}" name="sar_fasa_gfr_posisi_moment"
                                                placeholder="Moment ...">
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
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_gfr_hasil_kerja" readonly value="{{ old('sar_fasa_gfr_hasil_kerja', $penghantar->sar_fasa_gfr_hasil_kerja) }}" name="sar_fasa_gfr_hasil_kerja" placeholder="I Kerja ...">
                                              Ampere
                                          </div>
                                      </div>
                                      <div class="col-sm-2">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>I Kembali</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_gfr_hasil_kembali" readonly value="{{ old('sar_fasa_gfr_hasil_kembali', $penghantar->sar_fasa_gfr_hasil_kembali) }}" name="sar_fasa_gfr_hasil_kembali"
                                                placeholder="I Kembali ...">
                                              Ampere
                                          </div>
                                      </div>
                                      <div class="col-sm-2">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>t</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_gfr_hasil_t" readonly value="{{ old('sar_fasa_gfr_hasil_t', $penghantar->sar_fasa_gfr_hasil_t) }}" name="sar_fasa_gfr_hasil_t" placeholder="tms ...">
                                              detik
                                          </div>
                                      </div>
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>Moment (Ampere)</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_gfr_hasil_moment_a" readonly value="{{ old('sar_fasa_gfr_hasil_moment_a', $penghantar->sar_fasa_gfr_hasil_moment_a) }}" name="sar_fasa_gfr_hasil_moment_a"
                                                placeholder="Moment (Ampere) ...">
                                              Ampere
                                          </div>
                                      </div>
                                      <div class="col-sm-3">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label>Moment (detik)</label>
                                              <input type="number" step="0.0001" class="form-control" id="sar_fasa_gfr_hasil_moment_det" readonly value="{{ old('sar_fasa_gfr_hasil_moment_det', $penghantar->sar_fasa_gfr_hasil_moment_det) }}" name="sar_fasa_gfr_hasil_moment_det"
                                                placeholder="Moment (detik) ...">
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
                  <div class="card card-dark">
                      <div class="card-header">
                          <h3 class="card-title">5. Catatan</h3>
                      </div>
                      <div class="card-body">
                          <div class="form-group">
                              <label>Catatan</label>
                              <textarea class="form-control" rows="5" name="catatan">{{ old('catatan', $penghantar->catatan) }}</textarea>
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
                              <input type="text" class="form-control" value="{{ old('pelaksana_satu', $penghantar->pelaksana_satu) }}" name="pelaksana_satu" placeholder="Pelaksana 1 ...">
                          </div>
                          <div class="form-group">
                              <label>Pelaksana 2</label>
                              <input type="text" class="form-control" value="{{ old('pelaksana_dua', $penghantar->pelaksana_dua) }}" name="pelaksana_dua" placeholder="Pelaksana 2 ...">
                          </div>
                          <div class="form-group">
                              <label>Pelaksana 3</label>
                              <input type="text" class="form-control" value="{{ old('pelaksana_tiga', $penghantar->pelaksana_tiga) }}" name="pelaksana_tiga" placeholder="Pelaksana 3 ...">
                          </div>
                          <div class="form-group">
                              <label>Pelaksana 4</label>
                              <input type="text" class="form-control" value="{{ old('pelaksana_empat', $penghantar->pelaksana_empat) }}" name="pelaksana_empat" placeholder="Pelaksana 4 ...">
                          </div>
                          <div class="form-group">
                              <label>Pelaksana 5</label>
                              <input type="text" class="form-control" value="{{ old('pelaksana_lima', $penghantar->pelaksana_lima) }}" name="pelaksana_lima" placeholder="Pelaksana 5 ...">
                          </div>
                          <div class="form-group">
                              <label>Pelaksana 6</label>
                              <input type="text" class="form-control" value="{{ old('pelaksana_enam', $penghantar->pelaksana_enam) }}" name="pelaksana_enam" placeholder="Pelaksana 6 ...">
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
                              <input type="text" class="form-control" value="{{ old('supervisi', $penghantar->supervisi) }}" name="supervisi" placeholder="Supervisi ...">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="card card-primary">
                      <div class="card-footer d-flex justify-content-center">
                          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                      </div>
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
    document.getElementById("sar_fasa_r_posisi_moment").value = document.getElementById("wks_fasa_r_setting").value;
    document.getElementById("sar_fasa_s_posisi_moment").value = document.getElementById("wks_fasa_s_setting").value;
    document.getElementById("sar_fasa_t_posisi_moment").value = document.getElementById("wks_fasa_t_setting").value;
    document.getElementById("sar_fasa_gfr_posisi_moment").value = document.getElementById("wks_fasa_gfr_setting").value;
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
    document.getElementById("sar_fasa_r_hasil_moment_a").value = document.getElementById("wks_fasa_r_arus_uji").value;
    document.getElementById("sar_fasa_s_hasil_moment_a").value = document.getElementById("wks_fasa_s_arus_uji").value;
    document.getElementById("sar_fasa_t_hasil_moment_a").value = document.getElementById("wks_fasa_t_arus_uji").value;
    document.getElementById("sar_fasa_gfr_hasil_moment_a").value = document.getElementById("wks_fasa_gfr_arus_uji").value;
    document.getElementById("sar_fasa_r_hasil_moment_det").value = document.getElementById("wks_fasa_r_waktu_kerja").value;
    document.getElementById("sar_fasa_s_hasil_moment_det").value = document.getElementById("wks_fasa_s_waktu_kerja").value;
    document.getElementById("sar_fasa_t_hasil_moment_det").value = document.getElementById("wks_fasa_t_waktu_kerja").value;
    document.getElementById("sar_fasa_gfr_hasil_moment_det").value = document.getElementById("wks_fasa_gfr_waktu_kerja").value;
    document.getElementById("akmk_fasa_r_ratio").value = (document.getElementById("akmk_fasa_r_arus_kembali").value / document.getElementById("akmk_fasa_r_arus_kerja").value).toFixed(4);
    document.getElementById("akmk_fasa_s_ratio").value = (document.getElementById("akmk_fasa_s_arus_kembali").value / document.getElementById("akmk_fasa_s_arus_kerja").value).toFixed(4);
    document.getElementById("akmk_fasa_t_ratio").value = (document.getElementById("akmk_fasa_t_arus_kembali").value / document.getElementById("akmk_fasa_t_arus_kerja").value).toFixed(4);
    document.getElementById("akmk_fasa_gfr_ratio").value = (document.getElementById("akmk_fasa_gfr_arus_kembali").value / document.getElementById("akmk_fasa_gfr_arus_kerja").value).toFixed(4);
  }
</script>
@stop
