<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $primaryKey = 'company_id';

    protected $fillable = ['company_id', 'company'];

    public $timestamps = false;

    public function trade()
    {
        return $this->hasMany(Stock::class, 'company_id', 'company_id');
    }
}
