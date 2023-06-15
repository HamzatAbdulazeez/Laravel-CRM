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
                                                    <div class="form-text text-muted">
                                                        For better preview recommended size is 450px x 450px. Max size 5mb.
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
                                            <input class="form-control" type="text" value="Kate" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Last Name</label>
                                            <input class="form-control" type="text" value="Jones" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row gx-3">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Location</label>
                                            <input class="form-control" type="text" value="Lane no 1, Newyork" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row gx-3">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-label-group">
                                                <label class="form-label">Bio</label>
                                                <small class="text-muted">1200</small>
                                            </div>
                                            <textarea class="form-control" rows="8" placeholder="Write an internal note"></textarea>
                                            <small class="form-text text-muted">
                                                Brief bio about yourself. This will be displayed on your profile page.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Additional Info</span></div>
                                <div class="row gx-3">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Personal Website</label>
                                            <input class="form-control" type="text" value="hencework.com" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Phone</label>
                                            <input class="form-control" type="text" value="xxxxxxx987" />
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheckList4">
                                            <label class="form-check-label" for="customCheckList4">
                                                Keep my number private
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary mt-5">Save Changes</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tab_block_2">
                            <div class="title-lg fs-4"><span>Account Settings</span></div>
                            <p class="mb-4">The Avatar component is used to represent a user, and displays the profile picture, initials or fallback icon.</p>
                            <form>
                                <div class="row gx-3">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Username</label>
                                            <input class="form-control" type="text" value="Kate" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row gx-3">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" type="text" value="Lane no 1, Newyork" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row gx-3">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">URL</label>
                                            <input class="form-control" type="text" value="hencework.com" />
                                        </div>
                                    </div>
                                </div>
                                <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Tracking Code</span></div>
                                <div class="row gx-3">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Google Analytics tracking code</label>
                                            <input class="form-control" type="text" value="UA-1387652-1" />
                                            <small class="form-text text-muted">
                                                Track shot and profile views in your Google analytics account, eg. UA-0000000-0
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Account Changes</span></div>
                                <div class="row gx-3">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <a href="#" class="h5 d-block mb-0">Delete Account</a>
                                            <small class="form-text text-muted">
                                                Delete account and all your data
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-end">
                                        <div class="form-group">
                                            <button type="button" class="btn btn-danger">Close account</button>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary mt-5">Save Changes</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tab_block_3">
                            <div class="title-lg fs-4 mb-4"><span>Privacy Settings</span></div>
                            <form>
                                <div class="row gx-3">
                                    <div class="col-sm-12">
                                        <div class="form-check form-check-lg">
                                            <input type="checkbox" class="form-check-input" id="customChecks1">
                                            <label class="form-check-label mt-0" for="customChecks1">let others find me by email address</label>
                                            <small class="form-text text-muted d-block">People who have your email address will be able to connect you by Jampack</small>
                                        </div>
                                        <div class="separator"></div>
                                        <div class="form-check form-check-lg">
                                            <input type="checkbox" class="form-check-input" id="customChecks2">
                                            <label class="form-check-label mt-0" for="customChecks2">Keep my phone number private</label>
                                            <small class="form-text text-muted d-block">No one can find you by your phone number. Your phone number will not be shared with your contact anymore.</small>
                                        </div>
                                        <div class="separator"></div>
                                        <div class="form-check form-check-lg">
                                            <input type="checkbox" class="form-check-input" id="customChecks3">
                                            <label class="form-check-label mt-0" for="customChecks3">All Keep my location sharing on</label>
                                            <small class="form-text text-muted d-block">Jmapack webapp shares your location wherever you go</small>
                                        </div>
                                        <div class="separator"></div>
                                        <div class="form-check form-check-lg">
                                            <input type="checkbox" class="form-check-input" id="customChecks4">
                                            <label class="form-check-label mt-0" for="customChecks4">Share data through select partnerships</label>
                                            <small class="form-text text-muted d-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum mauris volutpat enim ornare iaculis. Curabitur euismod rutrum lorem id lobortis. Cras ut ex dui. Nulla sed blandit tortor. In quam diam, efficitur sit amet pulvinar eget, consequat placerat arcu.</small>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary mt-5">Save Changes</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tab_block_4">
                            <div class="title-lg fs-4"><span>Login & Security</span></div>
                            <p class="mb-4">The Avatar component is used to represent a user, and displays the profile picture, initials or fallback icon.</p>
                            <form>
                                <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Password Settings</span></div>
                                <div class="row gx-3">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Password</label>
                                            <input class="form-control" type="password" value="Katervewe" />
                                            <button type="button" class="btn btn-primary mt-3">Changes password</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Additional Security</span></div>
                                <div class="row gx-3">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label ">2-Step Verification (2FA)</label>
                                            <small class="form-text text-muted d-block">
                                                2-step verification drastically reduces the chances of having the personal information in your Google account stolen by someone else. Why? Because hackers would have to not only get your password and your username, they'd have to get a hold of your phone. A <a href="#" class="text-primary">6-digit</a> code may be sent to a number you’ve previously provided. Codes can be sent in a text message (SMS) or through a voice call, which depends on the setting you chose. To verify it’s you, enter the code on the sign-in screen.
                                            </small>
                                            <button type="button" class="btn btn-primary mt-3">Add Authentication</button>
                                        </div>
                                    </div>
                                </div>
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

