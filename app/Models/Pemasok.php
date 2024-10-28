<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemasok extends Model
{
    protected $table = 'pemasok';
    protected $primaryKey = 'id_pemasok';

    protected $fillable = [
        'nama_pemasok',
        'alamat_pemasok',
        'telepon'
    ];
}
