<?php

namespace App\Http\Controllers;

use App\Models\DataTrafo;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use PDF;

class DataTrafoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->admin == 0) {
            $trafo = User::find(Auth::user()->id)->dataTrafo;
        } else {
            $trafo = DataTrafo::all();
        }

        return view('data.trafo.index', compact('trafo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.trafo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trafo = $request->except('_token');
        $trafo['user_id'] = Auth::user()->id;
        // dd($trafo);

        DataTrafo::firstOrCreate($trafo);

        return redirect()->route('data.trafo.index')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Data  $trafo
     * @return \Illuminate\Http\Response
     */
    public function show(DataTrafo $trafo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Data  $trafo
     * @return \Illuminate\Http\Response
     */
    public function edit(DataTrafo $trafo)
    {
        return view('data.trafo.edit', compact('trafo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Data  $trafo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataTrafo $trafo)
    {
        $trafo->hu_merk = $request->hu_merk;
        $trafo->hu_type = $request->hu_type;
        $trafo->hu_no_serie = $request->hu_no_serie;
        $trafo->hu_rating = $request->hu_rating;
        $trafo->hu_karakteristik = $request->hu_karakteristik;
        $trafo->hu_tanggal = $request->hu_tanggal;
        $trafo->hu_lokasi = $request->hu_lokasi;
        $trafo->hu_bay = $request->hu_bay;
        $trafo->hu_ratio_ct = $request->hu_ratio_ct;
        $trafo->hu_alat_uji = $request->hu_alat_uji;
        $trafo->akmk_fasa_r_arus_nominal = $request->akmk_fasa_r_arus_nominal;
        $trafo->akmk_fasa_r_setting = $request->akmk_fasa_r_setting;
        $trafo->akmk_fasa_r_arus_kerja = $request->akmk_fasa_r_arus_kerja;
        $trafo->akmk_fasa_r_arus_kembali = $request->akmk_fasa_r_arus_kembali;
        $trafo->akmk_fasa_r_ratio = $request->akmk_fasa_r_ratio;
        $trafo->akmk_fasa_s_arus_nominal = $request->akmk_fasa_s_arus_nominal;
        $trafo->akmk_fasa_s_setting = $request->akmk_fasa_s_setting;
        $trafo->akmk_fasa_s_arus_kerja = $request->akmk_fasa_s_arus_kerja;
        $trafo->akmk_fasa_s_arus_kembali = $request->akmk_fasa_s_arus_kembali;
        $trafo->akmk_fasa_s_ratio = $request->akmk_fasa_s_ratio;
        $trafo->akmk_fasa_t_arus_nominal = $request->akmk_fasa_t_arus_nominal;
        $trafo->akmk_fasa_t_setting = $request->akmk_fasa_t_setting;
        $trafo->akmk_fasa_t_arus_kerja = $request->akmk_fasa_t_arus_kerja;
        $trafo->akmk_fasa_t_arus_kembali = $request->akmk_fasa_t_arus_kembali;
        $trafo->akmk_fasa_t_ratio = $request->akmk_fasa_t_ratio;
        $trafo->akmk_fasa_gfr_arus_nominal = $request->akmk_fasa_gfr_arus_nominal;
        $trafo->akmk_fasa_gfr_setting = $request->akmk_fasa_gfr_setting;
        $trafo->akmk_fasa_gfr_arus_kerja = $request->akmk_fasa_gfr_arus_kerja;
        $trafo->akmk_fasa_gfr_arus_kembali = $request->akmk_fasa_gfr_arus_kembali;
        $trafo->akmk_fasa_gfr_ratio = $request->akmk_fasa_gfr_ratio;
        $trafo->kw_tms_ocr = $request->kw_tms_ocr;
        $trafo->kw_tms_gfr = $request->kw_tms_gfr;
        $trafo->kw_tms_ocr_variable = $request->kw_tms_ocr_variable;
        $trafo->kw_tms_gfr_variable = $request->kw_tms_gfr_variable;
        $trafo->kw_fasa_r_satu_lima = $request->kw_fasa_r_satu_lima;
        $trafo->kw_fasa_r_dua = $request->kw_fasa_r_dua;
        $trafo->kw_fasa_r_tiga = $request->kw_fasa_r_tiga;
        $trafo->kw_fasa_r_empat = $request->kw_fasa_r_empat;
        $trafo->kw_fasa_s_satu_lima = $request->kw_fasa_s_satu_lima;
        $trafo->kw_fasa_s_dua = $request->kw_fasa_s_dua;
        $trafo->kw_fasa_s_tiga = $request->kw_fasa_s_tiga;
        $trafo->kw_fasa_s_empat = $request->kw_fasa_s_empat;
        $trafo->kw_fasa_t_satu_lima = $request->kw_fasa_t_satu_lima;
        $trafo->kw_fasa_t_dua = $request->kw_fasa_t_dua;
        $trafo->kw_fasa_t_tiga = $request->kw_fasa_t_tiga;
        $trafo->kw_fasa_t_empat = $request->kw_fasa_t_empat;
        $trafo->kw_fasa_gfr_satu_lima = $request->kw_fasa_gfr_satu_lima;
        $trafo->kw_fasa_gfr_dua = $request->kw_fasa_gfr_dua;
        $trafo->kw_fasa_gfr_tiga = $request->kw_fasa_gfr_tiga;
        $trafo->kw_fasa_gfr_empat = $request->kw_fasa_gfr_empat;
        $trafo->wks_fasa_r_setting_ihs_satu = $request->wks_fasa_r_setting_ihs_satu;
        $trafo->wks_fasa_r_arus_uji_ihs_satu = $request->wks_fasa_r_arus_uji_ihs_satu;
        $trafo->wks_fasa_r_waktu_kerja_ihs_satu = $request->wks_fasa_r_waktu_kerja_ihs_satu;
        $trafo->wks_fasa_r_setting_ihs_dua = $request->wks_fasa_r_setting_ihs_dua;
        $trafo->wks_fasa_r_arus_uji_ihs_dua = $request->wks_fasa_r_arus_uji_ihs_dua;
        $trafo->wks_fasa_r_waktu_kerja_ihs_dua = $request->wks_fasa_r_waktu_kerja_ihs_dua;
        $trafo->wks_fasa_s_setting_ihs_satu = $request->wks_fasa_s_setting_ihs_satu;
        $trafo->wks_fasa_s_arus_uji_ihs_satu = $request->wks_fasa_s_arus_uji_ihs_satu;
        $trafo->wks_fasa_s_waktu_kerja_ihs_satu = $request->wks_fasa_s_waktu_kerja_ihs_satu;
        $trafo->wks_fasa_s_setting_ihs_dua = $request->wks_fasa_s_setting_ihs_dua;
        $trafo->wks_fasa_s_arus_uji_ihs_dua = $request->wks_fasa_s_arus_uji_ihs_dua;
        $trafo->wks_fasa_s_waktu_kerja_ihs_dua = $request->wks_fasa_s_waktu_kerja_ihs_dua;
        $trafo->wks_fasa_t_setting_ihs_satu = $request->wks_fasa_t_setting_ihs_satu;
        $trafo->wks_fasa_t_arus_uji_ihs_satu = $request->wks_fasa_t_arus_uji_ihs_satu;
        $trafo->wks_fasa_t_waktu_kerja_ihs_satu = $request->wks_fasa_t_waktu_kerja_ihs_satu;
        $trafo->wks_fasa_t_setting_ihs_dua = $request->wks_fasa_t_setting_ihs_dua;
        $trafo->wks_fasa_t_arus_uji_ihs_dua = $request->wks_fasa_t_arus_uji_ihs_dua;
        $trafo->wks_fasa_t_waktu_kerja_ihs_dua = $request->wks_fasa_t_waktu_kerja_ihs_dua;
        $trafo->wks_fasa_gfr_setting_ihs_satu = $request->wks_fasa_gfr_setting_ihs_satu;
        $trafo->wks_fasa_gfr_arus_uji_ihs_satu = $request->wks_fasa_gfr_arus_uji_ihs_satu;
        $trafo->wks_fasa_gfr_waktu_kerja_ihs_satu = $request->wks_fasa_gfr_waktu_kerja_ihs_satu;
        $trafo->wks_fasa_gfr_setting_ihs_dua = $request->wks_fasa_gfr_setting_ihs_dua;
        $trafo->wks_fasa_gfr_arus_uji_ihs_dua = $request->wks_fasa_gfr_arus_uji_ihs_dua;
        $trafo->wks_fasa_gfr_waktu_kerja_ihs_dua = $request->wks_fasa_gfr_waktu_kerja_ihs_dua;
        $trafo->sar_fasa_r_posisi_in = $request->sar_fasa_r_posisi_in;
        $trafo->sar_fasa_r_posisi_is = $request->sar_fasa_r_posisi_is;
        $trafo->sar_fasa_r_posisi_tms = $request->sar_fasa_r_posisi_tms;
        $trafo->sar_fasa_r_posisi_ihs_satu = $request->sar_fasa_r_posisi_ihs_satu;
        $trafo->sar_fasa_r_posisi_ihs_dua = $request->sar_fasa_r_posisi_ihs_dua;
        $trafo->sar_fasa_r_hasil_kerja = $request->sar_fasa_r_hasil_kerja;
        $trafo->sar_fasa_r_hasil_kembali = $request->sar_fasa_r_hasil_kembali;
        $trafo->sar_fasa_r_hasil_t = $request->sar_fasa_r_hasil_t;
        $trafo->sar_fasa_r_hasil_ihs_satu_a = $request->sar_fasa_r_hasil_ihs_satu_a;
        $trafo->sar_fasa_r_hasil_ihs_satu_det = $request->sar_fasa_r_hasil_ihs_satu_det;
        $trafo->sar_fasa_r_hasil_ihs_dua_a = $request->sar_fasa_r_hasil_ihs_dua_a;
        $trafo->sar_fasa_r_hasil_ihs_dua_det = $request->sar_fasa_r_hasil_ihs_dua_det;
        $trafo->sar_fasa_s_posisi_in = $request->sar_fasa_s_posisi_in;
        $trafo->sar_fasa_s_posisi_is = $request->sar_fasa_s_posisi_is;
        $trafo->sar_fasa_s_posisi_tms = $request->sar_fasa_s_posisi_tms;
        $trafo->sar_fasa_s_posisi_ihs_satu = $request->sar_fasa_s_posisi_ihs_satu;
        $trafo->sar_fasa_s_posisi_ihs_dua = $request->sar_fasa_s_posisi_ihs_dua;
        $trafo->sar_fasa_s_hasil_kerja = $request->sar_fasa_s_hasil_kerja;
        $trafo->sar_fasa_s_hasil_kembali = $request->sar_fasa_s_hasil_kembali;
        $trafo->sar_fasa_s_hasil_t = $request->sar_fasa_s_hasil_t;
        $trafo->sar_fasa_s_hasil_ihs_satu_a = $request->sar_fasa_s_hasil_ihs_satu_a;
        $trafo->sar_fasa_s_hasil_ihs_satu_det = $request->sar_fasa_s_hasil_ihs_satu_det;
        $trafo->sar_fasa_s_hasil_ihs_dua_a = $request->sar_fasa_s_hasil_ihs_dua_a;
        $trafo->sar_fasa_s_hasil_ihs_dua_det = $request->sar_fasa_s_hasil_ihs_dua_det;
        $trafo->sar_fasa_t_posisi_in = $request->sar_fasa_t_posisi_in;
        $trafo->sar_fasa_t_posisi_is = $request->sar_fasa_t_posisi_is;
        $trafo->sar_fasa_t_posisi_tms = $request->sar_fasa_t_posisi_tms;
        $trafo->sar_fasa_t_posisi_ihs_satu = $request->sar_fasa_t_posisi_ihs_satu;
        $trafo->sar_fasa_t_posisi_ihs_dua = $request->sar_fasa_t_posisi_ihs_dua;
        $trafo->sar_fasa_t_hasil_kerja = $request->sar_fasa_t_hasil_kerja;
        $trafo->sar_fasa_t_hasil_kembali = $request->sar_fasa_t_hasil_kembali;
        $trafo->sar_fasa_t_hasil_t = $request->sar_fasa_t_hasil_t;
        $trafo->sar_fasa_t_hasil_ihs_satu_a = $request->sar_fasa_t_hasil_ihs_satu_a;
        $trafo->sar_fasa_t_hasil_ihs_satu_det = $request->sar_fasa_t_hasil_ihs_satu_det;
        $trafo->sar_fasa_t_hasil_ihs_dua_a = $request->sar_fasa_t_hasil_ihs_dua_a;
        $trafo->sar_fasa_t_hasil_ihs_dua_det = $request->sar_fasa_t_hasil_ihs_dua_det;
        $trafo->sar_fasa_gfr_posisi_in = $request->sar_fasa_gfr_posisi_in;
        $trafo->sar_fasa_gfr_posisi_is = $request->sar_fasa_gfr_posisi_is;
        $trafo->sar_fasa_gfr_posisi_tms = $request->sar_fasa_gfr_posisi_tms;
        $trafo->sar_fasa_gfr_posisi_ihs_satu = $request->sar_fasa_gfr_posisi_ihs_satu;
        $trafo->sar_fasa_gfr_posisi_ihs_dua = $request->sar_fasa_gfr_posisi_ihs_dua;
        $trafo->sar_fasa_gfr_hasil_kerja = $request->sar_fasa_gfr_hasil_kerja;
        $trafo->sar_fasa_gfr_hasil_kembali = $request->sar_fasa_gfr_hasil_kembali;
        $trafo->sar_fasa_gfr_hasil_t = $request->sar_fasa_gfr_hasil_t;
        $trafo->sar_fasa_gfr_hasil_ihs_satu_a = $request->sar_fasa_gfr_hasil_ihs_satu_a;
        $trafo->sar_fasa_gfr_hasil_ihs_satu_det = $request->sar_fasa_gfr_hasil_ihs_satu_det;
        $trafo->sar_fasa_gfr_hasil_ihs_dua_a = $request->sar_fasa_gfr_hasil_ihs_dua_a;
        $trafo->sar_fasa_gfr_hasil_ihs_dua_det = $request->sar_fasa_gfr_hasil_ihs_dua_det;
        $trafo->pj_fasa_r_indikasi = $request->pj_fasa_r_indikasi;
        $trafo->pj_fasa_r_pmt = $request->pj_fasa_r_pmt;
        $trafo->pj_fasa_r_keterangan = $request->pj_fasa_r_keterangan;
        $trafo->pj_fasa_s_indikasi = $request->pj_fasa_s_indikasi;
        $trafo->pj_fasa_s_pmt = $request->pj_fasa_s_pmt;
        $trafo->pj_fasa_s_keterangan = $request->pj_fasa_s_keterangan;
        $trafo->pj_fasa_t_indikasi = $request->pj_fasa_t_indikasi;
        $trafo->pj_fasa_t_pmt = $request->pj_fasa_t_pmt;
        $trafo->pj_fasa_t_keterangan = $request->pj_fasa_t_keterangan;
        $trafo->pj_fasa_gfr_indikasi = $request->pj_fasa_gfr_indikasi;
        $trafo->pj_fasa_gfr_pmt = $request->pj_fasa_gfr_pmt;
        $trafo->pj_fasa_gfr_keterangan = $request->pj_fasa_gfr_keterangan;
        $trafo->catatan = $request->catatan;
        $trafo->pelaksana_satu = $request->pelaksana_satu;
        $trafo->pelaksana_dua = $request->pelaksana_dua;
        $trafo->pelaksana_tiga = $request->pelaksana_tiga;
        $trafo->pelaksana_empat = $request->pelaksana_empat;
        $trafo->pelaksana_lima = $request->pelaksana_lima;
        $trafo->pelaksana_enam = $request->pelaksana_enam;
        $trafo->supervisi = $request->supervisi;

        $trafo->save();

        return redirect()->route('data.trafo.index')->with('status', 'Data Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data  $trafo
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataTrafo $trafo)
    {
        $trafo->delete();

        return redirect()->route('data.trafo.index')->with('status', 'Data Berhasil Dihapus!');
    }

    /**
      * Print Document
    */
    public function print(DataTrafo $trafo)
    {
        return view('data.trafo.print', compact('trafo'));
    }
}
