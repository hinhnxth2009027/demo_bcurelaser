<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            [
                'id'=>1,
                'thumbnail'=>'https://www.bcurelaser.co.uk/wp-content/uploads/2021/02/MATT_SLIDE_IMG_optimized_DESKTOP_WEBSITE_SLIDER_DAILYMAIL.jpg',
                'video'=>'',
                'sort_number'=>1,
                'order_target_url'=>'#',
                'created_at'=>'2021-01-01'
            ],
            [
                'id'=>2,
                'thumbnail'=>'https://www.bcurelaser.co.uk/wp-content/uploads/2021/02/ELLEN_SLIDE_IMG_optimized_DESKTOP_WEBSITE_SLIDER.jpg',
                'video'=>'https://youtu.be/Bqf9c_hbpp4',
                'sort_number'=>5,
                'order_target_url'=>'#',
                'created_at'=>'2021-02-01'
            ],
            [
                'id'=>3,
                'thumbnail'=>'https://www.bcurelaser.co.uk/wp-content/uploads/2021/04/ECOM_SLIDER_JOHN_BARNES_02d.jpg',
                'video'=>'https://youtu.be/qJ4zUlBnaA0',
                'sort_number'=>3,
                'order_target_url'=>'#',
                'created_at'=>'2021-03-01'
            ],
        ]);
    }
}
