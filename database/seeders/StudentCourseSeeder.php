<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentCourseSeeder extends Seeder
{
    public function run(): void
    {
        $ahmad = Student::create(['name' => 'Ahmad']);
        $sara = Student::create(['name' => 'Sara']);

        $web = Course::create(['title' => 'Web Programming III']);
        $database = Course::create(['title' => 'Database Systems']);

        $ahmad->courses()->attach([$web->id, $database->id]);
        $sara->courses()->attach([$web->id]);
    }
}
