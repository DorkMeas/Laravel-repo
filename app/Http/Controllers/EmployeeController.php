<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', ['employees' => $employees]);
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required|string',
                'age' => 'required|integer',
                'gender' => 'required|string',
                'email' => 'required|email',
                'position' => 'required|string',
                'salary' => 'required|integer'
            ]
        );
        Employee::create($data);
        return redirect(route('employee.index'));
    }

    public function edit(Employee $employee)
    {
        return view('employee.edit', ['employee' => $employee]);
    }

    public function update(Employee $employee, Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required|string',
                'age' => 'required|integer',
                'gender' => 'required|string',
                'email' => 'required|email',
                'position' => 'required|string',
                'salary' => 'required|integer'
            ]
        );
        $employee->update($data);
        return redirect(route('employee.index'));
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect(route('employee.index'));
    }
}
