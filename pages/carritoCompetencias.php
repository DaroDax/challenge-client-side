<?php

include('./header.php');

?>

<div class="contents">

    <div class="crm mb-25">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="row">

                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">Carrito de compra</h4>
                        </div>

                        <div class="cartPage global-shadow pe-sm-30 ps-sm-30  p-15 py-sm-30 radius-xl w-100 mb-30">
                            <div class="row justify-content-center">
                                <div class="cus-xl-9 col-12 ">
                                    <div class="product-cart mb-sm-0 mb-20">
                                        <div class="table-responsive">
                                            <table id="cart" class="table table-borderless table-hover">
                                                <thead>
                                                    <tr class="product-cart__header">
                                                        <th scope="col">Challenge</th>
                                                        <th scope="col">Precio</th>
                                                        <th scope="col">Cantidad</th>
                                                        <th scope="col" class="text-center">Total</th>
                                                        <th scope="col" class=""></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="Product-cart-title">
                                                            <div class="media  align-items-center">
                                                                <img class="me-3 wh-80 align-self-center radius-xl" src="../img/5K.png" alt="Generic placeholder image">
                                                                <div class="media-body">
                                                                    <h5 class="mt-0">COMPETENCIA 5K</h5>
                                                                    <div class="d-flex">
                                                                        <p>Participantes:<span class="text-success">70/100</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="price">$10,99</td>
                                                        <td>

                                                            <div class="quantity product-cart__quantity">
                                                                <input type="button" value="-" class="qty-minus bttn bttn-left wh-36">
                                                                <input type="number" value="3" class="qty qh-36 input">
                                                                <input type="button" value="+" class="qty-plus bttn bttn-right wh-36">
                                                            </div>

                                                        </td>
                                                        <td class="text-center subtotal">$32,97</td>
                                                        <td class="actions">
                                                            <button type="button" class="action-btn float-end">
                                                                <i class="las la-trash-alt"></i>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="Product-cart-title">
                                                            <div class="media  align-items-center">
                                                                <img class="me-3 wh-80 align-self-center radius-xl" src="../img/10K.png" alt="Generic placeholder image">
                                                                <div class="media-body">
                                                                    <h5 class="mt-0">COMPETENCIA 10K</h5>
                                                                    <div class="d-flex">
                                                                        <p>Participantes:<span class="text-success">46/100</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="price">$20,99</td>
                                                        <td>

                                                            <div class="quantity product-cart__quantity">
                                                                <input type="button" value="-" class="qty-minus bttn bttn-left wh-36">
                                                                <input type="number" value="1" class="qty qh-36 input">
                                                                <input type="button" value="+" class="qty-plus bttn bttn-right wh-36">
                                                            </div>

                                                        </td>
                                                        <td class="text-center subtotal">$20,99</td>
                                                        <td class="actions">
                                                            <button type="button" class="action-btn float-end">
                                                                <i class="las la-trash-alt"></i>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="Product-cart-title">
                                                            <div class="media  align-items-center">
                                                                <img class="me-3 wh-80 align-self-center radius-xl" src="../img/25K.png" alt="Generic placeholder image">
                                                                <div class="media-body">
                                                                    <h5 class="mt-0">COMPETENCIA 25K</h5>
                                                                    <div class="d-flex">
                                                                        <p>Participantes:<span class="text-success">12/100</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="price">$30,99</td>
                                                        <td>

                                                            <div class="quantity product-cart__quantity">
                                                                <input type="button" value="-" class="qty-minus bttn bttn-left wh-36">
                                                                <input type="number" value="1" class="qty qh-36 input">
                                                                <input type="button" value="+" class="qty-plus bttn bttn-right wh-36">
                                                            </div>

                                                        </td>
                                                        <td class="text-center subtotal">$30,99</td>
                                                        <td class="actions">
                                                            <button type="button" class="action-btn float-end">
                                                                <i class="las la-trash-alt"></i>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="cus-xl-3 col-md-8  ">
                                    <div class="card order-summery p-sm-25 p-15 order-summery--width mt-lg-0 mt-20">
                                        <div class="card-header border-bottom-0 p-0 pb-25">
                                            <h5 class="fw-500">Resumen</h5>
                                        </div>
                                        <div class="card-body px-sm-25 px-20">
                                            <div class="total">
                                                <div class="subtotalTotal">
                                                    Subtotal:
                                                    <span>$84,95</span>
                                                </div>
                                                <div class="taxes">
                                                    Descuento:
                                                    <span>-$0,00</span>
                                                </div>
                                            </div>
                                            <div class="promo-code mt-2">
                                                <form>
                                                    <label for="exampleInputEmail1">CUPÓN</label>
                                                    <div class="d-flex align-items-center">
                                                        <input id="exampleInputEmail1" type="text" class="form-control">
                                                        <a href="#" class="btn">Aplicar</a>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="total-money d-flex justify-content-between">
                                                <h6>Total :</h6>
                                                <h5>$84,95</h5>
                                            </div>
                                            <a href="checkout.html" class="checkout btn-secondary content-center w-100 btn-lg mt-20"> Completar Pago<i class="las la-arrow-right"></i>
                                            </a>
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