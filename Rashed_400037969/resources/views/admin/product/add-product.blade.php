@extends('admin.master')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Product Form</h3></div>
                    <div class="card-body">
                        <form action="{{ route('new.product') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" name="name" id="productName" type="text" placeholder="" />
                                <label for="productName">Product Name</label>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="category_name" id="inputFirstName" type="text" placeholder="" />
                                        <label for="inputFirstName">Category Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" name="brand_name" id="inputLastName" type="text" placeholder="" />
                                        <label for="inputLastName">Brand name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3 mb-md-0">
                                    <textarea name="description" id="" class="form-control" ></textarea>
                                    <label for="">Description</label>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input type="file" name="image" class="form-control">
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
