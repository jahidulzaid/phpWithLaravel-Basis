@extends('master')

@include('include.header')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9 m-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4>Category Entry</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('catAdd')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-2">
                                    <label class="col-md-3 form-label" for=""><b>Category ID</b></label>
                                    <div class="col-md-9">
                                        <input class="form-control" name="cat_id" type="text"/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label class="col-md-3 form-label" for=""><b>Category Name</b></label>
                                    <div class="col-md-9">
                                        <input class="form-control" name="cat_name" type="text"/>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <input class="btn btn-outline-primary px-3" type="submit" value="Enter"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    <section class="py-5">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-9 m-auto">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <h4>Category List</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <table class="table table-hover">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>ID</th>--}}
{{--                                    <th>Name</th>--}}
{{--                                    <th></th>--}}
{{--                                    <th></th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}

{{--                                <tbody>--}}
{{--                                @foreach($getCategory as $category)--}}
{{--                                    <tr>--}}
{{--                                        <td>{{$category -> cat_id}}</td>--}}
{{--                                        <td>{{$category -> cat_name}}</td>--}}
{{--                                        <td>--}}
{{--                                            <a class="text-decoration-none" href="">Edit</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <form action="" method="post">--}}
{{--                                                @csrf--}}
{{--                                                <input type="hidden" name="brand_id" value="{{$category -> id}}" readonly/>--}}
{{--                                                <button class="btn btn-outline-danger" onclick="return confirm('Are You Sure ?')">--}}
{{--                                                    Delete--}}
{{--                                                </button>--}}
{{--                                            </form>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
@endsection
