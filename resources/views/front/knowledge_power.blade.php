@extends('front.app')

@section('content')
    <div class="container cyber-container slide-top mb-5">
        <div class="cyber-blog mt-5 row">
            <div class="col-md-8">
                <div class="row">
                    <h4 class="cyber-title behind-cyan text-center text-md-center" style="margin-left: 5%; font-size: 35px">
                        <span>Quyền trẻ em trên không gian mạng</span>
                    </h4>
                    <img src="{{ asset('assets/images/image-01.png') }}" alt="" class="img-fix">
                    <div class="text-15px">
                        <p>
                            <b>1. Được bảo vệ, tiếp cận thông tin và giữ bí mật cá nhân</b>
                        </p>
                        <p>
                            Trẻ em có quyền được bảo vệ, tiếp cận thông tin, tham gia hoạt động xã hội,
                            vui chơi, giải trí, giữ bí mật cá nhân, đời sống riêng tư và các quyền khác khi
                            tham gia trên không gian mạng.
                        </p>
                        <p>
                            <b>2. Doanh nghiệp có trách nhiệm kiểm soát nội dung, ngăn chặn việc chia sẻ
                                và xoá bỏ nội dung xâm phạm quyền trẻ em</b>
                        </p>
                        <p>
                            Chủ quản hệ thống thông tin, doanh nghiệp cung cấp dịch vụ trên mạng
                            viễn thông, internet, các dịch vụ gia tăng trên không gian mạng có trách
                            nhiệm kiểm soát nội dung thông tin trên hệ thống thông tin hoặc trên dịch
                            vụ do doanh nghiệp cung cấp để không gây nguy hại cho trẻ em, xâm
                            phạm đến trẻ em, quyền trẻ em; ngăn chặn việc chia sẻ và xóa bỏ thông tin
                            có nội dung gây nguy hại cho trẻ em, xâm phạm đến trẻ em, quyền trẻ em.
                        </p>
                        <p>
                            <b>3. Mọi cá nhân, tổ chức trên không gian mạng có trách nhiệm trong bảo
                                đảm quyền của trẻ em trên không gian mạng</b>
                        </p>
                        <p>
                            Cơ quan, tổ chức, cá nhân tham gia hoạt động trên không gian mạng có
                            trách nhiệm phối hợp với cơ quan có thẩm quyền trong bảo đảm quyền của
                            trẻ em trên không gian mạng, ngăn chặn thông tin có nội dung gây nguy hại
                            cho trẻ em theo quy định của luật này và pháp luật về trẻ em.
                        </p>
                        <p>
                            <b>
                                4. Cơ quan, tổ chức, cha mẹ, giáo viên, người chăm sóc trẻ em và cá nhân
                                khác liên quan có trách nhiệm bảo đảm quyền của trẻ em khi tham gia
                                không gian mạng
                            </b>
                        </p>
                        <p>
                            Cơ quan, tổ chức, cha mẹ, giáo viên, người chăm sóc trẻ em và cá nhân
                            khác liên quan có trách nhiệm bảo đảm quyền của trẻ em, bảo vệ trẻ em
                            khi tham gia không gian mạng theo quy định của pháp luật về trẻ em.
                        </p>
                        <p>
                            <b>
                                5. Cơ quan chức năng có trách nhiệm phòng ngừa, phát hiện, ngăn chặn, xử
                                lý nghiêm hành vi sử dụng không gian mạng xâm phạm quyền trẻ em.
                            </b>
                        </p>
                        <p>
                            Lực lượng chuyên trách bảo vệ an ninh mạng và các cơ quan chức năng có
                            trách nhiệm áp dụng biện pháp để phòng ngừa, phát hiện, ngăn chặn, xử lý
                            nghiêm hành vi sử dụng không gian mạng gây nguy hại cho trẻ em, xâm
                            phạm đến trẻ em, quyền trẻ em.
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-md-4 slide-top">
                <h3 class="cyber-title cyber-about__title behind-cyan text-center">
                    <span>CHUYÊN MỤC</span>
                </h3>
                <ul class="cyber-blog__list list-group">
                    @foreach($categories as $category)
                        <a class="cyber-blog__list-item list-group-item" href="{{ route('category', $category->id) }}">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </ul>
                <h3 class="cyber-title cyber-about__title behind-cyan text-center">
                    <span>BÀI VIẾT MỚI</span>
                </h3>
                <ul class="cyber-blog__list list-group">
                    @foreach($hotBlogs as $hotBlog)
                        <a class="cyber-blog__list-item list-group-item" href="{{ route('blog.show', $hotBlog->id) }}">
                            {{ $hotBlog->title }}
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <style>
        .img-fix {
            max-width: 95%;
            height: auto;
            margin-bottom: 20px;
        }
        .text-15px {
            font-size: 15px;
            margin-bottom: 0px;
        }
    </style>
@endsection
