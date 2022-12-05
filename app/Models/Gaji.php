<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kayandra\Hashidable\Hashidable;

class Gaji extends Model
{
    use HasFactory, Hashidable;

    protected $table = 'wages';

    protected $guarded = ['id'];

    protected $fillable = [
        'nip',
        'gaji',
        't_makan',
        't_operasional',
        't_jabatan',
        'lembur_nas',
        'lembur_b',
        'koreksi',
        'bpjs_kes_perusahaan',
        'bpjs_tk_perusahaan',
        'koreksi_plus',
        'bonus',
        'backup',
        'weekend_banking',
        'insentif',
        'total_plus',
        'jaminan',
        'koreksi_min',
        'diksar',
        'kta',
        'pph21',
        'bpjs_kes_kar',
        'bpjs_tk_kar',
        'bpjs_kes',
        'bpjs_tk',
        'pinjaman',
        'dansos',
        'admin',
        'potongan',
        'total',
        'bulan'
    ];
    
    public function user(){
        return $this->belongsTo('App\Models\User','nip','nip');
    }
}
