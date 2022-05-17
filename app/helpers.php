<?php 

use Carbon\Carbon;

if(!function_exists('getDateAndTime')){
    function getDateAndTime(){
        $dt = Carbon::now(env('APP_TZ'));
        $date = $dt->isoFormat('dddd, Do MMMM YYYY');
        $time = $dt->isoformat('H:mm');
        return [$date, $time];
    }
}

if(!function_exists('rjust')){
    function rjust($string, $length, $char="0"){
        return str_pad($string, $length, $char, STR_PAD_LEFT);
    }
}