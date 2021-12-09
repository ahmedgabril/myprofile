<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use HasFactory;

    public function img(): string

    {

     return $this->img;
    }
    public function url(): string

    {

     return $this->url;
    }


}
