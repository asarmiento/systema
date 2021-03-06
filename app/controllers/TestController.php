<?php

class TestController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /test
	 *
	 * @return Response
	 */
	public function index()
	{
		//$test = user::find(14);
        //        echo json_encode($test->tiposUsers->name);

         $separador = explode('-', ('ciclo-C-48'));
        
        $nameProducto = ucwords($separador[0]).' '.ucwords($separador[1]).'-'.$separador[2];

       $producto = Producto::where('name','=',$nameProducto)->get();

       if($producto->isEmpty()):
            return "No se encontro el producto que intenta buscar";
        endif;

        return $producto[0]->id;
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /test/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /test
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /test/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /test/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /test/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /test/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}