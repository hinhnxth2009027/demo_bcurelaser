<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->truncate();
        DB::table('testimonials')->insert([
            [
                'id'=>1,
                'name' =>'Jenine Saunders',
                'title' => 'Nhà trị liệu vật lý trị liệu Somatic, Cử nhân (Hons.)',
                'content' => '"Hơn 80% bệnh nhân giảm đau"',
                'date' => '2019/11/21',
                'video'=>'https://youtu.be/vjgTf7AT3DI',
                'sort_number' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id'=>2,
                'name' =>'Michael Dagostino',
                'title' => 'Nhà thầu, Cựu cầu thủ bóng đá chuyên nghiệp',
                'content' => '"nó đã mang lại cho tôi sự thoải mái mà những người khác không thể"',
                'date' => '2019/11/17',
                'video'=>'https://youtu.be/287sQBSAQWk',
                'sort_number' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id'=>3,
                'name' =>'Mabel Moskal',
                'title' => 'Sadbury, Canada',
                'content' => '"Giảm nhẹ nhanh chóng và lâu dài"',
                'date' => '2019/11/14',
                'video'=>'https://youtu.be/28ZPDA9Jckk',
                'sort_number' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id'=>4,
                'name' =>'Jayne Moskal',
                'title' => 'Sadbury, Canada',
                'content' => '"B-Cure Laser đã tạo ra ánh sáng trong cuộc đời tôi"',
                'date' => '2020/01/01',
                'video'=>'https://youtu.be/Pa9Z8ECcQnw',
                'sort_number' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'id'=>5,
                'name' =>'Tiến sĩ David Ben-Kiki',
                'title' => '',
                'content' => '"Nó đạt đến khu vực trong cơ thể bạn mà điều trị thông thường sẽ không đạt được"',
                'date' => '2019/08/28',
                'video'=>'https://youtu.be/khbhFk-vQio',
                'sort_number' => 5,
                'created_at' => Carbon::now()
            ],
            [
                'id'=>6,
                'name' =>'Tiến sĩ Ed Shane',
                'title' => '',
                'content' => '"Tôi thực sự khuyên bạn nên sử dụng B-Cure Laser"',
                'date' => '2019/08/26',
                'video'=>'https://youtu.be/27WZiu85f6g',
                'sort_number' => 6,
                'created_at' => Carbon::now()
            ],
            [
                'id'=>7,
                'name' =>'Giáo sư Daniel Reis',
                'title' => '',
                'content' => '"Tôi nghĩ rằng bạn sẽ tìm thấy rất nhiều sự hài lòng của bệnh nhân"',
                'date' => '2019/08/26',
                'video'=>'https://youtu.be/at4MRUUIJuE',
                'sort_number' => 7,
                'created_at' => Carbon::now()
            ],
            [
                'id'=>8,
                'name' =>'Giáo sư Jean Jacque Vatin',
                'title' => 'Thiết bị y tế chăm sóc tại nhà B-Cure Laser',
                'content' => '"Tôi khuyên bạn nên sử dụng thiết bị này vì nó có thể là một phần quan trọng của quá trình chữa bệnh"',
                'date' => '2019/08/26',
                'video'=>'https://youtu.be/PkDDVKpW_88',
                'sort_number' => 8,
                'created_at' => Carbon::now()
            ],
            [
                'id'=>9,
                'name' =>'Stefano Tacconi',
                'title' => 'Cựu thủ môn Juventus',
                'content' => '"Tôi có thể điều trị mọi lúc, mọi nơi"',
                'date' => '2019/08/26',
                'video'=>'https://youtu.be/HvyYnPbK7Z8',
                'sort_number' => 9,
                'created_at' => Carbon::now()
            ],
            [
                'id'=>10,
                'name' =>'Clarisse Agbgnenou',
                'title' => 'Nhà vô địch Judo nữ thế giới liên tiếp 3 lần',
                'content' => '"B-Cure Laser đã giúp tôi trở lại thói quen nhanh hơn, và khiến ngay cả các bác sĩ của tôi cũng phải ngạc nhiên"',
                'date' => '2019/08/26',
                'video'=>'https://youtu.be/egGGafqaRJs',
                'sort_number' => 9,
                'created_at' => Carbon::now()
            ],
            [
                'id'=>11,
                'name' =>'Yarden Jerbi',
                'title' => 'Cựu vô địch thế giới Judo nữ',
                'content' => '"một thiết bị nhỏ nhưng là một phần quan trọng trong chức vô địch thế giới của tôi"',
                'date' => '2019/08/26',
                'video'=>'https://youtu.be/jVxAlP3gHvs',
                'sort_number' => 11,
                'created_at' => Carbon::now()
            ],
            [
                'id'=>12,
                'name' =>'Philip Landa',
                'title' => '',
                'content' => '"Một công cụ để giảm đau"',
                'date' => '2019/08/26',
                'video'=>'https://youtu.be/v6AIw9QISFs',
                'sort_number' => 12,
                'created_at' => Carbon::now()
            ],
            [
                'id'=>13,
                'name' =>'Malene Niks',
                'title' => '',
                'content' => '"Tôi phải thừa nhận rằng tôi đã hoài nghi, và tôi đã nói những gì tôi được để mất?"',
                'date' => '2019/08/26',
                'video'=>'https://youtu.be/mUs4RVoO3oA',
                'sort_number' => 13,
                'created_at' => Carbon::now()
            ],

        ]);
    }
}
