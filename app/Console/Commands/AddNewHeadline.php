<?php

namespace App\Console\Commands;

use App\Models\Headline;
use Illuminate\Console\Command;

class AddNewHeadline extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:new-headline {section}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create new section headline';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $section = strtolower($this->argument('section'));

        if (empty($section))
            return $this->error('section is required');

        $headline = Headline::createOrFirst(['section' => $section], ['section' => $section]);

        return $this->info($headline->section . ' added successfuly');
    }
}