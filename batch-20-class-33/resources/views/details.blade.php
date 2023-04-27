@extends('master')

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('assets')}}/image/{{$product['image']}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8">
                        <h1>{{$product['name']}}</h1>
                        <h6>{{$product['category_name']}}</h6>
                        <h5>{{$product['price']}}</h5>
                        <p>{{$product['description']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
