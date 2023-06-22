<div>
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
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb  mb-0">
                                        <li class="breadcrumb-item"><a>Staff</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{$staff->fullName}}</li>
                                    </ol>
                                </nav>
                            </div>

                            <div class="hk-sidebar-togglable"></div>
                        </header>
                        <div class="contact-body contact-detail-body">
                            <div data-simplebar class="nicescroll-bar">
                                <div class="d-flex flex-xxl-nowrap flex-wrap">
                                    <div class="contact-info w-xxl-30 w-100">
                                        <div class="text-center mt-5">
                                            <div class="dropify-circle edit-img">
                                                <input type="file" class="dropify-1" data-default-file="{{URL::asset('dist/img/avatar2.jpg')}}" />
                                            </div>
                                            <div class="cp-name text-truncate mt-3">{{$staff->fullName}}</div>
                                            {{-- <p>No phone calls Always busy</p>
                                            <div class="rating rating-yellow my-rating-4" data-rating="3"></div>
                                            <ul class="hk-list hk-list-sm justify-content-center mt-2">
                                                <li>
                                                    <a class="btn btn-icon btn-soft-primary btn-rounded" href="#"><span class="icon"><span class="feather-icon"><i class="bi bi-envelope"></i></span></span></a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-icon btn-soft-success btn-rounded" href="#"><span class="icon"><span class="feather-icon"><i class="bi bi-telephone-inbound"></i></span></span></a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-icon btn-soft-danger btn-rounded" href="#"><span class="icon"><span class="feather-icon"><i class="bi bi-person-video3"></i></span></span></a>
                                                </li>
                                            </ul> --}}
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#">Profile Information</a>
                                                <button class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><span class="icon" data-bs-toggle="modal" data-bs-target="#editInfo"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></button>
                                            </div>
                                            <div class="card-body">
                                                <ul class="cp-info">
                                                    <li>
                                                        <span>First name</span>
                                                        <span>{{$staff->firstName}}</span>
                                                    </li>
                                                    <li>
                                                        <span>Last name</span>
                                                        <span>{{$staff->lastName}}</span>
                                                    </li>
                                                    <li>
                                                        <span>Email</span>
                                                        <span>{{$staff->email}}</span>
                                                    </li>
                                                    <li>
                                                        <span>Phone</span>
                                                        <span>+912-4532-1234</span>
                                                    </li>
                                                    <li>
                                                        <span>Location</span>
                                                        <span>{{$staff->address}}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="separator-full"></div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#">More Info</a>
                                                <button class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><span class="icon" data-bs-toggle="modal" data-bs-target="#moreContact"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></button>
                                            </div>
                                            <div class="card-body">
                                                <ul class="cp-info">
                                                    <li>
                                                        <span>Department</span>
                                                        <span>{{\App\Models\Department::where('id', $staff->dept)->first()->name ?? ''}}</span>
                                                    </li>
                                                    {{-- <li>
                                                        <span>Company</span>
                                                        <span>Freeman</span>
                                                    </li>
                                                    <li>
                                                        <span>Language</span>
                                                        <span>morgan@flights.com</span>
                                                    </li>
                                                    <li>
                                                        <span>Birthday</span>
                                                        <span>-</span>
                                                    </li>
                                                    <li>
                                                        <span>Location</span>
                                                        <span>Newyork</span>
                                                    </li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        {{-- <div class="separator-full"></div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#">Tags</a>
                                                <button class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add Tags"><span class="icon" data-bs-toggle="modal" data-bs-target="#tagsInput"><span class="feather-icon"><i data-feather="plus"></i></span></span></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-soft-violet">Collaboration</span>
                                                <span class="badge badge-soft-danger">React Developer</span>
                                            </div>
                                        </div>
                                        <div class="separator-full"></div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#">Social Profile</a>
                                            </div>
                                            <div class="card-body">
                                                <ul class="hk-list hk-list-sm">
                                                    <li>
                                                        <button class="btn btn-icon btn-rounded btn-primary"><span class="icon"><i class="fab fa-behance"></i></span></button>
                                                    </li>
                                                    <li>
                                                        <button class="btn btn-icon btn-rounded btn-warning"><span class="icon"><i class="fab fa-google-drive"></i></span></button>
                                                    </li>
                                                    <li>
                                                        <button class="btn btn-icon btn-rounded btn-info"><span class="icon"><i class="fab fa-dropbox"></i></span></button>
                                                    </li>
                                                    <li>
                                                        <button class="btn btn-icon btn-rounded btn-dark"><span class="icon"><i class="fab fa-github"></i></span></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="separator-full"></div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#">Biography</a>
                                                <button class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><span class="icon" data-bs-toggle="modal" data-bs-target="#addBio"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></button>
                                            </div>
                                            <div class="card-body">
                                                <p>Hello there, Morgan Freeman is a full-stack frontend developer working under pressure is his quality.</p>
                                            </div>
                                        </div> --}}
                                        <div class="separator-full"></div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#">Settings</a>
                                            </div>
                                            <div class="card-body">
                                                <ul class="cp-action">
                                                    {{-- <li>
                                                        <a href="javascript:void(0);">
                                                            <span class="cp-icon-wrap"><span class="feather-icon"><i data-feather="upload"></i></span></span>
                                                            Share Contact
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <span class="cp-icon-wrap"><span class="feather-icon"><i data-feather="heart"></i></span></span>
                                                            Add to Favourites
                                                        </a>
                                                    </li> --}}
                                                    <li>
                                                        <a href="javascript:void(0);" class="link-danger">
                                                            <span class="cp-icon-wrap"><span class="feather-icon"><i data-feather="trash"></i></span></span>
                                                            Delete Contact
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-more-info">
                                        <ul class="nav nav-tabs nav-line nav-icon nav-light">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#tab_tickets">
                                                    <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="zap"></i></span></span>
                                                    <span class="nav-link-text">Tickets</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#tab_activity">
                                                    <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="activity"></i></span></span>
                                                    <span class="nav-link-text">Activity</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content mt-7">
                                            <div class="tab-pane fade show active" id="tab_tickets">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-12 form-group">
                                                            <div class="form-label-group">
                                                                <label>Write a Note</label>
                                                                <small class="text-muted">1200</small>
                                                            </div>
                                                            <textarea class="form-control" rows="8" placeholder="Write an internal note"></textarea>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-outline-light mt-2">Add Note</button>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="tab_activity">
                                                <div class="activity-wrap mt-7">
                                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                                        <div class="title-lg mb-0">Activity</div>
                                                        <select class="form-select mw-150p">
                                                            <option selected="">All Activity</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                    <div class="title-sm text-primary mb-3">June 24</div>
                                                    <ul class="activity-thread">
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-head">
                                                                    <div class="avatar avatar-icon avatar-sm avatar-primary avatar-rounded">
                                                                        <span class="initial-wrap"><span class="feather-icon"><i data-feather="mail"></i></span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div>
                                                                        <div class="activity-text">You sent <span class="text-dark text-capitalize">1 message</span> to the contact.</div>
                                                                        <div class="activity-time">10.00 pm</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-head">
                                                                    <div class="avatar avatar-sm avatar-soft-danger avatar-rounded">
                                                                        <span class="initial-wrap">M</span>
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div>
                                                                        <div class="activity-text"><span class="text-dark text-capitalize">Morgan Freeman</span> as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled.</div>
                                                                        <div class="activity-time">10.00 pm</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-head">
                                                                    <div class="avatar  avatar-icon avatar-sm avatar-info avatar-rounded">
                                                                        <span class="initial-wrap"><span class="feather-icon"><i data-feather="shield"></i></span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div>
                                                                        <div class="activity-text">Your deal value <span class="text-dark">$208.15</span> is paid through PayU Money online on <span class="text-dark">02.12.18</span> at <span class="text-dark">15:30, Monday</span></div>
                                                                        <div class="activity-time">10.00 pm</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="title-sm text-primary mt-5 mb-3">June 25</div>
                                                    <ul class="activity-thread">
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-head">
                                                                    <div class="avatar avatar-sm avatar-soft-danger avatar-rounded">
                                                                        <span class="initial-wrap">M</span>
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div>
                                                                        <div class="activity-text"><span class="text-dark">Morgan Freeman</span> responded to your appointment schedule question. </div>
                                                                        <div class="activity-time">10.00 pm</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pipeline-status-wrap mt-7">
                                            <div class="title-lg mb-3">Lead Pipeline Status</div>
                                            <ul class="pipeline-stutus">
                                                <li class="completed"><span>In Pipeline</span></li>
                                                <li class="active"><span>Follow Up</span></li>
                                                <li><span>Scheduled Service</span></li>
                                                <li><span>Conversation</span></li>
                                                <li><span>Win/Lost</span></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Information -->
                    <div class="modal fade" id="editInfo" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">Profile Information</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row gx-3">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label">First Name</label>
                                                    <input class="form-control" type="text" value="Mandaline" placeholder="First Name" name="name" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label">Last Name</label>
                                                    <input class="form-control" type="text" value="Shane" placeholder="Last Name" name="lastname" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gx-3">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label">Email ID</label>
                                                    <input class="form-control" type="email" value="contct@hencework.com" placeholder="Email Id" name="emailid" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label">Phone</label>
                                                    <input class="form-control" type="text" value="+91-25-4125-2365" placeholder="Phone No" name="phone" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gx-3">
                                            <div class="col-sm-12">
                                                <label class="form-label">Location</label>
                                                <div class="form-group">
                                                    <input class="form-control" type="text" value="Lane 1" placeholder="Line 1" name="add1" />
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" type="text" value="Newyork" placeholder="Line 2" name="add2" />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer align-items-center">
                                    <button type="button" class="btn btn-secondary">Discard</button>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Profile Information -->

                    <!-- More Info -->
                    <div class="modal fade" id="moreContact" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">Profile Information</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row gx-3">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label">Designation</label>
                                                    <input class="form-control" type="text" value="Mandaline" placeholder="First Name" name="name1" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label">Company</label>
                                                    <input class="form-control" type="text" value="Shane" placeholder="Last Name" name="lastname1" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gx-3">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label">Language</label>
                                                    <input class="form-control" type="email" value="contct@hencework.com" placeholder="Email Id" name="emailid1" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label">Birthday</label>
                                                    <input class="form-control" type="text" value="10/24/1984" placeholder="Phone No" name="birthday1" />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer align-items-center">
                                    <button type="button" class="btn btn-secondary">Discard</button>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /More Info -->

                    <!-- Add Bio -->
                    <div class="modal fade" id="tagsInput" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">Tags</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row gx-3">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <select id="input_tags" class="form-control" multiple="multiple">
                                                        <option selected="selected">Collaborator</option>
                                                        <option>Designer</option>
                                                        <option selected="selected">React Developer</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer align-items-center">
                                    <button type="button" class="btn btn-secondary">Discard</button>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Tags -->

                    <!-- Add Bio -->
                    <div class="modal fade" id="addBio" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">Biography</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row gx-3">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="4" placeholder="Add Bio"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer align-items-center">
                                    <button type="button" class="btn btn-secondary">Discard</button>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Add Bio -->

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
</div>
