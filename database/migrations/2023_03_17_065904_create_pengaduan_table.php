<?php

use App\Models\Pengaduan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            $table->string('isi');
            $table->string('lokasi');
            $table->date('tanggal');
            $table->string('file')->nullable();;
            $table->string('tanggapan')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('pengaduan');
    }
}
