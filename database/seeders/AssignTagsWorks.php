<?php

namespace Database\Seeders;

use App\Models\OurWork;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssignTagsWorks extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $works = OurWork::all();

        $works->each(function ($work) {
            $work->tags()->sync([$work->tag_id]);
        });
    }
}