<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Employee::insert([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'position' => 'Manager',
                'phone' => '123456789',
                'hire_date' => '2022-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'position' => 'Developer',
                'phone' => '987654321',
                'hire_date' => '2021-06-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mark Spencer',
                'email' => 'mark@example.com',
                'position' => 'Designer',
                'phone' => '555666777',
                'hire_date' => '2020-09-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Emily Watson',
                'email' => 'emily@example.com',
                'position' => 'HR',
                'phone' => '444555666',
                'hire_date' => '2019-04-25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Michael Johnson',
                'email' => 'michael@example.com',
                'position' => 'Marketing',
                'phone' => '333444555',
                'hire_date' => '2018-11-30',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
        //
    }
}
