<?php

namespace App\QueryFilters;

class Limit extends Filter
{
    
    protected function applyFilter($builder){
        return $builder->take(request($this->filterName()));
    }
}