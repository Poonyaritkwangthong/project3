@extends('layouts.admin')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="text-[24px] font-bold my-4">
                    <h2>Customer Page</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('customer.create') }}"> Create item</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Image</th>
                    <th>Phone Number</th>
                    <th>User Id</th>
                    <th>Password</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->f_name }}</td>
                        <td>{{ $item->l_name }}</td>
                        <td><center><img class="h-1/4 w-1/4" src={{ $item->c_img }}></center></td>
                        <td>{{ $item->phone_n }}</td>
                        <td>{{ $item->user_id }}</td>
                        <td>{{ $item->password }}</td>
                        <td>
                            <form action="{{ route('customer.destroy',$item->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('customer.edit',$item->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger text-red-500">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
@endsection
