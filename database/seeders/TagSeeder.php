<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::insert([
            ['name_ar' => 'التصميم', 'name_en' => 'Design'],
            ['name_ar' => 'تصميم 3D', 'name_en' => '3D Design'],
            ['name_ar' => 'تنفيذ', 'name_en' => 'Implementation'],
            ['name_ar' => 'الاشراف', 'name_en' => 'Supervision'],
            ['name_ar' => 'الترميم', 'name_en' => 'Restration'],
        ]);
    }
}