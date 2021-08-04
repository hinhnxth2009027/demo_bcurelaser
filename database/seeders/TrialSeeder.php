<?php

namespace Database\Seeders;

use App\Enums\TrialType;
use App\Models\Trial;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trials')->truncate();
        DB::table('trials')->insert([
            [
                'id' => 1,
                'title' => 'B-Cure Laser- Liệu pháp mới tại nhà cho bệnh nhân bị đau do loạn năng khớp thái dương hàm
 Đại học Sapienza tại Rome, Ý',
                'logo' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/clinical_trial_icon_1.png',
                'thumbnail' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/clinical_trial_img_1.jpg',
                'content' => 'Thử nghiệm lâm sàng của 90 bệnh nhân chia làm 3 nhóm (nhóm B-Cure Laser, nhóm giả dược, nhóm dùng thuốc giảm đau) gặp vấn đề đau liên quan đến khớp (TMJ).
                Kết quả:
Thử nghiệm lâm sàng mù đôi liên quan đến 90 bệnh nhân đã cho thấy giảm đau đáng kể trong nhóm điều trị với B-Cure Laser so với giả dược. Kiểm định với p-value <0.01
Mức độ giảm đau của nhóm B-Cure Laser không khác gì nhóm sử dụng thuốc.
Xuất bản trong: Cranio, tháng 4 năm 2019
https://www.ncbi.nlm.nih.gov/pubmed/30999823',
                'file' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/del_vecchio_2019.pdf',
                'type' => TrialType::CLINICAL_TRIAL,
                'sort_number' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'title' => 'B-Cure Laser - Liệu pháp điều trị phòng ngừa biến chứng sau phẫu thuật mở ống sống
 Sao Paulo, Brazil',
                'logo' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/clinical_trial_icon_2.png',
                'thumbnail' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/clinical_trial_img_2.jpg',
                'content' => 'Kết quả cho thấy nhiệt độ giảm, đầu ra thoát nước, giảm đau và tăng tốc chữa lành trong nhóm laser. Mức ý nghĩa p<0.001 (đau). Xuất bản trong: Hiệp hội Y học và Phẫu thuật Laser Hoa Kỳ 2014.',
                'file' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/laminectomy_brazil_clinical.pdf',
                'type' => TrialType::CLINICAL_TRIAL,
                'sort_number' => 2,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'title' => 'B-Cure Laser trong thực hành implant nha khoa
Bộ Y tế Liên Bang Nga',
                'logo' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/clinical_trial_icon_3.png',
                'thumbnail' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/clinical_trial_img_3.jpg',
                'content' => 'Việc sử dụng các kỹ thuật LLLT ban đầu trong chế độ phòng ngừa và điều trị trước và sau khi cấy ghép nha khoa làm giảm đáng kể tần suất và cường độ của triệu chứng đau. Mức ý nghĩa p<0.01.
Xuất bản trong: Vật lý ung thư: Các vấn đề liên ngành và ứng dụng lâm sàng, tháng 9 năm 2017',
                'file' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/b-cure_laser_dental.pdf',
                'type' => TrialType::CLINICAL_TRIAL,
                'sort_number' => 3,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'title' => 'B-Cure Laser - Liệu pháp điều trị tại nhà trong việc giảm đau do loạn năng khớp thái dương hàm
Đại học Parma, Ý',
                'logo' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/clinical_trial_icon_4.png',
                'thumbnail' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/clinical_trial_img_4.jpg',
                'content' => 'Giảm 50% mức độ đau trong vòng hai tuần, so với 8% trong nhóm ước lượng.
                Được xuất bản trong: "Liệu pháp laser", tháng 3 năm 2015.
                https://www.ncbi.nlm.nih.gov/pubmed/25941426',
                'file' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/fornaini_tmj.pdf',
                'type' => TrialType::CLINICAL_TRIAL,
                'sort_number' => 4,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 5,
                'title' => 'Ấn phẩm đánh giá có hệ thống',
                'logo' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/clinical_trial_icon_7.jpg',
                'thumbnail' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/clinical_trial_img_7.jpg',
                'content' => 'Một ấn phẩm đánh giá có hệ thống được công bố trong "Tạp chí Giải phẫu Quang  học và Laser", tháng 11 năm 2018, minh chứng hiệu quả vượt trội của B-Cure Laser so với tất cả các thiết bị y tế để sử dụng tại nhà trên toàn thế giới, để điều trị giảm đau và lành thương.
                B-Cure Laser đã được trích dẫn trong 4 nghiên cứu trong số 14 nghiên cứu! 29% bệnh nhân trong toàn bộ nghiên cứu đánh giá đã được điều trị bằng B-Cure Laser.
',
                'file' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/therapeutic_efficacy_of_home_use.pdf',
                'type' => TrialType::PROFESSIONAL_RECOMMENDATIONS,
                'sort_number' => 5,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 6,
                'title' => 'Đau lưng dưới - Hướng dẫn của Đại học Y Hoa Kỳ',
                'logo' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/clinical_trial_icon_8.png',
                'thumbnail' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/clinical_trial_img_8.jpg',
                'content' => 'Hướng dẫn của Đại học Y Hoa Kỳ bao gồm một "khuyến nghị" cho Liệu pháp Laser cường độ thấp như một phương pháp điều trị không xâm lấn cho đau lưng cấp tính và mạn tính.
(tháng 4 năm 2017).',
                'file' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/acp_summary_new_guidelines.pdf',
                'type' => TrialType::PROFESSIONAL_RECOMMENDATIONS,
                'sort_number' => 6,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 7,
                'title' => 'Đau cổ - Lancet',
                'logo' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/clinical_trial_icon_9.png',
                'thumbnail' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/clinical_trial_img_9.jpg',
                'content' => 'Chúng tôi cho thấy LLLT giảm đau ngay sau khi điều trị đau cổ cấp tính và tối đa 22 tuần sau khi hoàn thành điều trị ở bệnh nhân đau cổ mạn tính".(tháng 12 năm 2009)',
                'file' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/lancet_2009_full_article.pdf',
                'type' => TrialType::PROFESSIONAL_RECOMMENDATIONS,
                'sort_number' => 7,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 8,
                'title' => 'Viêm niêm mạc miệng - Hướng dẫn MASCC',
                'logo' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/clinical_trial_icon_10.png',
                'thumbnail' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/clinical_trial_img_10.jpg',
                'content' => 'Hướng dẫn quốc tế đã khuyến nghị "sử dụng liệu pháp laser cường độ thấp để điều trị viêm niêm mạc miệng vô cùng an toàn và hiệu quả".
(tháng 11 năm 2018).',
                'file' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/systematic_review_of_photobiomodulation.pdf',
                'type' => TrialType::PROFESSIONAL_RECOMMENDATIONS,
                'sort_number' => 8,
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
