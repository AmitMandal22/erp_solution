<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();

        return view('companies', ['companies' => $companies]);
    }


    public function view()
    {
        return view('c-admin-dashboard');
    }

    public function companyDetails()
    {   
        $company_id = auth()->user()->company_id;
        $company = Company::findOrFail($company_id);
    
        return view('company-details', ['company' => $company]);
        
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255','unique:companies,email'],
            'logo' => ['nullable', 'image', 'dimensions:min_width=100,min_height=100'],
            'url' => ['required', 'string', 'url', 'max:255','unique:companies,url'],
        ]);
    
        // If validation fails, return the response with validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        // Create a new company instance
        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->url = $request->url;
    
        // Handle logo upload
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $path = $file->store('logos', 'public'); // Save the file in 'public/storage/logos' folder
            $company->logo = $path;
        }
    
        // Save the company to the database
        $company->save();
    
        // Redirect or return a response after successful insertion
        return response()->json(['message' => 'Company created successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view('add-company');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $company_id = auth('employee')->user()->company_id;

        $company = Company::findOrFail($company_id);
    
        return view('edit-company', ['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'logo' => ['nullable', 'image', 'dimensions:min_width=100,min_height=100'],
            'url' => ['required', 'string', 'url', 'max:255'],
        ]);

        // If validation fails, return the response with validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $company_id = auth('employee')->user()->company_id;
    
        $company = Company::findOrFail($company_id);

        // Update the company data if the corresponding field is provided in the request
        if ($request->filled('name')) {
            $company->name = $request->name;
        }
        if ($request->filled('email')) {
            $company->email = $request->email;
        }
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $path = $file->store('logos', 'public');
            $company->logo = $path;
        }
        if ($request->filled('url')) {
            $company->url = $request->url;
        }

        // Save the company to the database
        $company->save();

        // Return a success response
        return response()->json(['message' => 'Company updated successfully']);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}