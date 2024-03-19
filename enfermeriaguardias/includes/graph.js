

// Realizar la solicitud AJAX para obtener los datos
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


        console.log(data);

        setupChart1(data.trabajador_sustituido);

        setupChart2(data.trabajador_sustituto);


    },
    error: function (xhr, status, error) {
        console.error(error);
    }
});


function setupChart1(data) {
    // Create root element
    var root = am5.Root.new("chartdiv_1");

    // Set themes
    root.setThemes([
        am5themes_Animated.new(root)
    ]);

    // Create chart
    var chart = root.container.children.push(
        am5xy.XYChart.new(root, {
            panX: false,
            panY: false,
            wheelX: "none",
            wheelY: "none",
            paddingBottom: 50,
            paddingTop: 40,
            paddingLeft: 0,
            paddingRight: 0
        })
    );

    // Create axes
    var xRenderer = am5xy.AxisRendererX.new(root, {
        minorGridEnabled: true,
        minGridDistance: 60
    });
    xRenderer.grid.template.set("visible", false);

    var xAxis = chart.xAxes.push(
        am5xy.CategoryAxis.new(root, {
            paddingTop: 40,
            categoryField: "nom_sustituido",
            renderer: xRenderer
        })
    );

    var yRenderer = am5xy.AxisRendererY.new(root, {});
    yRenderer.grid.template.set("strokeDasharray", [3]);

    var yAxis = chart.yAxes.push(
        am5xy.ValueAxis.new(root, {
            min: 0,
            renderer: yRenderer
        })
    );

    // Add series
    var series = chart.series.push(
        am5xy.ColumnSeries.new(root, {
            name: "Income",
            xAxis: xAxis,
            yAxis: yAxis,
            valueYField: "Conteo",
            categoryXField: "nom_sustituido",
            sequencedInterpolation: true,
            calculateAggregates: true,
            maskBullets: false,
            tooltip: am5.Tooltip.new(root, {
                dy: -30,
                pointerOrientation: "vertical",
                labelText: "{valueY}"
            })
        })
    );

    series.columns.template.setAll({
        strokeOpacity: 0,
        cornerRadiusBR: 10,
        cornerRadiusTR: 10,
        cornerRadiusBL: 10,
        cornerRadiusTL: 10,
        maxWidth: 50,
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
                key: "locationY",
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
                key: "locationY",
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

        var imageContainer = bulletContainer.children.push(
            am5.Container.new(root, {
                mask: maskCircle
            })
        );
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
            locationY: 0,
            sprite: bulletContainer
        });
    });

    // Heat rule
    series.set("heatRules", [
        {
            dataField: "valueY",
            min: am5.color(0xe5dc36),
            max: am5.color(0x5faa46),
            target: series.columns.template,
            key: "fill"
        }
    ]);

    series.data.setAll(data);
    xAxis.data.setAll(data);

    var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
    cursor.lineX.set("visible", false);
    cursor.lineY.set("visible", false);

    cursor.events.on("cursormoved", function () {
        var dataItem = series.get("tooltip").dataItem;
        if (dataItem) {
            handleHover(dataItem);
        } else {
            handleOut();
        }
    });

    // Make stuff animate on load
    series.appear();
    chart.appear(1000, 100);
}

function setupChart2(data) {
    // Create root element
    var root = am5.Root.new("chartdiv_2");

    // Set themes
    root.setThemes([
        am5themes_Animated.new(root)
    ]);

    // Create chart
    var chart = root.container.children.push(
        am5xy.XYChart.new(root, {
            panX: false,
            panY: false,
            wheelX: "none",
            wheelY: "none",
            paddingBottom: 50,
            paddingTop: 40,
            paddingLeft: 0,
            paddingRight: 0
        })
    );

    // Create axes
    var xRenderer = am5xy.AxisRendererX.new(root, {
        minorGridEnabled: true,
        minGridDistance: 60
    });
    xRenderer.grid.template.set("visible", false);

    var xAxis = chart.xAxes.push(
        am5xy.CategoryAxis.new(root, {
            paddingTop: 40,
            categoryField: "nom_sustituto",
            renderer: xRenderer
        })
    );

    var yRenderer = am5xy.AxisRendererY.new(root, {});
    yRenderer.grid.template.set("strokeDasharray", [3]);

    var yAxis = chart.yAxes.push(
        am5xy.ValueAxis.new(root, {
            min: 0,
            renderer: yRenderer
        })
    );

    // Add series
    var series = chart.series.push(
        am5xy.ColumnSeries.new(root, {
            name: "Income",
            xAxis: xAxis,
            yAxis: yAxis,
            valueYField: "Conteo",
            categoryXField: "nom_sustituto",
            sequencedInterpolation: true,
            calculateAggregates: true,
            maskBullets: false,
            tooltip: am5.Tooltip.new(root, {
                dy: -30,
                pointerOrientation: "vertical",
                labelText: "{valueY}"
            })
        })
    );

    series.columns.template.setAll({
        strokeOpacity: 0,
        cornerRadiusBR: 10,
        cornerRadiusTR: 10,
        cornerRadiusBL: 10,
        cornerRadiusTL: 10,
        maxWidth: 50,
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
                key: "locationY",
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
                key: "locationY",
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

        var imageContainer = bulletContainer.children.push(
            am5.Container.new(root, {
                mask: maskCircle
            })
        );
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
            locationY: 0,
            sprite: bulletContainer
        });
    });

    // Heat rule
    series.set("heatRules", [
        {
            dataField: "valueY",
            min: am5.color(0xe5dc36),
            max: am5.color(0x5faa46),
            target: series.columns.template,
            key: "fill"
        }
    ]);

    series.data.setAll(data);
    xAxis.data.setAll(data);

    var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
    cursor.lineX.set("visible", false);
    cursor.lineY.set("visible", false);

    cursor.events.on("cursormoved", function () {
        var dataItem = series.get("tooltip").dataItem;
        if (dataItem) {
            handleHover(dataItem);
        } else {
            handleOut();
        }
    });

    // Make stuff animate on load
    series.appear();
    chart.appear(1000, 100);
}
