<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class productResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
      return [
        'nama' => $this->nama,
        'desk' => $this->desc,
        'harga' => $this->price,
        'create_at' => $this->created_at,
        'rating' => $this->Reviews->count() > 0  ? $this->Reviews->sum('start')/$this->Reviews->count() : "belum ada rating",
        'link' => [
          'reviews' => route('review.index',$this->id)
        ]
      ];
    }
}
