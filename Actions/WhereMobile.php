<?php

namespace HosseinSheikh\QueryBehaviors\Actions;

class WhereMobile
{
    public function handle($query, \Closure $next, $mobile)
    {
        $builder = $next($query);

        return $builder->where('mobile', "$mobile");
    }
}
