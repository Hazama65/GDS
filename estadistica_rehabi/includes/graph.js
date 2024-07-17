function buscar() {
    let empleado = $("#empleado").val();
    let terapia_fisica = $("#terapia_fisica").prop("checked") ? $("#terapia_fisica").val() : "";
    let terapia_ocupacional = $("#terapia_ocupacional").prop("checked") ? $("#terapia_ocupacional").val() : "";
    let terapia_lenguaje = $("#terapia_lenguaje").prop("checked") ? $("#terapia_lenguaje").val() : "";
    let fecha_1 = $("#fecha_1").val();
    let fecha_2 = $("#fecha_2").val();

    // Realizar la solicitud AJAX para obtener los datos con los parámetros
    $.ajax({
        url: 'includes/consultas.php',
        type: 'GET',
        dataType: 'json',
        data: {
            empleado: empleado,
            terapia_fisica: terapia_fisica,
            terapia_ocupacional: terapia_ocupacional,
            terapia_lenguaje: terapia_lenguaje,
            fecha_1: fecha_1,
            fecha_2: fecha_2
        },
        success: function (data) {
            console.log(data);
            setupChart(data);
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
}



// Realizar la solicitud AJAX para obtener los datos base
$.ajax({
    url: 'includes/consultas.php',
    type: 'GET',
    dataType: 'json',
    success: function (data) {


        console.log(data)
        setupChart(data);

    },
    error: function (xhr, status, error) {
        console.error(error);
    }
});





var root;
function setupChart(data) {

    // Si root no está definido, crear una nueva instancia
    if (!root) {
        root = am5.Root.new("chartdiv_1");
        // Configuraciones adicionales, como temas, etc.
        root.setThemes([
            am5themes_Animated.new(root)
        ]);
    } else {
        // Limpiar el gráfico existente
        root.container.children.clear();
    }

    // Create chart
    var chart = root.container.children.push(
        am5xy.XYChart.new(root, {
            panX: false,
            panY: false,
            paddingLeft: 0,
            wheelX: "panX",
            wheelY: "zoomX",
            layout: root.verticalLayout
        })
    );

    // Add legend
    var legend = chart.children.push(
        am5.Legend.new(root, {
            centerX: am5.p50,
            x: am5.p50
        })
    );

    // Create axes
    var xRenderer = am5xy.AxisRendererX.new(root, {
        cellStartLocation: 0.1,
        cellEndLocation: 0.9,
        minorGridEnabled: true
    });

    var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
        categoryField: "Turno",
        renderer: xRenderer,
        tooltip: am5.Tooltip.new(root, {})
    }));

    xRenderer.grid.template.setAll({
        location: 1
    });

    xAxis.data.setAll(data);

    var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
        renderer: am5xy.AxisRendererY.new(root, {
            strokeOpacity: 0.1
        })
    }));

    // Add series
    function makeSeries(name, fieldName, color) {
        var series = chart.series.push(am5xy.ColumnSeries.new(root, {
            name: name,
            xAxis: xAxis,
            yAxis: yAxis,
            valueYField: fieldName,
            categoryXField: "Turno"
        }));

        series.columns.template.setAll({
            tooltipText: "{name}, {categoryX}:{valueY}",
            width: am5.percent(90),
            tooltipY: 0,
            strokeOpacity: 0,
            fill: am5.color(color)  // Set the fill color here
        });

        series.data.setAll(data);

        // Make stuff animate on load
        series.appear();

        series.bullets.push(function () {
            return am5.Bullet.new(root, {
                locationY: 0,
                sprite: am5.Label.new(root, {
                    text: "{valueY}",
                    fill: root.interfaceColors.get("alternativeText"),
                    centerY: 0,
                    centerX: am5.p50,
                    populateText: true
                })
            });
        });

        legend.data.push(series);
    }

    makeSeries("Total", "Total", "#FF5733");
    makeSeries("Adulto", "Adulto", "#33FF57");
    makeSeries("Pediatrico", "Pediatrico", "#3357FF");
    makeSeries("Sesiones", "Sesiones", "#F39C12");
    makeSeries("Primera vez", "Primera vez", "#8E44AD");
    makeSeries("Subsecuente", "Subsecuente", "#3498DB");
    makeSeries("Terapias ambulatorias", "Terapias ambulatorias", "#E74C3C");
    makeSeries("Terapias en Hospitalización", "Terapias en Hospitalización", "#1ABC9C");

    // Make stuff animate on load
    chart.appear(1000, 100);
}
