<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('majors')->insert([
        'id' => 1,
        'name' => 'ピアノ',
        'department_id' => 1,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        'deleted_at' => new DateTime(),
        ]);
        
        DB::table('majors')->insert([
        'id' => 2,
        'name' => '声楽',
        'department_id' => 1,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        'deleted_at' => new DateTime(),
        ]);
        
        DB::table('majors')->insert([
        'id' => 3,
        'name' => '弦楽器',
        'department_id' => 1,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        'deleted_at' => new DateTime(),
        ]);
        
        DB::table('majors')->insert([
        'id' => 4,
        'name' => '管楽器',
        'department_id' => 1,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        'deleted_at' => new DateTime(),
        ]);
        
        DB::table('majors')->insert([
        'id' => 5,
        'name' => '打楽器（ピアノは含まない）',
        'department_id' => 1,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        'deleted_at' => new DateTime(),
        ]);
        
        DB::table('majors')->insert([
        'id' => 6,
        'name' => 'ジャズ',
        'department_id' => 1,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        'deleted_at' => new DateTime(),
        ]);
        
        DB::table('majors')->insert([
        'id' => 7,
        'name' => '作曲',
        'department_id' => 1,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        'deleted_at' => new DateTime(),
        ]);
        
        DB::table('majors')->insert([
        'id' => 8,
        'name' => 'コンピューター音楽',
        'department_id' => 1,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        'deleted_at' => new DateTime(),
        ]);
        
        DB::table('majors')->insert([
        'id' => 9,
        'name' => '音楽文化教育',
        'department_id' => 2,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        'deleted_at' => new DateTime(),
        ]);
    }
}
