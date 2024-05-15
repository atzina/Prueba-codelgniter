<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

<h3 class="my-3" id="titulo">Registros</h3>

<a href="nuevo.html" class="btn btn-success">Agregar</a>

<table class="table table-hover table-bordered my-3" aria-describedby="titulo">


                <thead class="table-dark">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Nombre empresa</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Logotipo</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Fecha de registro</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Juan Perez</td>
                        <td>juan@gmail.com</td>
                        <td>Correos de México</td>
                        <td>CDMX</td>
                        <td>RECURSOS HUMANOS</td>
                        <td>Descripcion</td>
                        <td>10/12/2024</td>
                        <td>
                            <a href="edita.html" class="btn btn-warning btn-sm me-2">Editar</a>

                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#eliminaModal" data-bs-id="1">Eliminar</button>
                        </td>
                    </tr>

                </tbody>
            </table>


<?= $this->endSection(); ?>