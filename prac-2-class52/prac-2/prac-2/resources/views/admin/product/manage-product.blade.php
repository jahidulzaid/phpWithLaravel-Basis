@extends('admin.master')

@section('content')
    <div class="row justify-content-center">

        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Product View</h3>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-hover table-responsive-lg table-condensed table-striped table-bordered">
                        <tr class="table-responsive-md">
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
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
                                    <img src="{{ $product->image }}" class="img-fluid" style="height: 80px; width: 80px" alt="">
                                </td>
                                <td>{{ $product->status==1?'Published':'Unpublished' }}</td>
                                <td class="btn btn-group ">
                                    @if($product->status==1)
                                        <a href="{{ route('product.status',['id'=>$product->id]) }}" class="btn btn-primary btn-sm">Unpublished</a>
                                    @else
                                        <a href="{{ route('product.status',['id'=>$product->id]) }}" class="btn btn-primary btn-sm">published</a>
                                    @endif

                                        <a href="{{ route('admin.product.update-product',['id'=>$product->id]) }}" class="btn btn-group btn-sm btn-info">Edit</a>

{{--                                        <a href="{{ route('admin.product.delete-product',['id'=>$product->id]) }}" class="btn btn-group btn-sm btn-danger">Delete</a>--}}
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
