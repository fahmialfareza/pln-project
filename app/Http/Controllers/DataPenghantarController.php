<?php

namespace App\Http\Controllers;

use App\Models\DataPenghantar;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use PDF;

class DataPenghantarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->admin == 0) {
            $penghantar = User::find(Auth::user()->id)->dataPenghantar;
        } else {
            $penghantar = DataPenghantar::all();
        }

        return view('data.penghantar.index', compact('penghantar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.penghantar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penghantar = $request->except('_token');
        $penghantar['user_id'] = Auth::user()->id;
        // dd($penghantar);

        DataPenghantar::firstOrCreate($penghantar);

        return redirect()->route('data.penghantar.index')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPenghantar $penghantar)
    {
        return view('data.penghantar.edit', compact('penghantar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataPenghantar $penghantar)
    {
        $penghantar->hu_merk = $request->hu_merk;
        $penghantar->hu_type = $request->hu_type;
        $penghantar->hu_no_serie = $request->hu_no_serie;
        $penghantar->hu_rating = $request->hu_rating;
        $penghantar->hu_karakteristik = $request->hu_karakteristik;
        $penghantar->hu_tanggal = $request->hu_tanggal;
        $penghantar->hu_lokasi = $request->hu_lokasi;
        $penghantar->hu_bay = $request->hu_bay;
        $penghantar->hu_ratio_ct = $request->hu_ratio_ct;
        $penghantar->hu_alat_uji = $request->hu_alat_uji;
        $penghantar->akmk_fasa_r_arus_nominal = $request->akmk_fasa_r_arus_nominal;
        $penghantar->akmk_fasa_r_setting = $request->akmk_fasa_r_setting;
        $penghantar->akmk_fasa_r_arus_kerja = $request->akmk_fasa_r_arus_kerja;
        $penghantar->akmk_fasa_r_arus_kembali = $request->akmk_fasa_r_arus_kembali;
        $penghantar->akmk_fasa_r_ratio = $request->akmk_fasa_r_ratio;
        $penghantar->akmk_fasa_s_arus_nominal = $request->akmk_fasa_s_arus_nominal;
        $penghantar->akmk_fasa_s_setting = $request->akmk_fasa_s_setting;
        $penghantar->akmk_fasa_s_arus_kerja = $request->akmk_fasa_s_arus_kerja;
        $penghantar->akmk_fasa_s_arus_kembali = $request->akmk_fasa_s_arus_kembali;
        $penghantar->akmk_fasa_s_ratio = $request->akmk_fasa_s_ratio;
        $penghantar->akmk_fasa_t_arus_nominal = $request->akmk_fasa_t_arus_nominal;
        $penghantar->akmk_fasa_t_setting = $request->akmk_fasa_t_setting;
        $penghantar->akmk_fasa_t_arus_kerja = $request->akmk_fasa_t_arus_kerja;
        $penghantar->akmk_fasa_t_arus_kembali = $request->akmk_fasa_t_arus_kembali;
        $penghantar->akmk_fasa_t_ratio = $request->akmk_fasa_t_ratio;
        $penghantar->akmk_fasa_gfr_arus_nominal = $request->akmk_fasa_gfr_arus_nominal;
        $penghantar->akmk_fasa_gfr_setting = $request->akmk_fasa_gfr_setting;
        $penghantar->akmk_fasa_gfr_arus_kerja = $request->akmk_fasa_gfr_arus_kerja;
        $penghantar->akmk_fasa_gfr_arus_kembali = $request->akmk_fasa_gfr_arus_kembali;
        $penghantar->akmk_fasa_gfr_ratio = $request->akmk_fasa_gfr_ratio;
        $penghantar->kw_tms_ocr = $request->kw_tms_ocr;
        $penghantar->kw_tms_gfr = $request->kw_tms_gfr;
        $penghantar->kw_tms_ocr_variable = $request->kw_tms_ocr_variable;
        $penghantar->kw_tms_gfr_variable = $request->kw_tms_gfr_variable;
        $penghantar->kw_fasa_r_satu_lima = $request->kw_fasa_r_satu_lima;
        $penghantar->kw_fasa_r_dua = $request->kw_fasa_r_dua;
        $penghantar->kw_fasa_r_tiga = $request->kw_fasa_r_tiga;
        $penghantar->kw_fasa_r_empat = $request->kw_fasa_r_empat;
        $penghantar->kw_fasa_s_satu_lima = $request->kw_fasa_s_satu_lima;
        $penghantar->kw_fasa_s_dua = $request->kw_fasa_s_dua;
        $penghantar->kw_fasa_s_tiga = $request->kw_fasa_s_tiga;
        $penghantar->kw_fasa_s_empat = $request->kw_fasa_s_empat;
        $penghantar->kw_fasa_t_satu_lima = $request->kw_fasa_t_satu_lima;
        $penghantar->kw_fasa_t_dua = $request->kw_fasa_t_dua;
        $penghantar->kw_fasa_t_tiga = $request->kw_fasa_t_tiga;
        $penghantar->kw_fasa_t_empat = $request->kw_fasa_t_empat;
        $penghantar->kw_fasa_gfr_satu_lima = $request->kw_fasa_gfr_satu_lima;
        $penghantar->kw_fasa_gfr_dua = $request->kw_fasa_gfr_dua;
        $penghantar->kw_fasa_gfr_tiga = $request->kw_fasa_gfr_tiga;
        $penghantar->kw_fasa_gfr_empat = $request->kw_fasa_gfr_empat;
        $penghantar->wks_fasa_r_setting = $request->wks_fasa_r_setting;
        $penghantar->wks_fasa_r_arus_uji = $request->wks_fasa_r_arus_uji;
        $penghantar->wks_fasa_r_waktu_kerja = $request->wks_fasa_r_waktu_kerja;
        $penghantar->wks_fasa_s_setting = $request->wks_fasa_s_setting;
        $penghantar->wks_fasa_s_arus_uji = $request->wks_fasa_s_arus_uji;
        $penghantar->wks_fasa_s_waktu_kerja = $request->wks_fasa_s_waktu_kerja;
        $penghantar->wks_fasa_t_setting = $request->wks_fasa_t_setting;
        $penghantar->wks_fasa_t_arus_uji = $request->wks_fasa_t_arus_uji;
        $penghantar->wks_fasa_t_waktu_kerja = $request->wks_fasa_t_waktu_kerja;
        $penghantar->wks_fasa_gfr_setting = $request->wks_fasa_gfr_setting;
        $penghantar->wks_fasa_gfr_arus_uji = $request->wks_fasa_gfr_arus_uji;
        $penghantar->wks_fasa_gfr_waktu_kerja = $request->wks_fasa_gfr_waktu_kerja;
        $penghantar->sar_fasa_r_posisi_in = $request->sar_fasa_r_posisi_in;
        $penghantar->sar_fasa_r_posisi_is = $request->sar_fasa_r_posisi_is;
        $penghantar->sar_fasa_r_posisi_tms = $request->sar_fasa_r_posisi_tms;
        $penghantar->sar_fasa_r_posisi_moment = $request->sar_fasa_r_posisi_moment;
        $penghantar->sar_fasa_r_hasil_kerja = $request->sar_fasa_r_hasil_kerja;
        $penghantar->sar_fasa_r_hasil_kembali = $request->sar_fasa_r_hasil_kembali;
        $penghantar->sar_fasa_r_hasil_t = $request->sar_fasa_r_hasil_t;
        $penghantar->sar_fasa_r_hasil_moment_a = $request->sar_fasa_r_hasil_moment_a;
        $penghantar->sar_fasa_r_hasil_moment_det = $request->sar_fasa_r_hasil_moment_det;
        $penghantar->sar_fasa_s_posisi_in = $request->sar_fasa_s_posisi_in;
        $penghantar->sar_fasa_s_posisi_is = $request->sar_fasa_s_posisi_is;
        $penghantar->sar_fasa_s_posisi_tms = $request->sar_fasa_s_posisi_tms;
        $penghantar->sar_fasa_s_posisi_moment = $request->sar_fasa_s_posisi_moment;
        $penghantar->sar_fasa_s_hasil_kerja = $request->sar_fasa_s_hasil_kerja;
        $penghantar->sar_fasa_s_hasil_kembali = $request->sar_fasa_s_hasil_kembali;
        $penghantar->sar_fasa_s_hasil_t = $request->sar_fasa_s_hasil_t;
        $penghantar->sar_fasa_s_hasil_moment_a = $request->sar_fasa_s_hasil_moment_a;
        $penghantar->sar_fasa_s_hasil_moment_det = $request->sar_fasa_s_hasil_moment_det;
        $penghantar->sar_fasa_t_posisi_in = $request->sar_fasa_t_posisi_in;
        $penghantar->sar_fasa_t_posisi_is = $request->sar_fasa_t_posisi_is;
        $penghantar->sar_fasa_t_posisi_tms = $request->sar_fasa_t_posisi_tms;
        $penghantar->sar_fasa_t_posisi_moment = $request->sar_fasa_t_posisi_moment;
        $penghantar->sar_fasa_t_hasil_kerja = $request->sar_fasa_t_hasil_kerja;
        $penghantar->sar_fasa_t_hasil_kembali = $request->sar_fasa_t_hasil_kembali;
        $penghantar->sar_fasa_t_hasil_t = $request->sar_fasa_t_hasil_t;
        $penghantar->sar_fasa_t_hasil_moment_a = $request->sar_fasa_t_hasil_moment_a;
        $penghantar->sar_fasa_t_hasil_moment_det = $request->sar_fasa_t_hasil_moment_det;
        $penghantar->sar_fasa_gfr_posisi_in = $request->sar_fasa_gfr_posisi_in;
        $penghantar->sar_fasa_gfr_posisi_is = $request->sar_fasa_gfr_posisi_is;
        $penghantar->sar_fasa_gfr_posisi_tms = $request->sar_fasa_gfr_posisi_tms;
        $penghantar->sar_fasa_gfr_posisi_moment = $request->sar_fasa_gfr_posisi_moment;
        $penghantar->sar_fasa_gfr_hasil_kerja = $request->sar_fasa_gfr_hasil_kerja;
        $penghantar->sar_fasa_gfr_hasil_kembali = $request->sar_fasa_gfr_hasil_kembali;
        $penghantar->sar_fasa_gfr_hasil_t = $request->sar_fasa_gfr_hasil_t;
        $penghantar->sar_fasa_gfr_hasil_moment_a = $request->sar_fasa_gfr_hasil_moment_a;
        $penghantar->sar_fasa_gfr_hasil_moment_det = $request->sar_fasa_gfr_hasil_moment_det;
        $penghantar->catatan = $request->catatan;
        $penghantar->pelaksana_satu = $request->pelaksana_satu;
        $penghantar->pelaksana_dua = $request->pelaksana_dua;
        $penghantar->pelaksana_tiga = $request->pelaksana_tiga;
        $penghantar->pelaksana_empat = $request->pelaksana_empat;
        $penghantar->pelaksana_lima = $request->pelaksana_lima;
        $penghantar->pelaksana_enam = $request->pelaksana_enam;
        $penghantar->supervisi = $request->supervisi;

        $penghantar->save();

        return redirect()->route('data.penghantar.index')->with('status', 'Data Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataPenghantar $penghantar)
    {
        $penghantar->delete();

        return redirect()->route('data.penghantar.index')->with('status', 'Data Berhasil Dihapus!');
    }

    /**
      * Print Document
    */
    public function print(DataPenghantar $penghantar)
    {
        return view('data.penghantar.print', compact('penghantar'));
    }
}
