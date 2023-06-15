<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;
use App\Repositories\Admin\ContactRepository;
use Illuminate\Routing\Controller;

class ContactController extends Controller
{

    /**
     * Summary of contactRepository
     * @var
     */
    public $contactRepository;

    /**
     * Summary of __construct
     * @param ContactRepository $contactRepository
     */
    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
        $this->middleware('can:action.category')->only(['update']);
    }

    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $contact = $this->contactRepository->index();
        return view('admin.contacts.index', compact('contact'));
    }

    /**
     * Summary of update
     * @param \App\Http\Requests\UpdateContactRequest $request
     * @param \App\Models\Contact $contact
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        $this->contactRepository->update($request->all(), $contact);
        return redirect()->route('get-contact')->with(['message' => 'Successfully updated!']);
    }
}
