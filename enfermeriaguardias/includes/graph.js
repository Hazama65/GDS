function buscar() {
    let empleado_1 = $("#empleado_1").val();
    let fecha_1 = $("#fecha_1").val();
    let fecha_2 = $("#fecha_2").val();


    if (empleado_1.trim() === '' || fecha_1.trim() === '' || fecha_2.trim() === '') {
        alert("Por favor, Seleccione Empleado y rango de Fechas.");
        console.log('hola');
        return;
    }


    // Realizar la solicitud AJAX para obtener los datos con los parámetros
    $.ajax({
        url: 'includes/consultas.php',
        type: 'GET',
        dataType: 'json',
        data: {
            empleado_1: empleado_1,
            fecha_1: fecha_1,
            fecha_2: fecha_2
        },
        success: function (data) {


            if (data.trabajador_sustituido.length === 0  && data.trabajador_sustituto.length === 0 ) {
                alert("No se encontraron Guardias para el trabajador: " + empleado_1 + " en el periodo seleccionado.");
                
            }

            // Convertir los valores del campo 'conteo' a tipo entero
            data.trabajador_sustituido.forEach(function (entry) {
                entry.Conteo = parseInt(entry.Conteo);
            });
            data.trabajador_sustituto.forEach(function (entry) {
                entry.Conteo = parseInt(entry.Conteo);
            });
    
            setupChart1(data.trabajador_sustituido);
    
            setupChart2(data.trabajador_sustituto);
    


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

        // Convertir los valores del campo 'conteo' a tipo entero
        data.trabajador_sustituido.forEach(function (entry) {
            entry.Conteo = parseInt(entry.Conteo);
        });
        data.trabajador_sustituto.forEach(function (entry) {
            entry.Conteo = parseInt(entry.Conteo);
        });

        setupChart1(data.trabajador_sustituido);

        setupChart2(data.trabajador_sustituto);


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

    // Create chart
    var chart = root.container.children.push(
        am5xy.XYChart.new(root, {
            panX: false,
            panY: false,
            paddingLeft: 0,
            paddingRight: 30,
            wheelX: "none",
            wheelY: "none"
        })
    );

    // Create axes
    var yRenderer = am5xy.AxisRendererY.new(root, {
        minorGridEnabled: true
    });
    yRenderer.grid.template.set("visible", false);

    var yAxis = chart.yAxes.push(
        am5xy.CategoryAxis.new(root, {
            categoryField: "nom_sustituido",
            renderer: yRenderer,
            paddingRight: 40
        })
    );

    var xRenderer = am5xy.AxisRendererX.new(root, {
        minGridDistance: 80,
        minorGridEnabled: true
    });

    var xAxis = chart.xAxes.push(
        am5xy.ValueAxis.new(root, {
            min: 0,
            renderer: xRenderer
        })
    );

    // Add series
    var series = chart.series.push(
        am5xy.ColumnSeries.new(root, {
            name: "Income",
            xAxis: xAxis,
            yAxis: yAxis,
            valueXField: "Conteo",
            categoryYField: "nom_sustituido",
            sequencedInterpolation: true,
            calculateAggregates: true,
            maskBullets: false,
            tooltip: am5.Tooltip.new(root, {
                dy: -30,
                pointerOrientation: "vertical",
                labelText: "{valueX}"
            })
        })
    );

    series.columns.template.setAll({
        strokeOpacity: 0,
        cornerRadiusBR: 10,
        cornerRadiusTR: 10,
        cornerRadiusBL: 10,
        cornerRadiusTL: 10,
        maxHeight: 50,
        fillOpacity: 0.8
    });

    var currentlyHovered;

    series.columns.template.events.on("pointerover", function (e) {
        handleHover(e.target.dataItem);
    });

    series.columns.template.events.on("pointerout", function (e) {
        handleOut();
    });

    function handleHover(dataItem) {
        if (dataItem && currentlyHovered != dataItem) {
            handleOut();
            currentlyHovered = dataItem;
            var bullet = dataItem.bullets[0];
            bullet.animate({
                key: "locationX",
                to: 1,
                duration: 600,
                easing: am5.ease.out(am5.ease.cubic)
            });
        }
    }

    function handleOut() {
        if (currentlyHovered) {
            var bullet = currentlyHovered.bullets[0];
            bullet.animate({
                key: "locationX",
                to: 0,
                duration: 600,
                easing: am5.ease.out(am5.ease.cubic)
            });
        }
    }

    var circleTemplate = am5.Template.new({});

    series.bullets.push(function (root, series, dataItem) {
        var bulletContainer = am5.Container.new(root, {});
        var circle = bulletContainer.children.push(
            am5.Circle.new(
                root,
                {
                    radius: 34
                },
                circleTemplate
            )
        );

        var maskCircle = bulletContainer.children.push(
            am5.Circle.new(root, { radius: 27 })
        );

        // only containers can be masked, so we add image to another container
        var imageContainer = bulletContainer.children.push(
            am5.Container.new(root, {
                mask: maskCircle
            })
        );

        // not working
        var image = imageContainer.children.push(
            am5.Picture.new(root, {
                src: "includes/uploads/usuario.png",
                centerX: am5.p50,
                centerY: am5.p50,
                width: 60,
                height: 60
            })
        );

        return am5.Bullet.new(root, {
            locationX: 0,
            sprite: bulletContainer
        });
    });

    // Heat rule
    series.set("heatRules", [
        {
            dataField: "valueX",
            min: am5.color(0xe5dc36),
            max: am5.color(0x5faa46),
            target: series.columns.template,
            key: "fill"
        },
        {
            dataField: "valueX",
            min: am5.color(0xe5dc36),
            max: am5.color(0x5faa46),
            target: circleTemplate,
            key: "fill"
        }
    ]);

    // Añadir los datos al gráfico
    series.data.setAll(data);
    yAxis.data.setAll(data);

    var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
    cursor.lineX.set("visible", false);
    cursor.lineY.set("visible", false);

    cursor.events.on("cursormoved", function () {
        var dataItem = series.get("tooltip").dataItem;
        if (dataItem) {
            handleHover(dataItem)
        }
        else {
            handleOut();
        }
    })

    // Make stuff animate on load
    series.appear();
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

    // Create chart
    var chart = root2.container.children.push(
        am5xy.XYChart.new(root2, {
            panX: false,
            panY: false,
            paddingLeft: 0,
            paddingRight: 30,
            wheelX: "none",
            wheelY: "none"
        })
    );

    // Create axes
    var yRenderer = am5xy.AxisRendererY.new(root2, {
        minorGridEnabled: true
    });
    yRenderer.grid.template.set("visible", false);

    var yAxis = chart.yAxes.push(
        am5xy.CategoryAxis.new(root2, {
            categoryField: "nom_sustituto",
            renderer: yRenderer,
            paddingRight: 40
        })
    );

    var xRenderer = am5xy.AxisRendererX.new(root2, {
        minGridDistance: 80,
        minorGridEnabled: true
    });

    var xAxis = chart.xAxes.push(
        am5xy.ValueAxis.new(root2, {
            min: 0,
            renderer: xRenderer
        })
    );

    // Add series
    var series = chart.series.push(
        am5xy.ColumnSeries.new(root2, {
            name: "Income",
            xAxis: xAxis,
            yAxis: yAxis,
            valueXField: "Conteo",
            categoryYField: "nom_sustituto",
            sequencedInterpolation: true,
            calculateAggregates: true,
            maskBullets: false,
            tooltip: am5.Tooltip.new(root2, {
                dy: -30,
                pointerOrientation: "vertical",
                labelText: "{valueX}"
            })
        })
    );

    series.columns.template.setAll({
        strokeOpacity: 0,
        cornerRadiusBR: 10,
        cornerRadiusTR: 10,
        cornerRadiusBL: 10,
        cornerRadiusTL: 10,
        maxHeight: 50,
        fillOpacity: 0.8
    });

    var currentlyHovered;

    series.columns.template.events.on("pointerover", function (e) {
        handleHover(e.target.dataItem);
    });

    series.columns.template.events.on("pointerout", function (e) {
        handleOut();
    });

    function handleHover(dataItem) {
        if (dataItem && currentlyHovered != dataItem) {
            handleOut();
            currentlyHovered = dataItem;
            var bullet = dataItem.bullets[0];
            bullet.animate({
                key: "locationX",
                to: 1,
                duration: 600,
                easing: am5.ease.out(am5.ease.cubic)
            });
        }
    }

    function handleOut() {
        if (currentlyHovered) {
            var bullet = currentlyHovered.bullets[0];
            bullet.animate({
                key: "locationX",
                to: 0,
                duration: 600,
                easing: am5.ease.out(am5.ease.cubic)
            });
        }
    }

    var circleTemplate = am5.Template.new({});

    series.bullets.push(function (root2, series, dataItem) {
        var bulletContainer = am5.Container.new(root2, {});
        var circle = bulletContainer.children.push(
            am5.Circle.new(
                root2,
                {
                    radius: 34
                },
                circleTemplate
            )
        );

        var maskCircle = bulletContainer.children.push(
            am5.Circle.new(root2, { radius: 27 })
        );

        // only containers can be masked, so we add image to another container
        var imageContainer = bulletContainer.children.push(
            am5.Container.new(root2, {
                mask: maskCircle
            })
        );

        // not working
        var image = imageContainer.children.push(
            am5.Picture.new(root2, {
                src: "includes/uploads/usuario.png",
                centerX: am5.p50,
                centerY: am5.p50,
                width: 60,
                height: 60
            })
        );

        return am5.Bullet.new(root2, {
            locationX: 0,
            sprite: bulletContainer
        });
    });

    // Heat rule
    series.set("heatRules", [
        {
            dataField: "valueX",
            min: am5.color(0xe5dc36),
            max: am5.color(0x5faa46),
            target: series.columns.template,
            key: "fill"
        },
        {
            dataField: "valueX",
            min: am5.color(0xe5dc36),
            max: am5.color(0x5faa46),
            target: circleTemplate,
            key: "fill"
        }
    ]);

    // Añadir los datos al gráfico
    series.data.setAll(data);
    yAxis.data.setAll(data);

    var cursor = chart.set("cursor", am5xy.XYCursor.new(root2, {}));
    cursor.lineX.set("visible", false);
    cursor.lineY.set("visible", false);

    cursor.events.on("cursormoved", function () {
        var dataItem = series.get("tooltip").dataItem;
        if (dataItem) {
            handleHover(dataItem)
        }
        else {
            handleOut();
        }
    })

    // Make stuff animate on load
    series.appear();
    chart.appear(1000, 100);
}

