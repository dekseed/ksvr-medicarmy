<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\Role;

use App\Models\User;
use App\Models\TitleName;
use App\Models\Permission;
use App\Models\Affiliation;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('updated_at', 'desc')->get();
        $titleName_id = TitleName::orderBy('updated_at', 'desc')->get();
        $affiliation_id = Affiliation::all();

        return view('pages.admin.manage_users.index', compact('titleName_id', 'affiliation_id'))->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $user = new User();

        $user->titleName_id = $request->titleName_id;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->position = $request->position;
        $user->tel = $request->tel;
        $user->affiliations_id = $request->affiliation_id;
        $user->status = '0';
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if($user->save()){

            return redirect()->route('user.index')->with('success','success');

        }else{
            // Session::flash('danger', 'ไม่สามารถลงข้อมูลได้');
            return redirect()->route('user.index')->with('error','error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->with('roles')->first();
        $titleName_id = TitleName::orderBy('updated_at', 'desc')->get();
        $affiliation_id = Affiliation::all();
        $role_id = Role::all();

         return view('pages.admin.manage_users.show', compact('titleName_id', 'affiliation_id', 'role_id'))->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if ($request->role) {
            $permissions = implode(',', $request->role);
            $user->syncRoles(explode(',', $permissions));
            return redirect()->route('user.show', $user->id)->with('success_role_insert', 'success');

         }else{

            $user->titleName_id = $request->titleName_id;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->position = $request->position;
            $user->tel = $request->tel;
            $user->affiliations_id = $request->affiliation_id;
            $user->email = $request->email;



            if ($user->save()) {
                return redirect()->route('user.show', $user->id)->with('success', 'success');
            } else {
                return redirect()->route('user.show', $user->id)->with('error', 'error');
            }
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
