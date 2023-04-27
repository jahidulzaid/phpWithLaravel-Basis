@extends('admin.master')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Add Product Form</h3>
                    <h4 class="text-black" >{{ session('message') }} </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.product.new-product') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input class="form-control" name="name" id="name" type="text"/>
                            <label for="name">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="email" id="email" type="email"/>
                            <label for="name">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="password" id="password" type="password"/>
                            <label for="name">Password</label>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <input class="btn btn-primary btn-block" type="submit" href="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
{{--        <div class="col-lg-8">--}}
{{--            <div class="card shadow-lg border-0 rounded-lg mt-5">--}}
{{--                <div class="card-header">--}}
{{--                    <h3 class="text-center font-weight-light my-4">Product View</h3>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <table  class="table table-hover table-responsive-lg table-condensed table-striped table-bordered">--}}
{{--                        <tr class="table-responsive-md">--}}
{{--                            <th>Sl</th>--}}
{{--                            <th>Name</th>--}}
{{--                            <th>Category Name</th>--}}
{{--                            <th>Brand Name</th>--}}
{{--                            <th>Description</th>--}}
{{--                            <th>Image</th>--}}
{{--                            <th>Status</th>--}}
{{--                            <th>Action</th>--}}
{{--                        </tr>--}}
{{--                        @foreach($products as $product)--}}
{{--                            <tr>--}}
{{--                                <td>{{ $product->id }}</td>--}}
{{--                                <td>{{ $product->name }}</td>--}}
{{--                                <td>{{ $product->brand_name }}</td>--}}
{{--                                <td>{{ $product->category_name }}</td>--}}
{{--                                <td>{{ $product->description }}</td>--}}
{{--                                <td >--}}
{{--                                    <img src="{{ $product->image }}" class="img-fluid" style="height: 80px; width: 80px" alt="">--}}
{{--                                </td>--}}
{{--                                <td>{{ $product->status==1?'Published':'Unpublished' }}</td>--}}
{{--                                <td class="btn btn-group ">--}}

{{--                                    <a href="{{ route('admin.product.update-product',['id'=>$product->id]) }}" class="btn btn-group btn-sm btn-info">Edit</a>--}}
{{--                                    --}}{{--                                <a href="{{ route('admin.product.delete-product',['id'=>$product->id]) }}" class="btn btn-group btn-sm btn-danger">Delete</a>--}}
{{--                                    <form action="{{ route('admin.product.delete-product',['id'=>$product->id]) }}" method="post" enctype="multipart/form-data">--}}
{{--                                        @csrf--}}
{{--                                        <button type="submit" class="btn btn-group btn-sm btn-danger" onclick="return confirm('Are you really want to delete it?')"> Delete</button>--}}
{{--                                    </form>--}}

{{--                                </td>--}}


{{--                            </tr>--}}
{{--                        @endforeach--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
@endsection
