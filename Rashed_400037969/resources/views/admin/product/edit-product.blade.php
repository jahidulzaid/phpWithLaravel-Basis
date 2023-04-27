@extends('admin.master')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Product Form</h3></div>
                    <div class="card-body">
                        <form action="{{ route('update.product') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="id">
                            <div class="form-floating mb-3">
                                <input class="form-control" name="name" value="{{ $product->name }}" id="productName" type="text" placeholder="" />

                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="category_name" value="{{ $product->category_name }}" id="inputFirstName" type="text" placeholder="" />

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" name="brand_name" value="{{ $product->brand_name }}" id="inputLastName" type="text" placeholder="" />

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3 mb-md-0">
                                    <textarea name="description" id="" class="form-control" > {{ $product->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input type="file" name="image" class="form-control">
                                    <img src="{{ asset( $product->image) }}" alt="" class="img-fluid" style="height: 50px; width: 50px">
                                </div>
                            </div>

                            <div class="mt-4 mb-0">
                                <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Save Product</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
