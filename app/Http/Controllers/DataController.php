<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use PDF;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->admin == 0) {
            $data = User::find(Auth::user()->id)->data;
        } else {
            $data = Data::all();
        }

        return view('data.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['user_id'] = Auth::user()->id;
        // dd($data);

        Data::firstOrCreate($data);

        return redirect()->route('data.index')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        return redirect()->route('data.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
        return view('data.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $data)
    {
        $data->hu_merk = $request->hu_merk;
        $data->hu_type = $request->hu_type;
        $data->hu_no_serie = $request->hu_no_serie;
        $data->hu_rating = $request->hu_rating;
        $data->hu_karakteristik = $request->hu_karakteristik;
        $data->hu_tanggal = $request->hu_tanggal;
        $data->hu_lokasi = $request->hu_lokasi;
        $data->hu_bay = $request->hu_bay;
        $data->hu_ratio_ct = $request->hu_ratio_ct;
        $data->hu_alat_uji = $request->hu_alat_uji;
        $data->akmk_fasa_r_arus_nominal = $request->akmk_fasa_r_arus_nominal;
        $data->akmk_fasa_r_setting = $request->akmk_fasa_r_setting;
        $data->akmk_fasa_r_arus_kerja = $request->akmk_fasa_r_arus_kerja;
        $data->akmk_fasa_r_arus_kembali = $request->akmk_fasa_r_arus_kembali;
        $data->akmk_fasa_r_ratio = $request->akmk_fasa_r_ratio;
        $data->akmk_fasa_s_arus_nominal = $request->akmk_fasa_s_arus_nominal;
        $data->akmk_fasa_s_setting = $request->akmk_fasa_s_setting;
        $data->akmk_fasa_s_arus_kerja = $request->akmk_fasa_s_arus_kerja;
        $data->akmk_fasa_s_arus_kembali = $request->akmk_fasa_s_arus_kembali;
        $data->akmk_fasa_s_ratio = $request->akmk_fasa_s_ratio;
        $data->akmk_fasa_t_arus_nominal = $request->akmk_fasa_t_arus_nominal;
        $data->akmk_fasa_t_setting = $request->akmk_fasa_t_setting;
        $data->akmk_fasa_t_arus_kerja = $request->akmk_fasa_t_arus_kerja;
        $data->akmk_fasa_t_arus_kembali = $request->akmk_fasa_t_arus_kembali;
        $data->akmk_fasa_t_ratio = $request->akmk_fasa_t_ratio;
        $data->akmk_fasa_gfr_arus_nominal = $request->akmk_fasa_gfr_arus_nominal;
        $data->akmk_fasa_gfr_setting = $request->akmk_fasa_gfr_setting;
        $data->akmk_fasa_gfr_arus_kerja = $request->akmk_fasa_gfr_arus_kerja;
        $data->akmk_fasa_gfr_arus_kembali = $request->akmk_fasa_gfr_arus_kembali;
        $data->akmk_fasa_gfr_ratio = $request->akmk_fasa_gfr_ratio;
        $data->kw_tms_ocr = $request->kw_tms_ocr;
        $data->kw_tms_gfr = $request->kw_tms_gfr;
        $data->kw_fasa_r_satu_lima = $request->kw_fasa_r_satu_lima;
        $data->kw_fasa_r_dua = $request->kw_fasa_r_dua;
        $data->kw_fasa_r_tiga = $request->kw_fasa_r_tiga;
        $data->kw_fasa_r_empat = $request->kw_fasa_r_empat;
        $data->kw_fasa_s_satu_lima = $request->kw_fasa_s_satu_lima;
        $data->kw_fasa_s_dua = $request->kw_fasa_s_dua;
        $data->kw_fasa_s_tiga = $request->kw_fasa_s_tiga;
        $data->kw_fasa_s_empat = $request->kw_fasa_s_empat;
        $data->kw_fasa_t_satu_lima = $request->kw_fasa_t_satu_lima;
        $data->kw_fasa_t_dua = $request->kw_fasa_t_dua;
        $data->kw_fasa_t_tiga = $request->kw_fasa_t_tiga;
        $data->kw_fasa_t_empat = $request->kw_fasa_t_empat;
        $data->kw_fasa_gfr_satu_lima = $request->kw_fasa_gfr_satu_lima;
        $data->kw_fasa_gfr_dua = $request->kw_fasa_gfr_dua;
        $data->kw_fasa_gfr_tiga = $request->kw_fasa_gfr_tiga;
        $data->kw_fasa_gfr_empat = $request->kw_fasa_gfr_empat;
        $data->wks_fasa_r_setting_ihs_satu = $request->wks_fasa_r_setting_ihs_satu;
        $data->wks_fasa_r_arus_uji_ihs_satu = $request->wks_fasa_r_arus_uji_ihs_satu;
        $data->wks_fasa_r_waktu_kerja_ihs_satu = $request->wks_fasa_r_waktu_kerja_ihs_satu;
        $data->wks_fasa_r_setting_ihs_dua = $request->wks_fasa_r_setting_ihs_dua;
        $data->wks_fasa_r_arus_uji_ihs_dua = $request->wks_fasa_r_arus_uji_ihs_dua;
        $data->wks_fasa_r_waktu_kerja_ihs_dua = $request->wks_fasa_r_waktu_kerja_ihs_dua;
        $data->wks_fasa_s_setting_ihs_satu = $request->wks_fasa_s_setting_ihs_satu;
        $data->wks_fasa_s_arus_uji_ihs_satu = $request->wks_fasa_s_arus_uji_ihs_satu;
        $data->wks_fasa_s_waktu_kerja_ihs_satu = $request->wks_fasa_s_waktu_kerja_ihs_satu;
        $data->wks_fasa_s_setting_ihs_dua = $request->wks_fasa_s_setting_ihs_dua;
        $data->wks_fasa_s_arus_uji_ihs_dua = $request->wks_fasa_s_arus_uji_ihs_dua;
        $data->wks_fasa_s_waktu_kerja_ihs_dua = $request->wks_fasa_s_waktu_kerja_ihs_dua;
        $data->wks_fasa_t_setting_ihs_satu = $request->wks_fasa_t_setting_ihs_satu;
        $data->wks_fasa_t_arus_uji_ihs_satu = $request->wks_fasa_t_arus_uji_ihs_satu;
        $data->wks_fasa_t_waktu_kerja_ihs_satu = $request->wks_fasa_t_waktu_kerja_ihs_satu;
        $data->wks_fasa_t_setting_ihs_dua = $request->wks_fasa_t_setting_ihs_dua;
        $data->wks_fasa_t_arus_uji_ihs_dua = $request->wks_fasa_t_arus_uji_ihs_dua;
        $data->wks_fasa_t_waktu_kerja_ihs_dua = $request->wks_fasa_t_waktu_kerja_ihs_dua;
        $data->wks_fasa_gfr_setting_ihs_satu = $request->wks_fasa_gfr_setting_ihs_satu;
        $data->wks_fasa_gfr_arus_uji_ihs_satu = $request->wks_fasa_gfr_arus_uji_ihs_satu;
        $data->wks_fasa_gfr_waktu_kerja_ihs_satu = $request->wks_fasa_gfr_waktu_kerja_ihs_satu;
        $data->wks_fasa_gfr_setting_ihs_dua = $request->wks_fasa_gfr_setting_ihs_dua;
        $data->wks_fasa_gfr_arus_uji_ihs_dua = $request->wks_fasa_gfr_arus_uji_ihs_dua;
        $data->wks_fasa_gfr_waktu_kerja_ihs_dua = $request->wks_fasa_gfr_waktu_kerja_ihs_dua;
        $data->sar_fasa_r_posisi_in = $request->sar_fasa_r_posisi_in;
        $data->sar_fasa_r_posisi_is = $request->sar_fasa_r_posisi_is;
        $data->sar_fasa_r_posisi_tms = $request->sar_fasa_r_posisi_tms;
        $data->sar_fasa_r_posisi_ihs_satu = $request->sar_fasa_r_posisi_ihs_satu;
        $data->sar_fasa_r_posisi_ihs_dua = $request->sar_fasa_r_posisi_ihs_dua;
        $data->sar_fasa_r_hasil_kerja = $request->sar_fasa_r_hasil_kerja;
        $data->sar_fasa_r_hasil_kembali = $request->sar_fasa_r_hasil_kembali;
        $data->sar_fasa_r_hasil_t = $request->sar_fasa_r_hasil_t;
        $data->sar_fasa_r_hasil_ihs_satu_a = $request->sar_fasa_r_hasil_ihs_satu_a;
        $data->sar_fasa_r_hasil_ihs_satu_det = $request->sar_fasa_r_hasil_ihs_satu_det;
        $data->sar_fasa_r_hasil_ihs_dua_a = $request->sar_fasa_r_hasil_ihs_dua_a;
        $data->sar_fasa_r_hasil_ihs_dua_det = $request->sar_fasa_r_hasil_ihs_dua_det;
        $data->sar_fasa_s_posisi_in = $request->sar_fasa_s_posisi_in;
        $data->sar_fasa_s_posisi_is = $request->sar_fasa_s_posisi_is;
        $data->sar_fasa_s_posisi_tms = $request->sar_fasa_s_posisi_tms;
        $data->sar_fasa_s_posisi_ihs_satu = $request->sar_fasa_s_posisi_ihs_satu;
        $data->sar_fasa_s_posisi_ihs_dua = $request->sar_fasa_s_posisi_ihs_dua;
        $data->sar_fasa_s_hasil_kerja = $request->sar_fasa_s_hasil_kerja;
        $data->sar_fasa_s_hasil_kembali = $request->sar_fasa_s_hasil_kembali;
        $data->sar_fasa_s_hasil_t = $request->sar_fasa_s_hasil_t;
        $data->sar_fasa_s_hasil_ihs_satu_a = $request->sar_fasa_s_hasil_ihs_satu_a;
        $data->sar_fasa_s_hasil_ihs_satu_det = $request->sar_fasa_s_hasil_ihs_satu_det;
        $data->sar_fasa_s_hasil_ihs_dua_a = $request->sar_fasa_s_hasil_ihs_dua_a;
        $data->sar_fasa_s_hasil_ihs_dua_det = $request->sar_fasa_s_hasil_ihs_dua_det;
        $data->sar_fasa_t_posisi_in = $request->sar_fasa_t_posisi_in;
        $data->sar_fasa_t_posisi_is = $request->sar_fasa_t_posisi_is;
        $data->sar_fasa_t_posisi_tms = $request->sar_fasa_t_posisi_tms;
        $data->sar_fasa_t_posisi_ihs_satu = $request->sar_fasa_t_posisi_ihs_satu;
        $data->sar_fasa_t_posisi_ihs_dua = $request->sar_fasa_t_posisi_ihs_dua;
        $data->sar_fasa_t_hasil_kerja = $request->sar_fasa_t_hasil_kerja;
        $data->sar_fasa_t_hasil_kembali = $request->sar_fasa_t_hasil_kembali;
        $data->sar_fasa_t_hasil_t = $request->sar_fasa_t_hasil_t;
        $data->sar_fasa_t_hasil_ihs_satu_a = $request->sar_fasa_t_hasil_ihs_satu_a;
        $data->sar_fasa_t_hasil_ihs_satu_det = $request->sar_fasa_t_hasil_ihs_satu_det;
        $data->sar_fasa_t_hasil_ihs_dua_a = $request->sar_fasa_t_hasil_ihs_dua_a;
        $data->sar_fasa_t_hasil_ihs_dua_det = $request->sar_fasa_t_hasil_ihs_dua_det;
        $data->sar_fasa_gfr_posisi_in = $request->sar_fasa_gfr_posisi_in;
        $data->sar_fasa_gfr_posisi_is = $request->sar_fasa_gfr_posisi_is;
        $data->sar_fasa_gfr_posisi_tms = $request->sar_fasa_gfr_posisi_tms;
        $data->sar_fasa_gfr_posisi_ihs_satu = $request->sar_fasa_gfr_posisi_ihs_satu;
        $data->sar_fasa_gfr_posisi_ihs_dua = $request->sar_fasa_gfr_posisi_ihs_dua;
        $data->sar_fasa_gfr_hasil_kerja = $request->sar_fasa_gfr_hasil_kerja;
        $data->sar_fasa_gfr_hasil_kembali = $request->sar_fasa_gfr_hasil_kembali;
        $data->sar_fasa_gfr_hasil_t = $request->sar_fasa_gfr_hasil_t;
        $data->sar_fasa_gfr_hasil_ihs_satu_a = $request->sar_fasa_gfr_hasil_ihs_satu_a;
        $data->sar_fasa_gfr_hasil_ihs_satu_det = $request->sar_fasa_gfr_hasil_ihs_satu_det;
        $data->sar_fasa_gfr_hasil_ihs_dua_a = $request->sar_fasa_gfr_hasil_ihs_dua_a;
        $data->sar_fasa_gfr_hasil_ihs_dua_det = $request->sar_fasa_gfr_hasil_ihs_dua_det;
        $data->pj_fasa_r_indikasi = $request->pj_fasa_r_indikasi;
        $data->pj_fasa_r_pmt = $request->pj_fasa_r_pmt;
        $data->pj_fasa_r_keterangan = $request->pj_fasa_r_keterangan;
        $data->pj_fasa_s_indikasi = $request->pj_fasa_s_indikasi;
        $data->pj_fasa_s_pmt = $request->pj_fasa_s_pmt;
        $data->pj_fasa_s_keterangan = $request->pj_fasa_s_keterangan;
        $data->pj_fasa_t_indikasi = $request->pj_fasa_t_indikasi;
        $data->pj_fasa_t_pmt = $request->pj_fasa_t_pmt;
        $data->pj_fasa_t_keterangan = $request->pj_fasa_t_keterangan;
        $data->pj_fasa_gfr_indikasi = $request->pj_fasa_gfr_indikasi;
        $data->pj_fasa_gfr_pmt = $request->pj_fasa_gfr_pmt;
        $data->pj_fasa_gfr_keterangan = $request->pj_fasa_gfr_keterangan;
        $data->catatan = $request->catatan;
        $data->pelaksana_satu = $request->pelaksana_satu;
        $data->pelaksana_dua = $request->pelaksana_dua;
        $data->pelaksana_tiga = $request->pelaksana_tiga;
        $data->pelaksana_empat = $request->pelaksana_empat;
        $data->pelaksana_lima = $request->pelaksana_lima;
        $data->pelaksana_enam = $request->pelaksana_enam;
        $data->supervisi = $request->supervisi;

        $data->save();

        return redirect()->route('data.index')->with('status', 'Data Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        $data->delete();

        return redirect()->route('data.index')->with('status', 'Data Berhasil Dihapus!');
    }

    /**
      * Print Document
    */
    public function print(Data $data)
    {
      return view('data.print', compact('data'));
    }
}
