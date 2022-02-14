<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use BotMan\BotMan\BotMan as BotMan;

class SendMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Botman
     *
     * @var BotMan\BotMan\BotMan
     */
    protected $botman;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Botman $botman)
    {
        $this->botman = $botman;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->botman->listen();
    }
}
