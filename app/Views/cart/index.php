<?= $this->include('templates\header.php')?>
<main class="col-12 mt-5 pt-5">
    <div class="container-fluid d-flex flex-wrap">
        <div class="col-12 col-lg-8 px-2">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Imagen</th>
                    <th scope="col">Detalles</th>
                    <th scope="col">Precio</th>
                    <th scope="col"></th>
                    <th scope="col">Cantidad</th>
                    <th scope="col"></th>
                    <th scope="col">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">
                            <figure class="text-center" style="width: 10rem">
                                <img class="mb-2" src="/assets/img/1/1/DonSimonNatureTempranillo_750ML.jpg" alt="" width="70%">
                            </figure>
                        </td>
                        <td>
                            <h5>
                                Don Simon Nature
                            </h5>
                            <p>
                                Un collage de aromas afrutados y característicos de la 
                            </p>
                        </td>
                        <td class="text-center">$ 999.99 </td>
                        <td class="text-center">
                            <input class="btn btn-dark" type="button" value="-">
                        </td>
                        <td class="text-center"> 3 </td>
                        <td class="text-center">
                            <input class="btn btn-dark" type="button" value="+">
                        </td>
                        <td class="text-center">$ 999.99 </td>
                        <th scope="row"><input class="btn btn-danger" type="button" value="X"></th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card">
                <section class="card-body">
                    <form action="">
                        <div class="column">
                            <div class="col-12 text-center">
                                <figure style="height: 4rem">
                                    <img src="/assets/logos/Astoria_black.png" alt="Astoria-Logo" style="height: 100%">
                                </figure>
                            </div>
                            <hr>
                            <div class="col-12 d-flex align-items-center mb-2">
                                <label class="mx-2" for="total">Subtotal: </label>
                                <input class="form-control" type="text" value="2999.97" aria-label="Disabled input example" readonly>
                            </div>
                            <div class="col-12 d-flex align-items-center mb-2">
                                <label class="mx-2" for="total">Descuento: </label>
                                <input class="form-control" type="text" value="39.97" aria-label="Disabled input example" readonly>
                            </div>
                            <div class="col-12 d-flex align-items-center mb-2">
                                <label class="mx-2" for="total">Impuestos: </label>
                                <input class="form-control" type="text" value="10.97" aria-label="Disabled input example" readonly>
                            </div>
                            <hr>
                            <div class="col-12 d-flex align-items-center">
                                <label class="mx-2" for="total">Total: </label>
                                <input class="form-control fs-4 fw-semibold" type="text" value="2970.00" aria-label="Disabled input example" readonly>
                            </div>
                            <div class="col-12 text-center mt-3">
                                <input class="btn btn-dark" type="submit" value="Procesar compra">
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</main>
<?= $this->include('templates\footer.php')?>
