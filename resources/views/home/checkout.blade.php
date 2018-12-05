@extends('layouts.master')
@section('content')
    <div class="ads-grid_shop">
        <div class="shop_inner_inf">
            <div class="privacy about">
                <h3>Chec<span>kout</span></h3>

                <div class="checkout-right">
                    <h4>Your shopping cart contains: <span>{{$cart->count()}} Products</span></h4>
                    <table class="timetable_sub">
                        <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Product</th>
                            <th>Quality</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Subtotal</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i = 1@endphp
                        @foreach($cart as $key => $item)
                            <form action="{{route('updateCart')}}" method="GET">
                                <tr class="rem1">
                                    <td class="invert">{{$i++}}</td>
                                    <td class="invert-image"><a href="single.html"><img
                                                    src="pages/image/{{$item->options['img']}}" alt=" "
                                                    class="img-responsive"></a></td>
                                    <td class="invert">
                                        {!! Form::selectRange('qty', 1,50,$item->qty) !!}
                                    </td>


                                    <td class="invert">{{$item->name}}</td>

                                    <td class="invert">{{$item->price}} VNĐ</td>
                                    <td class="invert">{{$item->subtotal}}</td>
                                    <td class="invert">
                                        <input type="hidden" value="{{$item->rowId}}" name="rowId">
                                          <input type="submit" value="Update">
                                          <br><br>
                            </form>
                            <form action="{{route('removeCart',$item->rowId)}}" method="get">

                               <input type="submit" value="Remove">

                            </form>

                            </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="checkout-left">

                    <div class="col-lg-offset-1 col-md-10 ">
                        <h4 style="color: red; font-size: 200%; margin-top: 10px;">THÔNG TIN KHÁCH HÀNG</h4>
                        <form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
                            <section class="creditly-wrapper wrapper">
                                <div class="information-wrapper">
                                    <div class="first-row form-group">
                                        <div class="controls">
                                            <label class="control-label">Customer name: </label>
                                            <input class="billing-address-name form-control" type="text" name="name"
                                                   placeholder="Full name">
                                        </div>
                                        <div class="card_number_grids">
                                            <div class="card_number_grid_left">
                                                <div class="controls">
                                                    <label class="control-label">Phone:</label>
                                                    <input class="form-control" type="text" placeholder="Phone">
                                                </div>
                                            </div>
                                            <div class="card_number_grid_right">
                                                <div class="controls">
                                                    <label class="control-label">Email: </label>
                                                    <input class="form-control" type="text" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Address: </label>
                                            <input class="form-control" type="text" placeholder="Addresss">
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Note: </label>
                                            <textarea name="ghichu" cols="108" rows="5"></textarea>
                                        </div>
                                        <!-- <div class="check-thanh-toan">
                                            <ul style="list-style: none;">
                                                <li style="width: 50px;">
                                                    <input type="radio" style="float: left;">
                                                    <p class="thanh-toan" style="width:300px; font-weight: bold;font-size: 115%;">Thanh toán khi đặt hàng </p>
                                                    <p style="width:750px; margin-left: 50px; ">Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng</p>
                                                </li>

                                                <li style="width: 50px;">
                                                    <input type="radio"  style="float: left;">
                                                    <p class="thanh-toan" style="width:300px; font-weight: bold;font-size: 115%;">Chuyển khoản</p>
                                                    <p style="width:500px; margin-left: 50px;">Chuyển tiền đến tài khoản sau:
                                                    <br>- Số tài khoản: 123 456 789
                                                    <br>- Chủ TK: Nguyễn A
                                                    <br>- Ngân hàng ACB, Chi nhánh TPHCM</p>
                                                </li>

                                            </ul>
                                        </div> -->
                                    </div>
                                    <button class="submit check_out">ĐẶT HÀNG</button>
                                </div>
                            </section>
                        </form>
                    </div>

                    <div class="clearfix"></div>


                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('slidebar')
    <div class="mid_slider_w3lsagile">
        <div class="col-md-3 mid_slider_text">
            <h5>Some More Shoes</h5>
        </div>
        <div class="col-md-9 mid_slider_info">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="pages/images/g1.jpg" alt="Image"
                                                            style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="pages/images/g2.jpg" alt="Image"
                                                            style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="pages/images/g3.jpg" alt="Image"
                                                            style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="pages/images/g4.jpg" alt="Image"
                                                            style="max-width:100%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="item active">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="pages/images/g5.jpg" alt="Image"
                                                            style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="pages/images/g6.jpg" alt="Image"
                                                            style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="pages/images/g2.jpg" alt="Image"
                                                            style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="pages/images/g1.jpg" alt="Image"
                                                            style="max-width:100%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="pages/images/g1.jpg" alt="Image"
                                                            style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="pages/images/g2.jpg" alt="Image"
                                                            style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="pages/images/g3.jpg" alt="Image"
                                                            style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="pages/images/g4.jpg" alt="Image"
                                                            style="max-width:100%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="pages/images/g1.jpg" alt="Image"
                                                            style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="pages/images/g2.jpg" alt="Image"
                                                            style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="pages/images/g3.jpg" alt="Image"
                                                            style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="pages/images/g4.jpg" alt="Image"
                                                            style="max-width:100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="fa fa-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!-- The Modal -->

            </div>
        </div>

        <div class="clearfix"></div>
    </div>
@endsection
@section('script')
    <script>
        $('.value-plus').on('click', function () {
            var divUpd = $(this).parent().find('.value'),
                newVal = parseInt(divUpd.text(), 10) + 1;
            divUpd.text(newVal);
        });

        $('.value-minus').on('click', function () {
            var divUpd = $(this).parent().find('.value'),
                newVal = parseInt(divUpd.text(), 10) - 1;
            if (newVal >= 1) divUpd.text(newVal);
        });
    </script>
    <script>
        $(document).ready(function (c) {
            $('.close1').on('click', function (c) {
                $('.rem1').fadeOut('slow', function (c) {
                    $('.rem1').remove();
                });
            });
        });
    </script>
    <script>
        $(document).ready(function (c) {
            $('.close2').on('click', function (c) {
                $('.rem2').fadeOut('slow', function (c) {
                    $('.rem2').remove();
                });
            });
        });
    </script>
    <script>
        $(document).ready(function (c) {
            $('.close3').on('click', function (c) {
                $('.rem3').fadeOut('slow', function (c) {
                    $('.rem3').remove();
                });
            });
        });
    </script>
@endsection