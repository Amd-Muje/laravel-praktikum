<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("students")->insert([
            [
                'name' => 'Muje',
                'student_id_number' => 'F55122062',
                'email' => 'muje@gmail.com',
                'phone_number' => '6285348203913',
                'birth_date' => '2003-09-28',
                'gender' => 'Male',
                'status' => 'Active',
                'major_id' => 1,
            ],
            [
                'name' => 'ahmad',
                'student_id_number' => 'F55123120',
                'email' => 'ahmad@gmail.com',
                'phone_number' => '6285323412112',
                'birth_date' => '2003-08-05',
                'gender' => 'Male',
                'status' => 'Inactive',
                'major_id' => 2,
            ],
        ]);
    }
}