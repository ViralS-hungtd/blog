@extends('front.app')

@section('content')
    <div class="container cyber-container slide-top mb-5">
        <div class="cyber-blog mt-5 row">
            <div class="col-md-8">
                <div class="row">
                    <h4 class="cyber-title behind-cyan text-center text-md-center" style="margin-left: 10%">
                        <span>Hiểu về không gian mạng</span>
                    </h4>
                    <img src="{{ asset('assets/images/image-02.png') }}" alt="" class="img-fix">
                    <h4 class="cyber-title behind-cyan text-center" style="margin-left: 30%">
                        <span class="text-small">Mạng Internet là gì ?</span>
                    </h4>
                    <p class="cyber-know-text">
                        Có thể khẳng định Internet là một trong số ít những thứ con người tạo ra mà lại
                        không thực sự hiểu về bản chất của nó.
                        Mạng Internet do Advanced Research Projects Agency (ARPA) của chính
                        phủ Hoa Kỳ phát minh vào năm 1969, ban đầu được gọi ARPANet. Mục
                        đích sơ khai của internet là tạo một mạng cho phép người dùng máy tính
                        nghiên cứu tạo một trường đại học có thể giao tiếp với một máy tính nghiên cứu
                        tại các trường đại học khác. Cho đến nay, Internet đã trở thành một cơ sở
                        công cộng, cùng tham gia và tự duy trì, cho phép hàng trăm triệu người trên
                        toàn thế giới cùng lúc truy cập. Một trong những các tiện ích phổ thông của
                        Internet là hệ thống thư điện tử (email), trò chuyện trực tuyến, công cụ tìm
                        kiếm, các dịch vụ thương mại điện tử (như mua sắm hàng hoá, chữa bệnh
                        từ xa, tư vấn tâm lý từ xa, đào tạo trực tuyến - online.)
                    </p>
                    <h4 class="cyber-title behind-cyan text-center" style="margin-left: 30%">
                        <span class="text-small">06 đặc tính của Internet</span>
                    </h4>
                    <div class="col-sm-6 row">
                        <div class="col-sm-4">
                            <img src="{{ asset('assets/images/kgm-02.png') }}" alt="" class="img-fix">
                        </div>
                        <div class="col-sm-8">
                            <p>Đặc tính công khai</p>
                            <p class="text-10px">
                                Internet dành cho tất cả mọi người, bất kì ai cũng có
                                thể truy cập internet để chia sẻ và tìm kiếm thông tin
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 row">
                        <div class="col-sm-4">
                            <img src="{{ asset('assets/images/kgm-05.png') }}" alt="" class="img-fix">
                        </div>
                        <div class="col-sm-8">
                            <p>Đặc tính ẩn danh</p>
                            <p class="text-10px">
                                Do không gặp trực tiếp, chúng ta không thể biết danh tính thực của
                                người chúng ta đang giao tiếp. Người xấu có thể nợ dụng đặc điểm này
                                để giả danh một ai đó khác so với con người thực tế của họ
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 row">
                        <div class="col-sm-4">
                            <img src="{{ asset('assets/images/kgm-03.png') }}" alt="" class="img-fix">
                        </div>
                        <div class="col-sm-8">
                            <p>Đặc tính vĩnh viễn</p>
                            <p class="text-10px">
                                Các thông tin , hình ảnh một khi đã được tải lên sẽ tồn tại vĩnh viễn, dù chúng
                                ta có cố gắng xoá chúng đi.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 row">
                        <div class="col-sm-4">
                            <img src="{{ asset('assets/images/kgm-06.png') }}" alt="" class="img-fix">
                        </div>
                        <div class="col-sm-8">
                            <p>Đặc tính thông tin</p>
                            <p class="text-10px">
                                Mạng internet là một không gian công cộng, bất kỳ ai
                                cũng có thể đăng tải hay chia sẻ thông tin, vì vậy
                                không phải tất cả thông tin trên Internet đều chính xác
                                hoặc đáng tin cậy
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 row">
                        <div class="col-sm-4">
                            <img src="{{ asset('assets/images/kgm-04.png') }}" alt="" class="img-fix">
                        </div>
                        <div class="col-sm-8">
                            <p>Đặc tính kết nối</p>
                            <p class="text-10px">
                                Internet cho phép chúng ta giao tiếp, làm việc với nhiều người khác nhau
                                ở khắp nơi trên thế giới.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 row">
                        <div class="col-sm-4">
                            <img src="{{ asset('assets/images/kgm-07.png') }}" alt="" class="img-fix">
                        </div>
                        <div class="col-sm-8">
                            <p>Đặc tính giới hạn và sự tôn trọng</p>
                            <p class="text-10px">
                                Văn hoá ứng xử ở ngoài đời thực cũng cần được áp dụng
                                trên mạng. Hãy đặt ra những nguyên tắc cho bản thân, tôn
                                trọng và giúp đỡ người khác trên Internet.
                            </p>
                        </div>
                    </div>
                    <h4 class="cyber-title behind-cyan text-center" style="margin-left: 30%">
                        <span class="text-small">06 rủi ro trên không gian mạng</span>
                    </h4>
                    <div class="col-sm-6">
                        <img src="{{ asset('assets/images/kgm-08.png') }}" alt="" class="img-fix">
                    </div>
                    <div class="col-sm-6">
                        <p class="cyber-title behind-yellow text-center text-small">
                            <span>NGUY CƠ BỊ ĐÁNH CẮP THÔNG TIN</span>
                        </p>
                        <p class="text-15px">
                            Có thể bạn không để ý, nhưng chúng ta lưu giữ rất nhiều những thông tin
                            trên mạng Internet. Từ mật khẩu cá nhân, các hình ảnh đời tư tới số tài
                            khoản ngân hàng khi bạn thanh toán các mặt hàng online - và tất cả những
                            thông tin đấy đều có nguy cơ bị đánh cắp
                        </p>
                        <p class="cyber-title" style="font-size: 25px">
                            <span>VẬY LÀM SAO ĐỂ XỬ LÝ?</span>
                        </p>
                        <p class="text-15px"><b>Cài đặt mật khẩu đủ mạnh</b></p>
                        <p class="text-15px">- Sử dụng mật khẩu khó đoán : Mật khẩu của bạn nên
                        có ít nhất 6 kí tự - bao gồm cả số, chữ và các kí tự đặc biệt.</p>
                        <p class="text-15px">- Với mỗi tại khoản khác nhau, hãy cài đặt các mật khẩu
                        khác nhau.</p>
                        <p class="text-15px">- Không chia sẻ mật khẩu với người khác...</p>
                    </div>
                    <div class="col-sm-12">
                        <p class="text-15px"><b>Cảnh báo tính năng đăng nhập và bảo vệ 2 lớp</b></p>
                        <p class="text-15px">- Cài đặt chức năng cảnh báo khi có người lạ đăng nhập
                        vào tài khoản cá nhân của bạn. Thông tin thông báo này có thể được chuyển tới
                        điện thoại hoặc mail cá nhân của bạn.</p>
                        <p class="text-15px">- Tính năng xác thực 2 lớp: Cài đặt chức năng yêu cầu
                        bạn nhập mã xác thực khi đăng nhập vào các tài khoản trên mạng internet.</p>
                    </div>
                    <div class="col-sm-12">
                        <p class="text-15px"><b>Đăng nhập an toàn</b></p>
                        <p class="text-15px">- Hạn chế sử dụng tài khoản Facebook hay Google để đăng nhập các nền tảng khác.</p>
                        <p class="text-15px">- Hạn chế lựa chọn "lưu mật khẩu" khi đăng nhập.</p>
                        <p class="text-15px">- Hạn chế sử dụng thiết bị công cộng, hoặc lưu ý truy xuất tài khoản khi sử dụng thiết bị công cộng.</p>
                    </div>
                    <div class="col-sm-7" style="margin-top: 20px">
                        <p class="cyber-title behind-yellow text-center text-small">
                            <span>NGUY CƠ BỊ LỪA ĐẢO</span>
                        </p>
                        <p class="text-15px">Vì chúng ta không thể biết được người đang nói chuyện với mình trên
                            mạng Internet thực sự là ai, không chỉ có trẻ em mà người lớn chúng ta
                            cũng có thể trở thành nạn nhân của những vụ lừa đảo trên không gian
                            mạng. bị mất thông tin cá nhân, bị lừa mua hàng giả, lừa đảo tình cảm,
                            v...v..</p>
                        <p class="cyber-title" style="font-size: 25px">
                            <span>VẬY LÀM SAO ĐỂ XỬ LÝ?</span>
                        </p>
                        <p class="text-15px">• Luôn nhớ rằng thông tin của chúng ta là rất quan trọng và không thể cho
                            đi dễ dàng</p>
                        <p class="text-15px">• Luôn kiểm tra website cũng như thông tin, uy tín của nhà cung cấp trước
                            khi thực hiện các giao dịch trực tuyến</p>
                        <p class="text-15px">• Đừng vội vàng tin những lời nhờ vả hoặc đe doạ trên mạng xã hội</p>
                        <p class="text-15px">• Chia sẻ và nhờ tới sự trợ giúp của người thân, bạn bè hay thầy cô khi đối
                            phương làm bạn cảm thấy không an toàn. Gọi công an hoặc gọi tới 111 -
                            Tổng đài Quốc gia Trẻ em để được hỗ trợ khi cần thiết.</p>
                    </div>
                    <div class="col-sm-5" style="margin-top: 20px">
                        <img src="{{ asset('assets/images/kgm-09.png') }}" alt="" class="img-fix">
                    </div>
                    <div class="col-sm-5" style="margin-top: 20px">
                        <img src="{{ asset('assets/images/kgm-10.png') }}" alt="" class="img-fix">
                    </div>
                    <div class="col-sm-7" style="margin-top: 20px">
                        <p class="cyber-title behind-yellow text-center text-small">
                            <span>NGUY CƠ NGHIỆN TRÒ CHƠI ĐIỆN TỬ</span>
                        </p>
                        <p class="text-15px">Các game online không xấu, nhưng chỉ khi chúng ta biết lựa chọn trò
                            chơi phù hợp và chơi có chừng mực. Bản thân các game online có thể
                            ẩn chứa một số rủi ro như chứa virus hay những thông tin quảng cáo
                            không lành mạnh, bị xâm hại quyền riêng tư hoặc bị tiếp cận bởi kẻ
                            xấu, hay gây ra những xích mích, bạo lực không đáng có.</p>
                        <p class="cyber-title" style="font-size: 25px">
                            <span>VẬY LÀM SAO ĐỂ XỬ LÝ?</span>
                        </p>
                        <p class="text-15px">• Xác định những trò chơi phù hợp với bản thân, bạn đừng ngại hỏi ý
                            kiến của người thân, bố mẹ hay anh chị lớn hơn để có được sự tư vấn
                            cần thiết nhé!</p>
                        <p class="text-15px">• Không chia sẻ thông tin cá nhân, tài khoản với người khác.</p>
                        <p class="text-15px">• Báo cáo nhà cung cấp dịch vụ khi gặp các thông tin, quảng cáo có
                            nội dung không phù hợp.</p>
                        <p class="text-15px">• Không đồng ý gặp mặt các game thủ khác ngoài đời thực.</p>
                        <p class="text-10px"><i>Hãy là một người thông thái và văn minh khi tham gia các game trực tuyến bạn nhé!</i></p>
                    </div>
                    <div class="col-sm-7" style="margin-top: 20px">
                        <p class="cyber-title behind-yellow text-center text-small">
                            <span>NGUY CƠ TIẾP CẬN VÀ CHIA SẺ</span>
                        </p>
                        <p class="cyber-title behind-yellow text-center text-small">
                            <span>THÔNG TIN SAI LỆCH</span>
                        </p>
                        <p class="text-15px">Cùng với sự can thiệp của chính quyền, rất nhiều các tin giả, các tin sai
                            lệch đã không còn tồn tại trên mạng xã hội; tuy nhiên điều đó cũng
                            không đồng nghĩa với việc mọi thông tin bạn thấy đều chính xác.</p>
                        <p class="cyber-title" style="font-size: 25px">
                            <span>VẬY LÀM SAO ĐỂ XỬ LÝ?</span>
                        </p>
                        <p class="text-15px">• Đừng vội tin tưởng những tin tức không xác thực hoặc những tin tức
                            từ nguồn tin không chính thống.</p>
                        <p class="text-15px">• Hãy luôn kiểm tra xem ai là tác giả của tin được chia sẻ, đường dẫn
                            của thông tin liệu có chính xác hay không.</p>
                        <p class="text-15px">• Kiểm tra những nguồn thông tin khác nhau, nếu nhiều người chia sẻ
                            khác nhau, thậm chí đối lập về cùng một sự việc, thì rất có khả năng sự
                            việc đó không chính xác.</p>
                        <p class="text-15px">• Một số tin giả sử dụng hình ảnh thật để lừa đảo người đọc. Bạn nên
                            kiểm tra nguồn gốc của hình ảnh đó để có thể đánh giá mức độ tin cậy
                            của thông tin.</p>
                    </div>
                    <div class="col-sm-5" style="margin-top: 20px">
                        <img src="{{ asset('assets/images/kgm-11.png') }}" alt="" class="img-fix">
                    </div>
                    <div class="col-sm-5" style="margin-top: 20px">
                        <img src="{{ asset('assets/images/kgm-12.png') }}" alt="" class="img-fix">
                    </div>
                    <div class="col-sm-7" style="margin-top: 20px">
                        <p class="cyber-title behind-yellow text-center text-small">
                            <span>NGUY CƠ XEM CÁC ẤN PHẨM</span>
                        </p>
                        <p class="cyber-title behind-yellow text-center text-small">
                            <span>KHÔNG PHÙ HỢP</span>
                        </p>
                        <p class="text-15px">Một số website giới hạn độ tuổi sẽ chỉ cho phép bạn truy cập khi
                            chứng minh mình đã hơn 18 tuổi.
                        </p>
                        <p class="text-15px">Tuy nhiên cũng có một số trang web không thể kiểm soát được điều
                            này, hoặc những đường link độc hại cũng có thể dẫn bạn tới những
                            website, ấn phẩm không phù hợp như hình ảnh khiêu dâm, nội dung
                            có tính bạo lực, lăng mạ người khác, hoặc ảnh hưởng xấu đến tâm lý;
                            các nội dung đánh bạc, cá cược.
                        </p>
                        <p class="cyber-title" style="font-size: 25px">
                            <span>VẬY LÀM SAO ĐỂ XỬ LÝ?</span>
                        </p>
                        <p class="text-15px">• Chặn những người chia sẻ hoặc những thông tin không phù hợp.</p>
                        <p class="text-15px">
                            • Báo cáo những nội dung không phù hợp với những nhà cung cấp
                            dịch vụ (như nút report trên Facebook chẳng hạn)
                        </p>
                        <p class="text-15px">
                            • Chia sẻ với người thân hoặc người bạn tin tưởng về những nội dung
                            bạn gặp phải, cảm giác của bạn và cùng tìm cách giải quyết.
                        </p>
                    </div>
                    <div class="col-sm-7" style="margin-top: 20px">
                        <p class="cyber-title behind-yellow text-center text-small">
                            <span>NGUY CƠ KẾT BẠN KHÔNG</span>
                        </p>
                        <p class="cyber-title behind-yellow text-center text-small">
                            <span>PHÙ HỢP</span>
                        </p>
                        <p class="text-15px">Mạng Internet cho phép bạn kết bạn với bất kì ai trên thế giới. Tuy
                            nhiên, bạn sẽ chẳng thế biết người mình vẫn hay nói chuyện trên mạng
                            có đúng là họ ngoài đời thật không. Do đó, nếu kết bạn tràn lan, bạn có
                            thể sẽ gặp phải những người xấu.
                        </p>
                        <p class="cyber-title" style="font-size: 25px">
                            <span>VẬY LÀM SAO ĐỂ XỬ LÝ?</span>
                        </p>
                        <p class="text-15px">• Hãy luôn kiểm tra xem chúng ta đã gặp người này ngoài đời chưa,
                            kiểm tra danh sách bạn chung và kiểm chứng những thông tin họ đưa
                            lên mạng xã hội.
                        </p>
                        <p class="text-15px">
                            • Luôn xác định rủi ro khi có các mối quan hệ bạn bè hay lãng mạn ảo
                            trên mạng xã hội.
                        </p>
                        <p class="text-15px">
                            • Ghi nhớ các nguyên tắc bảo vệ thông tin cá nhân: Không chia sẻ các
                            thông tin riêng, các hình ảnh đời tư, v..v...
                        </p>
                        <p class="text-15px">
                            • Ngừng cuộc nói chuyện khi cảm thấy nghi ngờ hoặc không an toàn:
                            từ chối, chặn người đó, hoặc nói với người thân và yêu cầu giúp đỡ ngay
                            khi cần.
                        </p>
                    </div>
                    <div class="col-sm-5" style="margin-top: 20px">
                        <img src="{{ asset('assets/images/kgm-13.png') }}" alt="" class="img-fix">
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
        }
        .text-small {
            font-size: 25px;
            text-align: center !important;
        }
        .cyber-know-text {
            max-width: 95%;
        }
        .text-10px {
            font-size: 11px;
        }
        .text-15px {
            font-size: 15px;
            margin-bottom: 0px;
        }
        .cyber-title.behind-yellow.text-center.text-small {
            font-size: 24px;
            text-align: center !important;
        }
    </style>
@endsection
