<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    use HasFactory;
    protected $guarded =[];

    //public $timestamps = false;
    protected $casts =[
    'img' => 'array',

    ];
    public function catogery()
    {
        return $this->belongsTo(catogery::class,'cat_id');
    }

}
