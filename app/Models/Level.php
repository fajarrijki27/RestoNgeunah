<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'levels';
    protected $fillable = [
        'nama_level',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
