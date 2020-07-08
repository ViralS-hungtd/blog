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
            <div class="col-12 text-center">
                <img src="{{ asset('assets/images/family.png') }}" alt="" class="img-fluid mb-4">
                <p>Hãy cùng CyberKid làm bài trắc nghiệm dưới đây để tìm hiểu xem<br/>
                    bạn đã thực sự hiểu con trên không gian mạng chưa nhé!
                </p>
                <a href="#" data-toggle="collapse" data-target="#iframe-quiz-box" class="btn btn-info doing-quiz">LÀM
                    TRẮC NGHIỆM</a>
            </div>
            <div class="col-12 mt-2 collapse" id="iframe-quiz-box">
                <div id="carouselExampleControls" class="carousel slide iframe-quiz" data-ride="carousel">
                    <div class="carousel-inner">
                        <form class="quiz-form">
                            @csrf
                            @foreach($questions as $key1 => $question)
                                <div class="carousel-item {{ $key1 == 0 ? 'active' : '' }}">
                                    <h4><b>{{ $question->question}}</b></h4>
                                    @php
                                        $answers = json_decode($question->answer , true);
                                    @endphp
                                    @foreach($answers as $key => $answer)
                                        <p><input type="radio" name="answer[{{ $key1 }}]" value="{{$key}}" {{ $key == array_key_first($answers) ? 'checked' : '' }}> {{ $answer }}</p>
                                    @endforeach
                                </div>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">>>
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            @endforeach
                                <div class="carousel-item">
                                    <h4><b>Vui lòng để lại thông tin cá nhân của bạn để cập nhật những thông tin mới nhất từ CyberKid</b></h4>
                                    <p><span>Họ và tên :   </span><input type="text" name="name_customer"></p>
                                    <p style="color: red" class="validate validate_name_customer"></p>
                                    <p><span>Nghề nghiệp : </span><input type="text" name="job_customer"></p>
                                    <p style="color: red" class="validate validate_job_customer"></p>
                                    <p><span>Email :       </span><input type="text" name="email_customer"></p>
                                    <p style="color: red" class="validate validate_email_customer"></p>
                                    <button type="submit" class="btn btn-result" aria-expanded="true">XEM KẾT QUẢ</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .iframe-quiz {
            width: 50%;
            height: 380px;
            padding-top: 50px;
            margin-left: 25%;
        }

        .btn-result {
            background-color: #05a7ef;
            color: white;
        }

        @media (max-width: 500px) {
            .iframe-quiz {
                width: 100%;
                height: 235px;
                padding-top: 20px;
            }
        }
    </style>
@endsection
@section('scripts')
    <script>
        $('.carousel').carousel({
            interval: false
        });
        $(document).on("click", ".btn-result",function() {
            event.preventDefault();
            let data = $('.quiz-form').serializeArray();
            $.ajax({
                type: "POST",
                url: '{{ route('store.quiz')  }}',
                data: data,
                success: (response) => {
                    $('.quiz-form').html(response);
                },
                error : (errors) => {
                    let messages = errors.responseJSON.errors;
                    $.each(messages, function(key,val) {
                        $(`.validate_${key}`).html(val);
                    });
                }
            });
        });
    </script>
@endsection
