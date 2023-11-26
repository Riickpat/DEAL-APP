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
                                <h4 class="mb-sm-0">JE RECHERCHE</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tableau de bord</a></li>
                                        <li class="breadcrumb-item active">Je recherche</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card" id="orderList">
                                <div class="card-header border-0">
                                    <div class="row align-items-center gy-3">
                                        <div class="col-sm">
                                            <h5 class="card-title mb-0">Ce que je recherche</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body border border-dashed border-end-0 border-start-0">
                                    <form>
                                        <div class="row g-3">
                                            <div class="col-xxl-5 col-sm-6">
                                                <div class="search-box">
                                                    <input type="text" class="form-control search" placeholder="Entrer ce que je cherche">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-sm-6">
                                                <div>
                                                    <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" id="demo-datepicker" placeholder="Selectionner la date">
                                                </div>
                                            </div>

                                        <!--end col-->
                                        <div class="col-lg-auto">
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-danger"><i class="ri-equalizer-fill me-1 align-bottom"></i> Filtres </button>
                                                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addSeller"><i class="ri-add-fill me-1 align-bottom"></i> Valider</button>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>

                <div class="card-body pt-0">
                  <div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row gallery-wrapper">
                                                <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development" data-category="designing development">
                                                    <div class="gallery-box card">
                                                        <div class="gallery-container">
                                                            <a href="{{route('details-produit')}}" title="">
                                                                <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-1.jpg" alt="" />
                                                                <div class="gallery-overlay">
                                                                    <h5 class="overlay-caption" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis; display: block;">Nom du produit</h5>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="box-content">
                                                            <div class="d-flex align-items-center mt-1">
                                                                <div class="flex-grow-1 text-muted"><i class="ri-checkbox-blank-circle-fill text-muted align-bottom me-1"></i><a class="text-body text-truncate">Type de troc</a></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="d-flex gap-3">
                                                                        <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                            <i class="ri-calendar-todo-fill text-muted align-bottom me-1"></i> date
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                                    <div class="gallery-box card">
                                                        <div class="gallery-container">
                                                            <a href="{{route('details-produit')}}" title="">
                                                                <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-2.jpg" alt="" />
                                                                <div class="gallery-overlay">
                                                                    <h5 class="overlay-caption" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis; display: block;">Nom du produit</h5>
                                                                </div>
                                                            </a>

                                                        </div>

                                                        <div class="box-content">
                                                            <div class="d-flex align-items-center mt-1">
                                                                <div class="flex-grow-1 text-muted"><i class="ri-checkbox-blank-circle-fill text-muted align-bottom me-1"></i><a class="text-body text-truncate">Type de troc</a></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="d-flex gap-3">
                                                                        <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                            <i class="ri-calendar-todo-fill text-muted align-bottom me-1"></i> date
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project development" data-category="development">
                                                    <div class="gallery-box card">
                                                        <div class="gallery-container">
                                                            <a href="{{route('details-produit')}}" title="">
                                                                <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-3.jpg" alt="" />
                                                                <div class="gallery-overlay">
                                                                    <h5 class="overlay-caption" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis; display: block;">Nom du produit</h5>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="box-content">
                                                            <div class="d-flex align-items-center mt-1">
                                                                <div class="flex-grow-1 text-muted"><i class="ri-checkbox-blank-circle-fill text-muted align-bottom me-1"></i><a class="text-body text-truncate">Type de troc</a></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="d-flex gap-3">
                                                                        <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                            <i class="ri-calendar-todo-fill text-muted align-bottom me-1"></i> date
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing" data-category="project designing">
                                                    <div class="gallery-box card">
                                                        <div class="gallery-container">
                                                            <a href="{{route('details-produit')}}" title="">
                                                                <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-4.jpg" alt=""/>
                                                                <div class="gallery-overlay">
                                                                    <h5 class="overlay-caption" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis; display: block;">Nom du produit</h5>
                                                                </div>
                                                            </a>

                                                        </div>

                                                        <div class="box-content">
                                                            <div class="d-flex align-items-center mt-1">
                                                                <div class="flex-grow-1 text-muted"><i class="ri-checkbox-blank-circle-fill text-muted align-bottom me-1"></i><a class="text-body text-truncate">Type de troc</a></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="d-flex gap-3">
                                                                        <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                            <i class="ri-calendar-todo-fill text-muted align-bottom me-1"></i> date
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing" data-category="project designing">
                                                    <div class="gallery-box card">
                                                        <div class="gallery-container">
                                                            <a href="{{route('details-produit')}}" title="">
                                                                <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-5.jpg" alt="" />
                                                                <div class="gallery-overlay">
                                                                    <h5 class="overlay-caption" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis; display: block;">Nom du produit</h5>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="box-content">
                                                            <div class="d-flex align-items-center mt-1">
                                                                <div class="flex-grow-1 text-muted"><i class="ri-checkbox-blank-circle-fill text-muted align-bottom me-1"></i><a class="text-body text-truncate">Type de troc</a></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="d-flex gap-3">
                                                                        <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                            <i class="ri-calendar-todo-fill text-muted align-bottom me-1"></i> date
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                                    <div class="gallery-box card">
                                                        <div class="gallery-container">
                                                            <a href="{{route('details-produit')}}" title="">
                                                                <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-6.jpg" alt="" />
                                                                <div class="gallery-overlay">
                                                                    <h5 class="overlay-caption" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis; display: block;">Nom du produit</h5>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="box-content">
                                                            <div class="d-flex align-items-center mt-1">
                                                                <div class="flex-grow-1 text-muted"><i class="ri-checkbox-blank-circle-fill text-muted align-bottom me-1"></i><a class="text-body text-truncate">Type de troc</a></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="d-flex gap-3">
                                                                        <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                            <i class="ri-calendar-todo-fill text-muted align-bottom me-1"></i> date
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development" data-category="designing development">
                                                    <div class="gallery-box card">
                                                        <div class="gallery-container">
                                                            <a href="{{route('details-produit')}}" title="">
                                                                <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-7.jpg" alt="" />
                                                                <div class="gallery-overlay">
                                                                    <h5 class="overlay-caption" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis; display: block;">Nom du produit</h5>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="box-content">
                                                            <div class="d-flex align-items-center mt-1">
                                                                <div class="flex-grow-1 text-muted"><i class="ri-checkbox-blank-circle-fill text-muted align-bottom me-1"></i><a class="text-body text-truncate">Type de troc</a></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="d-flex gap-3">
                                                                        <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                            <i class="ri-calendar-todo-fill text-muted align-bottom me-1"></i> date
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                                    <div class="gallery-box card">
                                                        <div class="gallery-container">
                                                            <a href="{{route('details-produit')}}" title="">
                                                                <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-8.jpg" alt="" />
                                                                <div class="gallery-overlay">
                                                                    <h5 class="overlay-caption" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis; display: block;">Nom du produit</h5>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="box-content">
                                                            <div class="d-flex align-items-center mt-1">
                                                                <div class="flex-grow-1 text-muted"><i class="ri-checkbox-blank-circle-fill text-muted align-bottom me-1"></i><a class="text-body text-truncate">Type de troc</a></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="d-flex gap-3">
                                                                        <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                            <i class="ri-calendar-todo-fill text-muted align-bottom me-1"></i> date
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->

                                                <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development" data-category="designing development">
                                                    <div class="gallery-box card">
                                                        <div class="gallery-container">
                                                            <a href="{{route('details-produit')}}" title="">
                                                                <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-9.jpg" alt="" />
                                                                <div class="gallery-overlay">
                                                                    <h5 class="overlay-caption" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis; display: block;">Nom du produit</h5>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="box-content">
                                                            <div class="d-flex align-items-center mt-1">
                                                                <div class="flex-grow-1 text-muted"><i class="ri-checkbox-blank-circle-fill text-muted align-bottom me-1"></i><a class="text-body text-truncate">Type de troc</a></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="d-flex gap-3">
                                                                        <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                            <i class="ri-calendar-todo-fill text-muted align-bottom me-1"></i> date
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->

                                                <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing" data-category="project designing">
                                                    <div class="gallery-box card">
                                                        <div class="gallery-container">
                                                            <a href="{{route('details-produit')}}" title="">
                                                                <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-10.jpg" alt="" />
                                                                <div class="gallery-overlay">
                                                                    <h5 class="overlay-caption" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis; display: block;">Nom du produit</h5>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="box-content">
                                                            <div class="d-flex align-items-center mt-1">
                                                                <div class="flex-grow-1 text-muted"><i class="ri-checkbox-blank-circle-fill text-muted align-bottom me-1"></i><a class="text-body text-truncate">Type de troc</a></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="d-flex gap-3">
                                                                        <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                            <i class="ri-calendar-todo-fill text-muted align-bottom me-1"></i> date
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->

                                                <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                                    <div class="gallery-box card">
                                                        <div class="gallery-container">
                                                            <a href="{{route('details-produit')}}" title="">
                                                                <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-11.jpg" alt="" />
                                                                <div class="gallery-overlay">
                                                                    <h5 class="overlay-caption" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis; display: block;">Nom du produit</h5>
                                                                </div>
                                                            </a>

                                                        </div>

                                                        <div class="box-content">
                                                            <div class="d-flex align-items-center mt-1">
                                                                <div class="flex-grow-1 text-muted"><i class="ri-checkbox-blank-circle-fill text-muted align-bottom me-1"></i><a class="text-body text-truncate">Type de troc</a></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="d-flex gap-3">
                                                                        <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                            <i class="ri-calendar-todo-fill text-muted align-bottom me-1"></i> date
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->

                                                <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                                    <div class="gallery-box card">
                                                        <div class="gallery-container">
                                                            <a href="{{route('details-produit')}}" title="">
                                                                <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-12.jpg" alt="" />
                                                                <div class="gallery-overlay">
                                                                    <h5 class="overlay-caption" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis; display: block;">Nom du produit</h5>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="box-content">
                                                            <div class="d-flex align-items-center mt-1">
                                                                <div class="flex-grow-1 text-muted"><i class="ri-checkbox-blank-circle-fill text-muted align-bottom me-1"></i><a class="text-body text-truncate">Type de troc</a></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="d-flex gap-3">
                                                                        <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                            <i class="ri-calendar-todo-fill text-muted align-bottom me-1"></i> date
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- ene card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>

                    <div class="d-flex justify-content-end">
                        <div class="pagination-wrap hstack gap-2">
                            <a class="page-item pagination-prev disabled" href="#">
                                Précédent
                            </a>
                                <ul class="pagination listjs-pagination mb-0"></ul>
                            <a class="page-item pagination-next" href="#">
                                Suivant
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--end col-->
              </div>
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
