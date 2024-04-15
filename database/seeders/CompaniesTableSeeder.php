<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Generate 20 records
       for ($i = 0; $i < 20; $i++) {
        Company::create([
            'name' => 'Company ' . ($i + 1),
            'email' => 'company' . ($i + 1) . '@example.com',
            'logo' => null,
            'url' => 'http://example.com/company' . ($i + 1),
            'status' => 1,
        ]);
    }
    }
}