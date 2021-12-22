<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catogery extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
    ];
    public function portfolios()
    {
        return $this->hasMany(portfolio::class,'cat_id');
    }
}
