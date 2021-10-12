<?php

namespace Hankin\LaravelReward;

use Illuminate\Support\ServiceProvider;

class RewardServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $config_file = __DIR__."/../config/reward.php";
        
        $this->publishes([
            $config_file => config_path('reward.php')
        ], 'config');

        $this->mergeConfigFrom($config_file, 'reward');

        if(!class_exists('CreateReardsTable')){
            $timestamp = date('Y_m_d_His', time());

            $this->publishes([
                __DIR__. '/../database/migrations/create_rewards_table.pgp.stub' =>
                database_path("migrations/{$timestamp}__create__rewards_table.php")
            ], 'migrations');
        }
    }
}
