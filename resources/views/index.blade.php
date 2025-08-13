<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
</head>
<body>
    @if(session('success'))
        <div style="color: green;">{{session('success')}}</div>
    @endif
    <h1>Employee Management System</h1>
    <a href="{{route('create')}}">Create Employee</a>
    {{-- {{dd($employee)}} --}}
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Department</th>
            <th>Language</th>
            <th colspan="2">Action</th>
        </tr>
        @foreach($employee as $emp)
        <tr>
            
            <td>{{$emp->name}}</td>
            <td>{{$emp->email}}</td>
            <td>{{$emp->phone}}</td>
            <td>{{$emp->gender}}</td>
            <td>{{$emp->dob}}</td>
            <td>{{strtoupper($emp->department)}}</td>
            <td>{{implode(',',$emp->language)}}</td>
            <td><a href="{{route('edit',$emp->id)}}">Edit</a></td>
            <td>
                <form action="{{route('delete',$emp->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>