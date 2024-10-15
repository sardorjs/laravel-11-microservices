<?php

namespace App\Services\Client\DTOs\Clients;

use App\General\DTOs\AbstractDTO;

class ClientsDTO extends AbstractDTO
{
    public function __construct(
        private readonly array $entities,
    ) {}

    static function fromArray(array $data): static
    {
        return new static(
          entities: array_map(function ($entity) {
              return ClientDTO::fromArray($entity);
            }, $data)
        );
    }

    public function jsonSerialize(): mixed
    {
        return [
            'entities' => $this->entities
        ];
    }

    public function getEntities(): array
    {
        return $this->entities;
    }
}
