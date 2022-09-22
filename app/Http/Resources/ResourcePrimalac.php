<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResourcePrimalac extends JsonResource
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
            'Ime ' => $this->resource->ime,
            'Prezime ' => $this->resource->prezime,
            'Broj telefona ' => $this->resource->brojTelefona,
            'Adresa ' => $this->resource->adresa,
        ];
    }
}
