@extends('layouts.dashboard-frontend')

@section('page-content')
<div class="hk-pg-wrapper pb-0">
    <!-- Page Body -->
    <div class="hk-pg-body py-0">
        <div class="taskboardapp-wrap">
            <nav class="taskboardapp-sidebar">
                <div data-simplebar class="nicescroll-bar">
                    <div class="menu-content-wrap">
                        <button class="btn btn-primary btn-rounded btn-block mb-4" data-bs-toggle="modal" data-bs-target="#add_new_board">Add New Board</button>
                        <div class="menu-group">
                            <ul class="nav nav-light navbar-nav flex-column">
                                <li class="nav-item active">
                                    <a class="nav-link" href="javascript:void(0);">
                                        <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="layout"></i></span></span>
                                        <span class="nav-link-text">All Boards</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);">
                                        <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="star"></i></span></span>
                                        <span class="nav-link-text">Stared Boards</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);">
                                        <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="lock"></i></span></span>
                                        <span class="nav-link-text">Private Boards</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);">
                                        <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="user-check"></i></span></span>
                                        <span class="nav-link-text">Public Boards</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);">
                                        <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="trash-2"></i></span></span>
                                        <span class="nav-link-text">Deleted</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="separator separator-light"></div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="title-sm text-primary mb-0">Favourite Boards</div>
                            <a href="#" class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="modal" data-bs-target="#add_fav_board"><span class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add Board"><span class="feather-icon"><i data-feather="plus"></i></span></span></a>
                        </div>
                        <div class="menu-group">
                            <ul class="nav nav-light navbar-nav flex-column">
                                <li class="nav-item">
                                    <div>
                                        <div class="media d-flex align-items-center">
                                            <div class="media-head me-2">
                                                <div class="avatar avatar-xs avatar-primary avatar-rounded">
                                                    <span class="initial-wrap">J</span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="name">Jampack</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <button class="btn btn-sm btn-icon btn-rounded btn-flush-light flush-soft-hover"><span class="icon"><span class="feather-icon"><i data-feather="lock"></i></span></span></button>
                                            <button class="btn btn-sm btn-icon btn-rounded btn-flush-light flush-soft-hover"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></button>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div>
                                        <div class="media d-flex align-items-center">
                                            <div class="media-head me-2">
                                                <div class="avatar avatar-xs avatar-pink avatar-rounded">
                                                    <span class="initial-wrap">H</span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="name">Hencework</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <button class="btn btn-sm btn-icon btn-rounded btn-flush-light flush-soft-hover"><span class="icon"><span class="feather-icon"><i data-feather="globe"></i></span></span></button>
                                            <button class="btn btn-sm btn-icon btn-rounded btn-flush-light flush-soft-hover"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="alert alert-warning mt-5" role="alert">
                            <h6 class="heading-wth-icon alert-heading"><span class="head-icon"><span class="feather-icon"><i data-feather="zap-off"></i></span></span>Trial
                                Ends on 14 Jan</h6>
                            <p class="fs-7">Last 3 days left for your trial to end. Renew now to stay connected.
                            </p>
                        </div>
                    </div>
                </div>
                <!--Sidebar Fixnav-->
                <div class="taskboardapp-fixednav">
                    <div class="hk-toolbar">
                        <ul class="nav nav-light">
                            <li class="nav-item nav-link">
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Settings" href="#"><span class="icon"><span class="feather-icon"><i data-feather="settings"></i></span></span></a>
                            </li>
                            <li class="nav-item nav-link">
                                <a href="#" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Archive"><span class="icon"><span class="feather-icon"><i data-feather="archive"></i></span></span></a>
                            </li>
                            <li class="nav-item nav-link">
                                <a href="#" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Help"><span class="icon"><span class="feather-icon"><i data-feather="book"></i></span></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/ Sidebar Fixnav-->
            </nav>

            <div class="taskboardapp-content">
                <div class="taskboardapp-detail-wrap">
                    <header class="taskboard-header">
                        <ul class="nav nav-justified nav-light nav-tabs nav-segmented-tabs active-theme mx-auto w-350p">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#tab_boards">
                                    <span class="nav-link-text">Boards</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab_team">
                                    <span class="nav-link-text badge-on-text">Team</span>
                                </a>
                            </li>
                        </ul>
                        <div class="hk-sidebar-togglable"></div>
                    </header>
                    <div class="taskboard-body">
                        <div data-simplebar class="nicescroll-bar">
                            <div class="container-fluid">
                                <div class="row justify-content-center board-team-wrap">
                                    <div class="col-md-8 col-sm-12">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tab_boards">
                                                <h5 class="mb-5">Frequent Boards</h5>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="card board-card card-border">
                                                            <div class="card-body">
                                                                <div class="media align-items-center">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-sm avatar-pink">
                                                                            <span class="initial-wrap">J</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <span>Jampack</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer text-muted justify-content-between">
                                                                <div>
                                                                    <div class="avatar-group avatar-group-sm avatar-group-overlapped me-3">
                                                                        <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Katharine">
                                                                            <img src="{{URL::asset('dist/img/avatar8.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                        <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dean">
                                                                            <img src="{{URL::asset('dist/img/avatar13.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                        <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Morgan">
                                                                            <img src="{{URL::asset('dist/img/avatar2.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                        <div class="avatar avatar-soft-danger avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Tooltip text">
                                                                            <span class="initial-wrap">3+</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <p class="p-xs me-2">Updated 25 min ago</p>
                                                                    <div class="flex-shrink-0">
                                                                        <a class="btn btn-xs btn-icon btn-flush-primary btn-rounded flush-soft-hover" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Public"><span class="icon"><span class="feather-icon"><i data-feather="globe"></i></span></span></a>
                                                                        <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
                                                                        <div role="menu" class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#">Edit</a>
                                                                            <a class="dropdown-item" href="#">Copy Link</a>
                                                                            <a class="dropdown-item" href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="card board-card card-border">
                                                            <div class="card-body">
                                                                <div class="media align-items-center">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-sm avatar-pumpkin">
                                                                            <span class="initial-wrap">A</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <span>Angular - Jampack</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer text-muted justify-content-between">
                                                                <div>
                                                                    <div class="avatar-group avatar-group-sm avatar-group-overlapped me-3">
                                                                        <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Katharine">
                                                                            <img src="{{URL::asset('dist/img/avatar9.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                        <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dean">
                                                                            <img src="{{URL::asset('dist/img/avatar13.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <p class="p-xs me-2">Updated 5 min ago</p>
                                                                    <div class="flex-shrink-0">
                                                                        <a class="btn btn-xs btn-icon btn-flush-primary btn-rounded flush-soft-hover" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Public"><span class="icon"><span class="feather-icon"><i data-feather="globe"></i></span></span></a>
                                                                        <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
                                                                        <div role="menu" class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#">Edit</a>
                                                                            <a class="dropdown-item" href="#">Copy Link</a>
                                                                            <a class="dropdown-item" href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center mb-5">
                                                    <h5 class="mb-0">All Boards</h5>
                                                    <button class="btn btn-light btn-icon"><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span></button>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="card board-card card-border">
                                                            <div class="card-body">
                                                                <div class="media align-items-center">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-sm avatar-violet">
                                                                            <span class="initial-wrap">R</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <span>React - Jampack</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer text-muted justify-content-between">
                                                                <div>
                                                                    <div class="avatar-group avatar-group-sm avatar-group-overlapped me-3">
                                                                        <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Katharine">
                                                                            <img src="{{URL::asset('dist/img/avatar10.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                        <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dean">
                                                                            <img src="{{URL::asset('dist/img/avatar13.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                        <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Morgan">
                                                                            <img src="{{URL::asset('dist/img/avatar2.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                        <div class="avatar avatar-soft-danger avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Tooltip text">
                                                                            <span class="initial-wrap">4+</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <p class="p-xs me-2">Updated Yesterday</p>
                                                                    <div class="flex-shrink-0">
                                                                        <a class="btn btn-xs btn-icon btn-flush-primary btn-rounded flush-soft-hover" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Public"><span class="icon"><span class="feather-icon"><i data-feather="globe"></i></span></span></a>
                                                                        <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
                                                                        <div role="menu" class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#">Edit</a>
                                                                            <a class="dropdown-item" href="#">Copy Link</a>
                                                                            <a class="dropdown-item" href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="card board-card card-border">
                                                            <div class="card-body">
                                                                <div class="media align-items-center">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-sm avatar-orange">
                                                                            <span class="initial-wrap">G</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <span>Griffin</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer text-muted justify-content-between">
                                                                <div>
                                                                    <div class="avatar-group avatar-group-sm avatar-group-overlapped me-3">
                                                                        <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Katharine">
                                                                            <img src="dist/img/avatar11.jpg" alt="user" class="avatar-img">
                                                                        </div>
                                                                        <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dean">
                                                                            <img src="{{URL::asset('dist/img/avatar8.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                        <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Morgan">
                                                                            <img src="dist/img/avatar7.jpg" alt="user" class="avatar-img">
                                                                        </div>
                                                                        <div class="avatar avatar-soft-danger avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Tooltip text">
                                                                            <span class="initial-wrap">W</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <p class="p-xs me-2">Updated 10 min ago</p>
                                                                    <div class="flex-shrink-0">
                                                                        <a class="btn btn-xs btn-icon btn-flush-primary btn-rounded flush-soft-hover" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Public"><span class="icon"><span class="feather-icon"><i data-feather="globe"></i></span></span></a>
                                                                        <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
                                                                        <div role="menu" class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#">Edit</a>
                                                                            <a class="dropdown-item" href="#">Copy Link</a>
                                                                            <a class="dropdown-item" href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="card board-card card-border">
                                                            <div class="card-body">
                                                                <div class="media align-items-center">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-sm avatar-primary">
                                                                            <span class="initial-wrap">P</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <span>Pangong</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer text-muted justify-content-between">
                                                                <div>
                                                                    <div class="avatar-group avatar-group-sm avatar-group-overlapped me-3">
                                                                        <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Katharine">
                                                                            <img src="{{URL::asset('dist/img/avatar8.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                        <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dean">
                                                                            <img src="{{URL::asset('dist/img/avatar13.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <p class="p-xs me-2">Updated 1 hour ago</p>
                                                                    <div class="flex-shrink-0">
                                                                        <a class="btn btn-xs btn-icon btn-flush-primary btn-rounded flush-soft-hover" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Public"><span class="icon"><span class="feather-icon"><i data-feather="globe"></i></span></span></a>
                                                                        <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
                                                                        <div role="menu" class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#">Edit</a>
                                                                            <a class="dropdown-item" href="#">Copy Link</a>
                                                                            <a class="dropdown-item" href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="card board-card card-border">
                                                            <div class="card-body">
                                                                <div class="media align-items-center">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-sm avatar-info">
                                                                            <span class="initial-wrap">D</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <span>Doodle</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer text-muted justify-content-between">
                                                                <div>
                                                                    <div class="avatar-group avatar-group-sm avatar-group-overlapped me-3">
                                                                        <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Katharine">
                                                                            <img src="{{URL::asset('dist/img/avatar9.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                        <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dean">
                                                                            <img src="{{URL::asset('dist/img/avatar10.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                        <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Morgan">
                                                                            <img src="{{URL::asset('dist/img/avatar11.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                        <div class="avatar avatar-soft-danger avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Tooltip text">
                                                                            <span class="initial-wrap">3+</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <p class="p-xs me-2">Updated 20 min ago</p>
                                                                    <div class="flex-shrink-0">
                                                                        <a class="btn btn-xs btn-icon btn-flush-primary btn-rounded flush-soft-hover" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Public"><span class="icon"><span class="feather-icon"><i data-feather="globe"></i></span></span></a>
                                                                        <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
                                                                        <div role="menu" class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#">Edit</a>
                                                                            <a class="dropdown-item" href="#">Copy Link</a>
                                                                            <a class="dropdown-item" href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="card board-card card-border">
                                                            <div class="card-body">
                                                                <div class="media align-items-center">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-sm avatar-pink">
                                                                            <span class="initial-wrap">P</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <span>Pogody</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer text-muted justify-content-between">
                                                                <div>
                                                                    <div class="avatar-group avatar-group-sm avatar-group-overlapped me-3">
                                                                        <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Katharine">
                                                                            <img src="{{URL::asset('dist/img/avatar5.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                        <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dean">
                                                                            <img src="{{URL::asset('dist/img/avatar6.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                        <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Morgan">
                                                                            <img src="{{URL::asset('dist/img/avatar7.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                        <div class="avatar avatar-soft-danger avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Tooltip text">
                                                                            <span class="initial-wrap">5+</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <p class="p-xs me-2">Updated 2 days ago</p>
                                                                    <div class="flex-shrink-0">
                                                                        <a class="btn btn-xs btn-icon btn-flush-primary btn-rounded flush-soft-hover" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Public"><span class="icon"><span class="feather-icon"><i data-feather="globe"></i></span></span></a>
                                                                        <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
                                                                        <div role="menu" class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#">Edit</a>
                                                                            <a class="dropdown-item" href="#">Copy Link</a>
                                                                            <a class="dropdown-item" href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="card card-border border-dashed h-100">
                                                            <div class="card-body d-flex align-items-center justify-content-center">
                                                                <button class="btn btn-outline-light btn-block" data-bs-toggle="modal" data-bs-target="#add_new_board"><span data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add New Board"><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span></span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab_team">
                                                <div class="d-flex justify-content-between align-items-center mb-5">
                                                    <div class="d-flex align-items-center form-group mb-0">
                                                        <h5 class="mb-0 me-4">Members</h5>
                                                        <label class="flex-shrink-0 mb-0 me-2">Sort by:</label>
                                                        <select class="form-control form-select form-select-sm w-130p">
                                                            <option selected="" value="1">Date Created</option>
                                                            <option value="2">A - Z</option>
                                                            <option value="3">Z - A</option>
                                                        </select>
                                                    </div>
                                                    <button class="btn btn-light btn-icon" data-bs-toggle="modal" data-bs-target="#add_new_team"><span class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add New Member"><span class="feather-icon"><i data-feather="plus"></i></span></span></button>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="card team-card card-border">
                                                            <div class="card-body">
                                                                <div class="card-action-wrap">
                                                                    <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></button>
                                                                    <div role="menu" class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Invite
                                                                            for project</a>
                                                                        <a class="dropdown-item" href="#">Copy
                                                                            Link</a>
                                                                        <a class="dropdown-item" href="#">Mail
                                                                            preferences</a>
                                                                    </div>
                                                                </div>
                                                                <div class="media align-items-center">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-rounded">
                                                                            <img src="{{URL::asset('dist/img/avatar2.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Designer">
                                                                            <span>Morgan Freeman</span><span class="badge badge-primary badge-indicator badge-indicator-nobdr"></span>
                                                                        </div>
                                                                        <div class="text-truncate">
                                                                            morgan@jampack.com</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="card team-card card-border">
                                                            <div class="card-body">
                                                                <div class="card-action-wrap">
                                                                    <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></button>
                                                                    <div role="menu" class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Invite
                                                                            for project</a>
                                                                        <a class="dropdown-item" href="#">Copy
                                                                            Link</a>
                                                                        <a class="dropdown-item" href="#">Mail
                                                                            preferences</a>
                                                                    </div>
                                                                </div>
                                                                <div class="media align-items-center">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-rounded">
                                                                            <img src="{{URL::asset('dist/img/avatar9.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Designer">
                                                                            <span>Huma Therman</span><span class="badge badge-primary badge-indicator badge-indicator-nobdr"></span>
                                                                        </div>
                                                                        <div class="text-truncate">
                                                                            huma@clariesup.au</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="card team-card card-border">
                                                            <div class="card-body">
                                                                <div class="card-action-wrap">
                                                                    <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></button>
                                                                    <div role="menu" class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Invite
                                                                            for project</a>
                                                                        <a class="dropdown-item" href="#">Copy
                                                                            Link</a>
                                                                        <a class="dropdown-item" href="#">Mail
                                                                            preferences</a>
                                                                    </div>
                                                                </div>
                                                                <div class="media align-items-center">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-rounded">
                                                                            <img src="{{URL::asset('dist/img/avatar7.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Developer">
                                                                            <span>Tom Cruz</span><span class="badge badge-danger badge-indicator badge-indicator-nobdr"></span>
                                                                        </div>
                                                                        <div class="text-truncate">
                                                                            tomcz@jampack.com</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="card team-card card-border">
                                                            <div class="card-body">
                                                                <div class="card-action-wrap">
                                                                    <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></button>
                                                                    <div role="menu" class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Invite
                                                                            for project</a>
                                                                        <a class="dropdown-item" href="#">Copy
                                                                            Link</a>
                                                                        <a class="dropdown-item" href="#">Mail
                                                                            preferences</a>
                                                                    </div>
                                                                </div>
                                                                <div class="media align-items-center">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-soft-danger avatar-rounded">
                                                                            <span class="initial-wrap">D</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Designer">
                                                                            <span>Danial Craig</span><span class="badge badge-primary badge-indicator badge-indicator-nobdr"></span>
                                                                        </div>
                                                                        <div class="text-truncate">
                                                                            danialc@jampack.com</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="card team-card card-border">
                                                            <div class="card-body">
                                                                <div class="card-action-wrap">
                                                                    <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></button>
                                                                    <div role="menu" class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Invite
                                                                            for project</a>
                                                                        <a class="dropdown-item" href="#">Copy
                                                                            Link</a>
                                                                        <a class="dropdown-item" href="#">Mail
                                                                            preferences</a>
                                                                    </div>
                                                                </div>
                                                                <div class="media align-items-center">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-rounded">
                                                                            <img src="{{URL::asset('dist/img/avatar10.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Inventory">
                                                                            <span>Winston Churchil</span><span class="badge badge-primary badge-indicator badge-indicator-nobdr"></span>
                                                                        </div>
                                                                        <div class="text-truncate">
                                                                            winston@worthniza.ga</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="card team-card card-border">
                                                            <div class="card-body">
                                                                <div class="card-action-wrap">
                                                                    <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></button>
                                                                    <div role="menu" class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Invite
                                                                            for project</a>
                                                                        <a class="dropdown-item" href="#">Copy
                                                                            Link</a>
                                                                        <a class="dropdown-item" href="#">Mail
                                                                            preferences</a>
                                                                    </div>
                                                                </div>
                                                                <div class="media align-items-center">
                                                                    <div class="media-head">
                                                                        <div class="media-head">
                                                                            <div class="avatar avatar-rounded">
                                                                                <img src="{{URL::asset('dist/img/avatar8.jpg')}}" alt="user" class="avatar-img">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Developer">
                                                                            <span>Katharine Jones</span><span class="badge badge-danger badge-indicator badge-indicator-nobdr"></span>
                                                                        </div>
                                                                        <div class="text-truncate">
                                                                            joneskath@jampack.com</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="card team-card card-border">
                                                            <div class="card-body">
                                                                <div class="card-action-wrap">
                                                                    <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></button>
                                                                    <div role="menu" class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Invite
                                                                            for project</a>
                                                                        <a class="dropdown-item" href="#">Copy
                                                                            Link</a>
                                                                        <a class="dropdown-item" href="#">Mail
                                                                            preferences</a>
                                                                    </div>
                                                                </div>
                                                                <div class="media align-items-center">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-rounded">
                                                                            <img src="{{URL::asset('dist/img/avatar3.jpg')}}" alt="user" class="avatar-img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hr Manager">
                                                                            <span>Jaquiline Joker</span><span class="badge badge-danger badge-indicator badge-indicator-nobdr"></span>
                                                                        </div>
                                                                        <div class="text-truncate">
                                                                            jaquljoker@jampack.com</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="card team-card card-border">
                                                            <div class="card-body">
                                                                <div class="card-action-wrap">
                                                                    <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></button>
                                                                    <div role="menu" class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Invite
                                                                            for project</a>
                                                                        <a class="dropdown-item" href="#">Copy
                                                                            Link</a>
                                                                        <a class="dropdown-item" href="#">Mail
                                                                            preferences</a>
                                                                    </div>
                                                                </div>
                                                                <div class="media align-items-center">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-light avatar-rounded">
                                                                            <span class="initial-wrap">J</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Designer">
                                                                            <span>John Brother</span><span class="badge badge-primary badge-indicator badge-indicator-nobdr"></span>
                                                                        </div>
                                                                        <div class="text-truncate">
                                                                            john@cryodrakon.info</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="card team-card card-border">
                                                            <div class="card-body">
                                                                <div class="card-action-wrap">
                                                                    <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></button>
                                                                    <div role="menu" class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Invite
                                                                            for project</a>
                                                                        <a class="dropdown-item" href="#">Copy
                                                                            Link</a>
                                                                        <a class="dropdown-item" href="#">Mail
                                                                            preferences</a>
                                                                    </div>
                                                                </div>
                                                                <div class="media align-items-center">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-rounded">
                                                                            <img src="dist/img/avatar14.jpg" alt="user" class="avatar-img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Designer">
                                                                            <span>John Brother</span><span class="badge badge-primary badge-indicator badge-indicator-nobdr"></span>
                                                                        </div>
                                                                        <div class="text-truncate">
                                                                            john@cryodrakon.info</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="card team-card card-border">
                                                            <div class="card-body">
                                                                <div class="card-action-wrap">
                                                                    <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></button>
                                                                    <div role="menu" class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Invite
                                                                            for project</a>
                                                                        <a class="dropdown-item" href="#">Copy
                                                                            Link</a>
                                                                        <a class="dropdown-item" href="#">Mail
                                                                            preferences</a>
                                                                    </div>
                                                                </div>
                                                                <div class="media align-items-center">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-soft-success avatar-rounded">
                                                                            <span class="initial-wrap">C</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Developer">
                                                                            <span>Charlie Chaplin</span><span class="badge badge-danger badge-indicator badge-indicator-nobdr"></span>
                                                                        </div>
                                                                        <div class="text-truncate">
                                                                            charlie@leernoca.monster</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="card card-border border-dashed h-100">
                                                            <div class="card-body d-flex align-items-center justify-content-center">
                                                                <button class="btn btn-icon btn-outline-light" data-bs-toggle="modal" data-bs-target="#add_new_team"><span class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add New Member"><span class="feather-icon"><i data-feather="plus"></i></span></span></button>
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

                <!-- Add New Task -->
                <div id="add_new_board" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h5>Add New Board</h5>
                                <p class="mb-4">You are granted limited license only for purposes of viewing the
                                    material contained on this Website.</p>
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
                                                <label class="form-label">Visibility</label>
                                                <select class="form-control form-select">
                                                    <option selected="">Public</option>
                                                    <option value="1">Private</option>
                                                </select>
                                                <small class="form-text text-muted">
                                                    Public setting will be seen by everybody with login details.
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Avatar</label>
                                                <select class="form-control form-select">
                                                    <option selected="">Choose Avatar-Text</option>
                                                    <option value="1">A</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Avatar Color</label>
                                                <div class="input-group color-picker" title="Using horizontal option">
                                                    <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                    <input type="text" class="form-control" value="#009B84" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="dropify-square">
                                                    <input type="file" class="dropify-1" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer align-items-center">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Add New Task -->

                <!-- Add New Member -->
                <div id="add_new_team" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h5 class="mb-4">Add New Member</h5>
                                <form>
                                    <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Name</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Email Id</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="dropify-square">
                                                    <input type="file" class="dropify-1" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer align-items-center">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Add New Member -->

                <!-- Add Fav Board -->
                <div class="modal fade" id="add_fav_board" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-dialog-centered mw-400p" role="document">
                        <div class="modal-content">
                            <div class="modal-header header-wth-bg-inv">
                                <h5 class="modal-title">Add Board</h5>
                                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body p-0">
                                <div>
                                    <div data-simplebar class="nicescroll-bar h-350p">
                                        <ul class="p-3 pb-0">
                                            <li class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="media d-flex align-items-center">
                                                    <div class="media-head me-2">
                                                        <div class="avatar avatar-xs avatar-primary avatar-rounded">
                                                            <span class="initial-wrap">J</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="name">Jampack</div>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck2" checked>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="media d-flex align-items-center">
                                                    <div class="media-head me-2">
                                                        <div class="avatar avatar-xs avatar-danger avatar-rounded">
                                                            <span class="initial-wrap">H</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="name">Hencework</div>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck3" checked>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="media d-flex align-items-center">
                                                    <div class="media-head me-2">
                                                        <div class="avatar avatar-xs avatar-info avatar-rounded">
                                                            <span class="initial-wrap">G</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="name">Griffin</div>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck4">
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="media d-flex align-items-center">
                                                    <div class="media-head me-2">
                                                        <div class="avatar avatar-xs avatar-warning avatar-rounded">
                                                            <span class="initial-wrap">R</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="name">React - Jampack</div>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck5" checked>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="media d-flex align-items-center">
                                                    <div class="media-head me-2">
                                                        <div class="avatar avatar-xs avatar-primary avatar-rounded">
                                                            <span class="initial-wrap">P</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="name">Pangong</div>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck6" checked>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="media d-flex align-items-center">
                                                    <div class="media-head me-2">
                                                        <div class="avatar avatar-xs avatar-success avatar-rounded">
                                                            <span class="initial-wrap">A</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="name">Angular - Jampack</div>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck7" checked>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="media d-flex align-items-center">
                                                    <div class="media-head me-2">
                                                        <div class="avatar avatar-xs avatar-warning avatar-rounded">
                                                            <span class="initial-wrap">R</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="name">React - Jampack</div>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck8">
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="media d-flex align-items-center">
                                                    <div class="media-head me-2">
                                                        <div class="avatar avatar-xs avatar-primary avatar-rounded">
                                                            <span class="initial-wrap">P</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="name">Pangong</div>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck9">
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="media d-flex align-items-center">
                                                    <div class="media-head me-2">
                                                        <div class="avatar avatar-xs avatar-success avatar-rounded">
                                                            <span class="initial-wrap">A</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="name">Angular - Jampack</div>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck10">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn flex-fill btn-light flex-1" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn flex-fill btn-primary flex-1" data-bs-dismiss="modal">Add Board</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Add Fav Board -->
            </div>
        </div>
    </div>
    <!-- /Page Body -->
</div>
@endsection
