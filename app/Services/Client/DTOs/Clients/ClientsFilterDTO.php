<?php

namespace App\Services\Client\DTOs\Clients;

use App\General\DTOs\AbstractDTO;
use Carbon\Carbon;

class ClientsFilterDTO extends AbstractDTO
{
    /**
     * @param string|null $name
     * @param string|null $email
     * @param string|null $phone
     * @param Carbon|null $birthday
     */
    public function __construct(
        private readonly ?string $name,
        private readonly ?string $email,
        private readonly ?string $phone,
        private readonly ?Carbon $birthday,
    ){ }

    /**
     * @param array $data
     * @return static
     */
    static function fromArray(array $data): static
    {
        return new static(
            name: $data['name'],
            email: $data['email'],
            phone: $data['phone'],
            birthday: Carbon::createFromFormat('d-m-Y', $data['birthday']),
        );
    }

    /**
     * @return mixed
     */
    public function jsonSerialize(): mixed
    {
        return [
            'name' => $this->getName(),
            'email' => $this->getEmail(),
            'phone' => $this->getPhone(),
            'birthday' => $this->getBirthday()->format("d-m-Y"),
            'age' => $this->getBirthday()->age,
        ];
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
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
}
