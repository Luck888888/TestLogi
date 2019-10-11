<?php

namespace App\Events;

use App\Kards;
use App\project;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class onAddArticleEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user_name;
    public $article_name;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Kards $kards,project $proj)
    {//формирование значения свойств
        $this->user_name=$proj->name;
        $this->article_name=$kards->name;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
