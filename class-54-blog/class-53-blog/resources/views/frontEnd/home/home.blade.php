@extends('frontEnd.master')
@section('title')
    Home
@endsection

@section('content')
    <!-- Banner section -->
    <section class="banner-section">
        <div class="container">
            <div class="banner-carousel">
                <div class="banner-item">
                    <div class="card">
                        <a href="single-layout-one.html"><img src="{{asset('frontEndAsset')}}/assets/images/baby-girl.jpg" class="card-img" alt="" /></a>
                        <div class="card-img-overlay banner-text">
                            <ul class="category-tag-list">
                                <li class="category-tag-name">
                                    <a href="#">Lifestyle</a>
                                </li>
                            </ul>
                            <h5 class="card-title title-font">
                                <a href="single-layout-one.html">Take the stress out with nature</a>
                            </h5>
                            <p class="card-text mb-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores
                                nostrum eum, cum ab iusto error totam quae nemo dicta nesciunt
                                quo earum ipsam, ex aspernatur.
                            </p>
                            <a href="single-layout-one.html" class="btn btn-solid btn-read">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="banner-item">
                    <div class="card">
                        <a href="single-layout-one.html"><img src="{{asset('frontEndAsset')}}/assets/images/london.jpg" class="card-img" alt="" /></a>
                        <div class="card-img-overlay banner-text">
                            <ul class="category-tag-list">
                                <li class="category-tag-name">
                                    <a href="#">travel</a>
                                </li>
                            </ul>
                            <h5 class="card-title title-font">
                                <a href="single-layout-one.html">10 things you should not miss about London</a>
                            </h5>
                            <p class="card-text mb-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores
                                nostrum eum, cum ab iusto error totam quae nemo dicta nesciunt
                                quo earum ipsam, ex aspernatur.
                            </p>
                            <a href="single-layout-one.html" class="btn btn-solid btn-read">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="banner-item">
                    <div class="card">
                        <a href="single-layout-one.html"><img src="{{asset('frontEndAsset')}}/assets/images/blonde-girl.jpg" class="card-img" alt="" /></a>
                        <div class="card-img-overlay banner-text">
                            <ul class="category-tag-list">
                                <li class="category-tag-name">
                                    <a href="#">Lifestyle</a>
                                </li>
                            </ul>
                            <h5 class="card-title title-font">
                                <a href="single-layout-one.html">Why alone time is a must for you</a>
                            </h5>
                            <p class="card-text mb-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores
                                nostrum eum, cum ab iusto error totam quae nemo dicta nesciunt
                                quo earum ipsam, ex aspernatur.
                            </p>
                            <a href="single-layout-one.html" class="btn btn-solid btn-read">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-content-grid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card simple-overlay-card mt-0">
                            <a href="single-layout-one.html"><img src="{{asset('frontEndAsset')}}/assets/images/girl.jpg" class="card-img" alt="" /></a>
                            <div class="card-img-overlay">
                                <ul class="category-tag-list">
                                    <li class="category-tag-name">
                                        <a href="#">Lifestyle</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font">
                                    <a href="single-layout-one.html">Lifestyle of woman in London</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card simple-overlay-card mt-0">
                            <a href="single-layout-one.html"><img src="{{asset('frontEndAsset')}}/assets/images/orange-bus.jpg" class="card-img" alt="" /></a>
                            <div class="card-img-overlay">
                                <ul class="category-tag-list">
                                    <li class="category-tag-name">
                                        <a href="#">Lifestyle</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font">
                                    <a href="single-layout-one.html">10 ideas for travelling more</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card simple-overlay-card mt-0">
                            <a href="single-layout-one.html"><img src="{{asset('frontEndAsset')}}/assets/images/shoes.jpg" class="card-img" alt="" /></a>
                            <div class="card-img-overlay">
                                <ul class="category-tag-list">
                                    <li class="category-tag-name">
                                        <a href="#">Lifestyle</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font">
                                    <a href="single-layout-one.html">Top 5 trekking destinations of the world</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner section end -->

    <!-- Featured Posts -->
    <section class="featured-posts section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Featured posts</h2>
            </div>
            <div class="row no-gutters">
                <div class="col-md-3">
                    <div class="card border-0 card-350">
                        <a href="single-layout-one.html">
                            <img src="{{asset('frontEndAsset')}}/assets/images/travel-man.jpg" class="card-img-top" alt="" />
                        </a>
                        <div class="card-body px-0">
                            <ul class="category-tag-list">
                                <li class="category-tag-name">
                                    <a href="#">Travel</a>
                                </li>
                            </ul>
                            <h5 class="card-title title-font">
                                <a href="single-layout-one.html">
                                    Top 10 mysterious places you didn't know
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mx-md-4 border-0 card-500">
                        <a href="single-layout-one.html"><img src="{{asset('frontEndAsset')}}/assets/images/banner-1.jpg" class="card-img" alt="" /></a>
                        <div class="card-img-overlay">
                            <ul class="category-tag-list">
                                <li class="category-tag-name">
                                    <a href="#">Lifestyle</a>
                                </li>
                                <li class="category-tag-name">
                                    <a href="#">Travel</a>
                                </li>
                            </ul>
                            <h5 class="card-title title-font">
                                <a href="single-layout-one.html">Take the stress out with nature</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-350 border-0">
                        <a href="single-layout-one.html">
                            <img src="{{asset('frontEndAsset')}}/assets/images/biker.jpg" class="card-img-top" alt="" />
                        </a>
                        <div class="card-body px-0">
                            <ul class="category-tag-list">
                                <li class="category-tag-name">
                                    <a href="#">Lifestyle</a>
                                </li>
                            </ul>
                            <h5 class="card-title title-font">
                                <a href="single-layout-one.html">
                                    Solo Traveller
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured posts end -->

    <!-- Kavya posts -->
    <section class="kavya-posts popular">
        <div class="container">
            <div class="section-title">
                <h2>Popular Posts</h2>
            </div>
            <div class="row">
                <div class="col-md-7 col-lg-8">
                    <div class="posts-wrapper">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card card-350">
                                    <a href="single-layout-one.html">
                                        <img src="{{asset('frontEndAsset')}}/assets/images/city-pink.jpg" class="card-img-top" alt="" />
                                    </a>
                                    <div class="card-body px-0">
                                        <ul class="category-tag-list">
                                            <li class="category-tag-name">
                                                <a href="#">Travel</a>
                                            </li>
                                            <li class="category-tag-name">
                                                <a href="#">Lifestyle</a>
                                            </li>
                                        </ul>
                                        <h5 class="card-title title-font">
                                            <a href="single-layout-one.html">
                                                Remember before moving to a new city</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-350">
                                    <a href="single-layout-one.html">
                                        <img src="{{asset('frontEndAsset')}}/assets/images/airport.jpg" class="card-img-top" alt="" />
                                    </a>
                                    <div class="card-body px-0">
                                        <ul class="category-tag-list">
                                            <li class="category-tag-name">
                                                <a href="#">Travel</a>
                                            </li>
                                            <li class="category-tag-name">
                                                <a href="#">Lifestyle</a>
                                            </li>
                                        </ul>
                                        <h5 class="card-title title-font">
                                            <a href="single-layout-one.html">
                                                Travel more in 2020</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="single-layout-one.html">
                                        <img src="{{asset('frontEndAsset')}}/assets/images/forest.jpg" class="card-img-top" alt="" />
                                    </a>
                                    <div class="card-body px-0">
                                        <ul class="category-tag-list">
                                            <li class="category-tag-name">
                                                <a href="#">Travel</a>
                                            </li>
                                            <li class="category-tag-name">
                                                <a href="#">Nature</a>
                                            </li>
                                        </ul>
                                        <h5 class="card-title title-font">
                                            <a href="single-layout-one.html">
                                                You will get lost in these woods</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="single-layout-one.html">
                                        <img src="{{asset('frontEndAsset')}}/assets/images/cup.jpg" class="card-img-top" alt="" />
                                    </a>
                                    <div class="card-body px-0">
                                        <ul class="category-tag-list">
                                            <li class="category-tag-name">
                                                <a href="#">Travel</a>
                                            </li>
                                        </ul>
                                        <h5 class="card-title title-font">
                                            <a href="single-layout-one.html">
                                                How roaming around is good for you</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="single-layout-one.html">
                                        <img src="{{asset('frontEndAsset')}}/assets/images/coach.jpg" class="card-img-top" alt="" />
                                    </a>
                                    <div class="card-body px-0">
                                        <ul class="category-tag-list">
                                            <li class="category-tag-name">
                                                <a href="#">Travel</a>
                                            </li>
                                            <li class="category-tag-name">
                                                <a href="#">Lifestyle</a>
                                            </li>
                                        </ul>
                                        <h5 class="card-title title-font">
                                            <a href="single-layout-one.html">
                                                Old and beautiful </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="sidebar-posts">
                        <div class="sidebar-title">
                            <h5><i class="fas fa-circle"></i>Recent Posts</h5>
                        </div>
                        <div class="sidebar-content author-posts">
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-4 col-md-4">
                                        <a href="single-layout-one.html">
                                            <img src="{{asset('frontEndAsset')}}/assets/images/alone-house.jpg" class="card-img" alt="">
                                        </a>
                                    </div>
                                    <div class="col-8 col-md-8">
                                        <div class="card-body">
                                            <ul class="category-tag-list mb-0">
                                                <li class="category-tag-name">
                                                    <a href="#">Lifestyle</a>
                                                </li>
                                            </ul>
                                            <h5 class="card-title title-font"><a href="single-layout-one.html">Abandon Houses</a>
                                            </h5>
                                            <div class="author-date">
                                                <a class="date" href="#">
                                                    <span>21 Dec, 2019</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-4 col-md-4">
                                        <a href="single-layout-one.html">
                                            <img src="{{asset('frontEndAsset')}}/assets/images/time.jpg" class="card-img" alt="">
                                        </a>
                                    </div>
                                    <div class="col-8 col-md-8">
                                        <div class="card-body">
                                            <ul class="category-tag-list mb-0">
                                                <li class="category-tag-name">
                                                    <a href="#">Lifestyle</a>
                                                </li>
                                            </ul>
                                            <h5 class="card-title title-font"><a href="single-layout-one.html">Making time for travel</a>
                                            </h5>
                                            <div class="author-date">
                                                <a class="date" href="#">
                                                    <span>21 Dec, 2019</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-4 col-md-4">
                                        <a href="single-layout-one.html">
                                            <img src="{{asset('frontEndAsset')}}/assets/images/beach-sea.jpg" class="card-img" alt="">
                                        </a>
                                    </div>
                                    <div class="col-8 col-md-8">
                                        <div class="card-body">
                                            <ul class="category-tag-list mb-0">
                                                <li class="category-tag-name">
                                                    <a href="#">Lifestyle</a>
                                                </li>
                                            </ul>
                                            <h5 class="card-title title-font"><a href="single-layout-one.html">How writing has improved my
                                                    daily life</a>
                                            </h5>
                                            <div class="author-date">
                                                <a class="date" href="#">
                                                    <span>21 Dec, 2019</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-4 col-md-4">
                                        <a href="single-layout-one.html">
                                            <img src="{{asset('frontEndAsset')}}/assets/images/taj.jpg" class="card-img" alt="">
                                        </a>
                                    </div>
                                    <div class="col-8 col-md-8">
                                        <div class="card-body">
                                            <ul class="category-tag-list mb-0">
                                                <li class="category-tag-name">
                                                    <a href="#">photography</a>
                                                </li>
                                            </ul>
                                            <h5 class="card-title title-font"><a href="single-layout-one.html">Super easy ways to learn
                                                    about
                                                    photography</a>
                                            </h5>
                                            <div class="author-date">
                                                <a class="date" href="#">
                                                    <span>21 Dec, 2019</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-4 col-md-4">
                                        <a href="single-layout-one.html">
                                            <img src="{{asset('frontEndAsset')}}/assets/images/air-ballon.jpg" class="card-img" alt="">
                                        </a>
                                    </div>
                                    <div class="col-8 col-md-8">
                                        <div class="card-body">
                                            <ul class="category-tag-list mb-0">
                                                <li class="category-tag-name">
                                                    <a href="#">Travel</a>
                                                </li>
                                            </ul>
                                            <h5 class="card-title title-font"><a href="single-layout-one.html">Fly above clouds</a>
                                            </h5>
                                            <div class="author-date">
                                                <a class="date" href="#">
                                                    <span>21 Dec, 2019</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Kavya posts end -->

    <!-- Popular Posts -->
    <section class="popular-posts section-padding">
        <div class="container">
            <div class="section-title">
                <h2>More from Kavya</h2>
            </div>
            <div class="row">
                <div class="col-md-7 col-lg-8">


                    @foreach($blogs as $blog)

                    <div class="card mb-4">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-4">
                                <a href="single-layout-one.html">
                                    <img src="{{ asset($blog->category->image) }}" class="card-img" alt="">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <ul class="category-tag-list">
                                        <li class="category-tag-name">
                                            <a href="#">Lifestyle</a>
                                        </li>
                                    </ul>
                                    <h5 class="card-title title-font"><a href="single-layout-one.html">{{ $blog->blog_title }}</a>
                                    </h5>
                                    <p class="card-text">{{ $blog->description }}<p>
                                    <div class="author-date">
                                        <a class="author" href="#">
                                            <img src="{{ asset($blog->author->image) }}" alt="" class="rounded-circle" />
                                            <span class="writer-name-small">{{ $blog->author->author_name }}</span>
                                        </a>
                                        <a class="date" href="#">
                                            <span>{{ $blog->date }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="recent-posts">
                        <div class="sidebar-title">
                            <h5><i class="fas fa-circle"></i>Trending this week</h5>
                        </div>
                        <div class="sidebar-content">
                            <ul class="sidebar-list">
                                <li class="sidebar-item">
                                    <div class="num-left">
                                        1
                                    </div>
                                    <div class="content-right">
                                        <a href="single-layout-one.html">Healthy Dieting Habits for any age</a>
                                    </div>
                                </li>
                                <li class="sidebar-item">
                                    <div class="num-left">
                                        2
                                    </div>
                                    <div class="content-right">
                                        <a href="single-layout-one.html"> 10 foods you should try in Kathmandu</a>
                                    </div>
                                </li>
                                <li class="sidebar-item">
                                    <div class="num-left">
                                        3
                                    </div>
                                    <div class="content-right">
                                        <a href="single-layout-one.html">Everything You Wanted to Know About Love Life</a>
                                    </div>
                                </li>
                                <li class="sidebar-item">
                                    <div class="num-left">
                                        4
                                    </div>
                                    <div class="content-right">
                                        <a href="single-layout-one.html">Yoga works only under these conditions</a>
                                    </div>
                                </li>
                                <li class="sidebar-item">
                                    <div class="num-left">
                                        5
                                    </div>
                                    <div class="content-right">
                                        <a href="single-layout-one.html">Top 10 mysterious places you didn't know</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="instagram-posts">
                        <div class="sidebar-title">
                            <h5><i class="fas fa-circle"></i>Instagram Posts</h5>
                        </div>
                        <div class="sidebar-content">
                            <div class="row no-gutters">
                                <div class="col-6 col-lg-4">
                                    <div class="image-item insta-item">
                                        <a href="#"> <img src="{{asset('frontEndAsset')}}/assets/images/beautiful-girl.jpg" alt=""></a>
                                        <a href="#">
                                            <div class="image-hover">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="image-item insta-item">
                                        <a href="#"> <img src="{{asset('frontEndAsset')}}/assets/images/lighthouse.jpg" alt=""></a>
                                        <a href="#">
                                            <div class="image-hover">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4">
                                    <div class="image-item insta-item">
                                        <a href="#"><img src="{{asset('frontEndAsset')}}/assets/images/travel-man.jpg" alt=""></a>
                                        <a href="#">
                                            <div class="image-hover">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="image-item insta-item">
                                        <a href="#"> <img src="{{asset('frontEndAsset')}}/assets/images/blonde-girl.jpg" alt=""></a>
                                        <a href="#">
                                            <div class="image-hover">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="image-item insta-item">
                                        <a href="#"><img src="{{asset('frontEndAsset')}}/assets/images/biker.jpg" alt=""></a>
                                        <a href="#">
                                            <div class="image-hover">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4">
                                    <div class="image-item insta-item">
                                        <a href="#"> <img src="{{asset('frontEndAsset')}}/assets/images/shoes.jpg" alt=""></a>
                                        <a href="#">
                                            <div class="image-hover">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="insta-link">
                                        <a href="#" target="_blank" class=" btn-solid">Follow us <i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular posts end -->
@endsection
