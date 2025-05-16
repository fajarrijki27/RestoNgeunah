<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'no_meja',
        'tanggal',
        'id_user',
        'keterangan',
        'status_order',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function detailOrders()
    {
        return $this->hasMany(Detail_Order::class);
    }

    public function transaksi()
    {
        return $this->hasOne(Transaksi::class);
    }
}
