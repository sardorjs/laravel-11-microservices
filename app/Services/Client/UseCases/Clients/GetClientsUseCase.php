<?php

namespace App\Services\Client\UseCases\Clients;

use App\Services\Client\DTOs\Clients\ClientsFilterDTO;
use App\Services\Client\Tasks\Clients\GetClientsTask;

class GetClientsUseCase
{
    public function __construct(
        private readonly GetClientsTask $getClientsTask,
        private readonly SomeActionTask $someActionTask,
    ) {}

    public function execute(ClientsFilterDTO $dto)
    {
        $data = $this->getClientsTask->run();

    }

}
