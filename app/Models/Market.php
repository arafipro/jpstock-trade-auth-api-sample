<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    protected $primaryKey = 'market_id';

    protected $fillable = ['market_id', 'market']; // 追加

    public $timestamps = false; // 追加

    public function stock()
    {
        return $this->hasMany(Stock::class, 'code', 'code');
    }
}
