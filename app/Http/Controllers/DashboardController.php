<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use App\Models\Status;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $statuses = [];
        $status_mod = Status::all();
        $color = ['purple', 'blue', 'red', 'green', 'red', 'green'];
        foreach($status_mod as $key =>$status){
            if($key < 5){
                $counter = Incident::whereYear('created_at', date('Y'))->where('status_terakhir', $status->status)->count();
            } else {
                $counter = Incident::count();
            }
            array_push($statuses, [
                'color' => $color[$key],
                'status' => $status->status,
                'deskripsi' => $status->deskripsi,
                'counter' => $counter
            ]);
        }
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'statuses' => $statuses,
        ]);
    }
}
