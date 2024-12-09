<?php

namespace Database\Seeders;

use App\Models\Headline;
use Illuminate\Database\Seeder;

class HeadlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [
            // 'about us',
            'our services',
            'our work',
            'our clients'
        ];

        foreach ($sections as $key) {
            Headline::create(['section' => $key]);
        }
    }
}