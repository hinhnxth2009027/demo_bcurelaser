<?php

use App\Enums\Sort;

function build_sort_query($query_builder, $sort)
{
    switch ($sort) {
        case Sort::SORT_NUMBER_ASC:
            return $query_builder->orderBy('sort_number', 'ASC');
        case Sort::SORT_NUMBER_DESC:
            return $query_builder->orderBy('sort_number', 'DESC');
        case Sort::NAME_ASC:
            return $query_builder->orderBy('name', 'ASC');
        case Sort::NAME_DESC:
            return $query_builder->orderBy('name', 'DESC');
        case Sort::CREATED_AT_ASC:
            return $query_builder->orderBy('created_at', 'ASC');
        case Sort::CREATED_AT_DESC:
            return $query_builder->orderBy('created_at', 'DESC');
        case Sort::TITLE_ASC:
            return $query_builder->orderBy('title', 'ASC');
        case Sort::TITLE_DESC:
            return $query_builder->orderBy('title', 'DESC');
        default:
            return $query_builder;
    }
}

function build_search_query($query_builder, $keyword, array $fields)
{
    if (!$keyword || strlen($keyword) == 0)
    {
        return $query_builder;
    }
    $query_builder = $query_builder->where(function ($inner_query) use ($fields, $keyword) {
        $first_field = array_shift($fields);
        $inner_query = $inner_query->where($first_field, 'like', '%' . $keyword . '%');
        foreach ($fields as $field)
        {
            $inner_query = $inner_query->orWhere($field, 'like', '%' . $keyword . '%');
        }
    });

    return $query_builder;
}
