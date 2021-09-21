<?php

namespace HosseinSheikh\QueryBehaviors\Actions;

class WhereMobileLike
{
    public function handle($query, \Closure $next, $mobile)
    {
        $builder = $next($query);

        return $builder->where('mobile', "like", "%$mobile%");
    }
}
