<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'tweet_id' => $this->tweet_id,
            'content' => $this->content,
            'commented_at' => $this->created_at->diffForHumans(),
            'user' => UserResource::make($this->whenLoaded('user')),
        ];
    }
}
