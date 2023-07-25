<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class CategoryRepository
{
    public function getCategoriesToForm()
    {
        return DB::table('categories')
            ->select('categories.*')
            ->get()
            ->pluck('name', 'id')
            ->toArray();
    }
}