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
                    <form action="{{ route('admin.user.update-user',['id'=>$user->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input class="form-control" name="name" value="{{ $user->name }}" id="name" type="text" />
                            <label for="name">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="email" value="{{ $user->email }}" id="email" type="email" readonly/>
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="password" value="{{ $user->password }}" id="password" type="password"/>
                            <label for="password">Password</label>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <input class="btn btn-primary btn-block" type="submit" href="">
                            </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <a class="btn btn-info btn-block" href="{{route('admin.user.manage-user')}}">Go back to User View page</a>

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

        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
@endsection
