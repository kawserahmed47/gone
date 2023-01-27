@extends('backend.master')

@section('content')
    <div class="content-area">

        <div class="row row-cards-one">
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="mycard bg1">
                    <div class="left">
                        <h5 class="title">Orders Pending! </h5>
                        <span class="number">198</span>
                        <a href="/#orders?status=pending" class="link">View
                            All</a>
                    </div>
                    <div class="right d-flex align-self-center">
                        <div class="icon">
                            <i class="icofont-dollar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="mycard bg2">
                    <div class="left">
                        <h5 class="title">Orders Procsessing!</h5>
                        <span class="number">1</span>
                        <a href="/#orders?status=processing"
                            class="link">View All</a>
                    </div>
                    <div class="right d-flex align-self-center">
                        <div class="icon">
                            <i class="icofont-truck-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="mycard bg3">
                    <div class="left">
                        <h5 class="title">Orders Completed!</h5>
                        <span class="number">12</span>
                        <a href="/#orders?status=completed"
                            class="link">View All</a>
                    </div>
                    <div class="right d-flex align-self-center">
                        <div class="icon">
                            <i class="icofont-check-circled"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="mycard bg4">
                    <div class="left">
                        <h5 class="title">Total Products!</h5>
                        <span class="number">56</span>
                        <a href="/#products" class="link">View All</a>
                    </div>
                    <div class="right d-flex align-self-center">
                        <div class="icon">
                            <i class="icofont-cart-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="mycard bg5">
                    <div class="left">
                        <h5 class="title">Total Customers!</h5>
                        <span class="number">109</span>
                        <a href="/#users" class="link">View All</a>
                    </div>
                    <div class="right d-flex align-self-center">
                        <div class="icon">
                            <i class="icofont-users-alt-5"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="mycard bg6">
                    <div class="left">
                        <h5 class="title">Total Posts!</h5>
                        <span class="number">30</span>
                        <a href="/#blog" class="link">View All</a>
                    </div>
                    <div class="right d-flex align-self-center">
                        <div class="icon">
                            <i class="icofont-newspaper"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row row-cards-one">
            <div class="col-md-6 col-xl-3">
                <div class="card c-info-box-area">
                    <div class="c-info-box box1">
                        <p>1</p>
                    </div>
                    <div class="c-info-box-content">
                        <h6 class="title">New Customers</h6>
                        <p class="text">Last 30 Days</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card c-info-box-area">
                    <div class="c-info-box box2">
                        <p>109</p>
                    </div>
                    <div class="c-info-box-content">
                        <h6 class="title">Total Customers</h6>
                        <p class="text">All Time</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card c-info-box-area">
                    <div class="c-info-box box3">
                        <p>0</p>
                    </div>
                    <div class="c-info-box-content">
                        <h6 class="title">Total Sales</h6>
                        <p class="text">Last 30 days</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card c-info-box-area">
                    <div class="c-info-box box4">
                        <p>12</p>
                    </div>
                    <div class="c-info-box-content">
                        <h6 class="title">Total Sales</h6>
                        <p class="text">All Time</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-cards-one">
            <div class="col-md-12 col-lg-6 col-sm-12 col-xl-6">
                <div class="card">
                    <h5 class="card-header">Recent Order(s)</h5>
                    <div class="card-body">

                        <div class="table-responsive  dashboard-home-table">
                            <div id="poproducts_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <table id="poproducts"
                                class="table table-hover dt-responsive  no-footer dtr-inline"
                                cellspacing="0" width="100%" role="grid">
                                <thead>
                                    <tr>
                                        <th>Order Number</th>
                                        <th>Order Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr role="row">
                                        <td>lZYH1673264187</td>
                                        <td>2023-01-09</td>
                                        <td>
                                            <div class="action-list">
                                                <a href="#">
                                                    <i class="fas fa-eye"></i> 
                                                    Details
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr role="row">
                                        <td>lZYH1673264187</td>
                                        <td>2023-01-09</td>
                                        <td>
                                            <div class="action-list">
                                                <a href="#">
                                                    <i class="fas fa-eye"></i> 
                                                    Details
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr role="row">
                                        <td>lZYH1673264187</td>
                                        <td>2023-01-09</td>
                                        <td>
                                            <div class="action-list">
                                                <a href="#">
                                                    <i class="fas fa-eye"></i> 
                                                    Details
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr role="row">
                                        <td>lZYH1673264187</td>
                                        <td>2023-01-09</td>
                                        <td>
                                            <div class="action-list">
                                                <a href="#">
                                                    <i class="fas fa-eye"></i> 
                                                    Details
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr role="row">
                                        <td>lZYH1673264187</td>
                                        <td>2023-01-09</td>
                                        <td>
                                            <div class="action-list">
                                                <a href="#">
                                                    <i class="fas fa-eye"></i> 
                                                    Details
                                                </a>
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

            <div class="col-md-12 col-lg-6 col-sm-12 col-xl-6">
                <div class="card">
                    <h5 class="card-header">Recent Customer(s)</h5>
                    <div class="card-body">
                        <div class="table-responsive  dashboard-home-table">
                            <table id="poproducts" class="table table-hover dt-responsive" cellspacing="0"
                                width="100%">
                                <thead>
                                    <tr>
                                        <th>Customer Email</th>
                                        <th>Joined</th>
                                        <td>Action</td>
                                    </tr>
                                   
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>medooz.2012@gmail.com</td>
                                        <td>2023-01-08 11:37:01</td>
                                        <td>
                                            <div class="action-list">
                                                <a href="#">
                                                    <i class="fas fa-eye"></i> 
                                                    Details
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>medooz.2012@gmail.com</td>
                                        <td>2023-01-08 11:37:01</td>
                                        <td>
                                            <div class="action-list">
                                                <a href="#">
                                                    <i class="fas fa-eye"></i> 
                                                    Details
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>medooz.2012@gmail.com</td>
                                        <td>2023-01-08 11:37:01</td>
                                        <td>
                                            <div class="action-list">
                                                <a href="#">
                                                    <i class="fas fa-eye"></i> 
                                                    Details
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>medooz.2012@gmail.com</td>
                                        <td>2023-01-08 11:37:01</td>
                                        <td>
                                            <div class="action-list">
                                                <a href="#">
                                                    <i class="fas fa-eye"></i> 
                                                    Details
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>medooz.2012@gmail.com</td>
                                        <td>2023-01-08 11:37:01</td>
                                        <td>
                                            <div class="action-list">
                                                <a href="#">
                                                    <i class="fas fa-eye"></i> 
                                                    Details
                                                </a>
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

        

        <div class="row row-cards-one">

            <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
                <div class="card">
                    <h5 class="card-header">Popular Product(s)</h5>
                    <div class="card-body">

                        <div class="table-responsive  dashboard-home-table">
                            <table id="poproducts" class="table table-hover dt-responsive" cellspacing="0"
                                width="100%">
                                <thead>
                                    <tr>
                                        <th>Featured Image</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img
                                                src="https://product.geniusocean.com/geniuscart/assets/images/products/1639378156F9SBl2Yx.png">
                                        </td>
                                        <td>Zain - Digital Agency and Startup HTML Template</td>
                                        <td>Electronic
                                            <br>
                                            TELEVISION
                                            <br>
                                            LCD TV
                                        </td>
                                        <td>Physical</td>

                                        <td> 570$ </td>

                                        <td>
                                            <div class="action-list"><a
                                                    href="/#products/edit/162"><i
                                                        class="fas fa-eye"></i> Details</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img
                                                src="https://product.geniusocean.com/geniuscart/assets/images/products/16480134488OmlUgJN.png">
                                        </td>
                                        <td>Top Rated product title will be here according to ...</td>
                                        <td>Fashion &amp; Beauty
                                            <br>
                                            ACCESSORIES
                                            <br>

                                        </td>
                                        <td>Physical</td>

                                        <td> 110$ </td>

                                        <td>
                                            <div class="action-list"><a
                                                    href="/#products/edit/170"><i
                                                        class="fas fa-eye"></i> Details</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img
                                                src="https://product.geniusocean.com/geniuscart/assets/images/products/1648013375aGqS3Zgd.png">
                                        </td>
                                        <td>Physical Product Title Title will Be Here 102</td>
                                        <td>Fashion &amp; Beauty
                                            <br>
                                            BAGS
                                            <br>

                                        </td>
                                        <td>Physical</td>

                                        <td> 115$ </td>

                                        <td>
                                            <div class="action-list"><a
                                                    href="/#products/edit/175"><i
                                                        class="fas fa-eye"></i> Details</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img
                                                src="https://product.geniusocean.com/geniuscart/assets/images/products/1639377187LerG6ypK.png">
                                        </td>
                                        <td>Physical Product Title Title will Be Here 99</td>
                                        <td>Fashion &amp; Beauty
                                            <br>
                                            BAGS
                                            <br>

                                        </td>
                                        <td>Physical</td>

                                        <td> 110$ </td>

                                        <td>
                                            <div class="action-list"><a
                                                    href="/#products/edit/178"><i
                                                        class="fas fa-eye"></i> Details</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img
                                                src="https://product.geniusocean.com/geniuscart/assets/images/products/1639377739mqNT2g2x.png">
                                        </td>
                                        <td>Top Rated product title will be here according to ...</td>
                                        <td>Fashion &amp; Beauty
                                            <br>
                                            ACCESSORIES
                                            <br>

                                        </td>
                                        <td>Physical</td>

                                        <td> 110$ </td>

                                        <td>
                                            <div class="action-list"><a
                                                    href="/#products/edit/169"><i
                                                        class="fas fa-eye"></i> Details</a>
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

        <div class="row row-cards-one">

            <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
                <div class="card">
                    <h5 class="card-header">Recent Product(s)</h5>
                    <div class="card-body">

                        <div class="table-responsive dashboard-home-table">
                            <div id="pproducts_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row btn-area">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="pproducts"
                                            class="table table-hover dt-responsive dataTable no-footer dtr-inline"
                                            cellspacing="0" width="100%" role="grid">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_disabled" >Featured
                                                        Image</th>
                                                    <th class="sorting_disabled" >Name</th>
                                                    <th class="sorting_disabled" >Category
                                                    </th>
                                                    <th class="sorting_disabled" >Type</th>
                                                    <th class="sorting_disabled" >Price</th>
                                                    <th class="sorting_disabled" ></th>
                                                </tr>
                                            </thead>
                                            <tbody>





                                                <tr role="row" class="odd">
                                                    <td tabindex="0"><img
                                                            src="https://product.geniusocean.com/geniuscart/assets/images/products/1583379574IMgpJTkz.png">
                                                    </td>
                                                    <td>يتم عرض المنتجات العربية هنا</td>
                                                    <td>إلكتروني
                                                        <br>
                                                        التلفاز
                                                        <br>
                                                        تلفزيون ال سي دي
                                                    </td>
                                                    <td>Physical</td>
                                                    <td> 27$ </td>
                                                    <td>
                                                        <div class="action-list"><a
                                                                href="/#products/edit/359"><i
                                                                    class="fas fa-eye"></i> Details</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td tabindex="0"><img
                                                            src="https://product.geniusocean.com/geniuscart/assets/images/products/1639299829GpA2fIPF.png">
                                                    </td>
                                                    <td>يتم عرض المنتجات العربية هنا</td>
                                                    <td>الجمال الأزياء
                                                        <br>
                                                        مستلزمات
                                                        <br>

                                                    </td>
                                                    <td>Physical</td>
                                                    <td> 111$ </td>
                                                    <td>
                                                        <div class="action-list"><a
                                                                href="/#products/edit/331"><i
                                                                    class="fas fa-eye"></i> Details</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td tabindex="0"><img
                                                            src="https://product.geniusocean.com/geniuscart/assets/images/products/1639301732rjpKi5Bj.png">
                                                    </td>
                                                    <td>يتم عرض المنتجات العربية هنا</td>
                                                    <td>الجمال الأزياء
                                                        <br>
                                                        مستلزمات
                                                        <br>

                                                    </td>
                                                    <td>Physical</td>
                                                    <td> 111$ </td>
                                                    <td>
                                                        <div class="action-list"><a
                                                                href="/#products/edit/330"><i
                                                                    class="fas fa-eye"></i> Details</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td tabindex="0"><img
                                                            src="https://product.geniusocean.com/geniuscart/assets/images/products/1639392705q0WQNIW1.png">
                                                    </td>
                                                    <td>يتم عرض المنتجات العربية هنا</td>
                                                    <td>الجمال الأزياء
                                                        <br>
                                                        مستلزمات
                                                        <br>

                                                    </td>
                                                    <td>Physical</td>
                                                    <td> 111$ </td>
                                                    <td>
                                                        <div class="action-list"><a
                                                                href="/#products/edit/329"><i
                                                                    class="fas fa-eye"></i> Details</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td tabindex="0"><img
                                                            src="https://product.geniusocean.com/geniuscart/assets/images/products/1639301941z6BfrkBZ.png">
                                                    </td>
                                                    <td>يتم عرض المنتجات العربية هنا</td>
                                                    <td>الجمال الأزياء
                                                        <br>
                                                        مستلزمات
                                                        <br>

                                                    </td>
                                                    <td>Physical</td>
                                                    <td> 111$ </td>
                                                    <td>
                                                        <div class="action-list"><a
                                                                href="/#products/edit/328"><i
                                                                    class="fas fa-eye"></i> Details</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5"></div>
                                    <div class="col-sm-12 col-md-7"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
