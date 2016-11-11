<?php


namespace Venturecraft\Revisionable;


use Illuminate\Support\ServiceProvider;

class RevisionableServiceProvider extends ServiceProvider
{

    public function boot()
    {

        $this->loadMigrationsFrom(__DIR__.'../../migrations');
    }

}