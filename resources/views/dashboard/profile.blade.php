
@extends('layouts.dashboard-frontend')

@section('page-content')
<!-- Main Content -->
<div class="hk-pg-wrapper">
    <div class="container-xxl">
        <!-- Page Header -->
        <div class="hk-pg-header pt-7 pb-4">
            <h1 class="pg-title">Edit Profile</h1>
            <p>Fill Below to Edit Your Profile</p>
        </div>
        <!-- /Page Header -->

        <!-- Page Body -->
        <div class="hk-pg-body">
            <div class="row edit-profile-wrap">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab_block_1">
                            <form>
                                <div class="row gx-3">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="media align-items-center">
                                                <div class="media-head me-5">
                                                    <div class="avatar avatar-rounded avatar-xxl">
                                                        <img src="{{URL::asset('dist/img/avatar3.jpg')}}" alt="user" class="avatar-img">
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="btn btn-soft-primary btn-file mb-1">
                                                        Upload Photo
                                                        <input type="file" class="upload">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Personal Info</span></div>
                                <div class="row gx-3">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">First Name</label>
                                            <input class="form-control" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Last Name</label>
                                            <input class="form-control" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" type="email" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Phone Number</label>
                                            <input class="form-control" type="tel" />
                                        </div>
                                    </div>
                                </div>
                                <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Login & Security</span></div>
                                <div class="row gx-3">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Old Password</label>
                                            <input class="form-control" type="password" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">New Password</label>
                                            <input class="form-control" type="password" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Confirm New Password</label>
                                            <input class="form-control" type="password" />
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary mt-5">Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
        <!-- /Page Body -->
    </div>
</div>
<!-- /Main Content -->
@endsection

