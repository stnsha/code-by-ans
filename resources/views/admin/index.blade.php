@extends('layouts.admin')

@section('title', 'Code by ANS')

@section('content')
<h1 class="h2 mb-4">Welcome back, {{ $user->name }} <i class="ai-emoji-smile fs-[25px]"></i></h1>
<!-- Basic info-->
<section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
    <div class="card-body">
        <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3"><i
                class="ai-user text-primary lead pe-1 me-2"></i>
            <h2 class="h4 mb-0">Basic info</h2><a class="btn btn-sm btn-secondary ms-auto"
                href="account-settings.html"><i class="ai-edit ms-n1 me-2"></i>Edit info</a>
        </div>
        <div class="d-md-flex align-items-center">
            <div class="d-sm-flex align-items-center">
                <div class="rounded-circle bg-size-cover bg-position-center flex-shrink-0"
                    style="width: 80px; height: 80px; background-image: url(assets/img/avatar/ans01.jpg);">
                </div>
                <div class="pt-3 pt-sm-0 ps-sm-3">
                    <h3 class="h5 mb-2">{{ $user->name }}<i
                            class="ai-circle-check-filled fs-base text-success ms-2"></i>
                    </h3>
                    <div class="text-muted fw-medium d-flex flex-wrap flex-sm-nowrap align-iteems-center">
                        <div class="d-flex align-items-center me-3"><i class="ai-mail me-1"></i>{{ $user->email }}</div>
                        <div class="d-flex align-items-center text-nowrap"><i class="ai-map-pin me-1"></i>Malaysia</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-4 mb-2 mb-sm-3">
            <div class="col-md-6 mb-4 mb-md-0">
                <table class="table mb-0">
                    <tr>
                        <td class="border-0 text-muted py-1 px-0">Phone</td>
                        <td class="border-0 text-dark fw-medium py-1 ps-3">+1 234 567 890</td>
                    </tr>
                    <tr>
                        <td class="border-0 text-muted py-1 px-0">Language</td>
                        <td class="border-0 text-dark fw-medium py-1 ps-3">English</td>
                    </tr>
                    <tr>
                        <td class="border-0 text-muted py-1 px-0">Gender</td>
                        <td class="border-0 text-dark fw-medium py-1 ps-3">Female</td>
                    </tr>
                    <tr>
                        <td class="border-0 text-muted py-1 px-0">Communication</td>
                        <td class="border-0 text-dark fw-medium py-1 ps-3">Mobile, email</td>
                    </tr>
                </table>
            </div>
        </div>
</section>
{{-- <div class="row row-cols-1 row-cols-md-2 g-4 mb-4">
    <!-- Address-->
    <section class="col">
        <div class="card h-100 border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
            <div class="card-body">
                <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-1 mb-lg-2"><i
                        class="ai-map-pin text-primary lead pe-1 me-2"></i>
                    <h2 class="h4 mb-0">Address</h2><a class="btn btn-sm btn-secondary ms-auto"
                        href="account-settings.html"><i class="ai-edit ms-n1 me-2"></i>Edit info</a>
                </div>
                <div class="d-flex align-items-center pb-1 mb-2">
                    <h3 class="h6 mb-0 me-3">Shipping address</h3><span
                        class="badge bg-faded-primary text-primary">Primary</span>
                </div>
                <p class="mb-0">401 Magnetic Drive Unit 2,<br>Toronto, Ontario, M3J 3H9<br>Canada
                </p>
                <div class="d-flex align-items-center pt-4 pb-1 my-2">
                    <h3 class="h6 mb-0 me-3">Billing address 1</h3><span
                        class="badge bg-faded-primary text-primary">Primary</span>
                </div>
                <p class="mb-0">314 Robinson Lane,<br>Wilmington, DE 19805,<br>USA</p>
            </div>
        </div>
    </section>
    <!-- Billing-->
    <section class="col">
        <div class="card h-100 border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
            <div class="card-body">
                <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-1 mb-lg-2"><i
                        class="ai-wallet text-primary lead pe-1 me-2"></i>
                    <h2 class="h4 mb-0">Billing</h2><a class="btn btn-sm btn-secondary ms-auto"
                        href="account-billing.html"><i class="ai-edit ms-n1 me-2"></i>Edit info</a>
                </div>
                <div class="d-flex align-items-center pb-1 mb-2">
                    <h3 class="h6 mb-0 me-3">Isabella Bocouse</h3><span
                        class="badge bg-faded-primary text-primary">Primary</span>
                </div>
                <div class="d-flex align-items-center pb-4 mb-2 mb-sm-3"><svg width='52' height='42' viewBox='0 0 52 42'
                        fill='none' xmlns='http://www.w3.org/2000/svg'>
                        <path
                            d='M22.6402 28.2865H18.5199L21.095 12.7244H25.2157L22.6402 28.2865ZM15.0536 12.7244L11.1255 23.4281L10.6607 21.1232L10.6611 21.124L9.27467 14.1256C9.27467 14.1256 9.10703 12.7244 7.32014 12.7244H0.8262L0.75 12.9879C0.75 12.9879 2.73586 13.3942 5.05996 14.7666L8.63967 28.2869H12.9327L19.488 12.7244H15.0536ZM47.4619 28.2865H51.2453L47.9466 12.7239H44.6345C43.105 12.7239 42.7324 13.8837 42.7324 13.8837L36.5873 28.2865H40.8825L41.7414 25.9749H46.9793L47.4619 28.2865ZM42.928 22.7817L45.093 16.9579L46.3109 22.7817H42.928ZM36.9095 16.4667L37.4975 13.1248C37.4975 13.1248 35.6831 12.4463 33.7916 12.4463C31.7469 12.4463 26.8913 13.3251 26.8913 17.5982C26.8913 21.6186 32.5902 21.6685 32.5902 23.7803C32.5902 25.8921 27.4785 25.5137 25.7915 24.182L25.1789 27.6763C25.1789 27.6763 27.0187 28.555 29.8296 28.555C32.6414 28.555 36.8832 27.1234 36.8832 23.2271C36.8832 19.1808 31.1331 18.8041 31.1331 17.0449C31.1335 15.2853 35.1463 15.5113 36.9095 16.4667Z'
                            fill='#2566AF' />
                        <path
                            d='M10.6611 22.1235L9.2747 15.1251C9.2747 15.1251 9.10705 13.7239 7.32016 13.7239H0.8262L0.75 13.9874C0.75 13.9874 3.87125 14.6235 6.86507 17.0066C9.72766 19.2845 10.6611 22.1235 10.6611 22.1235Z'
                            fill='#E6A540' />
                    </svg>
                    <div class="ps-3 fs-sm">
                        <div class="text-dark">Visa •••• 9016</div>
                        <div class="text-muted">Debit - Expires 03/24</div>
                    </div>
                </div>
                <div class="alert alert-danger d-flex mb-0"><i class="ai-octagon-alert fs-xl me-2"></i>
                    <p class="mb-0">Your primary credit card expired on 01/04/2022. Please add a new
                        card or update this one.</p>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Orders-->
<section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
    <div class="card-body">
        <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3"><i
                class="ai-cart text-primary lead pe-1 me-2"></i>
            <h2 class="h4 mb-0">Orders</h2><a class="btn btn-sm btn-secondary ms-auto" href="account-orders.html">View
                all</a>
        </div>
        <!-- Orders accordion-->
        <div class="accordion accordion-alt accordion-orders" id="orders">
            <!-- Order-->
            <div class="accordion-item border-top mb-0">
                <div class="accordion-header"><a
                        class="accordion-button d-flex fs-4 fw-normal text-decoration-none py-3 collapsed"
                        href="#orderOne" data-bs-toggle="collapse" aria-expanded="false" aria-controls="orderOne">
                        <div class="d-flex justify-content-between w-100" style="max-width: 440px;">
                            <div class="me-3 me-sm-4">
                                <div class="fs-sm text-muted">#78A6431D409</div><span
                                    class="badge bg-faded-info text-info fs-xs">In progress</span>
                            </div>
                            <div class="me-3 me-sm-4">
                                <div class="d-none d-sm-block fs-sm text-muted mb-2">Order date
                                </div>
                                <div class="d-sm-none fs-sm text-muted mb-2">Date</div>
                                <div class="fs-sm fw-medium text-dark">Jan 27, 2022</div>
                            </div>
                            <div class="me-3 me-sm-4">
                                <div class="fs-sm text-muted mb-2">Total</div>
                                <div class="fs-sm fw-medium text-dark">$16.00</div>
                            </div>
                        </div>
                        <div class="accordion-button-img d-none d-sm-flex ms-auto">
                            <div class="mx-1"><img src="assets/img/account/orders/01.png" width="48" alt="Product">
                            </div>
                        </div>
                    </a></div>
                <div class="accordion-collapse collapse" id="orderOne" data-bs-parent="#orders">
                    <div class="accordion-body">
                        <div class="table-responsive pt-1">
                            <table class="table align-middle w-100" style="min-width: 450px;">
                                <tr>
                                    <td class="border-0 py-1 px-0">
                                        <div class="d-flex align-items-center"><a
                                                class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-md-2 p-lg-3"
                                                href="shop-single.html"><img src="assets/img/shop/cart/01.png"
                                                    width="110" alt="Product"></a>
                                            <div class="ps-3 ps-sm-4">
                                                <h4 class="h6 mb-2"><a href="shop-single.html">Candle in concrete
                                                        bowl</a></h4>
                                                <div class="text-muted fs-sm me-3">Color: <span
                                                        class='text-dark fw-medium'>Gray
                                                        night</span></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                        <div class="fs-sm text-muted mb-2">Quantity</div>
                                        <div class="fs-sm fw-medium text-dark">1</div>
                                    </td>
                                    <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                        <div class="fs-sm text-muted mb-2">Price</div>
                                        <div class="fs-sm fw-medium text-dark">$16</div>
                                    </td>
                                    <td class="border-0 text-end py-1 pe-0 ps-3 ps-sm-4">
                                        <div class="fs-sm text-muted mb-2">Total</div>
                                        <div class="fs-sm fw-medium text-dark">$16</div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="bg-secondary rounded-1 p-4 my-2">
                            <div class="row">
                                <div class="col-sm-5 col-md-3 col-lg-4 mb-3 mb-md-0">
                                    <div class="fs-sm fw-medium text-dark mb-1">Payment:</div>
                                    <div class="fs-sm">Upon the delivery</div><a class="btn btn-link py-1 px-0 mt-2"
                                        href="#"><i class="ai-time me-2 ms-n1"></i>Order history</a>
                                </div>
                                <div class="col-sm-7 col-md-5 mb-4 mb-md-0">
                                    <div class="fs-sm fw-medium text-dark mb-1">Delivery address:
                                    </div>
                                    <div class="fs-sm">401 Magnetic Drive Unit 2,<br>Toronto,
                                        Ontario, M3J 3H9, Canada</div>
                                </div>
                                <div class="col-md-4 col-lg-3 text-md-end">
                                    <button class="btn btn-sm btn-outline-primary w-100 w-md-auto" type="button"><i
                                            class="ai-star me-2 ms-n1"></i>Leave a
                                        review</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Order-->
            <div class="accordion-item border-top mb-0">
                <div class="accordion-header"><a
                        class="accordion-button d-flex fs-4 fw-normal text-decoration-none py-3 collapsed"
                        href="#orderTwo" data-bs-toggle="collapse" aria-expanded="false" aria-controls="orderTwo">
                        <div class="d-flex justify-content-between w-100" style="max-width: 440px;">
                            <div class="me-3 me-sm-4">
                                <div class="fs-sm text-muted">#47H76G09F33</div><span
                                    class="badge bg-faded-danger text-danger fs-xs">Canceled</span>
                            </div>
                            <div class="me-3 me-sm-4">
                                <div class="d-none d-sm-block fs-sm text-muted mb-2">Order date
                                </div>
                                <div class="d-sm-none fs-sm text-muted mb-2">Date</div>
                                <div class="fs-sm fw-medium text-dark">Sep 14, 2022</div>
                            </div>
                            <div class="me-3 me-sm-4">
                                <div class="fs-sm text-muted mb-2">Total</div>
                                <div class="fs-sm fw-medium text-dark">$59.00</div>
                            </div>
                        </div>
                        <div class="accordion-button-img d-none d-sm-flex ms-auto">
                            <div class="mx-1"><img src="assets/img/account/orders/02.png" width="48" alt="Product">
                            </div>
                            <div class="mx-1"><img src="assets/img/account/orders/03.png" width="48" alt="Product">
                            </div>
                            <div class="mx-1"><img src="assets/img/account/orders/04.png" width="48" alt="Product">
                            </div>
                        </div>
                    </a></div>
                <div class="accordion-collapse collapse" id="orderTwo" data-bs-parent="#orders">
                    <div class="accordion-body">
                        <div class="table-responsive pt-1">
                            <table class="table align-middle w-100" style="min-width: 450px;">
                                <tr>
                                    <td class="border-0 py-1 px-0">
                                        <div class="d-flex align-items-center"><a
                                                class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-md-2 p-lg-3"
                                                href="shop-single.html"><img src="assets/img/shop/cart/04.png"
                                                    width="110" alt="Product"></a>
                                            <div class="ps-3 ps-sm-4">
                                                <h4 class="h6 mb-2"><a href="shop-single.html">Analogue wall
                                                        clock</a></h4>
                                                <div class="text-muted fs-sm me-3">Color: <span
                                                        class='text-dark fw-medium'>Turquoise</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                        <div class="fs-sm text-muted mb-2">Quantity</div>
                                        <div class="fs-sm fw-medium text-dark">1</div>
                                    </td>
                                    <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                        <div class="fs-sm text-muted mb-2">Price</div>
                                        <div class="fs-sm fw-medium text-dark">$25</div>
                                    </td>
                                    <td class="border-0 text-end py-1 pe-0 ps-3 ps-sm-4">
                                        <div class="fs-sm text-muted mb-2">Total</div>
                                        <div class="fs-sm fw-medium text-dark">$25</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-0 py-1 px-0">
                                        <div class="d-flex align-items-center"><a
                                                class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-md-2 p-lg-3"
                                                href="shop-single.html"><img src="assets/img/shop/cart/05.png"
                                                    width="110" alt="Product"></a>
                                            <div class="ps-3 ps-sm-4">
                                                <h4 class="h6 mb-2"><a href="shop-single.html">Glossy round
                                                        vase</a></h4>
                                                <div class="text-muted fs-sm me-3">Color: <span
                                                        class='text-dark fw-medium'>White</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                        <div class="fs-sm text-muted mb-2">Quantity</div>
                                        <div class="fs-sm fw-medium text-dark">1</div>
                                    </td>
                                    <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                        <div class="fs-sm text-muted mb-2">Price</div>
                                        <div class="fs-sm fw-medium text-dark">$15</div>
                                    </td>
                                    <td class="border-0 text-end py-1 pe-0 ps-3 ps-sm-4">
                                        <div class="fs-sm text-muted mb-2">Total</div>
                                        <div class="fs-sm fw-medium text-dark">$15</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-0 py-1 px-0">
                                        <div class="d-flex align-items-center"><a
                                                class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-md-2 p-lg-3"
                                                href="shop-single.html"><img src="assets/img/shop/cart/06.png"
                                                    width="110" alt="Product"></a>
                                            <div class="ps-3 ps-sm-4">
                                                <h4 class="h6 mb-2"><a href="shop-single.html">Ceramic flower
                                                        pot</a></h4>
                                                <div class="text-muted fs-sm me-3">Color: <span
                                                        class='text-dark fw-medium'>Gray
                                                        concrete</span></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                        <div class="fs-sm text-muted mb-2">Quantity</div>
                                        <div class="fs-sm fw-medium text-dark">1</div>
                                    </td>
                                    <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                        <div class="fs-sm text-muted mb-2">Price</div>
                                        <div class="fs-sm fw-medium text-dark">$19</div>
                                    </td>
                                    <td class="border-0 text-end py-1 pe-0 ps-3 ps-sm-4">
                                        <div class="fs-sm text-muted mb-2">Total</div>
                                        <div class="fs-sm fw-medium text-dark">$19</div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="bg-secondary rounded-1 p-4 my-2">
                            <div class="row">
                                <div class="col-sm-5 col-md-3 col-lg-4 mb-3 mb-md-0">
                                    <div class="fs-sm fw-medium text-dark mb-1">Payment:</div>
                                    <div class="fs-sm">Upon the delivery</div><a class="btn btn-link py-1 px-0 mt-2"
                                        href="#"><i class="ai-time me-2 ms-n1"></i>Order history</a>
                                </div>
                                <div class="col-sm-7 col-md-5 mb-4 mb-md-0">
                                    <div class="fs-sm fw-medium text-dark mb-1">Delivery address:
                                    </div>
                                    <div class="fs-sm">401 Magnetic Drive Unit 2,<br>Toronto,
                                        Ontario, M3J 3H9, Canada</div>
                                </div>
                                <div class="col-md-4 col-lg-3 text-md-end">
                                    <button class="btn btn-sm btn-outline-primary w-100 w-md-auto" type="button"><i
                                            class="ai-star me-2 ms-n1"></i>Leave a
                                        review</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Order-->
            <div class="accordion-item border-top mb-0">
                <div class="accordion-header"><a
                        class="accordion-button fs-4 fw-normal text-decoration-none py-3 collapsed" href="#orderThree"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="orderThree">
                        <div class="d-flex justify-content-between w-100" style="max-width: 440px;">
                            <div class="me-3 me-sm-4">
                                <div class="fs-sm text-muted">#34VB5540K83</div><span
                                    class="badge bg-faded-primary text-primary fs-xs">Delivered</span>
                            </div>
                            <div class="me-3 me-sm-4">
                                <div class="d-none d-sm-block fs-sm text-muted mb-2">Order date
                                </div>
                                <div class="d-sm-none fs-sm text-muted mb-2">Date</div>
                                <div class="fs-sm fw-medium text-dark">Jul 10, 2022</div>
                            </div>
                            <div class="me-3 me-sm-4">
                                <div class="fs-sm text-muted mb-2">Total</div>
                                <div class="fs-sm fw-medium text-dark">$38.00</div>
                            </div>
                        </div>
                        <div class="accordion-button-img d-none d-sm-flex ms-auto">
                            <div class="mx-1"><img src="assets/img/account/orders/01.png" width="48" alt="Product">
                            </div>
                            <div class="mx-1"><img src="assets/img/account/orders/05.png" width="48" alt="Product">
                            </div>
                        </div>
                    </a></div>
                <div class="accordion-collapse collapse" id="orderThree" data-bs-parent="#orders">
                    <div class="accordion-body">
                        <div class="table-responsive pt-1">
                            <table class="table align-middle w-100" style="min-width: 450px;">
                                <tr>
                                    <td class="border-0 py-1 px-0">
                                        <div class="d-flex align-items-center"><a
                                                class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-md-2 p-lg-3"
                                                href="shop-single.html"><img src="assets/img/shop/cart/01.png"
                                                    width="110" alt="Product"></a>
                                            <div class="ps-3 ps-sm-4">
                                                <h4 class="h6 mb-2"><a href="shop-single.html">Candle in concrete
                                                        bowl</a></h4>
                                                <div class="text-muted fs-sm me-3">Color: <span
                                                        class='text-dark fw-medium'>Gray
                                                        night</span></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                        <div class="fs-sm text-muted mb-2">Quantity</div>
                                        <div class="fs-sm fw-medium text-dark">1</div>
                                    </td>
                                    <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                        <div class="fs-sm text-muted mb-2">Price</div>
                                        <div class="fs-sm fw-medium text-dark">$16</div>
                                    </td>
                                    <td class="border-0 text-end py-1 pe-0 ps-3 ps-sm-4">
                                        <div class="fs-sm text-muted mb-2">Total</div>
                                        <div class="fs-sm fw-medium text-dark">$16</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-0 py-1 px-0">
                                        <div class="d-flex align-items-center"><a
                                                class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-md-2 p-lg-3"
                                                href="shop-single.html"><img src="assets/img/shop/cart/02.png"
                                                    width="110" alt="Product"></a>
                                            <div class="ps-3 ps-sm-4">
                                                <h4 class="h6 mb-2"><a href="shop-single.html">Exquisite glass vase
                                                    </a></h4>
                                                <div class="text-muted fs-sm me-3">Color: <span
                                                        class='text-dark fw-medium'>Rose</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                        <div class="fs-sm text-muted mb-2">Quantity</div>
                                        <div class="fs-sm fw-medium text-dark">2</div>
                                    </td>
                                    <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                        <div class="fs-sm text-muted mb-2">Price</div>
                                        <div class="fs-sm fw-medium text-dark">$11</div>
                                    </td>
                                    <td class="border-0 text-end py-1 pe-0 ps-3 ps-sm-4">
                                        <div class="fs-sm text-muted mb-2">Total</div>
                                        <div class="fs-sm fw-medium text-dark">$22</div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="bg-secondary rounded-1 p-4 my-2">
                            <div class="row">
                                <div class="col-sm-5 col-md-3 col-lg-4 mb-3 mb-md-0">
                                    <div class="fs-sm fw-medium text-dark mb-1">Payment:</div>
                                    <div class="fs-sm">Upon the delivery</div><a class="btn btn-link py-1 px-0 mt-2"
                                        href="#"><i class="ai-time me-2 ms-n1"></i>Order history</a>
                                </div>
                                <div class="col-sm-7 col-md-5 mb-4 mb-md-0">
                                    <div class="fs-sm fw-medium text-dark mb-1">Delivery address:
                                    </div>
                                    <div class="fs-sm">401 Magnetic Drive Unit 2,<br>Toronto,
                                        Ontario, M3J 3H9, Canada</div>
                                </div>
                                <div class="col-md-4 col-lg-3 text-md-end">
                                    <button class="btn btn-sm btn-outline-primary w-100 w-md-auto" type="button"><i
                                            class="ai-star me-2 ms-n1"></i>Leave a
                                        review</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Order-->
            <div class="accordion-item border-top border-bottom mb-0">
                <div class="accordion-header"><a
                        class="accordion-button d-flex fs-4 fw-normal text-decoration-none py-3 collapsed"
                        href="#orderFour" data-bs-toggle="collapse" aria-expanded="false" aria-controls="orderFour">
                        <div class="d-flex justify-content-between w-100" style="max-width: 440px;">
                            <div class="me-3 me-sm-4">
                                <div class="fs-sm text-muted">#502TR872W2</div><span
                                    class="badge bg-faded-primary text-primary fs-xs">Delivered</span>
                            </div>
                            <div class="me-3 me-sm-4">
                                <div class="d-none d-sm-block fs-sm text-muted mb-2">Order date
                                </div>
                                <div class="d-sm-none fs-sm text-muted mb-2">Date</div>
                                <div class="fs-sm fw-medium text-dark">May 11, 2022</div>
                            </div>
                            <div class="me-3 me-sm-4">
                                <div class="fs-sm text-muted mb-2">Total</div>
                                <div class="fs-sm fw-medium text-dark">$17.00</div>
                            </div>
                        </div>
                        <div class="accordion-button-img d-none d-sm-flex ms-auto">
                            <div class="mx-1"><img src="assets/img/account/orders/06.png" width="48" alt="Product">
                            </div>
                        </div>
                    </a></div>
                <div class="accordion-collapse collapse" id="orderFour" data-bs-parent="#orders">
                    <div class="accordion-body">
                        <div class="table-responsive pt-1">
                            <table class="table align-middle w-100" style="min-width: 450px;">
                                <tr>
                                    <td class="border-0 py-1 px-0">
                                        <div class="d-flex align-items-center"><a
                                                class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-md-2 p-lg-3"
                                                href="shop-single.html"><img src="assets/img/shop/cart/07.png"
                                                    width="110" alt="Product"></a>
                                            <div class="ps-3 ps-sm-4">
                                                <h4 class="h6 mb-2"><a href="shop-single.html">Dispenser for
                                                        soap</a></h4>
                                                <div class="text-muted fs-sm me-3">Color: <span
                                                        class='text-dark fw-medium'>White
                                                        marble</span></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                        <div class="fs-sm text-muted mb-2">Quantity</div>
                                        <div class="fs-sm fw-medium text-dark">1</div>
                                    </td>
                                    <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                        <div class="fs-sm text-muted mb-2">Price</div>
                                        <div class="fs-sm fw-medium text-dark">$17</div>
                                    </td>
                                    <td class="border-0 text-end py-1 pe-0 ps-3 ps-sm-4">
                                        <div class="fs-sm text-muted mb-2">Total</div>
                                        <div class="fs-sm fw-medium text-dark">$17</div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="bg-secondary rounded-1 p-4 my-2">
                            <div class="row">
                                <div class="col-sm-5 col-md-3 col-lg-4 mb-3 mb-md-0">
                                    <div class="fs-sm fw-medium text-dark mb-1">Payment:</div>
                                    <div class="fs-sm">Upon the delivery</div><a class="btn btn-link py-1 px-0 mt-2"
                                        href="#"><i class="ai-time me-2 ms-n1"></i>Order history</a>
                                </div>
                                <div class="col-sm-7 col-md-5 mb-4 mb-md-0">
                                    <div class="fs-sm fw-medium text-dark mb-1">Delivery address:
                                    </div>
                                    <div class="fs-sm">401 Magnetic Drive Unit 2,<br>Toronto,
                                        Ontario, M3J 3H9, Canada</div>
                                </div>
                                <div class="col-md-4 col-lg-3 text-md-end">
                                    <button class="btn btn-sm btn-outline-primary w-100 w-md-auto" type="button"><i
                                            class="ai-star me-2 ms-n1"></i>Leave a
                                        review</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection