<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeranjangModel extends Model
{
    protected $table = 'keranjangs';
    protected $fillable = ['id','id_obat', 'jumlah'];

    public function obat()
    {
        return $this->hasOne(ObatModel::class, 'id', 'id_obat');
    }
}