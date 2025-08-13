<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System - Create Employee</title>
</head>
<body>
    <h1>Create Employee</h1>
    <form action="{{route('store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{old('name')}}">
        @error('name')
            <span style="color: red;">{{$message}}</span>
        @enderror <br>
        <input type="text" name="email" placeholder="Email" value="{{old('email')}}">
        @error('email')
            <span style="color: red;">{{$message}}</span>
        @enderror <br>
        <input type="text" name="phone" placeholder="Phone" value="{{old('phone')}}">
        @error('phone')
            <span style="color: red;">{{$message}}</span>
        @enderror <br>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        @error('gender')
            <span style="color: red;">{{$message}}</span>
        @enderror <br>
        <input type="date" name="dob" placeholder="Date of Birth" value="{{old('dob')}}">
        <select name="department" id="department">
            <option value="">Select Department</option>
            <option value="1">IT</option>
            <option value="2">HR</option>
            <option value="3">Finance</option>
            <option value="4">Marketing</option>
        </select>
        <input type="submit" value="Create">
    </form>
    
</body>
</html>