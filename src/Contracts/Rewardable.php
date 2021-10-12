<?php

namespace Hankin\LaravelReward\Contracts;

use Illuminate\Database\Eloquent\Relations\MorphMany;

interface Rewardable
{
    public function rewards(): MorphMany;

    public function primaryId(): string;
}