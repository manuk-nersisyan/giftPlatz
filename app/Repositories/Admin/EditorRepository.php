<?php

namespace App\Repositories\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;
class EditorRepository implements EditorRepositoryInterface
{
    /**
     * @return mixed
     * @throws \Exception
     */
    public function index()
    {
        $editors = User::select('users.*')
           ->join('roles', 'roles.id', 'users.role_id')
           -> where('users.id', '!=', Auth::id());
        return Datatables::of($editors)
            ->addColumn('action', function ($editor) {
                return '<a href="' . route('editors.show', ['editor' => $editor]) . '"class="btn btn-xs btn-info action-buttons">
                <i class="fa fa-eye"></i>Show</a>
                <a href="' . route('editors.edit', ['editor' => $editor]) . '"class="btn btn-xs btn-primary action-buttons">
                                <i class="fa fa-edit"></i>Edit</a>
                            <form method="POST"action="' . route('editors.destroy', ['editor' => $editor]) . '">
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
     * @param array $editor
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
     */
    public function store(array $editor)
    {
        return User::query()->create([
            'name' => $editor['name'],
            'email' => $editor['email'],
            'password' => Hash::make($editor['password']),
            'role_id' => Role::query()->where('slug', config('role.editor.slug'))->first()->id
        ]);
    }

    /**
     * @param array $request
     * @param $editor
     * @return mixed
     */
    public function update(array $request, $editor)
    {
        return $editor->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => !is_null($request['password'])? Hash::make($request['password']): $editor->password,
        ]);
    }

    /**
     * Summary of delete
     * @param mixed $editor
     * @return mixed
     */
    public function delete($editor)
    {
        return $editor->delete();
    }
}
