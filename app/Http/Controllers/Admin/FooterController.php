<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateFooterRequest;
use App\Models\Footer;
use App\Repositories\Admin\FooterRepository;

class FooterController extends Controller
{

    public $footerRepository;


    public function __construct(FooterRepository $footerRepository)
    {
        $this->footerRepository = $footerRepository;
        $this->middleware('can:action.footer')->only(['update']);
    }

    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $footer = $this->footerRepository->index();
        return view('admin.footer.index', compact('footer'));
    }

    /**
     * Summary of update
     * @param \App\Http\Requests\UpdateHeaderRequest $request
     * @param \App\Models\Header $footer
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateFooterRequest $request, Footer $footer)
    {
        $this->footerRepository->update($request->all(), $footer);
        return redirect()->route('get-footer')->with(['message' => 'Successfully updated!']);
    }
}
