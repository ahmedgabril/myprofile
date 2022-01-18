<?php

use App\Models\about;
use App\Models\setting;

function getlogo(){

     $a = about::select('id','logo')->first();
     return $a->logo;
}

function getsitename(){

    $sitename = setting::where('key','compnyname')->select('key','value')->first();
    return $sitename->value;

}
function getwhatsupnumber(){

    $sitename = setting::where('key','whatsup')->select('key','value')->first();
    return $sitename->value;

}
function getwhatsupmsg(){

    $sitename = setting::where('key','whatsupmsg')->select('key','value')->first();
    return $sitename->value;

}
