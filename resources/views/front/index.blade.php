@extends('front.app')

@section('content')
    <div class="cyber-container-fluid cyber-hero__background mb-5">
        <div class="container cyber-container" data-scroll="out">
            <div class="cyber-hero row">
                <div class="col-lg-6 text-center text-lg-left">
                    <h2 class="cyber-title">Con em của bạn có an toàn trên không gian mạng?</h2>
                    <p class="d-none d-lg-block mb-4">
                        Bạn đã biết gì về những nguy cơ trên mạng Internet? Bạn có những
                        phương pháp nào để bảo vệ con em trên không gian mạng?
                        Hãy cùng CyberKid tìm hiều xem bạn đã có những kiến thức để
                        giúp con an toàn trên không gian mạng không nhé!
                    </p>
                    <p class="d-block d-lg-none mb-4">Hãy cùng Cyber Kid tìm hiểu nhé!</p>
                    <a href="quiz.blade.php" class="btn btn-primary mb-5 mb-lg-0">Làm bài quiz</a>
                </div>
                <div class="col-lg-6 text-center pb-5 pb-sm-0">
                    <img class="cyber-hero__img" src="/assets/images/rocket.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container cyber-container mb-5">
        <div class="cyber-news row">
            @foreach($firstBlogs as $firstBlog)
                <div class="col-md-6 col-lg-4 mt-4">
                    <a class="card" href="{{ route('blog.show', $firstBlog->id) }}">
                        <img src="{{ asset($firstBlog->image) }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-text">{{ $firstBlog->title }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="cyber-news row">
            @foreach($otherBlogs as $otherBlog)
                <div class="col-md-6 col-lg-4 mt-4">
                    <a class="card flex-row" href="{{ route('blog.show', $otherBlog->id) }}">
                        <img src="{{ asset($otherBlog->image) }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-text">{{ $otherBlog->title }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="cyber-news row">
            <div class="col-md-6 col-lg-4 mt-4">
                <span class="cyber-news__more">
                    TIN TỨC & SỰ KIỆN
                    <a href="#">Xem thêm
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </span>
            </div>
            <div class="col-md-6 col-lg-4 mt-4">
 <span class="cyber-news__more">
            HIỂU VỀ KHÔNG GIAN MẠNG
            <a href="#">Xem thêm
              <i class="fas fa-long-arrow-alt-right"></i>
            </a>
          </span>
            </div>
            <div class="col-md-6 col-lg-4 mt-4">
                 <span class="cyber-news__more">
            QUYỀN CỦA TRẺ EM
            <br/>
            TRÊN KHÔNG GIAN MẠNG
            <a href="#">Xem thêm
              <i class="fas fa-long-arrow-alt-right"></i>
            </a>
          </span>
            </div>
        </div>
    </div>
    <div class="cyber-container-fluid cyber-info__background mb-5">
        <div class="container cyber-container" data-scroll="out">
            <div class="cyber-info row">
                <div class="col-lg-4 text-center">
                    <img class="cyber-info__image" src="/assets/images/shield.png" alt="">
                </div>
                <div class="col-lg-8">
                    <h3 class="cyber-title cyber-info__title behind">
                        <span>BẢO VỆ TRẺ EM</span>
                        <br/>
                        <span>TRÊN KHÔNG GIAN MẠNG</span>
                    </h3>
                    <p>Trẻ em có quyền được bảo vệ, tiếp cận thông tin, tham gia hoạt
                        động xã hội, vui chơi, giải trí, giữ bí mật cá nhân, đời sống riêng tư và
                        các quyền khác khi tham gia trên không gian mạng. Trong thời đại
                        số, chúng ta cần biết những gì để bảo vệ các em khỏi các thông tin
                        độc hại và giúp các em an toàn khám phá mạng Internet?
                    </p>
                    <button class="btn btn-secondary d-block d-sm-inline m-auto">TÌM HIỂU THÊM</button>
                </div>
            </div>
        </div>
    </div>
    <div class="cyber-container-fluid cyber-number__background">
        <div class="container cyber-container">
            <div class="cyber-number row">
                <div class="col-md-4 cyber-number__item">
                    <span><span class="value">95</span>%</span>
                    <p>Trẻ em được sử dụng internet
                        <br/>trước năm 10 tuổi</p>
                </div>
                <div class="col-md-4 cyber-number__item">
                    <span><span class="value">90</span>%</span>
                    <p>Nạn nhân của các vụ mua bán<br/>người là phụ nữ & trẻ em</p>
                </div>
                <div class="col-md-4 cyber-number__item">
                    <span><span class="value">21</span>%</span>
                    <p>Trẻ em là nạn nhân của bắt nạt<br/>trên không gian mạng</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container cyber-container mb-5">
        <div class="cyber-question row">
            <div class="col-12">
                <h3 class="cyber-title d-none d-md-block cyber-question__title behind-yellow">
                    <span>BẠN ĐÃ CÓ NHỮNG BIỆN PHÁP GÌ</span>
                    <br/>
                    <span>ĐỂ BẢO VỆ CON EM TRÊN KHÔNG GIAN MẠNG</span>
                </h3>
                <h3 class="cyber-title d-block d-md-none cyber-question__title behind-yellow">
                    <span>BẠN ĐÃ CÓ NHỮNG BIỆN</span>
                    <br/>
                    <span> PHÁP GÌ ĐỂ BẢO VỆ</span>
                    <br/>
                    <span> CON EM TRÊN</span>
                    <br/>
                    <span> KHÔNG GIAN MẠNG</span>
                </h3>
                <p>Ngắt kết nối mạng?<br/>
                    Cấm đoán con em sử dụng mạng internet?<br/>
                    Sử dụng phần mềm theo dõi hoạt động mạng của con?<br/>
                    Bạn đã và đang làm gì để bảo vệ con trên không gian mạng?<br/>
                    Hãy cùng CyberKid tìm hiểu về những giải pháp giúp con vui chơi an toàn trên không gian mạng.
                </p>
                <button class="btn btn-primary d-block d-sm-inline m-auto">TÌM HIỂU THÊM</button>
            </div>
        </div>
    </div>
@endsection
