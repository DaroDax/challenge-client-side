<?php

include('./header.php');

?>

<script>
    function desafioAnadido() {
        Swal.fire({
            title: "¡COMPETENCIAS AÑADIDAS!",
            text: "Tus competencias fueron añadidas al carritos!",
            icon: "success",
            showDenyButton: true,
            confirmButtonText: "Ir al carrito",
            denyButtonText: `Quedarse`,
            confirmButtonColor: "#00AAFF"
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = ('./carritoCompetencias.php');
            }
        });

        $('#modal-basic').modal('hide');
    }
</script>

<!-- MODALES DE LA PAGINA -->
<div class="modal-basic modal fade show" id="modal-basic" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-bg-white ">
            <div class="modal-header">
                <h6 class="modal-title">¿Cuanto desea añadir?</h6>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <img src="../img/svg/x.svg" alt="x" class="svg">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class=" col-lg-12">

                        <div class=" b-normal-b mt-lg-0 mt-15 border-0">
                            <div class="product-item__body">

                                <div class="product-item__title">
                                    <a href="#">
                                        <h1 class="card-title">
                                            COMPETENCIA 5K
                                        </h1>
                                    </a>
                                </div>

                                <div class="product-item__content text-capitalize">

                                    <div class="d-flex align-items-center mb-2">
                                        <span class="product-price fs-3 text-success">$10.99</span>
                                    </div>




                                    <div class="quantity product-quantity flex-wrap">

                                        <div class="me-15 d-flex align-items-center flex-wrap mb-10">
                                            <p class="fs-14 fw-500 color-dark">Cantidad:</p>
                                            <input type="button" value="-" class="qty-minus bttn bttn-left wh-36">
                                            <input type="number" value="1" class="qty qh-36 input">
                                            <input type="button" value="+" class="qty-plus bttn bttn-right wh-36">
                                        </div>

                                    </div>

                                    <div class="product-details__availability mt-4">
                                        <div class="title">
                                            <p class="me-2">Participantes:</p>
                                            <span class="stock m-0">58/100</span>
                                        </div>
                                    </div>

                                    <div><span class="fs-13 fw-400 color-light my-sm-0 my-8">42 Participantes disponibles</span></div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light btn-sm" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-info btn-sm" onclick="desafioAnadido();">Siguiente</button>
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
                            <h4 class="text-capitalize breadcrumb-title">Adquirir Challenge</h4>
                        </div>

                        <div class="col-xxl-3 col-xl-4 col-sm-6 col-12 mb-25">
                            <div class="course-card p-0">
                                <div class="course-card__img-area rounded-0 rounded-top">
                                    <img class="big-img" src="../img/5.png" alt="gallery">
                                </div>
                                <div class="course-card__body p-3 rounded-3 rounded-top">

                                    <div class="text-center">
                                        <h2 class="fw-bold fs-3 ">COMPETENCIA 5K</h2>
                                    </div>

                                    <div class="text-center">
                                        <span class="dm-tag tag-success">
                                            <h3 class="text-white">$10,99 USD</h3>
                                        </span>
                                    </div>

                                    <hr class="m-0 my-3">

                                    <div class="p-3">

                                        <div class="d-flex align-items-center justify-content-center py-2">
                                            <span class="badge-dot bg-info me-2"></span>
                                            <span class="fs-6 fw-light"><b class="fw-bold">5000</b> USD DE BALANCE INICIAL</span>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center py-2">
                                            <span class="badge-dot bg-info me-2"></span>
                                            <span class="fs-6 fw-light">PERDIDA DIARIA <b class="text-danger fw-bold">5%</b></span>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center py-2">
                                            <span class="badge-dot bg-info me-2"></span>
                                            <span class="fs-6 fw-light">PERDIDA MAXIMA <b class="text-danger fw-bold">10%</b></span>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center py-2">
                                            <span class="badge-dot bg-info me-2"></span>
                                            <span class="fs-6 fw-light">DÍAS 10/11/2023 - 14/11/2023</span>
                                        </div>

                                    </div>

                                    <div class="mt-3">
                                        <button class="btn btn-info btn-lg btn-squared btn-block fs-5 fw-light w-100" data-bs-toggle="modal" data-bs-target="#modal-basic">Añadir al carrito <i class="ms-1 uil uil-shopping-basket"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-xl-4 col-sm-6 col-12 mb-25">
                            <div class="course-card p-0">
                                <div class="course-card__img-area rounded-0 rounded-top">
                                    <img class="big-img" src="../img/10.png" alt="gallery">
                                </div>
                                <div class="course-card__body p-3 rounded-3 rounded-top">

                                    <div class="text-center">
                                        <h2 class="fw-bold fs-3 ">COMPETENCIA 10K</h2>
                                    </div>

                                    <div class="text-center">
                                        <span class="dm-tag tag-success">
                                            <h3 class="text-white">$20,99 USD</h3>
                                        </span>
                                    </div>

                                    <hr class="m-0 my-3">

                                    <div class="p-3">

                                        <div class="d-flex align-items-center justify-content-center py-2">
                                            <span class="badge-dot bg-info me-2"></span>
                                            <span class="fs-6 fw-light"><b class="fw-bold">10.000</b> USD DE BALANCE INICIAL</span>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center py-2">
                                            <span class="badge-dot bg-info me-2"></span>
                                            <span class="fs-6 fw-light">PERDIDA DIARIA <b class="text-danger fw-bold">5%</b></span>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center py-2">
                                            <span class="badge-dot bg-info me-2"></span>
                                            <span class="fs-6 fw-light">PERDIDA MAXIMA <b class="text-danger fw-bold">10%</b></span>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center py-2">
                                            <span class="badge-dot bg-info me-2"></span>
                                            <span class="fs-6 fw-light">DÍAS 12/11/2023 - 16/11/2023</span>
                                        </div>

                                    </div>

                                    <div class="mt-3">
                                        <button class="btn btn-info btn-lg btn-squared btn-block fs-5 fw-light w-100" data-bs-toggle="modal" data-bs-target="#modal-basic">Añadir al carrito <i class="ms-1 uil uil-shopping-basket"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-xl-4 col-sm-6 col-12 mb-25">
                            <div class="course-card p-0">
                                <div class="course-card__img-area rounded-0 rounded-top">
                                    <img class="big-img" src="../img/25.png" alt="gallery">
                                </div>
                                <div class="course-card__body p-3 rounded-3 rounded-top">

                                    <div class="text-center">
                                        <h2 class="fw-bold fs-3 ">COMPETENCIA 25K</h2>
                                    </div>

                                    <div class="text-center">
                                        <span class="dm-tag tag-success">
                                            <h3 class="text-white">$30,99 USD</h3>
                                        </span>
                                    </div>

                                    <hr class="m-0 my-3">

                                    <div class="p-3">

                                        <div class="d-flex align-items-center justify-content-center py-2">
                                            <span class="badge-dot bg-info me-2"></span>
                                            <span class="fs-6 fw-light"><b class="fw-bold">25.000</b> USD DE BALANCE INICIAL</span>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center py-2">
                                            <span class="badge-dot bg-info me-2"></span>
                                            <span class="fs-6 fw-light">PERDIDA DIARIA <b class="text-danger fw-bold">5%</b></span>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center py-2">
                                            <span class="badge-dot bg-info me-2"></span>
                                            <span class="fs-6 fw-light">PERDIDA MAXIMA <b class="text-danger fw-bold">10%</b></span>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center py-2">
                                            <span class="badge-dot bg-info me-2"></span>
                                            <span class="fs-6 fw-light">DÍAS 14/11/2023 - 18/11/2023</span>
                                        </div>

                                    </div>

                                    <div class="mt-3">
                                        <button class="btn btn-info btn-lg btn-squared btn-block fs-5 fw-light w-100" data-bs-toggle="modal" data-bs-target="#modal-basic">Añadir al carrito <i class="ms-1 uil uil-shopping-basket"></i>
                                        </button>
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