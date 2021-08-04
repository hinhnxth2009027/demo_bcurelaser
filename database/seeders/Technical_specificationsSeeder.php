<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Technical_specificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('technical_specifications')->insert([
            [
                'product_id'=>1,
                'property'=>'Loại laser',
                'value'=>'GaAIAs',
                'units'=>'-',
                'notes'=>'Diode laser trạng thái rắn',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Công suất tối đa',
                'value'=>'250',
                'units'=>'mW',
                'notes'=>'tối đa',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'bước sóng (hồng ngoại)',
                'value'=>'808',
                'units'=>'nm',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Tần số xung',
                'value'=>'13',
                'units'=>'kHz',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Thời lượng xung laser',
                'value'=>'26',
                'units'=>'μs',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Tuổi thọ của Diode Laser',
                'value'=>'1000',
                'units'=>'giờ',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Năng lượng mỗi phút',
                'value'=>'5',
                'units'=>'Joule',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Kích thước trùm tia laze (LXH)',
                'value'=>'Chiều dài 45 x chiều rộng 10',
                'units'=>'mm',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Độ phân kỳ chùm',
                'value'=>'± 3',
                'units'=>'độ',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Đèn báo điều khiền màu xanh lá cây',
                'value'=>'520',
                'units'=>'nM',
                'notes'=>'Thiết bị báo hiệu chùm ánh sáng xanh đang hoạt động',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Cài đặt hẹn giờ',
                'value'=>'00:00 đến 99:30',
                'units'=>'phút',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Khoảng thời gian hẹn giờ',
                'value'=>'30',
                'units'=>'giây',
                'notes'=>'Tăng hoặc giảm',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Kích thước màn hình LCD',
                'value'=>'26x15',
                'units'=>'mm',
                'notes'=>'Khu vực có thể nhìn thấy',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Hiển thị hẹn giờ',
                'value'=>'4 chữ số (88:88)',
                'units'=>'-',
                'notes'=>'Khoảng thời gian 1 giây',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Cảnh báo bíp',
                'value'=>'Đúng',
                'units'=>'-',
                'notes'=>'Hiển thị: Thiết bị bật, tắt, hoạt động, công suất laser thấp, lỗi',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Nguồn cấp',
                'value'=>'3.2',
                'units'=>'W',
                'notes'=>'Tối đa',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Tự động tắt máy',
                'value'=>'2 lựa chọn',
                'units'=>'-',
                'notes'=>'Tự động tắt máy khi không sử dụng trong 10 phút;5 phút khi bộ hẹn giờ được đặt thành 0 (00:00)',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Ác quy',
                'value'=>'-',
                'units'=>'-',
                'notes'=>'3 pin sạc AAA (NiMH)',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Tuổi thọ pin',
                'value'=>'hơn 2',
                'units'=>'giờ',
                'notes'=>'với pin sạc đầy',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Thời gian sạc pin',
                'value'=>'5 đến 7',
                'units'=>'giờ',
                'notes'=>'với pin đã cạn',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Pin sạc hiện tại',
                'value'=>'300',
                'units'=>'mA',
                'notes'=>'tối thiểu',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Nguồn cấp',
                'value'=>'100 đến 240',
                'units'=>'VAC',
                'notes'=>'Bộ chuyển đổi sạc AC / DC 115/230 VAC, 65/50 Hz Nguồn cung cấp 9 V, 500 mA',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Kích thước',
                'value'=>'200 x 70 x 40',
                'units'=>'mm',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Bộ sạc điện áp đầu ra',
                'value'=>'9',
                'units'=>'VDC',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Cân nặng',
                'value'=>'175',
                'units'=>'Gam',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Điều kiện hoạt động',
                'value'=>'tạm thời.0 ° đến 40 °, độ ẩm 15% đến 90%',
                'units'=>'C °,%',
                'notes'=>'Không ngưng tụ',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>1,
                'property'=>'Điều kiện bảo quản',
                'value'=>'tạm thời.-20 ° đến 55 °, độ ẩm 10% đến 95%',
                'units'=>'C °,%',
                'notes'=>'Không ngưng tụ',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Loại laser',
                'value'=>'GaAIAs',
                'units'=>'-',
                'notes'=>'Diode laser trạng thái rắn',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Công suất tối đa',
                'value'=>'250',
                'units'=>'mW',
                'notes'=>'tối đa',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'bước sóng (hồng ngoại)',
                'value'=>'808',
                'units'=>'nm',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Tần số xung',
                'value'=>'14',
                'units'=>'kHz',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Thời lượng xung laser',
                'value'=>'22',
                'units'=>'μs',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Tuổi thọ của Diode Laser',
                'value'=>'1000',
                'units'=>'giờ',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Năng lượng mỗi phút',
                'value'=>'4.5',
                'units'=>'Joule',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Kích thước trùm tia laze (LXH)',
                'value'=>'Chiều dài 45 x chiều rộng 10',
                'units'=>'mm',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Độ phân kỳ chùm',
                'value'=>'± 3',
                'units'=>'độ',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Đèn báo điều khiền màu xanh lá cây',
                'value'=>'520',
                'units'=>'nM',
                'notes'=>'Thiết bị báo hiệu chùm ánh sáng xanh đang hoạt động',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Cài đặt hẹn giờ',
                'value'=>'00:00 đến 99:30',
                'units'=>'phút',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Khoảng thời gian hẹn giờ',
                'value'=>'30',
                'units'=>'giây',
                'notes'=>'Tăng hoặc giảm',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Kích thước màn hình LCD',
                'value'=>'26x15',
                'units'=>'mm',
                'notes'=>'Khu vực có thể nhìn thấy',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Hiển thị hẹn giờ',
                'value'=>'4 chữ số (88:88)',
                'units'=>'-',
                'notes'=>'Khoảng thời gian 1 giây',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Cảnh báo bíp',
                'value'=>'Đúng',
                'units'=>'-',
                'notes'=>'Hiển thị: Thiết bị bật, tắt, hoạt động, công suất laser thấp, lỗi',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Nguồn cấp',
                'value'=>'3.2',
                'units'=>'W',
                'notes'=>'Tối đa',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Tự động tắt máy',
                'value'=>'2 lựa chọn',
                'units'=>'-',
                'notes'=>'Tự động tắt máy khi không sử dụng trong 10 phút;5 phút khi bộ hẹn giờ được đặt thành 0 (00:00)',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Ác quy',
                'value'=>'-',
                'units'=>'-',
                'notes'=>'3 pin sạc AAA (NiMH)',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Tuổi thọ pin',
                'value'=>'hơn 2',
                'units'=>'giờ',
                'notes'=>'với pin sạc đầy',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Thời gian sạc pin',
                'value'=>'5 đến 7',
                'units'=>'giờ',
                'notes'=>'với pin đã cạn',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Pin sạc hiện tại',
                'value'=>'300',
                'units'=>'mA',
                'notes'=>'tối thiểu',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Nguồn cấp',
                'value'=>'100 đến 240',
                'units'=>'VAC',
                'notes'=>'Bộ chuyển đổi sạc AC / DC 115/230 VAC, 65/50 Hz Nguồn cung cấp 9 V, 500 mA',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Kích thước',
                'value'=>'200 x 70 x 40',
                'units'=>'mm',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Bộ sạc điện áp đầu ra',
                'value'=>'9',
                'units'=>'VDC',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Cân nặng',
                'value'=>'175',
                'units'=>'Gam',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Điều kiện hoạt động',
                'value'=>'tạm thời.0 ° đến 40 °, độ ẩm 15% đến 90%',
                'units'=>'C °,%',
                'notes'=>'Không ngưng tụ',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>2,
                'property'=>'Điều kiện bảo quản',
                'value'=>'tạm thời.-20 ° đến 55 °, độ ẩm 10% đến 95%',
                'units'=>'C °,%',
                'notes'=>'Không ngưng tụ',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Loại laser',
                'value'=>'GaAIAs',
                'units'=>'-',
                'notes'=>'Diode laser trạng thái rắn',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Công suất tối đa',
                'value'=>'250',
                'units'=>'mW',
                'notes'=>'tối đa',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'bước sóng (hồng ngoại)',
                'value'=>'808',
                'units'=>'nm',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Tần số xung',
                'value'=>'15',
                'units'=>'kHz',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Thời lượng xung laser',
                'value'=>'17',
                'units'=>'μs',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Tuổi thọ của Diode Laser',
                'value'=>'1000',
                'units'=>'giờ',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Năng lượng mỗi phút',
                'value'=>'3.75',
                'units'=>'Joule',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Kích thước trùm tia laze (LXH)',
                'value'=>'Chiều dài 45 x chiều rộng 10',
                'units'=>'mm',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Độ phân kỳ chùm',
                'value'=>'± 3',
                'units'=>'độ',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Đèn báo điều khiền màu xanh lá cây',
                'value'=>'520',
                'units'=>'nM',
                'notes'=>'Thiết bị báo hiệu chùm ánh sáng xanh đang hoạt động',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Cài đặt hẹn giờ',
                'value'=>'00:00 đến 99:30',
                'units'=>'phút',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Khoảng thời gian hẹn giờ',
                'value'=>'30',
                'units'=>'giây',
                'notes'=>'Tăng hoặc giảm',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Kích thước màn hình LCD',
                'value'=>'26x15',
                'units'=>'mm',
                'notes'=>'Khu vực có thể nhìn thấy',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Hiển thị hẹn giờ',
                'value'=>'4 chữ số (88:88)',
                'units'=>'-',
                'notes'=>'Khoảng thời gian 1 giây',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Cảnh báo bíp',
                'value'=>'Đúng',
                'units'=>'-',
                'notes'=>'Hiển thị: Thiết bị bật, tắt, hoạt động, công suất laser thấp, lỗi',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Nguồn cấp',
                'value'=>'3.2',
                'units'=>'W',
                'notes'=>'Tối đa',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Tự động tắt máy',
                'value'=>'2 lựa chọn',
                'units'=>'-',
                'notes'=>'Tự động tắt máy khi không sử dụng trong 10 phút;5 phút khi bộ hẹn giờ được đặt thành 0 (00:00)',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Ác quy',
                'value'=>'-',
                'units'=>'-',
                'notes'=>'3 pin sạc AAA (NiMH)',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Tuổi thọ pin',
                'value'=>'hơn 2',
                'units'=>'giờ',
                'notes'=>'với pin sạc đầy',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Thời gian sạc pin',
                'value'=>'5 đến 7',
                'units'=>'giờ',
                'notes'=>'với pin đã cạn',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Pin sạc hiện tại',
                'value'=>'300',
                'units'=>'mA',
                'notes'=>'tối thiểu',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Nguồn cấp',
                'value'=>'100 đến 240',
                'units'=>'VAC',
                'notes'=>'Bộ chuyển đổi sạc AC / DC 115/230 VAC, 65/50 Hz Nguồn cung cấp 9 V, 500 mA',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Kích thước',
                'value'=>'200 x 70 x 40',
                'units'=>'mm',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Bộ sạc điện áp đầu ra',
                'value'=>'9',
                'units'=>'VDC',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Cân nặng',
                'value'=>'175',
                'units'=>'Gam',
                'notes'=>'-',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Điều kiện hoạt động',
                'value'=>'tạm thời.0 ° đến 40 °, độ ẩm 15% đến 90%',
                'units'=>'C °,%',
                'notes'=>'Không ngưng tụ',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>3,
                'property'=>'Điều kiện bảo quản',
                'value'=>'tạm thời.-20 ° đến 55 °, độ ẩm 10% đến 95%',
                'units'=>'C °,%',
                'notes'=>'Không ngưng tụ',
                'created_at'=> Carbon::now()
            ],
            [
                'product_id'=>4,
                'property'=>'trọng lượng',
                'value'=>'250',
                'units'=>'gam',
                'notes'=>'Diode laser trạng thái rắn',
                'created_at'=> Carbon::now()
            ],
        ]);
    }
}
