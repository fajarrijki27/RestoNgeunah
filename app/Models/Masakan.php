<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Masakan extends Model
{
    protected $table = 'masakans';
    protected $fillable = [
        'img',
        'nama_masakan',
        'harga',
        'status_masakan',
        'kategori_masakan',
    ];

    public function detailOrders()
    {
        return $this->hasMany(Detail_Order::class);
    }
}
