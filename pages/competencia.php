<?php

include('./header.php');

?>

<!-- MODALES DE LA PAGINA -->
<div class="modal-basic modal fade show" id="modal-basic" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content modal-bg-white ">
            <div class="modal-header">
                <h6 class="modal-title">Detalles de la cuenta.</h6>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <img src="../img/svg/x.svg" alt="x" class="svg">
                </button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class=" col-lg-12">

                        <div class="list-box">
                            <ul>
                                <li class="list-box__item">
                                    <div class="d-flex align-items-center">
                                        <i class="uil uil-user me-2"></i>
                                        <h6 class="fw-light fs-6 me-2">MT5 ID:</h6>
                                        <b class="fs-6">22555454</b>
                                    </div>
                                </li>
                                <li class="list-box__item">
                                    <div class="d-flex align-items-center">
                                        <i class="uil uil-keyhole-circle me-2"></i>
                                        <h6 class="fw-light fs-6 me-2">Clave:</h6>
                                        <b class="fs-6">ejyk7yrl</b>
                                    </div>
                                </li>
                                <li class="list-box__item">
                                    <div class="d-flex align-items-center">
                                        <i class="uil uil-database me-2"></i>
                                        <h6 class="fw-light fs-6 me-2">Server:</h6>
                                        <b class="fs-6">Deriv-Demo</b>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-info btn-sm" onclick="desafioAnadido();"> <i class="uil uil-window me-2"></i> MT5 WEB </button>
            </div>

        </div>
    </div>
</div>
<!-- MODALES DE LA PAGINA -->

<div class="contents">

    <div class="crm mb-25">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="row">

                        <div class="py-4 px-2">
                            <div class="row justify-content-between align-items-center">

                                <div class="col-6">
                                    <h4 class="text-capitalize breadcrumb-title">CHALLENGE 5K - Dashboard</h4>
                                </div>

                                <div class="col-6 justify-content-end d-flex">
                                    <span class="bg-opacity-info px-4  color-info rounded-pill active">PARTICIPANDO</span>
                                </div>

                            </div>
                        </div>

                        <div class="card p-0">

                            <div class="bg-info px-2 py-1 text-white rounded-top" style="min-height:0px !important;">
                                <div class="row align-items-baseline">

                                    <div class="col-6">MT5 ID: 22555454</div>

                                    <div class="col-6 d-flex justify-content-end">
                                        <button data-bs-toggle="modal" data-bs-target="#modal-basic" href="javascript:;" class="text-white btn btn-icon btn-outline-light btn-small" title="Ver Credenciales">
                                            <i class="uil uil-lock-open-alt me-0"></i>
                                        </button>

                                    </div>
                                </div>
                            </div>

                            <div class="card-body px-3">

                                <div class="row">
                                    <div class="col-12 col-md-8 px-0">
                                        <canvas id="dashBoardChart"></canvas>
                                    </div>

                                    <div class="col-12 col-md-4 py-2 px-0 h-auto">
                                        <ul class="list-unstyled">

                                            <li class="py-4 px-2 border-bottom border-top">
                                                <div class="d-flex align-items-center justify-content-end text-start"><span class="badge-dot dot-success me-2 "></span> Balance Inicial Del Día: <h5 class="fw-bold fs-5 ms-2">$25.000,00</h5>
                                                </div>
                                            </li>

                                            <li class="py-4 px-2 border-bottom border-top">
                                                <div class="d-flex align-items-center justify-content-end text-start"><span class="badge-dot dot-danger me-2 "></span> Profit Del Día: <h5 class="fw-bold fs-5 ms-2">$22,54</h5>
                                                </div>
                                            </li>

                                            <li class="py-4 px-2 border-bottom border-top">
                                                <div class="d-flex align-items-center justify-content-end text-start"><span class="badge-dot dot-info me-2 "></span> Pérdida Disponible Del Día: <h5 class="fw-bold fs-5 ms-2">$1.250,00</h5>
                                                </div>
                                            </li>

                                            <li class="py-4 px-2 border-bottom border-top">
                                                <div class="d-flex align-items-center justify-content-end text-start"><span class="badge-dot dot-success me-2 "></span> Balance Actual: <h5 class="fw-bold fs-5 ms-2">$25.022,54</h5>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="row mt-3 p-2">
                                    <div style="background-color: #24234F;" class="col-6 col-md-3 px-4 py-3">
                                        <h6 class="m-0 text-white fw-light">BALANCE INICIAL</h6>
                                        <h4 class="fw-bold text-white">$5.000</h4>
                                    </div>
                                    <div style="background-color: #24234F;" class="col-6 col-md-3 px-4 py-3">
                                        <h6 class="m-0 text-white fw-light">BENEFICIO</h6>
                                        <h4 class="fw-bold text-success">$22,54</h4>
                                    </div>
                                    <div style="background-color: #24234F;" class="col-6 col-md-3 px-4 py-3">
                                        <h6 class="m-0 text-white fw-light">PÉRDIDA DIARIA</h6>
                                        <h4 class="fw-bold text-white">$0</h4>
                                    </div>
                                    <div style="background-color: #24234F;" class="col-6 col-md-3 px-4 py-3">
                                        <h6 class="m-0 text-white fw-light">PÉRDIDA MÁXIMA</h6>
                                        <h4 class="fw-bold text-white">$0</h4>
                                    </div>
                                </div>

                                <div class="dm-collapse mt-3">
                                    <div class="dm-collapse-item">
                                        <div class="dm-collapse-item__header">
                                            <a href="#" class="item-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-body-n-1" aria-expanded="false">
                                                <i class="la la-angle-down"></i>
                                                <h6>HISTORIAL DE OPERACIONES</h6>
                                            </a>
                                        </div>
                                        <div id="collapse-body-n-1" class="dm-collapse-item__body collapse">
                                            <div class="callapse-nested-block">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Fecha</th>
                                                                <th>Activo</th>
                                                                <th>Ticket</th>
                                                                <th>Tipo</th>
                                                                <th>Volumen</th>
                                                                <th>Precio</th>
                                                                <th>Profit</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>01:46:00 18/11/2023</td>
                                                                <td>Boom 1000 Index</td>
                                                                <td class="text-info">7278137188</td>
                                                                <td>BUY</td>
                                                                <td>5.0</td>
                                                                <td>12917.17</td>
                                                                <td class="text-success"> $27,09</td>
                                                            </tr>
                                                            <tr>
                                                                <td>04:36:12 18/11/2023</td>
                                                                <td>Crash 100 Index</td>
                                                                <td class="text-info">7273217444</td>
                                                                <td>BUY</td>
                                                                <td>5.0</td>
                                                                <td>1222.17</td>
                                                                <td class="text-danger"> $-22,09</td>
                                                            </tr>
                                                            <tr>
                                                                <td>01:46:00 18/11/2023</td>
                                                                <td>Boom 1000 Index</td>
                                                                <td class="text-info">7278137188</td>
                                                                <td>BUY</td>
                                                                <td>5.0</td>
                                                                <td>12917.17</td>
                                                                <td class="text-success"> $27,09</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>



                        </div>



                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- ends: .row -->
</div>

<?php

include('./footer.php');

?>

<script>
    function dashBoard(selector, height, dataCur, labels, labelName, fill) {
        let delayed;
        let primaryColorRGB;
        let primaryColor;
        primaryColor = getComputedStyle(document.documentElement).getPropertyValue('--color-primary');
        primaryColorRGB = getComputedStyle(document.documentElement).getPropertyValue(
            '--color-primary-rgba'
        );
        var ctx = document.getElementById(selector);
        if (ctx) {
            ctx.getContext("2d");
            ctx.height = window.innerWidth <= 575 ? 180 : height;
            var chart = new Chart(ctx, {
                type: "line",
                data: {
                    labels: labels,
                    datasets: [{
                        data: dataCur,
                        borderColor: primaryColor,
                        borderWidth: 3,
                        label: labelName,
                        tension: 0.1,
                        hoverRadius: '6',
                        pointBackgroundColor: primaryColor,
                        pointRadius: 0,
                        pointHoverRadius: 6,
                        pointHitRadius: 30,
                        pointStyle: 'circle',
                        pointHoverBorderWidth: 2,
                    }, ],
                },
                options: {
                    maintainAspectRatio: true,
                    responsive: true,
                    scales: {
                        x: {
                            display: true,
                            type: 'category',
                            ticks: {
                                callback: function(value, index, values) {
                                    // Mostrar solo el primer y último valor
                                    return index === 0 || index === values.length - 1 ? value : '';
                                }
                            }
                        },
                        y: {
                            display: true,
                            type: 'linear',
                            position: 'left',
                            ticks: {
                                // Configuración de ticks del eje Y
                            }
                        }
                    },
                    interaction: {
                        mode: 'index',
                    },
                    plugins: {
                        legend: {
                            display: false,
                        },
                        tooltip: {
                            usePointStyle: true,
                            enabled: true,
                        },
                    },
                    animation: {
                        onComplete: () => {
                            delayed = true;
                        },
                        delay: (context) => {
                            let delay = 0;
                            if (context.type === 'data' && context.mode === 'default' && !delayed) {
                                delay = context.dataIndex * 200 + context.datasetIndex * 50;
                            }
                            return delay;
                        },
                    },
                    elements: {
                        point: {
                            radius: 0,
                        },
                    },
                },
            });
        }
    }

    $(document).ready(function() {
        dashBoard("dashBoardChart", "120",
            (data = [-21.33, 28.21, 5.44, 45.90, -12.44, 50.22, -25.22, 70.09, 35.22, 12.53, -102.33, 58.12, -99.87]),
            labels = [
                "00:10:21",
                "01:12:54",
                "02:23:51",
                "03:23:11",
                "04:51:51",
                "05:41:13",
                "06:34:54",
                "07:22:54",
                "08:33:54",
                "09:51:54",
                "10:11:54",
                "12:34:54",
                "00:51:54"
            ],
            "Profit",
            true);
    });
</script>