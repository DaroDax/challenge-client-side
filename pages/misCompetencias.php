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
                            <ul class="border-info rounded">
                                <li class="list-box__item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <i class="uil uil-user me-2"></i>
                                            <h6 class="fw-light fs-6 me-2">MT5 ID:</h6>
                                        </div>
                                        <b onclick="copiarAlPortapapeles(this.innerText)" class="fs-6 fw-semibold">22555454</b>
                                    </div>
                                </li>
                                <li class="list-box__item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <i class="uil uil-keyhole-circle me-2"></i>
                                            <h6 class="fw-light fs-6 me-2">Clave:</h6>
                                        </div>

                                        <b onclick="copiarAlPortapapeles(this.innerText)" class="fs-6 fw-semibold">ejyk7yrl</b>
                                    </div>
                                </li>
                                <li class="list-box__item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <i class="uil uil-database me-2"></i>
                                            <h6 class="fw-light fs-6 me-2">Server:</h6>
                                        </div>

                                        <b class="fs-6 fw-semibold">Deriv-Demo</b>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-info btn-sm"> <i class="uil uil-window me-2"></i> MT5 WEB </button>
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

                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">Mis Competencias</h4>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="">
                                            <tr class="bg-info">

                                                <th>
                                                    <span class="fs-6 fw-light text-white">Competencia</span>
                                                </th>

                                                <th>
                                                    <span class="fs-6 fw-light text-white">MT5 ID</span>
                                                </th>

                                                <th class="text-center">
                                                    <span class="fs-6 fw-light text-white">Login</span>
                                                </th>
                                                <th class="text-center">
                                                    <span class="fs-6 fw-light text-white">Ver</span>
                                                </th>

                                                <th class="text-center">
                                                    <span class="fs-6 fw-light text-white float-end">Balance</span>
                                                </th>

                                                <th class="text-center">
                                                    <span class="fs-6 fw-light text-white float-end">Estatus</span>
                                                </th>

                                                <th>
                                                    <span class="fs-6 fw-light text-white float-end">Duración</span>
                                                </th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="userDatatable__imgWrapper d-flex align-items-center">

                                                            <a href="#" class="profile-image rounded-circle d-block m-0 wh-38 me-2" style="background-image:url('../img/5K.png'); background-size: cover;background-position: center;"></a>

                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>COMPETENCIA 5K</h6>
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        23005093
                                                    </div>
                                                </td>

                                                <td class="text-center">
                                                    <a href="javascript:;" class="view" title="Ver Credenciales" data-bs-toggle="modal" data-bs-target="#modal-basic">
                                                        <i class="uil uil-lock-open-alt"></i>
                                                    </a>
                                                </td>

                                                <td class="text-center">
                                                    <a href="./competencia.php?competenciaId=1" class="view" title="Ver Dashboard">
                                                        <i class="uil uil-search-alt"></i>
                                                    </a>
                                                </td>

                                                <td>
                                                    <div class="userDatatable-content d-inline-block d-flex justify-content-end">
                                                        <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">$5220,00</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block d-flex justify-content-end">
                                                        <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">PARTICIPANDO</span>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="userDatatable-content text-end">
                                                        10/11/2023 - 12/11/2023
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="userDatatable__imgWrapper d-flex align-items-center">

                                                            <a href="#" class="profile-image rounded-circle d-block m-0 wh-38 me-2" style="background-image:url('../img/10K.png'); background-size: cover;background-position: center;"></a>

                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>COMPETENCIA 10K</h6>
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="userDatatable-content">
                                                        23545899
                                                    </div>
                                                </td>

                                                <td class="text-center">
                                                    <a href="javascript:;" class="view" title="Ver Credenciales" data-bs-toggle="modal" data-bs-target="#modal-basic">
                                                        <i class="uil uil-lock-open-alt"></i>
                                                    </a>
                                                </td>

                                                <td class="text-center">
                                                    <a href="./competencia.php?competenciaId=1" class="view" title="Ver Dashboard">
                                                        <i class="uil uil-search-alt"></i>
                                                    </a>
                                                </td>


                                                <td>
                                                    <div class="userDatatable-content d-inline-block text-center d-flex justify-content-end">
                                                        <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">$5220,00</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block text-center d-flex justify-content-end">
                                                        <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">PARTICIPANDO</span>
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="userDatatable-content text-end">
                                                        10/11/2023 - 12/11/2023
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="userDatatable__imgWrapper d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#modal-basic">

                                                            <a href="#" class="profile-image rounded-circle d-block m-0 wh-38 me-2" style="background-image:url('../img/25K.png'); background-size: cover;background-position: center;"></a>

                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>COMPETENCIA 25K</h6>
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        22555454
                                                    </div>
                                                </td>

                                                <td class="text-center">
                                                    <a href="javascript:;" class="view" title="Ver Credenciales" data-bs-toggle="modal" data-bs-target="#modal-basic">
                                                        <i class="uil uil-lock-open-alt"></i>
                                                    </a>
                                                </td>

                                                <td class="text-center">
                                                    <a href="./competencia.php?competenciaId=1" class="view" title="Ver Dashboard">
                                                        <i class="uil uil-search-alt"></i>
                                                    </a>
                                                </td>


                                                <td>
                                                    <div class="userDatatable-content d-inline-block text-center d-flex justify-content-end">
                                                        <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">$5220,00</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block text-center d-flex justify-content-end">
                                                        <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">PARTICIPANDO</span>
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="userDatatable-content text-end">
                                                        10/11/2023 - 12/11/2023
                                                    </div>
                                                </td>

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
    <!-- ends: .row -->
</div>

<?php

include('./footer.php');

?>