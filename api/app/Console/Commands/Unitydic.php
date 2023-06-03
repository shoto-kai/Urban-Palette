<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Unitydic extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:unitydic';

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
        $Unitydic_controller = app()->make('App\Http\Controllers\Api\UnitydicController');
        $Unitydic_controller->Unitydic();
        return Command::SUCCESS;
    }
}
