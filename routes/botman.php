<?php

use BotMan\BotMan\Middleware\Dialogflow;
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$dialogflow = Dialogflow::create(env('DIALOGFLOW_KEY'))->listenForAction();

$botman->middleware->received($dialogflow);

$botman->hears(env('APP_ACTION') . '.greetings.hello', BotManController::class.'@listener')->middleware($dialogflow);
$botman->hears(env('APP_ACTION') . '.greetings.how_are_you', BotManController::class.'@listener')->middleware($dialogflow);

$botman->hears('Start conversation', BotManController::class.'@startConversation');
