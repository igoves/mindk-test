<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'name' => 'Test',
                'surname' => 'Testovoy',
                'sex' => 'Male',
                'age' => '40',
                'group' => 'test',
                'faculty' => 'Test',
            ],
            [
                'name' => 'Jon',
                'surname' => 'Dou',
                'sex' => 'Male',
                'age' => '20',
                'group' => 'ET32',
                'faculty' => 'PhizTech',
            ],
            [
                'name' => 'Ivan',
                'surname' => 'Pupkin',
                'sex' => 'Male',
                'age' => '21',
                'group' => 'ET32',
                'faculty' => 'PhizTech',
            ],
            [
                'name' => 'Vasil',
                'surname' => 'Smirnov',
                'sex' => 'Male',
                'age' => '22',
                'group' => 'ET32',
                'faculty' => 'PhizTech',
            ],
            [
                'name' => 'Ania',
                'surname' => 'Sidorova',
                'sex' => 'Female',
                'age' => '18',
                'group' => 'C42',
                'faculty' => 'Economic',
            ],
            [
                'name' => 'Sveta',
                'surname' => 'Petrova',
                'sex' => 'Female',
                'age' => '18',
                'group' => 'C42',
                'faculty' => 'Economic',
            ],
            [
                'name' => 'Ruslan',
                'surname' => 'Karpov',
                'sex' => 'Male',
                'age' => '18',
                'group' => 'C42',
                'faculty' => 'Economic',
            ],
        ]);
    }
}
