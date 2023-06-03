<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Post extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:post';

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
        $Post_controller = app()->make('App\Http\Controllers\Api\PostsController');
        $Post_controller->post();
        return Command::SUCCESS;
    }
}
