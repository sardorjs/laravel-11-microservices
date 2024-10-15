<?php

namespace App\Services\Client\DTOs\Clients;

use App\General\DTOs\AbstractDTO;
use Carbon\Carbon;

class ClientDTO extends AbstractDTO
{
    /**
     * @param int $id
     * @param string $name
     * @param string $email
     * @param string $phone
     * @param Carbon|null $birthday
     * @param string|null $address
     * @param string|null $city
     * @param string|null $state
     * @param string|null $country
     * @param string|null $zipCode
     */
    public function __construct(
        private readonly int $id,
        private readonly string $name,
        private readonly string $email,
        private readonly string $phone,
        private readonly ?Carbon $birthday,
        private readonly ?string $address,
        private readonly ?string $city,
        private readonly ?string $state,
        private readonly ?string $country,
        private readonly ?string $zipCode,
    ) {}

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return Carbon|null
     */
    public function getBirthday(): ?Carbon
    {
        return $this->birthday;
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * @param array $data
     * @return static
     */
    static function fromArray(array $data): static
    {
        return new static(
            id: $data['id'],
            name: $data['name'],
            email: $data['email'],
            phone: $data['phone'],
            birthday: Carbon::parse($data['birthday']),
            address: $data['address'],
            city: $data['city'],
            state: $data['state'],
            country: $data['country'],
            zipCode: $data['zipCode'],
        );
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'email' => $this->getEmail(),
            'phone' => $this->getPhone(),
            'birthday' => $this->getBirthday(),
            'address' => $this->getAddress(),
            'city' => $this->getCity(),
            'state' => $this->getState(),
            'country' => $this->getCountry(),
            'zipCode' => $this->getZipCode(),
        ];
    }
}
