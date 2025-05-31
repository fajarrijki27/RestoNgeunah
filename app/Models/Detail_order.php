<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_order extends Model
{
    protected $table = 'detail_orders';
    protected $fillable = [
        'id_order',
        'id_masakan',
        'qty',
        'keterangan',
        'total_bayar',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function masakan()
    {
        return $this->belongsTo(Masakan::class);
    }
}
