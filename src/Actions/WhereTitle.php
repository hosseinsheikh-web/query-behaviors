<?php

namespace HosseinSheikh\QueryBehaviors\Actions;

class WhereTitle
{
    public function handle($query, \Closure $next, $title)
    {
        $builder = $next($query);

        return $builder->whereTitle($title);
    }
}
