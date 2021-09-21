<?php

namespace HosseinSheikh\QueryBehaviors\Actions;

class WhereTitleLike
{
    public function handle($query, \Closure $next, $title)
    {
        $builder = $next($query);

        return $builder->where('title', 'like', "%$title%");
    }
}
