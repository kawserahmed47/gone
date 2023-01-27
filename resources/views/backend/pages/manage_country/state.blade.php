@extends('backend.master')

@section('content')
    <div class="content-area">
        <div class="mr-breadcrumb">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="heading"><u>Zimbabwe</u> / Manage State</h4>
                    <ul class="links">
                        <li>
                            <a href="https://product.geniusocean.com/geniuscart/admin">Dashboard </a>
                        </li>
                        <li><a href="javascript:;">Manage State</a></li>
                        <li>
                            <a href="https://product.geniusocean.com/geniuscart/admin/manage/state/246">State</a>
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
                                    <div class="col-sm-4 table-contents"><a class="add-btn"
                                            data-href="https://product.geniusocean.com/geniuscart/admin/state/create/246"
                                            id="add-data" data-toggle="modal" data-target="#modal1"><i
                                                class="fas fa-plus"></i> Add New State</a></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="geniustable"
                                            class="table table-hover dt-responsive dataTable no-footer dtr-inline"
                                            cellspacing="0" width="100%" role="grid"
                                            aria-describedby="geniustable_info" style="width: 100%;">
                                            <thead>
                                                <tr role="row">
                                                    <th width="20%" class="sorting_disabled" rowspan="1"
                                                        colspan="1" style="width: 154px;">Country</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 102px;">State</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 219px;">Status</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 80px;">Tax</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 216px;">Options</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td tabindex="0">Zimbabwe</td>
                                                    <td>Harare</td>
                                                    <td>
                                                        <div class="action-list"><select
                                                                class="process select droplinks drop-success"
                                                                style="display: none;">
                                                                <option data-val="1"
                                                                    value="https://product.geniusocean.com/geniuscart/admin/state/status/6/1"
                                                                    selected="">Activated</option>
                                                                <option data-val="0"
                                                                    value="https://product.geniusocean.com/geniuscart/admin/state/status/6/0">
                                                                    Deactivated</option>/select&gt;
                                                            </select>

                                                        </div>
                                                    </td>
                                                    <td>0 (%)</td>
                                                    <td>
                                                        <div class="action-list"><a
                                                                data-href="https://product.geniusocean.com/geniuscart/admin/state/edit/6"
                                                                class="edit" data-toggle="modal" data-target="#modal1">
                                                                <i class="fas fa-edit"></i>Edit</a><a href="javascript:;"
                                                                data-href="https://product.geniusocean.com/geniuscart/admin/state/delete/6"
                                                                data-toggle="modal" data-target="#confirm-delete"
                                                                class="delete"><i class="fas fa-trash-alt"></i></a></div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td tabindex="0">Zimbabwe</td>
                                                    <td>Virginia</td>
                                                    <td>
                                                        <div class="action-list"><select
                                                                class="process select droplinks drop-success"
                                                                style="display: none;">
                                                                <option data-val="1"
                                                                    value="https://product.geniusocean.com/geniuscart/admin/state/status/4/1"
                                                                    selected="">Activated</option>
                                                                <option data-val="0"
                                                                    value="https://product.geniusocean.com/geniuscart/admin/state/status/4/0">
                                                                    Deactivated</option>/select&gt;
                                                            </select>

                                                        </div>
                                                    </td>
                                                    <td>4 (%)</td>
                                                    <td>
                                                        <div class="action-list"><a
                                                                data-href="https://product.geniusocean.com/geniuscart/admin/state/edit/4"
                                                                class="edit" data-toggle="modal" data-target="#modal1">
                                                                <i class="fas fa-edit"></i>Edit</a><a href="javascript:;"
                                                                data-href="https://product.geniusocean.com/geniuscart/admin/state/delete/4"
                                                                data-toggle="modal" data-target="#confirm-delete"
                                                                class="delete"><i class="fas fa-trash-alt"></i></a></div>
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
                                            aria-live="polite">Showing 1 to 2 of 2 entries</div>
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
                                                        tabindex="0" class="page-link">Next</a>
                                                </li>
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
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" style=""
        aria-modal="true">

        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="submit-loader" style="display: none;">
                    <img src="https://product.geniusocean.com/geniuscart/assets/images/1564224329loading3.gif"
                        alt="">
                </div>
                <div class="modal-header">
                    <h5 class="modal-title">ADD NEW STATE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="content-area">

                        <div class="add-product-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="product-description">
                                        <div class="body-area">
                                            <div class="alert alert-danger validation" style="display: none;">
                                                <button type="button" class="close alert-close"><span>×</span></button>
                                                <ul class="text-left">
                                                </ul>
                                            </div>
                                            <form id="geniusformdata"
                                                action="https://product.geniusocean.com/geniuscart/admin/state/store/246"
                                                method="POST">
                                                <input type="hidden" name="_token"
                                                    value="vnP48V7no3GngIWjSY2cGbjpnmGZxx1gUkK3x906">

                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area">
                                                            <h4 class="heading">Country *</h4>
                                                            <p class="sub-heading">(In Any Language)</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <input type="text" readonly="" class="input-field"
                                                            value="Zimbabwe">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area">
                                                            <h4 class="heading">State *</h4>
                                                            <p class="sub-heading">(In Any Language)</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <input type="text" class="input-field" name="state"
                                                            placeholder="Enter State" value="">
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area">

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <button class="addProductSubmit-btn" type="submit">Create
                                                            State</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script src="https://product.geniusocean.com/geniuscart/assets/admin/js/vendors/jquery-1.12.4.min.js"></script>
                    <script src="https://product.geniusocean.com/geniuscart/assets/admin/js/jqueryui.min.js"></script>
                    <script src="https://product.geniusocean.com/geniuscart/assets/admin/js/vendors/vue.js"></script>
                    <script src="https://product.geniusocean.com/geniuscart/assets/admin/js/bootstrap-colorpicker.min.js"></script>
                    <script src="https://product.geniusocean.com/geniuscart/assets/admin/js/plugin.js"></script>
                    <script src="https://product.geniusocean.com/geniuscart/assets/admin/js/tag-it.js"></script>
                    <script src="https://product.geniusocean.com/geniuscart/assets/admin/js/load.js"></script>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade show" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1"
        style="display: block; padding-right: 17px;" aria-modal="true">

        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="submit-loader" style="display: none;">
                    <img src="https://product.geniusocean.com/geniuscart/assets/images/1564224329loading3.gif"
                        alt="">
                </div>
                <div class="modal-header">
                    <h5 class="modal-title">EDIT STATE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="content-area">

                        <div class="add-product-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="product-description">
                                        <div class="body-area">
                                            <div class="alert alert-danger validation" style="display: none;">
                                                <button type="button" class="close alert-close"><span>×</span></button>
                                                <ul class="text-left">
                                                </ul>
                                            </div>
                                            <form id="geniusformdata"
                                                action="https://product.geniusocean.com/geniuscart/admin/state/update/6"
                                                method="POST">
                                                <input type="hidden" name="_token"
                                                    value="vnP48V7no3GngIWjSY2cGbjpnmGZxx1gUkK3x906">

                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area">
                                                            <h4 class="heading">Country *</h4>
                                                            <p class="sub-heading">(In Any Language)</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <input type="text" readonly="" class="input-field"
                                                            value="Zimbabwe">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area">
                                                            <h4 class="heading">State *</h4>
                                                            <p class="sub-heading">(In Any Language)</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <input type="text" class="input-field" name="state"
                                                            placeholder="Enter State" value="Harare">
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area">

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <button class="addProductSubmit-btn" type="submit">Update
                                                            State</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script src="https://product.geniusocean.com/geniuscart/assets/admin/js/vendors/jquery-1.12.4.min.js"></script>
                    <script src="https://product.geniusocean.com/geniuscart/assets/admin/js/jqueryui.min.js"></script>
                    <script src="https://product.geniusocean.com/geniuscart/assets/admin/js/vendors/vue.js"></script>
                    <script src="https://product.geniusocean.com/geniuscart/assets/admin/js/bootstrap-colorpicker.min.js"></script>
                    <script src="https://product.geniusocean.com/geniuscart/assets/admin/js/plugin.js"></script>
                    <script src="https://product.geniusocean.com/geniuscart/assets/admin/js/tag-it.js"></script>
                    <script src="https://product.geniusocean.com/geniuscart/assets/admin/js/load.js"></script>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
