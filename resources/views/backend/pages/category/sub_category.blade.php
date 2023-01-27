@extends('backend.master')

@section('content')
    <div class="content-area">
        <div class="mr-breadcrumb">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="heading">Sub Categories</h4>
                    <ul class="links">
                        <li>
                            <a href="https://product.geniusocean.com/geniuscart/admin">Dashboard </a>
                        </li>
                        <li><a href="javascript:;">Manage Categories</a></li>
                        <li>
                            <a href="https://product.geniusocean.com/geniuscart/admin/subcategory">Sub Categories</a>
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

                                    </div>
                                    <div class="col-sm-4">

                                    </div>
                                    <div class="col-sm-4 table-contents">
                                        <a class="add-btn" id="add-data" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <i class="fas fa-plus"></i>
                                            <span class="remove-mobile"> Add New </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-sm-12">
                                        <table id="geniustable"
                                            class="table table-hover dt-responsive dataTable no-footer dtr-inline">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 112px;">Category</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 62px;">Name</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 196px;">Slug</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 101px;">Attributes</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 133px;">Status</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 131px;">Options</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr role="row" class="odd">
                                                    <td tabindex="0">Category</td>
                                                    <td>Subcategory</td>
                                                    <td>subcategory-slug</td>
                                                    <td>
                                                        <div class="action-list">
                                                            <a data-bs-toggle="modal"
                                                            data-bs-target="#attribute" class="attribute" >
                                                                <i class="fas fa-edit"></i>Create
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="action-list">
                                                            <select
                                                                class="nice-select process select droplinks drop-success p-1">
                                                                <option data-val="1" value="">Activated</option>
                                                                <option data-val="0" value=""> Deactivated</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="action-list">
                                                            <a class="edit" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="fas fa-edit"></i>
                                                                Edit
                                                            </a>

                                                            <a href="javascript:;" data-href="" data-toggle="modal"
                                                                data-target="#confirm-delete" class="delete">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr role="row" class="odd">
                                                    <td tabindex="0">Category</td>
                                                    <td>Subcategory</td>
                                                    <td>subcategory-slug</td>
                                                    <td>
                                                        <div class="action-list">
                                                            <a data-href="" class="attribute" data-toggle="modal"
                                                                data-target="#attribute"><i
                                                                    class="fas fa-edit"></i>Create</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="action-list">
                                                            <select
                                                                class="nice-select process select droplinks drop-success p-1">
                                                                <option data-val="1" value="">Activated</option>
                                                                <option data-val="0" value=""> Deactivated</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="action-list">
                                                            <a class="edit" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="fas fa-edit"></i>
                                                                Edit
                                                            </a>

                                                            <a href="javascript:;" data-href="" data-toggle="modal"
                                                                data-target="#confirm-delete" class="delete">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr role="row" class="odd">
                                                    <td tabindex="0">Category</td>
                                                    <td>Subcategory</td>
                                                    <td>subcategory-slug</td>
                                                    <td>
                                                        <div class="action-list">
                                                            <a data-href="" class="attribute" data-toggle="modal"
                                                                data-target="#attribute"><i
                                                                    class="fas fa-edit"></i>Create</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="action-list">
                                                            <select
                                                                class="nice-select process select droplinks drop-success p-1">
                                                                <option data-val="1" value="">Activated</option>
                                                                <option data-val="0" value=""> Deactivated
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="action-list">
                                                            <a class="edit" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="fas fa-edit"></i>
                                                                Edit
                                                            </a>

                                                            <a href="javascript:;" data-href="" data-toggle="modal"
                                                                data-target="#confirm-delete" class="delete">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr role="row" class="odd">
                                                    <td tabindex="0">Category</td>
                                                    <td>Subcategory</td>
                                                    <td>subcategory-slug</td>
                                                    <td>
                                                        <div class="action-list">
                                                            <a data-href="" class="attribute" data-toggle="modal"
                                                                data-target="#attribute"><i
                                                                    class="fas fa-edit"></i>Create</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="action-list">
                                                            <select
                                                                class="nice-select process select droplinks drop-success p-1">
                                                                <option data-val="1" value="">Activated</option>
                                                                <option data-val="0" value=""> Deactivated
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="action-list">
                                                            <a class="edit" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="fas fa-edit"></i>
                                                                Edit
                                                            </a>

                                                            <a href="javascript:;" data-href="" data-toggle="modal"
                                                                data-target="#confirm-delete" class="delete">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
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
                                {{-- <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="geniustable_info" role="status"
                                            aria-live="polite">Showing 1 to 10 of 32 entries</div>
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
                                                <li class="paginate_button page-item next" id="geniustable_next"><a
                                                        href="#" aria-controls="geniustable" data-dt-idx="5"
                                                        tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="submit-loader" style="display: none;">
                    <img src="https://product.geniusocean.com/geniuscart/assets/images/1564224329loading3.gif"
                        alt="">
                </div>
                <div class="modal-header">
                    <h5 class="modal-title">EDIT SUB CATEGORY</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="content-area">

                        <div class="add-product-content1">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="product-description">
                                        <div class="body-area">
                                            <div class="alert alert-danger validation" style="display: none;">
                                                <button type="button" class="close alert-close"><span>×</span></button>
                                                <ul class="text-left">
                                                </ul>
                                            </div>
                                            <form id="geniusformdata" action="" method="POST"
                                                enctype="multipart/form-data">
                                                <input type="hidden" name="_token"
                                                    value="piFbphimUflU1Hv4whFAk6S9zVR1MoyEMmCRaheQ">

                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area">
                                                            <h4 class="heading">Select Language*</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <select name="language_id" required="">
                                                            <option value="1">English</option>
                                                            <option value="2">French</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area">
                                                            <h4 class="heading">Category*</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <select name="category_id" required="">
                                                            <option value="">Select Category</option>
                                                            <option value="4">Electronic</option>
                                                            <option value="5">Fashion &amp; Beauty</option>
                                                            <option value="6">Camera &amp; Photo</option>
                                                            <option value="7">Smart Phone &amp; Table</option>
                                                            <option value="8">Sport &amp; Outdoor</option>
                                                            <option value="9">Jewelry &amp; Watches</option>
                                                            <option value="10">Health &amp; Beauty</option>
                                                            <option value="11">Books &amp; Office</option>
                                                            <option value="12">Toys &amp; Hobbies</option>
                                                            <option value="15">Automobiles</option>
                                                            <option value="16">Home decoration</option>
                                                            <option value="17">Portable &amp; Personal</option>
                                                            <option value="18">Outdoor, Recreation</option>
                                                            <option value="19">Surveillance Safety</option>
                                                            <option value="20">إلكتروني</option>
                                                            <option value="21">الجمال الأزياء</option>
                                                            <option value="22">الكاميرا والصور</option>
                                                            <option value="23">الهاتف الذكي والجدول</option>
                                                            <option value="24">رياضة وخارجية</option>
                                                            <option value="25">المجوهرات والساعات</option>
                                                            <option value="26">الصحة والجمال</option>
                                                            <option value="27">الكتب والمكاتب</option>
                                                            <option value="28">ألعاب وهوايات</option>
                                                            <option value="29">كتب</option>
                                                            <option value="30">سيارات</option>
                                                            <option value="31">ديكور المنزل</option>
                                                            <option value="32">المحمولة والشخصية</option>
                                                            <option value="33">الاستجمام في الهواء الطلق</option>
                                                            <option value="34">سلامة المراقبة</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area">
                                                            <h4 class="heading">Name *</h4>
                                                            <p class="sub-heading">(In Any Language)</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <input type="text" class="input-field" name="name"
                                                            placeholder="Enter Name" required="" value="">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area">
                                                            <h4 class="heading">Slug *</h4>
                                                            <p class="sub-heading">(In Any Language)</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <input type="text" class="input-field" name="slug"
                                                            placeholder="Enter Slug" required="" value="">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="attribute" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="submit-loader" style="display: none;">
                    <img src="https://product.geniusocean.com/geniuscart/assets/images/1564224329loading3.gif"
                        alt="">
                </div>
                <div class="modal-header">
                    <h5 class="modal-title">ADD NEW ATTRIBUTE</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="app" class="content-area">
                        <div class="add-product-content1">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="product-description">
                                        <div class="body-area">
                                            <div class="alert alert-danger validation" style="display: none;"><button
                                                    type="button" class="close alert-close"><span>X</span></button>
                                                <ul class="text-left"></ul>
                                            </div>
                                            <form id="geniusformdata"
                                                action="https://product.geniusocean.com/geniuscart/admin/attribute/store"
                                                method="POST" enctype="multipart/form-data"><input type="hidden"
                                                    name="_token" value="piFbphimUflU1Hv4whFAk6S9zVR1MoyEMmCRaheQ">
                                                <input type="hidden" name="type" value="subcategory"> <input
                                                    type="hidden" name="category_id" value="33">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area">
                                                            <h4 class="heading">Name *</h4>
                                                            <p class="sub-heading">(In Any Language)</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7"><input type="text" name="name"
                                                            placeholder="Enter Name" required="required" value=""
                                                            class="input-field"></div>
                                                </div> <br>
                                                <div id="optionarea" class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div id="counterrow1" class="row mb-2 counterrow">
                                                                <div class="col-lg-4">
                                                                    <div class="left-area">
                                                                        <h4 class="heading">Option *</h4>
                                                                        <p class="sub-heading">In English</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6"><input id="optionfield1"
                                                                        type="text" name="options[]" value=""
                                                                        placeholder="Option label" required="required"
                                                                        class="input-field"></div>
                                                                <div class="col-lg-1">
                                                                    
                                                                    <button type="button"
                                                                        class="btn btn-danger text-dark"><i
                                                                            class="fa fa-times"></i></button></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-7 offset-lg-4">
                                                                    <button type="button" class="btn btn-success text-dark">
                                                                        <i class="fa fa-plus"></i> 
                                                                        Add Option
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-7 offset-lg-4">
                                                        <div class="custom-control custom-checkbox"><input type="checkbox"
                                                                id="priceStatus1" name="price_status" checked="checked"
                                                                value="1" class="custom-control-input"> <label
                                                                for="priceStatus1" class="custom-control-label">Allow
                                                                Price Field</label></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-7 offset-lg-4">
                                                        <div class="custom-control custom-checkbox"><input type="checkbox"
                                                                id="detailsStatus1" name="details_status"
                                                                checked="checked" value="1"
                                                                class="custom-control-input"> <label for="detailsStatus1"
                                                                class="custom-control-label">Show on Details Page</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area"></div>
                                                    </div>
                                                    <div class="col-lg-7"><button type="submit"
                                                            class="addProductSubmit-btn">Create Attribute</button></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
@endpush
