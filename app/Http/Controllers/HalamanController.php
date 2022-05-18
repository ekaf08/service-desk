<?php



namespace App\Http\Controllers;

use Exception;
use App\Models\Opd;
use App\Models\Access;
use App\Models\Status;
use App\Models\Channel;
use App\Models\Halaman;

use App\Models\Incident;
use App\Models\LogIncident;
use App\Models\IncidentType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HalamanController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tampilhalaman()
    {
        $posts = Halaman::latest()
            ->get();
        return view('dashboard.insiden.halaman', [
            'title' => 'Halaman Awal - Knowledge Base',
            'posts' => $posts
        ]);
    }

    // public function index()
    // {
    //     return view('posts', [
    //         "title" => "Halaman Awal - Knowledge Base",

    //         // "posts" =>  Post::all()
    //         "posts" => Halaman::all()

    //         // menggunakan metode aeger agar load data tidak berat, nama dari function yg akan di tampilkan
    //     ]);
    // }

    // public function tampilhalaman()
    // {



}
