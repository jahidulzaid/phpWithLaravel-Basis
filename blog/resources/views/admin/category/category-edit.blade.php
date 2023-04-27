@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Category Form</h6>
                        <h3 class="text-center" style="color: green">{{ session('message') }}</h3>
                        <hr/>
                        <form class="row g-3" action="{{ route('category.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$category->id}}">
                            <div class="col-12">
                                <label class="form-label">Category Name</label>
                                <input type="text" name="category_name" value="{{$category->category_name}}" class="form-control">
                            </div>
                            <div class="col-12">
                                <input type="file" name="image" class="form-control">
                                <img src="{{asset($category->image)}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Status</label>
                                <input type="text" name="status" value="{{$category->status==1 ? 'Published':'Unpublished'}}" class="form-control">
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

