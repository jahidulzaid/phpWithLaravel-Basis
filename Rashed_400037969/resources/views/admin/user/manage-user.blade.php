@extends('admin.master')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add User Form</h3></div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>sl</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php $i=1; @endphp
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td class="btn-group">
                                        <a href="{{ route('user.edit',['id'=>$user->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('user.delete') }}" method="post">
                                            @csrf
                                            <input type="hidden" value="{{ $user->id }}" name="id">
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
