<?php

namespace Database\Seeders;

use App\Enums\Subject;
use App\Models\Contact;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Factory::create();
        DB::table('contacts')->truncate();
        for ($i = 0; $i < 20; $i++){
            if ($i %2 == 0){
                Contact::create([
                    'name'=>$fake->name,
                    'phone'=>$fake->phoneNumber,
                    'email'=>$fake->email,
                    'message'=>$fake->text(200),
                    'subject'=>Subject::SALES,
                    'created_at'=>'2021-01-02'
                ]);
            }else if ($i %3 == 0){
                Contact::create([
                    'name'=>$fake->name,
                    'phone'=>$fake->phoneNumber,
                    'email'=>$fake->email,
                    'message'=>$fake->text(200),
                    'subject'=>Subject::CUSTOMER_SUPPORT
                ]);
            }else{
                Contact::create([
                    'name'=>$fake->name,
                    'phone'=>$fake->phoneNumber,
                    'email'=>$fake->email,
                    'message'=>$fake->text(200),
                    'subject'=>Subject::PARTNER_SHIP
                ]);
            }
        }
    }
}
