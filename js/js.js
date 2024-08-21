var array_historial = [];
var valor_caja = 0;
var link_global = "https://cnbjimmy.controlsistemasjl.com/";
//var link_global = "http://localhost/";
$(document).ready(function () {


        window.addEventListener("keydown", (e) => {

            var code = e.code;

            if (code === "F3") { //Enter keycode//103 ES LA G 114 ES F3 //71 shift +g
                e.preventDefault();
                var comision_operaciones = document.getElementById("comision_operaciones");
                var tipo_transacciones_oculto = document.getElementById("tipo_transacciones_oculto");
                if (comision_operaciones) {
                    agregar_transaccion_historial();

                } else if (tipo_transacciones_oculto) {
                    agregar_actualizar_tipo_transaccion();
                } else {
                    agregar_transaccion_historial_movimiento();
                }


            } else if (code === "Enter" || code === "Intro") {


                var comision_operaciones = document.getElementById("comision_operaciones");
                var boton_cerrar_mensaje = document.getElementById("boton_cerrar_mensaje");

                var boton_cerrar_mensaje_uno = document.getElementById("boton_cerrar_mensaje_uno");
                var boton_cerrar_mensaje_dos = document.getElementById("boton_cerrar_mensaje_dos");
                var boton_cerrar_mensaje_tres = document.getElementById("boton_cerrar_mensaje_tres");

                var billete_uno = document.getElementById("billete_uno");

                if (boton_cerrar_mensaje) {
                    $("#boton_cerrar_mensaje").click();
                }

                /////////
                if (boton_cerrar_mensaje_uno) {
                    $("#boton_cerrar_mensaje_uno").click();
                }
                if (boton_cerrar_mensaje_dos) {
                    $("#boton_cerrar_mensaje_dos").click();
                }
                if (boton_cerrar_mensaje_tres) {
                    $("#boton_cerrar_mensaje_tres").click();
                }
                /////////

                if (comision_operaciones) {

                    var primer = document.getElementById("entidad_banco_select");
                    var primero_focus = (document.activeElement === primer);

                    var segundo = document.getElementById("tipo_transaccion");
                    var segundo_focus = (document.activeElement === segundo);

                    var tercero = document.getElementById("valor");
                    var tercero_focus = (document.activeElement === tercero);

                    var cuarto = document.getElementById("comision_operaciones");
                    var cuarto_focus = (document.activeElement === cuarto);

                    var quinto = document.getElementById("cedula_ruc");
                    var quinto_focus = (document.activeElement === quinto);

                    var sexto = document.getElementById("referencia");
                    var sexto_focus = (document.activeElement === sexto);

                    var septimo = document.getElementById("comentario");
                    var septimo_focus = (document.activeElement === septimo);


                    if (primero_focus) {
                        segundo.focus();
                    } else if (segundo_focus) {
                        tercero.focus();
                    } else if (tercero_focus) {
                        cuarto.focus();
                    } else if (cuarto_focus) {
                        quinto.focus();
                    } else if (quinto_focus) {
                        sexto.focus();
                    } else if (sexto_focus) {
                        septimo.focus();
                    } else {
                        primer.focus();
                    }
                } else if (billete_uno) {
                    var primer = document.getElementById("billete_uno");
                    var primero_focus = (document.activeElement === primer);

                    var segundo = document.getElementById("billete_cinco");
                    var segundo_focus = (document.activeElement === segundo);

                    var tercero = document.getElementById("billete_dies");
                    var tercero_focus = (document.activeElement === tercero);

                    var cuarto = document.getElementById("billete_veinte");
                    var cuarto_focus = (document.activeElement === cuarto);


                    var quinto = document.getElementById("billete_cincuenta");
                    var quinto_focus = (document.activeElement === quinto);

                    var sexto = document.getElementById("billete_cien");
                    var sexto_focus = (document.activeElement === sexto);

                    var septimo = document.getElementById("moneda_uno");
                    var septimo_focus = (document.activeElement === septimo);

                    var octavo = document.getElementById("moneda_cinco");
                    var octavo_focus = (document.activeElement === octavo);

                    var noveno = document.getElementById("moneda_dies");
                    var noveno_focus = (document.activeElement === noveno);


                    var decimo = document.getElementById("moneda_veinticinco");
                    var decimo_focus = (document.activeElement === decimo);

                    var once = document.getElementById("moneda_cincuenta");
                    var once_focus = (document.activeElement === once);

                    var doce = document.getElementById("moneda_undolar");
                    var doce_focus = (document.activeElement === doce);

                    if (primero_focus) {
                        segundo.focus();
                    } else if (segundo_focus) {
                        tercero.focus();
                    } else if (tercero_focus) {
                        cuarto.focus();
                    } else if (cuarto_focus) {
                        quinto.focus();
                    } else if (quinto_focus) {
                        sexto.focus();
                    } else if (sexto_focus) {
                        septimo.focus();
                    } else if (septimo_focus) {
                        octavo.focus();
                    } else if (octavo_focus) {
                        noveno.focus();
                    } else if (noveno_focus) {
                        decimo.focus();
                    } else if (decimo_focus) {
                        once.focus();
                    } else if (once_focus) {
                        doce.focus();
                    } else {
                        primer.focus();
                    }

                } else {
                    var primer = document.getElementById("entidad_banco_select");
                    var primero_focus = (document.activeElement === primer);

                    var segundo = document.getElementById("tipo_transaccion_movimientos");
                    var segundo_focus = (document.activeElement === segundo);

                    var tercero = document.getElementById("valor");
                    var tercero_focus = (document.activeElement === tercero);

                    var cuarto = document.getElementById("comentario");
                    var cuarto_focus = (document.activeElement === cuarto);


                    if (primero_focus) {
                        segundo.focus();
                    } else if (segundo_focus) {
                        tercero.focus();
                    } else if (tercero_focus) {
                        cuarto.focus();
                    } else {
                        primer.focus();
                    }
                }

                /*
                                $('#mensaje').modal('hide');
                                $('body').removeClass('modal-open');
                                $('.modal-backdrop').remove();
                                */

                e.preventDefault();

            }
        }, true);

        var tabla_entidades = document.getElementById("tabla_entidades");
        var entidad_banco_select = document.getElementById("entidad_banco_select");
        var tipo_transaccion = document.getElementById("tipo_transaccion");
        var tipo_transaccion_movimientos = document.getElementById("tipo_transaccion_movimientos");
        var tabla_tipos_transaccion = document.getElementById("tabla_tipos_transaccion");
        var tabla_valores_cuenta = document.getElementById("tabla_valores_cuenta");

        var tabla_valores_cuenta_arqueo = document.getElementById("tabla_valores_cuenta_arqueo");
        var tabla_usuarios = document.getElementById("tabla_usuarios");
        var tipo_transacciones_oculto = document.getElementById("tipo_transacciones_oculto");
        /*var ocultar_reporte = document.getElementById("ocultar_reporte");

        if (ocultar_reporte) {
            $("#exportar_excel_caja").hide();
            $("#exportar_excel_cuenta").hide();
        }
        */
        if (tipo_transacciones_oculto) {
            obtener_nombre();
        }

        if (tabla_usuarios) {
            obtener_usuarios();
        }
        if (tabla_entidades) {
            obtener_entidades();
        }
        if (tabla_valores_cuenta) {
            obtener_valores_caja();
            obtener_valores_cuenta();
        }
        if (tabla_valores_cuenta_arqueo) {

            obtener_valores_cuenta_arqueo();
        }
        if (entidad_banco_select) {
            obtener_entidades_select();


        }

        if (tipo_transaccion) {
            obtener_tipo_transaccion_select();
        }
        if (tipo_transaccion_movimientos) {
            obtener_tipo_transaccion_select_movimiento();
        }
        if (tabla_tipos_transaccion) {
            obtener_tipos_transaccion();
        }

        $('.js-example-basic-single').select2();
    }
)
;

function cambio_select_tipo_comision(elemento) {

    var select_idLocal = document.getElementById("tipo_comision");
    var idLocal = select_idLocal.value;


    $("#valor_porcentaje").val("");


    if (idLocal !== "0") {
        document.getElementById("valor_porcentaje").removeAttribute("disabled");
    } else {
        document.getElementById("valor_porcentaje").setAttribute("disabled", "disabled");

    }
    /*
    if (idLocal != 0) {
        var comision = $('option:selected', elemento).attr('comision');

        $("#comision_operaciones").val(comision);
    } else {
        $("#comision_operaciones").val(0.25);
    }
    */

}

function cambio_select_banco(elemento) {

    var select_idLocal = document.getElementById("entidad_banco_select");
    var idLocal = select_idLocal.value;
    var nombre_local = select_idLocal.options[select_idLocal.selectedIndex].text;


    if (idLocal != 0) {
        var comision = $('option:selected', elemento).attr('comision');

        $("#comision_operaciones").val(comision);
    } else {
        $("#comision_operaciones").val(0.25);
    }

}

function formatear_tabla_tipo_transaccion() {
    $('#tabla_tipos_transaccion').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
    });
    $("#tabla_tipos_transaccion tr").click(function () {
        $(this).addClass('selected').siblings().removeClass('selected');

        var value = $(this).index();

        var id = $(this).find("td:eq(0)").text();
        var nombre = $(this).find("td:eq(1)").text();
        var tipo_rubro = $(this).find("td:eq(2)").text();


        $("#id").val(id);
        $("#nombre_transaccion").val(nombre);

        $("#tipo_rubro").val(tipo_rubro);
    });
}

function formatear_tabla() {
    $('#tabla_entidades').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
    });
    $("#tabla_entidades tr").click(function () {
        $(this).addClass('selected').siblings().removeClass('selected');

        var value = $(this).index();

        var id = $(this).find("td:eq(0)").text();
        var nombre = $(this).find("td:eq(1)").text();
        var acronimo = $(this).find("td:eq(2)").text();
        var comision = $(this).find("td:eq(3)").text();


        $("#id").val(id);
        $("#nombre_banco").val(nombre);
        $("#acronimo").val(acronimo);
        $("#comision").val(comision);
    });
}

function cargandoCerrar() {
    $('#ModalCargando').modal('hide');
    $('body').removeClass('modal-open');
    $('.modal-backdrop').remove();
}

function mensaje(msj) {
    $('#MensajeError').text(msj);
    $('#mensaje').modal('show');

}

function cargando() {
    $('#ModalCargando').modal('show');
}

async function logear() {

    var usuario = $("#input_usuario").val();
    var claveSin = $("#input_clave").val();
    var clave = md5(claveSin);

    //var select_idLocal = document.getElementById("idlocal");
    //var idLocal = select_idLocal.value;
    //var nombre_local = select_idLocal.options[select_idLocal.selectedIndex].text;
    if (usuario.length > 0 && claveSin.length > 0) {
        ///////////////////////////////////////////////////////////////////////////////////////
        let url = '/json/json_logear.php';
        let datos = {usuario: usuario, clave: clave};
        cargando();
        const res = await consulta(url, datos);

        setTimeout(function () {
            cargandoCerrar();
        }, 500);
        setTimeout(function () {
            if (!res) {
                mensaje("No se ha podido realizar la consulta");
            } else {
                var obj = JSON.parse(res);
                if (obj.existe && obj.estado) {
                    window.location.href = link_global + "";
                } else if (obj.existe && !obj.estado) {
                    mensaje("El usuario: " + obj.nombres + " no está activo actualmente");
                } else {
                    mensaje("Usuario o contraseña incorrecta");
                }
            }
        }, 600);
        ///////////////////////////////////////////////////////////////////////////////////////
    } else {
        mensaje("Debes llenar todos los campos");
    }
}

async function consulta(url, datos) {
    let result;
    try {
        result = await Promise.resolve($.post(url, $.param(datos)));
    } catch (msj) {
        return false;
    }
    return result;
}

async function consulta(url, datos, token) {
    let result;
    try {
        result = await Promise.resolve($.post(url, $.param(datos), {headers: {"Authorization": token}}));
    } catch (msj) {
        return false;
    }
    return result;
}

function cerrar_sesion() {
    $.post("/json/json_cerrar_sesion.php",
        function () {
            window.location.href = link_global + "/login.php";
        });
}

function nuestro_menu() {
    window.location.href = "index.php";
}

function inicio() {
    window.location.href = "/index.php";
}

function contactanos() {
    window.location.href = "contacto.php";
}

////////////


async function eliminar_entidad() {

    var id = $("#id").val();


    if (parseInt(id) > 0) {

        ///////////////////////////////////////////////////////////////////////////////////////

        let url = '/json/json_eliminar_entidad.php';
        let datos = {id};
        cargando();
        const res = await consulta(url, datos);

        setTimeout(function () {
            cargandoCerrar();
        }, 500);
        setTimeout(function () {

            mensaje(res);
            obtener_entidades();
            limpiar();

        }, 600);

        ///////////////////////////////////////////////////////////////////////////////////////
    } else {

        mensaje("No has seleccionado nada");
    }
}

async function agregar_actualizar_entidad() {

    var id = $("#id").val();
    var nombre_banco = $("#nombre_banco").val();
    var acronimo = $("#acronimo").val();
    var comision = $("#comision").val();
    var sobre_giro = $("#sobre_giro").val();


    //var select_idLocal = document.getElementById("idlocal");
    //var idLocal = select_idLocal.value;
    //var nombre_local = select_idLocal.options[select_idLocal.selectedIndex].text;
    if (nombre_banco.length > 0 && acronimo.length > 0) {
        ///////////////////////////////////////////////////////////////////////////////////////
        let url = '/json/json_guardar_entidad.php';
        let datos = {id, nombre_banco, acronimo, comision, sobre_giro};
        cargando();
        const res = await consulta(url, datos);

        setTimeout(function () {
            cargandoCerrar();
        }, 500);
        setTimeout(function () {

            mensaje(res);
            obtener_entidades();
            limpiar();

        }, 600);
        ///////////////////////////////////////////////////////////////////////////////////////
    } else {

        mensaje("Debes llenar todos los campos");
    }
}

async function obtener_usuarios() {


    let url = '/json/json_usuarios.php';

    cargando();
    const res = await consulta(url);

    setTimeout(function () {
        cargandoCerrar();
    }, 500);
    setTimeout(function () {


        var obj = JSON.parse(res);
        var cuerpo = "";
        for (let i = 0; i < obj.length; i++) {

            let estado = "Inactivo";
            if (obj[i]["estado"] == 1) {
                estado = "Activo";
            }


            cuerpo += "  <tr>" +
                "<td style=\"display: none\">" + obj[i]["id"] + "</td>" +
                "<td style=\"display: none\">" + obj[i]["usuario"] + "</td>" +
                "<td style=\"display: none\">" + obj[i]["nombres"] + "</td>" +
                "<td style=\"display: none\">" + obj[i]["apellido_paterno"] + "</td>" +
                "<td style=\"display: none\">" + obj[i]["apellido_materno"] + "</td>" +
                "<td>" + obj[i]["nombres"] + " " + obj[i]["apellido_paterno"] + " " + obj[i]["apellido_materno"] + "</td>" +
                "<td>" + obj[i]["cargo"] + "</td>" +
                "<td>" + estado + "</td>" +
                "</tr>";

        }
        $("#tabla_usuarios").find('tbody').empty();
        $("#tabla_usuarios").find('tbody').append(cuerpo);

        $("#tabla_usuarios tr").click(function () {
            $(this).addClass('selected').siblings().removeClass('selected');

            var value = $(this).index();

            var id = $(this).find("td:eq(0)").text();
            var usuario = $(this).find("td:eq(1)").text();
            var nombre = $(this).find("td:eq(2)").text();
            var paterno = $(this).find("td:eq(3)").text();
            var materno = $(this).find("td:eq(4)").text();

            var tipo = $(this).find("td:eq(6)").text();
            var estado_tabla = $(this).find("td:eq(7)").text();


            if (estado_tabla == "Activo") {
                estado_tabla = 1;
            } else {
                estado_tabla = 0;
            }

            $("#id").val(id);
            $("#nombres").val(nombre);
            $("#apellidos_paternos").val(paterno);
            $("#apellidos_maternos").val(materno);
            $("#usuario").val(usuario);
            $("#tipo_cuenta").val(tipo);
            $("#estado_cuenta").val(estado_tabla);
        });


    }, 600);
    ///////////////////////////////////////////////////////////////////////////////////////

}

var tabla_cargada = 0;

async function obtener_entidades() {


    let url = '/json/json_entidades_sin_caja.php';

    cargando();
    const res = await consulta(url);

    setTimeout(function () {
        cargandoCerrar();
    }, 500);
    setTimeout(function () {


        var obj = JSON.parse(res);
        var cuerpo = "";
        for (let i = 0; i < obj.length; i++) {

            cuerpo += "  <tr>" +
                "<td style=\"display: none\">" + obj[i]["id"] + "</td>" +
                "<td>" + obj[i]["nombre"] + "</td>" +
                "<td>" + obj[i]["acronimo"] + "</td>" +
                "<td style='text-align: right'>" + obj[i]["comision"] + "</td>" +
                "<td style='text-align: right'>" + obj[i]["sobre_giro"] + "</td>" +
                "</tr>";

        }
        $("#tabla_entidades").find('tbody').empty();
        $("#tabla_entidades").find('tbody').append(cuerpo);

        $("#tabla_entidades tr").click(function () {
            $(this).addClass('selected').siblings().removeClass('selected');

            var value = $(this).index();

            var id = $(this).find("td:eq(0)").text();
            var nombre = $(this).find("td:eq(1)").text();
            var acronimo = $(this).find("td:eq(2)").text();
            var comision = $(this).find("td:eq(3)").text();
            var sobre_giro = $(this).find("td:eq(4)").text();


            $("#id").val(id);
            $("#nombre_banco").val(nombre);
            $("#acronimo").val(acronimo);
            $("#comision").val(comision);
            $("#sobre_giro").val(sobre_giro);
        });

    }, 600);
    ///////////////////////////////////////////////////////////////////////////////////////

}


async function obtener_tipo_transaccion_select_movimiento() {


    let url = '/json/json_tipos_transaccion_movimientos.php';

    cargando();
    const res = await consulta(url);

    setTimeout(function () {
        cargandoCerrar();
    }, 500);
    setTimeout(function () {


        var obj = JSON.parse(res);
        var cuerpo = "<option value=\"0\">--SELECCIONE UNA OPCION--</option>";
        for (let i = 0; i < obj.length; i++) {


            cuerpo += "<option afecta='" + obj[i]["afecta_caja"] + "," + obj[i]["afecta_cuenta"] + "' value='" + obj[i]["id"] + "'>" + (i + 1) + ".- " + obj[i]["nombre"] + "</option>";


        }
        $("#tipo_transaccion_movimientos").empty();
        $("#tipo_transaccion_movimientos").append(cuerpo);


    }, 600);
    ///////////////////////////////////////////////////////////////////////////////////////

}

async function obtener_tipo_transaccion_select() {


    let url = '/json/json_tipos_transaccion_operaciones.php';

    cargando();
    const res = await consulta(url);

    setTimeout(function () {
        cargandoCerrar();
    }, 500);
    setTimeout(function () {


        var obj = JSON.parse(res);
        var cuerpo = "<option value=\"0\">--SELECCIONE UNA OPCION--</option>";
        for (let i = 0; i < obj.length; i++) {


            cuerpo += "<option id_entidad='" + obj[i]["id_entidad"] + "' valor_porcentaje='" + obj[i]["valor_porcentaje"] + "' tipo_comision='" + obj[i]["tipo_comision"] + "' afecta='" + obj[i]["afecta_caja"] + "," + obj[i]["afecta_cuenta"] + "' value='" + obj[i]["id"] + "'>" + (i + 1) + ".- " + obj[i]["nombre"] + "</option>";


        }
        $("#tipo_transaccion").empty();
        $("#tipo_transaccion").append(cuerpo);


    }, 600);
    ///////////////////////////////////////////////////////////////////////////////////////

}

async function obtener_entidades_select() {


    let url = '/json/json_entidades.php';

    var comision_operaciones = document.getElementById("comision_operaciones");
    var solo_entidades_operaciones = document.getElementById("solo_entidades_operaciones");
    if (comision_operaciones) {
        url = '/json/json_entidades_operaciones.php';

    }

    if (solo_entidades_operaciones) {
        url = '/json/json_entidades_operaciones.php';

    }
    cargando();
    const res = await consulta(url);

    setTimeout(function () {
        cargandoCerrar();
    }, 500);
    setTimeout(function () {


        var obj = JSON.parse(res);
        var cuerpo = "<option value=\"0\">--SELECCIONE UNA OPCION--</option>";
        for (let i = 0; i < obj.length; i++) {


            cuerpo += "<option tipo='" + obj[i]["tipo"] + "' comision='" + obj[i]["comision"] + "' value='" + obj[i]["id"] + "'>" + (i + 1) + ".- " + obj[i]["nombre"] + " / " + obj[i]["acronimo"] + "</option>";


        }
        $("#entidad_banco_select").empty();
        $("#entidad_banco_select").append(cuerpo);


    }, 600);
    ///////////////////////////////////////////////////////////////////////////////////////

}

var valor_total_global = 0;

async function obtener_valores_cuenta_arqueo() {

    array_historial = [];

    let url = '/json/json_valores_cuenta.php';

    cargando();
    const res = await consulta(url);

    setTimeout(function () {
        cargandoCerrar();
    }, 500);
    setTimeout(async function () {


        var obj = JSON.parse(res);
        var cuerpo = "";
        let valor_total = 0;
        for (let i = 0; i < obj.length; i++) {
            cuerpo += "  <tr>" +
                "<td>" + obj[i]["nombre"] + "</td>" +

                "<td style='text-align: right;background-color: #fefda6'>" + obj[i]["valor"] + "</td>";

            valor_total_global += parseFloat(obj[i]["valor"]);
        }
        await obtener_valores_caja();
        let valor_caja = $("#total_caja").text();
        let total_suma =  valor_total_global + parseFloat(valor_caja);
        $("#suma_cuentas").text(valor_total_global.toFixed(2));

        $("#suma_billetes_monedas_cuentas").text(total_suma.toFixed(2));
        $("#tabla_valores_cuenta_arqueo").find('tbody').empty();
        $("#tabla_valores_cuenta_arqueo").find('tbody').append(cuerpo);


    }, 600);
    ///////////////////////////////////////////////////////////////////////////////////////


}

var array_cuenta_arqueo_tabla = "";

async function obtener_valores_cuenta_arqueo_buscar() {

    array_historial = [];

    let fecha = $("#desde").val();
    let url = '/json/json_valores_en_cuenta_fecha_arqueo.php';
    let datos = {fecha};

    //cargando();
    const res = await consulta(url, datos);

    setTimeout(function () {
        cargandoCerrar();
    }, 500);
    setTimeout(async function () {


        var obj = JSON.parse(res);

        var cuerpo = "";
        let valor_total = 0;
        valor_total_global = 0;
        array_cuenta_arqueo_tabla = "";
        for (let i = 0; i < obj.length; i++) {
            cuerpo += "  <tr>" +
                "<td>" + obj[i]["nombre"] + "</td>" +

                "<td style='text-align: right;background-color: #fefda6'>" + obj[i]["valor"] + "</td>";
            array_cuenta_arqueo_tabla += "<tr>";
            array_cuenta_arqueo_tabla += "<td>" + obj[i]["nombre"] + "</td>";
            array_cuenta_arqueo_tabla += '<td style="text-align: right;background-color: #fefda6">' + obj[i]["valor"] + '</td>';
            array_cuenta_arqueo_tabla += "</tr>";
            valor_total_global += parseFloat(obj[i]["valor"]);

        }
        console.log(array_cuenta_arqueo_tabla);
        //await obtener_valores_caja();
        let valor_caja = $("#total_caja").text();
        let total_suma = valor_total_global + parseFloat(valor_caja);
        $("#suma_cuentas").text(valor_total_global.toFixed(2));
        $("#suma_billetes_monedas_cuentas").text(total_suma.toFixed(2));
        $("#tabla_valores_cuenta_arqueo").find('tbody').empty();
        $("#tabla_valores_cuenta_arqueo").find('tbody').append(cuerpo);


    }, 600);
    ///////////////////////////////////////////////////////////////////////////////////////


}

async function obtener_valores_cuenta() {

    array_historial = [];

    let url = '/json/json_valores_cuenta.php';

    cargando();
    const res = await consulta(url);

    setTimeout(function () {
        cargandoCerrar();
    }, 500);
    setTimeout(function () {


        var obj = JSON.parse(res);
        var cuerpo = "";
        for (let i = 0; i < obj.length; i++) {
            let valor = parseFloat((obj[i]["valor"] === "" ? 0 : obj[i]["valor"])).toFixed(2);
            let saldo = parseFloat((obj[i]["saldo"] === "" ? 0 : obj[i]["saldo"])).toFixed(2);
            let comision = parseFloat((obj[i]["comision"] === "" ? 0 : obj[i]["comision"])).toFixed(2);
            cuerpo += "  <tr>" +
                "<td>" + obj[i]["nombre"] + "</td>" +
                "<td>" + obj[i]["acronimo"] + "</td>" +
                "<td style='text-align: right;background-color: #fefda6'>" + obj[i]["valor"] + "</td>" +
                "<td style='text-align: right'>" + obj[i]["sobre_giro"] + "</td>" +
                "<td style='text-align: right'>" + obj[i]["comision"] + "</td>" +
                "<td><button onclick=\"historial_cuenta(" + obj[i]["id"] + ")\" wigth=\"100\" style=\"margin-bottom: 5px\"\n" +
                "                            type=\"button\" class=\"btn btn-info form-control\">\n" +
                "                        VER\n" +
                "                    </button></td>" +
                "</tr>";
            let arraysito = {
                id: parseInt(obj[i]["id"]),
                valor: parseFloat(obj[i]["valor"]),
                sobre_giro: parseFloat(obj[i]["sobre_giro"])
            }
            array_historial.push(arraysito);
        }

        $("#tabla_valores_cuenta").find('tbody').empty();
        $("#tabla_valores_cuenta").find('tbody').append(cuerpo);


    }, 600);
    ///////////////////////////////////////////////////////////////////////////////////////


}

async function obtener_valores_caja() {


    let url = '/json/json_valores_caja.php';


    const res = await consulta(url);

    setTimeout(function () {
        cargandoCerrar();
    }, 500);
    setTimeout(function () {


        $("#valor_en_caja").val(parseFloat(res).toFixed(2));

        //console.log(res)
        var caja = document.getElementById("total_caja");
        if (caja) {
            $("#total_caja").text(parseFloat(res).toFixed(2));


            let dato = $("#suma_billetes_monedas_cuentas").text();

            let suma = parseFloat(dato) + parseFloat(res);
            $("#suma_billetes_monedas_cuentas").text(suma.toFixed(2))
        }

        /* var xx = res.split("=");
         var spl = xx[1].split("$");

         valor_caja = parseFloat(spl[1]);*/
        valor_caja = parseFloat(res);


    }, 600);
    ///////////////////////////////////////////////////////////////////////////////////////


}

async function obtener_valores_caja_arqueo() {


    let fecha = $("#desde").val();
    let url = '/json/json_valores_en_caja_fecha_arqueo.php';
    let datos = {fecha};

    //cargando();
    const res = await consulta(url, datos);
    /*
   setTimeout(function () {
       cargandoCerrar();
   }, 500);*/
    setTimeout(function () {


        $("#total_caja").text(parseFloat(res).toFixed(2));


        let dato = $("#suma_billetes_monedas_cuentas").text();

        let suma = parseFloat(dato) + parseFloat(res);
        $("#suma_billetes_monedas_cuentas").text(suma.toFixed(2))


        valor_caja = parseFloat(res);


    }, 600);
    ///////////////////////////////////////////////////////////////////////////////////////


}

async function eliminar_afectacion(id_afecta, tipo_transaccion) {
    let url = '/json/json_eliminar_afectadas_x_tipo_transaccion.php';
    let datos = {id_afecta};
    cargando();
    const res = await consulta(url, datos);

    setTimeout(function () {
        cargandoCerrar();
    }, 500);
    setTimeout(function () {


        mensaje(res)
        $("#id_afecta").val("");
        $("#entidad_banco_select").val(0);
        obtener_entidades_afectadas_x_tipo_transaccion(tipo_transaccion)

    }, 600);
    ///////////////////////////////////////////////////////////////////////////////////////
}

async function obtener_entidades_afectadas_x_tipo_transaccion(tipo_transaccion) {


    let url = '/json/json_entidades_afectadas_x_tipo_transaccion.php';
    let datos = {tipo_transaccion};
    cargando();
    const res = await consulta(url, datos);

    setTimeout(function () {
        cargandoCerrar();
    }, 500);
    setTimeout(function () {


        var obj = JSON.parse(res);
        var cuerpo = "";
        for (let i = 0; i < obj.length; i++) {

            cuerpo += "  <tr>" +
                "<td style=\"display: none\">" + obj[i]["id"] + "</td>" +
                "<td style=\"display: none\">" + obj[i]["id_entidad"] + "</td>" +
                "<td>" + obj[i]["nombre"] + "</td>" +
                "<td>" + obj[i]["tipo_comision"] + "</td>" +
                "<td>" + obj[i]["valor_porcentaje"] + "</td>" +
                "<td><button onclick=\"eliminar_afectacion(" + obj[i]["id"] + "," + tipo_transaccion + ")\" wigth=\"100\" style=\"margin-bottom: 5px\"\n" +
                "                            type=\"button\" class=\"btn btn-info form-control\">\n" +
                "                        ELIMINAR\n" +
                "                    </button></td>" +
                "</tr>";


        }
        $("#tabla_entidades_afectadas_x_tipo_transaccion").find('tbody').empty();
        $("#tabla_entidades_afectadas_x_tipo_transaccion").find('tbody').append(cuerpo);

        $("#tabla_entidades_afectadas_x_tipo_transaccion tr").click(function () {
            $(this).addClass('selected').siblings().removeClass('selected');

            var value = $(this).index();

            var id = $(this).find("td:eq(0)").text();
            var id_entidad = $(this).find("td:eq(1)").text();
            var tipo_comision = $(this).find("td:eq(3)").text();
            var valor_porcentaje = $(this).find("td:eq(4)").text();


            if (tipo_comision.length > 0) {

                document.getElementById("valor_porcentaje").removeAttribute("disabled");
                $("#tipo_comision").val(tipo_comision);
            } else {

                document.getElementById("valor_porcentaje").setAttribute("disabled", "disabled");
                $("#tipo_comision").val(0);

            }


            $("#id_afecta").val(id);
            $("#entidad_banco_select").val(id_entidad);

            $("#tipo_comision").val(tipo_comision);


            $("#valor_porcentaje").val(valor_porcentaje);


        });

    }, 600);
    ///////////////////////////////////////////////////////////////////////////////////////


}

async function obtener_tipos_transaccion() {


    let url = '/json/json_tipos_transaccion.php';

    cargando();
    const res = await consulta(url);

    setTimeout(function () {
        cargandoCerrar();
    }, 500);
    setTimeout(function () {


        var obj = JSON.parse(res);
        var cuerpo = "";
        for (let i = 0; i < obj.length; i++) {

            cuerpo += "  <tr>" +
                "<td style=\"display: none\">" + obj[i]["id"] + "</td>" +
                "<td>" + obj[i]["nombre"] + "</td>" +
                "<td>" + obj[i]["afecta_caja"] + "</td>" +
                "<td>" + obj[i]["afecta_cuenta"] + "</td>" +
                //"<td>" + obj[i]["tipo_comision"] + "</td>" +
                //"<td>" + obj[i]["valor_porcentaje"] + "</td>" +
                "</tr>";

        }
        $("#tabla_tipos_transaccion").find('tbody').empty();
        $("#tabla_tipos_transaccion").find('tbody').append(cuerpo);

        $("#tabla_tipos_transaccion tr").click(function () {
            $(this).addClass('selected').siblings().removeClass('selected');

            var value = $(this).index();

            var id = $(this).find("td:eq(0)").text();
            var nombre = $(this).find("td:eq(1)").text();
            var afecta_caja = $(this).find("td:eq(2)").text();
            var afecta_cuenta = $(this).find("td:eq(3)").text();
            //var tipo_comision = $(this).find("td:eq(4)").text();
            //var valor_porcentaje = $(this).find("td:eq(5)").text();

            /*
                        if (tipo_comision.length > 0) {

                            document.getElementById("valor_porcentaje").removeAttribute("disabled");
                            $("#tipo_comision").val(tipo_comision);
                        } else {

                            document.getElementById("valor_porcentaje").setAttribute("disabled", "disabled");
                            $("#tipo_comision").val(0);

                        }*/


            $("#id").val(id);
            $("#nombre_transaccion").val(nombre);

            $("#caja").val(afecta_caja);
            $("#cuenta").val(afecta_cuenta);


            $("#id_afecta").val("");
            $("#entidad_banco_select").val(0);
            obtener_entidades_afectadas_x_tipo_transaccion(id);
            //$("#valor_porcentaje").val(valor_porcentaje);


        });

    }, 600);
    ///////////////////////////////////////////////////////////////////////////////////////


}

var datos_historial_cuenta;

async function historial_cuenta_fecha(id) {

    var desde = $("#desde").val();
    var hasta = $("#hasta").val();
    let url = '/json/json_historial_cuenta_fecha.php';
    let datos = {id, desde, hasta};
    cargando();
    const res = await consulta(url, datos);

    setTimeout(function () {
        cargandoCerrar();
    }, 500);
    setTimeout(function () {


        var obj = JSON.parse(res);
        datos_historial_cuenta = obj;

        var cuerpo = "";
        for (let i = 0; i < obj.length; i++) {
            let valor = parseFloat((obj[i]["valor"] === "" ? 0 : obj[i]["valor"])).toFixed(2);
            let saldo = parseFloat((obj[i]["saldo"] === "" ? 0 : obj[i]["saldo"])).toFixed(2);
            let comision = parseFloat((obj[i]["comision"] === "" ? 0 : obj[i]["comision"])).toFixed(2);
            let comision_valor_porcentaje = parseFloat((obj[i]["comision_valor_porcentaje"] === "" ? 0 : obj[i]["comision_valor_porcentaje"])).toFixed(2);

            let tipo_comision = obj[i]["tipo_comision"] === "" ? "" : obj[i]["tipo_comision"];
            cuerpo += "  <tr>" +
                "<td>" + obj[i]["nombre"] + "</td>" +
                "<td style='text-align: right;background-color: #f5f2d4'>" + comision + "</td>" +
                "<td style='text-align: right;background-color: #f5f2d4'>" + comision_valor_porcentaje + "</td>" +
                "<td  style='text-align: right;background-color: #ddd9a5'>" + valor + "</td>" +
                "<td style='text-align: right;background-color: #f0ecbf'>" + saldo + "</td>" +
                "<td style='text-align: right;background-color: #f0ecbf'>" + tipo_comision + "</td>" +
                "<td>" + obj[i]["comentario"] + "</td>" +
                "<td>" + obj[i]["referencia"] + "</td>" +
                "<td>" + obj[i]["id_crea"] + "</td>" +
                "<td>" + obj[i]["fecha_creada"] + "</td>" +

                "</tr>";

        }

        $("#tabla_historial_cuenta").find('tbody').empty();
        $("#tabla_historial_cuenta").find('tbody').append(cuerpo);
        $('#historial_cuenta').modal('show');


    }, 600);
    ///////////////////////////////////////////////////////////////////////////////////////


}

async function historial_cuenta(id) {


    let url = '/json/json_historial_cuenta.php';
    let datos = {id};
    cargando();
    const res = await consulta(url, datos);

    setTimeout(function () {
        cargandoCerrar();
    }, 500);
    setTimeout(function () {


        var obj = JSON.parse(res);
        datos_historial_cuenta = obj;

        var cuerpo = "";
        for (let i = 0; i < obj.length; i++) {
            let valor = parseFloat((obj[i]["valor"] === "" ? 0 : obj[i]["valor"])).toFixed(2);
            let saldo = parseFloat((obj[i]["saldo"] === "" ? 0 : obj[i]["saldo"])).toFixed(2);
            let comision = parseFloat((obj[i]["comision"] === "" ? 0 : obj[i]["comision"])).toFixed(2);
            let comision_valor_porcentaje = parseFloat((obj[i]["comision_valor_porcentaje"] === "" ? 0 : obj[i]["comision_valor_porcentaje"])).toFixed(2);
            let tipo_comision = obj[i]["tipo_comision"] === "" ? "" : obj[i]["tipo_comision"];

            cuerpo += "  <tr>" +
                "<td>" + obj[i]["nombre"] + "</td>" +
                "<td style='text-align: right;background-color: #f5f2d4'>" + comision + "</td>" +
                "<td style='text-align: right;background-color: #f5f2d4'>" + comision_valor_porcentaje + "</td>" +
                "<td  style='text-align: right;background-color: #ddd9a5'>" + valor + "</td>" +
                "<td style='text-align: right;background-color: #f0ecbf'>" + saldo + "</td>" +
                "<td>" + tipo_comision + "</td>" +
                "<td>" + obj[i]["comentario"] + "</td>" +
                "<td>" + obj[i]["referencia"] + "</td>" +
                "<td>" + obj[i]["id_crea"] + "</td>" +
                "<td>" + obj[i]["fecha_creada"] + "</td>" +

                "</tr>";

        }

        $("#tabla_historial_cuenta").find('tbody').empty();
        $("#tabla_historial_cuenta").find('tbody').append(cuerpo);
        $('#historial_cuenta').modal('show');


    }, 600);
    ///////////////////////////////////////////////////////////////////////////////////////


}

var datos_historial_caja;

async function historial_caja_fecha() {


    var desde = $("#desde").val();
    var hasta = $("#hasta").val();
    let url = '/json/json_historial_caja_fecha.php';
    let datos = {desde, hasta};

    cargando();
    const res = await consulta(url, datos);

    setTimeout(function () {
        cargandoCerrar();
    }, 500);
    setTimeout(function () {


        var obj = JSON.parse(res);
        datos_historial_caja = res;

        var cuerpo = "";
        for (let i = 0; i < obj.length; i++) {


            let valor = parseFloat((obj[i]["valor"] === "" ? 0 : obj[i]["valor"])).toFixed(2);
            let saldo = parseFloat((obj[i]["saldo"] === "" ? 0 : obj[i]["saldo"])).toFixed(2);

            let comision = parseFloat((obj[i]["comision"] === "" ? 0 : obj[i]["comision"])).toFixed(2);
            let tipo_comision = obj[i]["tipo_comision"] === "" ? "" : obj[i]["tipo_comision"];
            //saldo=parseFloat(saldo)+parseFloat(comision);
            cuerpo += "  <tr>" +
                "<td>" + obj[i]["nombre"] + "</td>" +
                "<td  style='text-align: right;background-color: #ddd9a5'>" + valor + "</td>" +
                "<td style='text-align: right;background-color: #f5f2d4'>" + comision + "</td>" +
                "<td style='text-align: right;background-color: #f0ecbf'>" + saldo + "</td>" +
                "<td>" + tipo_comision + "</td>" +
                "<td>" + obj[i]["comentario"] + "</td>" +
                "<td>" + obj[i]["referencia"] + "</td>" +
                "<td>" + obj[i]["id_crea"] + "</td>" +
                "<td>" + obj[i]["fecha_creada"] + "</td>" +

                "</tr>";

        }

        $("#tabla_historial_caja").find('tbody').empty();
        $("#tabla_historial_caja").find('tbody').append(cuerpo);
        $('#historial_caja').modal('show');


    }, 600);
    ///////////////////////////////////////////////////////////////////////////////////////


}

async function historial_caja() {


    let url = '/json/json_historial_caja.php';

    cargando();
    const res = await consulta(url);

    setTimeout(function () {
        cargandoCerrar();
    }, 500);
    setTimeout(function () {


        var obj = JSON.parse(res);
        datos_historial_caja = res;
        //console.log(res)
        var cuerpo = "";
        for (let i = 0; i < obj.length; i++) {


            let valor = parseFloat((obj[i]["valor"] === "" ? 0 : obj[i]["valor"])).toFixed(2);
            let saldo = parseFloat((obj[i]["saldo"] === "" ? 0 : obj[i]["saldo"])).toFixed(2);

            let comision = parseFloat((obj[i]["comision"] === "" ? 0 : obj[i]["comision"])).toFixed(2);

            let tipo_comision = obj[i]["tipo_comision"] === "" ? "" : obj[i]["tipo_comision"];
            //saldo=parseFloat(saldo)+parseFloat(comision);
            cuerpo += "  <tr>" +
                "<td>" + obj[i]["nombre"] + "</td>" +
                "<td  style='text-align: right;background-color: #ddd9a5'>" + valor + "</td>" +
                "<td style='text-align: right;background-color: #f5f2d4'>" + comision + "</td>" +
                "<td style='text-align: right;background-color: #f0ecbf'>" + saldo + "</td>" +
                "<td>" + tipo_comision + "</td>" +
                "<td>" + obj[i]["comentario"] + "</td>" +
                "<td>" + obj[i]["referencia"] + "</td>" +
                "<td>" + obj[i]["id_crea"] + "</td>" +
                "<td>" + obj[i]["fecha_creada"] + "</td>" +

                "</tr>";

        }

        $("#tabla_historial_caja").find('tbody').empty();
        $("#tabla_historial_caja").find('tbody').append(cuerpo);
        $('#historial_caja').modal('show');


    }, 600);
    ///////////////////////////////////////////////////////////////////////////////////////


}

async function agregar_transaccion_historial_movimiento() {


    var comentario = $("#comentario").val();
    var valor = $("#valor").val();


    var select_banco = document.getElementById("entidad_banco_select");
    var idBanco = select_banco.value;

    var select_tipo_transaccion = document.getElementById("tipo_transaccion_movimientos");
    var idTipo_transaccion = select_tipo_transaccion.value;

    var comision_operaciones = 0.00;
    var comision_valor_porcentaje = 0.00;
    var tipo_comision = "";
    var referencia = "";
    var cedula_ruc = "0";

    if (idBanco != 0 && idTipo_transaccion != 0) {


        var existe = array_historial.find(e => e.id === parseInt(idBanco));


        var tipo_cuenta = $('option:selected', select_banco).attr('tipo');


        var afecta = $('option:selected', select_tipo_transaccion).attr('afecta');
        var spl = afecta.split(",");
        var afecta_caja = spl[0];
        var afecta_cuenta = spl[1];


        if (tipo_cuenta === "CAJ") { //significa que se metio con cuenta
            if (afecta_caja === "RESTA" && afecta_cuenta === "NO") {
                if (parseFloat(valor_caja) >= parseFloat(valor)) {
                    let url = '/json/json_guardar_operacion_historial.php';
                    let datos = {
                        idBanco,
                        idTipo_transaccion,
                        comision_operaciones,
                        comentario,
                        valor,
                        tipo_comision,
                        referencia,
                        cedula_ruc,
                        comision_valor_porcentaje
                    };
                    cargando();
                    const res = await consulta(url, datos);

                    setTimeout(function () {
                        cargandoCerrar();
                    }, 500);
                    setTimeout(function () {


                        obtener_valores_caja();
                        obtener_valores_cuenta();

                        $("#entidad_banco_select").val(0);
                        $("#tipo_transaccion_movimientos").val(0);
                        $("#valor").val(0);
                        $("#comentario").val("");

                        document.getElementById("entidad_banco_select").focus();
                        mensaje(res);

                    }, 600);
                } else {
                    mensaje("El valor de la caja no es suficiente para hacer el retiro solicitado")
                }

            } else if (afecta_caja === "SUMA" && afecta_cuenta === "NO") {
                let url = '/json/json_guardar_operacion_historial.php';
                let datos = {
                    idBanco,
                    idTipo_transaccion,
                    comision_operaciones,
                    comentario,
                    valor,
                    tipo_comision,
                    referencia,
                    cedula_ruc,
                    comision_valor_porcentaje
                };
                cargando();
                const res = await consulta(url, datos);

                setTimeout(function () {
                    cargandoCerrar();
                }, 500);
                setTimeout(function () {


                    obtener_valores_caja();
                    obtener_valores_cuenta();

                    $("#entidad_banco_select").val(0);
                    $("#tipo_transaccion_movimientos").val(0);
                    $("#valor").val(0);
                    $("#comentario").val("");

                    document.getElementById("entidad_banco_select").focus();
                    mensaje(res);

                }, 600);
            } else {
                mensaje("Esta transacción no se puede realizar ya que no afecta a la caja")
            }

        } else {
            var valor_array = 0.00;
            if (array_historial.length > 0 && typeof existe != "undefined") {
                valor_array = existe["valor"];
            }

            if (afecta_cuenta === "RESTA" && afecta_caja === "NO") {
                if (parseFloat(valor_array) >= parseFloat(valor)) {
                    let url = '/json/json_guardar_operacion_historial.php';
                    let datos = {
                        idBanco,
                        idTipo_transaccion,
                        comision_operaciones,
                        comentario,
                        valor,
                        tipo_comision,
                        referencia,
                        cedula_ruc,
                        comision_valor_porcentaje
                    };
                    cargando();
                    const res = await consulta(url, datos);

                    setTimeout(function () {
                        cargandoCerrar();
                    }, 500);
                    setTimeout(function () {


                        obtener_valores_caja();
                        obtener_valores_cuenta();

                        $("#entidad_banco_select").val(0);
                        $("#tipo_transaccion_movimientos").val(0);
                        $("#valor").val(0);
                        $("#comentario").val("");

                        document.getElementById("entidad_banco_select").focus();
                        mensaje(res);

                    }, 600);
                } else {
                    mensaje("El valor de la cuenta no es suficiente para hacer el retiro solicitado")
                }

            } else if (afecta_cuenta === "SUMA" && afecta_caja === "NO") {

                let url = '/json/json_guardar_operacion_historial.php';
                let datos = {
                    idBanco,
                    idTipo_transaccion,
                    comision_operaciones,
                    comentario,
                    valor,
                    tipo_comision,
                    referencia,
                    cedula_ruc,
                    comision_valor_porcentaje
                };
                cargando();
                const res = await consulta(url, datos);

                setTimeout(function () {
                    cargandoCerrar();
                }, 500);
                setTimeout(function () {


                    obtener_valores_caja();
                    obtener_valores_cuenta();

                    $("#entidad_banco_select").val(0);
                    $("#tipo_transaccion_movimientos").val(0);
                    $("#valor").val(0);
                    $("#comentario").val("");

                    document.getElementById("entidad_banco_select").focus();
                    mensaje(res);

                }, 600);
            } else {
                mensaje("Esta transacción no se puede realizar ya que no afecta a la cuenta")
            }
        }


    } else {

        mensaje("Debes llenar todos los campos");
    }
}

async function agregar_transaccion_historial() {


    var comision_operaciones = $("#comision_operaciones").val();
    var comentario = $("#comentario").val();
    var valor = $("#valor").val();
    var cedula_ruc = $("#cedula_ruc").val();
    var referencia = $("#referencia").val();


    var select_banco = document.getElementById("entidad_banco_select");
    var idBanco = select_banco.value;

    var select_tipo_transaccion = document.getElementById("tipo_transaccion");
    var idTipo_transaccion = select_tipo_transaccion.value;

    var comision_valor_porcentaje = 0.00;


    if (idBanco != 0 && idTipo_transaccion != 0) {
        ///////////////////////////////////////////////////////////////////////////////////////

        var existe = array_historial.find(e => e.id === parseInt(idBanco));


        var valor_array = 0.00;

        if (array_historial.length > 0 && typeof existe != "undefined") {
            valor_array = existe["valor"];

            var val_array = parseFloat(existe["valor"]);
            var val_sobre = parseFloat(existe["sobre_giro"])
            valor_array = val_array + val_sobre;

        }


        var afecta = $('option:selected', select_tipo_transaccion).attr('afecta');

        var spl = afecta.split(",");
        var afecta_caja = spl[0];
        var afecta_cuenta = spl[1];

        var id_entidad_string = $('option:selected', select_tipo_transaccion).attr('id_entidad');
        var tipo_comision_string = $('option:selected', select_tipo_transaccion).attr('tipo_comision');
        var valor_porcentaje_string = $('option:selected', select_tipo_transaccion).attr('valor_porcentaje');

        var id_entidad = id_entidad_string.split(",");

        var existe_afectacion = id_entidad.findIndex(element => element === idBanco);

        var tipo_comision = tipo_comision_string.split(",");
        var valor_porcentaje = valor_porcentaje_string.split(",");

        console.log(existe_afectacion)
        if (existe_afectacion !== -1) {
            tipo_comision = tipo_comision[existe_afectacion];
            valor_porcentaje = valor_porcentaje[existe_afectacion];
            console.log(tipo_comision)
            console.log(valor_porcentaje)
        } else {
            tipo_comision = "COMISION";
            valor_porcentaje = 0;
        }


        if (tipo_comision === "VALOR") {

            comision_valor_porcentaje = valor_porcentaje;

        } else if (tipo_comision === "PORCENTAJE") {

            var porcentaje = parseFloat(valor_porcentaje) / 100;
            var nuevo_valor = porcentaje * valor;

            comision_valor_porcentaje = nuevo_valor;
        }


        if (afecta_caja === "RESTA") {
            if (valor_caja >= valor) {

                let url = '/json/json_guardar_operacion_historial.php';
                let datos = {
                    idBanco,
                    idTipo_transaccion,
                    comision_operaciones,
                    comentario,
                    valor,
                    cedula_ruc,
                    referencia,
                    tipo_comision,
                    comision_valor_porcentaje
                };
                cargando();
                const res = await consulta(url, datos);

                setTimeout(function () {
                    cargandoCerrar();
                }, 500);
                setTimeout(function () {

                    mensaje(res);
                    obtener_valores_caja();
                    obtener_valores_cuenta();

                    $("#entidad_banco_select").val(0);
                    $("#tipo_transaccion").val(0);
                    $("#valor").val(0);
                    $("#comision_operaciones").val(0.25);
                    $("#comentario").val("");

                    document.getElementById("entidad_banco_select").focus();

                }, 600);
            } else {
                mensaje("El valor no debe ser mayor al disponible en la caja")
            }

        } else if (afecta_cuenta === "RESTA") {
            if (valor_array >= valor) {
                let url = '/json/json_guardar_operacion_historial.php';
                let datos = {
                    idBanco,
                    idTipo_transaccion,
                    comision_operaciones,
                    comentario,
                    valor,
                    cedula_ruc,
                    referencia,
                    tipo_comision,
                    comision_valor_porcentaje
                };
                cargando();
                const res = await consulta(url, datos);

                setTimeout(function () {
                    cargandoCerrar();
                }, 500);
                setTimeout(function () {

                    mensaje(res);
                    obtener_valores_caja();
                    obtener_valores_cuenta();

                    $("#entidad_banco_select").val(0);
                    $("#tipo_transaccion").val(0);
                    $("#valor").val(0);
                    $("#comision_operaciones").val(0.25);
                    $("#comentario").val("");
                    $("#referencia").val("");
                    //$("#nombres_persona").val("");
                    $("#cedula_ruc").val("0");

                    document.getElementById("entidad_banco_select").focus();

                }, 600);
            } else {
                mensaje("El valor no debe ser mayor al disponible en la cuenta")
            }

        }


        ///////////////////////////////////////////////////////////////////////////////////////
    } else {

        mensaje("Debes llenar todos los campos");
    }

}

function limpiar_usuarios() {
    $("#id").val("");

    $("#nombres").val("");
    $("#apellidos_paternos").val("");
    $("#apellidos_maternos").val("");
    $("#usuario").val("");
    $("#clave").val("");
    $("#tipo_cuenta").val(0);
    $("#estado_cuenta").val(12345);
}

async function agregar_actualizar_usuario() {

    var id = $("#id").val();

    var nombres = $("#nombres").val();
    var paterno = $("#apellidos_paternos").val();
    var materno = $("#apellidos_maternos").val();
    var usuario = $("#usuario").val();
    var clave = $("#clave").val();
    var tipo_cuenta = $("#tipo_cuenta").val();
    var estado = $("#estado_cuenta").val();

    if (nombres.length > 0 && tipo_cuenta != 0 && estado != 12345 && paterno.length > 0 && materno.length > 0
        && usuario.length > 0) {


        if (id.length == 0 && clave.length == 0) {
            mensaje("Debe llenar la clave");
        } else {
            if (clave.length > 0) {
                clave = md5(clave);
            }
            ///////////////////////////////////////////////////////////////////////////////////////
            let url = '/json/json_guardar_usuario.php';

            let datos = {id, nombres, paterno, materno, usuario, clave, tipo_cuenta, estado};
            cargando();
            const res = await consulta(url, datos);

            setTimeout(function () {
                cargandoCerrar();
            }, 500);
            setTimeout(function () {

                mensaje(res);
                obtener_usuarios();
                limpiar_usuarios();

            }, 600);
            ///////////////////////////////////////////////////////////////////////////////////////
        }

    } else {

        mensaje("Debes llenar todos los campos");
    }
}

async function agregar_actualizar_entidad_x_rubro() {
    var id_afecta = $("#id_afecta").val();
    var id = $("#id").val();
    var id_entidad = $("#entidad_banco_select").val();

    var tipo_comision = $("#tipo_comision").val();
    var valor_porcentaje = $("#valor_porcentaje").val();


    if (tipo_comision === "0") {
        valor_porcentaje = 0.00;
    }
    if (id.length > 0 && id_entidad != 0 && tipo_comision != 0) {
        ///////////////////////////////////////////////////////////////////////////////////////
        let url = '/json/json_guardar_entidades_afectadas_x_tipo_transaccion.php';
        let datos = {id, id_entidad, tipo_comision, valor_porcentaje, id_afecta};
        cargando();
        const res = await consulta(url, datos);

        setTimeout(function () {
            cargandoCerrar();
        }, 500);
        setTimeout(function () {

            mensaje(res);
            obtener_entidades_afectadas_x_tipo_transaccion(id);
            limpiar_afecta();


        }, 600);
        ///////////////////////////////////////////////////////////////////////////////////////
    } else {

        mensaje("Debes llenar todos los campos");
    }
}

async function agregar_actualizar_tipo_transaccion() {

    var id = $("#id").val();
    var nombre_transaccion = $("#nombre_transaccion").val();
    var caja = $("#caja").val();
    var cuenta = $("#cuenta").val();


    var tipo_comision = $("#tipo_comision").val();
    var valor_porcentaje = $("#valor_porcentaje").val();


    if (tipo_comision === "0") {
        valor_porcentaje = 0.00;
    }


    if (nombre_transaccion.length > 0 && caja != 0 && cuenta != 0) {
        ///////////////////////////////////////////////////////////////////////////////////////
        let url = '/json/json_guardar_tipo_transaccion.php';
        let datos = {id, nombre_transaccion, caja, cuenta};
        cargando();
        const res = await consulta(url, datos);

        setTimeout(function () {
            cargandoCerrar();
        }, 500);
        setTimeout(function () {

            mensaje(res);
            obtener_tipos_transaccion();
            limpiar_tipo_transaccion();


        }, 600);
        ///////////////////////////////////////////////////////////////////////////////////////
    } else {

        mensaje("Debes llenar todos los campos");
    }

}

function limpiar() {
    $("#id").val("");
    $("#nombre_banco").val("");
    $("#acronimo").val("");
    $("#comision").val(0.25);
    $("#tipo").val(0);
    $("#sobre_giro").val("0.00");
}

function limpiar_tipo_transaccion() {
    $("#id").val("");
    $("#id_afecta").val("");
    $("#nombre_transaccion").val("");

    $("#caja").val(0);
    $("#cuenta").val(0);

    $("#valor_porcentaje").val(0);
    $("#tipo_comision").val(0);
    $("#entidad_banco_select").val(0);


}

function limpiar_afecta() {
    $("#id_afecta").val("");
    $("#entidad_banco_select").val(0);


    $("#valor_porcentaje").val(0);
    $("#tipo_comision").val(0);

}

var numeral = 0;

function colorear(numero) {


    numeral = numero;

}

async function estadisticas_por_fecha(desde, hasta) {


    let url = '/json/json_graficos.php';
    let datos = {desde, hasta};
    cargando();
    const res = await consulta(url, datos);

    setTimeout(function () {
        cargandoCerrar();
    }, 500);
    setTimeout(function () {


        var obj = JSON.parse(res);


        if (obj.length > 0) {
            var objeto_dos = JSON.parse(res);


            var obj_uno = obj;
            var obj_dos = objeto_dos;

            obj_uno.unshift(['Task', 'Hours per Day']);
            obj_dos.unshift(['', '']);


            var info_dona = google.visualization.arrayToDataTable(obj_uno);

            var info_barra = google.visualization.arrayToDataTable(obj_dos);

            var opciones_barra = {};
            var opciones_dona = {
                //title: 'My Daily Activities',
                pieHole: 0.5,
                //legend:'none'//borra lo de la parte derecha
            };


            var dona = new google.visualization.PieChart(document.getElementById('dona'));


            var barra = new google.charts.Bar(document.getElementById('barras'));

            google.visualization.events.addListener(barra, 'select', function () {
                var selection = barra.getSelection();
                if (selection.length) {
                    var row = selection[0].row;


                    //document.querySelector('#myValueHolder').innerHTML = info_barra.getValue(row, 1);

                    let el_id = info_barra.getValue(row, 0).split(",");
                    buscar_estadisticas_rubros(el_id[0], el_id[1]);


                }
            });
            google.visualization.events.addListener(dona, 'select', function () {
                var selection = dona.getSelection();
                if (selection.length) {
                    var row = selection[0].row;
                    //document.querySelector('#myValueHolder').innerHTML = info_barra.getValue(row, 1);

                    let el_id = info_dona.getValue(row, 0).split(",");
                    buscar_estadisticas_rubros(el_id[0], el_id[1]);


                }
            });

            barra.draw(info_barra, google.charts.Bar.convertOptions(opciones_barra));

            dona.draw(info_dona, opciones_dona);
        } else {
            $("#barras").empty();
            $("#dona").empty();
            $("#rubritos_dona").empty();
            $("#nombre_banco").empty();


            mensaje("No hay datos en las fechas buscadas");
        }


    }, 600);
    ///////////////////////////////////////////////////////////////////////////////////////


}

async function estadisticas_por_entidad(id_entidad, nombre) {


    let url = '/json/json_rubros_x_entidad.php';
    let data = {id_entidad};
    cargando();
    const res = await consulta(url, data);

    setTimeout(function () {
        cargandoCerrar();
    }, 500);
    setTimeout(function () {


        var obj = JSON.parse(res);
        var obj_uno = obj;
        obj_uno.unshift(['Task', 'Hours per Day']);


        var info_dona = google.visualization.arrayToDataTable(obj_uno);


        var opciones_dona = {

            //title: 'My Daily Activities',
            pieHole: 0.5,
            //legend:'none'//borra lo de la parte derecha
        };


        var dona = new google.visualization.PieChart(document.getElementById('rubritos_dona'));


        dona.draw(info_dona, opciones_dona);
        $("#nombre_banco").text(nombre);
        document.getElementById("rubritos_dona")
        //$('#rubros_estadistica').modal('show');

    }, 600);
    ///////////////////////////////////////////////////////////////////////////////////////


}

async function buscar_reporte() {
    valor_en_caja_fecha_buscar();
    document.getElementById("arriba").style.display = "none";
    document.getElementById("abajo").style.display = "";
    var desde = $("#desde").val();
    var hasta = $("#hasta").val();
    let url = '/json/json_valores_cuenta_por_fecha.php';
    let datos = {desde, hasta};

    cargando();
    const res = await consulta(url, datos);

    setTimeout(function () {
        cargandoCerrar();
    }, 500);
    setTimeout(function () {


        var obj = JSON.parse(res);
        var cuerpo = "";
        for (let i = 0; i < obj.length; i++) {
            let valor = parseFloat((obj[i]["valor"] === "" ? 0 : obj[i]["valor"])).toFixed(2);
            let saldo = parseFloat((obj[i]["saldo"] === "" ? 0 : obj[i]["saldo"])).toFixed(2);
            let comision = parseFloat((obj[i]["comision"] === "" ? 0 : obj[i]["comision"])).toFixed(2);

            cuerpo += "  <tr>" +
                "<td>" + obj[i]["nombre"] + "</td>" +
                "<td>" + obj[i]["acronimo"] + "</td>" +
                "<td style='text-align: right;background-color: #fefda6'>" + obj[i]["valor"] + "</td>" +

                "<td style='text-align: right'>" + obj[i]["comision"] + "</td>" +
                "<td><button onclick=\"historial_cuenta_fecha(" + obj[i]["id"] + ")\" wigth=\"100\" style=\"margin-bottom: 5px\"\n" +
                "                            type=\"button\" class=\"btn btn-info form-control\">\n" +
                "                        VER\n" +
                "                    </button></td>" +
                "</tr>";


        }

        $("#tabla_valores_cuenta_totales").find('tbody').empty();
        $("#tabla_valores_cuenta_totales").find('tbody').append(cuerpo);


    }, 600);
    ///////////////////////////////////////////////////////////////////////////////////////
}

async function agregar_actualizar_historial_moneda() {

    let id = $("#id").val();
    let billete_uno = $("#billete_uno").val();
    let billete_cinco = $("#billete_cinco").val();
    let billete_dies = $("#billete_dies").val();
    let billete_veinte = $("#billete_veinte").val();
    let billete_cincuenta = $("#billete_cincuenta").val();
    let billete_cien = $("#billete_cien").val();


    let moneda_uno = $("#moneda_uno").val();
    let moneda_cinco = $("#moneda_cinco").val();
    let moneda_dies = $("#moneda_dies").val();
    let moneda_veinticinco = $("#moneda_veinticinco").val();
    let moneda_cincuenta = $("#moneda_cincuenta").val();
    let moneda_undolar = $("#moneda_undolar").val();


    let total_suma = $("#total_suma").text();

    if (total_suma !== "0") {
        ///////////////////////////////////////////////////////////////////////////////////////
        let url = '/json/json_guardar_historial_monedas.php';
        let datos = {
            billete_uno,
            billete_cinco,
            billete_dies,
            billete_veinte,
            billete_cincuenta,
            billete_cien,
            moneda_uno,
            moneda_cinco,
            moneda_dies,
            moneda_veinticinco,
            moneda_cincuenta,
            moneda_undolar,
            id
        };
        cargando();
        const res = await consulta(url, datos);

        setTimeout(function () {
            cargandoCerrar();
        }, 500);
        setTimeout(function () {

            mensaje(res);
            //obtener_entidades();
            //limpiar();

        }, 600);
        ///////////////////////////////////////////////////////////////////////////////////////
    } else {
        mensaje("No hay escrito ninguna cantidad");
    }


}


function sumar_billetes_monedas(x) {


    let numero = parseInt(x.value);

    if (!isNaN(numero)) {
        let billete_uno = parseInt($("#billete_uno").val());
        let billete_cinco = parseInt($("#billete_cinco").val()) * 5;
        let billete_dies = parseInt($("#billete_dies").val()) * 10;
        let billete_veinte = parseInt($("#billete_veinte").val()) * 20;
        let billete_cincuenta = parseInt($("#billete_cincuenta").val()) * 50;
        let billete_cien = parseInt($("#billete_cien").val()) * 100;


        /////////////////////////////

        $("#total_billete_uno").val(billete_uno.toFixed(2));
        $("#total_billete_cinco").val(billete_cinco.toFixed(2));
        $("#total_billete_dies").val(billete_dies.toFixed(2));
        $("#total_billete_veinte").val(billete_veinte.toFixed(2));
        $("#total_billete_cincuenta").val(billete_cincuenta.toFixed(2));
        $("#total_billete_cien").val(billete_cien.toFixed(2));

        /////////////////////////////


        let resultado_suma_billetes = billete_uno + billete_cinco + billete_dies + billete_veinte + billete_cincuenta + billete_cien;
        $("#total_billetes").val(resultado_suma_billetes.toFixed(2));
        let total_billetes = parseInt($("#total_billetes").val());
        /////////////////////////////////////////////////////////////

        let moneda_uno = parseFloat($("#moneda_uno").val()) * 0.01;
        let moneda_cinco = parseFloat($("#moneda_cinco").val()) * 0.05;
        let moneda_dies = parseFloat($("#moneda_dies").val()) * 0.10;
        let moneda_veinticinco = parseFloat($("#moneda_veinticinco").val()) * 0.25;
        let moneda_cincuenta = parseFloat($("#moneda_cincuenta").val()) * 0.50;
        let moneda_undolar = parseFloat($("#moneda_undolar").val());


        //////////////////////

        $("#total_moneda_uno").val(moneda_uno.toFixed(2));
        $("#total_moneda_cinco").val(moneda_cinco.toFixed(2));
        $("#total_moneda_dies").val(moneda_dies.toFixed(2));
        $("#total_moneda_veinticinco").val(moneda_veinticinco.toFixed(2));
        $("#total_moneda_cincuenta").val(moneda_cincuenta.toFixed(2));
        $("#total_moneda_undolar").val(moneda_undolar.toFixed(2));

        //////////////////////

        let resultado_suma_monedas = moneda_uno + moneda_cinco + moneda_dies + moneda_veinticinco + moneda_cincuenta + moneda_undolar;
        $("#total_monedas").val(resultado_suma_monedas.toFixed(2));
        let total_monedas = parseFloat($("#total_monedas").val());


        let resultado_total_suma = total_billetes + total_monedas;
        $("#total_suma").text(resultado_total_suma.toFixed(2))

        let valor_caja = $("#total_caja").text();

        let total_suma_otra = resultado_total_suma + valor_total_global + parseFloat(valor_caja);


        $("#suma_billetes_monedas_cuentas").text(total_suma_otra.toFixed(2));
        $("#suma_efectivo").text(resultado_total_suma.toFixed(2));


        let efectivo_total = $("#total_suma").text();
        let total_caja = $("#total_caja").text();

        let hay_diferencia = parseFloat(efectivo_total) - parseFloat(total_caja);

        if (hay_diferencia != 0) {
            document.getElementById("div_diferencia").style.backgroundColor = "red";
        } else {
            document.getElementById("div_diferencia").style.backgroundColor = "green";
        }
        $("#diferencia").text(hay_diferencia.toFixed(2))


    } else {
        $("#" + x.id).val(0)
        sumar_billetes_monedas(x);
        //mensaje("Sólo se aceptan números")
    }

}


async function valor_en_caja_fecha_buscar() {

    var desde = $("#desde").val();
    var hasta = $("#hasta").val();
    let url = '/json/json_valor_caja_fecha_buscar.php';
    let datos = {desde, hasta};

    cargando();
    const res = await consulta(url, datos);

    setTimeout(function () {
        cargandoCerrar();
    }, 500);
    setTimeout(function () {


        $("#valor_en_caja_fecha").val(res);


    }, 600);
    ///////////////////////////////////////////////////////////////////////////////////////
}

async function buscar() {
    document.getElementById("arriba").style.display = "";
    document.getElementById("abajo").style.display = "none";
    var desde = $("#desde").val();
    var hasta = $("#hasta").val();


    if (desde.length > 0 && hasta.length > 0) {
        google.charts.setOnLoadCallback(estadisticas_por_fecha(desde, hasta));
    } else {
        mensaje("Debe elegir las dos fechas para poder buscar");
    }


}

var nombre_empresa = "";

async function obtener_nombre() {

    let url = '/json/json_obtener_nombre_empresa.php';

    cargando();
    const res = await consulta(url);
    setTimeout(function () {
        cargandoCerrar();
    }, 500);
    setTimeout(async function () {

        nombre_empresa = res;


    }, 600);
    ///////////////////////////////////////////////////////////////////////////////////////

}

async function guardar_nombre() {
    let nombre = $("#nombre").val();
    let url = '/json/json_guardar_nombre_empresa.php';
    let datos = {nombre};
    cargando();
    const res = await consulta(url, datos);
    setTimeout(function () {
        cargandoCerrar();
    }, 500);
    setTimeout(async function () {


        mensaje(res);


    }, 600);
    ///////////////////////////////////////////////////////////////////////////////////////

}

async function buscar_arqueo() {

    var desde = $("#desde").val();


    if (desde.length > 0) {
        let url = '/json/json_historial_monedas.php';
        let datos = {desde};
        cargando();
        const res = await consulta(url, datos);

        /*setTimeout(function () {
            cargandoCerrar();
        }, 500);*/
        setTimeout(async function () {


            var obj = JSON.parse(res);


            if (obj.length > 0) {
                $("#id").val(obj[0].id);

                $("#billete_uno").val(obj[0].billete_uno);
                $("#billete_cinco").val(obj[0].billete_cinco);
                $("#billete_dies").val(obj[0].billete_dies);
                $("#billete_veinte").val(obj[0].billete_veinte);
                $("#billete_cincuenta").val(obj[0].billete_cincuenta);
                $("#billete_cien").val(obj[0].billete_cien);
                $("#moneda_uno").val(obj[0].moneda_uno);
                $("#moneda_cinco").val(obj[0].moneda_cinco);
                $("#moneda_dies").val(obj[0].moneda_dies);
                $("#moneda_veinticinco").val(obj[0].moneda_veinticinco);
                $("#moneda_cincuenta").val(obj[0].moneda_cincuenta);
                $("#moneda_undolar").val(obj[0].moneda_undolar);

                await obtener_valores_caja_arqueo();
                await obtener_valores_cuenta_arqueo_buscar();
                let vald = document.getElementById("moneda_undolar");
                sumar_billetes_monedas(vald);
                document.getElementById("boton_imprimir").removeAttribute("disabled");

            } else {

                $("#billete_uno").val(0);
                $("#billete_cinco").val(0);
                $("#billete_dies").val(0);
                $("#billete_veinte").val(0);
                $("#billete_cincuenta").val(0);
                $("#billete_cien").val(0);


                $("#moneda_uno").val(0);
                $("#moneda_cinco").val(0);
                $("#moneda_dies").val(0);
                $("#moneda_veinticinco").val(0);
                $("#moneda_cincuenta").val(0);
                $("#moneda_undolar").val(0);

                $("#total_billetes").val(0);
                $("#total_monedas").val(0);
                $("#total_suma").text(0);
                $("#id").val("");

                await obtener_valores_caja_arqueo();
                await obtener_valores_cuenta_arqueo_buscar();


                document.getElementById("boton_imprimir").setAttribute("disabled", "disabled");


                mensaje("No hay datos en la fecha buscada");

            }


        }, 600);
        ///////////////////////////////////////////////////////////////////////////////////////
    } else {
        mensaje("Debe elegir fecha para poder buscar");
    }


}


async function buscar_estadisticas_rubros(id, nombre) {
    google.charts.setOnLoadCallback(estadisticas_por_entidad(id, nombre));
}


function al_final(input) {
    $("#" + input.id).select();
}

async function consulta_post(url, datos, token) {


    var myHeaders = new Headers();
    //myHeaders.append("Authorization", "Bearer <api_key>");
    myHeaders.append("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
    if (token) {
        myHeaders.append("Authorization", "Bearer " + token);
        myHeaders.append("Origin", "http://192.168.64.2");
    }


    var raw = JSON.stringify(datos);
    var formBody = [];
    for (var property in datos) {
        var encodedKey = encodeURIComponent(property);
        var encodedValue = encodeURIComponent(datos[property]);
        formBody.push(encodedKey + "=" + encodedValue);
    }
    formBody = formBody.join("&");


    var requestOptions = {
        method: 'POST',
        headers: myHeaders,
        body: formBody,
        //redirect: 'follow'
    };

    let result;

    try {
        result = await fetch(url, requestOptions);
    } catch (msg) {
        result = false;

    }


    return result;
}


async function crear_excel_caja() {


    var obj = JSON.parse(datos_historial_caja);


    const rows = obj.map(row => ({
        nombre: row.nombre,
        valor: parseFloat(row.valor),
        comision: parseFloat(row.comision),
        saldo: parseFloat(row.saldo),
        tipo_comision: row.tipo_comision,
        comentario: row.comentario,
        referencia: row.referencia,
        id_crea: row.id_crea,
        fecha_creada: row.fecha_creada,
    }));

    /* genera el excel */
    const worksheet = XLSX.utils.json_to_sheet(rows);
    const workbook = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(workbook, worksheet, "Reporte Caja");

    /* cabeceras*/
    XLSX.utils.sheet_add_aoa(worksheet, [[
        "Nombres",
        "Valor",
        "Comisión Caja",
        "Total",
        "Tipo",
        "Comentario",
        "Referencia",
        "Usuario",
        "Fecha Creada"]], {origin: "A1"});

    /* calcula el ancho*/
    const ancho = rows.reduce((w, r) => Math.max(w, r.id_crea.length), 10);

    worksheet["!cols"] = [{wch: ancho}];

    /* create an XLSX file and try to save to Presidents.xlsx */
    XLSX.writeFile(workbook, "reporte caja.xlsx");
}

async function crear_excel_cuenta() {


    let array = [];
    for (let i = 0; i < datos_historial_cuenta.length; i++) {
        let nombre = datos_historial_cuenta[i]["nombre"];
        let comision = parseFloat(datos_historial_cuenta[i]["comision"]);
        let comision_valor_porcentaje = parseFloat(datos_historial_cuenta[i]["comision_valor_porcentaje"]);
        let valor = datos_historial_cuenta[i]["valor"] != "" ? parseFloat(datos_historial_cuenta[i]["valor"]) : 0;
        let saldo = datos_historial_cuenta[i]["saldo"] != "" ? parseFloat(datos_historial_cuenta[i]["saldo"]) : 0;
        let comentario = datos_historial_cuenta[i]["comentario"];
        let referencia = datos_historial_cuenta[i]["referencia"];
        let id_crea = datos_historial_cuenta[i]["id_crea"];
        let fecha_creada = datos_historial_cuenta[i]["fecha_creada"];
        let tipo = datos_historial_cuenta[i]["tipo_comision"];
        let arraysito = {
            nombre,
            comision,
            comision_valor_porcentaje,
            valor,
            saldo,
            tipo,
            comentario,
            referencia,
            id_crea,
            fecha_creada
        }
        array.push(arraysito);
    }

    /* genera el excel */
    const worksheet = XLSX.utils.json_to_sheet(array);
    const workbook = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(workbook, worksheet, "Reporte Cuenta");

    /* cabeceras*/
    XLSX.utils.sheet_add_aoa(worksheet, [[
        "Nombres",
        "Comision Caja",
        "Comision Directa",
        "Valor",
        "Total",
        "Tipo",
        "Comentario",
        "Referencia",
        "Usuario",
        "Fecha Creada"
    ]], {origin: "A1"});

    /* calcula el ancho*/
    const ancho = array.reduce((w, r) => Math.max(w, r.id_crea.length), 10);

    worksheet["!cols"] = [{wch: ancho}];

    /* create an XLSX file and try to save to Presidents.xlsx */
    XLSX.writeFile(workbook, "reporte cuenta.xlsx");
}

