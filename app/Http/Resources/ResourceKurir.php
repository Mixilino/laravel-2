<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResourceKurir extends JsonResource
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
            'ID ' => $this->resource->id,
            'Naziv firme ' => $this->resource->nazivFirme,
            'PIB ' => $this->resource->pib,
            'Matični broj ' => $this->resource->maticniBroj,
            'Adresa firme' => $this->resource->adresa,
            'Website' => $this->resource->website
        ];
    }
}
