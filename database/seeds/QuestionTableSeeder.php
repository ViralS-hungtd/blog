<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class QuestionTableSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        \DB::table('questions')->truncate();

        \DB::table('questions')->insert([
            'question' => 'Sau khi con sử dụng mạng Internet, bạn thường:',
            'answer' => json_encode([
                1 => 'Sử dụng như bình thường, đằng nào bạn cũng không quan tâm con vào những trang web gì',
                3 => 'Kiểm tra lịch sử trình duyệt để chắc chắn con vào những website phù hợp',
                2 => 'Bạn đã cùng con thống nhất cài đặt phần mềm quản lí cha mẹ nên chẳng có gì phải lo lắng cả'
            ], true),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        \DB::table('questions')->insert([
            'question' => 'Bạn có biết con đang nói chuyện với ai trên mạng xã hội không?',
            'answer' => json_encode([
                3 => 'Có, tôi biết hết vì thỉnh thoảng tôi vào tài khoản của con để chắc chắn con không nói chuyện với người lạ',
                1 => 'Không, tôi tôn trọng quyền riêng tư của con',
                2 => 'Có, tôi vẫn chủ động hỏi và con cũng chủ động chia sẻ với tôi về bạn bè của mình'
            ], true),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        \DB::table('questions')->insert([
            'question' => 'Khi con bạn gặp rắc rối, trẻ thường:',
            'answer' => json_encode([
                2 => 'Tìm đến sự giúp đỡ của bạn ngay lập tức. Bạn luôn biết khi nào con có vấn đề và luôn sẵn sàng giúp đỡ con',
                1 => 'Nhốt mình trong phòng. Con thường không hay tâm sự với bạn nên bạn tin con sẽ có cách giải quyết vấn đề của riêng mình',
                3 => 'Con sẽ không nói trừ khi bạn phải thúc ép con nói ra. Nhưng bạn sẽ luôn có mọi câu trả lời cho vấn đề của con.'
            ], true),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        \DB::table('questions')->insert([
            'question' => 'Cuối tuần của gia đình bạn thường sẽ diễn ra theo cách nào:',
            'answer' => json_encode([
                1 => 'Bạn sẽ gửi con cho ông bà để có khoảng thời gian cho riêng mình - cả tuần bạn đã đủ bận bịu rồi!',
                3 => 'Cuối tuần là khoảng thời gian để con học thêm và bổ sung kiến thức. Gia đình tôi thường không đi đâu cả mà sẽ dành thời gian để con học',
                2 => 'Cuối tuần là khoảng thời gian dành cho gia đình. Tuần nào gia đình bạn cũng sẽ có các hoạt động vui chơi để kết nối các thành viên trong gia đình.'
            ], true),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        \DB::table('questions')->insert([
            'question' => 'Nếu trẻ tâm sự với bạn rằng trẻ bị bắt nạt trên mạng xã hội. Bạn sẽ:',
            'answer' => json_encode([
                1 => 'An ủi nhưng cho rằng đó là vấn đề của trẻ con, con bạn có thể tự giải quyết',
                3 => 'Cho rằng con chắc chắn phải có hành động gì đó để bị bắt nạt và yêu cầu con giải thích',
                2 => 'Lắng nghe, chia sẻ với con và cùng con tìm cách giải quyết'
            ], true),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        \DB::table('questions')->insert([
            'question' => 'Bạn phát hiện ra con đang nói chuyện với một người lạ trên mạng. Bạn sẽ:',
            'answer' => json_encode([
                1 => 'Bạn sẽ không can thiệp vì bạn tôn trọng quyền riêng tư của con và tin con biết phải làm gì',
                2 => 'Nói chuyện với con để tìm hiểu mối quan hệ này và hướng dẫn con các biện pháp để bảo vệ bản thân khi nói chuyện với người lạ',
                3 => 'Cấm con không được nói chuyện với người này nữa. Doạ sẽ phạt nếu con không làm theo.'
            ], true),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        \DB::table('questions')->insert([
            'question' => 'Con bạn bỗng nhiên có những hành động hoặc lời nói không phù hợp với lứa tuổi mà bạn không biết từ đâu ra. Bạn sẽ:',
            'answer' => json_encode([
                1 => 'Không quan tâm, trẻ con thường học từ người khác và sẽ quên nhanh thôi',
                3 => 'Mắng con và cấm con không được có những hành động/lời nói ấy nữa',
                2 => 'Nói chuyện với con để tìm hiểu xem những hành động/lời nói ấy từ đâu ra và giải thích cặn kẽ để con không lặp lại những hành động, lời nói ấy nữa.'
            ], true),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        \DB::table('questions')->insert([
            'question' => 'Bạn đã bao giờ giải thích với con về an toàn trên không gian mạng chưa?',
            'answer' => json_encode([
                2 => 'Rồi, tôi đã nói chuyện và hướng dẫn con một cách kĩ càng để con có thể bảo vệ bản thân trên không gian mạng',
                1 => 'Chưa, tôi nghĩ mình sẽ đề cập tới chuyện ấy khi con gặp vấn đề.',
                3 => 'Chưa, nhưng tôi kiểm soát mọi hoạt động lên mạng của con để đảm bảo sự an toàn cho con.'
            ], true),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        \DB::table('questions')->insert([
            'question' => 'Bạn phát hiện ra con thường xuyên thức đêm để chơi điện tử. Bạn sẽ:',
            'answer' => json_encode([
                3 => 'Sử dụng các biện pháp để cấm con chơi: thu máy tính, tháo mạng, v..v…',
                1 => 'Chỉ nhắc nhở con nhẹ nhàng để con tự điều chỉnh.',
                2 => 'Ngồi xuống phân tích cho con về những tác hại của trò chơi điện tử và cùng con thiết lập cam kết để phân chia thời gian chơi hợp lí, khoa học'
            ], true),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        \DB::table('questions')->insert([
            'question' => 'Bạn phát hiện ra hình ảnh của con bị phát tán trên mạng với mục đích xấu. Bạn sẽ:',
            'answer' => json_encode([
                3 => 'Làm to chuyện để tìm cho ra kẻ đứng đằng sau sự việc',
                2 => 'Báo cáo với cơ quan chức năng nhờ can thiệt, bóc gỡ vd như Tổng Đài quốc gia Trẻ em (qua kênh 111) hoặc bên Cục An toàn thông tin, Bộ TT&TT và nói chuyện với con để đảm bảo con có tâm lí ổn định cũng như hướng dẫn con các biện pháp bảo vệ thông tin cá nhân sau này',
                1 => 'An ủi con, nhưng cho rằng đó là chuyện của trẻ con và con có thể tự giải quyết'
            ], true),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
