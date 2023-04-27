@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Manage Product</h3></div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>sl</th>
                                    <th>Name</th>
                                    <th>Category Name</th>
                                    <th>Brand Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php $i=1; @endphp
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category_name }}</td>
                                    <td>{{ $product->brand_name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>
                                        <img src="{{ asset($product->image) }}" class="img-fluid" style="height: 50px;width: 50px" alt="">
                                    </td>
                                    <td>{{ $product->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td class="btn-group">
                                        <a href="{{ route('product.edit',['id'=>$product->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                        @if($product->status == 1)
                                            <a href="{{ route('product.status',['id'=>$product->id]) }}" class="btn btn-warning btn-sm mx-1">Unpublished</a>
                                        @else
                                            <a href="{{ route('product.status',['id'=>$product->id]) }}" class="btn btn-success btn-sm mx-1">Published</a>
                                        @endif
                                        <form action="{{ route('product.delete') }}" method="post">
                                            @csrf
                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Delete This !!')"> Delete</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
