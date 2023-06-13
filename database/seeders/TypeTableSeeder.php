<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['FrontEnd', 'BackEnd', 'FullStack'];

        foreach($types as $type)
        {
            $newType = new Type();
            $newType->nome = $type;
            $newType->save();
        }
    }
}
