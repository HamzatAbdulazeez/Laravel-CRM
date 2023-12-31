@extends('layouts.dashboard-frontend')

@section('page-content')
<!-- Main Content -->
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
                            </ul>
                        </div>
                        <div class="separator separator-light"></div>
                    </div>
                </div>
                <!--Sidebar Fixnav-->
                <div class="taskboardapp-fixednav">
                    <div class="hk-toolbar">
                        <ul class="nav nav-light">
                        </ul>
                    </div>
                </div>
                <!--/ Sidebar Fixnav-->
            </nav>
            <div class="taskboardapp-content">
                <div class="taskboardapp-detail-wrap">
                    <header class="taskboard-header">
                        <div class="d-flex align-items-center flex-1">
                            <div class="d-flex">
                                <a class="taskboardapp-title link-dark" href="#">
                                    <h1>
                                        <span class="task-star marked"><span class="feather-icon"><i data-feather="star"></i></span></span>
                                    </h1>
                                </a>
                                <div class="ms-3">
                                    <div class="input-group">
                                        <span class="input-affix-wrapper">
                                            <span class="input-prefix"><i class="ri-lock-line"></i></span>
                                            <select class="form-select">
                                                <option selected="" value="1">Private Board</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <select class="form-select d-xxl-none flex-1 mx-3">
                            <option selected="" value="Task Board">Task Board</option>
                        </select>
                        <ul class="nav nav-pills nav-pills-rounded active-theme nav-light px-2 flex-shrink-0 d-xxl-flex d-none">
                            <li class="nav-item">
                                <a class="nav-link active" href="javascript:void(0);">
                                    <span class="nav-link-text">Task Board</span>
                                </a>
                            </li>
                        </ul>
                        <div class="taskboard-options-wrap flex-1">
                            <div class="d-flex ms-auto">
                                <div class="avatar-group avatar-group-overlapped d-xl-flex d-none me-3">
                                    <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Katharine">
                                        <img src="{{URL::asset('dist/img/avatar8.jpg')}}" alt="user" class="avatar-img">
                                    </div>
                                    <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dean">
                                        <img src="{{URL::asset('dist/img/avatar13.jpg')}}" alt="user" class="avatar-img">
                                    </div>
                                    <div class="avatar avatar-xs avatar-soft-danger avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Tom">
                                        <span class="initial-wrap">T</span>
                                    </div>
                                    <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Morgan">
                                        <img src="{{URL::asset('dist/img/avatar2.jpg')}}" alt="user" class="avatar-img">
                                    </div>
                                    <div class="avatar avatar-icon avatar-primary avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Tooltip text">
                                        <span class="initial-wrap"><span class="feather-icon" data-bs-toggle="modal" data-bs-target="#add_new_board"><i data-feather="plus"></i></span></span>
                                    </div>
                                </div>
                                <div class="v-separator d-xl-flex d-none"></div>

                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Collapse">
                                    <span class="icon">
                                        <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                        <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="hk-sidebar-togglable"></div>
                    </header>
                    <div class="taskboard-body">
                        <div>
                            <div class="taskbar-toolbar">
                                <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                                    <button class="btn btn-soft-primary flex-shrink-0 btn-add-newlist me-4" data-bs-toggle="modal" data-bs-target="#add_task_list">Create
                                        New</button>
                                    <div class="form-check form-switch ms-auto">
                                        <input type="checkbox" class="form-check-input" id="customDes" checked="">
                                        <label class="form-check-label" for="customDes">Show description</label>
                                    </div>
                                </div>
                                <form role="search" class="d-lg-flex d-none">
                                    <input type="text" class="form-control" placeholder="Search in conversation">
                                </form>
                            </div>
                            <div id="kb_scroll" class="tasklist-scroll position-relative">
                                <div id="tasklist_wrap" class="tasklist-wrap">
                                    <div class="card card-simple card-border tasklist">
                                        <div class="card-header card-header-action">
                                            <div class="tasklist-handle">
                                                <h6 class="text-uppercase fw-bold  d-flex align-items-center mb-0">
                                                    <span class="tasklist-name">All Modules</span><span class="badge badge-pill badge-soft-violet ms-2">19</span>
                                                </h6>
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
                                            <button class="btn btn-white btn-block btn-add-newtask" data-bs-toggle="modal" data-bs-target="#add_new_card"><span><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span></span></button>
                                        </div>
                                        <div data-simplebar class="card-body">
                                            <div id="i1" class="tasklist-cards-wrap">
                                                <div class="card card-border card-simple tasklist-card">
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Application Pages</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="avatar-group avatar-group-overlapped">
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dean">
                                                                <img src="{{URL::asset('dist/img/avatar13.jpg')}}" alt="user" class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-xs avatar-soft-danger avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Tom">
                                                                <span class="initial-wrap">B</span>
                                                            </div>
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Danial">
                                                                <img src="{{URL::asset('dist/img/avatar2.jpg')}}" alt="user" class="avatar-img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-muted justify-content-between">
                                                        <div>
                                                            <span class="task-counter">
                                                                <span><i class="ri-checkbox-line"></i></span>
                                                                <span>4/8</span>
                                                            </span>
                                                            <span class="task-discuss">
                                                                <span><i class="ri-message-3-line"></i></span>
                                                                <span>24</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="task-deadline">
                                                                22 Sep, 22
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-simple tasklist-card">
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Authentication</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="card-footer text-muted justify-content-between">
                                                        <div>
                                                            <span class="task-counter">
                                                                <span><i class="ri-checkbox-line"></i></span>
                                                                <span>12/18</span>
                                                            </span>
                                                            <span class="task-discuss">
                                                                <span><i class="ri-message-3-line"></i></span>
                                                                <span>24</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="task-deadline">
                                                                22 Sep, 22
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-simple tasklist-card">
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Menu Modules</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-simple tasklist-card">
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Content</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="avatar-group avatar-group-overlapped">
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dean">
                                                                <img src="{{URL::asset('dist/img/avatar13.jpg')}}" alt="user" class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Winston">
                                                                <img src="dist/img/avatar10.jpg" alt="user" class="avatar-img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-muted justify-content-between">
                                                        <div>
                                                            <span class="task-counter">
                                                                <span><i class="ri-checkbox-line"></i></span>
                                                                <span>0/3</span>
                                                            </span>
                                                            <span class="task-discuss">
                                                                <span><i class="ri-message-3-line"></i></span>
                                                                <span>24</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="task-deadline">
                                                                24 Sep, 22
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-simple tasklist-card">
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Utilities</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-simple tasklist-card">
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Forms</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="card-footer text-muted justify-content-between">
                                                        <div>
                                                            <span class="task-counter">
                                                                <span><i class="ri-checkbox-line"></i></span>
                                                                <span>18/18</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="task-deadline">
                                                                28 Sep, 22
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-simple tasklist-card">
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Tables</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="card-footer text-muted justify-content-between">
                                                        <div>
                                                            <span class="task-counter">
                                                                <span><i class="ri-checkbox-line"></i></span>
                                                                <span>1/9</span>
                                                            </span>
                                                            <span class="task-discuss">
                                                                <span><i class="ri-message-3-line"></i></span>
                                                                <span>5</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="task-deadline">
                                                                30 Sep, 22
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-simple tasklist-card">
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Charts</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-simple tasklist-card">
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Maps</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-simple tasklist-card">
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Final Package</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="avatar-group avatar-group-overlapped">
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Danial">
                                                                <img src="{{URL::asset('dist/img/avatar2.jpg')}}" alt="user" class="avatar-img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-muted justify-content-between">
                                                        <div>
                                                            <span class="task-counter">
                                                                <span><i class="ri-checkbox-line"></i></span>
                                                                <span>40/127</span>
                                                            </span>
                                                            <span class="task-discuss">
                                                                <span><i class="ri-message-3-line"></i></span>
                                                                <span>24</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="task-deadline">
                                                                15 Oct, 20
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-simple card-border tasklist">
                                        <div class="card-header card-header-action">
                                            <div class="tasklist-handle">
                                                <h6 class="text-uppercase fw-bold  d-flex align-items-center mb-0">
                                                    <span class="tasklist-name">In progress</span><span class="badge badge-pill badge-soft-violet ms-2">6</span>
                                                </h6>
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
                                            <button class="btn btn-white btn-block btn-add-newtask" data-bs-toggle="modal" data-bs-target="#add_new_card"><span><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span></span></button>
                                        </div>
                                        <div data-simplebar class="card-body">
                                            <div id="i2" class="tasklist-cards-wrap">
                                                <div class="card card-border card-wth-progress card-simple tasklist-card">
                                                    <div class="progress progress-bar-xs">
                                                        <div class="progress-bar bg-warning w-45" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Profile Pages</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="avatar-group avatar-group-overlapped">
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Katharine">
                                                                <img src="{{URL::asset('dist/img/avatar8.jpg')}}
" alt="user" class="avatar-img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-muted justify-content-between">
                                                        <div>
                                                            <span class="task-counter">
                                                                <span><i class="ri-checkbox-line"></i></span>
                                                                <span>4/8</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="task-deadline">
                                                                18 Sep, 22
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-wth-progress card-simple tasklist-card">
                                                    <div class="progress progress-bar-xs">
                                                        <div class="progress-bar bg-primary w-85" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Advance Tables</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-muted justify-content-between">
                                                        <div>
                                                            <span class="task-counter">
                                                                <span><i class="ri-checkbox-line"></i></span>
                                                                <span>4/8</span>
                                                            </span>
                                                            <span class="task-discuss">
                                                                <span><i class="ri-message-3-line"></i></span>
                                                                <span>24</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="task-deadline">
                                                                22 Sep, 22
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-wth-progress card-simple tasklist-card">
                                                    <div class="progress progress-bar-xs">
                                                        <div class="progress-bar bg-primary w-60" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">CSS Compilation</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="avatar-group avatar-group-overlapped">
                                                            <div class="avatar avatar-soft-success avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Huma">
                                                                <span class="initial-wrap"><span>A</span></span>
                                                            </div>
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Danial">
                                                                <img src="{{URL::asset('dist/img/avatar2.jpg')}}" alt="user" class="avatar-img">
                                                            </div>
                                                        </div>
                                                        <div class="mt-2">
                                                            <span class="badge badge-soft-primary my-1">Priority</span>
                                                            <span class="badge badge-soft-danger my-1">Angular</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-muted justify-content-between">
                                                        <div>
                                                            <span class="task-counter">
                                                                <span><i class="ri-checkbox-line"></i></span>
                                                                <span>4/8</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="task-deadline">
                                                                18 Sep, 22
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-wth-progress card-simple tasklist-card">
                                                    <div class="progress progress-bar-xs">
                                                        <div class="progress-bar bg-primary w-20" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Lists</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-muted justify-content-between">
                                                        <div>
                                                            <span class="task-counter">
                                                                <span><i class="ri-checkbox-line"></i></span>
                                                                <span>18/18</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="task-deadline">
                                                                28 Sep, 22
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-wth-progress card-simple tasklist-card">
                                                    <div class="progress progress-bar-xs">
                                                        <div class="progress-bar bg-danger w-10" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Dashboards</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-muted justify-content-between">
                                                        <div>
                                                            <span class="task-counter">
                                                                <span><i class="ri-checkbox-line"></i></span>
                                                                <span>18/18</span>
                                                            </span>
                                                            <span class="task-discuss">
                                                                <span><i class="ri-message-3-line"></i></span>
                                                                <span>24</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="task-deadline">
                                                                28 Sep, 22
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-wth-progress card-simple tasklist-card">
                                                    <div class="progress progress-bar-xs">
                                                        <div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Detail Pages</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="avatar-group avatar-group-overlapped">
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Danial">
                                                                <img src="{{URL::asset('dist/img/avatar2.jpg')}}" alt="user" class="avatar-img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-muted justify-content-between">
                                                        <div>
                                                            <span class="task-counter">
                                                                <span><i class="ri-checkbox-line"></i></span>
                                                                <span>18/18</span>
                                                            </span>
                                                            <span class="task-discuss">
                                                                <span><i class="ri-message-3-line"></i></span>
                                                                <span>24</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="task-deadline">
                                                                28 Sep, 22
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-simple card-border tasklist">
                                        <div class="card-header card-header-action">
                                            <div class="tasklist-handle">
                                                <h6 class="text-uppercase fw-bold  d-flex align-items-center mb-0">
                                                    <span class="tasklist-name">Completed</span><span class="badge badge-pill badge-soft-violet ms-2">4</span>
                                                </h6>
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
                                            <button class="btn btn-white btn-block btn-add-newtask" data-bs-toggle="modal" data-bs-target="#add_new_card"><span><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span></span></button>
                                        </div>
                                        <div data-simplebar class="card-body">
                                            <div id="i3" class="tasklist-cards-wrap">
                                                <div class="card card-border card-simple card-wth-progress tasklist-card">
                                                    <div class="progress progress-bar-xs">
                                                        <div class="progress-bar bg-success w-100" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Forms</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="card-body">
                                                        <p>Form validation works only online. Check by
                                                            activating local server.</p>
                                                    </div>
                                                    <div class="card-footer text-muted justify-content-between">
                                                        <div>
                                                            <span class="task-counter">
                                                                <span><i class="ri-checkbox-line"></i></span>
                                                                <span>18/18</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="task-deadline">
                                                                28 Sep, 22
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-simple card-wth-progress tasklist-card">
                                                    <div class="progress progress-bar-xs">
                                                        <div class="progress-bar bg-success w-100" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Tables</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="card-footer text-muted justify-content-between">
                                                        <div>
                                                            <span class="task-counter">
                                                                <span><i class="ri-checkbox-line"></i></span>
                                                                <span>1/9</span>
                                                            </span>
                                                            <span class="task-discuss">
                                                                <span><i class="ri-message-3-line"></i></span>
                                                                <span>5</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="task-deadline">
                                                                30 Sep, 22
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-simple card-wth-progress tasklist-card">
                                                    <div class="progress progress-bar-xs">
                                                        <div class="progress-bar bg-success w-100" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Application Pages</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="avatar-group avatar-group-overlapped">
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Danial">
                                                                <img src="dist/img/avatar9.jpg" alt="user" class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dean">
                                                                <img src="{{URL::asset('dist/img/avatar3.jpg')}}" alt="user" class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Huma">
                                                                <img src="{{URL::asset('dist/img/avatar7.jpg')}}" alt="user" class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-soft-info avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Huma">
                                                                <span class="initial-wrap"><span>C</span></span>
                                                            </div>
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Charlie">
                                                                <img src="{{URL::asset('dist/img/avatar13.jpg')}}" alt="user" class="avatar-img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-muted justify-content-between">
                                                        <div>
                                                            <span class="task-counter">
                                                                <span><i class="ri-checkbox-line"></i></span>
                                                                <span>4/8</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="task-deadline">
                                                                18 Sep, 22
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-simple card-wth-progress tasklist-card">
                                                    <div class="progress progress-bar-xs">
                                                        <div class="progress-bar bg-success w-100" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Authentication</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-muted justify-content-between">
                                                        <div>
                                                            <span class="task-counter">
                                                                <span><i class="ri-checkbox-line"></i></span>
                                                                <span>1/9</span>
                                                            </span>
                                                            <span class="task-discuss">
                                                                <span><i class="ri-message-3-line"></i></span>
                                                                <span>5</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="task-deadline">
                                                                30 Sep, 20
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-simple card-border tasklist">
                                        <div class="card-header card-header-action">
                                            <div class="tasklist-handle">
                                                <h6 class="text-uppercase fw-bold  d-flex align-items-center mb-0">
                                                    <span class="tasklist-name">Pending</span><span class="badge badge-pill badge-soft-violet ms-2">7</span>
                                                </h6>
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
                                            <button class="btn btn-white btn-block btn-add-newtask" data-bs-toggle="modal" data-bs-target="#add_new_card"><span><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span></span></button>
                                        </div>
                                        <div data-simplebar class="card-body">
                                            <div id="i4" class="tasklist-cards-wrap">
                                                <div class="card card-border card-simple tasklist-card">
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Authentication</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div>
                                                            <span class="badge badge-soft-light my-1">Unassigned</span>
                                                            <span class="badge badge-soft-danger my-1">Collaborator</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-muted justify-content-between">
                                                        <div>
                                                            <span class="task-counter">
                                                                <span><i class="ri-checkbox-line"></i></span>
                                                                <span>12/18</span>
                                                            </span>
                                                            <span class="task-discuss">
                                                                <span><i class="ri-message-3-line"></i></span>
                                                                <span>24</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="task-deadline">
                                                                22 Sep, 20
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-simple tasklist-card">
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Menu Modules</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-simple tasklist-card">
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Content</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="avatar-group avatar-group-overlapped">
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dean">
                                                                <img src="{{URL::asset('dist/img/avatar13.jpg')}}" alt="user" class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Winston">
                                                                <img src="dist/img/avatar10.jpg" alt="user" class="avatar-img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-muted justify-content-between">
                                                        <div>
                                                            <span class="task-counter">
                                                                <span><i class="ri-checkbox-line"></i></span>
                                                                <span>0/3</span>
                                                            </span>
                                                            <span class="task-discuss">
                                                                <span><i class="ri-message-3-line"></i></span>
                                                                <span>24</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="task-deadline">
                                                                24 Sep, 20
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-simple tasklist-card">
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Utilities</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-simple tasklist-card">
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Forms</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="card-footer text-muted justify-content-between">
                                                        <div>
                                                            <span class="task-counter">
                                                                <span><i class="ri-checkbox-line"></i></span>
                                                                <span>18/18</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="task-deadline">
                                                                28 Sep, 20
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-simple tasklist-card">
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Tables</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="card-footer text-muted justify-content-between">
                                                        <div>
                                                            <span class="task-counter">
                                                                <span><i class="ri-checkbox-line"></i></span>
                                                                <span>1/9</span>
                                                            </span>
                                                            <span class="task-discuss">
                                                                <span><i class="ri-message-3-line"></i></span>
                                                                <span>5</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="task-deadline">
                                                                30 Sep, 20
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-simple tasklist-card">
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Charts</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-border card-simple tasklist-card">
                                                    <div class="card-header card-header-action">
                                                        <h6 class="fw-bold">Maps</h6>
                                                        <div class="card-action-wrap">
                                                            <a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign
                                                                        to</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach
                                                                        files</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Apply
                                                                        Labels</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Set
                                                                        Due Date</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Follow
                                                                        Task</span></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set
                                                                        as Top Priority</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                                        Status</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save
                                                                        as Template</span></a>
                                                                <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move
                                                                        to archive</span></a>
                                                                <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-simple card-border tasklist add-new-task">
                                        <button class="btn btn-soft-primary btn-add-newlist flex-shrink-0" data-bs-toggle="modal" data-bs-target="#add_task_list">Add New
                                            List</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Task Details -->
                <div id="task_detail" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl task-detail-modal" role="document">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <header class="task-header">
                                    <div class="d-flex align-items-center">
                                        <div id="sparkline_chart_7"></div>
                                        <div class="form-check mx-lg-3 ms-3">
                                            <input type="checkbox" class="form-check-input" id="customCheckcTask" checked>
                                            <label class="form-check-label d-lg-inline d-none" for="customCheckcTask">Mark as completed</label>
                                        </div>
                                        <button class="btn btn-flush-light flush-outline-hover d-lg-inline-block d-none"><span><span class="icon"><span class="feather-icon"><i data-feather="link"></i></span></span><span>Copy
                                                    Link</span></span></button>
                                        <button class="btn btn-icon btn-light btn-rounded d-lg-none d-lg-inline-block ms-1"><span><span class="icon"><span class="feather-icon"><i data-feather="link"></i></span></span></span></button>
                                    </div>
                                    <div class="task-options-wrap">
                                        <span class="task-star marked"><span class="feather-icon"><i data-feather="star"></i></span></span>
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover ms-1 d-lg-inline-block d-none" href="#"><span class="icon"><span class="feather-icon"><i data-feather="trash-2"></i></span></span></a>
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <h6 class="dropdown-header">Action</h6>
                                            <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="edit"></i></span><span>Assign
                                                    to</span></a>
                                            <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Attach
                                                    files</span></a>
                                            <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Apply
                                                    Labels</span></a>
                                            <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="tag"></i></span><span>Set Due
                                                    Date</span></a>
                                            <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="calendar"></i></span><span>Follow
                                                    Task</span></a>
                                            <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="bookmark"></i></span><span>Set Due
                                                    Date</span></a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="arrow-up"></i></span><span>Set as Top
                                                    Priority</span></a>
                                            <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="repeat"></i></span><span>Change
                                                    Status</span></a>
                                            <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="pocket"></i></span><span>Save as
                                                    Template</span></a>
                                            <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Move to
                                                    archive</span></a>
                                            <a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
                                        </div>
                                    </div>
                                </header>
                                <div class="task-detail-body">
                                    <div class="alert alert-primary alert-wth-icon fade show mb-4" role="alert">
                                        <span class="alert-icon-wrap"><span class="feather-icon"><i class="zmdi zmdi-lock"></i></span></span> This task is
                                        private for Jampack Team
                                    </div>
                                    <h4 class="d-flex align-items-center fw-bold mb-0 inline-editable-wrap">
                                        <span class="editable">Framworking Building</span><a class="btn btn-sm btn-icon btn-flush-light btn-rounded flush-soft-hover edit-tyn ms-1" href="#"><span class="icon"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></a>
                                    </h4>
                                    <p class="d-flex align-items-center inline-editable-wrap"><span class="editable">Instant rebuilding of assets during
                                            development</span><a class="btn btn-sm btn-icon btn-flush-light btn-rounded flush-soft-hover edit-tyn ms-1" href="#"><span class="icon"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></a></p>
                                    <div class="avatar-group avatar-group-lg avatar-group-overlapped mt-3">
                                        <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Katharine">
                                            <img src="{{URL::asset('dist/img/avatar8.jpg')}}
" alt="user" class="avatar-img">
                                        </div>
                                        <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dean">
                                            <img src="{{URL::asset('dist/img/avatar13.jpg')}}" alt="user" class="avatar-img">
                                        </div>
                                        <div class="avatar avatar-xs avatar-soft-danger avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Tom">
                                            <span class="initial-wrap">T</span>
                                        </div>
                                        <div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Morgan">
                                            <img src="{{URL::asset('dist/img/avatar3.jpg')}}" alt="user" class="avatar-img">
                                        </div>
                                        <div class="avatar avatar-icon avatar-primary avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Tooltip text">
                                            <span class="initial-wrap"><span class="feather-icon"><i data-feather="plus"></i></span></span>
                                        </div>
                                    </div>
                                    <form class="row">
                                        <div class="col-md-4">
                                            <div class="title title-wth-divider my-4"><span>Assignee</span>
                                            </div>
                                            <div class="media align-items-center">
                                                <div class="media-head">
                                                    <div class="avatar avatar-sm avatar-primary avatar-rounded">
                                                        <span class="initial-wrap">H</span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="as-name">Hencework</div>
                                                    <div class="as-date">4 july 2022, 8:30pm</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="title title-wth-divider my-4"><span>Due Date</span>
                                            </div>
                                            <input class="form-control" type="text" name="single-date" />
                                        </div>
                                        <div class="col-md-4">
                                            <div class="title title-wth-divider my-4"><span>Status</span></div>
                                            <div class="dropdown">
                                                <button aria-expanded="false" data-bs-toggle="dropdown" class="btn btn-warning btn-rounded dropdown-toggle" type="button">In Progress</button>
                                                <div role="menu" class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="title title-wth-divider my-4"><span>Labels</span></div>
                                            <input type="text" id="exist_values1" class="user-input-tagged form-control" name="tag-3" value="Framework,Html" placeholder="Add Chips">
                                        </div>
                                    </form>
                                    <ul class="nav nav-justified nav-light nav-tabs nav-segmented-tabs active-theme mt-4">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tab_checklist">
                                                <span class="nav-link-text">Checklist</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab_comments">
                                                <span class="nav-link-text badge-on-text">Comments</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab_files">
                                                <span class="nav-link-text badge-on-text">Files</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab_activity">
                                                <span class="nav-link-text badge-on-text">Activity</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-7">
                                        <div class="tab-pane fade show active" id="tab_checklist">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <div class="title title-lg mb-0"><span>Checklist</span></div>
                                                <a href="#" class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add Category"><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span></a>
                                            </div>
                                            <div class="hk-checklist">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheckList1" checked="">
                                                    <label class="form-check-label" for="customCheckList1">
                                                        Video conference with canada Team
                                                        <span class="done-strikethrough"></span>
                                                    </label>
                                                    <a href="#" class="btn btn-xs btn-icon btn-rounded btn-flush-light flush-soft-hover delete-checklist"><span class="icon"><span class="feather-icon"><i data-feather="trash-2"></i></span></span></a>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheckList2" checked="">
                                                    <label class="form-check-label" for="customCheckList2">
                                                        Client objective meeting
                                                        <span class="done-strikethrough"></span>
                                                    </label>
                                                    <a href="#" class="btn btn-xs btn-icon btn-rounded btn-flush-light flush-soft-hover delete-checklist"><span class="icon"><span class="feather-icon"><i data-feather="trash-2"></i></span></span></a>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheckList3" checked="">
                                                    <label class="form-check-label" for="customCheckList3">
                                                        Upgrade dependency on resources
                                                        <span class="done-strikethrough"></span>
                                                    </label>
                                                    <a href="#" class="btn btn-xs btn-icon btn-rounded btn-flush-light flush-soft-hover delete-checklist"><span class="icon"><span class="feather-icon"><i data-feather="trash-2"></i></span></span></a>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheckList4">
                                                    <label class="form-check-label" for="customCheckList4">
                                                        Invite jaqueline on video conference
                                                        <span class="done-strikethrough"></span>
                                                    </label>
                                                    <a href="#" class="btn btn-xs btn-icon btn-rounded btn-flush-light flush-soft-hover delete-checklist"><span class="icon"><span class="feather-icon"><i data-feather="trash-2"></i></span></span></a>
                                                </div>
                                                <a href="#" class="d-flex align-items-center add-new-checklist">
                                                    <span class="feather-icon fe-x me-2"><i data-feather="plus-square"></i></span>
                                                    <span>New Item</span>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="title title-wth-divider flex-grow-1 my-4 me-2">
                                                    <span>Canada team task</span>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-xs btn-icon btn-rounded btn-flush-light flush-soft-hover delete-checklist" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><span class="icon"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></a>
                                                    <a href="#" class="btn btn-xs btn-icon btn-rounded btn-flush-light flush-soft-hover delete-checklist"><span class="icon"><span class="feather-icon"><i data-feather="trash-2"></i></span></span></a>
                                                </div>
                                            </div>
                                            <div class="hk-checklist">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheckList5" checked="">
                                                    <label class="form-check-label" for="customCheckList5">
                                                        Upgrade dependency on resources
                                                        <span class="done-strikethrough"></span>
                                                    </label>
                                                    <a href="#" class="btn btn-xs btn-icon btn-rounded btn-flush-light flush-soft-hover delete-checklist"><span class="icon"><span class="feather-icon"><i data-feather="trash-2"></i></span></span></a>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheckList6">
                                                    <label class="form-check-label" for="customCheckList6">
                                                        Invite jaqueline on video conference
                                                        <span class="done-strikethrough"></span>
                                                    </label>
                                                    <a href="#" class="btn btn-xs btn-icon btn-rounded btn-flush-light flush-soft-hover delete-checklist"><span class="icon"><span class="feather-icon"><i data-feather="trash-2"></i></span></span></a>
                                                </div>
                                                <a href="#" class="d-flex align-items-center add-new-checklist">
                                                    <span class="feather-icon fe-x me-2"><i data-feather="plus-square"></i></span>
                                                    <span>New Item</span>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-5 mb-2">
                                                <div class="title title-lg mb-0"><span>Notes</span></div>
                                                <a href="#" class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add Category"><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span></a>
                                            </div>
                                            <div class="card card-border note-block bg-orange-light-5">
                                                <div class="card-body">
                                                    <div class="card-action-wrap">
                                                        <button class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></button>
                                                        <div role="menu" class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else
                                                                here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <div class="media align-items-center">
                                                        <div class="media-head">
                                                            <div class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{URL::asset('dist/img/avatar2.jpg')}}" alt="user" class="avatar-img">
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <div>Martin Luther</div>
                                                            <div>9 Apr, 20, 7:14 AM</div>
                                                        </div>
                                                    </div>
                                                    <p>@<a href="#" class="fw-medium">Charlie Darvin</a> From
                                                        there, you can run grunt compile, grunt migrate and
                                                        grunt test to compile your contracts, deploy those
                                                        contracts to the network, and run their associated unit
                                                        tests.</p>
                                                </div>
                                            </div>
                                            <div class="card card-border note-block bg-orange-light-5">
                                                <div class="card-body">
                                                    <div class="card-action-wrap">
                                                        <button class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></button>
                                                        <div role="menu" class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else
                                                                here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <div class="media align-items-center">
                                                        <div class="media-head">
                                                            <div class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{URL::asset('dist/img/avatar3.jpg')}}" alt="user" class="avatar-img">
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <div>Katherine Jones</div>
                                                            <div>8 Apr, 20, 5:30 PM</div>
                                                        </div>
                                                    </div>
                                                    <p>@<a href="#" class="fw-medium">Martin Luther</a>
                                                        Viscosity ratio for "Appear view" link text is 3.7:1
                                                        which is less </p>
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-outline-light btn-block">View more</a>
                                        </div>
                                        <div class="tab-pane fade" id="tab_comments">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <div class="title title-lg mb-0"><span>3 Responses</span></div>
                                                <a href="#" class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add Board"><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span></a>
                                            </div>
                                            <div class="comment-block">
                                                <div class="media">
                                                    <div class="media-head">
                                                        <div class="avatar avatar-xs avatar-rounded">
                                                            <img src="{{URL::asset('dist/img/avatar.jpg')}}" alt="user" class="avatar-img">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div>
                                                            <span class="cm-name">Martin Luther</span>
                                                            <span class="badge badge-soft-violet">Manager</span>
                                                        </div>
                                                        <p>@<a href="#" class="fw-medium">Charlie Darvin</a>
                                                            From there, you can run truffle compile, truffle
                                                            migrate and truffle test to compile your contracts,
                                                            deploy those contracts to the network, and run their
                                                            associated unit tests.</p>
                                                        <div class="comment-action-wrap mt-3">
                                                            <span>3 hours ago</span>
                                                            <span class="comment-dot-sep">●</span>
                                                            <a href="#">Reply</a>
                                                            <span class="comment-dot-sep">●</span>
                                                            <a href="#">Like</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="separator separator-light"></div>
                                                <div class="media">
                                                    <div class="media-head">
                                                        <div class="avatar avatar-xs avatar-rounded">
                                                            <img src="{{URL::asset('dist/img/avatar2.jpg')}}" alt="user" class="avatar-img">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div>
                                                            <span class="cm-name">Katherine Jones</span>
                                                        </div>
                                                        <p>Dynamically beautiful work done by @<a href="#" class="fw-medium">Ashton Kutcher</a></p>
                                                        <div class="comment-action-wrap mt-3">
                                                            <span>3 hours ago</span>
                                                            <span class="comment-dot-sep">●</span>
                                                            <a href="#">Reply</a>
                                                            <span class="comment-dot-sep">●</span>
                                                            <a href="#">Like</a>
                                                        </div>
                                                        <div class="media">
                                                            <div class="media-head">
                                                                <div class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{URL::asset('dist/img/avatar3.jpg')}}" alt="user" class="avatar-img">
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div>
                                                                    <span class="cm-name">Ashton Kutche</span>
                                                                    <span class="badge badge-soft-danger">Designer</span>
                                                                </div>
                                                                <p>@<a href="#" class="fw-medium">Katherine
                                                                        Jones</a> Thank you :)</p>
                                                                <div class="comment-action-wrap mt-3">
                                                                    <span>3 hours ago</span>
                                                                    <span class="comment-dot-sep">●</span>
                                                                    <a href="#">Reply</a>
                                                                    <span class="comment-dot-sep">●</span>
                                                                    <a href="#">Like</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="separator separator-light"></div>
                                                <form>
                                                    <div class="form-group">
                                                        <label class="form-label">Add Comment</label>
                                                        <textarea class="form-control" rows="5"></textarea>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <button class="btn btn-primary">Send</button>
                                                        <small class="form-text text-muted mt-0">Basic HTML is
                                                            allowed</small>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab_files">
                                            <div class="row">
                                                <div class="col-sm">
                                                    <form action="#" class="dropzone" id="remove_link">
                                                        <div class="fallback">
                                                            <input name="file" type="file" multiple />
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="mt-5 mb-2">
                                                <div class="title title-lg mb-0"><span>Shared files</span></div>
                                            </div>
                                            <div class="file-block">
                                                <div class="collapse-simple">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a role="button" data-bs-toggle="collapse" href="#files_collapse" aria-expanded="true">Yesterday</a>
                                                        </div>
                                                        <div id="files_collapse" class="collapse show">
                                                            <div class="card-body">
                                                                <ul class="sh-files">
                                                                    <li>
                                                                        <div class="media">
                                                                            <div class="media-head">
                                                                                <div class="avatar avatar-icon avatar-sm avatar-soft-blue">
                                                                                    <span class="initial-wrap fs-3">
                                                                                        <i class="ri-file-excel-2-fill"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <div>
                                                                                    <p class="file-name">
                                                                                        website_content.exl</p>
                                                                                    <p class="file-size">2,635
                                                                                        KB</p>
                                                                                </div>
                                                                                <div>
                                                                                    <div class="avatar avatar-xs avatar-rounded me-2">
                                                                                        <img src="{{URL::asset('dist/img/avatar2.jpg')}}" alt="user" class="avatar-img">
                                                                                    </div>
                                                                                    <a href="#" class="btn btn-sm btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                        <a class="dropdown-item ms-0" href="#">Download</a>
                                                                                        <a class="dropdown-item ms-0 link-danger" href="#">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="media">
                                                                            <div class="media-head">
                                                                                <div class="avatar avatar-icon avatar-sm avatar-soft-light">
                                                                                    <span class="initial-wrap fs-3">
                                                                                        <i class="ri-file-text-fill"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <div>
                                                                                    <p class="file-name">
                                                                                        jampack.pdf</p>
                                                                                    <p class="file-size">1.3 GB
                                                                                    </p>
                                                                                </div>
                                                                                <div>
                                                                                    <div class="avatar avatar-xs avatar-rounded me-2">
                                                                                        <img src="{{URL::asset('dist/img/avatar3.jpg')}}" alt="user" class="avatar-img">
                                                                                    </div>
                                                                                    <a href="#" class="btn btn-sm btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                        <a class="dropdown-item ms-0" href="#">Download</a>
                                                                                        <a class="dropdown-item ms-0 link-danger" href="#">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </li>
                                                                    <li>
                                                                        <div class="media">
                                                                            <div class="media-head">
                                                                                <div class="avatar avatar-icon avatar-sm avatar-soft-warning">
                                                                                    <span class="initial-wrap fs-3">
                                                                                        <i class="ri-file-zip-fill"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <div>
                                                                                    <p class="file-name">
                                                                                        themeforest-pack.zip</p>
                                                                                    <p class="file-size">2.45 GB
                                                                                    </p>
                                                                                </div>
                                                                                <div>
                                                                                    <div class="avatar avatar-xs avatar-soft-danger avatar-rounded me-2">
                                                                                        <span class="initial-wrap">H</span>
                                                                                    </div>
                                                                                    <a href="#" class="btn btn-sm btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                        <a class="dropdown-item ms-0" href="#">Download</a>
                                                                                        <a class="dropdown-item ms-0 link-danger" href="#">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </li>
                                                                    <li>
                                                                        <div class="media">
                                                                            <div class="media-head">
                                                                                <div class="avatar avatar-logo avatar-sm">
                                                                                    <span class="initial-wrap">
                                                                                        <img src="dist/img/6image.png" alt="user">
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <div>
                                                                                    <p class="file-name">
                                                                                        bruce-mars-fiEG-Pk6ZASFPk6ZASF
                                                                                    </p>
                                                                                    <p class="file-size">4,178
                                                                                        KB</p>
                                                                                </div>
                                                                                <div>
                                                                                    <div class="avatar avatar-xs avatar-rounded me-2">
                                                                                        <img src="dist/img/avatar5.jpg" alt="user" class="avatar-img">
                                                                                    </div>
                                                                                    <a href="#" class="btn btn-sm btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                        <a class="dropdown-item ms-0" href="#">Download</a>
                                                                                        <a class="dropdown-item ms-0 link-danger" href="#">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </li>
                                                                    <li>
                                                                        <div class="media">
                                                                            <div class="media-head">
                                                                                <div class="avatar avatar-logo avatar-sm">
                                                                                    <span class="initial-wrap">
                                                                                        <img src="dist/img/2image.png" alt="user">
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <div>
                                                                                    <p class="file-name">
                                                                                        jonas-kakaroto-KIPqvvTKIPqvvT
                                                                                    </p>
                                                                                    <p class="file-size">951 KB
                                                                                    </p>
                                                                                </div>
                                                                                <div>
                                                                                    <div class="avatar avatar-xs avatar-rounded me-2">
                                                                                        <img src="dist/img/avatar6.jpg" alt="user" class="avatar-img">
                                                                                    </div>
                                                                                    <a href="#" class="btn btn-sm btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                        <a class="dropdown-item ms-0" href="#">Download</a>
                                                                                        <a class="dropdown-item ms-0 link-danger" href="#">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a role="button" data-bs-toggle="collapse" href="#files_collapse_1" aria-expanded="true">23
                                                                April</a>
                                                        </div>
                                                        <div id="files_collapse_1" class="collapse show">
                                                            <div class="card-body">
                                                                <ul class="sh-files">
                                                                    <li>
                                                                        <div class="media">
                                                                            <div class="media-head">
                                                                                <div class="avatar avatar-icon avatar-sm avatar-soft-light">
                                                                                    <span class="initial-wrap fs-3">
                                                                                        <i class="ri-keynote-fill"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <div>
                                                                                    <p class="file-name">
                                                                                        presentation.keynote</p>
                                                                                    <p class="file-size">20 KB
                                                                                    </p>
                                                                                </div>
                                                                                <div>
                                                                                    <div class="avatar avatar-xs avatar-rounded me-2">
                                                                                        <img src="dist/img/avatar5.jpg" alt="user" class="avatar-img">
                                                                                    </div>
                                                                                    <a href="#" class="btn btn-sm btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                        <a class="dropdown-item ms-0" href="#">Download</a>
                                                                                        <a class="dropdown-item ms-0 link-danger" href="#">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="media">
                                                                            <div class="media-head">
                                                                                <div class="avatar avatar-icon avatar-sm avatar-soft-warning">
                                                                                    <span class="initial-wrap fs-3">
                                                                                        <i class="ri-file-zip-fill"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <div>
                                                                                    <p class="file-name">
                                                                                        PACK-TRIAL.zip</p>
                                                                                    <p class="file-size">2.45 GB
                                                                                    </p>
                                                                                </div>
                                                                                <div>
                                                                                    <div class="avatar avatar-xs avatar-rounded me-2">
                                                                                        <img src="{{URL::asset('dist/img/avatar13.jpg')}}" alt="user" class="avatar-img">
                                                                                    </div>
                                                                                    <a href="#" class="btn btn-sm btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                        <a class="dropdown-item ms-0" href="#">Download</a>
                                                                                        <a class="dropdown-item ms-0" href="#">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </li>
                                                                    <li>
                                                                        <div class="media">
                                                                            <div class="media-head">
                                                                                <div class="avatar avatar-sm">
                                                                                    <img src="dist/img/img-thumb1.jpg" alt="user" class="avatar-img">
                                                                                </div>
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <div>
                                                                                    <p class="file-name">
                                                                                        joel-mott-LaK153ghdigaghdi
                                                                                    </p>
                                                                                    <p class="file-size">3,028
                                                                                        KB</p>
                                                                                </div>
                                                                                <div>
                                                                                    <div class="avatar avatar-xs avatar-rounded me-2">
                                                                                        <img src="{{URL::asset('dist/img/avatar8.jpg')}}
" alt="user" class="avatar-img">
                                                                                    </div>
                                                                                    <a href="#" class="btn btn-sm btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                        <a class="dropdown-item ms-0" href="#">Download</a>
                                                                                        <a class="dropdown-item ms-0" href="#">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab_activity">
                                            <div class="mt-5 mb-2">
                                                <div class="title title-lg mb-0"><span>Latest activity</span>
                                                </div>
                                            </div>
                                            <div class="collapse-simple">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a role="button" data-bs-toggle="collapse" href="#activity_1" aria-expanded="true">Today</a>
                                                    </div>
                                                    <div id="activity_1" class="collapse show">
                                                        <div class="card-body">
                                                            <ul class="activity-list list-group list-group-flush">
                                                                <li class="list-group-item">
                                                                    <div class="media">
                                                                        <div class="media-head">
                                                                            <div class="avatar avatar-sm avatar-primary avatar-rounded">
                                                                                <span class="initial-wrap">H</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <p><span class="text-dark">Hencework</span>
                                                                                on Documentation link is working
                                                                                now - <a href="#" class="link-url"><u>ttps://hencework.com/theme/jampa</u></a>
                                                                            </p>
                                                                            <div class="last-activity-time">Oct
                                                                                15, 2021, 12:34 PM</div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="media">
                                                                        <div class="media-head">
                                                                            <div class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{URL::asset('dist/img/avatar2.jpg')}}" alt="user" class="avatar-img">
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <p><span class="text-dark">Morgan
                                                                                    Fregman</span> completed
                                                                                react conversion of <a href="#" class="link-default"><u>components</u></a>
                                                                            </p>
                                                                            <div class="last-activity-time">Sep
                                                                                16, 2021, 4:54 PM</div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="media">
                                                                        <div class="media-head">
                                                                            <div class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{URL::asset('dist/img/avatar13.jpg')}}" alt="user" class="avatar-img">
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <p><span class="text-dark">Jimmy
                                                                                    Carry</span>completed side
                                                                                bar menu on <a href="#" class="link-default"><u>elements</u></a>
                                                                            </p>
                                                                            <div class="last-activity-time">Sep
                                                                                10, 2021, 10:13 AM</div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="media">
                                                                        <div class="media-head">
                                                                            <div class="avatar avatar-sm avatar-rounded">
                                                                                <img src="dist/img/avatar7.jpg" alt="user" class="avatar-img">
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <p><span class="text-dark">Charlie
                                                                                    Chaplin</span> deleted empty
                                                                                cards on <a href="#" class="link-default"><u>completed</u></a>
                                                                            </p>
                                                                            <div class="last-activity-time">Sep
                                                                                10, 2021, 10:13 AM</div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a role="button" data-bs-toggle="collapse" href="#activity_2" aria-expanded="true">Yesterday</a>
                                                    </div>
                                                    <div id="activity_2" class="collapse show">
                                                        <div class="card-body">
                                                            <ul class="activity-list list-group list-group-flush">
                                                                <li class="list-group-item">
                                                                    <div class="media">
                                                                        <div class="media-head">
                                                                            <div class="avatar avatar-sm avatar-soft-danger avatar-rounded">
                                                                                <span class="initial-wrap">W</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <p><span class="text-dark">Winston
                                                                                    Churchills</span> created a
                                                                                note on UI components task list
                                                                            </p>
                                                                            <div class="last-activity-time">Sep
                                                                                2, 2021, 9:23 AM</div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="media">
                                                                        <div class="media-head">
                                                                            <div class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{URL::asset('dist/img/avatar2.jpg')}}" alt="user" class="avatar-img">
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <p><span class="text-dark">Morgan
                                                                                    Fregman</span> completed
                                                                                react conversion of <a href="#" class="link-default"><u>components</u></a>
                                                                            </p>
                                                                            <div class="last-activity-time">Sep
                                                                                16, 2021, 4:54 PM</div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="media">
                                                                        <div class="media-head">
                                                                            <div class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{URL::asset('dist/img/avatar13.jpg')}}" alt="user" class="avatar-img">
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <p><span class="text-dark">Jimmy
                                                                                    Carry</span>added shared
                                                                                components to <a href="#" class="link-default"><u>basic
                                                                                        structure</u></a></p>
                                                                            <div class="last-activity-time">Sep
                                                                                10, 2021, 10:13 AM</div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="media">
                                                                        <div class="media-head">
                                                                            <div class="avatar avatar-sm avatar-primary avatar-rounded">
                                                                                <span class="initial-wrap">H</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <p><span class="text-dark">Hencework</span>
                                                                                commented on <a href="#" class="link-default"><u>basic
                                                                                        structure</u></a></p>
                                                                            <div class="last-activity-time">Sep
                                                                                10, 2021, 10:13 AM</div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="media">
                                                                        <div class="media-head">
                                                                            <div class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{URL::asset('dist/img/avatar7.jpg')}}" alt="user" class="avatar-img">
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <p><span class="text-dark">Charlie
                                                                                    Chaplin</span> moved
                                                                                components from all modules to
                                                                                in progress</p>
                                                                            <div class="last-activity-time">Sep
                                                                                10, 2021, 10:13 AM</div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="media">
                                                                        <div class="media-head">
                                                                            <div class="avatar avatar-sm avatar-soft-danger avatar-rounded">
                                                                                <span class="initial-wrap">W</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <p><span class="text-dark">Winston
                                                                                    Churchills</span> created a
                                                                                note on UI components task list
                                                                            </p>
                                                                            <div class="last-activity-time">Sep
                                                                                10, 2021, 10:13 AM</div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="task-action-wrap">
                                    <div class="nicescroll-bar">
                                        <div class="title title-xs text-primary"><span>Action</span></div>
                                        <ul class="nav nav-sm nav-icon nav-vertical nav-light">
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0);">
                                                    <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="edit"></i></span></span>
                                                    <span class="nav-link-text">Edit</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0);">
                                                    <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="user"></i></span></span>
                                                    <span class="nav-link-text">Assign to</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0);">
                                                    <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="paperclip"></i></span></span>
                                                    <span class="nav-link-text">Attach files</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0);">
                                                    <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="tag"></i></span></span>
                                                    <span class="nav-link-text">ApplyLabels</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0);">
                                                    <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="calendar"></i></span></span>
                                                    <span class="nav-link-text">Set Due Date</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0);">
                                                    <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="bookmark"></i></span></span>
                                                    <span class="nav-link-text">Follow Task</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="hk-separator hk-separator-sm hk-secondary-separator"></div>
                                        <ul class="nav nav-sm nav-icon nav-vertical nav-light">
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0);">
                                                    <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="arrow-up"></i></span></span>
                                                    <span class="nav-link-text">Set as Top Priority</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0);">
                                                    <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="repeat"></i></span></span>
                                                    <span class="nav-link-text">Change Status</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0);">
                                                    <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="pocket"></i></span></span>
                                                    <span class="nav-link-text">Save as Template</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0);">
                                                    <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="archive"></i></span></span>
                                                    <span class="nav-link-text">Move to archive</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0);">
                                                    <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="trash-2"></i></span></span>
                                                    <span class="nav-link-text">Delete</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Task Details -->

                <!-- Add New Card -->
                <div id="add_new_card" class="modal fade add-new-task" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h5 class="mb-4">Create New Card</h5>
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
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Note/Description</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mt-3">
                                                <label class="form-label">Set priority:</label>
                                                <div class="form-check form-check-inline">
                                                    <div class="form-check form-check-primary">
                                                        <input type="radio" id="customRadioc2" name="customRadioc2" class="form-check-input">
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
                                </form>
                            </div>
                            <div class="modal-footer align-items-center">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary btn-add-task">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Add New Card -->

                <!-- Add Task List -->
                <div id="add_task_list" class="modal fade add-tasklist-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h5 class="mb-4">Add Task List</h5>
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
                                <h5 class="mb-4">Create Task List</h5>
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

                <!-- Add New Board -->
                <div id="add_new_board" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h5>Add New Board</h5>
                                <p class="mb-4"></p>
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
                <!-- /Add New Board -->

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
<!-- /Main Content -->
@endsection
<script src="{{URL::asset('dist/js/kanban-board-data.js')}}"></script>
