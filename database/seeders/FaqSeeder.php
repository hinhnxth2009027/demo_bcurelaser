<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->truncate();
        DB::table('faqs')->insert([
            [
                'id' => 1,
                'question' => 'B-Cure Laser điều trị những gì?',
                'reply_content' => '<p>Điều quan trọng l&agrave; B-Cure Laser kh&ocirc;ng chỉ l&agrave;m giảm đau m&agrave; c&ograve;n c&oacute; thể điều trị nguồn gốc của cơn đau trong nhiều trường hợp.</p>

<p>B-Cure Laser điều trị đau cấp t&iacute;nh v&agrave; mạn t&iacute;nh: thấp khớp ở khuỷu tay, cổ, lưng dưới, lưng tr&ecirc;n, mắt c&aacute; ch&acirc;n v&agrave; ng&oacute;n tay, c&aacute;c vấn đề phục hồi như vi&ecirc;m xương khớp, vi&ecirc;m khuỷu tay do chơi tennis, đau cơ v&agrave; bong g&acirc;n.</p>

<p>Trong lĩnh vực da liễu &ndash; c&aacute;c tổn thương kh&oacute; chữa, bao gồm:<br />
vết lo&eacute;t do biến chứng đ&aacute;i th&aacute;o đường, vết bỏng, mụn trứng c&aacute; v&agrave; mụn rộp.</p>
',
                'sort_number' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'question' => 'Mất bao lâu trước khi tôi cảm thấy hiệu quả, và liều lượng điều trị  B-Cure Laser là gì?',
                'reply_content' => '<p>C&oacute; thể mất từ ba ng&agrave;y đến ba tuần để cảm thấy một sự thay đổi tốt hơn. N&oacute; thay đổi phụ thuộc v&agrave;o mức độ nghi&ecirc;m trọng của vấn đề! Phần lớn đều đ&aacute;p ứng với điều trị t&iacute;ch cực trong v&agrave;i ng&agrave;y đầu ti&ecirc;n, nhưng trong một số trường hợp, cần c&oacute; thời gian d&agrave;i hơn v&agrave; ki&ecirc;n nhẫn hơn. Hầu hết mọi người bắt đầu cảm thấy tốt hơn sau lần điều trị đầu ti&ecirc;n hoặc thứ hai.</p>

<p>Về liều lượng: 6&ndash;8 ph&uacute;t tr&ecirc;n mỗi điểm điều trị, hai lần một ng&agrave;y l&agrave; đủ để đem lại hiệu quả mong muốn. C&oacute; thể sử dụng 2-4 lần/ ng&agrave;y. Trong tập s&aacute;ch hướng dẫn sử dụng m&agrave; bạn sẽ nhận được với thiết bị B-Cure Laser, c&oacute; những hướng dẫn cụ thể cho từng trường hợp.</p>',
                'sort_number' => 2,
                'created_at' => Carbon::now()
            ], [
                'id' => 3,
                'question' => 'Điều gì xảy ra sau khi cơn đau giảm dần? Tôi có nên tiếp tục sử dụng thiết bị  B-Cure Laser hoặc ngừng điều trị không?',
                'reply_content' => '<p>Với cơn đau cấp t&iacute;nh, bạn c&oacute; thể ngừng điều trị v&agrave; với cơn đau mạn t&iacute;nh, ch&uacute;ng t&ocirc;i khuy&ecirc;n bạn n&ecirc;n giảm dần việc điều trị đến một lần một ng&agrave;y v&agrave; ho&agrave;n th&agrave;nh 30 ng&agrave;y, để duy tr&igrave; kết quả v&agrave; ngăn ngừa t&igrave;nh trạng t&aacute;i ph&aacute;t.</p>',
                'sort_number' => 3,
                'created_at' => Carbon::now()
            ], [
                'id' => 4,
                'question' => 'B-Cure Laser có chữa khỏi bệnh không?',
                'reply_content' => '<p>B-Cure Laser l&agrave;m giảm cơn đau v&agrave; c&oacute; thể gi&uacute;p điều trị tận gốc của vấn đề.</p>',
                'sort_number' => 4,
                'created_at' => Carbon::now()
            ], [
                'id' => 5,
                'question' => 'Hiệu quả của B-Cure Laser đã được chứng minh lâm sàng?',
                'reply_content' => '<p>C&aacute;c nghi&ecirc;n cứu l&acirc;m s&agrave;ng chứng minh t&aacute;c động t&iacute;ch cực của c&ocirc;ng nghệ laser cường độ thấp trong điều trị giảm đau, giảm sưng vi&ecirc;m, phục hồi chấn thương thể thao v&agrave; l&agrave;nh thương.</p>

<p>Hơn 2.000 ấn phẩm - bao gồm hơn 100 nghi&ecirc;n cứu m&ugrave; đ&ocirc;i - đ&atilde; chứng minh hiệu quả của liệu ph&aacute;p laser cường độ thấp.</p>

<p>Hiệu quả của B-Cure Laser để điều trị đau v&agrave; l&agrave;nh thương đ&atilde; được chứng minh trong 5 thử nghiệm l&acirc;m s&agrave;ng m&ugrave; đ&ocirc;i.</p>

<p>5 thử nghiệm l&acirc;m s&agrave;ng kh&aacute;c đang được thực hiện.</p>

<p>Một thử nghiệm l&acirc;m s&agrave;ng th&agrave;nh c&ocirc;ng * li&ecirc;n quan đến 90 bệnh nh&acirc;n, đ&atilde; chỉ ra rằng hiệu quả của B-Cure Laser tương tự như thuốc giảm đau.<br />
*Del Vecchio et al., Joint-Related Pain (TMJ), Sapinza University, Rome, Italy.</p>
',
                'sort_number' => 5,
                'created_at' => Carbon::now()
            ], [
                'id' => 6,
                'question' => 'Điều trị bằng B-Cure Laser có an toàn không?',
                'reply_content' => '<p>Điều trị bằng B-Cure Laser an to&agrave;n để sử dụng h&agrave;ng ng&agrave;y, kh&ocirc;ng c&oacute; t&aacute;c dụng phụ. N&oacute; ph&ugrave; hợp cho mọi lứa tuổi, từ trẻ em đến người gi&agrave;, tr&ecirc;n thực tế, cho cả gia đ&igrave;nh. Việc điều trị kh&ocirc;ng x&acirc;m lấn, v&agrave; kh&ocirc;ng g&acirc;y đau đơn<br />
Kh&ocirc;ng c&oacute; phản ứng bất lợi như sử dụng thuốc, hoặc c&aacute;c t&igrave;nh huống như huyết &aacute;p cao, c&aacute;c vấn đề về tim, m&aacute;y trợ tim, đặt lại đốt sống hoặc cấy gh&eacute;p khớp (thay khớp gối). Trong trường hợp vi&ecirc;m nặng, c&oacute; thể c&oacute; cảm gi&aacute;c nặng hơn. Điều n&agrave;y sẽ giảm dần trong v&ograve;ng v&agrave;i ng&agrave;y sau khi điều trị. Trong trường hợp vi&ecirc;m, ch&uacute;ng t&ocirc;i khuy&ecirc;n bạn n&ecirc;n điều trị bắt đầu dần dần (Xem Hướng dẫn sử dụng hoặc chi tiết cụ thể).<br />
V&agrave;o ng&agrave;y đầu ti&ecirc;n, một ph&uacute;t rưỡi tr&ecirc;n mỗi vị tr&iacute;, v&agrave; sau đ&oacute; th&ecirc;m một ph&uacute;t mỗi ng&agrave;y, cho đến khi bạn đạt được quy tr&igrave;nh mong muốn l&agrave; 6-8 ph&uacute;t, hai lần mỗi ng&agrave;y.</p>

<p>C&aacute;c biện ph&aacute;p ph&ograve;ng ngừa an to&agrave;n:<br />
&bull; Kh&ocirc;ng bao giờ chiếu ch&ugrave;m tia laser v&agrave;o mắt.<br />
&bull; Lu&ocirc;n lu&ocirc;n n&ecirc;n tham khảo &yacute; kiến b&aacute;c sĩ của bạn.<br />
&bull; Nếu bạn đang mang thai kh&ocirc;ng sử dụng thiết bị để điều trị dạ d&agrave;y.<br />
&bull; Kh&ocirc;ng điều trị khu vực c&oacute; khối u &aacute;c t&iacute;nh.</p>
',
                'sort_number' => 6,
                'created_at' => Carbon::now()
            ], [
                'id' => 7,
                'question' => 'Làm thế nào tôi có thể nói rằng B-Cure Laser thực sự giúp ích?',
                'reply_content' => '<p>B-Cure Laser hoạt động với c&ocirc;ng nghệ, được chứng minh trong y học. B-Cure Laser l&agrave; một thiết bị y tế Loại 2a được đ&aacute;nh dấu CE 0197, được bộ Y tế Canada v&agrave; ANVISA chấp thuận, v&agrave; bản th&acirc;n c&ocirc;ng nghệ LLLT đ&atilde; được FDA chọn lọc (Cục Quản l&yacute; Thực phẩm v&agrave; Dược phẩm Hoa Kỳ).</p>

<p>T&iacute;nh đến ng&agrave;y nay, B-Cure Laser đang được b&aacute;n ở hơn hai mươi quốc gia.</p>

<p>B-Cure Laser được sử dụng bởi c&aacute;c ph&ograve;ng kh&aacute;m, b&aacute;c sĩ cao cấp tại c&aacute;c bệnh viện lớn v&agrave; c&aacute;c nh&agrave; vật l&yacute; trị liệu h&agrave;ng đầu trong lĩnh vực n&agrave;y.</p>
',
                'sort_number' => 7,
                'created_at' => Carbon::now()
            ], [
                'id' => 8,
                'question' => 'Làm thế nào để so sánh B-Cure Laser với các thiết bị khác trên thị trường và có bất kỳ thiết bị nào khác hoạt động theo cùng một cách đó không?',
                'reply_content' => '<p>C&oacute; nhiều thiết bị kh&aacute;c nhau tr&ecirc;n thị trường, chẳng hạn như: si&ecirc;u &acirc;m, nam ch&acirc;m, điện xung, hồng ngoại, v.v., chủ yếu được thiết kế để giảm đau. Tuy nhi&ecirc;n, B-Cure Laser c&ograve;n c&oacute; thể điều trị tận gốc của vấn đề.<br />
Cho đến ng&agrave;y nay, kh&ocirc;ng c&oacute; thiết bị LLLT n&agrave;o kh&aacute;c tr&ecirc;n thị trường d&agrave;nh cho bệnh nh&acirc;n sử dụng tại nh&agrave; chuy&ecirc;n nghiệp, với rất nhiều nghi&ecirc;n cứu điển h&igrave;nh chứng minh hiệu quả cao của n&oacute;.<br />
Tầm quan trọng của sự kh&aacute;c biệt n&agrave;y, l&agrave; ảnh hưởng trực tiếp mức độ x&acirc;m nhập của ch&ugrave;m tia laser v&agrave; hiệu quả m&agrave; B-Cure Laser tạo ra.</p>
',
                'sort_number' =>8,
                'created_at' => Carbon::now()
            ], [
                'id' => 9,
                'question' => 'Thiết bị hao mòn như thế nào và lầm sao để nó có thể được sửa chữa nếu nó bị hư hỏng?',
                'reply_content' => '<p>B-Cure Laser được thiết kế để hoạt động trong nhiều năm. Thay thế ba pin sạc (AAA) sau khoảng mười t&aacute;m th&aacute;ng. Điốt (th&agrave;nh phần cung cấp ch&ugrave;m tia laser), sẽ hoạt động trong tối đa 1000 giờ li&ecirc;n tiếp. Trong trường hợp c&oacute; sự cố, vui l&ograve;ng li&ecirc;n hệ với bộ phận dịch vụ kh&aacute;ch h&agrave;ng.</p>
',
                'sort_number' => 9,
                'created_at' => Carbon::now()
            ], [
                'id' => 10,
                'question' => 'Tôi bị đau ở một số điểm ở lưng và chân tay. Tôi có thể điều trị đồng thời một số điểm trên cơ thể không?',
                'reply_content' => '<p>Chắc chắn rồi. Bạn c&oacute; thể điều trị xong đầu gối, v&agrave; di chuyển đến cổ, v&agrave; sau đ&oacute; nếu cần, điều trị tr&ecirc;n tay. Kh&ocirc;ng c&oacute; giới hạn về số lượng phương ph&aacute;p điều trị, v&agrave; việc điều trị c&oacute; thể được k&eacute;o d&agrave;i đến một phần tư giờ tại một điểm cụ thể. Ch&uacute;ng t&ocirc;i khuy&ecirc;n bạn n&ecirc;n xử l&yacute; triệt để một vị tr&iacute;, v&agrave; sau đ&oacute; chuyển sang vị tr&iacute; tiếp theo, nhưng bạn chắc chắn c&oacute; thể xử l&yacute; một số địa điểm c&ugrave;ng một l&uacute;c.</p>
',
                'sort_number' => 10,
                'created_at' => Carbon::now()
            ], [
                'id' => 11,
                'question' => 'B-Cure Laser có nguy hiểm khi sử dụng không?',
                'reply_content' => '<p>B-Cure Laser dựa tr&ecirc;n c&ocirc;ng nghệ laser mềm, đ&oacute; l&agrave; laser c&ocirc;ng suất thấp. N&oacute; kh&ocirc;ng n&oacute;ng hoặc m&aacute;t, kh&ocirc;ng x&acirc;m lấn, an to&agrave;n cho mọi lứa tuổi v&agrave; cho tất cả c&aacute;c th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh. Kh&ocirc;ng cần đeo k&iacute;nh bảo hộ.</p>
',
                'sort_number' => 11,
                'created_at' => Carbon::now()
            ],[
                'id' => 12,
                'question' => 'Thiết bị nên được sạc trong bao lâu?',
                'reply_content' => '<p>Thiết bị thường n&ecirc;n được sạc v&agrave;i ng&agrave;y một lần, trong khoảng bảy giờ hoặc qua đ&ecirc;m, t&ugrave;y thuộc v&agrave;o phạm vi sử dụng.</p>
',
                'sort_number' => 12,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 13,
                'question' => 'Làm thế nào để tôi biết rằng pin được sạc đầy?',
                'reply_content' => '<p>Khi Laser B-Cure được sạc ho&agrave;n to&agrave;n, chữ &quot;FULL&quot; xuất hiện tr&ecirc;n m&agrave;n h&igrave;nh. Ngo&agrave;i ra, ph&iacute;a tr&ecirc;n hai chữ số b&ecirc;n phải tr&ecirc;n m&agrave;n h&igrave;nh, một đường k&eacute;o d&agrave;i m&agrave;u đen sẽ xuất hiện.</p>
',
                'sort_number' => 13,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 14,
                'question' => 'Làm thế nào để tôi biết khi nào pin trống?',
                'reply_content' => '<p>Khi pin yếu, đường m&agrave;u đen ph&iacute;a tr&ecirc;n hai chữ số b&ecirc;n phải tr&ecirc;n m&agrave;n h&igrave;nh sẽ r&uacute;t ngắn. Hơn nữa, pin n&ecirc;n được thay thế cứ sau mười hai đến mười t&aacute;m th&aacute;ng. Điều quan trọng l&agrave; phải đảm bảo rằng ch&uacute;ng l&agrave; pin sạc AAA!<br />
&nbsp;</p>
',
                'sort_number' => 14,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 15,
                'question' => 'Tôi có nên di chuyển thiết bị trong quá trình điều trị không?',
                'reply_content' => '<p>Sau khi x&aacute;c định vị tr&iacute; mong muốn để điều trị, Kh&ocirc;ng n&ecirc;n di chuyển B-Cure Laser trong qu&aacute; tr&igrave;nh điều trị, cho đến khi bạn muốn điều trị điểm tiếp theo</p>
',
                'sort_number' => 15,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 16,
                'question' => 'B-Cure Laser có phải được đặt sát lên cơ thể không?',
                'reply_content' => '<p>Kh&ocirc;ng đặt thiết bị b&ecirc;n ngo&agrave;i quần &aacute;o, băng gạc, v.v., ngoại trừ tr&ecirc;n vết thương hở cần được điều trị từ khoảng c&aacute;ch khoảng 1cm từ khu vực cần điều trị, để đảm bảo vệ sinh.<br />
Điều quan trọng l&agrave; kh&ocirc;ng ấn thiết bị qu&aacute; mạnh v&agrave;o da, v&igrave; n&oacute; sẽ ngừng hoạt động. B-Cure Laser n&ecirc;n được đặt nhẹ nh&agrave;ng, ở một g&oacute;c ph&ugrave; hợp với hướng của khu vực cần điều trị.</p>
',
                'sort_number' => 16,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 17,
                'question' => 'Nên chờ bao lâu giữa các lần điều trị?',
                'reply_content' => '<p>Trong trường hợp đau cấp t&iacute;nh, bạn n&ecirc;n đợi năm ph&uacute;t giữa mỗi lần điều trị v&agrave; &aacute;p dụng điều trị c&agrave;ng nhiều lần c&agrave;ng tốt. Để điều trị đau l&acirc;u d&agrave;i, n&ecirc;n tiến h&agrave;nh hai hoặc ba lần mỗi ng&agrave;y, v&agrave; sau đ&oacute; nhiều hơn nếu n&oacute; ph&ugrave; hợp với bệnh nh&acirc;n. Kh&ocirc;ng c&oacute; t&aacute;c dụng phụ khi sử dụng qu&aacute; liều.&nbsp;</p>
',
                'sort_number' => 17,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 18,
                'question' => 'Tại sao tôi chỉ nên bắt đầu với một phút rưỡi, tôi có thể dùng nhiều hơn không?',
                'reply_content' => '<p>Chỉ định n&agrave;y nhằm hạn chế sự đau đớn, khi cơ thể bị vi&ecirc;m nhiễm. Sau khi điều trị một ph&uacute;t rưỡi, kh&ocirc;ng cảm thấy đau tăng l&ecirc;n, bạn c&oacute; thể điều trị đầy đủ s&aacute;u ph&uacute;t, hai lần một ng&agrave;y. Nếu cảm thấy đau, th&igrave; thời gian điều trị n&ecirc;n được tăng dần, th&ecirc;m khoảng một ph&uacute;t mỗi ng&agrave;y, cho mỗi điểm được điều trị, cho đến khi đạt được to&agrave;n bộ thời gian.</p>
',
                'sort_number' => 18,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 19,
                'question' => 'Tôi có thể chiếu B-Cure Laser vào những vị trí nào?',
                'reply_content' => '<p>C&oacute; c&aacute;c khu vực cần điều trị d&agrave;nh cho c&aacute;c chỉ định y tế kh&aacute;c nhau. Những điểm n&agrave;y xuất hiện tr&ecirc;n bản đồ điều trị trong hướng dẫn sử dụng. Bạn cũng n&ecirc;n tham khảo th&ocirc;ng tin từ bộ phận chăm s&oacute;c kh&aacute;ch h&agrave;ng.&nbsp;</p>
',
                'sort_number' => 19,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 20,
                'question' => 'Tôi có thể sử dụng B-Cure Laser của mình khi nó được kết nối với bộ sạc không?',
                'reply_content' => '<p>Kh&ocirc;ng n&ecirc;n sử dụng B-Cure Laser khi n&oacute; được kết nối với bộ sạc.</p>
',
                'sort_number' => 20,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 21,
                'question' => ' B-Cure Laser có an toàn cho bệnh nhân bị tim và những người sử dụng máy tạo nhịp tim không?',
                'reply_content' => '<p>B-Cure Laser an to&agrave;n để sử dụng bởi bệnh nh&acirc;n bị b&ecirc;ngj về tim, v&agrave; những người sử dụng m&aacute;y tạo nhịp tim.</p>
',
                'sort_number' => 21,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 22,
                'question' => 'Có nên giữ nút bên trái trong suốt quá trình điều trị không?',
                'reply_content' => '<p>Kh&ocirc;ng cần phải giữ bất kỳ n&uacute;t n&agrave;o. Bạn n&ecirc;n giữ n&uacute;t điều h&agrave;nh b&ecirc;n tr&aacute;i, đồng thời nhấn v&agrave;o n&uacute;t điều h&agrave;nh ch&iacute;nh. Khi bạn bu&ocirc;ng cả hai n&uacute;t c&ugrave;ng một l&uacute;c, bạn đ&atilde; đặt chế độ hoạt động tự động của B-Cure Laser.</p>
',
                'sort_number' => 22,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 23,
                'question' => 'Thuốc uống, thuốc bôi, vật lý trị liệu, điện xung, v.v. có thể được kết hợp với việc sử dụng B-Cure Laser không?',
                'reply_content' => '<p>C&aacute;c phương ph&aacute;p điều trị kh&aacute;c c&oacute; thể được kết hợp với B-Cure Laser.</p>
',
                'sort_number' => 23,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 24,
                'question' => 'Tôi có thể sử dụng Laser B-Cure cùng với thuốc chống đông máu không?',
                'reply_content' => '<p>Kh&ocirc;ng c&oacute; l&yacute; do g&igrave; để ngăn bạn sử dụng B-Cure Laser c&ugrave;ng với thuốc chống đ&ocirc;ng m&aacute;u.</p>
',
                'sort_number' => 24,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 25,
                'question' => 'Có bất kỳ biện pháp an toàn nào cần thiết để sử dụng Laser B-Cure không?',
                'reply_content' => '<p>Thiết bị kh&ocirc;ng n&ecirc;n nhắm trực tiếp v&agrave;o mắt. K&iacute;nh bảo hộ l&agrave; kh&ocirc;ng cần thiết.</p>
',
                'sort_number' => 25,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 26,
                'question' => 'Bảo hành toàn diện là gì?',
                'reply_content' => '<p>Bảo h&agrave;nh bao gồm c&aacute;c bộ phận bị lỗi v&agrave; hư hỏng do m&aacute;y m&oacute;c. Bảo h&agrave;nh kh&ocirc;ng bao gồm pin v&agrave; bộ sạc. Trong mọi trường hợp c&oacute; lỗi, vui l&ograve;ng li&ecirc;n hệ với bộ phận dịch vụ kh&aacute;ch h&agrave;ng.&nbsp;<br />
&nbsp;</p>
    ',
                'sort_number' => 26,
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
