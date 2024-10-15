<?php

namespace App\Services\Client\Repositories\Client;


use App\Services\Client\DTOs\Clients\ClientsDTO;
use App\Services\Client\DTOs\Clients\ClientsFilterDTO;

interface ClientRepoInterface
{
    public function all(ClientsFilterDTO $filter): ClientsDTO;
}
