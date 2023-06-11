<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Repositories\Admin\CategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    /**
     * Summary of categoryRepository
     * @var
     */
    public $categoryRepository;

    /**
     * Summary of __construct
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->middleware('can:action.category')->only(['create','store', 'edit', 'destroy']);
    }

    /**
     * Summary of index
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        if ($request->ajax()) return $this->categoryRepository->index();
        return view('admin.categories.index');
    }

    /**
     * Summary of create
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Summary of store
     * @param \App\Http\Requests\StoreCategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreCategoryRequest $request)
    {
        $this->categoryRepository->store($request->all());
        return redirect()->route('categories.index')->with(['message' => 'Successfully created!']);
    }

    /**
     * Summary of show
     * @param \App\Models\Category $category
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Summary of edit
     * @param \App\Models\Category $category
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Summary of update
     * @param \App\Http\Requests\UpdateCategoryRequest $request
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $this->categoryRepository->update($request->all(), $category);
        return redirect()->route('categories.index')->with(['message' => 'Successfully updated!']);
    }

    /**
     * Summary of destroy
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Category $category)
    {
        $this->categoryRepository->delete($category);
        return redirect()->route('categories.index')->with(['message' => 'Successfully deleted!']);
    }
}
