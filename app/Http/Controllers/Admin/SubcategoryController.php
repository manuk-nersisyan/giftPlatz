<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreSubcategoryRequest;
use App\Http\Requests\UpdateSubcategoryRequest;
use App\Models\Subcategory;
use App\Repositories\Admin\CategoryRepository;
use App\Repositories\Admin\subcategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SubcategoryController extends Controller
{
    /**
     * Summary of subcategoryRepository
     * @var
     */
    public $subcategoryRepository;

    /**
     * Summary of categoryRepository
     * @var
     */
    public $categoryRepository;

    /**
     * Summary of __construct
     * @param \App\Repositories\Admin\subcategoryRepository $subcategoryRepository
     * @param \App\Repositories\Admin\CategoryRepository $categoryRepository
     */
    public function __construct(SubcategoryRepository $subcategoryRepository,
                                 CategoryRepository $categoryRepository)
    {
        $this->subcategoryRepository = $subcategoryRepository;
        $this->categoryRepository = $categoryRepository;
        $this->middleware('can:action.subcategory')->only(['create','store', 'edit', 'destroy']);
    }

    /**
     * Summary of index
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        if ($request->ajax()) return $this->subcategoryRepository->index();
        return view('admin.subcategories.index');
    }

    /**
     * Summary of create
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $categories = $this->categoryRepository->all();
        return view('admin.subcategories.create', compact('categories'));
    }

    /**
     * Summary of store
     * @param \App\Http\Requests\StoreSubcategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreSubcategoryRequest $request)
    {
        $this->subcategoryRepository->store($request->all());
        return redirect()->route('subcategories.index')->with(['message' => 'Successfully created!']);
    }

    /**
     * Summary of show
     * @param \App\Models\Subcategory $subcategory
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Subcategory $subcategory)
    {
        $categories = $this->categoryRepository->all();
        return view('admin.subcategories.show', compact('categories', 'subcategory'));
    }

    /**
     * Summary of edit
     * @param \App\Models\Subcategory $subcategory
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Subcategory $subcategory)
    {
        $categories = $this->categoryRepository->all();
        return view('admin.subcategories.edit', compact('categories', 'subcategory'));
    }

    /**
     * Summary of update
     * @param \App\Http\Requests\UpdateSubcategoryRequest $request
     * @param \App\Models\Subcategory $subcategory
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateSubcategoryRequest $request, Subcategory $subcategory)
    {
        $this->subcategoryRepository->update($request->all(), $subcategory);
        return redirect()->route('subcategories.index')->with(['message' => 'Successfully updated!']);
    }

    /**
     * Summary of destroy
     * @param \App\Models\Subcategory $subcategory
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Subcategory $subcategory)
    {
        $this->subcategoryRepository->delete($subcategory);
        return redirect()->route('subcategories.index')->with(['message' => 'Successfully deleted!']);
    }
}
