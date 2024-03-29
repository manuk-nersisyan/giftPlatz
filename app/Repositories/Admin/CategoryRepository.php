<?php

namespace App\Repositories\Admin;

use App\Models\Category;
use App\Repositories\Admin\CategoryRepositoryInterface;
use Yajra\DataTables\DataTables;

class CategoryRepository implements CategoryRepositoryInterface
{
    /**
     * @return mixed
     * @throws \Exception
     */
    public function index()
    {
        $categories = Category::select('categories.*');
        return Datatables::of($categories)
            ->addColumn('action', function ($category) {
                return '<a href="' . route('categories.edit', ['category' => $category]) . '"class="btn btn-xs btn-primary action-buttons">
                                <i class="fa fa-edit"></i>Edit</a>
                            <form method="POST"action="' . route('categories.destroy', ['category' => $category]) . '">
                                <input type="hidden" name="_token" value="' . csrf_token() . '"/>
                                <input type="hidden" name="_method" value="delete">
                                <button type="submit" class="btn btn-xs btn-danger action-buttons" >
                                    <i class="fa fa-trash"></i>Delete
                                </button>
                            </form>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * @param array $category
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
     */
    public function store(array $category)
    {
        return Category::query()->create([
            'name' => $category['name'],
            'is_active' => isset($category['is_active'])? true: false,
        ]);
    }

    /**
     * @param array $request
     * @param $category
     * @return mixed
     */
    public function update(array $request, $category)
    {
        return $category->update([
            'name' => $request['name'],
            'is_active' => isset($request['is_active'])? true: false,
        ]);
    }

    /**
     * Summary of delete
     * @param mixed $category
     * @return mixed
     */
    public function delete($category)
    {
        return $category->delete();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return Category::query()
            ->select('id','name')
            // ->where('is_active', true)
            ->get();
    }
}
