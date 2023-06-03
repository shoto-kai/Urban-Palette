<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Insta extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:insta';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'instaの投稿をDBに保存する';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $Instagram_controller = app()->make('App\Http\Controllers\Api\InstagramController');
        $Instagram_controller->insta();
        return Command::SUCCESS;
        
    }
}
