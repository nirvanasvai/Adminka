@extends('layouts.app')

@section('title','Подробнее')


@section('content')
    <div class="blogs_inner p_page bg_line">
        <div class="container">
{{--            @foreach($blogIn as $blog)--}}
            <div class="blog_inner_banner">
                <div class="banner_text col-xl-8">
                    <a href="{{route('blog.front')}}">Назад </a>
                    <div class="title">
                        <p>{{$blogs->title}}</p>
                    </div>
                    <div class="banner_description">
                        <p>{{$blogs->description}} </p>
                    </div>
                </div>
            </div>
            <div class="blog_inner_text">
                <p>
                    {{$blogs->full_description}}
                </p>
            </div>
{{--            @endforeach--}}
            <div class="date_article">
{{--                <p>{{$blog->created_at->format('d.m.Y') }}</p>--}}
                <div class="social_links">
                    <ul>
                        <li>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="red" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.2114 0.0820312H2.22012C1.53294 0.0820312 0.976318 0.638649 0.976318 1.32446V18.3157C0.976318 19.0015 1.53294 19.5581 2.22012 19.5581H19.21C19.8958 19.5581 20.4524 19.0015 20.4524 18.3157V1.32446C20.4538 0.637274 19.8972 0.0820312 19.2114 0.0820312ZM17.132 11.9497C17.4879 12.3125 18.2603 12.9213 18.1201 13.5412C17.9909 14.1102 17.1416 13.9026 16.317 13.9356C15.3755 13.9755 14.8175 13.9961 14.2513 13.5412C13.9847 13.3254 13.828 13.0698 13.5724 12.7839C13.3401 12.5255 13.0474 12.0624 12.6488 12.0802C11.9327 12.116 12.1568 13.1138 11.9025 13.7941C7.92235 14.4208 6.32397 11.962 4.91387 9.57614C4.23081 8.4203 3.24402 5.9382 3.24402 5.9382L6.05872 5.92858C6.05872 5.92858 6.96167 7.57094 7.20081 7.99425C7.40422 8.35433 7.62824 8.6402 7.85913 8.9618C8.05292 9.22842 8.3594 9.75068 8.69475 9.70808C9.24037 9.63798 9.33932 7.52146 9.00123 6.81229C8.86654 6.52505 8.54357 6.42472 8.2096 6.32714C8.32229 5.61522 11.3665 5.46679 11.8585 6.01928C12.5732 6.82191 11.3638 9.05663 12.3423 9.70808C13.7167 8.98791 14.8904 5.97256 14.8904 5.97256L18.1861 5.99317C18.1861 5.99317 17.6707 7.62317 17.1306 8.34608C16.8159 8.76939 15.7713 9.7122 15.8126 10.4118C15.8456 10.9656 16.6949 11.5044 17.132 11.9497Z" fill="#B3328C"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="blog_info_card_wrapper">
                <div class="row">
                    @foreach($blogIn as $blog)
                    <div class="col-xl-4 col-md-6">
                        <div class="blog_info_card">
                            <img src="/storage/{{$blog->image}}" alt="">
                            <a href="#">{{$blog->title}}</a>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection