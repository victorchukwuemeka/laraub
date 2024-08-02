<?php

namespace App\Traits;

trait Viewable
{
    public function incrementViewCountCustom()
    {
        return $this->increment('view_count');
        //$this->
    }
}