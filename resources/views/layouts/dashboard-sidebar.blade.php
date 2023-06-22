<!-- Vertical Nav -->
<div class="hk-menu">
    <!-- Brand -->
    <div class="menu-header">
        <span>
            <a class="navbar-brand" href="3">
                <img class="brand-img img-fluid" src="https://firstpavilion.sfo3.cdn.digitaloceanspaces.com/CrmFinance/NOLT-horizontal-logo-RGB-L.png" style="width:200px;" alt="brand" />
                <!-- <img class="brand-img img-fluid" src="{{URL::asset('dist/img/NOLT Finance.svg')}}" alt="brand" /> -->
            </a>
            <button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle">
                <span class="icon">
                    <span class="svg-icon fs-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-to-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="10" y1="12" x2="20" y2="12"></line>
                            <line x1="10" y1="12" x2="14" y2="16"></line>
                            <line x1="10" y1="12" x2="14" y2="8"></line>
                            <line x1="4" y1="4" x2="4" y2="20"></line>
                        </svg>
                    </span>
                </span>
            </button>
        </span>
    </div>
    <!-- /Brand -->

    <!-- Main Menu -->
    <div data-simplebar class="nicescroll-bar">
        <div class="menu-content-wrap">
            <div class="menu-group">
                <ul class="navbar-nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.dashboard')}}">
                            <span class="nav-icon-wrap">
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-template" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <rect x="4" y="4" width="16" height="4" rx="1" />
                                        <rect x="4" y="12" width="6" height="8" rx="1" />
                                        <line x1="14" y1="12" x2="20" y2="12" />
                                        <line x1="14" y1="16" x2="20" y2="16" />
                                        <line x1="14" y1="20" x2="20" y2="20" />
                                    </svg>
                                </span>
                            </span>
                            <span class="nav-link-text">Dashboard</span>
                            <!-- <span class="badge badge-sm badge-soft-pink ms-auto">Hot</span> -->
                        </a>
                    </li>
                </ul>
            </div>
            <div class="menu-gap"></div>
            <div class="menu-group">
                <div class="nav-header">
                    <span>Available Apps</span>
                </div>
                <ul class="navbar-nav flex-column">

                    <li class="nav-item">
<<<<<<< HEAD
                        <a class="nav-link" href="{{route('admin.view.customer')}}">
                            <span class="nav-icon-wrap">
=======
                        <a class="nav-link" href="{{route('admin.all.kanban')}}">
                            <span class="nav-icon-wrap">
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-kanban" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <line x1="4" y1="4" x2="10" y2="4" />
                                        <line x1="14" y1="4" x2="20" y2="4" />
                                        <rect x="4" y="8" width="6" height="12" rx="2" />
                                        <rect x="14" y="8" width="6" height="6" rx="2" />
                                    </svg>
                                </span>
                            </span>
                            <span class="nav-link-text">Tickets</span>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_scrumboard">
                            <span class="nav-icon-wrap position-relative">
>>>>>>> f8b584996ae28d265e7ca818415db931c4b5e9b9
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list-details" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M13 5h8" />
                                        <path d="M13 9h5" />
                                        <path d="M13 15h8" />
                                        <path d="M13 19h5" />
                                        <rect x="3" y="4" width="6" height="6" rx="1" />
                                        <rect x="3" y="14" width="6" height="6" rx="1" />
                                    </svg>
                                </span>
                            </span>
                            <span class="nav-link-text">Customers</span>
                        </a>
<<<<<<< HEAD
                    </li>
=======
                        <ul id="dash_scrumboard" class="nav flex-column collapse  nav-children">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('admin.all.board')}}"><span class="nav-link-text">All Boards</span></a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('admin.all.kanban')}}"><span class="nav-link-text">Project Kanban</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('admin.all.pipeline')}}"><span class="nav-link-text">Pipeline Kanban</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
>>>>>>> f8b584996ae28d265e7ca818415db931c4b5e9b9
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.staffs')}}" >
                            <span class="nav-icon-wrap position-relative">
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-notebook" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" />
                                        <line x1="13" y1="8" x2="15" y2="8" />
                                        <line x1="13" y1="12" x2="15" y2="12" />
                                    </svg>
                                </span>
                            </span>
                            <span class="nav-link-text">Staffs</span>
                        </a>
<<<<<<< HEAD
=======
                        <ul id="dash_contact" class="nav flex-column collapse  nav-children">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('admin.contact.list')}}"><span class="nav-link-text">Contact List</span></a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="{{route('admin.contact.card')}}"><span class="nav-link-text">Contact Cards</span></a>
                                    </li> -->
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="{{route('admin.edit.contact')}}"><span class="nav-link-text">Edit Contact</span></a>
                                    </li> -->
                                </ul>
                            </li>
                        </ul>
>>>>>>> f8b584996ae28d265e7ca818415db931c4b5e9b9
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.tickets')}}">
                            <span class="nav-icon-wrap position-relative">
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-kanban" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <line x1="4" y1="4" x2="10" y2="4" />
                                        <line x1="14" y1="4" x2="20" y2="4" />
                                        <rect x="4" y="8" width="6" height="12" rx="2" />
                                        <rect x="14" y="8" width="6" height="6" rx="2" />
                                    </svg>
                                </span>
                            </span>
                            <span class="nav-link-text">Tickets</span>
                        </a>
                    </li>
                    <div class="menu-gap"></div>
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_profile">
                                <span class="nav-icon-wrap">
                                    <span class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <circle cx="12" cy="7" r="4" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h1" />
                                            <circle cx="16.5" cy="17.5" r="2.5" />
                                            <path d="M18.5 19.5l2.5 2.5" />
                                        </svg>
                                    </span>
                                </span>
                                <span class="nav-link-text position-relative">Profile
                                    <span class="badge badge-danger badge-indicator position-absolute top-0 start-100"></span>
                                </span>
                            </a>
                            <ul id="dash_profile" class="nav flex-column collapse  nav-children">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('admin.profile')}}">
                                                <span class="nav-link-text">Profile</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="nav-icon-wrap">
                                    <span class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                            <path d="M16 11h6m-3 -3v6" />
                                        </svg>
                                    </span>
                                </span>
                                <span  class="nav-link-text">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </ul>
            </div>
            <div class="menu-gap"></div>
        </div>
    </div>
    <!-- /Main Menu -->
</div>
<div id="hk_menu_backdrop" class="hk-menu-backdrop"></div>
<!-- /Vertical Nav -->
