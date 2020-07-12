@extends('front.app')

@section('content')
    <div class="container cyber-container slide-top mb-5">
        <div class="cyber-blog mt-5 row">
            <div class="col-md-8">
                <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-md-6">
                            <div class="cyber-blog__item" data-scroll>
                                <img src="{{ asset($blog->image) }}" alt="" class="img-fluid cyber-blog__img">
                                <h4 class="cyber-blog__title">
                                    {{ $blog->title }}
                                </h4>
                                <p class="cyber-blog__text">
                                    {{ $blog->short_description }}
                                </p>
                                <a class="cyber-blog__more" href="{{ route('blog.show', $blog->slug) }}">Xem thêm
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 slide-top">
                <h3 class="cyber-title cyber-about__title behind-cyan text-center">
                    <span>CHUYÊN MỤC</span>
                </h3>
                <ul class="cyber-blog__list list-group">
                    <a class="cyber-blog__list-item list-group-item" href="{{ route('knowledge.power') }}">Quyền trẻ em trên không gian mạng</a>
                    <a class="cyber-blog__list-item list-group-item" href="{{ route('knowledge.info') }}">Hiểu về không gian mạng</a>
                    <a class="cyber-blog__list-item list-group-item" href="{{ route('blog') }}">Blog</a>
                    <a class="cyber-blog__list-item list-group-item" href="{{ route('event') }}">Tin tức & sự kiện</a>
                </ul>
                <h3 class="cyber-title cyber-about__title behind-cyan text-center">
                    <span>BÀI VIẾT MỚI</span>
                </h3>
                <ul class="cyber-blog__list list-group">
                    @foreach($hotBlogs as $hotBlog)
                        <a class="cyber-blog__list-item list-group-item" href="{{ route('blog.show', $hotBlog->slug) }}">
                            {{ $hotBlog->title }}
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
