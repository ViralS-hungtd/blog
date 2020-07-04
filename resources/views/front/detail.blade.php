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
                            <span class="badge badge-pill badge-info">#hashtag 1</span>
                            <span class="badge badge-pill badge-info">#hashtag 2</span>
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
                                <div class="cyber-blog__comment-action">
                                    <button class="btn btn-info">Gửi bình luận</button>
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
@endsection
