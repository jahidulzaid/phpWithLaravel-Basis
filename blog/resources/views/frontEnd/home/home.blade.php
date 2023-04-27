@extends('frontEnd.master')

@section('title')
    Home
@endsection

@section('content')

    <!-- Banner section -->
    <section class="banner-section">
        <div class="main-banner">
            <div class="container">
                <div class="banner-bg">
                    <div class="banner-bg-left">
                    </div>
                    <div class="banner-bg-right">
                        <div class="banner-carousel">
                            <div class="banner-item">
                                <div class="banner-img">
                                    <a href="single-layout-one.html"> <img src="{{ asset('frontEndAsset') }}/assets/images/banner-1.jpg" alt=""></a>
                                </div>
                                <div class="banner-text">
                                    <ul class="category-tag-list">
                                        <li class="category-tag-name">
                                            <a href="#">Lifestyle</a>
                                        </li>
                                        <li class="category-tag-name">
                                            <a href="#">Travel</a>
                                        </li>
                                    </ul>
                                    <div class="title-font">
                                        <a href="single-layout-one.html">No more mistakes about travel season</a>
                                    </div>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quo sequi
                                        quibusdam
                                        similique exercitationem ratione consequuntur ipsa quas? Fugiat illum cupiditate voluptates,
                                        nulla
                                        quis
                                        doloremque officia ex placeat in ratione!</p>
                                    <a href="single-layout-one.html" class="btn btn-solid btn-read">Read More</a>
                                </div>
                            </div>
                            <div class="banner-item">

                                <div class="banner-img">
                                    <a href="single-layout-one.html">
                                        <img src="{{ asset('frontEndAsset') }}/assets/images/london.jpg" alt="">
                                    </a>
                                </div>

                                <div class="banner-text">
                                    <ul class="category-tag-list">

                                        <li class="category-tag-name">
                                            <a href="#">Travel</a>
                                        </li>
                                    </ul>
                                    <div class="title-font">
                                        <a href="single-layout-one.html">Get ready for December Adventures</a>
                                    </div>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quo sequi
                                        quibusdam
                                        similique exercitationem ratione consequuntur ipsa quas? Fugiat illum cupiditate voluptates,
                                        nulla
                                        quis
                                        doloremque officia ex placeat in ratione!</p>

                                    <a href="single-layout-one.html" class="btn btn-solid btn-read">Read More</a>


                                </div>
                            </div>
                            <div class="banner-item">

                                <div class="banner-img">
                                    <a href="single-layout-one.html">
                                        <img src="{{ asset('frontEndAsset') }}/assets/images/houses.jpg" alt="">

                                    </a>
                                </div>

                                <div class="banner-text">
                                    <ul class="category-tag-list">

                                        <li class="category-tag-name">
                                            <a href="#">Travel</a>
                                        </li>
                                    </ul>
                                    <div class="title-font">
                                        <a href="#">Something amazing about these tall buildings</a>
                                    </div>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt vel numquam eveniet
                                        nisi iure aliquid. Ea mollitia optio nostrum ut.</p>
                                    <a href="single-layout-one.html" class="btn btn-solid btn-read">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="more-content-grid py-30">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <a href="single-layout-one.html">
                                <img src="{{ asset('frontEndAsset') }}/assets/images/bus.jpg" class="card-img-top " alt="" />
                            </a>
                            <div class="card-body px-0">
                                <ul class="category-tag-list">
                                    <li class="category-tag-name">
                                        <a href="#">Lifestyle</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font">
                                    <a href="single-layout-one.html">
                                        Lies And Damn Lies About HIPPIE
                                    </a>
                                </h5>
                                <div class="author-date">
                                    <a class="author" href="#">
                                        <img src="{{ asset('frontEndAsset') }}/assets/images/writer.jpg" alt="" class="rounded-circle" />
                                        <span class="writer-name-small">Julie</span>
                                    </a>
                                    <a class="date" href="#">
                                        <span>21 Dec, 2019</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <a href="single-layout-one.html">
                                <img src="{{ asset('frontEndAsset') }}/assets/images/roaming.jpg" class="card-img-top " alt="" />
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
                                <div class="author-date">
                                    <a class="author" href="#">
                                        <img src="{{ asset('frontEndAsset') }}/assets/images/writer.jpg" alt="" class="rounded-circle" />
                                        <span class="writer-name-small">Julie</span>
                                    </a>
                                    <a class="date" href="#">
                                        <span>21 Dec, 2019</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <a href="single-layout-one.html">
                                <img src="{{ asset('frontEndAsset') }}/assets/images/paris.jpg" class="card-img-top " alt="" />
                            </a>

                            <div class="card-body px-0">
                                <ul class="category-tag-list">
                                    <li class="category-tag-name">
                                        <a href="#">Travel</a>
                                    </li>
                                </ul>

                                <h5 class="card-title title-font">
                                    <a href="single-layout-one.html">5 things you should not miss about Paris</a>
                                </h5>
                                <div class="author-date">
                                    <a class="author" href="#">
                                        <img src="{{ asset('frontEndAsset') }}/assets/images/writer.jpg" alt="" class="rounded-circle" />
                                        <span class="writer-name-small">Julie</span>
                                    </a>
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
    </section>
    <!-- Banner section end -->
    <!-- Featured posts -->
    <section class="featured-posts">
        <div class="container">
            <div class="section-title">
                <h2>Featured posts</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-7">
                    <div class="featured-left">
                        <div class="card">
                            <a href="single-layout-one.html"><img src="{{ asset('frontEndAsset') }}/assets/images/girl.jpg" class="card-img " alt="" /></a>
                            <div class="card-img-overlay">
                                <ul class="category-tag-list">

                                    <li class="category-tag-name">
                                        <a href="#">Lifestyle</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font">
                                    <a href="#">Lifestyle of woman in London</a>
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
                <div class="col-md-12 col-lg-5">
                    <div class="featured-right">
                        <div class="card">
                            <a href="single-layout-one.html">
                                <img src="{{ asset('frontEndAsset') }}/assets/images/umbrella.jpg" class="card-img-top " alt="">
                            </a>
                            <div class="card-body">
                                <ul class="category-tag-list">

                                    <li class="category-tag-name">
                                        <a href="#">Lifestyle</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font"><a href="single-layout-one.html">Top 10 tips with common
                                        lifestyles</a>
                                </h5>
                                <div class="author-date">
                                    <a class="author" href="#">
                                        <img src="{{ asset('frontEndAsset') }}/assets/images/writer.jpg" alt="" class="rounded-circle" />
                                        <span class="writer-name-small">Julie</span>
                                    </a>
                                    <a class="date" href="#">
                                        <span>21 Dec, 2019</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <a href="single-layout-one.html">
                                <img src="{{ asset('frontEndAsset') }}/assets/images/streets.jpg" class="card-img-top " alt="">

                            </a>
                            <div class="card-body">
                                <ul class="category-tag-list">
                                    <li class="category-tag-name">
                                        <a href="#">Lifestyle</a>
                                    </li>
                                    <li class="category-tag-name">
                                        <a href="#">Travel</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font"><a href="single-layout-one.html">Beautiful streets of village</a>
                                </h5>
                                <div class="author-date">
                                    <a class="author" href="#">
                                        <img src="{{ asset('frontEndAsset') }}/assets//images/writer.jpg" alt="" class="rounded-circle" />
                                        <span class="writer-name-small">Julie</span>
                                    </a>
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
    </section>
    <!-- Featured post end -->

    <!-- Popular posts -->
    <section class="popular-posts section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Popular posts</h2>
            </div>
            <div class="row">
                <div class="col-md-7 col-lg-8">
                    <div class="card mb-4">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-4">
                                <a href="single-layout-one.html">
                                    <img src="{{ asset('frontEndAsset') }}/assets//images/time.jpg" class="card-img " alt="">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <ul class="category-tag-list">
                                        <li class="category-tag-name">
                                            <a href="#">Lifestyle</a>
                                        </li>
                                    </ul>
                                    <h5 class="card-title title-font"><a href="single-layout-one.html">Making time for travel</a>
                                    </h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Lorem ipsum dolor sit,
                                        amet consectetur adipisicing elit. Sapiente, asperiores.<p>
                                    <div class="author-date">
                                        <a class="author" href="#">
                                            <img src="{{ asset('frontEndAsset') }}/assets//images/writer.jpg" alt="" class="rounded-circle" />
                                            <span class="writer-name-small">Julie</span>
                                        </a>
                                        <a class="date" href="#">
                                            <span>21 Dec, 2019</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-4">
                                <a href="single-layout-one.html"> <img src="{{ asset('frontEndAsset') }}/assets//images/alone-house.jpg" class="card-img " alt=""></a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <ul class="category-tag-list">
                                        <li class="category-tag-name">
                                            <a href="#">Lifestyle</a>
                                        </li>

                                    </ul>
                                    <h5 class="card-title title-font"><a href="single-layout-one.html">Abandon houses</a></h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis ipsum rem, delectus
                                        deserunt consectetur saepe? Expedita sapiente rerum nostrum fuga non iure minima sunt inventore.<p>
                                    <div class="author-date">
                                        <a class="author" href="#">
                                            <img src="{{ asset('frontEndAsset') }}/assets//images/writer.jpg" alt="" class="rounded-circle" />
                                            <span class="writer-name-small">Julie</span>
                                        </a>
                                        <a class="date" href="#">
                                            <span>21 Dec, 2019</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-4">
                                <a href="single-layout-one.html"><img src={{ asset('frontEndAsset') }}/assets//images/taj.jpg" class="card-img " alt=""></a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <ul class="category-tag-list">
                                        <li class="category-tag-name">
                                            <a href="#">Travel</a>
                                        </li>
                                    </ul>
                                    <h5 class="card-title title-font"><a href="single-layout-one.html">7 wonders of the world</a></h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis ipsum rem, delectus
                                        deserunt consectetur saepe? <p>
                                    <div class="author-date">
                                        <a class="author" href="#">
                                            <img src="{{ asset('frontEndAsset') }}/assets//images/writer.jpg" alt="" class="rounded-circle" />
                                            <span class="writer-name-small">Julie</span>
                                        </a>
                                        <a class="date" href="#">
                                            <span>21 Dec, 2019</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-4">
                                <a href="single-layout-one.html"><img src="{{ asset('frontEndAsset') }}/assets//images/camera.jpg" class="card-img " alt=""></a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <ul class="category-tag-list">
                                        <li class="category-tag-name">
                                            <a href="#">photography</a>
                                        </li>
                                    </ul>
                                    <h5 class="card-title title-font"><a href="single-layout-one.html"> Super easy ways to learn
                                            everything about
                                            photography</a></h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis ipsum rem, delectus
                                        deserunt consectetur saepe? <p>
                                    <div class="author-date">
                                        <a class="author" href="#">
                                            <img src="{{ asset('frontEndAsset') }}/assets//images/writer.jpg" alt="" class="rounded-circle" />
                                            <span class="writer-name-small">Julie</span>
                                        </a>
                                        <a class="date" href="#">
                                            <span>21 Dec, 2019</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div class="sidebar-posts mt-4">
                        <div class="sidebar-title">
                            <h5><i class="fas fa-circle"></i>Categories</h5>
                        </div>
                        <div class="sidebar-content">
                            <div class="category-name-list">
                                <div class="card small-card">
                                    <a href="single-layout-one.html"><img src="{{ asset('frontEndAsset') }}/assets//images/shoes.jpg" class="card-img" alt="" /></a>
                                    <div class="card-img-overlay">
                                        <h5 class="card-title title-font mb-0">
                                            <a href="#">Travel</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="card small-card">
                                    <a href="single-layout-one.html"><img src="{{ asset('frontEndAsset') }}/assets//images/photography.jpg" class="card-img"
                                                                          alt="" /></a>
                                    <div class="card-img-overlay">
                                        <h5 class="card-title title-font mb-0">
                                            <a href="#">Photography</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="card small-card">
                                    <a href="single-layout-one.html"><img src="{{ asset('frontEndAsset') }}/assets//images/fashion.jpg" class="card-img" alt="" /></a>
                                    <div class="card-img-overlay">
                                        <h5 class="card-title title-font mb-0">
                                            <a href="#">Fashion</a>
                                        </h5>
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

    <!-- Recommended Posts -->
    <section class="recommended-posts">
        <div class="container">
            <div class="section-title">
                <h2>Recommended posts</h2>
            </div>
            <div class="more-content-grid ">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <a href="single-layout-one.html">
                                <img src="{{ asset('frontEndAsset') }}/assets//images/lights.jpg" class="card-img-top" alt="" />
                            </a>
                            <div class="card-body px-0">
                                <ul class="category-tag-list">
                                    <li class="category-tag-name">
                                        <a href="#">Lifestyle</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font">
                                    <a href="single-layout-one.html">
                                        5 brilliant ways to use lights</a>
                                </h5>
                                <div class="author-date">
                                    <a class="author" href="#">
                                        <img src="{{ asset('frontEndAsset') }}/assets//images/writer.jpg" alt="" class="rounded-circle" />
                                        <span class="writer-name-small">Julie</span>
                                    </a>
                                    <a class="date" href="#">
                                        <span>21 Dec, 2019</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <a href="single-layout-one.html">
                                <img src="{{ asset('frontEndAsset') }}/assets//images/lighthouse.jpg" class="card-img-top" alt="" />
                            </a>
                            <div class="card-body px-0">
                                <ul class="category-tag-list">
                                    <li class="category-tag-name">
                                        <a href="#">Travel</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font">
                                    <a href="single-layout-one.html">
                                        7 things you don't know about Light house</a>
                                </h5>
                                <div class="author-date">
                                    <a class="author" href="#">
                                        <img src="{{ asset('frontEndAsset') }}/assets//images/writer.jpg" alt="" class="rounded-circle" />
                                        <span class="writer-name-small">Julie</span>
                                    </a>
                                    <a class="date" href="#">
                                        <span>21 Dec, 2019</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <a href="single-layout-one.html">
                                <img src="{{ asset('frontEndAsset') }}/assets//images/woods.jpg" class="card-img-top" alt="" />
                            </a>
                            <div class="card-body px-0">
                                <ul class="category-tag-list">
                                    <li class="category-tag-name">
                                        <a href="#">Nature</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font">
                                    <a href="single-layout-one.html">You will get lost in these woods</a>
                                </h5>
                                <div class="author-date">
                                    <a class="author" href="#">
                                        <img src="{{ asset('frontEndAsset') }}/assets//images/writer.jpg" alt="" class="rounded-circle" />
                                        <span class="writer-name-small">Julie</span>
                                    </a>
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
    </section>
    <!-- Recommended posts end -->

    <!-- Instagram Posts -->
    <section class="insta-posts">
        <div class="container">
            <div class="insta-title">
                <img src="{{ asset('frontEndAsset') }}/assets//images/instagram.svg" alt="">
                <h2>Follow us on Instagram</h2>
            </div>

            <div class="image-item-grid insta-slider">

                <div class="image-item">
                    <a href="#">
                        <img src="{{ asset('frontEndAsset') }}/assets//images/beautiful-girl.jpg" alt="">
                    </a>
                    <a href="#">
                        <div class="image-hover">
                            <i class="fas fa-heart"></i>
                        </div>
                    </a>
                </div>
                <div class="image-item image-item-margin">
                    <a href="#">
                        <img src="{{ asset('frontEndAsset') }}/assets//images/colors.jpg" alt="">
                    </a>
                    <a href="#">
                        <div class="image-hover">
                            <i class="fas fa-heart"></i>
                        </div>
                    </a>
                </div>
                <div class="image-item">
                    <a href="#">
                        <img src="{{ asset('frontEndAsset') }}/assets//images/city-pink.jpg" alt="">
                    </a>
                    <a href="#">
                        <div class="image-hover">
                            <i class="fas fa-heart"></i>
                        </div>
                    </a>
                </div>
                <div class="image-item image-item-margin">
                    <a href="#">
                        <img src="{{ asset('frontEndAsset') }}/assets//images/sea-lighthouse.jpg" alt="">
                    </a>
                    <a href="#">
                        <div class="image-hover">
                            <i class="fas fa-heart"></i>
                        </div>
                    </a>
                </div>
                <div class="image-item">
                    <a href="#">
                        <img src="{{ asset('frontEndAsset') }}/assets//images/boat.jpg" alt="">
                    </a>
                    <a href="#">
                        <div class="image-hover">
                            <i class="fas fa-heart"></i>
                        </div>
                    </a>
                </div>
                <div class="image-item">
                    <a href="#">
                        <img src="{{ asset('frontEndAsset') }}/assets//images/beach-sea.jpg" alt="">
                    </a>
                    <a href="#">
                        <div class="image-hover">
                            <i class="fas fa-heart"></i>
                        </div>
                    </a>
                </div>
                <div class="image-item">
                    <a href="#">
                        <img src="{{ asset('frontEndAsset') }}/assets//images/orange-bus.jpg" alt="">
                    </a>
                    <a href="#">
                        <div class="image-hover">
                            <i class="fas fa-heart"></i>
                        </div>
                    </a>
                </div>
                <div class="image-item">
                    <a href="#">
                        <img src="{{ asset('frontEndAsset') }}/assets//images/tall.jpg" alt="">
                    </a>
                    <a href="#">
                        <div class="image-hover">
                            <i class="fas fa-heart"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram posts end -->
@endsection
