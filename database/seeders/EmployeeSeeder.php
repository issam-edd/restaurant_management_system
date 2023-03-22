<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = ['Mourad Bendriouch', 'Issam Eddine Ennaqiri', 'John Doe', 'Carlos Bravo', 'Jenna Brett', 'Anas Qabil'];

        foreach ($employees as $employee) {
            Employee::create([
                'name' => $employee
            ]);
        }
    }
}
