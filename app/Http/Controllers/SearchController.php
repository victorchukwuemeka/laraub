<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaravelProjects;
use Illuminate\Database\Eloquent\Builder;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $projects = LaravelProjects::query()
            ->when($query, function (Builder $builder) use ($query) {
                $builder->where(function (Builder $builder) use ($query) {
                    $builder->where('name', 'LIKE', "%{$query}%")
                        ->orWhere('description', 'LIKE', "%{$query}%");
                });
            })
            ->latest()
            ->paginate(15);

        return view('projects.search-result', compact('query', 'projects'));
    }
}