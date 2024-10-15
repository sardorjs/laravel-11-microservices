<?php

namespace App\General\DTOs;

use JsonSerializable;

abstract class AbstractDTO implements JsonSerializable
{

    // some basic behaviour and constants

    /**
     * @param array $data
     * @return self
     */
    abstract static function fromArray(array $data): static;
}
