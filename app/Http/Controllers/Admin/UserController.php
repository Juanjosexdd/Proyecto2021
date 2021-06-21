<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\Cargo;
use App\Models\Departamento;
use App\Models\Tipodocumento;
use Spatie\Permission\Models\Role;
use App\Models\Log\LogSistema;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $log = new LogSistema();

        $log->user_id = auth()->user()->id;
        $log->tx_descripcion = 'El usuario: ' . auth()->user()->name . ' Ha ingresado a ver los usuarios a las: '
            . date('H:m:i') . ' del día: ' . date('d/m/Y');
        $log->save();

        $users = User::where('estatus' == 1 );
        return view('admin.users.index', compact('users') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $usuarios)
    {
        $departamentos = Departamento::pluck('nombre','id');
        $tipodocumentos = Tipodocumento::pluck('abreviado','id');
        $cargos = Cargo::pluck('nombre','id');
        $roles = Role::all();

        return view('admin.users.create', compact('usuarios','departamentos','tipodocumentos','cargos','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = User::create($request->all());
        if ($request->roles)
        {
            $user->roles()->sync($request->get('roles','user'));
        }
        if ($request->tipodocumentos)
        {
            $user->tipodocumento()->attach($request->tipodocumentos);
        }
        
        
        return redirect()->route('admin.users.index')->with('success', 'El usuario se registro con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $departamentos = Departamento::pluck('nombre','id');
        $tipodocumentos = Tipodocumento::pluck('abreviado','id');
        $cargos = Cargo::pluck('nombre','id');
        $roles = Role::all();

         return view('admin.users.edit', compact('departamentos','tipodocumentos','cargos','roles','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $user->update($request->all());

        if ($request->roles)
        {
            $user->roles()->sync($request->get('roles','user'));
        }

        $user->save();
        
        return redirect()->route('admin.users.index')->with('success', 'El usuario se actualizó con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'El usuario se eliminó con éxito!');
    }

    public function show(User $user)
    {
        $departamentos = Departamento::pluck('nombre','id');
        $tipodocumentos = Tipodocumento::pluck('abreviado','id');
        $cargos = Cargo::pluck('nombre','id');
        $roles = Role::all();

         return view('admin.users.show', compact('departamentos','tipodocumentos','cargos','roles','user'));

    }


    public function UpdateStatus(User $user)
    {
        if($user->estatus=="1"){

            $user->estatus= '0';
            $user->save();
            return redirect()->route('admin.users.index')->with('success', 'El usuario está inactivo con éxito!');

       }else{

            $user->estatus= '1';
            $user->save();
            return redirect()->route('admin.users.index')->with('success', 'El usuario se activó con éxito!');

        }
    }
}
