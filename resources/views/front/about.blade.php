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
          <p>CyberKid ra đời với sứ mệnh biến không gian mạng trở thành một thế giới an toàn
            và tuyệt vời cho mọi đứa trẻ tại Việt Nam và khu vực. Thông qua sự hợp tác với
            Chính phủ, Doanh nghiệp và các chuyên gia hàng đầu trong lĩnh vực an ninh
            mạng và giáo dục trẻ, CyberKid đã và đang đem đến cho các em và các phụ
            huynh những tài liệu hướng dẫn và các khoá huấn luyện để mang đến cho các em
            một môi trường an toàn trên không gian mạng.
          </p>
          <p>CyberKid hoạt động với một mục tiêu hàng đầu - đó là trang bị cho cha mẹ và các
            em hành trang đầy đủ để ứng phó với những rủi ro từ không gian mạng và thúc
            đẩy những cơ hội tích cực từ mạng Internet vì chúng tôi tin rằng, khi được sử dụng
            đúng cách, Internet đã và đang là một công cụ tuyệt vời cho sự học tập và phát
            triển của trẻ nhỏ và thanh thiếu niên.
          </p>
        </div>
        <div class="col-md-3">
          <img class="img-fluid mb-5" src="{{ asset('assets/images/robot1.png') }}" alt="">
        </div>
        <div class="col-12">
          <h3 class="cyber-title cyber-about__title behind-cyan text-center">
            <span>Mục tiêu hành động</span>
          </h3>
        </div>
        <div class="col-12">
          <p>Trẻ em và thanh thiếu niên là một trong những nhóm người dùng Internet phát triển nhanh nhất và là những đối tượng đang
            được hưởng lợi rất lớn từ những tiềm năng của mạng Internet. Tuy nhiên, những nội dung trên không gian mạng khi chưa
            qua kiểm duyệt có thể trực tiếp gây tổn hại tới các em.
          </p>
          <p>Do đó, CyberKid được thành lập với sứ mệnh trở thành nơi để chia sẻ những kiến thức chuyên môn và thực tiễn về an toàn
            của trẻ trên không gian mạng, cụ thể thông qua việc thực hiện các mục tiêu sau:
          </p>
        </div>
        <div class="col-md-4 d-none d-md-block">
          <img class="img-fluid" src="{{ asset('assets/images/robot2.png') }}" alt="">
        </div>
        <div class="col-md-8">
          <ul>
            <li data-scroll>Rà soát, hoàn thiện hệ thống hành lang pháp luật, cơ chế, chính
              sách để bảo vệ và hỗ trợ trẻ em tương tác lành mạnh trên không
              gian mạng; đưa trẻ em làm trung tâm để xây dựng chính sách số
              cho phép trẻ em có tiếng nói trong phát triển chính sách số tác
              động đến cuộc sống của trẻ em.
            </li>
            <li data-scroll>
              Xây dựng và đưa nội dung giáo dục chương trình giáo dục cho trẻ
              em; xây dựng và tổ chức các chương trình giáo dục, ứng dụng
              khoa học trên thiết bị di động và Internet để trẻ em truy cập, khai
              thác nguồn tài nguyên trực tuyến một cách chủ động, sáng tạo,
              hiểu quả và an toàn.
            </li>
            <li data-scroll>
              Sử dụng các phương tiện kỹ thuật để tăng cường kiểm tra, giám
              sát đơn vị, cá nhân quản lý và cung cấp sản phẩm, dịch vụ thông
              tin, truyền thông đảm bảo lọc các thông tin phù hợp với lứa tuổi.
            </li>
            <li data-scroll>
              Tập huấn đối với cha, mẹ, giáo viên, người chăm sóc trẻ em và
              phóng viên để giáo dục kiến thức, hướng dẫn kỹ năng để trẻ em
              biết tự bảo vệ mình khi tham gia môi trường mạng.
            </li>
            <li data-scroll>Tăng cường hợp tác giữa cơ quan nhà nước và các tổ chức kinh tế - xã hội trong và ngoài nước; hợp tác giữa chính phủ
              với chính phủ; tăng cường tham gia các mạng lưới quốc tế về bảo vệ trẻ em nói chung và đảm bảo trẻ em tương tác
              sáng tạo, lành mạnh trên không gian mạng nói riêng.</li>
            <li data-scroll>Nghiên cứu, thiết lập cơ chế phối hợp giữa các cơ quan nhà nước, các tổ chức trong và ngoài nước cùng các doanh
              nghiệp, gia đình, nhà trường để bảo vệ và hỗ trợ tích cực cho em tương tác trên không gian mạng.</li>
          </ul>
        </div>
        <div class="col-md-4 d-block d-md-none">
          <img class="img-fluid" src="{{ asset('assets/images/robot2.png') }}" alt="">
        </div>
      </div>
    </div>
@endsection
