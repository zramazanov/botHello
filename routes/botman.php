<?php
use App\Http\Controllers\BotManController;
use BotMan\BotMan\BotMan;
use App\Conversations\ExampleConversation;

$botman = resolve('botman');

$botman->hears('.*hi.*', function ($bot) {
    $bot->reply('Hello!');
});
$botman->hears('.*by.*', function ($bot) {
    $bot->reply('By!');
});
/*
$botman->hears('/start', function (BotMan $bot) {
    $bot->startConversation(new ExampleConversation());
});
*/
$botman->fallback(function ($bot) {
    $bot->reply('Sorry I did not understand!');
});
