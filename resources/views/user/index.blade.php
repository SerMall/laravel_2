@extends('layouts.home_start')
@section('title','User Index')
@section('content')
    <div class="row">
        <div class="col-sm-12">

            <div class="title m-b-md">{{ $user->name }}</div>

            {{--<table class="table">--}}
                {{--<tr>--}}
                    {{--<th>ID</th>--}}
                    {{--<th>First Name</th>--}}
                    {{--<th>Last Name</th>--}}
                    {{--<th>Department</th>--}}
                    {{--<th>Phone No.</th>--}}
                {{--</tr>--}}
                {{--@foreach($employees as $employee)--}}
                    {{--<tr class = "text-center">--}}
                        {{--<td>{{ $employee->id }}</td>--}}
                        {{--<td>{{ $employee->firstname }}</td>--}}
                        {{--<td>{{ $employee->lastname }}</td>--}}
                        {{--<td>{{ $employee->department }}</td>--}}
                        {{--<td>{{ $employee->phone }}</td>--}}
                        {{--<td><a href="{{route('employees.edit',['id'=>$employee->id])}}" class = "btn btn-info">Edit</a></td>--}}
                        {{--<td><a href="{{route('employees.destroy',['id'=>$employee->id])}}" class = "btn btn-danger">Delete</a></td>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}
            {{--</table>--}}
        </div>
    </div>
@endsection
