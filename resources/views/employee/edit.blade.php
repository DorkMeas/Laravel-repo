<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD App - Update Employee</title>
</head>

<body>
    <h1>Update Employee</h1>
    <form action="{{ route('employee.update', ['employee' => $employee]) }}" method="POST">
        @csrf
        @method('put')

        <label for="name">Name</label></br>
        <input type="text" name="name" id="name" value="{{ $employee->name }}"><br></br>

        <label for="age">Age</label></br>
        <input type="text" name="age" id="age" value="{{ $employee->age }}"><br></br>

        <label for="gender">Gender</label></br>
        <input type="text" name="gender" id="gender" value="{{ $employee->gender }}"><br></br>

        <label for="email">Email</label></br>
        <input type="text" name="email" id="email" value="{{ $employee->email }}"><br></br>

        <label for="position">Position</label></br>
        <input type="text" name="position" id="position" value="{{ $employee->position }}"><br></br>

        <label for="salary">Salary</label></br>
        <input type="text" name="salary" id="salary" value="{{ $employee->salary }}"><br></br>

        <a href="{{ route('employee.index') }}">Back</a>
        <button type="submit">Update</button>
    </form>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</body>

</html>
