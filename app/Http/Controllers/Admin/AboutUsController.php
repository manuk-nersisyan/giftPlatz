<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAboutUsRequest;
use App\Models\AboutUs;
use App\Repositories\Admin\AboutUsRepository;

class AboutUsController extends Controller
{
     /**
     * Summary of aboutUsRepository
     * @var
     */
    public $aboutUsRepository;

    /**
     * Summary of __construct
     * @param AboutUsRepository $aboutUsRepository
     */
    public function __construct(AboutUsRepository $aboutUsRepository)
    {
        $this->aboutUsRepository = $aboutUsRepository;
        $this->middleware('can:action.about-us')->only(['update']);
    }

    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $aboutUs = $this->aboutUsRepository->index();
        return view('admin.about-us.index', compact('aboutUs'));
    }

     /**
      * Summary of update
      * @param \App\Http\Requests\UpdateAboutUsRequest $request
      * @param \App\Models\AboutUs $aboutUs
      * @return \Illuminate\Http\RedirectResponse
      */
    public function update(UpdateAboutUsRequest $request, AboutUs $aboutUs)
    {
        $this->aboutUsRepository->update($request->all(), $aboutUs);
        return redirect()->route('get-about-us')->with(['message' => 'Successfully updated!']);
    }
}
