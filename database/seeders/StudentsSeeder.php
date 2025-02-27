<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            ['student_id' => '2202196', 'name' => 'yuri', 'course' => 'Computer Science'],
            ['student_id' => '2002196', 'name' => 'van', 'course' => 'Information Technology'],
            ['student_id' => '2202153', 'name' => 'uychocde', 'course' => 'Computer Science'],
            ['student_id' => '1902296', 'name' => 'ben', 'course' => 'Computer Science'],
            ['student_id' => '2202197', 'name' => 'ten', 'course' => 'Information Technology'],
        ]);
    }
}
