@extends('layouts.dashboard-frontend')

@section('page-content')
<!-- Main Content -->
<div class="hk-pg-wrapper">
    <div class="container-xxl">
        <!-- Page Body -->
        <div class="hk-pg-body">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab_block_1">
                    <div class="row">
                        <div class="col-md-12 mb-md-4 mb-3">
                            <div class="card card-border mb-0 h-100">
                                <div class="card-header card-header-action">
                                    <h6>New Customers
                                    </h6>
                                    <div class="card-action-wrap">
                                        <button class="btn btn-sm btn-outline-light">
                                            <span>
                                                <span class="icon">
                                                    <span class="feather-icon">
                                                        <i data-feather="upload">
                                                        </i>
                                                    </span>
                                                </span>
                                                <span class="btn-text">import</span></span></button>
                                        <button class="btn btn-sm btn-primary ms-3"><span><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span><span class="btn-text" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop1"> + Add new
                                                    Customer</span></span></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="contact-list-view">
                                        <table id="datable_1" class="table nowrap w-100 mb-5">
                                            <thead>
                                                <tr>
                                                    <th><span class="form-check fs-6 mb-0">
                                                            <input type="checkbox" class="form-check-input check-select-all" id="customCheck1">
                                                            <label class="form-check-label" for="customCheck1"></label>
                                                        </span></th>
                                                    <th>Name</th>
                                                    <th class="w-25">Usage</th>
                                                    <th>Last Update</th>
                                                    <th>Tags</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <div class="media align-items-center">
                                                            <div class="media-head me-2">
                                                                <div class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{URL::asset('dist/img/logo-avatar-1.png')}}" alt="user" class="avatar-img">
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="text-high-em">Mr Hamzat Abdulazeez
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="progress-lb-wrap">
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress progress-bar-rounded progress-bar-xs flex-1">
                                                                    <div class="progress-bar bg-blue-dark-3 w-90" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                                <div class="fs-8 ms-3">90%</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>10 June, 2023</td>
                                                    <td>
                                                        <span class="badge badge-soft-secondary  my-1  me-2">customer</span>
                                                    </td>
                                                    <td>
                                                        <ul class="list-unstyled hstack gap-1 mb-0">
                                                            <li type="button" data-bs-toggle="modal" data-bs-target="#allerting" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                                <a class="btn btn-sm btn-soft-primary"><i class="bi bi-eye"></i></a>
                                                            </li>
                                                            <li type="button" data-bs-toggle="modal" data-bs-target="#allertinging" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                <a href="#" class="btn btn-sm btn-soft-info"><i class="bi bi-pen"></i></a>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                <a href="#" data-bs-toggle="modal" class="btn btn-sm btn-soft-danger"><i class="bi bi-trash"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <div class="media align-items-center">
                                                            <div class="media-head me-2">
                                                                <div class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{URL::asset('dist/img/logo-avatar-2.png')}}" alt="user" class="avatar-img">
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="text-high-em">Mr Hamzat Abdulazeez
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="progress-lb-wrap">
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress progress-bar-rounded progress-bar-xs flex-1">
                                                                    <div class="progress-bar bg-blue w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                                <div class="fs-8 ms-3">75%</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>09 July, 2023</td>
                                                    <td>
                                                        <span class="badge badge-soft-secondary  my-1  me-2">customer</span>
                                                    </td>
                                                    <td>
                                                        <ul class="list-unstyled hstack gap-1 mb-0">
                                                            <li type="button" data-bs-toggle="modal" data-bs-target="#allerting" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                                <a class="btn btn-sm btn-soft-primary"><i class="bi bi-eye"></i></a>
                                                            </li>
                                                            <li type="button" data-bs-toggle="modal" data-bs-target="#allertinging" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                <a href="#" class="btn btn-sm btn-soft-info"><i class="bi bi-pen"></i></a>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                <a href="#" data-bs-toggle="modal" class="btn btn-sm btn-soft-danger"><i class="bi bi-trash"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <div class="media align-items-center">
                                                            <div class="media-head me-2">
                                                                <div class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{URL::asset('dist/img/logo-avatar-3.png')}}" alt="user" class="avatar-img">
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="text-high-em">Mr Hamzat Abdulazeez
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="progress-lb-wrap">
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress progress-bar-rounded progress-bar-xs flex-1">
                                                                    <div class="progress-bar bg-primary w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                                <div class="fs-8 ms-3">50%</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>24 Aug, 2023</td>
                                                    <td>
                                                        <span class="badge badge-soft-secondary  my-1  me-2">customer</span>
                                                    </td>
                                                    <td>
                                                        <ul class="list-unstyled hstack gap-1 mb-0">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                                <a href="#" class="btn btn-sm btn-soft-primary"><i class="bi bi-eye"></i></a>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                <a href="#" class="btn btn-sm btn-soft-info"><i class="bi bi-pen"></i></a>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                <a href="#jobDelete" data-bs-toggle="modal" class="btn btn-sm btn-soft-danger"><i class="bi bi-trash"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <div class="media align-items-center">
                                                            <div class="media-head me-2">
                                                                <div class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{URL::asset('dist/img/logo-avatar-4.png')}}" alt="user" class="avatar-img">
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="text-high-em">Mr Hamzat Abdulazeez
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="progress-lb-wrap">
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress progress-bar-rounded progress-bar-xs flex-1">
                                                                    <div class="progress-bar bg-primary-dark-2 w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                                <div class="fs-8 ms-3">60%</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>17 May, 2023</td>
                                                    <td>
                                                        <span class="badge badge-soft-secondary  my-1  me-2">customer</span>
                                                    </td>
                                                    <td>
                                                        <ul class="list-unstyled hstack gap-1 mb-0">
                                                            <li type="button" data-bs-toggle="modal" data-bs-target="#allerting" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                                <a class="btn btn-sm btn-soft-primary"><i class="bi bi-eye"></i></a>
                                                            </li>
                                                            <li type="button" data-bs-toggle="modal" data-bs-target="#allertinging" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                <a href="#" class="btn btn-sm btn-soft-info"><i class="bi bi-pen"></i></a>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                <a href="#" data-bs-toggle="modal" class="btn btn-sm btn-soft-danger"><i class="bi bi-trash"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <div class="media align-items-center">
                                                            <div class="media-head me-2">
                                                                <div class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{URL::asset('dist/img/logo-avatar-5.png')}}" alt="user" class="avatar-img">
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="text-high-em">Mr Hamzat Abdulazeez
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="progress-lb-wrap">
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress progress-bar-rounded progress-bar-xs flex-1">
                                                                    <div class="progress-bar bg-grey w-30" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                                <div class="fs-8 ms-3">30%</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>13 July, 2023</td>
                                                    <td>
                                                        <span class="badge badge-soft-secondary  my-1  me-2">customer</span>
                                                    </td>
                                                    <td>
                                                        <ul class="list-unstyled hstack gap-1 mb-0">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                                <a href="#" class="btn btn-sm btn-soft-primary"><i class="bi bi-eye"></i></a>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                <a href="#" class="btn btn-sm btn-soft-info"><i class="bi bi-pen"></i></a>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                <a href="#jobDelete" data-bs-toggle="modal" class="btn btn-sm btn-soft-danger"><i class="bi bi-trash"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <div class="media align-items-center">
                                                            <div class="media-head me-2">
                                                                <div class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{URL::asset('dist/img/logo-avatar-6.png')}}" alt="user" class="avatar-img">
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="text-high-em">Mr Hamzat Abdulazeez
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="progress-lb-wrap">
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress progress-bar-rounded progress-bar-xs flex-1">
                                                                    <div class="progress-bar bg-green-dark-1 w-45" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                                <div class="fs-8 ms-3">45%</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>14 July, 2023</td>
                                                    <td>
                                                        <span class="badge badge-soft-secondary  my-1  me-2">customer</span>
                                                    </td>
                                                    <td>
                                                        <ul class="list-unstyled hstack gap-1 mb-0">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                                <a href="#" class="btn btn-sm btn-soft-primary"><i class="bi bi-eye"></i></a>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                <a href="#" class="btn btn-sm btn-soft-info"><i class="bi bi-pen"></i></a>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                <a href="#jobDelete" data-bs-toggle="modal" class="btn btn-sm btn-soft-danger"><i class="bi bi-trash"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Body -->
    </div>
    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="title title-xs title-wth-divider text-primary text-uppercase my-4">
                                    <span>New Customer</span>
                                </div>
                                <div class="row gx-3">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">First Name</label>
                                            <input class="form-control" type="text" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Last Name</label>
                                            <input class="form-control" type="text" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" type="email" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Phone Number</label>
                                            <input class="form-control" type="tel" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Address</label>
                                            <input class="form-control" type="text" required />
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary mt-5">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="allerting" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="title title-xs title-wth-divider text-primary text-uppercase my-4">
                                    <span>View Customer Details</span>
                                </div>
                                <div class="row gx-3">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">First Name</label>
                                            <input class="form-control" type="text" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Last Name</label>
                                            <input class="form-control" type="text" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" type="email" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Phone Number</label>
                                            <input class="form-control" type="tel" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Address</label>
                                            <input class="form-control" type="text" required />
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary mt-5">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="allertinging" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="title title-xs title-wth-divider text-primary text-uppercase my-4">
                                    <span>Edit Customer Information</span>
                                </div>
                                <div class="row gx-3">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">First Name</label>
                                            <input class="form-control" type="text" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Last Name</label>
                                            <input class="form-control" type="text" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" type="email" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Phone Number</label>
                                            <input class="form-control" type="tel" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Address</label>
                                            <input class="form-control" type="text" required />
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary mt-5">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
</div>
<!-- /Main Content -->
@endsection

