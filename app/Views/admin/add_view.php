<?= $this->include('admin\header.php'); ?>
<div class="container py-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="icon ion-md-body"></i> Add Admin</h4>
            <h6 class=" card-subtitle mb-2 text-muted">Agrega usuarios con privilegios de Administrador</h6>
            <hr>
            <div class=" container">
                <form action="<?= base_url() ?>/admin/signup" method="post">
                    <?php if (session('duplicate')) : ?>
                        <div class="alert alert-danger text-center" role="alert">
                            El correo ingresado ya esta ocupado por otro usuario!!!
                        </div>
                    <?php endif ?>
                    <?php if (session('created')) : ?>
                        <div class="alert alert-success text-center" role="alert">
                            El usuario se ha creado correctamente.
                        </div>
                    <?php endif ?>
                    <div class="row">
                        <div class="form-group col">
                            <label for="exampleInputEmail1" class="font-weight-bold">Nombre: </label>
                            <input type="text" class="form-control" id="name"  required name="name" value="<?= old('name'); ?>">
                        </div>
                        <div class="form-group col">
                            <label for="exampleInputEmail1" class="font-weight-bold">Apellido P: </label>
                            <input type="text" class="form-control" id="lastname" required name="lastname" value="<?= old('lastname'); ?>">
                        </div>
                        <div class="form-group col">
                            <label for="exampleInputEmail1" class="font-weight-bold">Apellido M: </label>
                            <input type="text" class="form-control" id="surname"  required name="surname" value="<?= old('surname'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="font-weight-bold">Email: </label>
                        <input type="email" class="form-control" id="email" required name="email" value="<?= old('email'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="font-weight-bold">Contraseña: </label>
                        <input type="password" class="form-control" id="password" required name="password" value="<?= old('password'); ?>">
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="exampleInputEmail1" class="font-weight-bold">Teléfono: </label>
                            <input type="tel" class="form-control" id="cel" name="cel" required value="<?= old('cel'); ?>">
                        </div>
                        <div class="form-group col">
                            <label for="exampleInputEmail1" class="font-weight-bold">Dirección: </label>
                            <textarea class="form-control" id="address" rows="3" required name="address" value="<?= old('address') ?>"></textarea>
                        </div>
                    </div>
                    <div class=" d-flex justify-content-end align-items-center py-2">
                        <button class="btn btn-dark">Agrega</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?= $this->include('admin\footer.php'); ?>