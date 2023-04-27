@extends('master')

@section('content')
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-9 m-auto">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <h4 class="col-md-3">Product Entry</h4>
                                <div class="col-md-9">
                                    <a class="btn btn-outline-primary" href="{{route('product.list')}}">Product List</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('product.add')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <label class="col-md-3 form-label" for="">Name</label>
                                    <div class="col-md-9">
                                        <input class="form-control" name="name" type="text"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 form-label" for="">Price</label>
                                    <div class="col-md-9">
                                        <input class="form-control" name="price" type="number"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 form-label" for="">Category Name</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="cat_id" id="">
                                            <option value="">Select Category</option>
                                            @foreach($getCategory as $category)
                                                <option value="{{$category-> cat_id}}">{{$category-> cat_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-3 form-label" for="">Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description" id="" cols="30" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 form-label" for="">Image</label>
                                    <div class="col-md-9">
                                        <input class="form-control" name="image" type="file"/>
                                    </div>
                                </div>
                                <div class="form-control">
                                    <input class="btn btn-outline-primary" type="submit" value="Enter"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
