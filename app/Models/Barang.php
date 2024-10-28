<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id_barang';

    protected $fillable = [
        'nama_barang',
        'deskripsi',
        'id_kategori',
        'harga_satuan'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function stok()
    {
        return $this->hasOne(Stok::class, 'id_barang');
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_barang');
    }
}
