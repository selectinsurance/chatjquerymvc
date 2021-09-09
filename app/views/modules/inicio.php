<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-1 col-md-2 col-lg-3 col-xl-4"></div>
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
            <div class="container-fluid">
                <div class="row">
                    <center><h1>chat con mvc</h1></center>
                    <div id="CajaChat" class="border">
                        <div id="Conversacion">

                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <form id="frmEnviar" method="post">
                        <label for="telefono">Telefono:</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" value="573166857000" readonly><br>
                        <label for="user">Usuario:</label>
                        <input type="text" name="user" id="user" class="form-control" autocomplete="off" value="Cristian" readonly><br>
                        <label for="mensaje">Mensaje:</label>
                        <textarea name="mensaje" id="mensaje" cols="70" rows="5" placeholder="Mensaje" class="form-control"></textarea><br>
                        <button class="btn btn-danger" type="submit" id="btnEnviar">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-1 col-md-2 col-lg-3 col-xl-4"></div>
    </div>
</div>