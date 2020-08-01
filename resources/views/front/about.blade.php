@extends('front.app')
@section('title', 'Về CyberKid')
@section('content')
    <div class="container cyber-container slide-top mb-5">
      <div class="cyber-about row mt-5">
        <div class="col-12">
          <h3 class="cyber-title d-none d-md-block cyber-about__title behind-cyan text-center">
            <span>Câu chuyện của Cyberkid Vietnam</span>
          </h3>
          <h3 class="cyber-title d-block d-md-none cyber-about__title behind-cyan text-center">
            <span>Câu chuyện của</span>
            <br/>
            <span> Cyberkid Vietnam</span>
          </h3>
        </div>
        <div class="col-md-9">
          <p style="margin-right: 10%;">Theo khảo sát mới nhất hiện nay, <b>71%</b> trẻ em Việt Nam thường xuyên sử dụng Internet, trung bình số giờ dùng điện thoại vào việc sử dụng web là <b>3 giờ 08 phút</b>, thời gian dùng mạng xã hội lên tới <b>2 giờ 22 phút</b> và con số trẻ em bị xâm hại trên môi trường mạng trong năm 2018 là <b>706.435</b> vụ. Theo số liệu họp báo của Bộ LĐTB&XH và Quỹ Nhi đồng Liên hiệp quốc (UNICEF) vào năm 2016, mỗi ngày có hơn <b>720.000</b> hình ảnh về xâm hại trẻ em được đưa lên mạng. Thống kê của Trung tâm Quốc gia về trẻ em bị bóc lột và mất tích (NMEC) trong 3 năm trở lại đây cho thấy sự gia tăng nhanh chóng về số lượng các vụ việc liên quan tới tài liệu xâm hại tình dục trẻ em tại khu vực Đông Nam Á. Vấn đề khai thác và sử dụng thông tin cá nhân trái phép nhắm tới đối tượng là trẻ em cũng là nguyên nhân dẫn tới việc gia tăng các hoạt động phạm pháp liên quan tới trẻ em.
          </p>
        </div>
        <div class="col-md-3">
          <img class="img-fluid mb-5" src="{{ asset('assets/images/robot1.png') }}" alt="">
        </div>
        <div class="col-md-12">
            <p>Bên cạnh đó, trẻ em tương tác trên không gian mạng cũng gặp phải rất nhiều rủi ro về việc bị bắt nạt trên mạng; hội chứng nghiện trò chơi điện tử, mạng xã hội… Đây cũng là vấn đề đáng lo ngại, theo khảo sát của McAfee năm 2014 cho thấy cứ mỗi 3 trẻ em thì có 1 trẻ đã từng bị bắt nạt qua mạng. Hệ quả của việc này ảnh hưởng trực tiếp tới tâm lý nạn nhân lâu dài có thể dẫn tới những hành động bạo lực gia tăng, xu hướng tự hủy hoại bản thân hay nghiêm trọng hơn là hội chứng tự tử. Hội chứng nghiện trò chơi điện tử, mạng xã hội… dẫn tới phát triển mất cân bằng về thể chất và tinh thần, thậm chí dẫn tới việc trẻ em bị đột quỵ do chơi điện tử trong thời gian dài liên tục.</p>
            <p class="mb-0">Trẻ em chính là nhóm yếu thế trong xã hội cần phải được hỗ trợ bảo vệ đây không chỉ là trách nhiệm của toàn xã hội, các ban, ngành tổ chức. Chúng ta đang dành cơ hội để đầu tư cho mầm non tương lai, để các em có một cuộc sống khỏe mạnh về thể chất và tinh thần, đây là mục tiêu để hướng tới một xã hội phát triển bền vững cho toàn thể xã hội.</p>
            <p>CyberKid ra đời với sứ mệnh bảo vệ và hỗ trợ Trẻ em Việt Nam tương tác lành mạnh, sáng tạo trên không gian mạng; xây dựng một cộng đồng Cyberkid nghĩ về Trẻ em và hành động vì Trẻ em trên không gian mạng; phát triển không gian mạng trở thành một thế giới thực sự an toàn cho Trẻ em Việt Nam và Trẻ em trong khu vực ASEAN.</p>
        </div>
        <div class="col-12">
          <h3 class="cyber-title cyber-about__title behind-cyan text-center">
            <span>Mục tiêu hành động</span>
          </h3>
        </div>
        <div class="col-12">
          <p><b>CyberKid</b> mong muốn được đóng góp một phần nhỏ bé vào công cuộc xây dựng Việt Nam trở thành quốc gia số bền vững, toàn diện và nhân văn. Thông qua sự hợp tác với Chính phủ, các tổ chức quốc tế, các doanh nghiệp trong và ngoài nước, đặc biệt là đồng hành cùng cha mẹ, nhà trường, CyberKis hướng đến các mục tiêu sau: </p>
        </div>
        <div class="col-md-4 d-none d-md-block">
          <img class="img-fluid" src="{{ asset('assets/images/robot2.png') }}" alt="">
        </div>
        <div class="col-md-8">
          <ul>
            <li data-scroll> Bảo vệ các dữ liệu về đời sống riêng tư của Trẻ em khi Trẻ em tiếp cận thông tin, tham gia các hoạt động trên không gian mạng. Hợp tác với các cơ quan chức năng nhằm ngăn chặn, xử lý các hành vi lợi dụng môi trường mạng thực hiện các hành vi bị nghiêm cấm đối với Trẻ em dưới mọi hình thức theo quy định của pháp luật.
            </li>
            <li data-scroll>
                Trang bị kiến thức và kỹ năng cho Trẻ em theo từng độ tuổi, trong đó chú trọng:
                <p>- Khả năng nhận diện các nguy cơ xâm hại, cách thức xử lý tình huống và tự bảo vệ khi tham gia tương tác trên không gian mạng; </p>
                <p>- Sử dụng và khai thác tài nguyên Internet, thiết bị di động như những “nhà tiêu dùng thông thái” trên không gian mạng; </p>
                <p>- Cách thức thông báo, tố giác hành vi, vụ việc xâm hại Trẻ em trên không gian mạng với các cơ quan chức năng tại Việt Nam. </p>
            </li>
          </ul>
        </div>
        <div class="col-md-12">
          <ul>
            <li data-scroll>
                Truyền thông đến toàn xã hội, đặc biệt là cha, mẹ, giáo viên, người nuôi dưỡng trẻ về kiến thức, kỹ năng hỗ trợ và định hướng Trẻ em tương tác an toàn, lành mạnh trên không gian mạng; cung cấp chương trình, tài liệu hướng dẫn, các khoá huấn luyện và giải pháp kỹ thuật để chung tay xây dựng không gian mạng an toàn, bổ ích cho trẻ em.
            </li>
            <li data-scroll>
                Thực hiện các giải pháp chủ động phòng ngừa, phát hiện các hành vi xâm hại; bảo đảm các điều kiện cần thiết để Trẻ em được tham gia học tập, vui chơi, giải trí an toàn lành mạnh trên không gian mạng; tham gia xây dựng và hình thành Hệ sinh thái các sản phẩm, ứng dụng Việt đáp ứng nhu cầu học tập, giải trí của Trẻ em trên không gian mạng.
            </li>
            <li data-scroll>Tư vấn tâm lý, hỗ trợ pháp lý cho Trẻ em đặc biệt là những Trẻ em bị sang trấn tâm lý khi chịu tác động tiêu cực từ mặt trái của không gian mạng. </li>
            <li data-scroll>Xây dựng cộng đồng CyberKid an toàn, lành mạnh và sáng tạo tại Việt Nam.</li>
            <li data-scroll>Tham gia rà soát, kiến nghị và tư vấn cho Chính phủ Việt Nam hoàn thiện hệ thống hành lang pháp luật, cơ chế, chính sách để bảo vệ và hỗ trợ trẻ em tương tác lành mạnh trên không gian mạng; lấy trẻ em và đưa trẻ em làm trung tâm để xây dựng chính sách số cho phép trẻ em có tiếng nói trong phát triển chính sách số tác động đến cuộc sống của trẻ em.</li>
          </ul>
        </div>
        <div class="col-12">
            <p><b>CyberKid</b> đã và đang nỗ xây dựng, hoàn thiện chiến lược hành động ứng phó rủi ro và thúc đẩy những cơ hội tích cực từ Internet, thiết bị di động cho Trẻ em trong sự nghiệp xây dựng xây dựng và phát triển công dân số Việt Nam – Chủ nhân tương lai của đất nước! </p>
            <p>Ngay lúc này, chúng tôi tha thiết mong và hy vọng bạn sẽ cùng chung tay, là một chiến binh tin cậy cho Trẻ em Việt Nam trên không gian mạng</p>
        </div>
        <div class="col-12">
            <h3 class="cyber-title text-center" style="font-weight: normal;">“NGHĨ VỀ TRẺ EM VÀ HÀNH ĐỘNG VÌ TRẺ EM”</h3>
          </div>
        <div class="col-md-4 d-block d-md-none">
          <img class="img-fluid" src="{{ asset('assets/images/robot2.png') }}" alt="">
        </div>
      </div>
    </div>
@endsection
