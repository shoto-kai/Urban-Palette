<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeDictionary extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:make-dictionary';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '地名辞書を作成する';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $MakeDictionary_controller = app()->make('App\Http\Controllers\Api\MakeDictionaryController');
        $MakeDictionary_controller->dictionary();
        return Command::SUCCESS;
    }
}
