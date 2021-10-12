<?php

namespace Hankin\LaravelReward;

use Hankin\LaravelReward\Contracts\Rewardable;
use Hankin\LaravelReward\Models\Reward;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait CanReward
{
    public function reward(Rewardable $rewardable, $amount, $comment_text=null):Reward    
    {
        $rewardModel = config('reward.model');

        $reward = new $rewardModel([
            'amount'    =>  $amount,
            'comment'   =>  $comment_text,
            'rewarded_id'   => $this->primaryId(),
            'rewarded_type' => get_class(),
        ]);
        
        $rewardable->rewards()->save($reward);
        return $reward;
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(config('reward.model'), 'rewarded');
    }

    private function primaryId(): string
    {
        return (string)$this->getAttribute($this->primaryKey);
    }
}