@extends('admin.master')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add User Form</h3></div>
                    <div class="card-body">
                        <form action="{{ route('new.user') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" name="name" id="productName" type="text" placeholder="" />
                                <label for="productName"> Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email" id="productName" type="email" placeholder="" />
                                <label for="productName"> Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="password" id="productName" type="password" placeholder="" />
                                <label for="productName"> Password</label>
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
