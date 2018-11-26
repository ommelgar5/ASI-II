<?php

namespace App\Http\ViewComposers;

use App\area_empresa;
use Illuminate\View\View;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\DB;


class categoriasComposer
{

    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $categorias_cantidad;
    protected $categorias;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        // $this->categorias = area_empresa::all();
        $this->categorias_cantidad = DB::select('select a.cod_area,a.area,count(DISTINCT(e.cod_oferta)) as cantidad
            from area_empresa as a 
            left join cargo_empresa as c on a.cod_area = c.cod_area
            left join experiencia_oferta as e on e.cod_cargo = c.cod_cargo
            left join oferta_laboral as o on o.cod_oferta = e.cod_oferta
            where o.isActive =1 
            and Date(o.fechaLimite) >= CURRENT_DATE()
            GROUP by a.cod_area');

        $remover=array();
        foreach ($this->categorias_cantidad as $c) {
            array_push($remover,$c->cod_area);
        }

        $this->categorias = area_empresa::whereNotIn('cod_area',$remover)->get();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('categorias', $this->categorias)->with('categorias_cantidad', $this->categorias_cantidad );
    }


}