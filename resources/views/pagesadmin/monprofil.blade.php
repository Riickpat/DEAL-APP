@extends('layouts.admin')
@section('content')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <div class="profile-foreground position-relative mx-n4 mt-n4">
                        <div class="profile-wid-bg">
                            <img src="assets/images/profile-bg.jpg" alt="" class="profile-wid-img" />
                        </div>
                    </div>
                    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
                        <div class="row g-4">
                            <div class="col-auto">
                                <div class="avatar-lg">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-thumbnail rounded-circle" />
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col">
                                <div class="p-2">
                                    <h3 class="text-white mb-1">Nom & Prénom</h3>
                                    <p class="text-white-75">Sexe</p>
                                    <div class="hstack text-white-50 gap-1">
                                        <div class="me-2"><i class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i>Lomé, Togo</div>
                                        <div>
                                            <i class="ri-building-line me-1 text-white-75 fs-16 align-middle"></i>Nom d'utilisateur
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                        </div>
                        <!--end row-->
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                <div class="d-flex profile-wrapper">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                                <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Mes informations</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fs-14" data-bs-toggle="tab" href="#activities" role="tab">
                                                <i class="ri-list-unordered d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Commentaires</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fs-14" data-bs-toggle="tab" href="#projects" role="tab">
                                                <i class="ri-price-tag-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Mes trocs</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="flex-shrink-0">
                                        <a href="pages-profile-settings.html" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Modifier mon profil</a>
                                    </div>
                                </div>
                                <!-- Tab panes -->
                                <div class="tab-content pt-4 text-muted">
                                    <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                        <div class="row">
                                            <div class="col-xxl-12">

                                                <div class="card">
                                                    <div class="card-body text-right">
                                                        <h5 class="card-title mb-2">Info utiles</h5>
                                                        <div class="table-responsive">
                                                            <table class="table table-borderless mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">Nom complet :</th>
                                                                        <td class="text-muted">Nom & prénom</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">Téléphone :</th>
                                                                        <td class="text-muted">(+228) 90112233</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">E-mail :</th>
                                                                        <td class="text-muted">mail@gmail.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">Quartier :</th>
                                                                        <td class="text-muted">Lomé, Togo
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="tab-pane fade" id="activities" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3">commentaires d'autres utilisateurs</h5>
                                                <div class="acitivity-timeline">
                                                    <div class="acitivity-item py-3 d-flex">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar" />
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-1">Bethany Johnson</h6>
                                                            <p class="text-muted mb-2">added a new member to velzon dashboard</p>
                                                            <small class="mb-0 text-muted">19 Nov</small>
                                                        </div>
                                                    </div>
                                                    <div class="acitivity-item py-3 d-flex">
                                                        <div class="flex-shrink-0">
                                                            <div class="avatar-xs acitivity-avatar">
                                                                <div class="avatar-title rounded-circle bg-soft-danger text-danger">
                                                                    <i class="ri-shopping-bag-line"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-1">Your order is placed <span class="badge bg-soft-danger text-danger align-middle ms-1">Out of Delivery</span></h6>
                                                            <p class="text-muted mb-2">These customers can rest assured their order has been placed.</p>
                                                            <small class="mb-0 text-muted">16 Nov</small>
                                                        </div>
                                                    </div>
                                                    <div class="acitivity-item py-3 d-flex">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar" />
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-1">Lewis Pratt</h6>
                                                            <p class="text-muted mb-2">They all have something to say
                                                                beyond the words on the page. They can come across as
                                                                casual or neutral, exotic or graphic. </p>
                                                            <small class="mb-0 text-muted">22 Oct</small>
                                                        </div>
                                                    </div>
                                                    <div class="acitivity-item py-3 d-flex">
                                                        <div class="flex-shrink-0">
                                                            <div class="avatar-xs acitivity-avatar">
                                                                <div class="avatar-title rounded-circle bg-soft-info text-info">
                                                                    <i class="ri-line-chart-line"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-1">Monthly sales report</h6>
                                                            <p class="text-muted mb-2">
  																<span class="text-danger">2 days left</span> notification to submit the monthly sales report. <a href="javascript:void(0);" class="link-warning text-decoration-underline">Reports Builder</a>
                                                            </p>
                                                            <small class="mb-0 text-muted">15 Oct</small>
                                                        </div>
                                                    </div>
                                                    <div class="acitivity-item d-flex">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/users/avatar-8.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar" />
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-1">New ticket received <span class="badge bg-soft-success text-success align-middle">Completed</span></h6>
                                                            <p class="text-muted mb-2">User <span class="text-secondary">Erica245</span> submitted a ticket.</p>
                                                            <small class="mb-0 text-muted">26 Aug</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end card-body-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end tab-pane-->
                                    <div class="tab-pane fade" id="projects" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xxl-3 col-sm-6">
                                                        <div class="card profile-project-card shadow-none profile-project-warning">
                                                            <div class="card-body p-4">
                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                                        <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">Chat App Update</a></h5>
                                                                        <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">2 year Ago</span></p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <div class="badge badge-soft-warning fs-10">Inprogress</div>
                                                                    </div>
                                                                </div>

                                                                <div class="d-flex mt-4">
                                                                    <div class="flex-grow-1">
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <div>
                                                                                <h5 class="fs-12 text-muted mb-0">Membres :</h5>
                                                                            </div>
                                                                            <div class="avatar-group">
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <div class="avatar-title rounded-circle bg-light text-primary">
                                                                                            J
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end card body -->
                                                        </div>
                                                        <!-- end card -->
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-3 col-sm-6">
                                                        <div class="card profile-project-card shadow-none profile-project-success">
                                                            <div class="card-body p-4">
                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                                        <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">ABC Project Customization</a></h5>
                                                                        <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">2 month Ago</span></p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <div class="badge badge-soft-primary fs-10"> Progress</div>
                                                                    </div>
                                                                </div>

                                                                <div class="d-flex mt-4">
                                                                    <div class="flex-grow-1">
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <div>
                                                                                <h5 class="fs-12 text-muted mb-0">Membres :</h5>
                                                                            </div>
                                                                            <div class="avatar-group">
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-8.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <div class="avatar-title rounded-circle bg-primary">
                                                                                            2+
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end card body -->
                                                        </div>
                                                        <!-- end card -->
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-3 col-sm-6">
                                                        <div class="card profile-project-card shadow-none profile-project-info">
                                                            <div class="card-body p-4">
                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                                        <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">Client - Frank Hook</a></h5>
                                                                        <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">1 hr Ago</span></p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <div class="badge badge-soft-info fs-10">New</div>
                                                                    </div>
                                                                </div>

                                                                <div class="d-flex mt-4">
                                                                    <div class="flex-grow-1">
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <div>
                                                                                <h5 class="fs-12 text-muted mb-0"> Membres :</h5>
                                                                            </div>
                                                                            <div class="avatar-group">
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <div class="avatar-title rounded-circle bg-light text-primary">
                                                                                            M
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end card body -->
                                                        </div>
                                                        <!-- end card -->
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-3 col-sm-6">
                                                        <div class="card profile-project-card shadow-none profile-project-primary">
                                                            <div class="card-body p-4">
                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                                        <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">Velzon Project</a></h5>
                                                                        <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">11 hr Ago</span></p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <div class="badge badge-soft-success fs-10">Completed</div>
                                                                    </div>
                                                                </div>

                                                                <div class="d-flex mt-4">
                                                                    <div class="flex-grow-1">
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <div>
                                                                                <h5 class="fs-12 text-muted mb-0">Membres :</h5>
                                                                            </div>
                                                                            <div class="avatar-group">
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end card body -->
                                                        </div>
                                                        <!-- end card -->
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-3 col-sm-6">
                                                        <div class="card profile-project-card shadow-none profile-project-danger">
                                                            <div class="card-body p-4">
                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                                        <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">Brand Logo Design</a></h5>
                                                                        <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">10 min Ago</span></p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <div class="badge badge-soft-info fs-10">New</div>
                                                                    </div>
                                                                </div>

                                                                <div class="d-flex mt-4">
                                                                    <div class="flex-grow-1">
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <div>
                                                                                <h5 class="fs-12 text-muted mb-0">Membres :</h5>
                                                                            </div>
                                                                            <div class="avatar-group">
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <div class="avatar-title rounded-circle bg-light text-primary">
                                                                                            E
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end card body -->
                                                        </div>
                                                        <!-- end card -->
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-3 col-sm-6">
                                                        <div class="card profile-project-card shadow-none profile-project-primary">
                                                            <div class="card-body p-4">
                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                                        <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">Chat App</a></h5>
                                                                        <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">8 hr Ago</span></p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <div class="badge badge-soft-warning fs-10">Inprogress</div>
                                                                    </div>
                                                                </div>

                                                                <div class="d-flex mt-4">
                                                                    <div class="flex-grow-1">
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <div>
                                                                                <h5 class="fs-12 text-muted mb-0">Membres :</h5>
                                                                            </div>
                                                                            <div class="avatar-group">
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <div class="avatar-title rounded-circle bg-light text-primary">
                                                                                            R
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-8.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end card body -->
                                                        </div>
                                                        <!-- end card -->
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-3 col-sm-6">
                                                        <div class="card profile-project-card shadow-none profile-project-warning">
                                                            <div class="card-body p-4">
                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                                        <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">Project Update</a></h5>
                                                                        <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">48 min Ago</span></p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <div class="badge badge-soft-warning fs-10">Inprogress</div>
                                                                    </div>
                                                                </div>

                                                                <div class="d-flex mt-4">
                                                                    <div class="flex-grow-1">
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <div>
                                                                                <h5 class="fs-12 text-muted mb-0">Membres :</h5>
                                                                            </div>
                                                                            <div class="avatar-group">
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end card body -->
                                                        </div>
                                                        <!-- end card -->
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-3 col-sm-6">
                                                        <div class="card profile-project-card shadow-none profile-project-success">
                                                            <div class="card-body p-4">
                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                                        <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">Client - Jennifer</a></h5>
                                                                        <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">30 min Ago</span></p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <div class="badge badge-soft-primary fs-10">Process</div>
                                                                    </div>
                                                                </div>

                                                                <div class="d-flex mt-4">
                                                                    <div class="flex-grow-1">
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <div>
                                                                                <h5 class="fs-12 text-muted mb-0"> Membres :</h5>
                                                                            </div>
                                                                            <div class="avatar-group">
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end card body -->
                                                        </div>
                                                        <!-- end card -->
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-3 col-sm-6">
                                                        <div class="card profile-project-card shadow-none mb-xxl-0 profile-project-info">
                                                            <div class="card-body p-4">
                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                                        <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">Bsuiness Template - UI/UX design</a></h5>
                                                                        <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">7 month Ago</span></p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <div class="badge badge-soft-success fs-10">Completed</div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex mt-4">
                                                                    <div class="flex-grow-1">
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <div>
                                                                                <h5 class="fs-12 text-muted mb-0">Membres :</h5>
                                                                            </div>
                                                                            <div class="avatar-group">
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <div class="avatar-title rounded-circle bg-primary">
                                                                                            2+
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end card body -->
                                                        </div>
                                                        <!-- end card -->
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-3 col-sm-6">
                                                        <div class="card profile-project-card shadow-none mb-xxl-0  profile-project-success">
                                                            <div class="card-body p-4">
                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                                        <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">Update Project</a></h5>
                                                                        <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">1 month Ago</span></p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <div class="badge badge-soft-info fs-10">New</div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex mt-4">
                                                                    <div class="flex-grow-1">
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <div>
                                                                                <h5 class="fs-12 text-muted mb-0">Membres :</h5>
                                                                            </div>
                                                                            <div class="avatar-group">
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle img-fluid">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <div class="avatar-title rounded-circle bg-light text-primary">
                                                                                            A
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end card body -->
                                                        </div><!-- end card -->
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-3 col-sm-6">
                                                        <div class="card profile-project-card shadow-none mb-sm-0  profile-project-danger">
                                                            <div class="card-body p-4">
                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                                        <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">Bank Management System</a></h5>
                                                                        <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">10 month Ago</span></p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <div class="badge badge-soft-success fs-10">Completed</div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex mt-4">
                                                                    <div class="flex-grow-1">
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <div>
                                                                                <h5 class="fs-12 text-muted mb-0">Membres :</h5>
                                                                            </div>
                                                                            <div class="avatar-group">
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <div class="avatar-title rounded-circle bg-primary">
                                                                                            2+
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end card body -->
                                                        </div><!-- end card -->
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-3 col-sm-6">
                                                        <div class="card profile-project-card shadow-none mb-0  profile-project-primary">
                                                            <div class="card-body p-4">
                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                                        <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">PSD to HTML Convert</a></h5>
                                                                        <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">29 min Ago</span></p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <div class="badge badge-soft-info fs-10">New</div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex mt-4">
                                                                    <div class="flex-grow-1">
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <div>
                                                                                <h5 class="fs-12 text-muted mb-0">Membres :</h5>
                                                                            </div>
                                                                            <div class="avatar-group">
                                                                                <div class="avatar-group-item">
                                                                                    <div class="avatar-xs">
                                                                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end card body -->
                                                        </div><!-- end card -->
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="mt-4">
                                                            <ul class="pagination pagination-separated justify-content-center mb-0">
                                                                <li class="page-item disabled">
                                                                    <a href="javascript:void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                                </li>
                                                                <li class="page-item active">
                                                                    <a href="javascript:void(0);" class="page-link">1</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a href="javascript:void(0);" class="page-link">2</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a href="javascript:void(0);" class="page-link">3</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a href="javascript:void(0);" class="page-link">4</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a href="javascript:void(0);" class="page-link">5</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a href="javascript:void(0);" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <!--end card-body-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end tab-pane-->
                                    <div class="tab-pane fade" id="documents" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-4">
                                                    <h5 class="card-title flex-grow-1 mb-0">Documents</h5>
                                                    <div class="flex-shrink-0">
                                                        <input class="form-control d-none" type="file" id="formFile">
                                                        <label for="formFile" class="btn btn-danger"><i class="ri-upload-2-fill me-1 align-bottom"></i> Upload File</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="table-responsive">
                                                            <table class="table table-borderless align-middle mb-0">
                                                                <thead class="table-light">
                                                                    <tr>
                                                                        <th scope="col">File Name</th>
                                                                        <th scope="col">Type</th>
                                                                        <th scope="col">Size</th>
                                                                        <th scope="col">Upload Date</th>
                                                                        <th scope="col">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="avatar-sm">
                                                                                    <div class="avatar-title bg-soft-primary text-primary rounded fs-20">
                                                                                        <i class="ri-file-zip-fill"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="ms-3 flex-grow-1">
                                                                                    <h6 class="fs-15 mb-0"><a href="javascript:void(0)">Artboard-documents.zip</a>
                                                                                    </h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>Zip File</td>
                                                                        <td>4.57 MB</td>
                                                                        <td>12 Dec 2021</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink15" data-bs-toggle="dropdown" aria-expanded="true">
                                                                                    <i class="ri-equalizer-fill"></i>
                                                                                </a>
                                                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink15">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a></li>
                                                                                    <li class="dropdown-divider"></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="avatar-sm">
                                                                                    <div class="avatar-title bg-soft-danger text-danger rounded fs-20">
                                                                                        <i class="ri-file-pdf-fill"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="ms-3 flex-grow-1">
                                                                                    <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Bank Management System</a></h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>PDF File</td>
                                                                        <td>8.89 MB</td>
                                                                        <td>24 Nov 2021</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink3" data-bs-toggle="dropdown" aria-expanded="true">
                                                                                    <i class="ri-equalizer-fill"></i>
                                                                                </a>
                                                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink3">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a></li>
                                                                                    <li class="dropdown-divider"></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="avatar-sm">
                                                                                    <div class="avatar-title bg-soft-secondary text-secondary rounded fs-20">
                                                                                        <i class="ri-video-line"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="ms-3 flex-grow-1">
                                                                                    <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Tour-video.mp4</a></h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>MP4 File</td>
                                                                        <td>14.62 MB</td>
                                                                        <td>19 Nov 2021</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink4" data-bs-toggle="dropdown" aria-expanded="true">
                                                                                    <i class="ri-equalizer-fill"></i>
                                                                                </a>
                                                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink4">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a></li>
                                                                                    <li class="dropdown-divider"></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="avatar-sm">
                                                                                    <div class="avatar-title bg-soft-success text-success rounded fs-20">
                                                                                        <i class="ri-file-excel-fill"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="ms-3 flex-grow-1">
                                                                                    <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Account-statement.xsl</a></h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>XSL File</td>
                                                                        <td>2.38 KB</td>
                                                                        <td>14 Nov 2021</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink5" data-bs-toggle="dropdown" aria-expanded="true">
                                                                                    <i class="ri-equalizer-fill"></i>
                                                                                </a>
                                                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink5">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a></li>
                                                                                    <li class="dropdown-divider"></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="avatar-sm">
                                                                                    <div class="avatar-title bg-soft-info text-info rounded fs-20">
                                                                                        <i class="ri-folder-line"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="ms-3 flex-grow-1">
                                                                                    <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Project Screenshots Collection</a></h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>Floder File</td>
                                                                        <td>87.24 MB</td>
                                                                        <td>08 Nov 2021</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink6" data-bs-toggle="dropdown" aria-expanded="true">
                                                                                    <i class="ri-equalizer-fill"></i>
                                                                                </a>
                                                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink6">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle"></i>View</a></li>
                                                                                    <li>
                                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle"></i>Download</a>
                                                                                    </li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="avatar-sm">
                                                                                    <div class="avatar-title bg-soft-danger text-danger rounded fs-20">
                                                                                        <i class="ri-image-2-fill"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="ms-3 flex-grow-1">
                                                                                    <h6 class="fs-15 mb-0">
                                                                                        <a href="javascript:void(0);">Velzon-logo.png</a>
                                                                                    </h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>PNG File</td>
                                                                        <td>879 KB</td>
                                                                        <td>02 Nov 2021</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink7" data-bs-toggle="dropdown" aria-expanded="true">
                                                                                    <i class="ri-equalizer-fill"></i>
                                                                                </a>
                                                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink7">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle"></i>View</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle"></i>Download</a></li>
                                                                                    <li>
                                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                                                    </li>
                                                                                </ul>
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
                                    <!--end tab-pane-->
                                </div>
                                <!--end tab-content-->
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div><!-- container-fluid -->
            </div><!-- End Page-content -->

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
        </div><!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header">
            <h5 class="m-0 me-2 text-white">Personnaliser le thème</h5>

            <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div data-simplebar class="h-100">
                <div class="p-4">
                    <h6 class="mb-0 fw-semibold text-uppercase">Layout</h6>
                    <p class="text-muted">Choose your layout</p>

                    <div class="row gy-3">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Vertical</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout02">
                                    <span class="d-flex h-100 flex-column gap-1">
                                        <span class="bg-light d-flex p-1 gap-1 align-items-center">
                                            <span class="d-block p-1 bg-soft-primary rounded me-1"></span>
                                            <span class="d-block p-1 pb-0 px-2 bg-soft-primary ms-auto"></span>
                                            <span class="d-block p-1 pb-0 px-2 bg-soft-primary"></span>
                                        </span>
                                        <span class="bg-light d-block p-1"></span>
                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Horizontal</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout03">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1">
                                                <span class="d-block p-1 bg-soft-primary mb-2"></span>
                                                <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                            </span>
                                        </span>
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Two Column</h5>
                        </div>
                        <!-- end col -->

                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout04" name="data-layout" type="radio" value="semibox" class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout04">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0 p-1">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column pt-1 pe-2">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Semi Box</h5>
                        </div>
                        <!-- end col -->
                    </div>

                    <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Color Scheme</h6>
                    <p class="text-muted">Choose Light or Dark Scheme.</p>

                    <div class="colorscheme-cardradio">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="layout-mode-light">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Light</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check card-radio dark">
                                    <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100 bg-dark" for="layout-mode-dark">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-soft-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-soft-light d-block p-1"></span>
                                                    <span class="bg-soft-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Dark</h5>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-visibility">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Visibility</h6>
                        <p class="text-muted">Choose show or Hidden sidebar.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-visibility" id="sidebar-visibility-show" value="show">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-visibility-show">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0 p-1">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column pt-1 pe-2">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Show</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-visibility" id="sidebar-visibility-hidden" value="hidden">
                                    <label class="form-check-label p-0 avatar-md w-100 px-2" for="sidebar-visibility-hidden">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column pt-1 px-2">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Hidden</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-width">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Layout Width</h6>
                        <p class="text-muted">Choose Fluid or Boxed layout.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid">
                                    <label class="form-check-label p-0 avatar-md w-100" for="layout-width-fluid">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Fluid</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed">
                                    <label class="form-check-label p-0 avatar-md w-100 px-2" for="layout-width-boxed">
                                        <span class="d-flex gap-1 h-100 border-start border-end">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Boxed</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-position">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Layout Position</h6>
                        <p class="text-muted">Choose Fixed or Scrollable Layout Position.</p>

                        <div class="btn-group radio" role="group">
                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                            <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                            <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>
                    <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Topbar Color</h6>
                    <p class="text-muted">Choose Light or Dark Topbar Color.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light">
                                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-light">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Light</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark">
                                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-dark">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-primary d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Dark</h5>
                        </div>
                    </div>

                    <div id="sidebar-size">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Size</h6>
                        <p class="text-muted">Choose a size of Sidebar.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-default">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Default</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-compact">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 bg-soft-primary rounded mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Compact</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small" value="sm">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                    <span class="d-block p-1 bg-soft-primary mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Small (Icon View)</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small-hover">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                    <span class="d-block p-1 bg-soft-primary mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Small Hover View</h5>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-view">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar View</h6>
                        <p class="text-muted">Choose Default or Detached Sidebar view.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-default">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Default</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-detached">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-flex p-1 gap-1 align-items-center px-2">
                                                <span class="d-block p-1 bg-soft-primary rounded me-1"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-soft-primary ms-auto"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-soft-primary"></span>
                                            </span>
                                            <span class="d-flex gap-1 h-100 p-1 px-2">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Detached</h5>
                            </div>
                        </div>
                    </div>
                    <div id="sidebar-color">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Color</h6>
                        <p class="text-muted">Choose a color of Sidebar.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-light">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Light</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-dark">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-primary d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Dark</h5>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false" aria-controls="collapseBgGradient">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </button>
                                <h5 class="fs-13 text-center mt-2">Gradient</h5>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="collapse" id="collapseBgGradient">
                            <div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded">

                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient" value="gradient">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-2" value="gradient-2">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-2">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-3" value="gradient-3">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-3">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-4" value="gradient-4">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-4">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-img">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Images</h6>
                        <p class="text-muted">Choose a image of Sidebar.</p>

                        <div class="d-flex gap-2 flex-wrap img-switch">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-none" value="none">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-none">
                                    <span class="avatar-md w-auto bg-light d-flex align-items-center justify-content-center">
                                        <i class="ri-close-fill fs-20"></i>
                                    </span>
                                </label>
                            </div>

                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-01" value="img-1">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-01">
                                    <img src="assets/images/sidebar/img-1.jpg" alt="" class="avatar-md w-auto object-cover">
                                </label>
                            </div>

                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-02" value="img-2">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-02">
                                    <img src="assets/images/sidebar/img-2.jpg" alt="" class="avatar-md w-auto object-cover">
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-03" value="img-3">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-03">
                                    <img src="assets/images/sidebar/img-3.jpg" alt="" class="avatar-md w-auto object-cover">
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-04" value="img-4">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-04">
                                    <img src="assets/images/sidebar/img-4.jpg" alt="" class="avatar-md w-auto object-cover">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="preloader-menu">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Preloader</h6>
                        <p class="text-muted">Choose a preloader.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-custom" value="enable">
                                    <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-custom">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                        <!-- <div id="preloader"> -->
                                        <div id="status" class="d-flex align-items-center justify-content-center">
                                            <div class="spinner-border text-primary avatar-xxs m-auto" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Enable</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-none" value="disable">
                                    <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-none">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Disable</h5>
                            </div>
                        </div>

                    </div>
                    <!-- end preloader-menu -->

                </div>
            </div>

        </div>
        <div class="offcanvas-footer border-top p-3 text-center">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                </div>
                <div class="col-6">
                    <a href="https://1.envato.market/velzon-admin" target="_blank" class="btn btn-primary w-100">Buy Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- swiper js -->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- profile init js -->
    <script src="assets/js/pages/profile.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/pages-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 May 2023 17:36:48 GMT -->
</html>
