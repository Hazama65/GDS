// function buscar() {
//     let empleado = $("#empleado").val();
//     let terapia_fisica = $("#terapia_fisica").prop("checked") ? "Si" : "";
//     let terapia_ocupacional = $("#terapia_ocupacional").prop("checked") ? "Si" : "";
//     let terapia_lenguaje = $("#terapia_lenguaje").prop("checked") ? "Si" : "";
//     let fecha_1 = $("#fecha_1").val();
//     let fecha_2 = $("#fecha_2").val();

//     // Realizar la solicitud AJAX para obtener los datos con los parámetros
//     $.ajax({
//         url: 'includes/consultas.php',
//         type: 'GET',
//         dataType: 'json',
//         data: {
//             empleado: empleado,
//             terapia_fisica: terapia_fisica,
//             terapia_ocupacional: terapia_ocupacional,
//             terapia_lenguaje: terapia_lenguaje,
//             fecha_1: fecha_1,
//             fecha_2: fecha_2
//         },
//         success: function (data) {
//             // console.log(data);
//             setupChart(data);
//         },
//         error: function (xhr, status, error) {
//             console.error(error);
//         }
//     });
// }



// Realizar la solicitud AJAX para obtener los datos base
$.ajax({
    url: 'includes/consultas.php',
    type: 'GET',
    dataType: 'json',
    success: function (data) {



        setupChart1(data[0]);
        setupChart2(data[1]);
        setupChart3(data[2]);
        setupChart4(data[3]);
        setupChart5(data[4]);


    },
    error: function (xhr, status, error) {
        console.error(error);
    }
});





var root;

function setupChart1(data) {
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

    var chart = root.container.children.push(am5xy.XYChart.new(root, {
        panX: true,
        panY: true,
        wheelX: "panX",
        wheelY: "zoomX",
        pinchZoomX: true,
        paddingLeft: 0,
        paddingRight: 1
    }));
    var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
    cursor.lineY.set("visible", false);

    var xRenderer = am5xy.AxisRendererX.new(root, {
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
    })

    var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
        maxDeviation: 0.3,
        categoryField: "NIHSS_escala",
        renderer: xRenderer,
        tooltip: am5.Tooltip.new(root, {})
    }));

    var yRenderer = am5xy.AxisRendererY.new(root, {
        strokeOpacity: 0.1
    })

    var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
        maxDeviation: 0.3,
        renderer: yRenderer
    }));

    var series = chart.series.push(am5xy.ColumnSeries.new(root, {
        name: "Series 1",
        xAxis: xAxis,
        yAxis: yAxis,
        valueYField: "conteo", // Campo de valor Y
        sequencedInterpolation: true,
        categoryXField: "NIHSS_escala", // Campo de categoría X
        tooltip: am5.Tooltip.new(root, {
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

    // Establecer los datos en la gráfica
    xAxis.data.setAll(data);
    series.data.setAll(data);

    // Hacer aparecer la serie y el gráfico
    series.appear(1000);
    chart.appear(1000, 100);
}

var root2;

function setupChart2(data) {
    // Si root no está definido, crear una nueva instancia
    if (!root2) {
        root2 = am5.Root.new("chartdiv_2");
        // Configuraciones adicionales, como temas, etc.
        root2.setThemes([
            am5themes_Animated.new(root2)
        ]);
    } else {
        // Limpiar el gráfico existente
        root2.container.children.clear();
    }

    var chart = root2.container.children.push(am5xy.XYChart.new(root2, {
        panX: true,
        panY: true,
        wheelX: "panX",
        wheelY: "zoomX",
        pinchZoomX: true,
        paddingLeft: 0,
        paddingRight: 1
    }));
    var cursor = chart.set("cursor", am5xy.XYCursor.new(root2, {}));
    cursor.lineY.set("visible", false);

    var xRenderer = am5xy.AxisRendererX.new(root2, {
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
    })

    var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root2, {
        maxDeviation: 0.3,
        categoryField: "BARTHEL_escala",
        renderer: xRenderer,
        tooltip: am5.Tooltip.new(root2, {})
    }));

    var yRenderer = am5xy.AxisRendererY.new(root2, {
        strokeOpacity: 0.1
    })

    var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root2, {
        maxDeviation: 0.3,
        renderer: yRenderer
    }));

    var series = chart.series.push(am5xy.ColumnSeries.new(root2, {
        name: "Series 1",
        xAxis: xAxis,
        yAxis: yAxis,
        valueYField: "conteo", // Campo de valor Y
        sequencedInterpolation: true,
        categoryXField: "BARTHEL_escala", // Campo de categoría X
        tooltip: am5.Tooltip.new(root2, {
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

    // Establecer los datos en la gráfica
    xAxis.data.setAll(data);
    series.data.setAll(data);

    // Hacer aparecer la serie y el gráfico
    series.appear(1000);
    chart.appear(1000, 100);
}

var root3;

function setupChart3(data) {
    // Si root no está definido, crear una nueva instancia
    if (!root3) {
        root3 = am5.Root.new("chartdiv_3");
        // Configuraciones adicionales, como temas, etc.
        root3.setThemes([
            am5themes_Animated.new(root3)
        ]);
    } else {
        // Limpiar el gráfico existente
        root3.container.children.clear();
    }

    var chart = root3.container.children.push(am5xy.XYChart.new(root3, {
        panX: true,
        panY: true,
        wheelX: "panX",
        wheelY: "zoomX",
        pinchZoomX: true,
        paddingLeft: 0,
        paddingRight: 1
    }));
    var cursor = chart.set("cursor", am5xy.XYCursor.new(root3, {}));
    cursor.lineY.set("visible", false);

    var xRenderer = am5xy.AxisRendererX.new(root3, {
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
    })

    var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root3, {
        maxDeviation: 0.3,
        categoryField: "FIM_escala",
        renderer: xRenderer,
        tooltip: am5.Tooltip.new(root3, {})
    }));

    var yRenderer = am5xy.AxisRendererY.new(root3, {
        strokeOpacity: 0.1
    })

    var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root3, {
        maxDeviation: 0.3,
        renderer: yRenderer
    }));

    var series = chart.series.push(am5xy.ColumnSeries.new(root3, {
        name: "Series 1",
        xAxis: xAxis,
        yAxis: yAxis,
        valueYField: "conteo", // Campo de valor Y
        sequencedInterpolation: true,
        categoryXField: "FIM_escala", // Campo de categoría X
        tooltip: am5.Tooltip.new(root3, {
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

    // Establecer los datos en la gráfica
    xAxis.data.setAll(data);
    series.data.setAll(data);

    // Hacer aparecer la serie y el gráfico
    series.appear(1000);
    chart.appear(1000, 100);
}

var root4;

function setupChart4(data) {
    // Si root no está definido, crear una nueva instancia
    if (!root4) {
        root4 = am5.Root.new("chartdiv_4");
        // Configuraciones adicionales, como temas, etc.
        root4.setThemes([
            am5themes_Animated.new(root4)
        ]);
    } else {
        // Limpiar el gráfico existente
        root4.container.children.clear();
    }

    var chart = root4.container.children.push(am5xy.XYChart.new(root4, {
        panX: true,
        panY: true,
        wheelX: "panX",
        wheelY: "zoomX",
        pinchZoomX: true,
        paddingLeft: 0,
        paddingRight: 1
    }));
    var cursor = chart.set("cursor", am5xy.XYCursor.new(root4, {}));
    cursor.lineY.set("visible", false);

    var xRenderer = am5xy.AxisRendererX.new(root4, {
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
    })

    var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root4, {
        maxDeviation: 0.3,
        categoryField: "RANKIN_escala",
        renderer: xRenderer,
        tooltip: am5.Tooltip.new(root4, {})
    }));

    var yRenderer = am5xy.AxisRendererY.new(root4, {
        strokeOpacity: 0.1
    })

    var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root4, {
        maxDeviation: 0.3,
        renderer: yRenderer
    }));

    var series = chart.series.push(am5xy.ColumnSeries.new(root4, {
        name: "Series 1",
        xAxis: xAxis,
        yAxis: yAxis,
        valueYField: "conteo", // Campo de valor Y
        sequencedInterpolation: true,
        categoryXField: "RANKIN_escala", // Campo de categoría X
        tooltip: am5.Tooltip.new(root4, {
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

    // Establecer los datos en la gráfica
    xAxis.data.setAll(data);
    series.data.setAll(data);

    // Hacer aparecer la serie y el gráfico
    series.appear(1000);
    chart.appear(1000, 100);
}

var root5;

function setupChart5(data) {
    // Si root no está definido, crear una nueva instancia
    if (!root5) {
        root5 = am5.Root.new("chartdiv_5");
        // Configuraciones adicionales, como temas, etc.
        root5.setThemes([
            am5themes_Animated.new(root5)
        ]);
    } else {
        // Limpiar el gráfico existente
        root5.container.children.clear();
    }

    var chart = root5.container.children.push(am5xy.XYChart.new(root5, {
        panX: true,
        panY: true,
        wheelX: "panX",
        wheelY: "zoomX",
        pinchZoomX: true,
        paddingLeft: 0,
        paddingRight: 1
    }));
    var cursor = chart.set("cursor", am5xy.XYCursor.new(root5, {}));
    cursor.lineY.set("visible", false);

    var xRenderer = am5xy.AxisRendererX.new(root5, {
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
    })

    var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root5, {
        maxDeviation: 0.3,
        categoryField: "MARCHA_escala",
        renderer: xRenderer,
        tooltip: am5.Tooltip.new(root5, {})
    }));

    var yRenderer = am5xy.AxisRendererY.new(root5, {
        strokeOpacity: 0.1
    })

    var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root5, {
        maxDeviation: 0.3,
        renderer: yRenderer
    }));

    var series = chart.series.push(am5xy.ColumnSeries.new(root5, {
        name: "Series 1",
        xAxis: xAxis,
        yAxis: yAxis,
        valueYField: "conteo", // Campo de valor Y
        sequencedInterpolation: true,
        categoryXField: "MARCHA_escala", // Campo de categoría X
        tooltip: am5.Tooltip.new(root5, {
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

    // Establecer los datos en la gráfica
    xAxis.data.setAll(data);
    series.data.setAll(data);

    // Hacer aparecer la serie y el gráfico
    series.appear(1000);
    chart.appear(1000, 100);
}
