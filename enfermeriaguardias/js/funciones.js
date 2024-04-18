function generarPDF() {
    // Creamos un nuevo objeto PDF
    var doc = new jsPDF();

    // Definimos la posición de la imagen y el texto
    var imgPosX = 10; //posición horizontal de la img
    var imgPosY = 10; //Esto significa que la posición vertical de la imagen en el PDF será 5 unidades desde la parte superior de la página.
    var textPosX = 10; //establece la posición horizontal del texto en el PDF. En este caso, el texto estará 10 unidades desde el borde izquierdo de la página.
    var textPosY = 10 + 80 + 10; // Aquí, se declara una variable llamada textPosY y se calcula su valor. Se suma 10 (unidades) (para el margen superior), 80 (unidades) (para la altura de la imagen) y 10 (unidades) (para el espacio entre la imagen y el texto). Esto establece la posición vertical del texto en el PDF. El texto estará al mismo nivel vertical que la parte inferior de la imagen, dejando un espacio de 10 unidades entre ellos.


    // Agregamos la imagen
    var img = new Image();
    img.src = 'img/imssb.png';
    doc.addImage(img, 'PNG', imgPosX, imgPosY, 80,10);

    // Calculamos la altura de la primera línea de texto
    var lineHeight = 3;
    var totalTextHeight = 1 * lineHeight;

    // Definimos la posición Y del primer texto
    doc.setFontSize(6); // Establecemos el tamaño de la fuente
    var initialTextPosY = 10 + totalTextHeight;

    // Texto alineado a la derecha
    var maxWidth = doc.internal.pageSize.getWidth() - 50; // Ancho disponible para el texto
    doc.text('HOSPITAL REGIONAL DE ALTA ESPECIALIDAD DE IXTAPALUCA', 135, initialTextPosY);
    
    // Agregamos el texto "Texto 2" alineado a la derecha
    doc.text('DIRECCIÓN DE ADMINISTRACIÓN Y FINANZAS', 152, initialTextPosY + lineHeight);

    // Agregamos el texto "Texto 3" alineado a la derecha
    doc.text('SUBDIRECCIÓN DE RECURSOS HUMANOS', 156, initialTextPosY + 2 * lineHeight);



    // Calculamos la posición X del texto centrado
    var centeredText = "FORMATO PARA SOLICITUD DE AUTORIZACIÓN DE SUPLENCIA PERSONAL";
    var textWidth = doc.getTextWidth(centeredText);
    var textCenteredX = (doc.internal.pageSize.getWidth() - textWidth) / 2;

    // Agregamos el texto centrado y en negrita
    doc.setFontStyle('bold');
    doc.text(centeredText, textCenteredX, initialTextPosY + 6 * lineHeight);




     // Agregamos el texto "No. Suplencia"
     doc.text('No. Suplencia', textPosX, initialTextPosY + 8 * lineHeight);

     // Agregamos el texto "Fecha de solicitud" con un espacio horizontal
     var textWidthNoSuplencia = doc.getTextWidth('No. Suplencia');
     doc.text('Fecha de solicitud', textPosX + textWidthNoSuplencia + 43, initialTextPosY + 8* lineHeight);
 



    // Agregamos la fila "DATOS DEL SOLICITANTE" en negritas y centrada
    var datosSolicitanteText = "DATOS DEL SOLICITANTE";
    var datosSolicitanteWidth = doc.getTextWidth(datosSolicitanteText);
    var datosSolicitanteX = (doc.internal.pageSize.getWidth() - datosSolicitanteWidth) / 2;
    doc.setFontStyle('bold');
    doc.text(datosSolicitanteText, datosSolicitanteX, initialTextPosY + 10 * lineHeight);


   // Definimos los datos del solicitante
    var nombreText = "Nombre";
    var noEmpleadoText = "No. Empleado";
    var turnoText = "Turno";
    var diasHabilesText = "Días hábiles";
    var horarioEntradaText = "Horario entrada";
    var horarioSalidaText = "Horario salida";

    var servicioText = "Servicio";
    var codigoPuestoText = "Código de puesto";
    var puestoText = "Puesto";

    // Definimos las posiciones X para cada texto
    var nombreX = textPosX;

    // Agregamos el texto "Nombre" en su propia línea
    doc.text(nombreText, nombreX, initialTextPosY + 12 * lineHeight);

    // Definimos las posiciones X para los demás textos
    var noEmpleadoX = textPosX;
    var turnoX = noEmpleadoX + doc.getTextWidth(noEmpleadoText) + 25;
    var diasHabilesX = turnoX + doc.getTextWidth(turnoText) + 25;
    var horarioEntradaX = diasHabilesX + doc.getTextWidth(diasHabilesText) + 25;
    var horarioSalidaX = horarioEntradaX + doc.getTextWidth(horarioEntradaText) + 25;

    var servicioX = textPosX;
    
    var codigoPuestoX = servicioX + doc.getTextWidth(servicioText) + 31;
    var puestoX = codigoPuestoX + doc.getTextWidth(codigoPuestoText) + 59;

    // Agregamos los textos al documento
    doc.text(noEmpleadoText, noEmpleadoX, initialTextPosY + 14 * lineHeight);
    doc.text(turnoText, turnoX, initialTextPosY + 14 * lineHeight);
    doc.text(diasHabilesText, diasHabilesX, initialTextPosY + 14 * lineHeight);
    doc.text(horarioEntradaText, horarioEntradaX, initialTextPosY + 14 * lineHeight);
    doc.text(horarioSalidaText, horarioSalidaX, initialTextPosY + 14 * lineHeight);

    doc.text(servicioText, servicioX, initialTextPosY + 16 * lineHeight);
    doc.text(codigoPuestoText, codigoPuestoX, initialTextPosY + 16 * lineHeight);
    doc.text(puestoText, puestoX, initialTextPosY + 16 * lineHeight);



    // Agregamos el texto "DATOS DE QUIEN EFECTUA LA SUPLENCIA" centrado y en negritas
    var datosSuplenciaText = "DATOS DE QUIEN EFECTUA LA SUPLENCIA";
    var datosSuplenciaWidth = doc.getTextWidth(datosSuplenciaText);
    var datosSuplenciaX = (doc.internal.pageSize.getWidth() - datosSuplenciaWidth) / 2;
    doc.setFontStyle('bold');
    doc.text(datosSuplenciaText, datosSuplenciaX, initialTextPosY + 18 * lineHeight);




    // Definimos los datos de quien efectúa la suplencia

    var datosSuplente = {
        nombreText: "Nombre",
        noEmpleadoText: "No. Empleado",
        turnoText: "Turno",
        diasHabilesText: "Días hábiles",
        horarioEntradaText: "Horario entrada",
        horarioSalidaText: "Horario salida",
        servicioText: "Servicio",
        subServicioText: "Sub-servicio",
        codigoPuestoText: "Código de Puesto",
        puestoText: "Puesto"
    };

    // Definimos las posiciones X para cada texto
    var suplenteNombreX = textPosX;

    // Agregamos el texto "Nombre" en su propia línea
    doc.text(datosSuplente.nombreText, suplenteNombreX, initialTextPosY + 20 * lineHeight);

    // Definimos las posiciones X para los demás textos
    var suplenteNoEmpleadoX = textPosX;
    var suplenteTurnoX = suplenteNoEmpleadoX + doc.getTextWidth(datosSuplente.noEmpleadoText) + 22;
    var suplenteDiasHabilesX = suplenteTurnoX + doc.getTextWidth(datosSuplente.turnoText) + 22;
    var suplenteHorarioEntradaX = suplenteDiasHabilesX + doc.getTextWidth(datosSuplente.diasHabilesText) + 25;
    var suplenteHorarioSalidaX = suplenteHorarioEntradaX + doc.getTextWidth(datosSuplente.horarioEntradaText) + 25;

    var suplenteServicioX = textPosX;
    var suplenteSubServicioX = suplenteServicioX + doc.getTextWidth(datosSuplente.servicioText) + 31;
    var suplenteCodigoPuestoX = suplenteSubServicioX + doc.getTextWidth(datosSuplente.subServicioText) + 55;
    var suplentePuestoX = suplenteCodigoPuestoX + doc.getTextWidth(datosSuplente.codigoPuestoText) + 30;

    // Agregamos los textos al documento
    doc.text(datosSuplente.noEmpleadoText, suplenteNoEmpleadoX, initialTextPosY + 22 * lineHeight);
    doc.text(datosSuplente.turnoText, suplenteTurnoX, initialTextPosY + 22 * lineHeight);
    doc.text(datosSuplente.diasHabilesText, suplenteDiasHabilesX, initialTextPosY + 22 * lineHeight);
    doc.text(datosSuplente.horarioEntradaText, suplenteHorarioEntradaX, initialTextPosY + 22 * lineHeight);
    doc.text(datosSuplente.horarioSalidaText, suplenteHorarioSalidaX, initialTextPosY + 22 * lineHeight);

    doc.text(datosSuplente.servicioText, suplenteServicioX, initialTextPosY + 24 * lineHeight);
    doc.text(datosSuplente.subServicioText, suplenteSubServicioX, initialTextPosY + 24 * lineHeight);
    doc.text(datosSuplente.codigoPuestoText, suplenteCodigoPuestoX, initialTextPosY + 24 * lineHeight);
    doc.text(datosSuplente.puestoText, suplentePuestoX, initialTextPosY + 24 * lineHeight);




    // Agregamos el texto "DÍA QUE SOLICITA" centrado y en negritas
    var diaQueSolicitaText = "DÍA QUE SOLICITA";
    var diaQueSolicitaWidth = doc.getTextWidth(diaQueSolicitaText);
    var diaQueSolicitaX = (doc.internal.pageSize.getWidth() - diaQueSolicitaWidth) / 2;
    doc.setFontStyle('bold');
    doc.text(diaQueSolicitaText, diaQueSolicitaX, initialTextPosY + 26 * lineHeight);

    // Agregamos "Del" y "Al"

    var delText = "Del";
    var alText = "Al";
    var delWidth = doc.getTextWidth(delText);
    var alWidth = doc.getTextWidth(alText);

    // Definimos la posición X para cada palabra
    var delX = textPosX;
    var alX = delX + delWidth + 60; // 10 es el espacio en blanco entre "Del" y "Al"

    // Agregamos los textos al documento
    doc.text(delText, delX, initialTextPosY + 28 * lineHeight);
    doc.text(alText, alX, initialTextPosY + 28 * lineHeight);



    // Guardamos el PDF en una variable como objeto blob
    var pdfBlob = doc.output('blob');

    // Creamos un objeto URL para el blob
    var pdfURL = URL.createObjectURL(pdfBlob);

    // Abrimos el PDF en una nueva ventana o pestaña
    window.open(pdfURL);
}
