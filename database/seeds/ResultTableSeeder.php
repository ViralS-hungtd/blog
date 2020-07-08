<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ResultTableSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        \DB::table('results')->truncate();

        \DB::table('results')->insert([
            'id' => 1,
            'under' => '10',
            'upper' => '18',
            'title' => 'BẠN CHƯA THỰC SỰ CỐ GẮNG ĐỂ HIỂU VÀ QUAN TÂM ĐẾN CON',
            'result' => '
<p>Bạn nghĩ mình đang tôn trọng quyền riêng tư cá nhân của con; tuy nhiên bạn đang lơ là trong việc theo sát và quản lí con cái. Trẻ em trong giai đoạn từ 0-16 tuổi rất cần sự quan tâm sát sao của bố mẹ, không chỉ trong phạm vi gia đình, nhà trường mà cả trên không gian mạng.</p>
</br>
<p>Việc bạn không quan tâm sẽ khiến trẻ không được định hình những hành vi đúng đắn trên không gian mạng, hoặc có thể khiến trẻ cảm thấy mình bị bỏ rơi. Vậy nên, hãy dành nhiều thời gian để quan tâm, và chia sẻ với con bạn nhé!</p>',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        \DB::table('results')->insert([
            'id' => 2,
            'under' => '19',
            'upper' => '21',
            'title' => 'XIN CHÚC MỪNG! BẠN CHÍNH LÀ NGƯỜI BẠN ĐỒNG HÀNH LÍ TƯỞNG  CỦA CON',
            'result' =>"
                <p>Xin chúc mừng! Bạn chính là người bạn đồng hành của con, khiến con có thể tin tưởng, và chia sẻ mọi chuyện.</p>
                </br>
                <p>Việc cởi mở trong giao tiếp với con, cũng như sự tinh tế và thấu hiểu của bạn đối với con sẽ khiến bạn vừa dễ dàng biết được những chuyện xảy tới với con trên không gian mạng để có những biện pháp xử lí kịp thời; vừa khiến bạn có được sự tin tưởng tuyệt đối của con để con có thể an tâm chia sẻ với bạn. Hãy tiếp tục phát huy điểm mạnh này bạn nhé!</p>",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        \DB::table('results')->insert([
            'id' => 3,
            'under' => '22',
            'upper' => '30',
            'title' => 'BẠN ĐANG QUÁ KHẮT KHE VỚI CON ',
            'result' => "
<p>Bạn đang cố gắng quản lí con nhưng bạn đang quá khắt khe và xâm phạm quyền riêng tư của con.</p>
</br>
<p>Việc mắng nhiếc, cấm cản mà không cho trẻ một lí do rõ ràng; hay việc xâm phạm vào tài khoản cá nhân của trẻ mà chưa có sự cho phép sẽ khiến trẻ cảm thấy sợ hãi và rụt rè khi đối diện với bạn. Lâu dài bạn sẽ đánh mất sự tin tưởng của trẻ hoặc trẻ sẽ cố gắng giấu mọi chuyện khỏi bạn - và bạn sẽ không còn là người đầu tiên trẻ tìm tới khi gặp khó khăn hoặc rắc rối nữa.
</p></br>
<p>Trong thời gian tới, bạn cần thể hiện sự thấu hiểu và thiết lập nhiều hơn những cuộc đối thoại cởi mở với con để thiết lập sự tôn trọng và tin tưởng giữa cha mẹ và con cái.</p>",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
