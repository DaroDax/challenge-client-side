<?php

include('./header.php');

?>

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

                            <div class="bg-info px-3 py-2 text-white rounded-top" style="min-height:0px !important;">
                                <div class="row align-items-baseline">

                                    <div class="col-12 d-flex align-items-baseline">

                                        <div class="me-1">MT5 ID: <a href="javascript:;" class="text-white me-2" onclick="copiarAlPortapapeles(this.innerText)">22555454</a></div>
                                        <div> | Clave: <a href="javascript:;" class="text-white" onclick="copiarAlPortapapeles(this.innerText)">********</a></div>

                                    </div>

                                    <!-- <div class="col-6 d-flex justify-content-end">
                                        <button data-bs-toggle="modal" data-bs-target="#modal-basic" href="javascript:;" class="text-white btn btn-icon btn-outline-light btn-small" title="Ver Credenciales">
                                            <i class="uil uil-lock-open-alt me-0"></i>
                                        </button>

                                    </div> -->
                                </div>
                            </div>

                            <div class="card-body px-3">

                                <div class="row">

                                    <!-- <div class="col-12 col-md-8 px-0">
                                        <canvas id="dashBoardChart"></canvas>
                                    </div> -->
                                    
                                    <div class="col-12 col-md-8 px-0">
                                        <div class="areaChartBasic"></div>
                                    </div>

                                    <div class="col-12 col-md-4 px-0 h-auto">
                                        <ul class="list-unstyled">

                                            <li class="py-4 px-2 border-bottom border-top">
                                                <div class="d-flex align-items-center justify-content-between text-start"><div class="d-flex align-items-center"><span class="badge-dot dot-success me-2 "></span> Balance Inicial Del Día:</div> <h5 id="balanceInicialDia" class="fw-semibold fs-5 ms-2">$0</h5>
                                                </div>
                                            </li>

                                            <li class="py-4 px-2 border-bottom border-top">
                                                <div class="d-flex align-items-center justify-content-between text-start"><div class="d-flex align-items-center"><span class="badge-dot dot-danger me-2 "></span> Profit Del Día:</div> <h5 id="profitDia" class="fw-semibold fs-5 ms-2">$0</h5>
                                                </div>
                                            </li>

                                            <li class="py-4 px-2 border-bottom border-top">
                                                <div class="d-flex align-items-center justify-content-between text-start"><div class="d-flex align-items-center"><span class="badge-dot dot-info me-2 "></span> Pérdida Disponible Del Día:</div> <h5 id="perdidaDisponible" class="fw-semibold fs-5 ms-2">$0</h5>
                                                </div>
                                            </li>

                                            <li class="py-4 px-2 border-bottom border-top">
                                                <div class="d-flex align-items-center justify-content-between text-start"><div class="d-flex align-items-center"><span class="badge-dot dot-success me-2 "></span> Balance Actual:</div> <h5 id="balanceActual" class="fw-semibold fs-5 ms-2">$0</h5>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="row mt-3 p-2">
                                    <div style="background-color: #24234F;" class="col-6 col-md-3 px-4 py-3">
                                        <h6 class="m-0 text-white fw-light">BALANCE INICIAL</h6>
                                        <h4 id="balanceInicial" class="fw-bold text-white">$0</h4>
                                    </div>
                                    <div style="background-color: #24234F;" class="col-6 col-md-3 px-4 py-3">
                                        <h6 class="m-0 text-white fw-light">BENEFICIO</h6>
                                        <h4 id="beneficio" class="fw-bold text-white">$0</h4>
                                    </div>
                                    <div style="background-color: #24234F;" class="col-6 col-md-3 px-4 py-3">
                                        <h6 class="m-0 text-white fw-light">DRAWDOWN</h6>
                                        <h4 id="perdidaDiaria" class="fw-bold text-white">$0</h4>
                                    </div>
                                    <div style="background-color: #24234F;" class="col-6 col-md-3 px-4 py-3">
                                        <h6 class="m-0 text-white fw-light">PÉRDIDA MÁXIMA</h6>
                                        <h4 id="perdidaMaxima" class="fw-bold text-white">$0</h4>
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
                                                <div class="table-responsive p-2">
                                                    <table class="table table-bordered" id="tablaOperaciones">
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
                                                        <tbody id="tbodyOperaciones">
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

<script src="../config/js/api.js"></script>