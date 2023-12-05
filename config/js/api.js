var historial = [];
var profitsGrafica = [];
var fechaGrafica = [];

//Consulta el historial del usuario
$(document).ready(async function () {

    //alert('se ejecuta el codigo');

    await fetch('http://127.0.0.1:5000/historiales')
        .then(response => response.json())
        .then(data => historial = data)
        .then(response => console.log(response))
        .catch(error => console.error('Error:', error));

    //Guardo las fechas y profits en un arreglo para usarlos despues
    await historial.history.forEach(e => {

        profitsGrafica.push(
            e.profit.toFixed(2),
        );

        fechaGrafica.push(
            e.order_time,
        );

    });

    //Genero la grafica en base a estos 
    await areaChart('.areaChartBasic', '100%', 267, profitsGrafica, fechaGrafica);

    //Mostrar los balances y el profit 
    await mostrarBalances();

    //Mostrar la tabla del historial 
    await mostralHistorial();

});

//Crea la grafica del usuario con los datos correspondientes
function areaChart(idName, width, height = "290", dataCur, labels) {
    let primaryColorRGB;
    let primaryColor;
    primaryColor = getComputedStyle(document.documentElement).getPropertyValue('--color-primary');
    primaryColorRGB = getComputedStyle(document.documentElement).getPropertyValue(
        '--color-primary-rgba'
    );

    var optionRadial = {
        series: [{
            data: dataCur
        }],
        colors: [primaryColor, '#00AAFF'],
        chart: {
            width: width,
            height: height,
            type: 'area',
            dropShadow: {
                enabled: false,
            },
            zoom: {
                enabled: true,
                type: 'x', // Habilitar zoom solo en el eje X
                autoScaleYaxis: true,
                zoomedArea: {
                    fill: {
                        color: '#90CAF9', // Color de fondo del área de zoom
                        opacity: 0.4, // Opacidad del área de zoom
                    },
                    stroke: {
                        color: '#0D47A1', // Color del borde del área de zoom
                        opacity: 0.8, // Opacidad del borde del área de zoom
                        width: 1, // Ancho del borde del área de zoom
                    },
                },
            },
        },
        legend: {
            show: false
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'straight'
        },
        plotOptions: {
            bar: {
                borderRadius: 4,
                horizontal: true,
            }
        },
        xaxis: {
            type: 'datetime', // Cambiar el tipo de eje a datetime
            categories: labels,
            labels: {
                formatter: function (value) {
                    // Formatear las fechas según tus necesidades
                    return new Date(value).toLocaleDateString();
                },
            },
        },
        yaxis: {
            labels: {
                // Configuración de las etiquetas del eje Y
            },
        },
    };

    if ($(idName).length > 0) {
        new ApexCharts(document.querySelector(idName), optionRadial).render();
    }
}

//Configurar la tabla 
function mostralHistorial() {

    $('#tbodyOperaciones').html(``);

    historial.history.forEach(e => {

        $('#tbodyOperaciones').append(`
            <tr>
                <td>${e.order_time}</td>
                <td>${e.symbol}</td>
                <td class="text-info">${e.ticket}</td>
                <td>${e.type == 1 ? 'BUY' : 'SELL'}</td>
                <td>${e.volume}</td>
                <td>${e.price}</td>
                <td class="${e.profit > 0 ? 'text-success' : 'text-danger'}"> ${e.profit.toFixed(2)}</td>
            </tr>
        `);
    });

    $("#tablaOperaciones").DataTable({
        responsive: true,
        buttons: [
            {
                extend: "print",
                text: '<i class="fa fa-print">Prueba</i>',
                title: "Placeholder",
                titleAttr: "Imprimir",
                className: "btn btn-default btn-sm export imprimir",
                exportOptions: {
                    columns: ":visible",
                },
            },
            {
                extend: "pdf",
                text: "PDF",
                title: "Placeholder",
                titleAttr: "Pdf",
                className: "btn btn-default btn-sm export pdf",
                exportOptions: {
                    columns: ":visible",
                },
            },
        ],
        oLanguage: {
            sProcessing: "Procesando...",
            sLengthMenu:
                'Mostrar <select class="form-control">' +
                '<option value="10">10</option>' +
                '<option value="30">30</option>' +
                '<option value="50">50</option>' +
                '<option value="-1">All</option>' +
                "</select> registros",
            sZeroRecords: "No se encontraron resultados",
            sEmptyTable: "Ningún dato disponible en esta tabla",
            sInfo:
                "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
            sInfoEmpty: "Mostrando del 0 al 0 de un total de 0 registros",
            sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
            sInfoPostFix: "",
            sSearch: "Filtrar:",
            sUrl: "",
            sInfoThousands: ",",
            sLoadingRecords: "Por favor espere - cargando datos...",
            oPaginate: {
                sFirst: "<i class='uil uil-angle-double-left'></i>",
                sLast: "<i class='uil uil-angle-double-right'></i>",
                sNext: "<i class='uil uil-angle-right'></i>",
                sPrevious: " <i class='uil uil-angle-left'></i>",
            },
            oAria: {
                sSortAscending:
                    ": Activar para ordenar la columna de manera ascendente",
                sSortDescending:
                    ": Activar para ordenar la columna de manera descendente",
            },
        },
    });

}

function mostrarBalances(){
    //Obtener la fecha del broker actual
    const currentDate = new Date();
    const options = { timeZone: 'Europe/Bucharest' };
    const formattedCurrentDate = currentDate.toLocaleString('en-US', options).split(',')[0];

    let partesFecha = formattedCurrentDate.split('/');

    // Asegurémonos de tener dos dígitos para el mes y el día
    let mes = partesFecha[0].padStart(2, '0');
    let dia = partesFecha[1].padStart(2, '0');
    let anio = partesFecha[2];

    // Filtrar los datos por la fecha seleccionada
    const filteredData = historial.history.filter(item => {
        const orderDate = new Date(item.order_time);
        const formattedOrderDate = orderDate.toISOString().split('T')[0]; // Obtener la fecha en formato 'YYYY-MM-DD'
        return formattedOrderDate === (`${anio}-${mes}-${dia}`);
    });

    // Sumar los profits de los datos filtrados
    const totalProfit = filteredData.reduce((sum, item) => sum + item.profit, 0);

    console.log(totalProfit)
    
    //Capital inicial de la cuenta
    $('#balanceInicial').text('$ ' + historial.history[0].profit.toLocaleString() );

    //Obtiene el balance inicial del dia restando el balance actual con el profit actual
    $('#balanceInicialDia').text('$ ' + (historial.account.balance - totalProfit).toLocaleString() );

    //Profit del dia calculado de las operaciones del dia
    $('#profitDia').text('$ ' + totalProfit.toFixed(2) );

    //Obtiene el balance actual
    $('#balanceActual').text('$ ' + historial.account.balance.toLocaleString() );

    //Obtiene el beneficio restando el balance actual con el capital inicial de la cuenta 
    $('#beneficio').text('$ ' + (historial.account.balance - historial.history[0].profit).toFixed(2) );
    if(historial.account.balance - historial.history[0].profit >= 1 ){$('#beneficio').addClass('text-success').removeClass('text-white');
    }else if(historial.account.balance - historial.history[0].profit <= 1 ){$('#beneficio').addClass('text-danger').removeClass('text-white');}
}








