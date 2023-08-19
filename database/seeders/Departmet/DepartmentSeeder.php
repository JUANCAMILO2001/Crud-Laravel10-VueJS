<?php

namespace Database\Seeders\Departmet;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create([
            'name' => 'Antioquia',
        ]);
        Department::create([
            'name' => 'Bogotá',
        ]);
        Department::create([
            'name' => 'Nariño',
        ]);
        Department::create([
            'name' => 'Risaralda',
        ]);
        Department::create([
            'name' => 'Santander',
        ]);
        Department::create([
            'name' => 'Valle del Cauca',
        ]);
    }
}
