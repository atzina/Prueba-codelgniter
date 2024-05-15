<?php

namespace App\Controllers;


use App\Controllers\BaseController;
use App\Database\Seeds\EstadosSeeder;
use App\Models\ClientesModel;




class Clientes extends BaseController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index(): string
    {
        return view ('prototipo');
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new(): string
    {
        return view('nuevo');
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
       $post = $this->request->getPost(['nombre', 'correo_electronico', 'nombre_empresa','logotipo', 'descripcion_producto', 'fecha_registro', 'estado']);

       $clientesModel = new ClientesModel();
       $clientesModel->insert([
            'nombre' => trim($post['nombre']),
            'correo_electronico' => trim($post['correo_electronico']),
            'nombre_empresa' => trim($post['nombre_empresa']),
            'logotipo' => $post['logotipo'],
            'descripcion_producto' => trim($post['descripcion_producto']),
            'fecha_registro' => $post['fecha_registro'],
            'estado' => $post['estado'],
       ]); 

       return redirect()->to('clientes');
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        //
    }
}
