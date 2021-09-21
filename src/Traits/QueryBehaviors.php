<?php

namespace HosseinSheikh\QueryBehaviors\Traits;

use Illuminate\Pipeline\Pipeline;

trait QueryBehaviors
{
    public function scopeBehaviors($query, $queries = [])
    {
        return app(Pipeline::class)
            ->send($query)
            ->through($queries)
            ->thenReturn();

        /*return app(Pipeline::class)
            ->send(static::query())
            ->through($filters)
            ->thenReturn();*/
    }
}
