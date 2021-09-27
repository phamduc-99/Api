<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();
        Post::create(['title'=>'Phát hiện một F0 tại Hà Nội là trường hợp đã được cách ly', 'content'=>'Ghi nhận một F0 đã được cách ly tại Hà Nội vào trưa nay. Theo Sở y tế Hà Nội, ca dương tính SARS-CoV-2 mới ghi nhận thuộc chùm F1 của các trường hợp sàng lọc ho sốt']);
        Post::create(['title'=>'Kiến nghị bổ sung "trường hợp nặng" vào dự thảo hướng dẫn kiểm soát Covid', 'content'=>' Đó là một trong những đề xuất mà TPHCM kiến nghị bổ sung vào dự thảo hướng dẫn "Thích ứng an toàn, linh hoạt, kiểm soát hiệu quả dịch Covid-19']);
        Post::create(['title'=>'Đội tàu cá khổng lồ của Trung Quốc ồ ạt đánh bắt ngoài khơi Peru', 'content'=>'Sinh kế của nhiều ngư dân Peru bị ảnh hưởng nghiêm trọng khi đội tàu cá quy mô lớn của Trung Quốc đến bờ biển ngoài khơi nước Nam Mỹ đánh bắt ồ ạt, làm gia tăng nguy cơ cạn kiệt nguồn hải sản']);
        Post::create(['title'=>'Tạm dừng đóng vào quỹ hưu trí và tử tuất cho hơn 105.000 lao động', 'content'=>'588 đơn vị với 105.582 lao động đã được giải quyết tạm dừng đóng vào quỹ hưu trí và tử tuất với số tiền hơn 727 tỷ đồng tại 52 tỉnh, thành phố…']);
        Post::create(['title'=>'Lãnh đạo Hoàng Anh Gia Lai từ nhiệm sau gần 30 năm đồng hành với "bầu" Đức', 'content'=>'Ông Nguyễn Văn Minh rút khỏi Hoàng Anh Gia Lai sau gần 30 năm công tác. Ông Minh là một trong những cộng sự gắn bó lâu năm nhất với Chủ tịch HĐQT Đoàn Nguyên Đức']);
        Post::create(['title'=>'Vingroup muốn làm công viên rừng 650ha ở Hạ Long', 'content'=>'Vingroup đang đề xuất khởi công thực hiện dự án Công viên rừng Hạ Long trong năm 2022 và hoàn thành trong năm 2023.']);
        Post::create(['title'=>'Chỉ cần 10 phút, thần đồng khiến Barcelona không còn nhớ… Messi', 'content'=>'Sự trở lại của Ansu Fati, với chiếc áo số 10 của Messi, đang mang tới niềm hy vọng mới cho Barcelona. Tài năng sinh năm 2002 chỉ mất đúng 10 phút để khiến cả cầu trường Nou Camp nổ tung']);
        Post::create(['title'=>'Gia đình F0: Mẹ đi là đi mãi mang theo tình yêu của 2 đứa con thơ', 'content'=>'Cả nhà anh Lâm đều là F0, ngày gia đình đi cách li, khi "đi 4" nhưng chỉ "về 3". Mẹ đi là đi mãi... để lại 2 đứa con mồ côi ngày ngày dắt tay cha ra đầu ngõ ngóng mẹ đi làm về']);
        Post::create(['title'=>'Phát hiện một F0 tại Hà Nội là trường hợp đã được cách ly', 'content'=>'Ghi nhận một F0 đã được cách ly tại Hà Nội vào trưa nay. Theo Sở y tế Hà Nội, ca dương tính SARS-CoV-2 mới ghi nhận thuộc chùm F1 của các trường hợp sàng lọc ho sốt']);
        Post::create(['title'=>'Nhà báo Việt Thanh: Nghẹt thở khoảnh khắc các tác giả dấn thân chụp ảnh...', 'content'=>'Nhà báo Việt Thanh - Báo VietnamNews (Thông tấn xã) - thành viên Ban Giám khảo cuộc thi ảnh về phòng cháy chữa cháy và cứu nạn, cứu hộ ấn tượng mạnh những tác giả dấn thân chụp ảnh cứu hộ trên biển']);
        Post::create(['title'=>'Cộng đồng mạng xôn xao trước thông tin "Tây Du Ký" sắp bị "xóa sổ"', 'content'=>'Cục Quản lý Nhà nước về Phát thanh, Điện ảnh và Truyền hình cân nhắc xóa sổ những bộ phim dành cho trẻ em có yếu tố không phù hợp. Và "Tây Du Ký" bị lo lắng nằm trong danh sách bị xóa sổ']);
        Post::create(['title'=>'iPhone đời cũ đồng loạt giảm giá, dọn đường chờ iPhone 13 về Việt Nam', 'content'=>'Không lâu sau khi thế hệ iPhone 13 ra mắt thị trường, nhiều hệ thống bán lẻ đã đồng loạt giảm các sản phẩm đời cũ. Mức giảm dao động khoảng 2-3 triệu đồng tùy từng phiên bản']);
        Post::create(['title'=>'Ai là người đứng đầu cơ sở giáo dục đại học công lập', 'content'=>'Nếu thực hiện cơ chế một người đứng đầu cơ sở giáo dục đại học (GDĐH) công lập thì sẽ ảnh hưởng nghiêm trọng đến chủ trương tự chủ đại hoc đang được bước đầu được triển khai hiệu quả']);
        Post::create(['title'=>'80 lao động khó khăn không chờ nổi địa phương đón, tự đi xe máy về quê', 'content'=>'80 lao động là người dân tộc thiểu số quê ở Đắk Lắk đi làm tại Tây Ninh đã tự đi xe máy để về quê. Trước sự việc, hai tỉnh đã trao đổi, thống nhất đón nhận số công dân này về quê nhà']);
        Post::create(['title'=>'Vụ án Trịnh Xuân Thanh: "Người thứ ba ngay tình" nói gì', 'content'=>'Chủ sở hữu hiện tại của biệt thự triệu USD ở Tam Đảo khẳng định là "người thứ ba ngay tình", cần được pháp luật bảo vệ; đồng thời cho rằng phán quyết của tòa sơ thẩm không thể thi hành được']);
        Post::create(['title'=>'Bác sĩ câu cá sấu, trải nghiệm du lịch sau nhiều tháng chống dịch tại TPHCM', 'content'=>'Sau gần 3 tháng tham gia chi viện chống dịch ở TPHCM, lực lượng y, bác sĩ tuyến đầu đã có một ngày trải nghiệm tour du lịch, khám phá Cần Giờ']);
        Post::create(['title'=>'Chi gần chục triệu đồng, mẹ đảm ở TPHCM làm vườn sum suê trên sân thượng', 'content'=>'Hơn một năm ảnh hưởng vì dịch Covid-19, gia đình chị Thái vẫn thoải mái có rau trái sạch để sử dụng hàng ngày nhờ khu vườn xanh mát trên sân thượng với 50 chậu các loại']);
        Post::create(['title'=>'Phải làm gì sau buổi hẹn đầu tiên', 'content'=>'Sau buổi hẹn hò đầu tiên, sự phấn khích và mong đợi luôn là cảm giác còn đọng lại. Hai bạn có thể đã bắt đầu một điều gì đó tuyệt vời. Nhưng trường hợp đó vẫn có thể thay đổi, nếu những bước đi tiếp sau của một trong hai người không còn đúng đắn']);
        Post::create(['title'=>'Sư tử lĩnh trọn cú húc cứu bạn cực mạnh của trâu rừng', 'content'=>'Ngay cả khi bị bầy sư tử hung dữ tấn công, con trâu rừng vẫn may mắn sống sót nhờ sự can thiệp kịp thời của những con khác trong đàn']);
        Post::create(['title'=>'Lòng tham trên thị trường chứng khoán', 'content'=>' Bỏ vào 100 triệu đồng đầu tư vào một mã cổ phiếu, sau một năm thu về hơn 6 tỷ đồng. Câu chuyện dường như "không tưởng", bịa đặt nhưng lại hoàn toàn có thực']);
    }
}
