<!-- modomodal -->
<!-- <div class="modal fade modal-xl" id="proveedor"> -->
<!--  <div class="modal-dialog modal-xl">
            <div class="modal-content modal-xl">
              <div class="modal-header modal-xl">
                <h5 class="modal-title modal-xl">Registro de Proveedor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body modal-xl"> -->
<!--  empiesa el cuerpo -->

<!--    CAJAS DE PROVEEEDOR -->


<div role="dialog" class="modal-dialog modal-fade modal-xl" id="proveedor">
  <div class="modal-dialog modal-xl">
    <div class="modal-content modal-xl">
      <div class="modal-header modal-xl">
        <h5 class="modal-title modal-xl">Registro de Proveedor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body modal-xl">

        <!-- esto es de las cajas -->
        <div class="form-group form-group-sm container">
          <label class="col-sm-2 control-label " for="formGroupInputSmall">Nombre de la Empresa</label>
          <div class="col-sm-5 ">
            <input class="form-control margencaja" type="text" id="formGroupInputSmall" placeholder="Escribe"
              name="txtNombreEmpresa">

          </div>
        </div>
        <div class="form-group form-group-sm container">
          <label class="col-sm-2 control-label " for="formGroupInputSmall">RUC</label>
          <div class="col-sm-5 ">
            <input class="form-control margencaja" type="text" id="formGroupInputSmall" placeholder="Small input"
              name="txtRuc">
          </div>
        </div>
        <div class="form-group form-group-sm container">
          <label class="col-sm-2 control-label " for="formGroupInputSmall">Telefono</label>
          <div class="col-sm-5 ">
            <input class="form-control margencaja" type="text" id="formGroupInputSmall" placeholder="Small input"
              name="txtTelefono">
          </div>
        </div>
        <div class="form-group form-group-sm container">
          <label class="col-sm-2 control-label " for="formGroupInputSmall">Direccion</label>
          <div class="col-sm-5 ">
            <input class="form-control margencaja" type="text" id="formGroupInputSmall" placeholder="Small input"
              name="txtDireccion">
          </div>
        </div>
        <div class="form-group form-group-sm container">
          <label class="col-sm-2 control-label " for="formGroupInputSmall">Correo</label>
          <div class="col-sm-5 ">
            <input class="form-control margencaja" type="text" id="formGroupInputSmall" placeholder="Small input"
              name="txtCorreo">
          </div>
        </div>



        <br>


        <!--  esto pertenese al data grip -->
        <div class="container">

          <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th>Marca</th>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Unidad de medid</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
              </tr>
              <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
              </tr>
              <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
              </tr>
              <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
              </tr>
              <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
              </tr>
              <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>john@example.com</td>
              </tr>
              <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>john@example.com</td>
              </tr>
            </tbody>
          </table>
          <!-- </div> -->
        </div>
        <div class="modal-footer modal-xl">
          <form method="POST">
            <button type="submit" class="btn btn-primary" name="btnGuardar">GuardarDD</button>
            <button type="button" class="btn btn-primary">Actualizar</button>
            <button type="submit" class="btn btn-primary" name="btnproveedor">Nuevo</button>
          </form>
        </div>
      </div>
    </div>
  </div>