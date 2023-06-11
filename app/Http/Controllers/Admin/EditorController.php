<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreEditorRequest;
use App\Http\Requests\UpdateEditorRequest;
use App\Models\User;
use App\Repositories\Admin\EditorRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EditorController extends Controller
{
    /**
     * @var EditorRepository
     */
    public $editorRepository;

    /**
     * @param EditorRepository $editorRepository
     */
    public function __construct(EditorRepository $editorRepository)
    {
        $this->editorRepository = $editorRepository;
        $this->middleware('can:action.editor')->only(['create','store', 'edit', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) return $this->editorRepository->index();
        return view('admin.editors.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.editors.create');
    }

     /**
     * @param StoreEditorRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(StoreEditorRequest $request)
    {
        $this->editorRepository->store($request->all());
        return redirect()->route('editors.index')->with(['message' => 'Successfully created!']);
    }

    /** @param User $editor
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(User $editor)
    {
        return view('admin.editors.show', compact('editor'));
    }


    /**
     * @param User $operator
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(User $editor)
    {
        return view('admin.editors.edit', compact('editor'));
    }

      /**
     * @param UpdateEditorRequest $request
     * @param User $editor
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateEditorRequest $request, User $editor)
    {
        $this->editorRepository->update($request->all(), $editor);
        return redirect()->route('editors.index')->with(['message' => 'Successfully updated!']);
    }

    /**
     * Summary of destroy
     * @param User $editor
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $editor)
    {
        $this->editorRepository->delete($editor);
        return redirect()->route('editors.index')->with(['message' => 'Successfully deleted!']);
    }
}
