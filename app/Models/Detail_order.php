<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_order extends Model
{
    protected $table = 'detail_orders';
    protected $fillable = [
        'id_order',
        'id_masakan',
        'keterangan',
        'status_detail_order',
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
