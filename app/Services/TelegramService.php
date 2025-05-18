<?php

namespace App\Services;

use Telegram\Bot\Api;

class TelegramService
{
  protected Api $telegram;
  protected string $chatId;

  public function __construct(Api $telegram)
  {
    $this->telegram = $telegram;
    $this->chatId = env('TELEGRAM_GROUP_ID');
  }

  public function sendMessage(string $message): bool
  {
    $response = $this->telegram->sendMessage([
      'chat_id' => $this->chatId,
      'text' => $message,
      'parse_mode' => 'HTML',
    ]);

    return !empty($response);
  }
}
