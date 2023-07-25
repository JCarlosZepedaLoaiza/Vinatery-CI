<?= $this->include('admin\header.php'); ?>
<div class="container py-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="lead mr-2 icon ion-ios-wine"></i>Botellas</h4>
            <h6 class=" card-subtitle mb-2 text-muted">Panel y vista de los productos</h6>
            <hr class=" hr">
            <div class="d-flex justify-content-between align-items-center">
                <h6>Deseas agregar un nuevo producto?</h6>
                <button class="btn btn-dark" data-toggle="modal" data-target="#nuevo">Agregar</button>
            </div>
            <div class="container py-3" style="overflow-x: scroll">
                <table class=" table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Compras</th>
                            <th scope="col">Disponibilidad</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($product) : ?>
                            <?php foreach ($product as $wine) : ?>
                                <tr>
                                    <th scope="row"><?php echo $wine['id']; ?></th>
                                    <td>
                                        <figure style="width: 8rem">
                                        <img src="/assets/img/<?php echo $wine['id_category']."/". $wine['id_sub'] . "/".$wine['image']; ?>" alt="<?php echo $wine['id_sub']; ?>" width="70%" ></td>
                                        </figure>
                                    <td><?php echo $wine['name']; ?></td>
                                    <td><?php echo $wine['price']; ?></td>
                                    <td><?php echo $wine['stock']; ?></td>
                                    <td><?php echo $wine['buy']; ?></td>
                                    <td><?php echo $wine['active']; ?></td>
                                    <td class=" d-flex">
                                        <button class="btn btn-primary btn-sm ml-2" data-toggle="modal" data-target="#editar"><i class="icon ion-md-create"></i></button>
                                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminar"><i class="icon ion-md-trash"></i></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <!-- nuevo -->
            <div class="modal fade" id="nuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="icon ion-md-add"></i> Nuevo</h5>
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
                                        <label for="exampleInputEmail1" class="font-weight-bold">Descripcion: </label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="form-group col">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Precio: </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group col">
                                        <label for="exampleInputEmail1" class="font-weight-bold">stock: </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group col">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Disponibilidad: </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group col">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Imagen: </label>
                                        <input type="file" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group col">
                                        <label for="exampleInputEmail1" class="font-weight-bold">subcategoria: </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1">
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
                                        <label for="exampleInputEmail1" class="font-weight-bold">Descripcion: </label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="form-group col">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Precio: </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group col">
                                        <label for="exampleInputEmail1" class="font-weight-bold">stock: </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group col">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Disponibilidad: </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group col">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Imagen: </label>
                                        <input type="file" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group col">
                                        <label for="exampleInputEmail1" class="font-weight-bold">subcategoria: </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1">
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
</div>
</div>
<?= $this->include('admin\footer.php'); ?>