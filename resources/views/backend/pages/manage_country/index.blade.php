@extends('backend.master')

@section('content')
    <div class="content-area">
        <div class="mr-breadcrumb">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="heading">Manage Country</h4>
                    <ul class="links">
                        <li>
                            <a href="https://product.geniusocean.com/geniuscart/admin">Dashboard </a>
                        </li>
                        <li><a href="javascript:;">Manage Country</a></li>
                        <li>
                            <a href="https://product.geniusocean.com/geniuscart/admin/manage/country">Country</a>
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
                                                        colspan="1" style="width: 154px;">Country Name</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 311px;">Status</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 377px;">Options</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td tabindex="0">Zimbabwe</td>
                                                    <td>
                                                        <div class="action-list">
                                                            <select class="process select droplinks drop-success" >
                                                                <option value="1">Activated</option>
                                                                <option value="0">Deactivated</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="action-list"><a
                                                                href="{{route('manage-country.state', 1)}}6"><i
                                                                    class="fas fa-city"></i> Manage State</a></div>
                                                    </td>
                                                </tr>

                                                <tr role="row" class="odd">
                                                    <td tabindex="0">Zimbabwe</td>
                                                    <td>
                                                        <div class="action-list">
                                                            <select class="process select droplinks drop-success" >
                                                                <option value="1">Activated</option>
                                                                <option value="0">Deactivated</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="action-list"><a
                                                                href="{{route('manage-country.state', 1)}}6"><i
                                                                    class="fas fa-city"></i> Manage State</a></div>
                                                    </td>
                                                </tr>

                                                <tr role="row" class="odd">
                                                    <td tabindex="0">Zimbabwe</td>
                                                    <td>
                                                        <div class="action-list">
                                                            <select class="process select droplinks drop-success" >
                                                                <option value="1">Activated</option>
                                                                <option value="0">Deactivated</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="action-list"><a
                                                                href="{{route('manage-country.state', 1)}}6"><i
                                                                    class="fas fa-city"></i> Manage State</a></div>
                                                    </td>
                                                </tr>

                                                <tr role="row" class="odd">
                                                    <td tabindex="0">Zimbabwe</td>
                                                    <td>
                                                        <div class="action-list">
                                                            <select class="process select droplinks drop-success" >
                                                                <option value="1">Activated</option>
                                                                <option value="0">Deactivated</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="action-list"><a
                                                                href="{{route('manage-country.state', 1)}}6"><i
                                                                    class="fas fa-city"></i> Manage State</a></div>
                                                    </td>
                                                </tr>

                                                <tr role="row" class="odd">
                                                    <td tabindex="0">Zimbabwe</td>
                                                    <td>
                                                        <div class="action-list">
                                                            <select class="process select droplinks drop-success" >
                                                                <option value="1">Activated</option>
                                                                <option value="0">Deactivated</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="action-list"><a
                                                                href="{{route('manage-country.state', 1)}}6"><i
                                                                    class="fas fa-city"></i> Manage State</a></div>
                                                    </td>
                                                </tr>

                                                <tr role="row" class="odd">
                                                    <td tabindex="0">Zimbabwe</td>
                                                    <td>
                                                        <div class="action-list">
                                                            <select class="process select droplinks drop-success" >
                                                                <option value="1">Activated</option>
                                                                <option value="0">Deactivated</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="action-list"><a
                                                                href="{{route('manage-country.state', 1)}}6"><i
                                                                    class="fas fa-city"></i> Manage State</a></div>
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
                                            aria-live="polite">Showing 1 to 10 of 246 entries</div>
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
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="geniustable" data-dt-idx="2" tabindex="0"
                                                        class="page-link">2</a></li>
                                             
                                               
                                                <li class="paginate_button page-item next" id="geniustable_next"><a
                                                        href="#" aria-controls="geniustable" data-dt-idx="8"
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
