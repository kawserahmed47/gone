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
                                                        style="width: 225px;">Tax</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 463px;">Options</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td tabindex="0">Zimbabwe</td>
                                                    <td>36 (%)</td>
                                                    <td>
                                                        <div class="action-list"><a
                                                                href="https://product.geniusocean.com/geniuscart/admin/country/set-tax/246"
                                                                class="edit"> <i class="fas fa-edit"></i> Set Tax</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td tabindex="0">Zambia</td>
                                                    <td>5 (%)</td>
                                                    <td>
                                                        <div class="action-list"><a
                                                                href="https://product.geniusocean.com/geniuscart/admin/country/set-tax/245"
                                                                class="edit"> <i class="fas fa-edit"></i> Set Tax</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td tabindex="0">Yemen</td>
                                                    <td>0 (%)</td>
                                                    <td>
                                                        <div class="action-list"><a
                                                                href="https://product.geniusocean.com/geniuscart/admin/country/set-tax/244"
                                                                class="edit"> <i class="fas fa-edit"></i> Set Tax</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td tabindex="0">Western Sahara</td>
                                                    <td>0 (%)</td>
                                                    <td>
                                                        <div class="action-list"><a
                                                                href="https://product.geniusocean.com/geniuscart/admin/country/set-tax/243"
                                                                class="edit"> <i class="fas fa-edit"></i> Set Tax</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td tabindex="0">Wallis and Futuna Islands</td>
                                                    <td>0 (%)</td>
                                                    <td>
                                                        <div class="action-list"><a
                                                                href="https://product.geniusocean.com/geniuscart/admin/country/set-tax/242"
                                                                class="edit"> <i class="fas fa-edit"></i> Set Tax</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td tabindex="0">Virgin Islands (U.S.)</td>
                                                    <td>0 (%)</td>
                                                    <td>
                                                        <div class="action-list"><a
                                                                href="https://product.geniusocean.com/geniuscart/admin/country/set-tax/241"
                                                                class="edit"> <i class="fas fa-edit"></i> Set Tax</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td tabindex="0">Virgin Islands (British)</td>
                                                    <td>0 (%)</td>
                                                    <td>
                                                        <div class="action-list"><a
                                                                href="https://product.geniusocean.com/geniuscart/admin/country/set-tax/240"
                                                                class="edit"> <i class="fas fa-edit"></i> Set Tax</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td tabindex="0">Vietnam</td>
                                                    <td>0 (%)</td>
                                                    <td>
                                                        <div class="action-list"><a
                                                                href="https://product.geniusocean.com/geniuscart/admin/country/set-tax/239"
                                                                class="edit"> <i class="fas fa-edit"></i> Set Tax</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td tabindex="0">Venezuela</td>
                                                    <td>0 (%)</td>
                                                    <td>
                                                        <div class="action-list"><a
                                                                href="https://product.geniusocean.com/geniuscart/admin/country/set-tax/238"
                                                                class="edit"> <i class="fas fa-edit"></i> Set Tax</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td tabindex="0">Vatican City State</td>
                                                    <td>2 (%)</td>
                                                    <td>
                                                        <div class="action-list"><a
                                                                href="https://product.geniusocean.com/geniuscart/admin/country/set-tax/237"
                                                                class="edit"> <i class="fas fa-edit"></i> Set Tax</a>
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
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="geniustable" data-dt-idx="3" tabindex="0"
                                                        class="page-link">3</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="geniustable" data-dt-idx="4" tabindex="0"
                                                        class="page-link">4</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="geniustable" data-dt-idx="5" tabindex="0"
                                                        class="page-link">5</a></li>
                                                <li class="paginate_button page-item disabled" id="geniustable_ellipsis">
                                                    <a href="#" aria-controls="geniustable" data-dt-idx="6"
                                                        tabindex="0" class="page-link">…</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="geniustable" data-dt-idx="7" tabindex="0"
                                                        class="page-link">25</a></li>
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

    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1"
        style="" aria-modal="true">

        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="submit-loader" style="display: none;">
                    <img src="https://product.geniusocean.com/geniuscart/assets/images/1564224329loading3.gif"
                        alt="">
                </div>
                <div class="modal-header">
                    <h5 class="modal-title">EDIT TAX</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="content-area">

                        <div class="add-product-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="product-description">
                                        <div class="body-area">
                                        <div class="gocover" style="background: url(https://product.geniusocean.com/geniuscart/assets/images/1564224329loading3.gif) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
                                        <form id="geniusform" action="https://product.geniusocean.com/geniuscart/admin/country/set-tax/store/246" method="POST" enctype="multipart/form-data">
                                          <input type="hidden" name="_token" value="vnP48V7no3GngIWjSY2cGbjpnmGZxx1gUkK3x906">
                                        <div class="alert alert-success validation" style="display: none;">
                        <button type="button" class="close alert-close"><span>×</span></button>
                              <p class="text-left"></p> 
                        </div>
                        <div class="alert alert-danger validation" style="display: none;">
                        <button type="button" class="close alert-close"><span>×</span></button>
                              <ul class="text-left">
                              </ul>
                        </div> 
                  
                                        <div class="row">
                                          <div class="col-lg-4">
                                            <div class="left-area">
                                                <h4 class="heading">Country *</h4>
                                                <p class="sub-heading">(In Any Language)</p>
                                            </div>
                                          </div>
                                          <div class="col-lg-7">
                                            <input type="text" readonly="" class="input-field" value="Zimbabwe">
                                          </div>
                                        </div>
                  
                                        <div class="row">
                                          <div class="col-lg-4">
                                            <div class="left-area">
                                                <h4 class="heading">Tax (%)  *</h4>
                                               
                                            </div>
                                          </div>
                                          <div class="col-lg-7">
                                            <input type="text" name="tax" class="input-field" placeholder="Enter Tax" value="36">
                                          </div>
                                        </div>
                  
                                        
                                        <div class="row">
                                          <div class="col-lg-4">
                                            <div class="left-area">
                                                <h4 class="heading">Allow State Tax</h4>
                                            </div>
                                          </div>
                                          <div class="col-lg-7">
                                              <ul class="list">
                                                  <li>
                                                      <input type="checkbox" name="is_state_tax" id="allow_state_tax" value="1">
                                                      <label for="check1">Allow State Tax </label>
                                                  </li>
                                              </ul>
                                          </div>
                                        </div>
                  
                                        <div class="show_state d-none">
                                          <hr>
                                          <u><h4 class="text-center mb-3">Zimbabwe / State List</h4></u>
                                          <br>
                                                                <div class="row">
                                              <div class="col-lg-4">
                                                <div class="left-area">
                                                    <h4 class="heading">Virginia (%)  *</h4>
                                                </div>
                                              </div>
                                              <div class="col-lg-7">
                                                <input type="text" class="input-field" name="state_tax[]" placeholder="Enter Tax" value="4">
                                              </div>
                                            </div>
                                                              <div class="row">
                                              <div class="col-lg-4">
                                                <div class="left-area">
                                                    <h4 class="heading">Harare (%)  *</h4>
                                                </div>
                                              </div>
                                              <div class="col-lg-7">
                                                <input type="text" class="input-field" name="state_tax[]" placeholder="Enter Tax" value="0">
                                              </div>
                                            </div>
                                                      </div>
                                        
                                        <br>
                                          <div class="row">
                                            <div class="col-lg-4">
                                              <div class="left-area">
                                                
                                              </div>
                                            </div>
                                            <div class="col-lg-7">
                                              <button class="addProductSubmit-btn" type="submit">Save</button>
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
