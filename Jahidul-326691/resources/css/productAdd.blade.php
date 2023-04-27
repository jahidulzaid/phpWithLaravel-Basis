@extends('views.master')
@include('views.include.header')

@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row">

                <div class="col-md-10 offset-1">

                    <div class="card">
                        <div class="card-header">
                            Add Product
                            {{session('message')}}
                        </div>
                        <div class="card-body">
                            <form action="{{ route('productAdd') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Category ID</label>
                                    <div class="col-md-9">
                                        <select name="cat_id" id="" class="form-control">
                                            <option value="">
                                                Select a Category
                                            </option>
                                            @foreach($categories as $category)

                                                <option value="{{ $category->cat_id }}">{{ $category->cat_id }}</option>

                                            @endforeach
                                        </select>
                                    </div>

                                </div>


                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Price</label>
                                    <div class="col-md-9">
                                        <input type="text" name="price" class="form-control" placeholder="price">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control" placeholder="Image">

                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" class="form-control" placeholder="Description" id="" cols="50" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <div class="col-md-12">
                                        <input type="submit" class="form-control btn btn-outline-primary" value="Save Info" placeholder="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>

@endsection




@include('views.include.footer')
