@extends('frontEnd.master')
@section('content')
    <section class="single-layout">
        <div class="col-md-10 offset-md-1 col-lg-8">
            <div class="blog-content-wrap p-4">
                <h3 class="text-center text-danger">{{ session('message') }}</h3>
                <form action="{{ route('customer.register') }}" method="post">
                    @csrf
                    <h5>Registration Form</h5>
                    <div class="row">
                        <div class="col-12 col-md-6 mb-4">
                            <input type="text" name="name" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="col-12 col-md-6 mb-4">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-12 col-md-6 mb-4">
                            <input type="text" name="phone" class="form-control" placeholder="phone">
                        </div>
                        <div class="col-12 col-md-6 mb-4">
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>
                    </div>
                    <button class="btn btn-solid">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
