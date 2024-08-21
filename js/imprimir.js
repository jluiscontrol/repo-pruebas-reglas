function imprimir_reporte_arqueo() {
    let imprimir = '<head>\n' +
        '  <style>\n' +
        '    @media print {\n' +
        '      table {\n' +
        '        font-family: arial, sans-serif;\n' +
        '        border-collapse: collapse;\n' +
        '        width: 100%;\n' +
        '        -webkit-print-color-adjust: exact;\n' +
        '      }\n' +
        '\n' +
        '      td,\n' +
        '      th {\n' +
        '        border: 1px solid #dddddd;\n' +
        '        text-align: left;\n' +
        '        padding: 8px;\n' +
        '        -webkit-print-color-adjust: exact;\n' +
        '      }\n' +
        '\n' +
        '      tr:nth-child(even) {\n' +
        '        background-color: #dddddd;\n' +
        '        -webkit-print-color-adjust: exact;\n' +
        '      }\n' +
        '\n' +
        '      .input_azul {\n' +
        '        background-color: cornflowerblue;\n' +
        '        -webkit-print-color-adjust: exact;\n' +
        '      }\n' +
        '    }\n' +
        '  </style>\n' +
        '</head>\n' +


        '<br>\n' +
        '<div style="width:100%;background-color:lightblue">\n' +
        '<img src="../imagenes/logo.png" alt="Girl in a jacket" width="100" >' +
        '</div>\n' +
        '<div style="width:100%;background-color:lightblue">\n' +
        '<h3>' + nombre_empresa + '</h3>\n' +
        '</div>\n' +
        '<div style="width:100%;background-color:lightblue">\n' +
        '  <h3>Reporte arqueo fecha: ' + $("#desde").val() + '</h3>\n' +
        '</div>\n' +
        '<div style="width:100%;display:flex">\n' +
        '  <div style="width:50%"> Billetes </div>\n' +
        '  <div style="width:50%"> Monedas </div>\n' +
        '</div>\n' +
        '<div style="width:100%;display:flex">\n' +
        '  <div style="width:50%;">\n' +
        '    <div style="border-radius: 10px;border: 1px solid black;width:100%">\n' +
        '      <div style="width:100%;display:flex">\n' +
        '        <div class="input_azul" style="text-align: center;;padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px"> 1.00 </h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px;"> ' + $("#billete_uno").val() + '</h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%;border-left:1px solid black">\n' +
        '          <h5 style="margin:5px;"> ' + $("#total_billete_uno").val() + ' </h5>\n' +
        '        </div>\n' +
        '      </div>\n' +
        '    </div>\n' +
        '    <div style="width:100%">\n' +
        '      <div style="border-radius: 10px;border: 1px solid black;width:100%;display:flex">\n' +
        '        <div class="input_azul" style="text-align: center;padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px"> 5.00 </h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px;"> ' + $("#billete_cinco").val() + ' </h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%;border-left:1px solid black">\n' +
        '          <h5 style="margin:5px;"> ' + $("#total_billete_cinco").val() + ' </h5>\n' +
        '        </div>\n' +
        '      </div>\n' +
        '      <div style="border-radius: 10px;border: 1px solid black;width:100%;display:flex">\n' +
        '        <div class="input_azul" style="text-align: center;padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px"> 10.00 </h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px;"> ' + $("#billete_dies").val() + ' </h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%;border-left:1px solid black">\n' +
        '          <h5 style="margin:5px;"> ' + $("#total_billete_dies").val() + ' </h5>\n' +
        '        </div>\n' +
        '      </div>\n' +
        '      <div style="border-radius: 10px;border: 1px solid black;width:100%;display:flex">\n' +
        '        <div class="input_azul" style="text-align: center;padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px"> 20.00 </h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px;"> ' + $("#billete_veinte").val() + ' </h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%;border-left:1px solid black">\n' +
        '          <h5 style="margin:5px;"> ' + $("#total_billete_veinte").val() + ' </h5>\n' +
        '        </div>\n' +
        '      </div>\n' +
        '      <div style="border-radius: 10px;border: 1px solid black;width:100%;display:flex">\n' +
        '        <div class="input_azul" style="text-align: center;padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px"> 50.00 </h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px;"> ' + $("#billete_cincuenta").val() + ' </h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%;border-left:1px solid black">\n' +
        '          <h5 style="margin:5px;"> ' + $("#total_billete_cincuenta").val() + ' </h5>\n' +
        '        </div>\n' +
        '      </div>\n' +
        '      <div style="border-radius: 10px;border: 1px solid black;width:100%;display:flex">\n' +
        '        <div class="input_azul" style="text-align: center;padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px"> 100.00 </h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px;"> ' + $("#billete_cien").val() + ' </h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%;border-left:1px solid black">\n' +
        '          <h5 style="margin:5px;"> ' + $("#total_billete_cien").val() + '  </h5>\n' +
        '        </div>\n' +
        '      </div>\n' +
        '    </div>\n' +
        '  </div>\n' +
        '  <div style="width:50%;">\n' +
        '    <div style="border-radius: 10px;border: 1px solid black;width:100%">\n' +
        '      <div style="width:100%;display:flex">\n' +
        '        <div class="input_azul" style="text-align: center;padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px"> 0.01 </h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px;"> ' + $("#moneda_uno").val() + ' </h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%;border-left:1px solid black">\n' +
        '          <h5 style="margin:5px;"> ' + $("#total_moneda_uno").val() + ' </h5>\n' +
        '        </div>\n' +
        '      </div>\n' +
        '    </div>\n' +
        '    <div style="width:100%">\n' +
        '      <div style="border-radius: 10px;border: 1px solid black;width:100%;display:flex">\n' +
        '        <div class="input_azul" style="text-align: center;padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px"> 0.05 </h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px;"> ' + $("#moneda_cinco").val() + ' </h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%;border-left:1px solid black">\n' +
        '          <h5 style="margin:5px;"> ' + $("#total_moneda_cinco").val() + ' </h5>\n' +
        '        </div>\n' +
        '      </div>\n' +
        '      <div style="border-radius: 10px;border: 1px solid black;width:100%;display:flex">\n' +
        '        <div class="input_azul" style="text-align: center;padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px"> 0.10 </h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px;"> ' + $("#moneda_dies").val() + ' </h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%;border-left:1px solid black">\n' +
        '          <h5 style="margin:5px;"> ' + $("#total_moneda_dies").val() + ' </h5>\n' +
        '        </div>\n' +
        '      </div>\n' +
        '      <div style="border-radius: 10px;border: 1px solid black;width:100%;display:flex">\n' +
        '        <div class="input_azul" style="text-align: center;padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px"> 0.25 </h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px;"> ' + $("#moneda_veinticinco").val() + ' </h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%;border-left:1px solid black">\n' +
        '          <h5 style="margin:5px;"> ' + $("#total_moneda_veinticinco").val() + ' </h5>\n' +
        '        </div>\n' +
        '      </div>\n' +
        '      <div style="border-radius: 10px;border: 1px solid black;width:100%;display:flex">\n' +
        '        <div class="input_azul" style="text-align: center;padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px"> 0.50 </h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px;"> ' + $("#moneda_cincuenta").val() + ' </h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%;border-left:1px solid black">\n' +
        '          <h5 style="margin:5px;"> ' + $("#total_moneda_cincuenta").val() + ' </h5>\n' +
        '        </div>\n' +
        '      </div>\n' +
        '      <div style="border-radius: 10px;border: 1px solid black;width:100%;display:flex">\n' +
        '        <div class="input_azul" style="text-align: center;padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px"> 1.00 </h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '          <h5 style="margin:5px;"> ' + $("#moneda_undolar").val() + ' </h5>\n' +
        '        </div>\n' +
        '        <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%;border-left:1px solid black">\n' +
        '          <h5 style="margin:5px;"> ' + $("#total_moneda_undolar").val() + ' </h5>\n' +
        '        </div>\n' +
        '      </div>\n' +
        '    </div>\n' +
        '  </div>\n' +
        '</div>\n' +
        '<div style="width:100%;display:flex">\n' +
        '  <div style="width:50%;">\n' +
        '    <div style="border-radius: 10px;border: 1px solid black;width:100%;display:flex">\n' +
        '      <div class="input_azul" style="text-align: center;padding: 0px;margin: 0px;border-radius: 10px;width:66%">\n' +
        '        <h5 style="margin:5px"> TOTAL BILLETES </h5>\n' +
        '      </div>\n' +
        '      <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '        <h5 style="margin:5px;">' + $("#total_billetes").val() + ' </h5>\n' +
        '      </div>\n' +
        '    </div>\n' +
        '  </div>\n' +
        '  <div style="width:50%;">\n' +
        '    <div style="border-radius: 10px;border: 1px solid black;width:100%;display:flex">\n' +
        '      <div class="input_azul" style="text-align: center;padding: 0px;margin: 0px;border-radius: 10px;width:66%">\n' +
        '        <h5 style="margin:5px"> TOTAL MONEDAS </h5>\n' +
        '      </div>\n' +
        '      <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%">\n' +
        '        <h5 style="margin:5px;"> ' + $("#total_monedas").val() + ' </h5>\n' +
        '      </div>\n' +
        '    </div>\n' +
        '  </div>\n' +
        '</div>\n' +
        '<div style="width:100%;display:flex">\n' +
        '  <div style="width:50%;text-align: right">\n' +
        '    <h5 style="margin:5px"> TOTAL EFECTIVO</h5>\n' +
        '  </div>\n' +
        '  <div style="width:50%;text-align: left">\n' +
        '    <h5 style="margin:5px">' + $("#total_suma").text() + '</h5>\n' +
        '  </div>\n' +
        '</div>\n' +
        '<br>\n' +
        '<div style="width:50%">\n' +
        '  <table style="width:100%;border:1px solid black">\n' +
        '    <tr style="background-color: orange;color: white">\n' +
        '      <th>NOMBRE</th>\n' +
        '      <th>SALDO</th>\n' +
        '    </tr>\n';
    console.log("Antes agregar")
    imprimir += array_cuenta_arqueo_tabla;
    console.log("Luego agregar")
    imprimir += '  </table>\n' +
        '</div>\n' +
        '<br>\n' +
        '<div style="width:50%">\n' +
        '  <div style="border: 1px solid black;display:flex">\n' +
        '    <div style="border-right: 1px solid black;width:50%;padding: 8px">\n' +
        '      <h5 style="margin:5px">T. CAJA</h5>\n' +
        '    </div>\n' +
        '    <div style="text-align: right;width:50%;padding: 4px">\n' +
        '      <h5 style="margin:2px">' + $("#total_caja").text() + '</h5>\n' +
        '    </div>\n' +
        '  </div>\n' +

        '  <div style="border: 1px solid black;display:flex">\n' +
        '    <div style="border-right: 1px solid black;width:50%;padding: 8px">\n' +
        '      <h5 style="margin:2px">T. CUENTAS</h5>\n' +
        '    </div>\n' +
        '    <div style="text-align: right;width:50%;padding: 4px">\n' +
        '      <h5 style="margin:2px">' + $("#suma_cuentas").text() + '</h5>\n' +
        '    </div>\n' +
        '  </div>\n' +
        '  <div style="border: 1px solid black;display:flex">\n' +
        '    <div style="border-right: 1px solid black;width:50%;padding: 8px">\n' +
        '      <h5 style="margin:2px">TOTAL</h5>\n' +
        '    </div>\n' +
        '    <div style="text-align: right;width:50%;padding: 4px">\n' +
        '      <h5 style="margin:2px">' + $("#suma_billetes_monedas_cuentas").text() + '</h5>\n' +
        '    </div>\n' +
        '  </div>\n' +
        '</br>' +
        '  <div style="border: 1px solid black;display:flex">\n' +
        '    <div style="border-right: 1px solid black;width:50%;padding: 8px">\n' +
        '      <h5 style="margin:2px">T. ARQUEO</h5>\n' +
        '    </div>\n' +
        '    <div style="text-align: right;width:50%;padding: 4px">\n' +
        '      <h5 style="margin:2px">' + $("#suma_efectivo").text() + '</h5>\n' +
        '    </div>\n' +
        '  </div>\n' +
        '  <div style="border: 1px solid black;display:flex">\n' +
        '    <div style="border-right: 1px solid black;width:50%;padding: 8px">\n' +
        '      <h5 style="margin:2px">DIFERENCIA</h5>\n' +
        '    </div>\n' +
        '    <div style="text-align: right;width:50%;padding: 4px">\n' +
        '      <h5 style="margin:2px">' + $("#diferencia").text() + '</h5>\n' +
        '    </div>\n' +
        '  </div>\n' +
        '</div>';

    setTimeout(function () {
        myWin = window.open("about:blank", "_blank");
        myWin.document.write(imprimir);
        myWin.print();
    }, 100);

}
