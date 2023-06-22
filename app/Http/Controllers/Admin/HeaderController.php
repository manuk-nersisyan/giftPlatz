<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateHeaderRequest;
use App\Models\Header;
use App\Repositories\Admin\HeaderRepository;

class HeaderController extends Controller
{

    public $headerRepository;


    public function __construct(HeaderRepository $headerRepository)
    {
        $this->headerRepository = $headerRepository;
        $this->middleware('can:action.header')->only(['update']);
    }

    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $header = $this->headerRepository->index();
        return view('admin.header.index', compact('header'));
    }

    /**
     * Summary of update
     * @param \App\Http\Requests\UpdateHeaderRequest $request
     * @param \App\Models\Header $header
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateHeaderRequest $request, Header $header)
    {
        $this->headerRepository->update($request->all(), $header);
        return redirect()->route('get-header')->with(['message' => 'Successfully updated!']);
    }
}
