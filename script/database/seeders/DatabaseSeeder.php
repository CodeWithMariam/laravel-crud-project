<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Classes;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Student::truncate();

        $students =  [
            [
                'student_name' => 'Salman Khan',
                'student_class' => '1',
                'student_age' => '25',
                'student_gender' => 'm',
            ],
            [
                'student_name' => 'Salim Khan',
                'student_class' => '3',
                'student_age' => '30',
                'student_gender' => 'm',
            ],
            [
                'student_name' => 'Shahid Kapoor',
                'student_class' => '2',
                'student_age' => '27',
                'student_gender' => 'm',
            ],
            [
                'student_name' => 'Anil Kapoor',
                'student_class' => '4',
                'student_age' => '32',
                'student_gender' => 'm',
            ],
            [
                'student_name' => 'Katrina Kaif',
                'student_class' => '2',
                'student_age' => '24',
                'student_gender' => 'f',
            ],
            [
                'student_name' => 'Kishor Kumar',
                'student_class' => '5',
                'student_age' => '31',
                'student_gender' => 'm',
            ],
            [
                'student_name' => 'Kumar Sanu',
                'student_class' => '1',
                'student_age' => '30',
                'student_gender' => 'm',
            ],
          ];

          Student::insert($students);

          Classes::truncate();

        $classes =  [
            [ 'name' => 'BCA'],
            [ 'name' => 'BSC'],
            [ 'name' => 'BTECH'],
            [ 'name' => 'BCOM'],
            [ 'name' => 'MBA'],
            [ 'name' => 'BBA'],
          ];

          Classes::insert($classes);
    }
}
