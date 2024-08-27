document.getElementById('download-pdf').addEventListener('click', function () {
    // Obtener la fecha y hora actuales
    let currentDate = new Date();
    let day = String(currentDate.getDate()).padStart(2, '0');
    let month = String(currentDate.getMonth() + 1).padStart(2, '0'); // Enero es 0
    let year = currentDate.getFullYear();
    let hours = String(currentDate.getHours()).padStart(2, '0');
    let minutes = String(currentDate.getMinutes()).padStart(2, '0');
    let seconds = String(currentDate.getSeconds()).padStart(2, '0');

    // Formato de fecha y hora: YYYY-MM-DD_HH-MM-SS
    let formattedDate = `${year}-${month}-${day}_${hours}-${minutes}-${seconds}`;
    let textDate = `${day}/${month}/${year}  ${hours}:${minutes}`;

    // Generar el nombre del archivo con la fecha y hora
    let fileName = `tabla_medicamentos_${formattedDate}.pdf`;

    // Crear un contenedor para el contenido del PDF
    let pdfContent = document.createElement('div');

    // Agregar el encabezado con una imagen (ruta relativa)
    let header = document.createElement('div');
    header.innerHTML = `<img src="img/encabezado.png" alt="Encabezado" style="width: 100%; height: auto;">`;
    pdfContent.appendChild(header);

    // Agregar un texto adicional
    let additionalText = document.createElement('p');
    additionalText.innerHTML = `<em>Fecha y Hora de Descarga: ${textDate}</em>`;
    pdfContent.appendChild(additionalText);
    
    // Agregar un texto adicional
    let additionalTitle = document.createElement('h5');
    additionalTitle.textContent = `Resumen de Abastecimiento y Desabastecimiento`;
    
    // Aplicar estilos para centrar el título
    additionalTitle.style.textAlign = 'center';
    
    pdfContent.appendChild(additionalTitle);
    
    // Agregar el contenido principal
    let element = document.getElementById('pdf-container');
    pdfContent.appendChild(element.cloneNode(true));

    // Agregar el pie de página con una imagen (ruta relativa)
    let footer = document.createElement('div');
    footer.innerHTML = `<img src="img/pie_de_pagina.png" alt="Pie de página" style="width: 100%; height: auto;">`;
    pdfContent.appendChild(footer);

    // Configurar las opciones para la generación del PDF
    let opt = {
        margin: 0.5,
        filename: fileName, // Usa el nombre dinámico
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    };

    // Generar y descargar el PDF
    html2pdf().from(pdfContent).set(opt).save();
});
