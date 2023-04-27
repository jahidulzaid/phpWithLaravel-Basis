@extends('admin.master')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-2">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Update Product Form</h3>
                    <h4 class="text-black" >{{ session('message') }} </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.product.update-product',['id'=>$product->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <a href="{{ route('admin.product.add-product') }}" class="btn btn-sm btn-success">Go back to add product page</a>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="name" value="{{ $product->name }}" id="name" type="text"/>
                            <label for="name">Product Name</label>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="category_name" value="{{ $product->category_name }}" id="category_name" type="text"/>
                                    <label for="category_name">Category Name</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-12">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="brand_name" value="{{ $product->brand_name }}" id="brand_name" type="text"/>
                                    <label for="brand_name">brand Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <div class="form-floating mb-3 mb-md-0">
                                    <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{ $product->description }}</textarea>
                                    <label for="description">Description</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input type="file" class="form-control" value="{{ $product->image }}" name="image" id="image">
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <input class="btn btn-primary btn-block" type="submit" href="">
                            </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <a href="{{ route('admin.product.add-product') }}" class="btn btn-sm btn-success">Go back to add product page</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-2">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Product View</h3>
                </div>
                <div class="card-body">
                    <table  class="table table-hover table-responsive-lg table-condensed table-striped table-bordered">
                        <tr class="table-responsive-md">
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->brand_name }}</td>
                                <td>{{ $product->category_name }}</td>
                                <td>{{ $product->description }}</td>
                                <td >

                                    <img src="{{ asset($product->image) }}" class="img-fluid" style="height: 80px; width: 80px" alt="">
                                </td>
                                <td class="btn btn-group ">

                                    <a href="{{ route('admin.product.update-product',['id'=>$product->id]) }}" class="btn btn-group btn-sm btn-info">Edit</a>
{{--                                    <a href="{{ route('admin.product.delete-product',['id'=>$product->id]) }}" class="btn btn-group btn-sm btn-danger">Delete</a>--}}
                                    <form action="{{ route('admin.product.delete-product',['id'=>$product->id]) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <button type="submit" class="btn btn-group btn-sm btn-danger" onclick="return confirm('Are you really want to delete it?')"> Delete</button>
                                    </form>

                                </td>


                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
