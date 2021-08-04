<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaceBookReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facebook_reviews')->truncate();
        DB::table('facebook_reviews')->insert([
            [
                'id' => 1,
                'name' => 'Nekoda Davis',
                'title' => 'Huy chương kép thế giới (2017,2018)',
                'content' => 'Thiết bị này thật tuyệt vời, nó giúp tôi giảm đau tức thì. Nó rất nhanh chóng và dễ sử dụng. Nó đã được bác sĩ phẫu thuật của tôi chấp thuận, vì vậy tôi không phải lo lắng và tôi hy vọng sẽ phục hồi nhanh hơn nhờ thiết bị này. Tôi phải nói lời cảm ơn to lớn tới B-Cure Laser vì đã tin tưởng giao cho tôi dùng thử thiết bị của bạn và gửi lời cảm ơn sâu sắc đến Yarden Gerbi, người đã giới thiệu cho tôi những điều kỳ diệu của thiết bị này và những người đáng mến từ công ty. ” Joseph John Takacs - “Tôi phải thừa nhận rằng tôi đã rất nghi ngờ về tia laser vì tôi đã bị đau lưng mãn tính trong nhiều năm… Tôi đã sử dụng tia laser được khoảng. 6 tuần và thấy có tác dụng, mức độ đau đã giảm từ 10 xuống còn khoảng 6/10 và tôi rất hiếm khi phải uống thuốc giảm đau. Tôi biết nếu tôi tiếp tục sử dụng sản phẩm này thì cuối cùng tôi sẽ không dùng những loại thuốc giảm đau mạnh nữa. Tôi muốn giới thiệu bất cứ ai không chắc chắn nên thử sản phẩm này. Nó thật sự có hiệu quả.',
                'date' => '2020/06/04',
                'thumbnail' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/08/testimonials_3.jpg',
                'sort_number' => 10,
                'created_at' => Carbon::now()

            ],
            [
                'id' => 2,
                'name' => 'Clarisse Agbegnenou',
                'title' => 'Vô địch thế giới Judo nữ (2014,2017,2018,2019)',
                'content' => 'Tôi chắc chắn có thể nói rằng đó là một trong những quyết định tốt nhất mà tôi đã thực hiện trong cuộc đời mình. Tôi đã sử dụng thiết bị này 2-3 lần một ngày và trong vòng vài ngày, cơn đau đã giảm đáng kể. Từ chỗ không thể cử động cánh tay, tôi đã nhanh chóng thực hiện các động tác và quay trở lại tập luyện. B-Cure Laser đã giúp tôi trở lại thói quen nhanh hơn so với "phục hồi thông thường" áp dụng các phương pháp điều trị chăm sóc tiêu chuẩn của tôi. làm ngạc nhiên ngay cả các bác sĩ của tôi. Tôi bắt đầu tập luyện trở lại rất nhanh chóng.',
                'date' => '2020/06/04',
                'thumbnail' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/08/testimonials_2.jpg',
                'sort_number' => 8,
                'created_at' => Carbon::now()

            ],
            [
                'id' => 3,
                'name' => 'Stefano Tacconi',
                'title' => 'Cầu thủ bóng đá , Cựu thủ môn Juventus (1983-1992)',
                'content' => 'Cách đây vài tháng, tôi nghe nói về một thiết bị có tên B-Cure Laser Sport ... Điều khiến tôi thuyết phục nhất là thiết bị này đã được thử nghiệm tại Ý và được chứng minh là có hiệu quả trong một cuộc thử nghiệm lâm sàng. Không có tác dụng phụ, thời gian điều trị ngắn và tôi có thể tự điều trị ở bất cứ đâu, bất cứ lúc nào, tại nhà và ngay cả khi đang đi du lịch.
                Tôi bắt đầu tự điều trị bằng B-Cure Laser Sport và sử dụng nó cho những cơn đau mà tôi gặp phải ở cả chân và lưng. Sau vài ngày điều trị tại nhà, tôi bắt đầu cảm thấy tốt hơn - cơn đau giảm đáng kể và khả năng vận động của tôi được cải thiện rõ rệt. Tôi rất vui được giới thiệu nó cho mọi người ...',
                'date' => '2020/06/04',
                'thumbnail' => 'https://www.bcurelaser.co.uk/wp-content/uploads/2019/08/testimonials_1.jpg',
                'sort_number' => 9,
                'created_at' => Carbon::now()

            ]
        ]);
    }
}
