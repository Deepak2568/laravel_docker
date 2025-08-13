<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Edit Employee</h1>
    <form action="{{route('update',$employee->id)}}" method="post">
        @csrf
        @method('put')
        <input type="text" name="name" value="{{$employee->name}}">
        <input type="email" name="email" value="{{$employee->email}}">
        <input type="text" name="phone" value="{{$employee->phone}}">
        <input type="radio" name="gender" value="male" {{ $employee->gender == 'male' ? 'checked' : '' }}>Male
        <input type="radio" name="gender" value="female" {{ $employee->gender == 'female' ? 'checked' : '' }}>Female
        <input type="date" name="dob" value="{{$employee->dob}}">
        <select name="department" id="department">
            <option value="">Select Department</option>
            <option value="it" {{ $employee->department == 'it' ? 'selected' : '' }}>IT</option>
            <option value="hr" {{ $employee->department == 'hr' ? 'selected' : '' }}>HR</option>
            <option value="finance" {{ $employee->department == 'finance' ? 'selected' : '' }}>Finance</option>
            <option value="marketing" {{ $employee->department == 'marketing' ? 'selected' : '' }}>Marketing</option>
        </select>
        <input type="checkbox" name="language[]" value="php" {{ in_array('php', $employee->language) ? 'checked' : '' }}>PHP
        <input type="checkbox" name="language[]" value="java" {{ in_array('java', $employee->language) ? 'checked' : '' }}>Java
        <input type="checkbox" name="language[]" value="python" {{ in_array('python', $employee->language) ? 'checked' : '' }}>Python
        <input type="checkbox" name="language[]" value="javascript" {{ in_array('javascript', $employee->language) ? 'checked' : '' }}>JavaScript
        <input type="checkbox" name="language[]" value="c++" {{ in_array('c++', $employee->language) ? 'checked' : '' }}>C++
        <input type="checkbox" name="language[]" value="c#" {{ in_array('c#', $employee->language) ? 'checked' : '' }}>C#
        <input type="checkbox" name="language[]" value="ruby" {{ in_array('ruby', $employee->language) ? 'checked' : '' }}>Ruby
        <input type="checkbox" name="language[]" value="swift" {{ in_array('swift', $employee->language) ? 'checked' : '' }}>Swift
        <input type="submit" value="Update">
    </form>
</body>
</html>
