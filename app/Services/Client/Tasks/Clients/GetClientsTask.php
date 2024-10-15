<?php

namespace App\Services\Client\Tasks\Clients;

use App\Services\Client\DTOs\Clients\ClientsFilterDTO;

class GetClientsTask
{
    public function __construct(
        private readonly
    ) {}

    public function run(ClientsFilterDTO $getClientsDTO)
    {


    }
}
