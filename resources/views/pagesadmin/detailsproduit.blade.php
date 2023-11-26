@extends('layouts.admin')
@section('content')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">DETAILS PRODUITS</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tableau de bord</a></li>
                                        <li class="breadcrumb-item active">Details produit</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row gx-lg-3">
                                        <div class="col-xl-4 col-md-8 mx-auto">
                                            <div class="product-img-slider sticky-side-div">
                                                <div class="swiper product-thumbnail-slider p-2 rounded bg-light">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block" />
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img src="assets/images/products/img-6.png" alt="" class="img-fluid d-block" />
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img src="assets/images/products/img-1.png" alt="" class="img-fluid d-block" />
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block" />
                                                        </div>
                                                    </div>
                                                    <div class="swiper-button-next"></div>
                                                    <div class="swiper-button-prev"></div>
                                                </div>
                                                <!-- end swiper thumbnail slide -->
                                                <div class="swiper product-nav-slider mt-2">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <div class="nav-slide-item">
                                                                <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block" />
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="nav-slide-item">
                                                                <img src="assets/images/products/img-6.png" alt="" class="img-fluid d-block" />
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="nav-slide-item">
                                                                <img src="assets/images/products/img-1.png" alt="" class="img-fluid d-block" />
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="nav-slide-item">
                                                                <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end swiper nav slide -->
                                            </div>
                                        </div>
                                        <!-- end col -->

                                        <div class="col-xl-8">
                                            <div class="mt-xl-0 mt-5">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <h4>Nom du produit</h4>
                                                        <div class="hstack gap-3 flex-wrap">
                                                            <div class="text-muted">Type de troc : <span class="text-body fw-medium">Bien</span></div>
                                                            <div class="vr"></div>
                                                            <div class="text-muted">Propriétaire : <span class="text-body fw-medium">Randy Dev</span></div>
                                                            <div class="vr"></div>
                                                            <div class="text-muted">Publié le : <span class="text-body fw-medium">26 Mar, 2023</span></div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="d-flex flex-wrap gap-2 align-items-center mt-3">
                                                    <div class="text-muted fs-16">
                                                        <span class="mdi mdi-star text-warning"></span>
                                                        <span class="mdi mdi-star text-warning"></span>
                                                        <span class="mdi mdi-star text-warning"></span>
                                                        <span class="mdi mdi-star text-warning"></span>
                                                        <span class="mdi mdi-star text-warning"></span>
                                                    </div>
                                                    <div class="text-muted">( Evalution des autres utilisateurs )</div>
                                                </div>

                                                <div class="row mt-4">

                                                    <!-- end col -->
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="p-2 border border-dashed rounded">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-sm me-2">
                                                                    <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                                        <i class="ri-inbox-archive-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <p class="text-muted mb-1">Nombre de vue : 0</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                </div>

                                                <div class="row">


                                                    <div class="col-xl-6">
                                                        <div class=" mt-4">
                                                            <div class="d-flex flex-wrap gap-2">
                                                                <div data-bs-toggle="tooltip" data-bs-placement="top">
                                                                    <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary" disabled>
                                                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                                                    </button>
                                                                </div>
                                                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top">
                                                                    <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-secondary">
                                                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                                                    </button>
                                                                </div>
                                                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top">
                                                                    <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-warning">
                                                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                                                    </button>
                                                                </div>
                                                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top">
                                                                    <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-danger">
                                                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                                                    </button>
                                                                </div>
                                                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top">
                                                                    <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-light">
                                                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                                                    </button>
                                                                </div>
                                                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top">
                                                                    <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-dark">
                                                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->

                                                <div class="mt-4 text-muted">
                                                    <h5 class="fs-14">DESCRIPTION :</h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda autem natus rem repudiandae nesciunt voluptatem atque sequi doloremque placeat nobis
                                                        consequuntur temporibus fugiat delectus vero nulla nemo, recusandae nisi obcaecati.</p>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="mt-3">
                                                            <h5 class="fs-14">CATEGORIE DE TROC :</h5>
                                                            <ul class="list-unstyled">
                                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>Informatque et mobile</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="mt-3">
                                                            <h5 class="fs-14">ADRESSE (Ville, Quartier) :</h5>
                                                            <ul class="list-unstyled product-desc-list">
                                                                <li class="py-1">Lomé, totsi</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="product-content mt-3">
                                                    <div class="tab-content border border-top-0 p-2" id="nav-tabContent">
                                                    </div>
                                                </div>
                                                <!-- product-content -->

                                                <div class="mt-5">
                                                    <div class="row gy-4 gx-0">

                                                        <div class="col-lg-8">
                                                            <div class="ps-lg-4">
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                    </div>
                                                    <!-- end Ratings & Reviews -->
                                                </div>
                                                <!-- end card body -->
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end card body -->
                            </div>

                            <!-- DEBUT DONNEES USER -->

                        </div>
                        <!-- end col -->
                        <div class="col-xxl-3">
                            <div class="card">
                                <div class="card-body p-4">
                                    <div>
                                        <div class="flex-shrink-0 avatar-md mx-auto">
                                            <div class="avatar-title bg-light rounded">
                                                <img src="assets/images/users/avatar-1.jpg" alt="" height="50" />
                                            </div>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <h5 class="mb-1">Nom & prenom</h5>
                                            <p class="text-muted">sexe</p>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table mb-0 table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <th><span class="fw-medium">Quartier</span></th>
                                                        <td>totsi</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Email</span></th>
                                                        <td>name@gamil.com</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Téléphone</span></th>
                                                        <td>+(228) 90112233</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!--end card-body-->
                                <div class="card-body p-4 border-top border-top-dashed">
                                    <h6 class="text-muted text-uppercase fw-semibold mb-4">Products Reviews</h6>
                                    <!-- Swiper -->
                                    <div class="swiper vertical-swiper" style="height: 242px;">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="card border border-dashed shadow-none">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 avatar-sm">
                                                                <div class="avatar-title bg-light rounded">
                                                                    <img src="assets/images/companies/img-1.png" alt="" height="30">
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <div>
                                                                    <p class="text-muted mb-1 fst-italic">" Great product and looks great, lots of features. "</p>
                                                                    <div class="fs-11 align-middle text-warning">
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="text-end mb-0 text-muted">
                                                                    - by <cite title="Source Title">Force Medicines</cite>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card border border-dashed shadow-none">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-sm rounded">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <div>
                                                                    <p class="text-muted mb-1 fst-italic">" Amazing template, very easy to understand and manipulate. "</p>
                                                                    <div class="fs-11 align-middle text-warning">
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-half-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="text-end mb-0 text-muted">
                                                                    - by <cite title="Source Title">Henry Baird</cite>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card border border-dashed shadow-none">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 avatar-sm">
                                                                <div class="avatar-title bg-light rounded">
                                                                    <img src="assets/images/companies/img-8.png" alt="" height="30">
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <div>
                                                                    <p class="text-muted mb-1 fst-italic">"Very beautiful product and Very helpful customer service."</p>
                                                                    <div class="fs-11 align-middle text-warning">
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-line"></i>
                                                                        <i class="ri-star-line"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="text-end mb-0 text-muted">
                                                                    - by <cite title="Source Title">Zoetic Fashion</cite>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card border border-dashed shadow-none">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <div>
                                                                    <p class="text-muted mb-1 fst-italic">" The product is very beautiful. I like it. "</p>
                                                                    <div class="fs-11 align-middle text-warning">
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-half-fill"></i>
                                                                        <i class="ri-star-line"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="text-end mb-0 text-muted">
                                                                    - by <cite title="Source Title">Nancy Martino</cite>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-3">
                                        <a href="javascript:void(0)" class="link-primary">View All Reviews <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                    </div>
                                </div>
                                <!--end card-body-->
                                <div class="card-body p-4 border-top border-top-dashed">
                                    <h6 class="text-muted text-uppercase fw-semibold mb-4">Contact Support</h6>
                                    <form action="#">
                                        <div class="mb-3">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Enter your messages..."></textarea>
                                        </div>
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary"><i class="ri-mail-send-line align-bottom me-1"></i> Send Messages</button>
                                        </div>
                                    </form>
                                </div>
                                <!--end card-body-->
                            </div>
                        </div>
                            <!-- end card -->

                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

@endsection
