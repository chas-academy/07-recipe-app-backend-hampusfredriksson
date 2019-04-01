<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RecipeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
        'user_id' => $this->user_id,
        'recipe_id' => $this->recipe_id,
        'label' => $this->label,
        'image' => $this->image,
        ];
    }
}
