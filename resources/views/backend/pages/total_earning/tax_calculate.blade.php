@extends('backend.master')

@section('content')
    <div class="content-area">
        <div class="mr-breadcrumb">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="heading">Tax Calculate</h4>
                    <ul class="links">
                        <li>
                            <a href="https://product.geniusocean.com/geniuscart/admin">Dashboard </a>
                        </li>
                        <li>
                            <a href="javascript:;">Total Earning </a>
                        </li>
                        <li>
                            <a href="https://product.geniusocean.com/geniuscart/admin/tax/calculate">Tax Calculate</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <form action="https://product.geniusocean.com/geniuscart/admin/tax/calculate" method="GET">
            <div class="product-area">
                <div class="row text-center p-3">
                    <div class="alert alert-success validation" style="display: none;">
                        <button type="button" class="close alert-close"><span>×</span></button>
                        <p class="text-left"></p>
                    </div>
                    <div class="alert alert-danger validation" style="display: none;">
                        <button type="button" class="close alert-close"><span>×</span></button>
                        <ul class="text-left">
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-4 offset-lg-2 col-md-6  mt-3">
                        <input type="text" autocomplete="off" class="input-field discount_date hasDatepicker"
                            value="" name="start_date" placeholder="Enter Date" id="dp1673785665513">
                    </div>
                    <div class="col-sm-6 col-lg-4 col-md-6  mt-3">
                        <input type="text" autocomplete="off" class="input-field discount_date hasDatepicker"
                            value="" name="end_date" placeholder="Enter Date" id="dp1673785665514">
                    </div>
                    <div class="col-sm-12 mt-3">
                        <button type="submit" style="background-color: #1f224f;" class="mybtn1">Check</button>
                        <button type="button" id="reset" style="background-color: #1f224f;" class="mybtn1">Reset</button>
                    </div>
                    <div class="col-lg-12">
                        <p class="text-center"> <b> Total Earning : $81.4</b></p>
                        <p class="text-center"> <b>Current Month Earning : 0</b></p>
                        <p class="text-center"> <b>Last 30 Days Earning : 0</b></p>
                    </div>
                </div>

                <div class="alert alert-success validation" style="display: none;">
                    <button type="button" class="close alert-close"><span>×</span></button>
                    <p class="text-left"></p>
                </div>
                <div class="mr-table allproduct">
                    <div class="table-responsive">
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
                                        cellspacing="0" width="100%" role="grid" aria-describedby="geniustable_info"
                                        style="width: 100%;">
                                        <thead>
                                            <tr role="row">
                                                <th width="5%" class="sorting_asc" tabindex="0"
                                                    aria-controls="geniustable" rowspan="1" colspan="1"
                                                    style="width: 10px;" aria-sort="ascending"
                                                    aria-label="#: activate to sort column descending">#</th>
                                                <th width="25%" class="sorting" tabindex="0"
                                                    aria-controls="geniustable" rowspan="1" colspan="1"
                                                    style="width: 170px;"
                                                    aria-label="Order Number: activate to sort column ascending">Order
                                                    Number</th>
                                                <th width="20%" class="sorting" tabindex="0"
                                                    aria-controls="geniustable" rowspan="1" colspan="1"
                                                    style="width: 180px;"
                                                    aria-label="Txn ID: activate to sort column ascending">Txn ID</th>
                                                <th width="20%" class="sorting" tabindex="0"
                                                    aria-controls="geniustable" rowspan="1" colspan="1"
                                                    style="width: 122px;"
                                                    aria-label="Tax: activate to sort column ascending">Tax</th>
                                                <th width="20%" class="sorting" tabindex="0"
                                                    aria-controls="geniustable" rowspan="1" colspan="1"
                                                    style="width: 128px;"
                                                    aria-label="Tax Location: activate to sort column ascending">Tax
                                                    Location</th>
                                                <th width="10%" class="sorting" tabindex="0"
                                                    aria-controls="geniustable" rowspan="1" colspan="1"
                                                    style="width: 56px;"
                                                    aria-label="Created At: activate to sort column ascending">Created At
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>



                                            <tr role="row" class="odd">
                                                <td tabindex="0" class="sorting_1">1</td>
                                                <td>
                                                    <a
                                                        href="https://product.geniusocean.com/geniuscart/admin/order/211/invoice">
                                                        rvvt1639478271
                                                    </a>
                                                </td>
                                                <td>
                                                    txn_3K6YOLJlIV5dN9n70SkvJd5a
                                                </td>
                                                <td>
                                                    $39.6
                                                </td>
                                                <td>
                                                    Zimbabwe
                                                </td>
                                                <td>
                                                    14-12-2021
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td tabindex="0" class="sorting_1">2</td>
                                                <td>
                                                    <a
                                                        href="https://product.geniusocean.com/geniuscart/admin/order/212/invoice">
                                                        qsyr1639555416
                                                    </a>
                                                </td>
                                                <td>
                                                    txn_3K6sSbJlIV5dN9n7012QQuNV
                                                </td>
                                                <td>
                                                    $39.6
                                                </td>
                                                <td>
                                                    Zimbabwe
                                                </td>
                                                <td>
                                                    15-12-2021
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td tabindex="0" class="sorting_1">3</td>
                                                <td>
                                                    <a
                                                        href="https://product.geniusocean.com/geniuscart/admin/order/233/invoice">
                                                        u8An1645951432
                                                    </a>
                                                </td>
                                                <td>
                                                    24T72149AR2908837
                                                </td>
                                                <td>
                                                    $2.2
                                                </td>
                                                <td>
                                                    New Youk
                                                </td>
                                                <td>
                                                    26-02-2022
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="geniustable_info" role="status"
                                        aria-live="polite">Showing 1 to 3 of 3 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="geniustable_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled"
                                                id="geniustable_previous"><a href="#" aria-controls="geniustable"
                                                    data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                            <li class="paginate_button page-item active"><a href="#"
                                                    aria-controls="geniustable" data-dt-idx="1" tabindex="0"
                                                    class="page-link">1</a></li>
                                            <li class="paginate_button page-item next disabled" id="geniustable_next"><a
                                                    href="#" aria-controls="geniustable" data-dt-idx="2"
                                                    tabindex="0" class="page-link">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- Main Content Area End -->
    </div>
@endsection
