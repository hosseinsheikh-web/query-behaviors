<?php

namespace HosseinSheikh\QueryBehaviors\Actions;

class WhereId
{
    public function handle($query, \Closure $next, $id)
    {
        $builder = $next($query);

        return $builder->whereId($id);
    }
}
