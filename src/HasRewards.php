<?php

namespace Hankin\LaravelReward;
use Illuminate\Database\Eloquent\Relations\MorphMany;
trait HasRewards
{
    public function rewards(): MorphMany
    {
        return $this->morphMany(config('reward.model'), 'rewardable');
    }

    public function primaryId(): string
    {
        return (string)$this->getAttribute($this->primaryKey);
    }
}