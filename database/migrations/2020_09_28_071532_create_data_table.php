<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->references('id')->on('users');
            $table->string('hu_merk')->nullable();
            $table->string('hu_type')->nullable();
            $table->string('hu_no_serie')->nullable();
            $table->string('hu_rating')->nullable();
            $table->string('hu_karakteristik')->nullable();
            $table->date('hu_tanggal')->nullable();
            $table->string('hu_lokasi')->nullable();
            $table->string('hu_bay')->nullable();
            $table->string('hu_ratio_ct')->nullable();
            $table->string('hu_alat_uji')->nullable();
            $table->double('akmk_fasa_r_arus_nominal', 10, 3)->nullable();
            $table->double('akmk_fasa_r_setting', 10, 3)->nullable();
            $table->double('akmk_fasa_r_arus_kerja', 10, 3)->nullable();
            $table->double('akmk_fasa_r_arus_kembali', 10, 3)->nullable();
            $table->double('akmk_fasa_r_ratio', 10, 3)->nullable();
            $table->double('akmk_fasa_s_arus_nominal', 10, 3)->nullable();
            $table->double('akmk_fasa_s_setting', 10, 3)->nullable();
            $table->double('akmk_fasa_s_arus_kerja', 10, 3)->nullable();
            $table->double('akmk_fasa_s_arus_kembali', 10, 3)->nullable();
            $table->double('akmk_fasa_s_ratio', 10, 3)->nullable();
            $table->double('akmk_fasa_t_arus_nominal', 10, 3)->nullable();
            $table->double('akmk_fasa_t_setting', 10, 3)->nullable();
            $table->double('akmk_fasa_t_arus_kerja', 10, 3)->nullable();
            $table->double('akmk_fasa_t_arus_kembali', 10, 3)->nullable();
            $table->double('akmk_fasa_t_ratio', 10, 3)->nullable();
            $table->double('akmk_fasa_gfr_arus_nominal', 10, 3)->nullable();
            $table->double('akmk_fasa_gfr_setting', 10, 3)->nullable();
            $table->double('akmk_fasa_gfr_arus_kerja', 10, 3)->nullable();
            $table->double('akmk_fasa_gfr_arus_kembali', 10, 3)->nullable();
            $table->double('akmk_fasa_gfr_ratio', 10, 3)->nullable();
            $table->double('kw_tms_ocr', 10, 3)->nullable();
            $table->double('kw_tms_gfr', 10, 3)->nullable();
            $table->double('kw_fasa_r_satu_lima', 10, 3)->nullable();
            $table->double('kw_fasa_r_dua', 10, 3)->nullable();
            $table->double('kw_fasa_r_tiga', 10, 3)->nullable();
            $table->double('kw_fasa_r_empat', 10, 3)->nullable();
            $table->double('kw_fasa_s_satu_lima', 10, 3)->nullable();
            $table->double('kw_fasa_s_dua', 10, 3)->nullable();
            $table->double('kw_fasa_s_tiga', 10, 3)->nullable();
            $table->double('kw_fasa_s_empat', 10, 3)->nullable();
            $table->double('kw_fasa_t_satu_lima', 10, 3)->nullable();
            $table->double('kw_fasa_t_dua', 10, 3)->nullable();
            $table->double('kw_fasa_t_tiga', 10, 3)->nullable();
            $table->double('kw_fasa_t_empat', 10, 3)->nullable();
            $table->double('kw_fasa_gfr_satu_lima', 10, 3)->nullable();
            $table->double('kw_fasa_gfr_dua', 10, 3)->nullable();
            $table->double('kw_fasa_gfr_tiga', 10, 3)->nullable();
            $table->double('kw_fasa_gfr_empat', 10, 3)->nullable();
            $table->double('wks_fasa_r_setting_ihs_satu', 10, 3)->nullable();
            $table->double('wks_fasa_r_arus_uji_ihs_satu', 10, 3)->nullable();
            $table->double('wks_fasa_r_waktu_kerja_ihs_satu', 10, 3)->nullable();
            $table->double('wks_fasa_r_setting_ihs_dua', 10, 3)->nullable();
            $table->double('wks_fasa_r_arus_uji_ihs_dua', 10, 3)->nullable();
            $table->double('wks_fasa_r_waktu_kerja_ihs_dua', 10, 3)->nullable();
            $table->double('wks_fasa_s_setting_ihs_satu', 10, 3)->nullable();
            $table->double('wks_fasa_s_arus_uji_ihs_satu', 10, 3)->nullable();
            $table->double('wks_fasa_s_waktu_kerja_ihs_satu', 10, 3)->nullable();
            $table->double('wks_fasa_s_setting_ihs_dua', 10, 3)->nullable();
            $table->double('wks_fasa_s_arus_uji_ihs_dua', 10, 3)->nullable();
            $table->double('wks_fasa_s_waktu_kerja_ihs_dua', 10, 3)->nullable();
            $table->double('wks_fasa_t_setting_ihs_satu', 10, 3)->nullable();
            $table->double('wks_fasa_t_arus_uji_ihs_satu', 10, 3)->nullable();
            $table->double('wks_fasa_t_waktu_kerja_ihs_satu', 10, 3)->nullable();
            $table->double('wks_fasa_t_setting_ihs_dua', 10, 3)->nullable();
            $table->double('wks_fasa_t_arus_uji_ihs_dua', 10, 3)->nullable();
            $table->double('wks_fasa_t_waktu_kerja_ihs_dua', 10, 3)->nullable();
            $table->double('wks_fasa_gfr_setting_ihs_satu', 10, 3)->nullable();
            $table->double('wks_fasa_gfr_arus_uji_ihs_satu', 10, 3)->nullable();
            $table->double('wks_fasa_gfr_waktu_kerja_ihs_satu', 10, 3)->nullable();
            $table->double('wks_fasa_gfr_setting_ihs_dua', 10, 3)->nullable();
            $table->double('wks_fasa_gfr_arus_uji_ihs_dua', 10, 3)->nullable();
            $table->double('wks_fasa_gfr_waktu_kerja_ihs_dua', 10, 3)->nullable();
            $table->double('sar_fasa_r_posisi_in', 10, 3)->nullable();
            $table->double('sar_fasa_r_posisi_is', 10, 3)->nullable();
            $table->double('sar_fasa_r_posisi_tms', 10, 3)->nullable();
            $table->double('sar_fasa_r_posisi_ihs_satu', 10, 3)->nullable();
            $table->double('sar_fasa_r_posisi_ihs_dua', 10, 3)->nullable();
            $table->double('sar_fasa_r_hasil_kerja', 10, 3)->nullable();
            $table->double('sar_fasa_r_hasil_kembali', 10, 3)->nullable();
            $table->double('sar_fasa_r_hasil_t', 10, 3)->nullable();
            $table->double('sar_fasa_r_hasil_ihs_satu_a', 10, 3)->nullable();
            $table->double('sar_fasa_r_hasil_ihs_satu_det', 10, 3)->nullable();
            $table->double('sar_fasa_r_hasil_ihs_dua_a', 10, 3)->nullable();
            $table->double('sar_fasa_r_hasil_ihs_dua_det', 10, 3)->nullable();
            $table->double('sar_fasa_s_posisi_in', 10, 3)->nullable();
            $table->double('sar_fasa_s_posisi_is', 10, 3)->nullable();
            $table->double('sar_fasa_s_posisi_tms', 10, 3)->nullable();
            $table->double('sar_fasa_s_posisi_ihs_satu', 10, 3)->nullable();
            $table->double('sar_fasa_s_posisi_ihs_dua', 10, 3)->nullable();
            $table->double('sar_fasa_s_hasil_kerja', 10, 3)->nullable();
            $table->double('sar_fasa_s_hasil_kembali', 10, 3)->nullable();
            $table->double('sar_fasa_s_hasil_t', 10, 3)->nullable();
            $table->double('sar_fasa_s_hasil_ihs_satu_a', 10, 3)->nullable();
            $table->double('sar_fasa_s_hasil_ihs_satu_det', 10, 3)->nullable();
            $table->double('sar_fasa_s_hasil_ihs_dua_a', 10, 3)->nullable();
            $table->double('sar_fasa_s_hasil_ihs_dua_det', 10, 3)->nullable();
            $table->double('sar_fasa_t_posisi_in', 10, 3)->nullable();
            $table->double('sar_fasa_t_posisi_is', 10, 3)->nullable();
            $table->double('sar_fasa_t_posisi_tms', 10, 3)->nullable();
            $table->double('sar_fasa_t_posisi_ihs_satu', 10, 3)->nullable();
            $table->double('sar_fasa_t_posisi_ihs_dua', 10, 3)->nullable();
            $table->double('sar_fasa_t_hasil_kerja', 10, 3)->nullable();
            $table->double('sar_fasa_t_hasil_kembali', 10, 3)->nullable();
            $table->double('sar_fasa_t_hasil_t', 10, 3)->nullable();
            $table->double('sar_fasa_t_hasil_ihs_satu_a', 10, 3)->nullable();
            $table->double('sar_fasa_t_hasil_ihs_satu_det', 10, 3)->nullable();
            $table->double('sar_fasa_t_hasil_ihs_dua_a', 10, 3)->nullable();
            $table->double('sar_fasa_t_hasil_ihs_dua_det', 10, 3)->nullable();
            $table->double('sar_fasa_gfr_posisi_in', 10, 3)->nullable();
            $table->double('sar_fasa_gfr_posisi_is', 10, 3)->nullable();
            $table->double('sar_fasa_gfr_posisi_tms', 10, 3)->nullable();
            $table->double('sar_fasa_gfr_posisi_ihs_satu', 10, 3)->nullable();
            $table->double('sar_fasa_gfr_posisi_ihs_dua', 10, 3)->nullable();
            $table->double('sar_fasa_gfr_hasil_kerja', 10, 3)->nullable();
            $table->double('sar_fasa_gfr_hasil_kembali', 10, 3)->nullable();
            $table->double('sar_fasa_gfr_hasil_t', 10, 3)->nullable();
            $table->double('sar_fasa_gfr_hasil_ihs_satu_a', 10, 3)->nullable();
            $table->double('sar_fasa_gfr_hasil_ihs_satu_det', 10, 3)->nullable();
            $table->double('sar_fasa_gfr_hasil_ihs_dua_a', 10, 3)->nullable();
            $table->double('sar_fasa_gfr_hasil_ihs_dua_det', 10, 3)->nullable();
            $table->string('pj_fasa_r_indikasi')->nullable();
            $table->string('pj_fasa_r_pmt')->nullable();
            $table->string('pj_fasa_r_keterangan')->nullable();
            $table->string('pj_fasa_s_indikasi')->nullable();
            $table->string('pj_fasa_s_pmt')->nullable();
            $table->string('pj_fasa_s_keterangan')->nullable();
            $table->string('pj_fasa_t_indikasi')->nullable();
            $table->string('pj_fasa_t_pmt')->nullable();
            $table->string('pj_fasa_t_keterangan')->nullable();
            $table->string('pj_fasa_gfr_indikasi')->nullable();
            $table->string('pj_fasa_gfr_pmt')->nullable();
            $table->string('pj_fasa_gfr_keterangan')->nullable();
            $table->longText('catatan')->nullable();
            $table->string('pelaksana_satu')->nullable();
            $table->string('pelaksana_dua')->nullable();
            $table->string('pelaksana_tiga')->nullable();
            $table->string('pelaksana_empat')->nullable();
            $table->string('pelaksana_lima')->nullable();
            $table->string('pelaksana_enam')->nullable();
            $table->string('supervisi')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
}
