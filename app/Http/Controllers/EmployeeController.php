<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();

        return view('employees', ['employees' => $employees]);
    }

    public function allEmployee()
    {
        $company_id = auth()->user()->company_id;
        $allEmployees = Employee::where('company_id',$company_id)
            ->where('is_admin', 0)
            ->where('status', 1)
            ->get();
    
        return view('c-all-employees', ['allEmployees' => $allEmployees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:employees,email'],
            'phone' => ['required', 'string', 'unique:employees,phone'],
            'password' => ['required', 'string', 'confirmed'], 
            'company_id' => ['required', 'exists:companies,id'],
            'is_admin' => ['required', 'integer', 'in:0,1'],
        ]);

        // If validation fails, return the response with validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Create a new employee instance
        $employee = new Employee();
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->password = Hash::make($request->password);
        $employee->company_id = $request->company_id;
        $employee->is_admin = $request->is_admin;

        // Save the employee to the database
        $employee->save();

        // Redirect or return a response after successful insertion
        return response()->json(['message' => 'Employee created successfully'], 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {   
        $companies = Company::all();
        return view('add-employee')->with('companies',$companies);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $employee = Employee::findOrFail($id);
        // dd($employee);
        return view('edit-employee');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        // dd($employee);
        // die;
        if ($employee instanceof employee) {
            $employee->status = 0;
            $employee->update();
        }
        return response()->json(['success' => true]);
    }
}