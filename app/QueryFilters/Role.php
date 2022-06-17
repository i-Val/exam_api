<?php

namespace App\QueryFilters;

class Role extends Filter
{
    protected function applyFilter($builder){
        return $builder->where($this->filterName(), request($this->filterName()));
    }
}
