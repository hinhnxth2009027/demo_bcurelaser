<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call([
            UserSeeder::class,
            TreatmentSeeder::class,
            ProductSeeder::class,
            FaqSeeder::class,
            Technical_specificationsSeeder::class,
            ContactSeeder::class,
            BannerSeeder::class,
            TrialSeeder::class,
            FaceBookReviewSeeder::class,
            TestimonialSeeder::class
        ]);
    }
}
