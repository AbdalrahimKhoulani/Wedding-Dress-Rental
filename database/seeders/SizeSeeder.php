<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $small_size = new Size();
        // $small_size->name =
        Size::create([
            'name' => 'Small'
        ]);

        Size::create([
            'name' => 'Medium'
        ]);

        Size::create([
            'name' => 'Large'
        ]);
    }
}
