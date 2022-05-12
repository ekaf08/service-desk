<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\LogIncident;
use Illuminate\Http\Request;

class LogIncidentController extends Controller
{
    public function store($params){
        $params['status_id'] = Status::firstWhere('status', $params['status'])->id;
        unset($params['status']);
        return LogIncident::create($params);
    }
}
