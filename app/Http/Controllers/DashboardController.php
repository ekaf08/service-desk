<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Incident;
use Exception;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $statuses = [];
        $status_mod = Status::all();
        $color = ['purple', 'blue', 'red', 'green', 'red', 'green'];

        $counterStatus = (DB::table('incidents')->select('status_terakhir', DB::raw('count(*) as total'))->whereYear('created_at', date('Y'))->groupBy('status_terakhir')->get()->keyBy('status_terakhir'));

        foreach($status_mod as $key =>$status){
            if($key < 5){
                try{
                    $counter = $counterStatus[$status->status]->total;
                } catch(Exception $e){
                    $counter = 0;
                }
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
