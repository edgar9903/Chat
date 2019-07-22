<?php

namespace App\Repositories;

use App\Message;

use App\Repositories\Contracts\MessageRepositoryInterface;

class MessageRepository extends Repository implements MessageRepositoryInterface
{

    /**
     * @var model
     */
    protected $model;

    public function __construct(Message $chat)
    {
        $this->model = $chat;
    }


}