<?php

namespace App\Services;

use App\Repositories\MessageRepository;

class MessageService
{

    /**
     * @var MessageRepository
     */
    protected $MessageRepository;

    public function __construct(MessageRepository $MessageRepository){
        $this->MessageRepository = $MessageRepository;
    }

    /**
     * Set message.
     *
     * @param array
     */
    public function CreateMessage(array $array){
        $this->MessageRepository->create($array);
    }
}