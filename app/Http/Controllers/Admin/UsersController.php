<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Catalogo;

use Storage;
use File;

use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;
use Illuminate\Routing\Route;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function __construct() {
        $this->middleware('findUser',['only'=>['show','edit','update','destroy','userActivate']]);
    }
    /**
     * Busca Usuario
     * @param  Route  $route [description]
     * @return [type]        [description]
     */
    /*public function findUser(Route $route)
    {
        $this->user = User::findOrFail($route->getParameter('users'));
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Lista = User::all();
        return view('admin.users.index',compact('Lista'));
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
        $data = $request->all();
        $user = new User($data);
        $file = $request->file('file');
        if (isset($file)) {
            $namefile = $file->getClientOriginalName();
            $user['foto']= $namefile;
            Storage::disk('local')->put('/fotos/'.$namefile,File::get($file));
        };

        $user->save();
        Alert::success('Usuario Registrado con exito');
        return redirect()->route('admin.users.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->user;
        Alert::danger('ALERTA')->details('Esta seguro de eliminar este registro no podra deshacer esta opcion');
        return view('admin.users.delete',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->user;
        return view('admin.users.edit',compact('user'));
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
        $this->user->fill($request->all());
        $this->user->save();
        Alert::success('Usuario actualizado');
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        Alert::success('Usuario Eliminado');
        return redirect()->route('admin.users.index');
    }
}
