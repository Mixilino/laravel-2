<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ResourceKurir;
use App\Http\Resources\ResourcePrimalac;



class ResourcePosiljka extends JsonResource
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
            'Šifra pošiljke ' => $this->resource->sifraPosiljke,
            'Težina ' => $this->resource->tezina,
            'Adresa ' => $this->resource->adresa,
            'Kurir ' => new ResourceKurir($this->resource->kurir),
            'Primalac' => new ResourcePrimalac($this->resource->primalac)
        ];
    }
}
