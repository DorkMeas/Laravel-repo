<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD App - Employees Table</title>
</head>

<body>
    <h1>Employee Info</h1>
    <div>
        <table border="1" rules="all" width="100%" cellpadding="5">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Position</th>
                <th>Salary</th>
                <th colspan="2">Action</th>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td align="center">{{ $employee->id }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->age }}</td>
                        <td>{{ $employee->gender }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->position }}</td>
                        <td>{{ $employee->salary }}</td>
                        <td>
                            <a href="{{ route('employee.edit', ['employee' => $employee]) }}">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('employee.destroy', ['employee' => $employee]) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this employee?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table></br>
        <button><a href="{{ route('employee.create') }}">Add Employee</a></button>
    </div>
</body>

</html>
