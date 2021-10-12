<?php

namespace Hankin\LaravelReward\Models;

use Hankin\LaravelReward\HasRewards;
use Hankin\LaravelReward\Contracts\Rewardable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Reward extends Model implements Rewardable
{
    use HasRewards;

    protected $guarded = [];

    public function rewardable(): MorphTo
    {
        return $this->morphTo();
    }

    public function rewarded(): MorphTo
    {
        return $this->morphTo();
    }


}