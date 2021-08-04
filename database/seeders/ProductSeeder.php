<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'id'=>1,
                'slug' => 'b-cure-laser-pro',
                'name'=>'B-Cure Laser Pro',
                'thumbnail'=>'https://www.bcurelaser.co.uk/wp-content/uploads/2018/12/bcurepro_power.jpg',
                'images'=>'["https://www.bcurelaser.co.uk/wp-content/uploads/2018/12/bcurepro_power.jpg","https://www.bcurelaser.co.uk/wp-content/uploads/2018/12/B-Cure_laser_pro_Devicet_Right-1.jpg","https://www.bcurelaser.co.uk/wp-content/uploads/2018/12/B-Cure_Pro_device-1.jpg","https://www.bcurelaser.co.uk/wp-content/uploads/2018/12/image4.jpg"]',
                'description'=>'<p>B-Cure Laser Pro l&agrave; phi&ecirc;n bản mạnh hơn B-Cure Laser Classic.&nbsp;B-Cure Laser Pro ph&ugrave; hợp cho c&aacute;c ứng dụng tại ph&ograve;ng kh&aacute;m của c&aacute;c chuy&ecirc;n gia cũng như sử dụng tại nh&agrave; v&agrave; đặc biệt được chỉ định để điều trị vết thương v&agrave; vết lo&eacute;t.</p>

<p>B-Cure Laser Pro c&oacute; thể được sử dụng như một phương ph&aacute;p điều trị hỗ trợ cho c&aacute;c t&igrave;nh trạng như hội chứng ống cổ tay, đau cơ xơ h&oacute;a, đau đầu gối, đau cổ, đau lưng dưới v&agrave; tr&ecirc;n, vết thương, vết lo&eacute;t do t&igrave; đ&egrave;, lo&eacute;t do tiểu đường v&agrave; một số chấn thương thể thao.</p>

<p>B-Cure Laser Pro ph&ugrave; hợp để điều trị c&aacute;c vấn đề cấp t&iacute;nh v&agrave; m&atilde;n t&iacute;nh.</p>
',
                'sort_number'=>1,
                'is_featured' => true,
                'created_at'=>'2021-04-03'
            ],
            [
                'id'=>2,
                'slug' => 'b-cure-laser-classic',
                'name'=>'B-Cure Laser Classic',
                'thumbnail'=>'https://www.bcurelaser.co.uk/wp-content/uploads/2018/12/bcureclassic.jpg',
                'images'=>'["https://www.bcurelaser.co.uk/wp-content/uploads/2018/12/bcureclassic.jpg","https://www.bcurelaser.co.uk/wp-content/uploads/2018/12/classic2.jpg","https://www.bcurelaser.co.uk/wp-content/uploads/2018/12/B_cure_MG_2924.jpg","https://www.bcurelaser.co.uk/wp-content/uploads/2018/12/IMG_8392.jpg"]',
                'description'=>'<p>B-Cure Laser Classic được thiết kế để kiểm so&aacute;t c&aacute;c cơn đau bao gồm: Đau lưng m&atilde;n t&iacute;nh;&nbsp;Đau cổ m&atilde;n t&iacute;nh;&nbsp;Đau đầu gối;&nbsp;Hội chứng ống cổ tay (CTS);&nbsp;Đau cơ xơ h&oacute;a;&nbsp;Rối loạn khớp th&aacute;i dương h&agrave;m;&nbsp;C&oacute; thể gi&uacute;p điều trị bổ trợ cho c&aacute;c vết thương cấp t&iacute;nh v&agrave; m&atilde;n t&iacute;nh.</p>',
                'sort_number'=>3,
                'is_featured' => true,
                'created_at'=>'2021-04-02'
            ],
            [
                'id'=>3,
                'slug' => 'b-cure-laser-sport',
                'name'=>'B-Cure Laser Sport',
                'thumbnail'=>'https://bcurelaser.com/wp-content/uploads/2018/12/Big_sport.jpg',
                'images'=>'["https://bcurelaser.com/wp-content/uploads/2018/12/Big_sport.jpg","https://bcurelaser.com/wp-content/uploads/2018/12/MG_0773_sport_GE_logo.jpg","https://bcurelaser.com/wp-content/uploads/2018/12/Sport_Girl_Image_GE_logo.jpg","https://bcurelaser.com/wp-content/uploads/2018/12/Sport_Girl_Image_GE_logo.jpg"]',
                'description'=>'<p>B-Cure Laser Sport mạnh hơn B-Cure Laser Classic; n&oacute; đ&atilde; được thiết kế đặc biệt để cung cấp hiệu quả c&aacute;c giải ph&aacute;p giảm đau v&agrave; điều trị chấn thương cho những người thường xuy&ecirc;n tập luyện thể thao. B-Cure Laser Sport đ&atilde; được thiết kế đặc biệt để chống lại cơn đau li&ecirc;n quan đến c&aacute;c t&igrave;nh trạng tổn thươg cấp t&iacute;nh v&agrave; mạn t&iacute;nh v&agrave; chấn thương thể thao.</p>

<p>C&aacute;c điều kiện đ&aacute;p ứng tốt với liệu ph&aacute;p laser (LLLT) bao gồm c&aacute;c t&igrave;nh trạng chấn thương , đau cấp t&iacute;nh v&agrave; mạn t&iacute;nh (đau khớp, đau cơ, vết thương hở, vết thương sau phẫu thuật, v.v.). LLLT</p>

<p>B-Cure Laser Sport được thiết kế đặc biệt như một giải ph&aacute;p giảm đau hiệu quả cho c&aacute;c vận động vi&ecirc;n nghiệp dư v&agrave; chuy&ecirc;n nghiệp. B-Cure Laser Sport l&yacute; tưởng trong việc điều trị c&aacute;c cơ bị tổn thương, v&agrave; cũng được chỉ định trong việc giảm chấn thương li&ecirc;n quan đến hoạt động, chẳng hạn như vết bầm t&iacute;m, bong g&acirc;n, đau sau chấn thương v&agrave; kh&oacute; chịu do tập luyện qu&aacute; mức hoặc tập thể dục.</p>
',
                'sort_number'=>2,
                'is_featured' => true,
                'created_at'=>'2021-04-05'
            ],
            [
                'id'=>4,
                'slug' => 'b-cure-laser-stand',
                'name'=>'B-Cure Laser Stand',
                'thumbnail'=>'https://bcurelaser.com/wp-content/uploads/2018/12/bcure-stand.jpg',
                'images'=>'["https://bcurelaser.com/wp-content/uploads/2018/12/bcure-stand.jpg","https://bcurelaser.com/wp-content/uploads/2019/08/lower-back-4.jpg","https://bcurelaser.com/wp-content/uploads/2018/12/what-does-patients-say_1.jpg","https://bcurelaser.com/wp-content/uploads/2019/08/testimonials_4.jpg"]',
                'description'=>'<p>Một gi&aacute; đỡ linh hoạt, c&oacute; thể điều chỉnh được gi&uacute;p điều trị thuận tiện v&agrave; hiệu quả m&agrave; kh&ocirc;ng cần phải thực sự cầm B-Cure Laser bằng tay.</p>',
                'sort_number'=>4,
                'is_featured' => false,
                'created_at'=>'2021-04-01'
            ],
        ]);
    }
}
