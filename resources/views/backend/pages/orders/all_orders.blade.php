@extends('backend.master')


@section('content')
    <div class="content-area">
        <div class="mr-breadcrumb">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="heading">All Orders</h4>
                    <ul class="links">
                        <li>
                            <a href="https://product.geniusocean.com/geniuscart/admin">Dashboard </a>
                        </li>
                        <li>
                            <a href="javascript:;">Orders</a>
                        </li>
                        <li>
                            <a href="https://product.geniusocean.com/geniuscart/admin/orders">All Orders</a>
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
                            <button type="button" class="close alert-close"><span>x</span></button>
                            <p class="text-left"></p>
                        </div>
                        <div class="table-responsive">
                            <div class="gocover"
                                style="background: url(https://product.geniusocean.com/geniuscart/assets/images/1564224329loading3.gif) no-repeat scroll center center rgba(45, 45, 45, 0.5);">
                            </div>
                            <div id="geniustable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                               
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="geniustable"
                                            class="table table-hover dt-responsive dataTable no-footer dtr-inline"
                                            cellspacing="0" width="100%" role="grid"
                                            aria-describedby="geniustable_info" style="width: 100%;">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 253px;">Customer Email</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 161px;">Order Number</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 107px;">Total Qty</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 115px;">Total Cost</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 137px;">Options</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td tabindex="0">rintogeorge00752@gmail.com</td>
                                                    <td><a
                                                            href="https://product.geniusocean.com/geniuscart/admin/order/420/invoice">lZYH1673264187</a>
                                                    </td>
                                                    <td>1</td>
                                                    <td>110$</td>
                                                    <td>
                                                        <div class="godropdown"><button class="go-dropdown-toggle">Actions<i
                                                                    class="fas fa-chevron-down"></i></button>
                                                            <div class="action-list" style="display: none;"><a
                                                                    href="https://product.geniusocean.com/geniuscart/admin/order/420/show">
                                                                    <i class="fas fa-eye"></i> View Details</a><a
                                                                    href="javascript:;" class="send"
                                                                    data-email="rintogeorge00752@gmail.com"
                                                                    data-toggle="modal" data-target="#vendorform"><i
                                                                        class="fas fa-envelope"></i> Send</a><a
                                                                    href="javascript:;"
                                                                    data-href="https://product.geniusocean.com/geniuscart/admin/order/420/track"
                                                                    class="track" data-toggle="modal"
                                                                    data-target="#modal1"><i class="fas fa-truck"></i> Track
                                                                    Order</a><a href="javascript:;"
                                                                    data-href="https://product.geniusocean.com/geniuscart/admin/order/edit/420"
                                                                    class="delivery" data-toggle="modal"
                                                                    data-target="#modal1"><i class="fas fa-dollar-sign"></i>
                                                                    Delivery Status</a></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td tabindex="0">ghj</td>
                                                    <td><a
                                                            href="https://product.geniusocean.com/geniuscart/admin/order/419/invoice">oP9I1672836669</a>
                                                    </td>
                                                    <td>1</td>
                                                    <td>110$</td>
                                                    <td>
                                                        <div class="godropdown"><button
                                                                class="go-dropdown-toggle">Actions<i
                                                                    class="fas fa-chevron-down"></i></button>
                                                            <div class="action-list" style="display: none;"><a
                                                                    href="https://product.geniusocean.com/geniuscart/admin/order/419/show">
                                                                    <i class="fas fa-eye"></i> View Details</a><a
                                                                    href="javascript:;" class="send" data-email="ghj"
                                                                    data-toggle="modal" data-target="#vendorform"><i
                                                                        class="fas fa-envelope"></i> Send</a><a
                                                                    href="javascript:;"
                                                                    data-href="https://product.geniusocean.com/geniuscart/admin/order/419/track"
                                                                    class="track" data-toggle="modal"
                                                                    data-target="#modal1"><i class="fas fa-truck"></i>
                                                                    Track Order</a><a href="javascript:;"
                                                                    data-href="https://product.geniusocean.com/geniuscart/admin/order/edit/419"
                                                                    class="delivery" data-toggle="modal"
                                                                    data-target="#modal1"><i
                                                                        class="fas fa-dollar-sign"></i> Delivery Status</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td tabindex="0">ghj</td>
                                                    <td><a
                                                            href="https://product.geniusocean.com/geniuscart/admin/order/418/invoice">Tn3p1672836666</a>
                                                    </td>
                                                    <td>1</td>
                                                    <td>110$</td>
                                                    <td>
                                                        <div class="godropdown"><button
                                                                class="go-dropdown-toggle">Actions<i
                                                                    class="fas fa-chevron-down"></i></button>
                                                            <div class="action-list" style="display: none;"><a
                                                                    href="https://product.geniusocean.com/geniuscart/admin/order/418/show">
                                                                    <i class="fas fa-eye"></i> View Details</a><a
                                                                    href="javascript:;" class="send" data-email="ghj"
                                                                    data-toggle="modal" data-target="#vendorform"><i
                                                                        class="fas fa-envelope"></i> Send</a><a
                                                                    href="javascript:;"
                                                                    data-href="https://product.geniusocean.com/geniuscart/admin/order/418/track"
                                                                    class="track" data-toggle="modal"
                                                                    data-target="#modal1"><i class="fas fa-truck"></i>
                                                                    Track Order</a><a href="javascript:;"
                                                                    data-href="https://product.geniusocean.com/geniuscart/admin/order/edit/418"
                                                                    class="delivery" data-toggle="modal"
                                                                    data-target="#modal1"><i
                                                                        class="fas fa-dollar-sign"></i> Delivery Status</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td tabindex="0">nawaphat.tom@gmail.com</td>
                                                    <td><a
                                                            href="https://product.geniusocean.com/geniuscart/admin/order/417/invoice">7ZnW1666030201</a>
                                                    </td>
                                                    <td>2</td>
                                                    <td>220$</td>
                                                    <td>
                                                        <div class="godropdown"><button
                                                                class="go-dropdown-toggle">Actions<i
                                                                    class="fas fa-chevron-down"></i></button>
                                                            <div class="action-list" style="display: none;"><a
                                                                    href="https://product.geniusocean.com/geniuscart/admin/order/417/show">
                                                                    <i class="fas fa-eye"></i> View Details</a><a
                                                                    href="javascript:;" class="send"
                                                                    data-email="nawaphat.tom@gmail.com"
                                                                    data-toggle="modal" data-target="#vendorform"><i
                                                                        class="fas fa-envelope"></i> Send</a><a
                                                                    href="javascript:;"
                                                                    data-href="https://product.geniusocean.com/geniuscart/admin/order/417/track"
                                                                    class="track" data-toggle="modal"
                                                                    data-target="#modal1"><i class="fas fa-truck"></i>
                                                                    Track Order</a><a href="javascript:;"
                                                                    data-href="https://product.geniusocean.com/geniuscart/admin/order/edit/417"
                                                                    class="delivery" data-toggle="modal"
                                                                    data-target="#modal1"><i
                                                                        class="fas fa-dollar-sign"></i> Delivery Status</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td tabindex="0">ujjawal.ranjan.it@gmail.com</td>
                                                    <td><a
                                                            href="https://product.geniusocean.com/geniuscart/admin/order/416/invoice">9bk71665745286</a>
                                                    </td>
                                                    <td>1</td>
                                                    <td>320$</td>
                                                    <td>
                                                        <div class="godropdown"><button
                                                                class="go-dropdown-toggle">Actions<i
                                                                    class="fas fa-chevron-down"></i></button>
                                                            <div class="action-list" style="display: none;"><a
                                                                    href="https://product.geniusocean.com/geniuscart/admin/order/416/show">
                                                                    <i class="fas fa-eye"></i> View Details</a><a
                                                                    href="javascript:;" class="send"
                                                                    data-email="ujjawal.ranjan.it@gmail.com"
                                                                    data-toggle="modal" data-target="#vendorform"><i
                                                                        class="fas fa-envelope"></i> Send</a><a
                                                                    href="javascript:;"
                                                                    data-href="https://product.geniusocean.com/geniuscart/admin/order/416/track"
                                                                    class="track" data-toggle="modal"
                                                                    data-target="#modal1"><i class="fas fa-truck"></i>
                                                                    Track Order</a><a href="javascript:;"
                                                                    data-href="https://product.geniusocean.com/geniuscart/admin/order/edit/416"
                                                                    class="delivery" data-toggle="modal"
                                                                    data-target="#modal1"><i
                                                                        class="fas fa-dollar-sign"></i> Delivery Status</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td tabindex="0">ujjawal.ranjan.it@gmail.com</td>
                                                    <td><a
                                                            href="https://product.geniusocean.com/geniuscart/admin/order/415/invoice">993h1665745281</a>
                                                    </td>
                                                    <td>1</td>
                                                    <td>320$</td>
                                                    <td>
                                                        <div class="godropdown"><button
                                                                class="go-dropdown-toggle">Actions<i
                                                                    class="fas fa-chevron-down"></i></button>
                                                            <div class="action-list" style="display: none;"><a
                                                                    href="https://product.geniusocean.com/geniuscart/admin/order/415/show">
                                                                    <i class="fas fa-eye"></i> View Details</a><a
                                                                    href="javascript:;" class="send"
                                                                    data-email="ujjawal.ranjan.it@gmail.com"
                                                                    data-toggle="modal" data-target="#vendorform"><i
                                                                        class="fas fa-envelope"></i> Send</a><a
                                                                    href="javascript:;"
                                                                    data-href="https://product.geniusocean.com/geniuscart/admin/order/415/track"
                                                                    class="track" data-toggle="modal"
                                                                    data-target="#modal1"><i class="fas fa-truck"></i>
                                                                    Track Order</a><a href="javascript:;"
                                                                    data-href="https://product.geniusocean.com/geniuscart/admin/order/edit/415"
                                                                    class="delivery" data-toggle="modal"
                                                                    data-target="#modal1"><i
                                                                        class="fas fa-dollar-sign"></i> Delivery Status</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td tabindex="0">z.boulouarde@gmail.com</td>
                                                    <td><a
                                                            href="https://product.geniusocean.com/geniuscart/admin/order/414/invoice">HWHE1665570165</a>
                                                    </td>
                                                    <td>1</td>
                                                    <td>110$</td>
                                                    <td>
                                                        <div class="godropdown"><button
                                                                class="go-dropdown-toggle">Actions<i
                                                                    class="fas fa-chevron-down"></i></button>
                                                            <div class="action-list" style="display: none;"><a
                                                                    href="https://product.geniusocean.com/geniuscart/admin/order/414/show">
                                                                    <i class="fas fa-eye"></i> View Details</a><a
                                                                    href="javascript:;" class="send"
                                                                    data-email="z.boulouarde@gmail.com"
                                                                    data-toggle="modal" data-target="#vendorform"><i
                                                                        class="fas fa-envelope"></i> Send</a><a
                                                                    href="javascript:;"
                                                                    data-href="https://product.geniusocean.com/geniuscart/admin/order/414/track"
                                                                    class="track" data-toggle="modal"
                                                                    data-target="#modal1"><i class="fas fa-truck"></i>
                                                                    Track Order</a><a href="javascript:;"
                                                                    data-href="https://product.geniusocean.com/geniuscart/admin/order/edit/414"
                                                                    class="delivery" data-toggle="modal"
                                                                    data-target="#modal1"><i
                                                                        class="fas fa-dollar-sign"></i> Delivery Status</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td tabindex="0">laura@mailinator.com</td>
                                                    <td><a
                                                            href="https://product.geniusocean.com/geniuscart/admin/order/413/invoice">shnT1665524612</a>
                                                    </td>
                                                    <td>4</td>
                                                    <td>30,338₹</td>
                                                    <td>
                                                        <div class="godropdown"><button
                                                                class="go-dropdown-toggle">Actions<i
                                                                    class="fas fa-chevron-down"></i></button>
                                                            <div class="action-list" style="display: none;"><a
                                                                    href="https://product.geniusocean.com/geniuscart/admin/order/413/show">
                                                                    <i class="fas fa-eye"></i> View Details</a><a
                                                                    href="javascript:;" class="send"
                                                                    data-email="laura@mailinator.com" data-toggle="modal"
                                                                    data-target="#vendorform"><i
                                                                        class="fas fa-envelope"></i> Send</a><a
                                                                    href="javascript:;"
                                                                    data-href="https://product.geniusocean.com/geniuscart/admin/order/413/track"
                                                                    class="track" data-toggle="modal"
                                                                    data-target="#modal1"><i class="fas fa-truck"></i>
                                                                    Track Order</a><a href="javascript:;"
                                                                    data-href="https://product.geniusocean.com/geniuscart/admin/order/edit/413"
                                                                    class="delivery" data-toggle="modal"
                                                                    data-target="#modal1"><i
                                                                        class="fas fa-dollar-sign"></i> Delivery Status</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td tabindex="0">nik@gmail.com</td>
                                                    <td><a
                                                            href="https://product.geniusocean.com/geniuscart/admin/order/412/invoice">R13o1665467013</a>
                                                    </td>
                                                    <td>2</td>
                                                    <td>220$</td>
                                                    <td>
                                                        <div class="godropdown"><button
                                                                class="go-dropdown-toggle">Actions<i
                                                                    class="fas fa-chevron-down"></i></button>
                                                            <div class="action-list" style="display: none;"><a
                                                                    href="https://product.geniusocean.com/geniuscart/admin/order/412/show">
                                                                    <i class="fas fa-eye"></i> View Details</a><a
                                                                    href="javascript:;" class="send"
                                                                    data-email="nik@gmail.com" data-toggle="modal"
                                                                    data-target="#vendorform"><i
                                                                        class="fas fa-envelope"></i> Send</a><a
                                                                    href="javascript:;"
                                                                    data-href="https://product.geniusocean.com/geniuscart/admin/order/412/track"
                                                                    class="track" data-toggle="modal"
                                                                    data-target="#modal1"><i class="fas fa-truck"></i>
                                                                    Track Order</a><a href="javascript:;"
                                                                    data-href="https://product.geniusocean.com/geniuscart/admin/order/edit/412"
                                                                    class="delivery" data-toggle="modal"
                                                                    data-target="#modal1"><i
                                                                        class="fas fa-dollar-sign"></i> Delivery Status</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td tabindex="0">webintegratedtech@gmail.com</td>
                                                    <td><a
                                                            href="https://product.geniusocean.com/geniuscart/admin/order/411/invoice">9lTj1665383054</a>
                                                    </td>
                                                    <td>3</td>
                                                    <td>330$</td>
                                                    <td>
                                                        <div class="godropdown"><button
                                                                class="go-dropdown-toggle">Actions<i
                                                                    class="fas fa-chevron-down"></i></button>
                                                            <div class="action-list" style="display: none;"><a
                                                                    href="https://product.geniusocean.com/geniuscart/admin/order/411/show">
                                                                    <i class="fas fa-eye"></i> View Details</a><a
                                                                    href="javascript:;" class="send"
                                                                    data-email="webintegratedtech@gmail.com"
                                                                    data-toggle="modal" data-target="#vendorform"><i
                                                                        class="fas fa-envelope"></i> Send</a><a
                                                                    href="javascript:;"
                                                                    data-href="https://product.geniusocean.com/geniuscart/admin/order/411/track"
                                                                    class="track" data-toggle="modal"
                                                                    data-target="#modal1"><i class="fas fa-truck"></i>
                                                                    Track Order</a><a href="javascript:;"
                                                                    data-href="https://product.geniusocean.com/geniuscart/admin/order/edit/411"
                                                                    class="delivery" data-toggle="modal"
                                                                    data-target="#modal1"><i
                                                                        class="fas fa-dollar-sign"></i> Delivery Status</a>
                                                            </div>
                                                        </div>
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
    </div>
@endsection
