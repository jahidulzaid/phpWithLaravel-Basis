@extends('master')
@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row">

                @foreach($products as $product)

                    <div class="col-md-4  mb-3">
                        <div class="card">
                            <div class="card-header">
                                <img src="{{asset('assets')}}/image/{{$product['image']}}" class="img-fluid" alt="">
                            </div>
                            <div class="card-body">
                                <h3>{{$product['name']}}</h3>
                                <h5>{{$product['price']}}</h5>
                                <p>{{$product['description']}}</p>
                                <a href="{{route('details',['id'=>$product['id']])}}" class="btn btn-primary">Details</a>
                            </div>
                        </div>
                    </div>

                @endforeach


            </div>
        </div>
    </section>

@endsection
