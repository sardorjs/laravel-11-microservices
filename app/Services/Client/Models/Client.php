<?php

namespace App\Services\Client\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Query\Builder;

class Client extends AbstractModel
{
    use HasFactory;

    protected $table = 'clients';

    protected $guarded = ['id'];

    public function scopeFilter(Builder $query): Builder
    {
        return $query->when();
    }
}
