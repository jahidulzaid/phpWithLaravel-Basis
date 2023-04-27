@extends('master')

@include('include.header')

@section('content')

    <section class="my-3">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">
                            <h1>Prodcut List</h1>
                        </div>
                        <div class="card-body">
                            <div>
                                <table class="table table-hover table-striped table-bordered">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Category Is</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($getProduct as $product)
                                        <tr>
                                            <td>
                                                <img class="img-fluid" src="{{$product -> image}}" alt="" style="height: 7vh">
                                            </td>
                                            <td>{{$product -> name}}</td>
                                            <td>{{$product -> cat_id}}</td>
                                            <td>{{$product -> brand_id}}</td>
                                            <td>{{$product -> price}}</td>
                                            <td>
                                                <a  href="">Edit</a>
                                            </td>
                                            <td>
                                                <form action="" method="post">
                                                    @csrf
                                                    <input type="hidden" name="brand_id" value="{{$product -> id}}" readonly/>
                                                    <button class="btn btn-outline-danger" onclick="return confirm('Are You Sure ?')">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
