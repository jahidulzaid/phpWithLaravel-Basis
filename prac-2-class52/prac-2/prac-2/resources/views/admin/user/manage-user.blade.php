@extends('admin.master')
@section('content')
    <div class="row justify-content-center">

        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Product View</h3>
                </div>
                <div class="card-body">
                    <table  class="table table-hover table-responsive-lg table-condensed table-striped table-bordered">
                        <tr class="table-responsive-md">
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        @php $i =1; @endphp
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="btn btn-group ">
                                    <a href="{{ route('admin.user.edit-user',['id'=>$user->id]) }}" class="btn btn-group btn-sm btn-info">Edit</a>
                                    <form action="{{ route('admin.user.delete-user',['id'=>$user->id]) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-group btn-sm btn-danger" onclick="return confirm('Are you really want to delete it?')"> Delete</button>
                                    </form>

                                </td>


                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
