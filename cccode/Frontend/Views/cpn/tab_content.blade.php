<div class="coupon-tab post-wrapper nopadtop clearfix">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs custom-tab-nav" role="tablist">
        <li role="presentation" class="active"><a href="#activecoupons" aria-controls="activecoupons" role="tab" data-toggle="tab">Tất Cả</a></li>
        <li role="presentation"><a href="#unreliablecoupons" aria-controls="unreliablecoupons" role="tab" data-toggle="tab">Mới Nhất</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="activecoupons">

         @include('front_end::cpn.coupon_t')

        </div>
        <div role="tabpanel" class="tab-pane fade" id="unreliablecoupons">

            <div class="coupon-list list-wrapper">
                <div class="coupon-wrapper">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="post-media text-center">
                                <a href="coupon-single.html"><img src="{{asset('/')}}uploads/store.png" alt="" class="img-responsive"></a>
                                <small><a href="#">Visit Store</a></small>
                            </div>
                            <!-- end media -->
                        </div>
                        <!-- end col -->

                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="coupon-meta">
                                <div class="coupon-top clearfix">
                                    <div class="rating pull-left">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <small>21 Rating</small>
                                    </div>
                                    <div class="favorite-coupon pull-right text-right">
                                        <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                </div>
                                <!-- end coupon-top -->
                                <h3><a href="coupon-single.html">Free Shipping for All Orders</a></h3>
                                <p>Get free shipping for all your next orders from this store.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                            </div>
                            <!-- end meta -->

                            <div class="showcode">
                                <a href="#" class="code-link" data-ex-link="{{asset('/')}}">
                                    <span class="coupon-code">2016TATILRA29</span>
                                    <span class="show-code">Show Code</span>
                                </a>
                            </div>
                            <!-- end showcode -->

                            <div class="coupon-bottom clearfix">
                                <small class="pull-left">Expire : 21/07/2016</small>
                                <small class="pull-right"><a href="store-single.html"><i class="fa fa-comment-o"></i> 44 Comments</a></small>
                            </div>
                            <!-- end coupon-top -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <!-- Modal -->
                    <div id="code_id_05" class="modal fade code-modal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4><a href="coupon-single.html">Free Shipping for All Orders</a></h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="store-single.html"><img src="{{asset('/')}}/uploads/store_05.jpg" alt="" class="img-responsive"></a>
                                            <div class="modal-button">
                                                <a href="{{asset('/')}}/" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end col -->

                                        <div class="col-md-8">
                                            <div class="coupon-meta">
                                                <div class="coupon-top clearfix">
                                                    <div class="rating pull-left">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <small>21 Rating</small>
                                                    </div>
                                                    <div class="favorite-coupon pull-right text-right">
                                                        <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <!-- end coupon-top -->
                                            </div>
                                            <!-- end coupon-meta -->

                                            <p>Get free shipping for all your next orders from this store.. You can save awesome discount with our coupon code today!</p>

                                            <div class="modal-share clearfix">
                                                <ul class="list-inline social-small">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                            <!-- end share -->
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end modal-body -->

                                <div class="modal-footer">
                                    <div class="coupon-area">
                                        <div class=" row">
                                            <div class="col-md-4 text-left">
                                                <div class="coupon-vote">
                                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                </div>
                                                <!-- end coupon-meta -->
                                            </div>
                                            <!-- end col -->
                                            <div class="col-md-8 text-center">
                                                <button data-clipboard-text="2016TATILRA29" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRA29</button>
                                                <small>Click to Copy</small>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end coupon-area -->
                                </div>
                                <!-- end modal-footer -->
                            </div>
                            <!-- end mpdal-content -->
                        </div>
                        <!-- end modal-dialog -->
                    </div>
                    <!-- end modal -->
                </div>
                <!-- end coupon-wrapper -->
            </div>
            <!-- end coupon list -->

            <div class="coupon-list list-wrapper">
                <div class="coupon-wrapper">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="post-media text-center">
                                <a href="coupon-single.html"><img src="{{asset('/')}}/uploads/store.png" alt="" class="img-responsive"></a>
                                <small><a href="#">Visit Store</a></small>
                            </div>
                            <!-- end media -->
                        </div>
                        <!-- end col -->

                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="coupon-meta">
                                <div class="coupon-top clearfix">
                                    <div class="rating pull-left">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <small>21 Rating</small>
                                    </div>
                                    <div class="favorite-coupon pull-right text-right">
                                        <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                </div>
                                <!-- end coupon-top -->
                                <h3><a href="coupon-single.html">$5 for for your next logo design</a></h3>
                                <p>Get free shipping for all your next orders from this store.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                            </div>
                            <!-- end meta -->

                            <div class="showcode">
                                <a href="#" class="code-link" data-ex-link="{{asset('/')}}/">
                                    <span class="coupon-code">2016TATILRAAA</span>
                                    <span class="show-code">Show Code</span>
                                </a>
                            </div>
                            <!-- end showcode -->

                            <div class="coupon-bottom clearfix">
                                <small class="pull-left">Expire : 21/07/2016</small>
                                <small class="pull-right"><a href="store-single.html"><i class="fa fa-comment-o"></i> 11 Comments</a></small>
                            </div>
                            <!-- end coupon-top -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <!-- Modal -->
                    <div id="code_id_06" class="modal fade code-modal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4><a href="coupon-single.html">$5 for for your next logo design</a></h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="store-single.html"><img src="{{asset('/')}}/uploads/store_06.jpg" alt="" class="img-responsive"></a>
                                            <div class="modal-button">
                                                <a href="http://themeforest.net/" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end col -->

                                        <div class="col-md-8">
                                            <div class="coupon-meta">
                                                <div class="coupon-top clearfix">
                                                    <div class="rating pull-left">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <small>21 Rating</small>
                                                    </div>
                                                    <div class="favorite-coupon pull-right text-right">
                                                        <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <!-- end coupon-top -->
                                            </div>
                                            <!-- end coupon-meta -->

                                            <p>Get free shipping for all your next orders from this store.. You can save awesome discount with our coupon code today!</p>

                                            <div class="modal-share clearfix">
                                                <ul class="list-inline social-small">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                            <!-- end share -->
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end modal-body -->

                                <div class="modal-footer">
                                    <div class="coupon-area">
                                        <div class=" row">
                                            <div class="col-md-4 text-left">
                                                <div class="coupon-vote">
                                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                </div>
                                                <!-- end coupon-meta -->
                                            </div>
                                            <!-- end col -->
                                            <div class="col-md-8 text-center">
                                                <button data-clipboard-text="2016TATILRAAA" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRAAA</button>
                                                <small>Click to Copy</small>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end coupon-area -->
                                </div>
                                <!-- end modal-footer -->
                            </div>
                            <!-- end mpdal-content -->
                        </div>
                        <!-- end modal-dialog -->
                    </div>
                    <!-- end modal -->
                </div>
                <!-- end coupon-wrapper -->
            </div>
            <!-- end coupon list -->

            <div class="coupon-list list-wrapper">
                <div class="coupon-wrapper">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="post-media text-center">
                                <a href="coupon-single.html"><img src="{{asset('/')}}/uploads/store.png" alt="" class="img-responsive"></a>
                                <small><a href="#">Visit Store</a></small>
                            </div>
                            <!-- end media -->
                        </div>
                        <!-- end col -->

                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="coupon-meta">
                                <div class="coupon-top clearfix">
                                    <div class="rating pull-left">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <small>21 Rating</small>
                                    </div>
                                    <div class="favorite-coupon pull-right text-right">
                                        <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                </div>
                                <!-- end coupon-top -->
                                <h3><a href="coupon-single.html">$10 Credit for new users on Sohbet Molasi</a></h3>
                                <p>Get free shipping for all your next orders from this store.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                            </div>
                            <!-- end meta -->

                            <div class="showcode">
                                <a href="#" class="code-link" data-ex-link="http://themeforest.net/">
                                    <span class="coupon-code">2016TATILRA21</span>
                                    <span class="show-code">Show Code</span>
                                </a>
                            </div>
                            <!-- end showcode -->

                            <div class="coupon-bottom clearfix">
                                <small class="pull-left">Expire : 21/07/2016</small>
                                <small class="pull-right"><a href="store-single.html"><i class="fa fa-comment-o"></i> 6 Comments</a></small>
                            </div>
                            <!-- end coupon-top -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <!-- Modal -->
                    <div id="code_id_07" class="modal fade code-modal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4><a href="coupon-single.html">$10 Credit for new users on Sohbet Molasi</a></h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="store-single.html"><img src="{{asset('/')}}/uploads/store_07.jpg" alt="" class="img-responsive"></a>
                                            <div class="modal-button">
                                                <a href="http://themeforest.net/" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end col -->

                                        <div class="col-md-8">
                                            <div class="coupon-meta">
                                                <div class="coupon-top clearfix">
                                                    <div class="rating pull-left">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <small>21 Rating</small>
                                                    </div>
                                                    <div class="favorite-coupon pull-right text-right">
                                                        <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <!-- end coupon-top -->
                                            </div>
                                            <!-- end coupon-meta -->

                                            <p>Get free shipping for all your next orders from this store. You can save awesome discount with our coupon code today!</p>

                                            <div class="modal-share clearfix">
                                                <ul class="list-inline social-small">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                            <!-- end share -->
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end modal-body -->

                                <div class="modal-footer">
                                    <div class="coupon-area">
                                        <div class=" row">
                                            <div class="col-md-4 text-left">
                                                <div class="coupon-vote">
                                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                </div>
                                                <!-- end coupon-meta -->
                                            </div>
                                            <!-- end col -->
                                            <div class="col-md-8 text-center">
                                                <button data-clipboard-text="2016TATILRA21" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRA21</button>
                                                <small>Click to Copy</small>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end coupon-area -->
                                </div>
                                <!-- end modal-footer -->
                            </div>
                            <!-- end mpdal-content -->
                        </div>
                        <!-- end modal-dialog -->
                    </div>
                    <!-- end modal -->
                </div>
                <!-- end coupon-wrapper -->
            </div>
            <!-- end coupon list -->
        </div>
    </div>
</div>
{!! $listcoupons->render() !!}
</div>
<!-- end content -->