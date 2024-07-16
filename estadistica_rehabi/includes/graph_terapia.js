function buscar_terapia() {
    let empleado = $("#empleado_tera").val();
    let tipo_terapia = $("#tipo_terapia").val();
    let fecha_1 = $("#fecha_1_tera").val();
    let fecha_2 = $("#fecha_2_tera").val();


    // console.log(empleado, tipo_terapia, fecha_1, fecha_2);

    // Realizar la solicitud AJAX para obtener los datos con los parámetros
    $.ajax({
        url: 'includes/consultas_terapias.php',
        type: 'GET',
        dataType: 'json',
        data: {
            empleado: empleado,
            tipo_terapia: tipo_terapia,
            fecha_1: fecha_1,
            fecha_2: fecha_2,
        },
        success: function (success) {

            let data = success[0];

            let data1 = [
                { titulo: 'Terapia Física', value: parseInt(data.total_terapia_fisica) },
                { titulo: 'Terapia Ocupacional', value: parseInt(data.total_terapia_ocupacional) },
                { titulo: 'Terapia de Lenguaje', value: parseInt(data.total_terapia_lenguaje) },
                { titulo: 'Aplicación de Férula', value: parseInt(data.total_aplicacion_ferula) },
                { titulo: 'Aplicación de Vendaje Enyesado', value: parseInt(data.total_Aplicacion_vendaje_enyesado) },
                { titulo: 'Baño de Parafina', value: parseInt(data.total_Baño_parafina) },
                { titulo: 'CHC CF', value: parseInt(data.total_CHC_CF) },
                { titulo: 'Corrientes Interferenciales', value: parseInt(data.total_Corrientes_interfereciales) },
                { titulo: 'Electroestimulación', value: parseInt(data.total_Electroestimulacion) },
                { titulo: 'Ejercicio Asistido', value: parseInt(data.total_Ejercicio_Asistido) },
                { titulo: 'Ejercicio de Fisioterapia', value: parseInt(data.total_Ejercicio_Fisioterapia) },
                { titulo: 'Hidroterapia en Tanque Terapéutico', value: parseInt(data.total_Hidroterapia_TanqueTerapéutico) },
                { titulo: 'Hidroterapia en Tina Habbard', value: parseInt(data.total_Hidroterapia_Tina_Habbard) },
                { titulo: 'Hidroterapia en Tina de Remolinos', value: parseInt(data.total_Hidroterapia_Tina_Remolinos) },
                { titulo: 'TENS', value: parseInt(data.total_TENS) },
                { titulo: 'Terapia Combinada USG Corriente Eléctrica', value: parseInt(data.total_TerapiacombinadaUSG_CorrienteEléctrica) },
                { titulo: 'Ultrasonido Terapéutico', value: parseInt(data.total_Ultrasonido_Terapeutico) },
                { titulo: 'Tracción Cervical y Lumbar', value: parseInt(data.total_TraccionCervical_Lumbar) },
                { titulo: 'Rehabilitación Cardiaca', value: parseInt(data.total_Rehabi_cardiaca) },
                { titulo: 'Ejercicios Respiratorios', value: parseInt(data.total_Ejercicios_respiratorio) },
                { titulo: 'Terapia Láser', value: parseInt(data.total_Terapia_Laser) },
                { titulo: 'Toxina Botulínica', value: parseInt(data.total_Toxina_Botulinica) }
            ]
            initChart(data1);

        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
}



// Realizar la solicitud AJAX para obtener los datos base
$.ajax({
    url: 'includes/consultas_terapias.php',
    type: 'GET',
    dataType: 'json',
    success: function (success) {

        let data = success[0];

        let data1 = [
            { titulo: 'Terapia Física', value: parseInt(data.total_terapia_fisica) },
            { titulo: 'Terapia Ocupacional', value: parseInt(data.total_terapia_ocupacional) },
            { titulo: 'Terapia de Lenguaje', value: parseInt(data.total_terapia_lenguaje) },
            { titulo: 'Aplicación de Férula', value: parseInt(data.total_aplicacion_ferula) },
            { titulo: 'Aplicación de Vendaje Enyesado', value: parseInt(data.total_Aplicacion_vendaje_enyesado) },
            { titulo: 'Baño de Parafina', value: parseInt(data.total_Baño_parafina) },
            { titulo: 'CHC CF', value: parseInt(data.total_CHC_CF) },
            { titulo: 'Corrientes Interferenciales', value: parseInt(data.total_Corrientes_interfereciales) },
            { titulo: 'Electroestimulación', value: parseInt(data.total_Electroestimulacion) },
            { titulo: 'Ejercicio Asistido', value: parseInt(data.total_Ejercicio_Asistido) },
            { titulo: 'Ejercicio de Fisioterapia', value: parseInt(data.total_Ejercicio_Fisioterapia) },
            { titulo: 'Hidroterapia en Tanque Terapéutico', value: parseInt(data.total_Hidroterapia_TanqueTerapéutico) },
            { titulo: 'Hidroterapia en Tina Habbard', value: parseInt(data.total_Hidroterapia_Tina_Habbard) },
            { titulo: 'Hidroterapia en Tina de Remolinos', value: parseInt(data.total_Hidroterapia_Tina_Remolinos) },
            { titulo: 'TENS', value: parseInt(data.total_TENS) },
            { titulo: 'Terapia Combinada USG Corriente Eléctrica', value: parseInt(data.total_TerapiacombinadaUSG_CorrienteEléctrica) },
            { titulo: 'Ultrasonido Terapéutico', value: parseInt(data.total_Ultrasonido_Terapeutico) },
            { titulo: 'Tracción Cervical y Lumbar', value: parseInt(data.total_TraccionCervical_Lumbar) },
            { titulo: 'Rehabilitación Cardiaca', value: parseInt(data.total_Rehabi_cardiaca) },
            { titulo: 'Ejercicios Respiratorios', value: parseInt(data.total_Ejercicios_respiratorio) },
            { titulo: 'Terapia Láser', value: parseInt(data.total_Terapia_Laser) },
            { titulo: 'Toxina Botulínica', value: parseInt(data.total_Toxina_Botulinica) }
        ]
        initChart(data1);
    },
    error: function (xhr, status, error) {
        console.error(error);
    }
});

var chartRoot; // Variable global para almacenar la referencia del gráfico

function initChart(data) {
    am5.ready(function () {
        if (chartRoot) {
            chartRoot.dispose(); // Destruir la instancia anterior del gráfico
        }

        chartRoot = am5.Root.new("chartdiv_2");

        chartRoot.setThemes([
            am5themes_Animated.new(chartRoot)
        ]);

        var chart = chartRoot.container.children.push(am5xy.XYChart.new(chartRoot, {
            panX: true,
            panY: true,
            wheelX: "panX",
            wheelY: "zoomX",
            pinchZoomX: true,
            paddingLeft: 0,
            paddingRight: 1
        }));

        var cursor = chart.set("cursor", am5xy.XYCursor.new(chartRoot, {}));
        cursor.lineY.set("visible", false);

        var xRenderer = am5xy.AxisRendererX.new(chartRoot, {
            minGridDistance: 30,
            minorGridEnabled: true
        });

        xRenderer.labels.template.setAll({
            rotation: -90,
            centerY: am5.p50,
            centerX: am5.p100,
            paddingRight: 15
        });

        xRenderer.grid.template.setAll({
            location: 1
        });

        var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(chartRoot, {
            maxDeviation: 0.3,
            categoryField: "titulo",
            renderer: xRenderer,
            tooltip: am5.Tooltip.new(chartRoot, {})
        }));

        var yRenderer = am5xy.AxisRendererY.new(chartRoot, {
            strokeOpacity: 0.1
        });

        var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(chartRoot, {
            maxDeviation: 0.3,
            renderer: yRenderer
        }));

        var series = chart.series.push(am5xy.ColumnSeries.new(chartRoot, {
            name: "Series 1",
            xAxis: xAxis,
            yAxis: yAxis,
            valueYField: "value",
            sequencedInterpolation: true,
            categoryXField: "titulo",
            tooltip: am5.Tooltip.new(chartRoot, {
                labelText: "{valueY}"
            })
        }));

        series.columns.template.setAll({ cornerRadiusTL: 5, cornerRadiusTR: 5, strokeOpacity: 0 });
        series.columns.template.adapters.add("fill", function (fill, target) {
            return chart.get("colors").getIndex(series.columns.indexOf(target));
        });

        series.columns.template.adapters.add("stroke", function (stroke, target) {
            return chart.get("colors").getIndex(series.columns.indexOf(target));
        });

        xAxis.data.setAll(data);
        series.data.setAll(data);

        series.appear(1000);
        chart.appear(1000, 100);
    });
}