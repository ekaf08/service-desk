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

if(!function_exists('parseDate')){
    function parseDate($time, $isoFormat = True){
        if($isoFormat){
            return $time->isoFormat('dddd, Do MMMM YYYY');
        } else {
            return $time->format('%Y%m%d%H%M%s');
        }
    }
}

if(!function_exists('parseTime')){
    function parseTime($time, $isoFormat = True){
        if($isoFormat){
            return $time->isoFormat('H:mm');
        } else {
            return $time->format('%H%M%s');
        }
    }
}

if(!function_exists('rjust')){
    function rjust($string, $length, $char="0"){
        return str_pad($string, $length, $char, STR_PAD_LEFT);
    }
}