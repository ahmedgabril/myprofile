<?php

use App\Models\about;

function getlogo(){

     $a = about::select('id','logo')->first();
     return $a->logo;
}
