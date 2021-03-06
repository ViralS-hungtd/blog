@extends('front.app')

@section('content')
    <div class="container cyber-container slide-top mb-5">
        <div class="cyber-blog mt-5 row">
            <div class="col-md-6">
                <div class="row">
                    <h4 class="cyber-title behind-cyan text-center" style="margin-left: 10%">
                        <span>Quyền trẻ em trên không gian mạng</span>
                    </h4>
                    <img src="{{ asset('assets/images/image-01.png') }}" alt="" class="img-fix">
                    <p class="cyber-know-text">
                        <b>1.Được bảo vệ, tiếp cận thông tin và giữ bí mật cá nhân</b>
                    </p>
                    <p class="cyber-know-text">
                        Trẻ em có quyền được bảo vệ, tiếp cận thông tin, tham gia hoạt động xã hội vui chơi ,giải trí , giữ bí mật đợi sống cá nhân, đời sống riêng tư và các quyền khác khi...
                    </p>
                    <a class="cyber-blog__more" href="{{ route('knowledge.power') }}">Xem thêm
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <h4 class="cyber-title behind-cyan text-center" style="margin-left: 22%">
                        <span>Hiểu về không gian mạng</span>
                    </h4>
                    <img src="{{ asset('assets/images/image-02.png') }}" alt="" class="img-fix">
                    <div class=""> </div>
                    <p class="cyber-know-text">
                       Có thể khẳng định Internet là một trong số ít những thứ con người tạo ra mà lại không thực sự hiểu về bản chất của nó...
                    </p>
                    <a class="cyber-blog__more" href="{{ route('knowledge.info') }}">Xem thêm
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <style>
        .img-fix {
            max-width: 95%;
            height: auto;
        }
        .cyber-title.behind-cyan.text-center span {
            font-size: 25px;

        }
        .cyber-know-text {
            max-width: 95%;
        }
    </style>
@endsection
