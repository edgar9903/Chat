<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;

use App\Repositories\MessageRepository;

use App\Services\MessageService;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ChatController extends Controller
{

    /**
     * @var MessageRepository
     * @var MessageService
     */
    protected $MessageRepository;
    protected $MessageService;

    public function __construct(MessageRepository $MessageRepository,MessageService $MessageService){
        $this->MessageRepository = $MessageRepository;
        $this->MessageService = $MessageService;
    }

    /**
     * view chat.
     *
     * @return void
     */
    public function index()
    {
        $AllMessage = $this->MessageRepository->all();
        return view('message',compact('AllMessage'));
    }


    /**
     * insert message.
     *
     * @param array
     * @return void
     */
    public function create(MessageRequest $MessageRequest)
    {
        $param = [
            'user_id' =>  Auth::user()->id,
            'message' =>  $MessageRequest->input('message'),
        ];
        $this->MessageService->CreateMessage($param);
        return Redirect(route('view.chat'));
    }
}
