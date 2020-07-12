@extends('front.app')
@section('title', 'Trang chủ')
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
                    <a href="{{ route('quiz') }}" class="btn btn-primary mb-5 mb-lg-0">Làm bài quiz</a>
                </div>
                <div class="col-lg-6 text-center pb-5 pb-sm-0">
                    <img class="cyber-hero__img" src="/assets/images/rocket.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container cyber-container mb-5">
        <div class="cyber-news row mb-5">
            <div class="col-12">
              <h2 class="cyber-title behind-pink text-center">
                <span>Cập nhật mới nhất</span>
              </h2>
            </div>
            <div class="col-md-6 col-lg-4 mt-4">
                @foreach($news as $key => $new)
                <a class="card {{$key == 0 ? '' : 'flex-row' }}" href="{{ route('blog.show', $new->slug) }}">
                    <img src="{{ asset($new->image) }}" class="card-img-top" alt="{{ $new->alt }}">
                    <div class="card-body">
                        <p class="card-text">{{ $new->title }}</p>
                    </div>
                </a>
                @endforeach
                @if(count($news) < 3)
                  @for($i = 0; $i < 3 - count($news); $i++)
                    <a class="card {{$i == 0 &&  count($news) == 0? '' : 'flex-row' }}" href="#">
                        <img src="/assets/images/family.png" class="card-img-top" alt="">

                        <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </a>
                  @endfor
                @endif
                <span class="cyber-news__more">
                    TIN TỨC &amp; SỰ KIỆN
                    <a href="{{ route('event') }}">Xem thêm
                    <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i>
                    </a>
                </span>
            </div>
            <div class="col-md-6 col-lg-4 mt-4">
                @foreach($blogs as $key => $blog)
                <a class="card {{$key == 0 ? '' : 'flex-row' }}" href="{{ route('blog.show', $blog->slug) }}">
                    <img src="{{ asset($blog->image) }}" class="card-img-top" alt="{{ $blog->alt }}">
                    <div class="card-body">
                        <p class="card-text">{{ $blog->title }}</p>
                    </div>
                </a>
                @endforeach
                @if(count($blogs) < 3)
                  @for($i = 0; $i < 3 - count($blogs); $i++)
                    <a class="card {{$i == 0 &&  count($blogs) == 0? '' : 'flex-row' }}" href="#">
                        <img src="/assets/images/family.png" class="card-img-top" alt="">
                        <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </a>
                  @endfor
                @endif
              <span class="cyber-news__more">
                Blog
                <a href="{{ route('blog') }}">Xem thêm
                  <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i>
                </a>
              </span>
            </div>
            <div class="col-md-6 col-lg-4 mt-4">
              <a class="card" href="{{ route('knowledge.info') }}">
                <img src="{{ asset('assets/images/image-02.png') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <p class="card-text">Hiểu về không gian mạng.</p>
                </div>
              </a>
              <a class="card flex-row" href="{{ route('knowledge.power') }}">
                <img src="{{ asset('assets/images/image-01.png') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <p class="card-text">Quyền trẻ em trên không gian mạng.</p>
                </div>
              </a>
              {{-- <a class="card flex-row" href="{{ route('knowledge.info') }}">
                <img src="{{ asset('assets/images/image-02.png') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <p class="card-text">Hiểu về không gian mạng.</p>
                </div>
              </a> --}}
              <span class="cyber-news__more">
                Hiểu về Không gian mạng
              <a href="{{ route('knowledge') }}">Xem thêm
                  <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i>
                </a>
              </span>
            </div>
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
                    <a href="{{ route('knowledge') }}" class="btn btn-secondary d-block d-sm-inline m-auto">TÌM HIỂU THÊM</a>
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
                    <span><span class="value">706</span>.435</span>
                    <p>vụ báo cáo về hình ảnh<br/>xâm hại tình dục trẻ em trên mạng<br/>tại Việt Nam trong năm 2018</p>
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
                    <span>BẠN ĐÃ CÓ NHỮNG BIỆN PHÁP GÌ</span>
                    <br/>
                    <span>ĐỂ BẢO VỆ CON EM TRÊN KHÔNG GIAN MẠNG</span>
                </h3>
                <div class="row mt-3 mb-3">
                    <div class="col-8 amai" >
                        <p class="mb-sm-3 mb-md-5">
                        Ngắt kết nối mạng?<br/>
                            Cấm đoán con em sử dụng mạng internet?<br/>
                            Sử dụng phần mềm theo dõi hoạt động mạng của con?<br/>
                            Bạn đã và đang làm gì để bảo vệ con trên không gian mạng?<br/>
                            Hãy cùng CyberKid tìm hiểu về những giải pháp giúp con vui chơi an toàn trên không gian mạng.
                        </p>
                        <a href="{{route('blog')}}" class="float-left btn btn-primary d-block d-sm-inline m-auto">TÌM HIỂU THÊM</a>
                    </div>
                    <div class="col-4">
                        <img class="image-question" src="{{ asset('/assets/images/question.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .image-question {
            width: 200px;
        }
        @media (max-width: 500.98px) {
            .image-question {
                width: 100px;
            }
            .amai {
                font-size: 9px;
            }
            .cyber-question__title {
                font-size: 18px;
            }
            .amai button {
                font-size: 15px;
            }
        }
    </style>
@endsection
