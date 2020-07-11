<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">--}}
    <meta name="description"
          content="CyberKid là tổ chức phi chính phủ - thông qua việc hợp tác với Chính phủ, Doanh nghiệp, Nhà trường và cha mẹ để biến không gian mạng trở thành một thế giới an toàn và tuyệt vời cho mọi đứa trẻ tại Việt Nam và khu vực.">
    <script src="https://kit.fontawesome.com/62018c92ba.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/stylesheet/main1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/stylesheet/toastr.min.css') }}">
    <title>Về Cyber Kid | Cyber Kid</title>
</head>

<body class="skin-blue sidebar-mini">
<div class="cyber-kid">
    <div class="container cyber-container fade-in">
        <div class="cyber-header">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img class="cyber-header__logo" src="{{ asset('assets/images/logo.png')  }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
              <i class="fas fa-bars"></i>
            </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item {{ \Request::is('ve-cyberkid') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('about') }}">Về Cyberkid</a>
                        </li>
                        <li class="nav-item {{ \Request::is('an-toan-tren-khong-gian-mang') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('knowledge') }}">An toàn trên không gian mạng</a>
                        </li>
                        <li class="nav-item {{ \Request::is('blog') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item {{ \Request::is('khoa-hoc') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('course') }}">Khóa học 3D design</a>
                        </li>
                        <li class="nav-item {{ \Request::is('su-kien') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('event') }}">Tin tức & Sự kiện</a>
                        </li>
                        <li class="nav-item"{{ \Request::is('lien-he') ? 'active' : '' }}>
                            <a class="nav-link" href="{{ route('contact') }}">Liên hệ</a>
                        </li>
                    </ul>
                    <form method="GET" action="{{}}" class="cyber-header__form d-flex d-lg-block">
                        <input class="form-control cyber-header__search-input" placeholder="Tìm kiếm...">
                        <button class="btn btn-search-mobile d-block d-lg-none ml-2" type="submit">Tìm kiếm</button>
                        <button class="btn btn-search cyber-header__search-btn">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    @yield('content')
    <div class="cyber-container-fluid cyber-footer__background">
        <div class="container cyber-container fade-in">
            <div class="cyber-footer row">
                <div class="col-lg-6">
                    <h3 class="cyber-footer__title mb-4 mb-lg-0">
              <span>Đăng kí email để nhận những thông tin mới nhất
                về an toàn trên không gian mạng từ CyberKid</span>
                    </h3>
                </div>
                <div class="col-lg-6">
                    <form method="POST" class="register-form">
                        @csrf
                        <div class="form-row">
                            <div class="col-12 mb-3">
                                <input class="form-control" name="name" placeholder="Tên" type="text">
                                <p style="color: red" class="validate validate_name"></p>
                            </div>
                            <div class="col-12 mb-3">
                                <input class="form-control" name="email" placeholder="Email" type="text">
                                <p style="color: red" class="validate validate_email"></p>
                            </div>
                            <div class="col-12 text-center text-sm-left">
                                <button class="register-btn btn btn-primary">ĐĂNG KÝ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>
<script src="{{ asset('assets/javascript/main.js') }}"></script>
<script src="{{ asset('assets/javascript/toastr.min.js') }}"></script>
<script>
    $(document).on("click", ".register-btn",function() {
        event.preventDefault();
        let data = $('.register-form').serializeArray();
        $.ajax({
            type: "POST",
            url: '{{ route('store.customer')  }}',
            data: data,
            success: (response) => {
                toastr.success('Đăng kí thành công!');
                $('.validate').empty();
                $('.register-form').trigger("reset");
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
@stack('scripts')
@yield('scripts')
</body>
</html>
