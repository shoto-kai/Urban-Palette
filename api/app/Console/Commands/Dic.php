<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Dic extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:dic';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $Dic_controller = app()->make('App\Http\Controllers\Api\DicController');
        $Dic_controller->dic();
        return Command::SUCCESS;
    }
}
