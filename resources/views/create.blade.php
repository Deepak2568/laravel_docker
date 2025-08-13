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
        <input type="radio" name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>Male
        <input type="radio" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>Female
        @error('gender')
            <span style="color: red;">{{$message}}</span>
        @enderror <br>
        <input type="date" name="dob" placeholder="Date of Birth" value="{{old('dob')}}"><br>
        <select name="department" id="department">
            <option value="">Select Department</option>
            <option value="it" {{ old('department') == 'it' ? 'selected' : '' }}>IT</option>
            <option value="hr" {{ old('department') == 'hr' ? 'selected' : '' }}>HR</option>
            <option value="finance" {{ old('department') == 'finance' ? 'selected' : '' }}>Finance</option>
            <option value="marketing" {{ old('department') == 'marketing' ? 'selected' : '' }}>Marketing</option>
        </select><br>
        <input type="checkbox" name="language[]" value="php" {{ in_array('php', old('language', [])) ? 'checked' : '' }}>PHP
        <input type="checkbox" name="language[]" value="java" {{ in_array('java', old('language', [])) ? 'checked' : '' }}>Java
        <input type="checkbox" name="language[]" value="python" {{ in_array('python', old('language', [])) ? 'checked' : '' }}>Python
        <input type="checkbox" name="language[]" value="javascript" {{ in_array('javascript', old('language', [])) ? 'checked' : '' }}>JavaScript
        <input type="checkbox" name="language[]" value="c++" {{ in_array('c++', old('language', [])) ? 'checked' : '' }}>C++
        <input type="checkbox" name="language[]" value="c#" {{ in_array('c#', old('language', [])) ? 'checked' : '' }}>C#
        <input type="checkbox" name="language[]" value="ruby" {{ in_array('ruby', old('language', [])) ? 'checked' : '' }}>Ruby
        <input type="checkbox" name="language[]" value="swift" {{ in_array('swift', old('language', [])) ? 'checked' : '' }}>Swift
        <br>
        <input type="submit" value="Create">
    </form>
    
</body>
</html>