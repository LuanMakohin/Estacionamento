<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Vagas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class VagasSeeder extends Seeder {

    public function run()
    {
       DB::table('vagas')->delete();
       for ($i = 0; $i < 20; $i++ ){
        Vagas::create(array('cheia' => '0'));
       }
    }

}
