<?php

namespace App\Services\Client\UI\API\Controllers\MobileApp;

use App\Services\Client\DTOs\Clients\ClientsFilterDTO;
use App\Services\Client\UI\API\Controllers\BaseController;
use App\Services\Client\UseCases\Clients\GetClientsUseCase;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientsController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index(
        Request $request,
        GetClientsUseCase $getClientsUseCase,
    )
    {
        return $getClientsUseCase->execute(ClientsFilterDTO::fromArray($request->all()));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
