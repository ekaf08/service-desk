<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Opd;
use App\Models\Access;
use App\Models\Status;
use App\Models\Channel;
use App\Models\Incident;

use App\Models\IncidentType;
use App\Models\LogIncident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IncidentController extends Controller
{
    public function index()
    {
        $etiket = Incident::with('opd')->where('status_terakhir', 'eTiket')->get();
        $open = Incident::with('operator')->where('status_terakhir', 'Open')->get();
        return view('dashboard.insiden.index', [
            'title' => 'Lihat Semua Tiket',
            'etikets' => $etiket,
            'opentickets' => $open,
        ]);
    }

    public function show(Incident $incident){
        return view('dashboard.insiden.detail-insiden', [
            'title' => 'Lihat Insiden',
            'incident' => $incident,
        ]);
    }

    public function edit(Incident $incident){
        return view('dashboard.insiden.edit-insiden', [
            'title' => 'Edit Insiden', 
            'incident' => $incident,
        ]);
    }

    public function buatTicket()
    {
        [$date, $time] = getDateAndTime();
        $opds = Opd::orderBy('nama_opd')->get();
        $incidentType = IncidentType::firstWhere('jenis_insiden', 'Tiket Insiden')->id;
        $channels = Channel::all();

        return view('dashboard.insiden.form-tiket', [
            'title' => 'Formulir Tiket Insiden User',
            'date' => $date,
            'time' => $time,
            'opds' => $opds,
            'incidentType' => $incidentType,
            'channels' => $channels,
        ]);
    }

    public function buatMonitoring()
    {
        [$date, $time] = getDateAndTime();

        $id_kominfo = Opd::firstWhere('nama_opd', 'dinas komunikasi dan informatika')->id;
        $incidentType = IncidentType::firstWhere('jenis_insiden', 'Tiket Insiden')->id;
        $channels = Channel::all();

        return view('dashboard.insiden.form-monitoring', [
            'title' => 'Formulir Tiket Monitoring',
            'date' => $date,
            'time' => $time,
            'id_kominfo' => $id_kominfo,
            'incidentType' => $incidentType,
            'channels' => $channels,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            "idOperator" => 'required',
            "namaPelapor" => 'required',
            "nipPelapor" => 'nullable|regex:/[0-9]*/',
            "tipeInsiden" => 'required',
            "namaOpd" => 'required',
            "channel" => 'required',
            "email" => 'nullable|email',
            "noHP" => 'required|regex:/(08)[0-9]*/|max:14',
            "deskripsiKeluhan" => 'required',
        ]);

        try {
            $last_incident = Incident::whereYear('created_at', date('Y'))->latest('created_at')->first()->no_insiden;
        } catch (Exception $e) {
            $last_incident = 'INS-0';
        }
        $curr_incident = 'INS-' . (string)((int)(preg_replace('/[^0-9]/', '', $last_incident)) + 1);

        $newIncident = Incident::create([
            'no_insiden' => $curr_incident,
            'incident_type_id' => $request->tipeInsiden,
            'operator_id' => $request->idOperator,
            'nip_pelapor' => $request->nipPelapor,
            'no_hp' => $request->noHP,
            'nama_pelapor' => $request->namaPelapor,
            'deskripsi' => $request->deskripsiKeluhan,
            'opd_id' => $request->namaOpd,
        ]);

        $user = auth()->user();
        $user_level = Access::find($user->access_id)->level;
        if ($user_level <= 2) {
            $status = 'Open';
        } else if ($user_level > 2) {
            $status = 'eTiket';
        }

        (new LogIncidentController)->store([
            'user_id' => $user->id,
            'incident_id' => $newIncident->id,
            'status' => $status,
        ]);

        $this->updateStatus($newIncident->id);
        return redirect('insiden/' . $newIncident->id);
    }

    public function updateStatus($id)
    {
        $status_id = LogIncident::where('incident_id', $id)
            ->orderBy('updated_at', 'desc')
            ->first()->status_id;
        Incident::find($id)->update(['status_terakhir' => Status::find($status_id)->status]);
    }
}
