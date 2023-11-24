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
                                    <h4 class="mb-sm-0">MES MESSAGES</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Accueil</a></li>
                                            <li class="breadcrumb-item active">Messages</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                    <div class="email-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
                        <div class="email-menu-sidebar">
                            <div class="p-4 d-flex flex-column h-100">

                                <div class="mx-n4 px-4 email-menu-sidebar-scroll" data-simplebar>

                                    <div class="border-top border-top-dashed pt-3 mt-3">
                                        <h5 class="fs-12 text-uppercase text-muted mb-3">Chat</h5>

                                            <div class="mt-2 vstack email-chat-list mx-n4">
                                                <a href="javascript: void(0);" class="d-flex align-items-center active">
                                                    <div class="flex-shrink-0 me-2 avatar-xxs chatlist-user-image">
                                                    <img class="img-fluid rounded-circle" src="assets/images/users/avatar-2.jpg" alt="">
                                                </div>

                                                <div class="flex-grow-1 chat-user-box overflow-hidden">
                                                    <h5 class="fs-13 text-truncate mb-0 chatlist-user-name">Scott Median</h5>
                                                    <small class="text-muted text-truncate mb-0">Hello ! are you there?</small>
                                                </div>
                                            </a>

                                            <a href="javascript: void(0);" class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2 avatar-xxs chatlist-user-image">
                                                    <img class="img-fluid rounded-circle" src="assets/images/users/avatar-4.jpg" alt="">
                                                </div>

                                                <div class="flex-grow-1 chat-user-box overflow-hidden">
                                                    <h5 class="fs-13 text-truncate mb-0 chatlist-user-name">Julian Rosa</h5>
                                                    <small class="text-muted text-truncate mb-0">What about our next..</small>
                                                </div>
                                            </a>

                                            <a href="javascript: void(0);" class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2 avatar-xxs chatlist-user-image">
                                                    <img class="img-fluid rounded-circle" src="assets/images/users/avatar-3.jpg" alt="">
                                                </div>

                                                <div class="flex-grow-1 chat-user-box overflow-hidden">
                                                    <h5 class="fs-13 text-truncate mb-0 chatlist-user-name">David Medina</h5>
                                                    <small class="text-muted text-truncate mb-0">Yeah everything is fine</small>
                                                </div>
                                            </a>

                                            <a href="javascript: void(0);" class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2 avatar-xxs chatlist-user-image">
                                                    <img class="img-fluid rounded-circle" src="assets/images/users/avatar-5.jpg" alt="">
                                                </div>

                                                <div class="flex-grow-1 chat-user-box overflow-hidden">
                                                    <h5 class="fs-13 text-truncate mb-0 chatlist-user-name">Jay Baker</h5>
                                                    <small class="text-muted text-truncate mb-0">Wow that's great</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end email-menu-sidebar -->


                        <!-- BULLE DE MESSAGE-->
                        <div class="email-content">
                            <div class="p-4 pb-0">
                                <div class="border-bottom border-bottom-dashed">
                                    <div class="row mt-n2 mb-3 mb-sm-0">
                                        <div class="col col-sm-auto order-1 d-block d-lg-none">
                                            <button type="button" class="btn btn-soft-success btn-icon btn-sm fs-16 email-menu-btn">
                                                <i class="ri-menu-2-fill align-bottom"></i>
                                            </button>
                                        </div>
                                        <div class="col-sm order-3 order-sm-2">
                                            <div class="hstack gap-sm-1 align-items-center flex-wrap email-topbar-link">
                                                <div class="dropdown">
                                                    <button class="btn btn-ghost-secondary btn-icon btn-sm fs-16" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ri-more-2-fill align-bottom"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#" id="mark-all-read">Marquer tout comme lu</a>
                                                    </div>
                                                </div>
                                                <div class="alert alert-warning alert-dismissible unreadConversations-alert px-4 fade show " id="unreadConversations" role="alert">
                                                    No Unread Conversations
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- BULLE DE MESSAGE FIN-->


                                <!-- TABLE MESSAGERIE-->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card" id="leadsList">
                                            <div class="card-body">
                                                <div>
                                                    <div class="table-responsive table-card">
                                                        <table class="table align-middle" id="customerTable">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th scope="col" style="width: 50px;">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                                        </div>
                                                                    </th>

                                                                    <th class="sort" data-sort="name">Nom</th>
                                                                    <th class="sort" data-sort="company_name">Contenu</th>
                                                                    <th class="sort" data-sort="phone">Téléphone</th>
                                                                    <th class="sort" data-sort="location">Type de troc</th>
                                                                    <th class="sort" data-sort="date">Date</th>
                                                                    <th class="sort" data-sort="action">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="list form-check-all">
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="flex-shrink-0">
                                                                                <img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-xxs rounded-circle image_src object-cover">
                                                                            </div>
                                                                            <div class="flex-grow-1 ms-2 name">Junior Dev</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="company_name">Force Medicines</td>
                                                                    <td class="phone">(+228)90112233</td>
                                                                    <td class="location">Bien</td>
                                                                    <td class="date">07 Apr, 2021</td>
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Call">
                                                                                <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                                                    <i class="ri-phone-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                                                    <i class="ri-question-answer-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="javascript:void(0);"><i class="ri-eye-fill align-bottom text-muted"></i></a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                                                <a class="edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i></a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Delete">
                                                                                <a class="remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                    <i class="ri-delete-bin-fill align-bottom text-muted"></i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="noresult" style="display: none">
                                                            <div class="text-center">
                                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                                <p class="text-muted mb-0">We've searched more than 150+ leads We did not find any leads for you search.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end mt-3">
                                                        <div class="pagination-wrap hstack gap-2">
                                                            <a class="page-item pagination-prev disabled" href="#">
                                                                Previous
                                                            </a>
                                                            <ul class="pagination listjs-pagination mb-0"></ul>
                                                            <a class="page-item pagination-next" href="#">
                                                                Next
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-light p-3">
                                                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                            </div>
                                                            <form class="tablelist-form" autocomplete="off">
                                                                <div class="modal-body">
                                                                    <input type="hidden" id="id-field" />
                                                                    <div class="row g-3">
                                                                        <div class="col-lg-12">
                                                                            <div class="text-center">
                                                                                <div class="position-relative d-inline-block">
                                                                                    <div class="position-absolute bottom-0 end-0">
                                                                                        <label for="lead-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">
                                                                                            <div class="avatar-xs cursor-pointer">
                                                                                                <div class="avatar-title bg-light border rounded-circle text-muted">
                                                                                                    <i class="ri-image-fill"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                        </label>
                                                                                        <input class="form-control d-none" value="" id="lead-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                                                                                    </div>
                                                                                    <div class="avatar-lg p-1">
                                                                                        <div class="avatar-title bg-light rounded-circle">
                                                                                            <img src="assets/images/users/user-dummy-img.jpg" id="lead-img" class="avatar-md rounded-circle object-cover" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <h5 class="fs-13 mt-3">Lead Image</h5>
                                                                            </div>
                                                                            <div>
                                                                                <label for="leadname-field" class="form-label">Name</label>
                                                                                <input type="text" id="leadname-field" class="form-control" placeholder="Enter Name" required />
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-lg-12">
                                                                            <div>
                                                                                <label for="company_name-field" class="form-label">Company Name</label>
                                                                                <input type="text" id="company_name-field" class="form-control" placeholder="Enter company name" required />
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-lg-6">
                                                                            <div>
                                                                                <label for="leads_score-field" class="form-label">Leads Score</label>
                                                                                <input type="text" id="leads_score-field" class="form-control" placeholder="Enter lead score" required />
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-lg-6">
                                                                            <div>
                                                                                <label for="phone-field" class="form-label">Phone</label>
                                                                                <input type="text" id="phone-field" class="form-control" placeholder="Enter phone no" required />
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-lg-12">
                                                                            <div>
                                                                                <label for="location-field" class="form-label">Location</label>
                                                                                <input type="text" id="location-field" class="form-control" placeholder="Enter location" required />
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-lg-12">
                                                                            <div>
                                                                                <label for="taginput-choices" class="form-label">Tags</label>
                                                                                <select class="form-control" name="taginput-choices" id="taginput-choices" multiple>
                                                                                    <option value="Lead">Lead</option>
                                                                                    <option value="Partner">Partner</option>
                                                                                    <option value="Exiting">Exiting</option>
                                                                                    <option value="Long-term">Long-term</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <div>
                                                                                <label for="date-field" class="form-label">Created Date</label>
                                                                                <input type="date" id="date-field" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" placeholder="Select Date" required />
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                    </div>
                                                                    <!--end row-->
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <div class="hstack gap-2 justify-content-end">
                                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-success" id="add-btn">Add leads</button>
                                                                        <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end modal-->

                                                <!-- Modal -->
                                                <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-labelledby="deleteRecordLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                                            </div>
                                                            <div class="modal-body p-5 text-center">
                                                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                                                                <div class="mt-4 text-center">
                                                                    <h4 class="fs-semibold">You are about to delete a lead ?</h4>
                                                                    <p class="text-muted fs-14 mb-4 pt-1">Deleting your lead will remove all of your information from our database.</p>
                                                                    <div class="hstack gap-2 justify-content-center remove">

                                                                        <button class="btn btn-link link-success fw-medium text-decoration-none" id="deleteRecord-close" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                                                                        <button class="btn btn-danger" id="delete-record">Yes, Delete It!!</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end modal -->


                                                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                                                    <div class="offcanvas-header bg-light">
                                                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Leads Fliters</h5>
                                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                    </div>
                                                    <!--end offcanvas-header-->
                                                    <form action="#" class="d-flex flex-column justify-content-end h-100">
                                                        <div class="offcanvas-body">
                                                            <div class="mb-4">
                                                                <label for="datepicker-range" class="form-label text-muted text-uppercase fw-semibold mb-3">Date</label>
                                                                <input type="date" class="form-control" id="datepicker-range" data-provider="flatpickr" data-range="true" placeholder="Select date">
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="country-select" class="form-label text-muted text-uppercase fw-semibold mb-3">Country</label>
                                                                <select class="form-control" data-choices data-choices-multiple-remove="true" name="country-select" id="country-select" multiple>
                                                                    <option value="">Select country</option>
                                                                    <option value="Argentina">Argentina</option>
                                                                    <option value="Belgium">Belgium</option>
                                                                    <option value="Brazil" selected>Brazil</option>
                                                                    <option value="Colombia">Colombia</option>
                                                                    <option value="Denmark">Denmark</option>
                                                                    <option value="France">France</option>
                                                                    <option value="Germany">Germany</option>
                                                                    <option value="Mexico">Mexico</option>
                                                                    <option value="Russia">Russia</option>
                                                                    <option value="Spain">Spain</option>
                                                                    <option value="Syria">Syria</option>
                                                                    <option value="United Kingdom" selected>United Kingdom</option>
                                                                    <option value="United States of America">United States of America</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="status-select" class="form-label text-muted text-uppercase fw-semibold mb-3">Status</label>
                                                                <div class="row g-2">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                                            <label class="form-check-label" for="inlineCheckbox1">New Leads</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                            <label class="form-check-label" for="inlineCheckbox2">Old Leads</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                                                            <label class="form-check-label" for="inlineCheckbox3">Loss Leads</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                                                                            <label class="form-check-label" for="inlineCheckbox4">Follow Up</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="leadscore" class="form-label text-muted text-uppercase fw-semibold mb-3">Lead Score</label>
                                                                <div class="row g-2 align-items-center">
                                                                    <div class="col-lg">
                                                                        <input type="number" class="form-control" id="leadscore" placeholder="0">
                                                                    </div>
                                                                    <div class="col-lg-auto">
                                                                        To
                                                                    </div>
                                                                    <div class="col-lg">
                                                                        <input type="number" class="form-control" id="leadscore" placeholder="0">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <label for="leads-tags" class="form-label text-muted text-uppercase fw-semibold mb-3">Tags</label>
                                                                <div class="row g-3">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="marketing" value="marketing">
                                                                            <label class="form-check-label" for="marketing">Marketing</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="management" value="management">
                                                                            <label class="form-check-label" for="management">Management</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="business" value="business">
                                                                            <label class="form-check-label" for="business">Business</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="investing" value="investing">
                                                                            <label class="form-check-label" for="investing">Investing</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="partner" value="partner">
                                                                            <label class="form-check-label" for="partner">Partner</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="lead" value="lead">
                                                                            <label class="form-check-label" for="lead">Leads</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="sale" value="sale">
                                                                            <label class="form-check-label" for="sale">Sale</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="owner" value="owner">
                                                                            <label class="form-check-label" for="owner">Owner</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="banking" value="banking">
                                                                            <label class="form-check-label" for="banking">Banking</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="banking" value="banking">
                                                                            <label class="form-check-label" for="banking">Exiting</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="banking" value="banking">
                                                                            <label class="form-check-label" for="banking">Finance</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="banking" value="banking">
                                                                            <label class="form-check-label" for="banking">Fashion</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end offcanvas-body-->
                                                        <div class="offcanvas-footer border-top p-3 text-center hstack gap-2">
                                                            <button class="btn btn-light w-100">Clear Filter</button>
                                                            <button type="submit" class="btn btn-success w-100">Filters</button>
                                                        </div>
                                                        <!--end offcanvas-footer-->
                                                    </form>
                                                </div>
                                                <!--end offcanvas-->

                                            </div>
                                        </div>

                                    </div>
                                    <!--end col-->
                                </div>
                                <!-- FIN TABLE MESSAGERIE-->


                                <!-- <div class="tab-content">
                                    <div class="tab-pane fade show active" id="pills-primary" role="tabpanel" aria-labelledby="pills-primary-tab">
                                        <div class="message-list-content mx-n4 px-4 message-list-scroll" data-simplebar>
                                            <ul class="message-list" id="mail-list"></ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-social" role="tabpanel" aria-labelledby="pills-social-tab">
                                        <div class="message-list-content mx-n4 px-4 message-list-scroll" data-simplebar>
                                            <ul class="message-list" id="social-mail-list"></ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-promotions" role="tabpanel" aria-labelledby="pills-promotions-tab">
                                        <div class="message-list-content mx-n4 px-4 message-list-scroll" data-simplebar>
                                            <ul class="message-list" id="promotions-mail-list"></ul>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <!-- end email-content -->

                        <div class="email-detail-content">
                            <div class="p-4 d-flex flex-column h-100">
                                <div class="pb-4 border-bottom border-bottom-dashed">
                                    <div class="row">
                                        <div class="col">
                                            <div class="">
                                                    <button type="button" class="btn btn-soft-danger btn-icon btn-sm fs-16 close-btn-email" id="close-btn-email">
                                                    <i class="ri-close-fill align-bottom"></i>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end email-detail-content -->
                    </div>
                    <!-- end email wrapper -->

                    <div class="email-chat-detail" id="emailchat-detailElem">
                        <div class="card mb-0">
                            <div class="card-header align-items-center d-flex bg-primary text-white-50">
                                <div class="flex-grow-1">
                                        <h5 class="fs-13 text-white mb-1 profile-username"></h5>
                                    <p class="mb-0 fs-12 lh-1">En ligne</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="mt-n3 me-n3">
                                        <button type="button" class="btn btn-link text-white fs-16 text-decoration-none" id="emailchat-btn-close"><i class="ri-close-fill"></i></button>
                                    </div>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body p-0">
                                <div id="users-chat">
                                    <div class="chat-conversation p-3" id="chat-conversation" data-simplebar style="height: 250px;">
                                        <ul class="list-unstyled chat-conversation-list chat-sm" id="users-conversation">
                                            <li class="chat-list left">
                                                <div class="conversation-list">
                                                    <div class="chat-avatar">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="">
                                                    </div>
                                                    <div class="user-chat-content">
                                                        <div class="ctext-wrap">
                                                            <div class="ctext-wrap-content">
                                                                <p class="mb-0 ctext-content">Good morning 😊</p>
                                                            </div>
                                                            <div class="dropdown align-self-start message-box-drop">
                                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="ri-more-2-fill"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                                    <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                                    <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name"><small class="text-muted time">09:07 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- chat-list -->

                                            <li class="chat-list right">
                                                <div class="conversation-list">
                                                    <div class="user-chat-content">
                                                        <div class="ctext-wrap">
                                                            <div class="ctext-wrap-content">
                                                                <p class="mb-0 ctext-content">Good morning, How are you? What about our next meeting?</p>
                                                            </div>
                                                            <div class="dropdown align-self-start message-box-drop">
                                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="ri-more-2-fill"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                                    <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                                    <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name"><small class="text-muted time">09:08 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- chat-list -->

                                            <li class="chat-list left">
                                                <div class="conversation-list">
                                                    <div class="chat-avatar">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="">
                                                    </div>
                                                    <div class="user-chat-content">
                                                        <div class="ctext-wrap">
                                                            <div class="ctext-wrap-content">
                                                                <p class="mb-0 ctext-content">Yeah everything is fine. Our next meeting tomorrow at 10.00 AM</p>
                                                            </div>
                                                            <div class="dropdown align-self-start message-box-drop">
                                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="ri-more-2-fill"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                                    <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                                    <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name"><small class="text-muted time">09:10 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- chat-list -->

                                            <li class="chat-list right">
                                                <div class="conversation-list">
                                                    <div class="user-chat-content">
                                                        <div class="ctext-wrap">
                                                            <div class="ctext-wrap-content">
                                                                <p class="mb-0 ctext-content">Wow that's great</p>
                                                            </div>
                                                            <div class="dropdown align-self-start message-box-drop">
                                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="ri-more-2-fill"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                                    <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                                    <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name"><small class="text-muted time">09:12 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- chat-list -->

                                        </ul>
                                    </div>
                                </div>

                                <div class="border-top border-top-dashed">
                                    <div class="row g-2 mx-3 mt-2 mb-3">
                                        <div class="col">
                                            <div class="position-relative">
                                                <input type="text" class="form-control border-light bg-light" placeholder="Enter Message...">
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-info"><i class="mdi mdi-send"></i></button>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div>
                            </div><!-- end cardbody -->
                        </div>
                    </div>
                    <!-- end email chat detail -->
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
