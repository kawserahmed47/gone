@extends('backend.master')


@section('content')
    <div class="content-area">
        <div class="mr-breadcrumb">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="heading">Processing Orders</h4>
                    <ul class="links">
                        <li>
                            <a href="https://product.geniusocean.com/geniuscart/admin">Dashboard </a>
                        </li>
                        <li>
                            <a href="javascript:;">Orders</a>
                        </li>
                        <li>
                            <a href="https://product.geniusocean.com/geniuscart/admin/orders?status=processing">Processing
                                Orders</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="product-area">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mr-table allproduct">
                        <div class="alert alert-success validation" style="display: none;">
                            <button type="button" class="close alert-close"><span>×</span></button>
                            <p class="text-left"></p>
                        </div>
                        <div class="table-responsive">
                            <div class="gocover"
                                style="background: url(https://product.geniusocean.com/geniuscart/assets/images/1564224329loading3.gif) no-repeat scroll center center rgba(45, 45, 45, 0.5);">
                            </div>
                            <div id="geniustable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row btn-area">
                                    <div class="col-sm-4">
                                        <div class="dataTables_length" id="geniustable_length"><label>Show <select
                                                    name="geniustable_length" aria-controls="geniustable"
                                                    class="custom-select custom-select-sm form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label></div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div id="geniustable_filter" class="dataTables_filter"><label>Search:<input
                                                    type="search" class="form-control form-control-sm" placeholder=""
                                                    aria-controls="geniustable"></label></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="geniustable"
                                            class="table table-hover dt-responsive dataTable no-footer dtr-inline"
                                            cellspacing="0" width="100%" role="grid"
                                            aria-describedby="geniustable_info" style="width: 100%;">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 191px;">Customer Email</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 180px;">Order Number</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 120px;">Total Qty</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 128px;">Total Cost</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 152px;">Options</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td tabindex="0">user@gmail.com</td>
                                                    <td><a
                                                            href="https://product.geniusocean.com/geniuscart/admin/order/246/invoice">WAnR1648101347</a>
                                                    </td>
                                                    <td>9</td>
                                                    <td>990$</td>
                                                    <td>
                                                        <div class="godropdown"><button class="go-dropdown-toggle">Actions<i
                                                                    class="fas fa-chevron-down"></i></button>
                                                            <div class="action-list" style="display: none;"><a
                                                                    href="https://product.geniusocean.com/geniuscart/admin/order/246/show">
                                                                    <i class="fas fa-eye"></i> View Details</a><a
                                                                    href="javascript:;" class="send"
                                                                    data-email="user@gmail.com" data-toggle="modal"
                                                                    data-target="#vendorform"><i
                                                                        class="fas fa-envelope"></i> Send</a><a
                                                                    href="javascript:;"
                                                                    data-href="https://product.geniusocean.com/geniuscart/admin/order/246/track"
                                                                    class="track" data-toggle="modal"
                                                                    data-target="#modal1"><i class="fas fa-truck"></i> Track
                                                                    Order</a><a href="javascript:;"
                                                                    data-href="https://product.geniusocean.com/geniuscart/admin/order/edit/246"
                                                                    class="delivery" data-toggle="modal"
                                                                    data-target="#modal1"><i class="fas fa-dollar-sign"></i>
                                                                    Delivery Status</a></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div id="geniustable_processing" class="dataTables_processing card"
                                            style="display: none;"><img
                                                src="https://product.geniusocean.com/geniuscart/assets/images/1564224329loading3.gif">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="geniustable_info" role="status"
                                            aria-live="polite">Showing 1 to 1 of 1 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="geniustable_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="geniustable_previous"><a href="#"
                                                        aria-controls="geniustable" data-dt-idx="0" tabindex="0"
                                                        class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="geniustable" data-dt-idx="1" tabindex="0"
                                                        class="page-link">1</a></li>
                                                <li class="paginate_button page-item next disabled" id="geniustable_next">
                                                    <a href="#" aria-controls="geniustable" data-dt-idx="2"
                                                        tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
