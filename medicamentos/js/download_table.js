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

    // Generar el nombre del archivo con la fecha y hora
    let fileName = `tabla_medicamentos_${formattedDate}.pdf`;

    let element = document.getElementById('pdf-container'); // Selecciona el contenedor específico por ID
    let opt = {
        margin: 0.5,
        filename: fileName, // Usa el nombre dinámico
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    };
    // Generar el PDF
    html2pdf().from(element).set(opt).save();
});

