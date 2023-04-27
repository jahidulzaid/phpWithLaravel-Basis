@extends('admin.master')

@section('content')

    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Category Form</h6>
                        <hr/>
                        <form class="row g-3" action="{{ route('new.author') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $author->id }}" name="id">
                            <div class="col-12">
                                <label class="form-label">Author Name</label>
                                <input type="text" name="category_name" value="{{ $author->author_name }}" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <img src="{{ asset($author->image) }}" alt="">
                                <input type="file" name="image"  class="form-control">
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
