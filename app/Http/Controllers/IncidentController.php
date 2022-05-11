<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\Opd;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    public function index(){
        return view('dashboard.insiden.index', [
            'title' => 'Lihat Semua Tiket'
        ]);
    }

    public function buatTicket(){
        [$date, $time] = getDateAndTime();
        $opds = Opd::orderBy('nama_opd')->get();
        $channels = Channel::all();
    
        return view('dashboard.insiden.form-tiket', [
                'title' => 'Formulir Tiket Insiden User',
                'date' => $date,
                'time' => $time,
                'opds' => $opds,
                'channels' => $channels,
            ]);
    }

    public function postTicket(Request $request){
        return $request->all();
    }
    
    public function buatMonitoring(){
        [$date, $time] = getDateAndTime();

        $id_kominfo = Opd::firstWhere('nama_opd', 'dinas komunikasi dan informatika')->id;
        return view('dashboard.insiden.form-monitoring', [
                'title' => 'Formulir Tiket Monitoring',
                'date' => $date,
                'time' => $time,
            ]);
    }
}
