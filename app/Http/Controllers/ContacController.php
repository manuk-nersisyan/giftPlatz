<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use App\Repositories\ContactRepository;
use App\Repositories\FooterRepository;

class ContacController extends Controller
{
    /**
     * Summary of headerRepository
     * @var
     */
    public $footerRepository;

    /**
     * Summary of categoryRepository
     * @var
     */
    public $categoryRepository;

    /**
     * Summary of contactRepository
     * @var
     */
    public $contactRepository;

    /**
     * Summary of __construct
     * @param \App\Repositories\FooterRepository $footerRepository
     * @param \App\Repositories\CategoryRepository $categoryRepository
     * @param \App\Repositories\ContactRepository $contactRepository
     */
    public function __construct(
                                FooterRepository $footerRepository,
                                CategoryRepository $categoryRepository,
                                ContactRepository $contactRepository)
    {
        $this->footerRepository = $footerRepository;
        $this->categoryRepository = $categoryRepository;
        $this->contactRepository = $contactRepository;
    }

    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $footer = $this->footerRepository->index();
        $categories = $this->categoryRepository->index();
        $contact = $this->contactRepository->index();
        return view('contact', compact('footer', 'categories','contact'));
    }
}
