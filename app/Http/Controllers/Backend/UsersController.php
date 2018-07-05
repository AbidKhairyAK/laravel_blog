<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Post;

class UsersController extends BackendController
{
    protected $uploadPath;

    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = public_path(config('cms.image.directory'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('posts')->orderBy('name')->paginate($this->limit);
        $usersCount = User::count();

        return view('backend.users.index', compact('users','usersCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new user();
        return view('backend.users.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\UserStoreRequest $request)
    {
        $request->merge([
            'password' => bcrypt($request->password)
        ]);

        $user = User::create($request->all());
        $user->attachRole($request->role);


        return redirect('backend/users')->with('message','New user was created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('backend.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\UserUpdateRequest $request, $id)
    {
        if (empty($request->password)){
            unset($request['password']);
        }

        $user = User::findOrFail($id);

        $user->update($request->all());

        $message = [
            'type' => 'message',
            'msg'  => 'User was updated successfully!'
        ];

        if ($id != config('cms.default_user_id'))
        {
            $user->detachRoles();
            $user->attachRole($request->role);
        } 
        elseif ($request->role != 1) 
        {
            $message['type'] = 'error-message';
            $message['msg']  = "You can't change the default user role's";
        }

        return redirect('backend/users')->with($message['type'], $message['msg']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requests\UserDestroyRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $deleteOption = $request->delete_option;
        $selectedUser = $request->selected_user;
        
        if ($deleteOption == "delete")
        {
            $count = $user->posts()->withTrashed()->count();

            for ($i = 0; $i < $count; $i++){
                $image = $user->posts()->withTrashed()->first()->image;
                $user->posts()->withTrashed()->first()->forceDelete();
                $this->removeImage($image);
            }
        }
        elseif ($deleteOption == "attribute")
        {
            $user->posts()->withTrashed()->update(['author_id' => $selectedUser]);
        }

        $user->delete();

        return redirect('backend/users')->with('message','User was deleted successfully!');
    }

    public function confirm(Requests\UserDestroyRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $users = User::where('id', '!=', $user->id)->pluck('name', 'id');

        return view('backend.users.confirm', compact('user','users'));
    }

    private function removeImage($image)
    {
        if ( ! empty($image) ) {

            $imagePath = $this->uploadPath.'/'.$image;
            $ext = substr(strrchr($image, '.'), 1);
            $thumbnail = str_replace(".{$ext}", "_thumb.{$ext}", $image);
            $thumbnailPath = $this->uploadPath.'/'.$thumbnail;

            if ( file_exists($imagePath) ) unlink($imagePath);
            if ( file_exists($thumbnailPath) ) unlink($thumbnailPath);
        } 
    }
}
