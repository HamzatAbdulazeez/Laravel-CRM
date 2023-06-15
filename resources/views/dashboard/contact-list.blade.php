@extends('layouts.dashboard-frontend')

@section('page-content')
<!-- Main Content -->
<div class="hk-pg-wrapper pb-0">
    <!-- Page Body -->
    <div class="hk-pg-body py-0">
        <div class="contactapp-wrap">
            <nav class="contactapp-sidebar">
                <div data-simplebar class="nicescroll-bar">
                    <div class="menu-content-wrap">
                        <button type="button" class="btn btn-primary btn-rounded btn-block mb-4" data-bs-toggle="modal" data-bs-target="#add_new_contact">
                            Add new contact
                        </button>
                        <div class="menu-group">
                            <ul class="nav nav-light navbar-nav flex-column">
                                <li class="nav-item active">
                                    <a class="nav-link" href="javascript:void(0);">
                                        <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="inbox"></i></span></span>
                                        <span class="nav-link-text">All Contacts</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="separator separator-light"></div>
                        <div class="menu-group">
                            <ul class="nav nav-light navbar-nav flex-column">

                            </ul>
                        </div>
                    </div>
                </div>
                <!--Sidebar Fixnav-->
                <div class="contactapp-fixednav">
                    <div class="hk-toolbar">
                        <ul class="nav nav-light">
                        </ul>
                    </div>
                </div>
                <!--/ Sidebar Fixnav-->
            </nav>
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark">
                                    <h1>Contacts</h1>
                                </a>
                            </div>
                        </div>
                        <div class="contact-options-wrap">

                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none" href="#" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i data-feather="refresh-cw"></i></span></span></a>
                            <div class="v-separator d-lg-block d-none"></div>
                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret  d-lg-inline-block d-none  ms-sm-0" href="#" data-bs-toggle="dropdown"><span class="icon" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Manage Contact"><span class="feather-icon"><i data-feather="settings"></i></span></span></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Export</a>
                            </div>
                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none" href="#" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Collapse">
                                <span class="icon">
                                    <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                    <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class="hk-sidebar-togglable"></div>
                    </header>
                    <div class="contact-body">
                        <div data-simplebar class="nicescroll-bar">
                            <div class="collapse" id="collapseQuick">
                                <div class="quick-access-form-wrap">
                                    <form class="quick-access-form border">
                                        <div class="row gx-3">
                                            <div class="col-xxl-10">
                                                <div class="position-relative">
                                                    <div class="dropify-square">
                                                        <input type="file" class="dropify-1" />
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row gx-3">
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <input class="form-control" placeholder="First name*" value="" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input class="form-control" placeholder="Last name*" value="" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <input class="form-control" placeholder="Email Id*" value="" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input class="form-control" placeholder="Phone" value="" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <input class="form-control" placeholder="Department" value="" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <select id="input_tags" class="form-control" multiple="multiple">
                                                                        <option selected="selected">Collaborator
                                                                        </option>
                                                                        <option>Designer</option>
                                                                        <option selected="selected">Developer
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2">
                                                <div class="form-group">
                                                    <button data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" class="btn btn-block btn-primary ">Create New
                                                    </button>
                                                </div>
                                                <div class="form-group">
                                                    <button data-bs-toggle="collapse" disabled data-bs-target="#collapseExample" aria-expanded="false" class="btn btn-block btn-secondary">Discard
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="contact-list-view">
                                <table id="datable_1" class="table nowrap w-100 mb-5">
                                    <thead>
                                        <tr>
                                            <th><span class="form-check mb-0">
                                                    <input type="checkbox" class="form-check-input check-select-all" id="customCheck1">
                                                    <label class="form-check-label" for="customCheck1"></label>
                                                </span></th>
                                            <th>Name</th>
                                            <th>Email Address</th>
                                            <th>Phone</th>
                                            <th>Date Created</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="contact-star marked"><span class="feather-icon"></span></span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media align-items-center">
                                                    <div class="media-head me-2">
                                                        <div class="avatar avatar-xs avatar-rounded">
                                                            <img src="{{URL::asset('dist/img/avatar1.jpg')}}" alt="user" class="avatar-img">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="d-block text-high-em">Hamzat Abdulazeez</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-truncate">abdula@gmailcom</td>
                                            <td>081455 52 5689</td>
                                            <td>15 June, 2023</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="View" href="#"><span class="icon"><span class="feather-icon" data-bs-toggle="modal" data-bs-target="#view_new_contact"><i class="bi bi-eye"></i></span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit" ><span class="icon"><span class="feather-icon" data-bs-toggle="modal" data-bs-target="#add_new_contactt"><i data-feather="edit"></i></span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete" href="#"><span class="icon"><span class="feather-icon"><i data-feather="trash"></i></span></span></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="contact-star marked"><span class="feather-icon"></span></span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media align-items-center">
                                                    <div class="media-head me-2">
                                                        <div class="avatar avatar-xs avatar-rounded">
                                                            <img src="{{URL::asset('dist/img/avatar9.jpg')}}" alt="user" class="avatar-img">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="d-block text-high-em">Ezema Promise</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-truncate">promise@gmail.com</td>
                                            <td>+234 48 2365</td>
                                            <td>16 June, 2023</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="View" href="#"><span class="icon"><span class="feather-icon" data-bs-toggle="modal" data-bs-target="#view_new_contact"><i class="bi bi-eye"></i></span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit"><span class="icon"><span class="feather-icon" data-bs-toggle="modal" data-bs-target="#add_new_contactt"><i data-feather="edit"></i></span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete" href="#"><span class="icon"><span class="feather-icon"><i data-feather="trash"></i></span></span></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ADD CONTACT Info -->
                <div id="add_new_contact" class="modal fade add-new-contact" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h5 class="mb-5">Create New Conatct</h5>
                                <form>
                                    <div class="title title-xs title-wth-divider text-primary text-uppercase my-4">
                                        <span>Basic Info</span>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">First Name</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Middle Name</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Last Name</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Email ID</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Phone</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">City</label>
                                                <select class="form-select">
                                                    <option selected="">--</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">State</label>
                                                <select class="form-select">
                                                    <option selected="">--</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Country</label>
                                                <select class="form-select">
                                                    <option selected="">--</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title title-xs title-wth-divider text-primary text-uppercase my-4">
                                        <span>Company Info</span>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Company Name</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Designation</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Website</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Work Phone</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title title-xs title-wth-divider text-primary text-uppercase my-4">
                                        <span>Additional Info</span>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Facebook" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Twitter" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="LinkedIn" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Gmail" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer align-items-center">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Create
                                    Contact</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Edit Info -->

                <!-- Edit Contact Info -->
                <div id="add_new_contactt" class="modal fade add-new-contactt" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h5 class="mb-5">Edit Contact</h5>
                                <form>
                                    <div class="title title-xs title-wth-divider text-primary text-uppercase my-4">
                                        <span>Basic Info</span>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">First Name</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Middle Name</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Last Name</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Email ID</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Phone</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">City</label>
                                                <select class="form-select">
                                                    <option selected="">--</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">State</label>
                                                <select class="form-select">
                                                    <option selected="">--</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Country</label>
                                                <select class="form-select">
                                                    <option selected="">--</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title title-xs title-wth-divider text-primary text-uppercase my-4">
                                        <span>Company Info</span>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Company Name</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Designation</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Website</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Work Phone</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title title-xs title-wth-divider text-primary text-uppercase my-4">
                                        <span>Additional Info</span>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Facebook" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Twitter" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="LinkedIn" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Gmail" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer align-items-center">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Create
                                    Contact</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Edit Info -->

                <!-- View Contact Info -->
                <div id="view_new_contact" class="modal fade view-new-contact" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h5 class="mb-5">View Contact</h5>
                                <form>
                                    <div class="title title-xs title-wth-divider text-primary text-uppercase my-4">
                                        <span>Basic Info</span>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">First Name</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Middle Name</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Last Name</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Email ID</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Phone</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">City</label>
                                                <select class="form-select">
                                                    <option selected="">--</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">State</label>
                                                <select class="form-select">
                                                    <option selected="">--</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Country</label>
                                                <select class="form-select">
                                                    <option selected="">--</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title title-xs title-wth-divider text-primary text-uppercase my-4">
                                        <span>Company Info</span>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Company Name</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Designation</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Website</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Work Phone</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title title-xs title-wth-divider text-primary text-uppercase my-4">
                                        <span>Additional Info</span>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Facebook" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Twitter" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="LinkedIn" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Gmail" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer align-items-center">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Create
                                    Contact</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Edit Info -->

                <!-- Add Label -->
                <div id="add_new_label" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h6 class="text-uppercase fw-bold mb-3">Add Label</h6>
                                <form>
                                    <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Label Name" />
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary float-end" data-bs-dismiss="modal">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Label -->

                <!-- Add Tag -->
                <div id="add_new_tag" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h6 class="text-uppercase fw-bold mb-3">Add Tag</h6>
                                <form>
                                    <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <select id="input_tags_3" class="form-control" multiple="multiple">
                                                    <option selected="selected">Collaborator</option>
                                                    <option selected="selected">Designer</option>
                                                    <option selected="selected">React Developer</option>
                                                    <option selected="selected">Promotion</option>
                                                    <option selected="selected">Advertisement</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary float-end" data-bs-dismiss="modal">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Tag -->
            </div>
        </div>
    </div>
    <!-- /Page Body -->
</div>
<!-- /Main Content -->
@endsection
