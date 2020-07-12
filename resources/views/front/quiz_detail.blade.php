
@extends('front.app')

@section('content')
    <div class="container cyber-container slide-top my-5">
        <div class="cyber-quiz row">
            <div class="col-12 mt-2" id="iframe-quiz-box">
                <div id="carouselExampleControls" class="carousel slide iframe-quiz" data-ride="carousel">
                    <div class="carousel-inner">
                        <form class="quiz-form">
                            @foreach($questions as $key1 => $question)
                                <div class="carousel-item {{ $key1 == 0 ? 'active' : '' }} step-{{$key1}}" data-step="{{ $key1 }}" id="{{ $key1 == 9 ? 'final-step' :  ''}}">
                                    <h4><b>{{ $question->question}}</b></h4>
                                    @php
                                        $answers = json_decode($question->answer , true);
                                    @endphp
                                    @foreach($answers as $key => $answer)
                                        <p><input type="radio" name="answer[{{ $key1 }}]" value="{{$key}}"> {{ $answer }}</p>
                                    @endforeach
                                </div>
                            @endforeach
                            <div class="carousel-item final-step step-10">
                                <h4><b>Vui lòng để lại thông tin cá nhân của bạn để cập nhật những thông tin mới nhất từ CyberKid</b></h4>
                                <div class="form-group row mt-3">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Họ và tên : </label>
                                    <div class="col-sm-7">
                                        <input type="text" name="name_customer" class="form-control" placeholder="Họ và tên">
                                        <small style="color: red" class="validate validate_name_customer"></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Nghề nghiệp :</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="job_customer" class="form-control"  placeholder="Nghề nghiệp">
                                        <small style="color: red" class="validate validate_job_customer"></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Email :</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="email_customer" class="form-control" placeholder="email@gmail.com">
                                        <small style="color: red" class="validate validate_email_customer"></small>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-result float-md-right" aria-expanded="true">XEM KẾT QUẢ</button>
                            </div>
                            <a class="carousel-control-next" id="next-button" role="button" data-slide="next">
                                <img src="{{ asset('assets/images/arrow.png') }}"  role="button" data-slide="next" class="arrow" >
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </form>
                    </div>
                </div>
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
@section('scripts')
    <script>
        $('.carousel').carousel({
            interval: false
        });
        $(document).on("click", ".btn-result",function() {
            event.preventDefault();
            let data = $('.quiz-form').serializeArray();
            $.ajax({
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

        $(document).on("click", "#next-button",function() {
            let step = $('.active').data('step');
            if($(`input[name='answer[${step}]']:checked`).length == 0) {
                toastr.error('Chọn 1 đáp án !')
            } else {
                $(`.step-${step}`).removeClass('active');
                $(`.step-${step + 1}`).addClass('active');
                if (step == 9) {
                    $(this).css('display', 'none');
                } else {
                    $(this).css('display', 'flex');
                }
            }
        });
    </script>
@endsection
