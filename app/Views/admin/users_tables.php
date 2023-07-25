<?= $this->include('admin\header.php'); ?>
<div class="container py-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="icon ion-md-people"></i> Usuarios</h4>
            <h6 class=" card-subtitle mb-2 text-muted">Usuarios registrados en la plataforma</h6>
            <div class="container py-3" style="overflow-x: scroll">
                <table class=" table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido P</th>
                            <th scope="col">Apellido M</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($users) : ?>
                            <?php foreach ($users as $user) : ?>
                                <tr>
                                    <th scope="row"><?php echo $user['id']; ?></th>
                                    <td><?php echo $user['name']; ?></td>
                                    <td><?php echo $user['lastname']; ?></td>
                                    <td><?php echo $user['surname']; ?></td>
                                    <td><?php echo $user['email']; ?></td>
                                    <td><?php echo $user['password']; ?></td>
                                    <td>
                                        <button class="btn btn-primary btn-sm ml-2" data-toggle="modal" data-target="#editar"><i class="icon ion-md-create"></i></button>
                                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminar"><i class="icon ion-md-trash"></i></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <!-- edicion -->
            <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="icon ion-md-create"></i> Edita</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class=" container">
                                <form>

                                    <div class="form-group col">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Nombre: </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group col">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Apellido P: </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group col">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Apellido M: </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group col">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Email: </label>
                                        <input type="email" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group col">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Contraseña: </label>
                                        <input type="password" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group col">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Teléfono: </label>
                                        <input type="email" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group col">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Dirección: </label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close </button>
                                <button type="button" class="btn btn-dark">Guardar cambios</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- delete -->
            <div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="icon ion-md-trash"></i> Eliminar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h7>Estás seguro de que quieres eliminar al usuario?</h7>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('admin\footer.php'); ?>