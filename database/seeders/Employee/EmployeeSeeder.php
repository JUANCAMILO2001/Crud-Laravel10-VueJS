<?php

namespace Database\Seeders\Employee;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'name' => 'Jefferson Duque',
            'email' => 'Atlético Nacional',
            'phone' => '36',
            'department_id' => '1',
        ]);
        Employee::create([
            'name' => 'David Loaiza',
            'email' => 'Independiente Medellin',
            'phone' => '29',
            'department_id' => '1',
        ]);
        Employee::create([
            'name' => 'Antony Silva',
            'email' => 'Santa Fe',
            'phone' => '39',
            'department_id' => '2',
        ]);
        Employee::create([
            'name' => 'Daniel Cataño',
            'email' => 'Millonarios',
            'phone' => '31',
            'department_id' => '2',
        ]);
    }
}
