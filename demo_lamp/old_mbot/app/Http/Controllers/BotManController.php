<?php

namespace App\Http\Controllers;

use App\Conversations\ExampleConversation;
use Illuminate\Http\Request;
use Mpociot\BotMan\BotMan;
use Illuminate\Support\Facades\Log;

class BotManController extends Controller
{
	/**
	 * Place your BotMan logic here.
	 */
    public function handle()
    {
    	$botman = app('botman');
        $botman->verifyServices('secret_facebook_verify');

        // Simple respond method
        $botman->hears('Hello', function (BotMan $bot) {
            $bot->reply('Hi there :)');
        });

        $botman->listen();

        echo "funciona!";
    }

    /**
     * Loaded through routes/botman.php
     * @param  BotMan $bot
     */
    public function startConversation(BotMan $bot)
    {
        $bot->startConversation(new ExampleConversation());
    }
}
