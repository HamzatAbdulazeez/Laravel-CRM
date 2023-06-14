<div>
    <!-- Wrapper -->
    <div class="hk-wrapper hk-pg-auth" data-footer="simple">
        <!-- Top Navbar -->
        <nav class="hk-navbar navbar navbar-expand-xl navbar-light fixed-top">
            <div class="container">
                <!-- Start Nav -->
                <div class="">
                    <a class="navbar-brand alling" href="#">
                        <img src="https://firstpavilion.sfo3.cdn.digitaloceanspaces.com/CrmFinance/NOLT-horizontal-logo-RGB-L.png" draggable="false" />
                    </a>
                </div>
                <!-- /Start Nav -->
            </div>
        </nav>
        <!-- /Top Navbar -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Page Body -->
            <div class="hk-pg-body">
                <!-- Container -->
                <div class="container-xxl">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4 position-relative mx-auto">
                            <div class="auth-content py-md-0 py-8">
                                <form class="w-100" wire:submit.prevent="submit">
                                    <div class="row">
                                        <div class="col-lg-12 mx-auto">
                                            <h4 class="mb-4 mt-5">Sign in to your account</h4>
                                            <div class="row gx-3 mt-2">
                                                <div class="form-group col-lg-12 mb-4">
                                                    <div class="form-label-group">
                                                        <label class="label">Email/Username</label>
                                                    </div>
                                                    <input class="form-control" placeholder="Enter username" type="email" wire:model="form.email">
                                                    @error('form.email')
                                                        <span class="text-red-50 text-xs">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-lg-12 mb-4">
                                                    <div class="form-label-group">
                                                        <label class="label">Password</label>
                                                        <a href="#" class="fs-7 label">Forgot Password ?</a>
                                                    </div>
                                                    <div class="input-group password-check">
                                                        <span class="input-affix-wrapper">
                                                            <input class="form-control" placeholder="Enter your password" wire:model="form.password" type="password">
                                                            @error('form.password')
                                                                <span class="text-red-50 text-xs">{{$message}}</span>
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-uppercase btn-block mt-3" type="submit">Login</button>
                                            <p class="p-xs mt-2 text-center mt-5">New to NOLT Finance ? <a href="#"><u>Contact Admin</u></a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                    <!-- /Row -->
                </div>
                <!-- /Container -->
            </div>
            <!-- /Page Body -->

            <!-- Page Footer -->
            <div class="hk-footer">
                <footer class="container-xxl footer">
                    <div class="row">
                        <div class="col-xl-12 text-center">
                            <p class="footer-text"><span class="copy-text"> Copyright © <script>
                                        document.write(new Date().getFullYear())
                                    </script> {{config('app.name')}} All rights reserved.</p>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- / Page Footer -->

        </div>
        <!-- /Main Content -->
    </div>
    <!-- /Wrapper -->
</div>
