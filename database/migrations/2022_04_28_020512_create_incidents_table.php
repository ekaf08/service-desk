<?php

use App\Models\Channel;
use App\Models\IncidentType;
use App\Models\Keyword;
use App\Models\Opd;
use App\Models\Priority;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->id();
            $table->string('no_insiden');
            $table->foreignId(IncidentType::class);
            $table->foreignIdFor(User::class, 'operator_id');
            $table->string('nip_pelapor')->nullable();
            $table->string('nama_pelapor');
            $table->foreignId(Opd::class);
            $table->string('alamat')->nullable();
            $table->text('deskripsi');
            $table->foreignId(Keyword::class)->nullable();
            $table->foreignIdFor(User::class, 'koordinator_id')->nullable();
            $table->foreignIdFor(User::class, 'teknisi_pj_id')->nullable();
            $table->time('waktu_penanganan')->nullable();
            // $table->foreignId(Priority::class);
            $table->foreignId(Channel::class)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidents');
    }
}
