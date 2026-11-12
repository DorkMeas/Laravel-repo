<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD App - Create Employee</title>
</head>

<body>
    <h1>Create Employee</h1>
    <form action="{{ route('employee.store') }}" method="POST">
        @csrf
        @method('post')

        <label for="name">Name</label></br>
        <input type="text" name="name" id="name" value="{{ old('name') }}"><br></br>

        <label for="age">Age</label></br>
        <input type="text" name="age" id="age" value="{{ old('age') }}"><br></br>

        <label for="gender">Gender</label></br>
        <input type="text" name="gender" id="gender" value="{{ old('gender') }}"><br></br>

        <label for="email">Email</label></br>
        <input type="text" name="email" id="email" value="{{ old('email') }}"><br></br>

        <label for="position">Position</label></br>
        <input type="text" name="position" id="position" value="{{ old('position') }}"><br></br>

        <label for="salary">Salary</label></br>
        <input type="text" name="salary" id="salary" value="{{ old('salary') }}"><br></br>

        <a href="{{ route('employee.index') }}">Back</a>
        <button type="submit">Create</button>
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
