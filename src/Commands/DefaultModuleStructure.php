<?php

namespace Rafiadev11\Modulastic\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class DefaultModuleStructure extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'modulastic:default';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scaffold the default module structure';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->line('Scaffolding the default module structure. Please wait...');
        if(!File::exists(base_path('Modules'))) {
            File::makeDirectory(base_path('Modules'));
            $this->line('Modules directory created');
        }
        $this->line('Done');
    }
}
