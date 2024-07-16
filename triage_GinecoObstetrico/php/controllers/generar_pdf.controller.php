<?php
require_once ('../../fpdf/fpdf.php');
require_once ('../../fpdi2/src/autoload.php');
require (__DIR__ . '/../models/database.model.php');
include (__DIR__ . '/../dbconfig_gn.php');

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);


use setasign\Fpdi\Fpdi;


class PDFWithFooter extends Fpdi
{
    private $footerText;

    public function __construct($footerText = 'uwu')
    {
        parent::__construct();
        $this->footerText = $footerText;
    }

    function Footer()
    {
        $this->SetY(-15); // Posicionar a 15 mm del fondo
        $this->SetFont('Arial', 'I', 8); // Seleccionar la fuente Arial itálica de tamaño 8
        $this->Cell(0, 10, $this->footerText . ' - Página ' . $this->PageNo(), 0, 0, 'C'); // Añadir el texto personalizado y el número de página centrado
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id_GN = $_POST['valor'];

    $queryAllData = "SELECT dg.*,dp.*,ag.*,sv.*,si.*,sg.*,tr.*,rt.* FROM datos_generales dg
        JOIN datos_paciente dp on dg.id_GN = dp.id_GN
        JOIN antecedentes_go ag on dg.id_GN = ag.id_GN
        JOIN signos_vitales sv ON dg.id_GN = sv.id_GN
        JOIN sintomas si ON dg.id_GN = si.id_GN
        JOIN signos sg ON dg.id_GN = sg.id_GN
        JOIN tira_reactiva tr ON dg.id_GN = tr.id_GN
        JOIN resultados_triaje rt ON dg.id_GN = rt.id_GN WHERE dg.id_GN= $id_GN";

    $AllData = $connectionDB->getRows($queryAllData);

    if (!empty($AllData)) {
        foreach ($AllData as $data) {
            $fecha = $data['fecha'];
            $elabora = $data['elabora'];
            $curp = $data['curp'];
            $nombre_paciente = $data['nombre_paciente'];
            $fecha_nacimiento = $data['fecha_nacimiento'];
            $edad = $data['edad'];
            $covid = $data['covid'];
            $gesta = $data['gesta'];
            $paras = $data['paras'];
            $cesarea = $data['cesarea'];
            $abortos = $data['abortos'];
            $embarazos_ecto = $data['embarazos_ecto'];
            $hijos_vivos = $data['hijos_vivos'];
            $FUM = $data['FUM'];
            $fecha_parto = $data['fecha_parto'];
            $sem_gestacion = $data['sem_gestacion'];
            $presion_sis = $data['presion_sis'];
            $presion_dia = $data['presion_dia'];
            $frecuencia_card = $data['frecuencia_card'];
            $frecuencia_respi = $data['frecuencia_respi'];
            $temperatura = $data['temperatura'];
            $frecuencia_card_fet = $data['frecuencia_card_fet'];
            $talla = $data['talla'];
            $peso = $data['peso'];
            $imc = $data['imc'];
            $resultadoIMC = $data['resultadoIMC'];
            $conciencia = $data['conciencia'];
            $convulsiones = $data['convulsiones'];
            $vasoespasmo = $data['vasoespasmo'];
            $epigastrio = $data['epigastrio'];
            $mov_fetales = $data['mov_fetales'];
            $sang_vag = $data['sang_vag'];
            $liquido_amniotico = $data['liquido_amniotico'];
            $parto = $data['parto'];
            $pres_fetal = $data['pres_fetal'];
            $proteinas = $data['proteinas'];
            $leucocitos = $data['leucocitos'];
            $glucosa = $data['glucosa'];
            $nitritos = $data['nitritos'];
            $cetonas = $data['cetonas'];
            $eritrocitos = $data['eritrocitos'];
            $resultado_triage = $data['resultado_triage'];
            $destino = $data['destino'];
            $codigo = $data['codigo'];

            // Ruta del archivo PDF existente
            $originalPdf = '../../docs/TRIAGE OBSTETRICO ANVERSO.pdf';

            // Instancia de FPDI
            $pdf = new Fpdi();
            $pageCount = $pdf->setSourceFile($originalPdf);

            // Importar todas las páginas del PDF existente
            // Array de textos adicionales con sus respectivas coordenadas (x, y)
            $textosAdicionales = array(

                array($nombre_paciente, 47, 30.5, 10),
                array($edad, 128, 30.5, 10),
                array($fecha_nacimiento, 179, 30.5, 10),
                array($fecha, 202, 21.5, 7),
                array($gesta, 47, 35.5, 10),
                array($paras, 70, 35.5, 10),
                array($abortos, 97, 35.5, 10),
                array($cesarea, 127, 35.5, 10),
                array($embarazos_ecto, 158, 35.5, 10),
                array($hijos_vivos, 236, 35.5, 10),
                array($FUM, 86, 40, 10),
                array($fecha_parto, 156, 40, 10),
                array($sem_gestacion, 230, 40, 10),
                array($presion_sis, 103.5, 66.5, 10),
                array($presion_dia, 103.5, 70, 10),
                array($frecuencia_card, 103.5, 74, 10),
                array($frecuencia_respi, 103.5, 78.5, 10),
                array($temperatura, 103.5, 82, 10),
                array($frecuencia_card_fet, 103.5, 86, 10),
                array($conciencia, 103.5, 90, 10),
                array($convulsiones, 103.5, 96, 10),
                array($vasoespasmo, 103.5, 104, 10),
                array($epigastrio, 103.5, 112, 10),
                array($mov_fetales, 103.5, 118, 10),
                array($sang_vag, 103.5, 124, 10),
                array($liquido_amniotico, 103.5, 130, 10),
                array($parto, 103.5, 136, 10),
                array($pres_fetal, 103.5, 144, 10),
                array($talla, 60, 161.5, 10),
                array($peso, 127, 161.5, 10),
                array($imc, 182, 161.5, 10),
                array($proteinas, 47, 177, 10),
                array($glucosa, 85, 177, 10),
                array($cetonas, 124, 177, 8),
                array($leucocitos, 160, 177, 8),
                array($nitritos, 185, 177, 8),
                array($elabora, 100, 179.5, 10)

            );
            // Importar y usar solo la primera página
            if ($pageCount > 0) {

                $templateId = $pdf->importPage(1);

                // Definir la orientación de la página. Usa "P" para retrato y "L" para paisaje.
                $pdf->AddPage('L'); // Cambia 'P' a 'L' si necesitas paisaje

                $pdf->useTemplate($templateId);

                // Agregar textos adicionales en diferentes posiciones
                $pdf->SetTextColor(0, 0, 0); // Cambia el color del texto según sea necesario
                foreach ($textosAdicionales as $texto) {
                    $pdf->SetFont('Arial', '', $texto[3]); // Establecer el tamaño de fuente
                    $pdf->SetXY($texto[1], $texto[2]); // Establecer las coordenadas (x, y)
                    $pdf->Cell(0, 10, utf8_decode($texto[0]), 0, 2); // Agregar el texto
                }
            }

            // Enviar el PDF al navegador como respuesta AJAX
            $pdf->Output();
            break; // Salir del bucle después de procesar el primer conjunto de datos
        }
    }
}

?>