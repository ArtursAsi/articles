<?php

namespace App\Console\Commands;

use App\Rss;
use App\Services\RssService;
use Illuminate\Console\Command;

class UpdateRss extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:rss';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    private RssService $rssService;

    /**
     * Create a new command instance.
     *
     * @param RssService $rssService
     */
    public function __construct(RssService $rssService)
    {
        parent::__construct();
        $this->rssService = $rssService;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       $this->rssService->update();
    }
}
