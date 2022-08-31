<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TindakanModel extends Model
{
    protected $table = 'tindakan_models';
    protected $fillable = ['id_pasien', 'tindakan', 'id_keranjang','total'];

    public function pasien()
    {
        return $this->belongsTo('App\PasienModel', 'id_pasien', 'id');
    }
    public function keranjang()
    {
        return $this->belongsTo('App\KeranjangModel', 'id_keranjang', 'id');
    }
}