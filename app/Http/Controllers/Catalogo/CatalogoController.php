<?php
namespace App\Http\Controllers\Catalogo;

use App\Models\Catalogo;

use Styde\Html\Facades\Alert;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CatalogoController extends Controller
{
    public function __construct() {
        $this->beforeFilter('@findCatalogo',['only'=>['show','edit','update','destroy','active']]);
        $this->beforeFilter('@setTable',['only'=>['index','store']]);
    }
    /**
     * Busca Usuario
     * @param  Route  $route [description]
     * @return [type]        [description]
     */
    public function findCatalogo(Route $route)
    {
        $this->Catalogo = Catalogo::findOrFail($route->getParameter('catalogo'));
    }
    /**
     * Busca Usuario
     * @param  Route  $route [description]
     * @return [type]        [description]
     */
    public function setTable(Route $route)
    {
        $this->tablename = $route->table;

        if (isset($this->tablename))Session::set('tablename',$this->tablename);
        else $this->tablename = Session::get('tablename');

        $this->lista = Catalogo::Table($this->tablename)->get();
        $this->idtable = Catalogo::Idtable($this->tablename)->iditem;
        $this->sequence = $this->lista->max('iditem')+1;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Lista = $this->lista;
        return view('catalogo.index',compact('Lista'));
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
        $data['idtable'] = $this->idtable;
        $data['iditem'] = $this->sequence;
        Catalogo::create($data);
        Alert::success('Registro agregado con exito');
        return redirect()->route('catalogo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catalogo = $this->Catalogo;
        Alert::danger('Alerta')
                ->details('Esta seguro que desea eliminar este registro, no podra deshacer esta opcion:');
        return view('catalogo.delete',compact('catalogo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catalogo = $this->Catalogo;
        return view('catalogo.edit',compact('catalogo'));
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
        $this->Catalogo->fill($request->all());
        $this->Catalogo->save();
        Alert::success('Se actualizo el registro');
        return redirect()->route('catalogo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Catalogo::destroy($id);
        Alert::success('Se elimino el registro');
        return redirect()->route('catalogo.index');
    }
    public function active($id)
    {
        $data['activo']=!$this->Catalogo->activo;
        $this->Catalogo->fill($data);
        $this->Catalogo->save();
        Alert::success('Se activo el registro');
        return redirect()->route('catalogo.index');
    }
}