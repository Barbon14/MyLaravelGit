<?php

use Illuminate\Database\Seeder;

use App\Employee;
use GuzzleHttp\Promise\Create;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Employee::class, 10) -> create();
    }
}
