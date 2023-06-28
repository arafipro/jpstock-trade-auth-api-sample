<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    protected $fillable = [
        'id',
        'code',
        'shares',
        'price',
        'trading_date',
        'buy_sell',
        'credit_ratio',
        'lender_ratio',
        'memo',
        'company_id',
        'chart_img',
        'per',
        'pbr',
    ];

    public $timestamps = false;

    public function stock()
    {
        return $this->belongsTo(Stock::class, 'code', 'code');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'company_id');
    }
}
