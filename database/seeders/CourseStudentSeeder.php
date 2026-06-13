<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Seeder;

class CourseStudentSeeder extends Seeder
{
    public function run(): void
    {
        $web = Course::create([
            'title' => 'Web Programming III',
        ]);

        $db = Course::create([
            'title' => 'Database Systems',
        ]);

        Student::create([
            'name' => 'Ahmad',
            'course_id' => $web->id,
        ]);

        Student::create([
            'name' => 'Sara',
            'course_id' => $db->id,
        ]);
    }
}
