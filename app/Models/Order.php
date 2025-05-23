<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'code_transaksi',
        'no_meja',
        'tanggal',
        'nama_pengunjung',
        'keterangan',
        'status_order',
    ];

    public function detailOrders()
    {
        return $this->hasMany(Detail_Order::class);
    }

    public function transaksi()
    {
        return $this->hasOne(Transaksi::class);
    }
}
