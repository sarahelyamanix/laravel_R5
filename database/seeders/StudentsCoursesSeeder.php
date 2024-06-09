<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Course;

class StudentsCoursesSeeder extends Seeder
{
    public function run()
    {
        // Find or create sample students and courses
        $student1 = Student::create(['studentName' => 'John Doe', 'studentAge' => 20]);
        $student2 = Student::create(['studentName' => 'Jane Smith', 'studentAge' => 22]);
        
        $course1 = Course::create(['title' => 'Mathematics']);
        $course2 = Course::create(['title' => 'Science']);

        // Attach courses to students
        $student1->courses()->attach([$course1->id, $course2->id]);
        $student2->courses()->attach([$course1->id]);
    }
}
