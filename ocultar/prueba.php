<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Condicional</title>
</head>
<body>
    <form>
        <label for="Caidas">¿Ha tenido caídas?</label>
        <select id="Caidas">
            <option value="No">No</option>
            <option value="Si">Sí</option>
        </select>
        
        <div id="caidas_tipo" style="display: none;">
            <label for="TipoCaidas">Tipo de caídas</label>
            <select id="TipoCaidas">
                <option value="No">No</option>
                <option value="Si">Sí</option>
            </select>
        </div>

        <div id="caidas_subtipo" style="display: none;">
            <label for="SubtipoCaidas">Subtipo de caídas</label>
            <select id="SubtipoCaidas">
                <option value="Tipo1">Tipo 1</option>
                <option value="Tipo2">Tipo 2</option>
            </select>
        </div>
    </form>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let SelecCaidas = document.getElementById("Caidas");
            let divcaidas_tipo = document.getElementById("caidas_tipo");
            let TipoCaidas = document.getElementById("TipoCaidas");
            let divcaidas_subtipo = document.getElementById("caidas_subtipo");
            let SubtipoCaidas = document.getElementById("SubtipoCaidas");

            SelecCaidas.addEventListener("change", function () {
                if (SelecCaidas.value === "Si") {
                    divcaidas_tipo.style.display = "block";
                } else {
                    // Restablecer valores y ocultar campos adicionales
                    divcaidas_tipo.style.display = "none";
                    TipoCaidas.selectedIndex = 0;
                    divcaidas_subtipo.style.display = "none";
                    SubtipoCaidas.selectedIndex = 0;
                }
            });

            TipoCaidas.addEventListener("change", function () {
                if (TipoCaidas.value === "Si") {
                    divcaidas_subtipo.style.display = "block";
                } else {
                    divcaidas_subtipo.style.display = "none";
                    SubtipoCaidas.selectedIndex = 0;
                }
            });
        });
    </script>
</body>
</html>
