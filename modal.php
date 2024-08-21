<?php ?>


<!-- Modal -->
<div class="modal fade" id="mensaje" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">
                <h2 id="MensajeError" style="text-align: center; font-size: 16px; margin: 25px"></h2>
            </div>
            <div style="margin:10px">
                <div style="text-align: right">

                    <button type="button" class="btn btn-secondary" id="boton_cerrar_mensaje" data-bs-dismiss="modal">
                        Entiendo
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalCargando" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-body">
            <div class="text-center">


                <img style="width: 60px;animation:  spinner-border 1.5s linear infinite !important;"
                     src="imagenes/cargando.png"/>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="historial_cuenta" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-body">
                <div class="col-md-12">
                    <table id="tabla_historial_cuenta" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                        <tr style="background-color: orange;color: white">

                            <th>NOMBRE</th>
                            <th>C.CAJA</th>
                            <th>C.DIRECTA</th>
                            <th>VALOR</th>
                            <th>TOTAL</th>
                            <th>TIPO</th>
                            <th>COMENTARIO</th>
                            <th>REFERENCIA</th>
                            <th>USUARIO</th>
                            <th>FECHA</th>

                        </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>
                </div>
            </div>


            <div style="margin: 5px;padding: 0px">
                <button onclick="crear_excel_cuenta()" type="button" class="btn btn-secondary form-control"
                        id="exportar_excel_cuenta" data-bs-dismiss="modal">Exportar
                </button>
            </div>
            <div style="margin: 5px;padding: 0px">
                <button type="button" class="btn btn-secondary form-control" id="boton_cerrar_mensaje_uno"
                        data-bs-dismiss="modal">Entiendo
                </button>


            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="historial_caja" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-body">
                <div class="col-md-12">
                    <table id="tabla_historial_caja" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                        <tr style="background-color: orange;color: white">

                            <th>NOMBRE</th>
                            <th>VALOR</th>
                            <th>C.CAJA</th>
                            <th>TOTAL</th>
                            <th>TIPO</th>
                            <th>COMENTARIO</th>
                            <th>REFERENCIA</th>
                            <th>USUARIO</th>
                            <th>FECHA</th>

                        </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>
                </div>
            </div>

            <div style="margin: 5px;padding: 0px">

                <button onclick="crear_excel_caja()" type="button" class="btn btn-secondary form-control"
                        id="exportar_excel_caja" data-bs-dismiss="modal">Exportar
                </button>
            </div>
            <div style="margin: 5px;padding: 0px">

                <button type="button" class="btn btn-secondary form-control" id="boton_cerrar_mensaje_dos"
                        data-bs-dismiss="modal">Entiendo
                </button>
            </div>


        </div>
    </div>
</div>


<div class="modal fade" id="rubros_estadistica" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-body" style="background-color: orange">

                <div class="col-md-12">
                    <div id="rubritos_dona" style="width: 100%;height: 700px;background-color: aqua"></div>

                </div>


            </div>
            <div style="margin:10px">
                <div style="text-align: right">

                    <button type="button" class="btn btn-secondary" id="boton_cerrar_mensaje_tres"
                            data-bs-dismiss="modal">Entiendo
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
