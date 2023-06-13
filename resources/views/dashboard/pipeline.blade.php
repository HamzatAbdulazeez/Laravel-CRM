@extends('layouts.dashboard-frontend')

@section('page-content')
<!-- Main Content -->
<div class="hk-pg-wrapper pb-0">
    <div class="hk-pg-body py-0">
        <div class="taskboardapp-wrap">
            <div class="taskboardapp-content ps-0">
                <div class="taskboardapp-detail-wrap">
                    <header class="taskboard-header">
                        <div class="d-flex align-items-center flex-1">
                            <a class="taskboardapp-title link-dark" href="#">
                                <h1>
                                    Sales Pipeline
                                </h1>
                            </a>
                            <button type="button" class="btn btn-primary ms-3 d-xxl-inline-block d-none flex-shrink-0" data-bs-toggle="modal" data-bs-target="#add_new_deal">Add Deal</button>
                        </div>
                        <div class="d-md-flex flex-shrink-0 mx-3 d-none">
                            <div class="d-flex align-items-center"><span class="d-md-inline d-none">Pipeline
                                    Value:</span><span class="text-dark fs-5 fw-medium ps-2">$23,706</span>
                            </div>
                            <div class="v-separator"></div>
                            <div class="d-flex align-items-center"><span class="d-md-inline d-none">Total
                                    Value:</span><span class="text-dark fs-5 fw-medium ps-2">$100,000</span>
                            </div>
                        </div>
                        <div class="taskboard-options-wrap flex-1 justify-content-end">
                            <form class="leave-search  d-lg-inline-block d-none" role="search">
                                <input type="text" class="form-control" placeholder="Search cards">
                            </form>
                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Collapse">
                                <span class="icon">
                                    <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                    <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                                </span>
                            </a>
                        </div>
                    </header>
                    <div class="taskboard-body taskboard-body-alt">
                        <div>
                            <div data-simplebar class="tasklist-scroll position-relative">
                                <div id="tasklist_wrap" class="tasklist-wrap">
                                    <div class="card card-simple card-flush spipeline-list">
                                        <div class="card-header card-header-action">
                                            <div class="spipeline-handle">
                                                <h6 class="text-uppercase fw-bold mb-0">Lead In</h6>
                                                <div class="card-action-wrap">
                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
                                                    <div role="menu" class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-tasklist" href="#" data-bs-toggle="modal" data-bs-target="#edit_task_list">Edit</a>
                                                        <a class="dropdown-item delete-tasklist" href="#">Delete</a>
                                                        <a class="dropdown-item clear-tasklist" href="#">Clear
                                                            All</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <span>
                                                    <span class="overall-estimation">
                                                        $123,453
                                                    </span>
                                                    <span class="spipeline-dot-sep">●</span>
                                                    <span class="lead-count">
                                                        11 Leads
                                                    </span>
                                                </span>
                                            </div>
                                            <button class="btn btn-light btn-block text-primary btn-add-newtask" data-bs-toggle="modal" data-bs-target="#add_new_deal"><span><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span><span class="btn-text">Add Card</span></span></button>
                                        </div>
                                        <div class="card-body">
                                            <div id="i1" class="tasklist-cards-wrap">
                                                <div class="card card-border spipeline-card">
                                                    <div class="card-body">
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-rounded btn-light dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="icon"><span class="feather-icon"><i data-feather="chevron-right"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-icon-text dropdown-menu-end spipeline-dropdown">
                                                                <h6 class="dropdown-header text-muted">Scheduled
                                                                    activity</h6>
                                                                <a class="dropdown-item" href="#">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-3 position-relative text-disabled">
                                                                            <i class="ri-checkbox-blank-circle-line"></i>
                                                                        </div>
                                                                        <div class="mw-175p">
                                                                            <div class="h6 mb-0 text-truncate">
                                                                                Call arranged with James</div>
                                                                            <p class="dropdown-item-text text-truncate text-danger">
                                                                                Yesterday 4:30 pm</p>
                                                                        </div>
                                                                        <div class="avatar avatar-icon avatar-xxs avatar-soft-danger avatar-rounded ms-3">
                                                                            <span class="initial-wrap">
                                                                                <span class="feather-icon"><i data-feather="phone"></i></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-3 position-relative text-disabled">
                                                                            <i class="ri-checkbox-blank-circle-line"></i>
                                                                        </div>
                                                                        <div class="mw-175p">
                                                                            <div class="h6 mb-0 text-truncate">
                                                                                Call arranged with Locus</div>
                                                                            <p class="dropdown-item-text text-truncate">
                                                                                21 Jan 20, 12:40 pm</p>
                                                                        </div>
                                                                        <div class="avatar avatar-icon avatar-xxs avatar-light avatar-rounded ms-3">
                                                                            <span class="initial-wrap">
                                                                                <span class="feather-icon"><i data-feather="phone"></i></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-3 position-relative text-disabled">
                                                                            <i class="ri-checkbox-blank-circle-line"></i>
                                                                        </div>
                                                                        <div class="mw-175p">
                                                                            <div class="h6 mb-0 text-truncate">
                                                                                Demo arranged with Locus strong
                                                                            </div>
                                                                            <p class="dropdown-item-text text-truncate">
                                                                                9 Nov 20, 9:40 am</p>
                                                                        </div>
                                                                        <div class="avatar avatar-icon avatar-xxs avatar-soft-primary avatar-rounded ms-3">
                                                                            <span class="initial-wrap">
                                                                                <span class="feather-icon"><i data-feather="monitor"></i></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="media">
                                                            <div class="media-head">
                                                                <div class="avatar avatar-logo avatar-rounded">
                                                                    <span class="initial-wrap">
                                                                        <img src="{{URL::asset('dist/img/symbol-avatar-14.png')}}" alt="logo">
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="brand-name">Intercom</div>
                                                                <div class="price-estimation">$1,025</div>
                                                                <div class="brand-cat">Chatbot</div>
                                                                <div class="media align-items-center">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-xs avatar-rounded d-4 d-flex">
                                                                            <img src="{{URL::asset('dist/img/avatar13.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <p>a month ago</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border spipeline-card">
                                                    <div class="card-body">
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-rounded btn-primary dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="icon"><span class="feather-icon"><i data-feather="chevron-right"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-icon-text dropdown-menu-end spipeline-dropdown">
                                                                <h6 class="dropdown-header text-muted">Scheduled
                                                                    activity</h6>
                                                                <a class="dropdown-item" href="#">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-3 position-relative text-disabled">
                                                                            <i class="ri-checkbox-blank-circle-line"></i>
                                                                        </div>
                                                                        <div class="mw-175p">
                                                                            <div class="h6 mb-0 text-truncate">
                                                                                Call arranged with James</div>
                                                                            <p class="dropdown-item-text text-truncate text-danger">
                                                                                Yesterday 4:30 pm</p>
                                                                        </div>
                                                                        <div class="avatar avatar-icon avatar-xxs avatar-soft-danger avatar-rounded ms-3">
                                                                            <span class="initial-wrap">
                                                                                <span class="feather-icon"><i data-feather="phone"></i></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-3 position-relative text-disabled">
                                                                            <i class="ri-checkbox-blank-circle-line"></i>
                                                                        </div>
                                                                        <div class="mw-175p">
                                                                            <div class="h6 mb-0 text-truncate">
                                                                                Call arranged with Locus</div>
                                                                            <p class="dropdown-item-text text-truncate">
                                                                                21 Jan 20, 12:40 pm</p>
                                                                        </div>
                                                                        <div class="avatar avatar-icon avatar-xxs avatar-light avatar-rounded ms-3">
                                                                            <span class="initial-wrap">
                                                                                <span class="feather-icon"><i data-feather="phone"></i></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-3 position-relative text-disabled">
                                                                            <i class="ri-checkbox-blank-circle-line"></i>
                                                                        </div>
                                                                        <div class="mw-175p">
                                                                            <div class="h6 mb-0 text-truncate">
                                                                                Demo arranged with Locus strong
                                                                            </div>
                                                                            <p class="dropdown-item-text text-truncate">
                                                                                9 Nov 20, 9:40 am</p>
                                                                        </div>
                                                                        <div class="avatar avatar-icon avatar-xxs avatar-soft-primary avatar-rounded ms-3">
                                                                            <span class="initial-wrap">
                                                                                <span class="feather-icon"><i data-feather="monitor"></i></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="media">
                                                            <div class="media-head">
                                                                <div class="avatar avatar-rounded">
                                                                    <img src="{{URL::asset('dist/img/logo-avatar-2.png')}}" alt="user" class="avatar-img">
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="brand-name">Swiggy</div>
                                                                <div class="price-estimation">$2,456</div>
                                                                <div class="brand-cat">Food Order</div>
                                                                <div class="media align-items-center">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-xs avatar-rounded d-4 d-flex">
                                                                            <img src="{{URL::asset('dist/img/avatar2.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <p>9 days</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-simple card-flush spipeline-list">
                                        <div class="card-header card-header-action">
                                            <div class="spipeline-handle">
                                                <h6 class="text-uppercase fw-bold mb-0">follow up</h6>
                                                <div class="card-action-wrap">
                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
                                                    <div role="menu" class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-tasklist" href="#" data-bs-toggle="modal" data-bs-target="#edit_task_list">Edit</a>
                                                        <a class="dropdown-item delete-tasklist" href="#">Delete</a>
                                                        <a class="dropdown-item clear-tasklist" href="#">Clear
                                                            All</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <span>
                                                    <span class="overall-estimation">
                                                        $5,268
                                                    </span>
                                                    <span class="spipeline-dot-sep">●</span>
                                                    <span class="lead-count">
                                                        7 Leads
                                                    </span>
                                                </span>
                                            </div>
                                            <button class="btn btn-light btn-block text-primary btn-add-newtask" data-bs-toggle="modal" data-bs-target="#add_new_deal"><span><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span><span class="btn-text">Add Card</span></span></button>
                                        </div>
                                        <div class="card-body">
                                            <div id="i4" class="tasklist-cards-wrap">
                                                <div class="card card-border spipeline-card">
                                                    <div class="card-body">
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-rounded btn-light dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="icon"><span class="feather-icon"><i data-feather="chevron-right"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-icon-text dropdown-menu-end spipeline-dropdown">
                                                                <h6 class="dropdown-header text-muted">Scheduled
                                                                    activity</h6>
                                                                <a class="dropdown-item" href="#">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-3 position-relative text-disabled">
                                                                            <i class="ri-checkbox-blank-circle-line"></i>
                                                                        </div>
                                                                        <div class="mw-175p">
                                                                            <div class="h6 mb-0 text-truncate">
                                                                                Call arranged with James</div>
                                                                            <p class="dropdown-item-text text-truncate text-danger">
                                                                                Yesterday 4:30 pm</p>
                                                                        </div>
                                                                        <div class="avatar avatar-icon avatar-xxs avatar-soft-danger avatar-rounded ms-3">
                                                                            <span class="initial-wrap">
                                                                                <span class="feather-icon"><i data-feather="phone"></i></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-3 position-relative text-disabled">
                                                                            <i class="ri-checkbox-blank-circle-line"></i>
                                                                        </div>
                                                                        <div class="mw-175p">
                                                                            <div class="h6 mb-0 text-truncate">
                                                                                Call arranged with Locus</div>
                                                                            <p class="dropdown-item-text text-truncate">
                                                                                21 Jan 20, 12:40 pm</p>
                                                                        </div>
                                                                        <div class="avatar avatar-icon avatar-xxs avatar-light avatar-rounded ms-3">
                                                                            <span class="initial-wrap">
                                                                                <span class="feather-icon"><i data-feather="phone"></i></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-3 position-relative text-disabled">
                                                                            <i class="ri-checkbox-blank-circle-line"></i>
                                                                        </div>
                                                                        <div class="mw-175p">
                                                                            <div class="h6 mb-0 text-truncate">
                                                                                Demo arranged with Locus strong
                                                                            </div>
                                                                            <p class="dropdown-item-text text-truncate">
                                                                                9 Nov 20, 9:40 am</p>
                                                                        </div>
                                                                        <div class="avatar avatar-icon avatar-xxs avatar-soft-primary avatar-rounded ms-3">
                                                                            <span class="initial-wrap">
                                                                                <span class="feather-icon"><i data-feather="monitor"></i></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="media">
                                                            <div class="media-head">
                                                                <div class="avatar avatar-soft-danger avatar-rounded">
                                                                    <span class="initial-wrap">C</span>
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="brand-name">Challenger</div>
                                                                <div class="price-estimation">$156</div>
                                                                <div class="brand-cat">Chatbot</div>
                                                                <div class="media align-items-center">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-xs avatar-rounded d-4 d-flex">
                                                                            <img src="{{URL::asset('dist/img/avatar3.jpg')}}
" alt="user" class="avatar-img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <p>a month ago</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border spipeline-card">
                                                    <div class="card-body">
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-rounded btn-primary dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="icon"><span class="feather-icon"><i data-feather="chevron-right"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-icon-text dropdown-menu-end spipeline-dropdown">
                                                                <h6 class="dropdown-header text-muted">Scheduled
                                                                    activity</h6>
                                                                <a class="dropdown-item" href="#">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-3 position-relative text-disabled">
                                                                            <i class="ri-checkbox-blank-circle-line"></i>
                                                                        </div>
                                                                        <div class="mw-175p">
                                                                            <div class="h6 mb-0 text-truncate">
                                                                                Call arranged with James</div>
                                                                            <p class="dropdown-item-text text-truncate text-danger">
                                                                                Yesterday 4:30 pm</p>
                                                                        </div>
                                                                        <div class="avatar avatar-icon avatar-xxs avatar-soft-danger avatar-rounded ms-3">
                                                                            <span class="initial-wrap">
                                                                                <span class="feather-icon"><i data-feather="phone"></i></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-3 position-relative text-disabled">
                                                                            <i class="ri-checkbox-blank-circle-line"></i>
                                                                        </div>
                                                                        <div class="mw-175p">
                                                                            <div class="h6 mb-0 text-truncate">
                                                                                Call arranged with Locus</div>
                                                                            <p class="dropdown-item-text text-truncate">
                                                                                21 Jan 20, 12:40 pm</p>
                                                                        </div>
                                                                        <div class="avatar avatar-icon avatar-xxs avatar-light avatar-rounded ms-3">
                                                                            <span class="initial-wrap">
                                                                                <span class="feather-icon"><i data-feather="phone"></i></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-3 position-relative text-disabled">
                                                                            <i class="ri-checkbox-blank-circle-line"></i>
                                                                        </div>
                                                                        <div class="mw-175p">
                                                                            <div class="h6 mb-0 text-truncate">
                                                                                Demo arranged with Locus strong
                                                                            </div>
                                                                            <p class="dropdown-item-text text-truncate">
                                                                                9 Nov 20, 9:40 am</p>
                                                                        </div>
                                                                        <div class="avatar avatar-icon avatar-xxs avatar-soft-primary avatar-rounded ms-3">
                                                                            <span class="initial-wrap">
                                                                                <span class="feather-icon"><i data-feather="monitor"></i></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="media">
                                                            <div class="media-head">
                                                                <div class="avatar avatar-soft-success avatar-rounded">
                                                                    <span class="initial-wrap">A</span>
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="brand-name">Atmanirbhar</div>
                                                                <div class="price-estimation">$2,456</div>
                                                                <div class="brand-cat">Food Order</div>
                                                                <div class="media align-items-center">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-xs avatar-rounded d-4 d-flex">
                                                                            <img src="{{URL::asset('dist/img/avatar13.jpg')}}
" alt="user" class="avatar-img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <p>9 days</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card card-simple card-border spipeline-list create-new-list">
                                        <div class="card-header card-header-action">
                                            <button class="btn btn-light btn-block bg-transparent border-0 text-primary" data-bs-toggle="modal" data-bs-target="#add_task_list"><span><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span><span class="btn-text">Add New List</span></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add New Deal -->
                <div id="add_new_deal" class="modal fade add-new-task" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h5 class="mb-4">Add New Deal</h5>
                                <form>
                                    <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Name</label>
                                                <input class="form-control task-name" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Start Date</label>
                                                <input class="form-control" name="single-date-pick" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">End Date</label>
                                                <input class="form-control" name="single-date-pick" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Add Deal IN</label>
                                                <select class="form-control custom-select">
                                                    <option selected="">Choose Category</option>
                                                    <option value="1">Lead IN</option>
                                                    <option value="2">Opportunity</option>
                                                    <option value="3">Proposed</option>
                                                    <option value="4">Follow Up</option>
                                                    <option value="5">Conversion</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Note/Description</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="dropify-square">
                                                    <input type="file" class="dropify-1" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-inline">
                                                <div class="form-group mt-3">
                                                    <label class="form-label">Set priority:</label>
                                                    <div class="form-check form-check-inline">
                                                        <div class="form-check form-check-primary">
                                                            <input type="radio" id="customRadioc2" name="customRadioc2" class="form-check-input" checked>
                                                            <label class="form-check-label" for="customRadioc2">High</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <div class="form-check form-check-primary">
                                                            <input type="radio" id="customRadioc3" name="customRadioc2" class="form-check-input">
                                                            <label class="form-check-label" for="customRadioc3">Medium</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <div class="form-check form-check-primary">
                                                            <input type="radio" id="customRadioc4" name="customRadioc2" class="form-check-input">
                                                            <label class="form-check-label" for="customRadioc4">Low</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer align-items-center">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary btn-add-task">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Add New Deal -->

                <!-- Add Task List -->
                <div id="add_task_list" class="modal fade add-tasklist-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h5 class="mb-4">Add New List</h5>
                                <form>
                                    <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Name</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer align-items-center">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary btn-add-tasklist">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Add Task List -->

                <!-- Edit Task List -->
                <div id="edit_task_list" class="modal fade edit-tasklist-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h5 class="mb-4">Edit Task List</h5>
                                <form>
                                    <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Name</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer align-items-center">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary btn-edit-tasklist">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Edit Task List -->
            </div>
        </div>
        <!-- <div class="hk-fixed-footer">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center h-80p">
                    <button type="button" class="btn btn-danger w-200p me-3">lost</button>
                    <button type="button" class="btn btn-primary w-200p">win</button>
                </div>
            </div>
        </div> -->
    </div>
</div>
<!-- /Main Content -->
@endsection
