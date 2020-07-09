@extends('front.app')

@section('content')
    <div class="container cyber-container slide-top">
        <div class="cyber-blog my-5 row">
            <div class="col-md-8">
                <h3 class="cyber-blog__blog-title behind-cyan text-center">
                    {{ $blog->title }}
                </h3>
                <div class="cyber-blog__author-info">
                    <p class="mr-5">{{ $blog->author }}</p>
                    <p>{{ date('d-m-Y', strtotime($blog->date)) }}</p>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="d-flex flex-lg-column cyber-blog__social">
                            <a href="#" class="far fa-comment-dots mb-lg-2 mr-2 mr-lg-0"></a>
                            <a href="#" class="fas fa-home mb-lg-2 mr-2 mr-lg-0"></a>
                            <a href="#" class="fab fa-facebook mb-lg-2 mr-2 mr-lg-0"></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        {!! $blog->content !!}
                        <div class="cyber-blog__hashtag">
                            @foreach($blog->tags as $tag)
                                <span class="badge badge-pill badge-info">{{ $tag->name }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 my-5">
                        <div class="cyber-blog__comment">
                            <div class="cyber-blog__comment-top">
                                <i class="far fa-comment-dots"></i>
                                Bình luận
                            </div>
                            <div class="cyber-blog__comment-content">
                                <div class="cyber-blog__comment-item">
                                    <img class="cyber-blog__comment-avatar" src="/assets/images/family.png" alt="">
                                    <textarea class="cyber-blog__comment-textarea"></textarea>
                                </div>
                                <p class="validate-comment" style="color: red; margin-left: 70px"></p>
                                <div class="cyber-blog__comment-action">
                                    @if(\Auth::user())
                                        <button class="btn btn-info comment-btn">Gửi bình luận</button>
                                    @else
                                        <a target="_blank" href="{{ url('/auth/redirect/facebook') }}" class="btn btn-info">Gửi bình luận</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="cyber-blog__related">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="cyber-blog__blog-title behind-cyan text-center">
                                        Có thể bạn quan tâm
                                    </h3>
                                </div>
                                @foreach($relatedBlogs as $relatedBlog)
                                    <div class="col-lg-4">
                                        <a href="{{ route('blog.show', $relatedBlog->id) }}"
                                           class="cyber-blog__related-item">
                                            <img src="{{ asset($relatedBlog->image) }}" alt=""
                                                 class="cyber-blog__related-item-img img-fluid">
                                            <p class="cyber-blog__related-item-text">
                                                {{ $relatedBlog->title }}
                                            </p>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 slide-top">
                <h3 class="cyber-title cyber-about__blog-title behind-cyan text-center">
                    <span>CHUYÊN MỤC</span>
                </h3>
                <ul class="cyber-blog__list list-group">
                    @foreach($categories as $category)
                        <a class="cyber-blog__list-item list-group-item" href="{{ route('knowledge.power') }}">Quyền trẻ em trên không gian mạng</a>
                        <a class="cyber-blog__list-item list-group-item" href="{{ route('knowledge.info') }}">Hiểu về không gian mạng</a>
                        <a class="cyber-blog__list-item list-group-item" href="{{ route('blog') }}">Blog</a>
                        <a class="cyber-blog__list-item list-group-item" href="{{ route('event') }}">Tin tức & sự kiện</a>
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
@endsection
@section('scripts')
    <script>
        $(document).on("click", ".comment-btn",function() {
            let val = $('.cyber-blog__comment-textarea').val();
            if(!val) {
                $('.validate-comment').html('Không được để trống bình luận!');
            } else {
                $.ajax({
                    url: '{{ route('save.comment') }}',
                    data: {
                        'des': val,
                        'blog_id' : {{ $blog->id }}
                    },
                    dataType: 'BOOLEAN',
                    complete : (response) => {
                        $('.cyber-blog__comment-textarea').val('');
                        $('.validate-comment').empty();
                        toastr.success('Bình luận của bạn đã được ghi lại!');
                    }
                });
            }
        });
    </script>
@endsection
