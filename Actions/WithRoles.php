<?php

namespace HosseinSheikh\QueryBehaviors\Actions;

class WithRoles
{
    public function handle($query, \Closure $next)
    {
        $builder = $next($query);

        return $builder->with('roles');
    }
}
