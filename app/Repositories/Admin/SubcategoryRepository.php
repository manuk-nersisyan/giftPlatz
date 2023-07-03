<?php

namespace App\Repositories\Admin;

use App\Models\Subcategory;
use App\Repositories\Admin\SubcategoryRepositoryInterface;
use Yajra\DataTables\DataTables;

class SubcategoryRepository implements SubcategoryRepositoryInterface
{
    /**
     * @return mixed
     * @throws \Exception
     */
    public function index()
    {
        $subcategories = Subcategory::select('subcategories.*')
            ->with(['category' => function ($user) {
                $user->select(['id', 'name']);
            }]);
        return Datatables::of($subcategories)
            ->addColumn('action', function ($subcategory) {
                return '<a href="' . route('subcategories.edit', ['subcategory' => $subcategory]) . '"class="btn btn-xs btn-primary action-buttons">
                                <i class="fa fa-edit"></i>Edit</a>
                            <form method="POST"action="' . route('subcategories.destroy', ['subcategory' => $subcategory]) . '">
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
     * @param array $subcategory
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
     */
    public function store(array $subcategory)
    {
        return Subcategory::query()->create([
            'category_id' => $subcategory['category_id'],
            'name' => $subcategory['name'],
            'is_active' => isset($subcategory['is_active'])? true: false,
        ]);
    }

    /**
     * @param array $request
     * @param $subcategory
     * @return mixed
     */
    public function update(array $request, $subcategory)
    {
        return $subcategory->update([
            'category_id' => $request['category_id'],
            'name' => $request['name'],
            'is_active' => isset($request['is_active'])? true: false,
        ]);
    }

    /**
     * Summary of delete
     * @param mixed $subcategory
     * @return mixed
     */
    public function delete($subcategory)
    {
        return $subcategory->delete();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getSubcategoriesByCategoaryId($category_id)
    {
        return Subcategory::query()
            ->with([
                'category' => function ($category) {
                    $category->select(['id', 'name']);
                  }])
            ->whereHas('category', function ($query)use($category_id) {
                $query->where('categories.id', $category_id);
            })
            ->select('subcategories.id', 'subcategories.name')
            ->where('subcategories.is_active', true)
            ->get();
    }
}
