<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Retrieve all companies
        $companies = Company::all();

        // Loop through each company
        foreach ($companies as $company) {
            // Create an admin employee for the company
            Employee::create([
                'first_name' => 'Admin',
                'last_name' => 'User ' . $company->name,
                'email' => 'admin@' . strtolower(str_replace(' ', '', $company->name)) . '.com',
                'phone' => $this->generateUniquePhoneNumber(),
                'password' => Hash::make('password'),
                'company_id' => $company->id,
                'is_admin' => 1,
                'status' => 1,
            ]);

            // Create a regular employee for the company
            Employee::create([
                'first_name' => 'User',
                'last_name' => $company->name,
                'email' => 'employee@' . strtolower(str_replace(' ', '', $company->name)) . '.com',
                'phone' => $this->generateUniquePhoneNumber(),
                'password' => Hash::make('password'),
                'company_id' => $company->id,
                'is_admin' => 0,
                'status' => 1,
            ]);
        }
    }

    private function generateUniquePhoneNumber()
    {
        // Generate a unique phone number
        do {
            $phone = '123456789' . mt_rand(1000, 9999); // Modify range as needed
        } while (Employee::where('phone', $phone)->exists());

        return $phone;
    }
}