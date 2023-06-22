<div>
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
                                                        <th>Phone</th>
                                                        <th>Email</th>
                                                        <th>Add Date</th>
                                                        <th>Tags</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($customers as $item)
                                                    <tr>
                                                        <td>
                                                        </td>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <div class="media-head me-2">
                                                                    <div
                                                                        class="avatar avatar-xs avatar-success avatar-rounded">
                                                                        <span class="initial-wrap">{{$item->firstName[0]}}{{$item->lastName[0]}}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="text-high-em">{{$item->firstName}} {{$item->lastName}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            {{$item->phone}}
                                                        </td>
                                                        <td>
                                                            {{$item->email}}
                                                        </td>
                                                        <td>{{$item->created_at->format('d M, Y')}}</td>
                                                        <td>
                                                            <span class="badge badge-soft-secondary  my-1  me-2">customer</span>
                                                        </td>
                                                        <td>
                                                            <ul class="list-unstyled hstack gap-1 mb-0">
                                                                <li type="button" data-bs-toggle="modal" data-bs-target="#allerting"  data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                                    <a wire:click.prevent="$emit('customerDetail', {{$item}})" class="btn btn-sm btn-soft-primary"><i class="bi bi-eye"></i></a>
                                                                </li>
                                                                <li type="button" data-bs-toggle="modal" data-bs-target="#updating" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                    <a wire:click.prevent="$emit('customerEdit', {{$item}})" class="btn btn-sm btn-soft-info"><i class="bi bi-pen"></i></a>
                                                                </li>
                                                                <li type="button" data-bs-toggle="modal" data-bs-target="#delete" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                    <a wire:click.prevent="deleteId('{{ $item->id }}', '{{$item->firstName}}', '{{$item->lastName}}')" href="#jobDelete" class="btn btn-sm btn-soft-danger"><i class="bi bi-trash"></i></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    @endforeach
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
    </div>
    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form wire:submit.prevent="createCustomer">
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
                                            <input class="form-control" wire:model.defer="addForm.firstName" type="text" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Last Name</label>
                                            <input class="form-control" wire:model.defer="addForm.lastName" type="text" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" wire:model.defer="addForm.email" type="email" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Phone Number</label>
                                            <input class="form-control" wire:model.defer="addForm.phone" type="tel" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Address</label>
                                            <textarea class="form-control" wire:model.defer="addForm.address" id="" cols="30" rows="3" required></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" data-bs-dismiss="modal" class="btn btn-primary mt-5">Create Customer</button>
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

    <div class="modal fade" wire:ignore.self id="allerting" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
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
                                            <input class="form-control" value="{{$customer['firstName'] ?? ''}}" type="text" readonly />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Last Name</label>
                                            <input class="form-control" value="{{$customer['lastName'] ?? ''}}" type="text" readonly />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" value="{{$customer['email'] ?? ''}}" type="email" readonly />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Phone Number</label>
                                            <input class="form-control" value="{{$customer['phone'] ?? ''}}" type="tel" readonly />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Address</label>
                                            <textarea class="form-control" id="" cols="30" rows="3" readonly>{{$customer['address'] ?? ''}}</textarea>
                                        </div>
                                    </div>
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
    <div class="modal fade" wire:ignore.self id="updating" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form wire:submit.prevent="updateCustomer">
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
                                            <input class="form-control" wire:model="edit.firstName" type="text" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Last Name</label>
                                            <input class="form-control" wire:model="edit.lastName" type="text" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" wire:model="edit.email"  type="email" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Phone Number</label>
                                            <input class="form-control" wire:model="edit.phone" type="tel" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Address</label>
                                            <textarea class="form-control" id="" cols="30" rows="3" wire:model="edit.address" required></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" data-bs-dismiss="modal" class="btn btn-primary mt-5">Update Customer</button>
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
