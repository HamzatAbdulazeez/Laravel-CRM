<div>
    <!-- Main Content -->
 <div class="hk-pg-wrapper pb-0">
    <!-- Page Body -->
    <div class="hk-pg-body py-0">
        <div class="contactapp-wrap">
            <nav class="contactapp-sidebar">
                <div data-simplebar class="nicescroll-bar">
                    <div class="menu-content-wrap">
                        <button type="button" class="btn btn-primary btn-rounded btn-block mb-4"
                            data-bs-toggle="modal" data-bs-target="#add_new_contact">
                            Add new staff
                        </button>
                        <div class="menu-group">
                            <ul class="nav nav-light navbar-nav flex-column">
                                <li class="nav-item active">
                                    <a class="nav-link" href="javascript:void(0);">
                                        <span class="nav-icon-wrap"><span class="feather-icon"><i
                                                    data-feather="inbox"></i></span></span>
                                        <span class="nav-link-text">All Contacts</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="separator separator-light"></div>
                        <div class="menu-group">
                            <ul class="nav nav-light navbar-nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);">
                                        <span class="nav-icon-wrap"><span class="feather-icon"><i
                                                    data-feather="upload"></i></span></span>
                                        <span class="nav-link-text">Export</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);">
                                        <span class="nav-icon-wrap"><span class="feather-icon"><i
                                                    data-feather="download"></i></span></span>
                                        <span class="nav-link-text">Import</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);">
                                        <span class="nav-icon-wrap"><span class="feather-icon"><i
                                                    data-feather="printer"></i></span></span>
                                        <span class="nav-link-text">Print</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="separator separator-light"></div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="title-sm text-primary mb-0">Departments</div>
                            <a href="#" class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="modal"
                                data-bs-target="#add_new_label"><span class="icon" data-bs-toggle="tooltip"
                                    data-placement="top" title="" data-bs-original-title="Add Department"><span
                                        class="feather-icon"><i data-feather="plus"></i></span></span></a>
                        </div>
                        <div class="menu-group">
                            <ul class="nav nav-light navbar-nav flex-column">
                                @foreach ($departments as $item)
                                    <li class="nav-item">
                                        <a class="nav-link link-badge-right" href="#">
                                            <span class="nav-link-text">{{$item->name}}</span>
                                            <span
                                                class="badge badge-pill badge-sm badge-soft-primary ms-auto">136</span>
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>

            </nav>
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title dropdown-toggle link-dark"
                                    >
                                    <h1>Staffs</h1>
                                </a>
                            </div>
                        </div>
                        <div class="hk-sidebar-togglable"></div>
                    </header>
                    <div class="contact-body">
                        <div data-simplebar class="nicescroll-bar">
                            <div class="collapse" id="collapseQuick">
                                <div class="quick-access-form-wrap">

                                </div>
                            </div>
                            <div class="contact-list-view">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <table id="datable_1" class="table nowrap w-100 mb-5">
                                    <thead>
                                        <tr>
                                            <th><span class="form-check mb-0">
                                                    <input type="checkbox"
                                                        class="form-check-input check-select-all"
                                                        id="customCheck1">
                                                    <label class="form-check-label" for="customCheck1"></label>
                                                </span></th>
                                            <th>Name</th>
                                            <th>Email Address</th>
                                            <th>Phone</th>
                                            <th>Departments</th>
                                            <th>Date Created</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($staffs as $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">

                                                </div>
                                            </td>
                                            <td>
                                                <div class="media align-items-center">
                                                    <div class="media-head me-2">
                                                        <div
                                                            class="avatar avatar-xs avatar-primary avatar-rounded">
                                                            <span class="initial-wrap">{{$item->firstName[0]}}{{$item->lastName[0]}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="d-block text-high-em">{{$item->fullName}}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-truncate">{{$item->email}}</td>
                                            <td>+145 52 5463</td>
                                            <td>{{\App\Models\Department::where('id', $item->dept)->first()->name ?? ''}}</td>
                                            <td>{{$item->created_at->format('d M, Y')}}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            data-bs-toggle="tooltip" data-placement="top"
                                                            title="" data-bs-original-title="View"
                                                            href="{{route('admin.staff.detail', $item->id )}}"><span class="icon"><span
                                                                    class="feather-icon"><i
                                                                        data-feather="eye"></i></span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            data-bs-toggle="tooltip" data-placement="top"
                                                            title="" data-bs-original-title="Edit"
                                                            href="{{route('admin.staff.edit', $item->id)}}"><span class="icon"><span
                                                                    class="feather-icon"><i
                                                                        data-feather="edit"></i></span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"
                                                        wire:click.prevent="deleteId('{{ $item->id }}', '{{$item->fullName}}')" data-bs-toggle="modal" data-bs-target="#delete" data-placement="top"
                                                            title="" data-bs-original-title="Delete"
                                                            href=""><span class="icon"><span
                                                                    class="feather-icon"><i
                                                                        data-feather="trash"></i></span></span></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Edit Info -->
                <div id="add_new_contact" class="modal fade add-new-contact" tabindex="-1" role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h5 class="mb-5">Create New Staff</h5>

                                <form wire:submit.prevent="addStaff">
                                    <div
                                        class="title title-xs title-wth-divider text-primary text-uppercase my-4">
                                        <span>Basic Info</span>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">First Name</label>
                                                <input class="form-control" wire:model.defer="firstName" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Last Name</label>
                                                <input class="form-control" wire:model.defer="lastName" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Email ID</label>
                                                <input class="form-control" type="email" wire:model.defer="email" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Password</label>
                                                <input class="form-control" type="password" wire:model.defer="password" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-md-12">
                                            <label for="Address">Address</label>
                                            <textarea wire:model.defer="address" class="form-control" id="" cols="20" rows="5"></textarea>
                                        </div>
                                    </div>

                                    <div
                                        class="title title-xs title-wth-divider text-primary text-uppercase my-4">
                                        <span>Additional Info</span>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Department</label>
                                                <select id="input_tags_3" wire:model.defer="dept" class="form-control">
                                                    <option value="" selected>Choose Department</option>
                                                    @foreach ($departments as $item)
                                                    {{$item->id}}
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer align-items-center">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Discard</button>
                                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Add
                                            Staff</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /Edit Info -->

                <div wire:ignore.self id="delete" class="modal fade delete" tabindex="-1" role="dialog"
                aria-hidden="true">

                    <div class="modal-dialog" role="document">

                        <div class="modal-content">

                            <div class="modal-header">

                                <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>

                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>

                            </div>

                           <div class="modal-body">

                                <p>Are you sure want to delete {{$name}}?</p>

                            </div>

                            <div class="modal-footer">

                                <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>

                                <button type="button" wire:click.prevent="delete()" class="btn btn-danger close-modal" data-bs-dismiss="modal">Yes, Delete</button>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Add Label -->
                <div id="add_new_label" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h6 class="text-uppercase fw-bold mb-3">Add Department</h6>
                                <form wire:submit.prevent="addDept">
                                    <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input class="form-control" wire:model.defer="deptName" type="text"
                                                    placeholder="Department Name" />
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" data-bs-dismiss="modal" class="btn btn-primary float-end">Add</button>
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
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h6 class="text-uppercase fw-bold mb-3">Add Tag</h6>
                                <form>
                                    <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <select id="input_tags_3" class="form-control"
                                                    multiple="multiple">
                                                    <option selected="selected">Collaborator</option>
                                                    <option selected="selected">Designer</option>
                                                    <option selected="selected">React Developer</option>
                                                    <option selected="selected">Promotion</option>
                                                    <option selected="selected">Advertisement</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary float-end"
                                        data-bs-dismiss="modal">Add</button>
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
</div>
