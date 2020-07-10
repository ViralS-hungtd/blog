@extends('front.app')

@section('content')
    <div class="container cyber-container slide-top my-5">
        <div class="cyber-quiz row">
            <div class="col-12">
                <h3 class="cyber-title d-none d-md-block cyber-about__title behind-cyan text-center">
                    <span>Bạn hiểu con bạn tới đâu?</span>
                </h3>
                <h3 class="cyber-title d-block d-md-none cyber-about__title behind-cyan text-center">
                    <span>Bạn hiểu con bạn</span>
                    <br/>
                    <span> tới đâu?</span>
                </h3>
            </div>
            <div class="col-12 text-center font-size-text">
                <img src="{{ asset('assets/images/family.png') }}" alt="" class="img-fluid mb-4">
                <p>Hãy cùng CyberKid làm bài trắc nghiệm dưới đây để tìm hiểu xem<br/>
                    bạn đã thực sự hiểu con trên không gian mạng chưa nhé!
                </p>
                <a href="{{ route('quiz.show') }}" class="btn btn-info doing-quiz">LÀM
                    TRẮC NGHIỆM</a>
            </div>
        </div>
    </div>
    <style>
        img.arrow {
            width: 70px;
        }
        .iframe-quiz {
            width: 80%;
            margin: auto;
            height: 400px;
        }

        .btn-result {
            background-color: #05a7ef;
            color: white;
        }
        .carousel-control-next,.carousel-control-next:hover  {
            color: #0e111c;
        }
        #iframe-quiz-box {
            padding: 5%;
        }

        .carousel-inner {
            position: initial;
        }
        .carousel-control-next {
            top: initial;
        }
        @media (max-width: 500px) {
            .iframe-quiz {
                width: 100%;
                height: 500px;
                padding-top: 20px;
            }
            img.arrow {
                width: 50px;
            }
            .font-size-text {
                font-size: 12px;
            }
        }
    </style>
@endsection
