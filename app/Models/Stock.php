<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $primaryKey = 'code';

    protected $fillable = ['code', 'stockname', 'market_id'];

    public $timestamps = false;

    public function market()
    {
        return $this->belongsTo(Market::class, 'market_id', 'market_id');
    }

    public function trade()
    {
        return $this->hasMany(Trade::class, 'code', 'code');
    }
}
