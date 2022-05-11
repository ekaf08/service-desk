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