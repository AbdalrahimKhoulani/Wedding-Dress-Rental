<?php

namespace Database\Seeders;

use App\Models\Dress;
use App\Models\DressImage;
use App\Models\DressSize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dresses = Dress::factory(20)->create();
        foreach ($dresses as $dress) {
            // $dress->price = floor($dress->price / 10000) * 10000;
            // $dress->save();

            DressImage::create([
                'dress_id' => $dress->id,
                'cover' => 1
            ]);

            $random = random_int(1, 3);
            for ($i = 1; $i <= $random; $i++) {
                DressSize::create([
                    'dress_id' => $dress->id,
                    'size_id' => $i,
                    'active' => 1
                ]);
            }
        }
    }
}
