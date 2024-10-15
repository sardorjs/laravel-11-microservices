<?php

namespace App\Services\Client\Repositories\Client;

use App\Services\Client\DTOs\Clients\ClientsDTO;
use App\Services\Client\DTOs\Clients\ClientsFilterDTO;
use App\Services\Client\Models\Client;
use App\Services\Client\Settings\BaseSettings;

class ClientLocalRepository implements ClientRepoInterface
{

    public function all(ClientsFilterDTO $filter): ClientsDTO
    {
        $records = Client::query()

            ->orderBy('id')
            ->paginate(BaseSettings::DEFAULT_PAGINATION);
    }
}
