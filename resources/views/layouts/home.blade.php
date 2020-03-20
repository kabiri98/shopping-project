
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="push-up over-slider blocks-spacer">

                    <!--  ==========  -->
                    <!--  = Three Banners =  -->
                    <!--  ==========  -->
                    <div class="row">
                        <div class="span4">
                            <a href="#" class="btn btn-block banner">
                                <span class="title"><span class="light">فروش</span> تابستانی</span>
                                <em>تا 60% تخفیف روی کفش ها</em>
                            </a>
                        </div>
                        <div class="span4">
                            <a href="#" class="btn btn-block colored banner">
                                <span class="title"><span class="light">ارسال</span> رایگان</span>
                                <em>برای خرید های بیش از 69000 تومان</em>
                            </a>
                        </div>
                        <div class="span4">
                            <a href="#" class="btn btn-block banner">
                                <span class="title"><span class="light">محصولات</span> جدید</span>
                                <em>از محصولات جدید دیدن کنید.</em>
                            </a>
                        </div>
                    </div> <!-- /three banners -->
                </div>
            </div>
        </div>

        <!--  ==========  -->
        <!--  = Featured Items =  -->
        <!--  ==========  -->
        <div class="row featured-items blocks-spacer">
            <div class="span12">

                <!--  ==========  -->
                <!--  = Title =  -->
                <!--  ==========  -->
            	<div class="main-titles lined">
            	    <h2 class="title"><span class="light">محصولات</span> ویژه</h2>
            	    <div class="arrows">
                        <a href="#" class="icon-chevron-right" id="featuredItemsRight"></a>
                        <a href="#" class="icon-chevron-left" id="featuredItemsLeft"></a>
                    </div>
            	</div>
            </div>

            <div class="span12">
                <!--  ==========  -->
                <!--  = Carousel =  -->
                <!--  ==========  -->
                <div class="carouFredSel" data-autoplay="false" data-nav="featuredItems">
                    <div class="slide">
                        <div class="row">





    	            	<!--  ==========  -->
    					<!--  = Product =  -->
    					<!--  ==========  -->
    	            	<div class="span4">
    	            	    <div class="product">
    	            	        <div class="product-img featured">
    	            	            <div class="picture">
    	            	        	    <img src="images/dummy/featured-products/featured-1.png" alt="" width="518" height="358" />
    	            	        		<div class="img-overlay">
    	            	        		    <a href="product" class="btn more btn-primary">توضیحات بیشتر</a>
    	            	        		    <a href="#" class="btn buy btn-danger">خرید</a>
    	            	        		</div>
    	            	            </div>
    	            	        </div>
    	            	        <div class="main-titles">
    	            	            <h4 class="title">$115</h4>
    	            	            <h5 class="no-margin">محصول ویژه 652</h5>
    	            	        </div>
    	            	        <p class="desc">توضیحاتی که در مورد محصول لازم است را در اینجا مینویسید</p>
    	            	        <p class="center-align stars">
                    	            <span class="icon-star stars-clr"></span>
                    	            <span class="icon-star stars-clr"></span>
                    	            <span class="icon-star stars-clr"></span>
                    	            <span class="icon-star stars-clr"></span>
                    	            <span class="icon-star stars-clr"></span>

                    	        </p>
    	            	    </div>
                          </div> <!-- /product -->
                        </div>
                	</div>
                </div> <!-- /carousel -->
            </div>

        </div>
    </div> <!-- /container -->

    <!--  ==========  -->
    <!--  = New Products =  -->
    <!--  ==========  -->
    <div class="boxed-area blocks-spacer">
        <div class="container">

            <!--  ==========  -->
            <!--  = Title =  -->
            <!--  ==========  -->
            <div class="row">
                <div class="span12">
                    <div class="main-titles lined">
                    	<h2 class="title"><span class="light">محصولات</span> جدید فروشگاه</h2>
                    </div>
                </div>
            </div> <!-- /title -->

            <div class="row popup-products blocks-spacer">


                <!--  ==========  -->
                <!--  = Product =  -->
                <!--  ==========  -->
            	<div class="span3">
            	    <div class="product">
            	        <div class="product-img">
                            <div class="picture">
                                <img src="images/dummy/products/katooni.jpg" alt="" width="540" height="374" />
                                <div class="img-overlay">
                                    <a href="product" class="btn more btn-primary">توضیحات بیشتر</a>
                                    <a href="#" class="btn buy btn-danger">اضافه به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-titles no-margin">
                            <h4 class="title">$32</h4>
                            <h5 class="no-margin">محصول ویژه 434</h5>
                        </div>
                        <p class="desc">توضیحاتی که در مورد محصول لازم است را در اینجا مینویسید</p>
                        <p class="center-align stars">
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>

                        </p>
            	    </div>
            	</div> <!-- /product -->




            </div>
        </div>
    </div> <!-- /new products -->

    <!--  ==========  -->
    <!--  = Most Popular products =  -->
    <!--  ==========  -->
    <div class="most-popular blocks-spacer">
    	<div class="container">

    	    <!--  ==========  -->
			<!--  = Title =  -->
			<!--  ==========  -->
    	    <div class="row">
    	    	<div class="span12">
    	    	    <div class="main-titles lined">
    	                <h2 class="title"><span class="light">محبوبترین</span>محصولات فروشگاه</h2>
    	            </div>
    	    	</div>
    	    </div> <!-- /title -->

	    	<div class="row popup-products">







		        <!--  ==========  -->
				<!--  = Product =  -->
                <!--  ==========  -->
                @foreach($products as $product)
                <div class="span3">
                    <div class="product">
                        <div class="product-img">
                            <div class="picture">
                                @if($product->photos->count() > 0)
                                    <img src="{{asset('storage/' . $product->photos->first()->path)}}" alt="" width="540" height="412" />
                                @endif
                                <div class="img-overlay">
                                    <a href="products/{{$product->id}}" class="btn more btn-primary">توضیحات بیشتر</a>
                                    <a href="#" class="btn buy btn-danger">اضافه به سبد خرید</a>
                                </div>na. controlleresh
                            </div>
                        </div>
                        <div class="main-titles no-margin">
                            <h4 class="title">$32</h4>
                            <h5 class="no-margin">محصول ویژه 280</h5>
                        </div>
                        <p class="desc">توضیحاتی که در مورد محصول لازم است را در اینجا مینویسید</p>
                        <p class="center-align stars">
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>

                        </p>
                    </div>
                </div> <!-- /product -->
                @endforeach



            </div>
    	</div>
    </div> <!-- /most popular -->

    <!--  ==========  -->
    <!--  = Lastest News =  -->
    <!--  ==========  -->
    <div class="darker-stripe blocks-spacer more-space latest-news with-shadows">
    	<div class="container">

    	    <!--  ==========  -->
			<!--  = Title =  -->
			<!--  ==========  -->
    		<div class="row">
    			<div class="span12">
    			    <div class="main-titles center-align">
    			        <h2 class="title">
    			            <span class="clickable icon-chevron-right" id="tweetsRight"></span> &nbsp;&nbsp;&nbsp;
    			            <span class="light">آخرین</span> خبر ها &nbsp;&nbsp;&nbsp;
    			            <span class="clickable icon-chevron-left" id="tweetsLeft"></span>
			            </h2>
    			    </div>
    			</div>
    		</div> <!-- /title -->

    		<!--  ==========  -->
			<!--  = News content =  -->
			<!--  ==========  -->
    		<div class="row">
    		    <div class="span12">
    		        <div class="carouFredSel" data-nav="tweets" data-autoplay="false">


		                <!--  ==========  -->
						<!--  = Slide =  -->
						<!--  ==========  -->
                        <div class="slide">
                        	<div class="row">
                        		<div class="span6">
                        		    <div class="news-item">
                        		        <div class="published">12 بهمن 1392</div>
                        		        <h6><a href="#">عنوان خبر شما</a></h6>
                        		        <p>در این قسمت میتوانید خبر خود را بنویسید. این یک نوشته ی آزمایشی است که صرفا برای پر کردن این بخش به کار رفته و جنبه ی دیگری ندارد. شما میتوانید این ناحیه را با محتوای دلخواه خود پر کنید.</p>
                        		    </div>
                        		</div>
                        		<div class="span6">
                        		    <div class="news-item">
                        		        <div class="published">15 بهمن 1392</div>
                        		        <h6><a href="#">یک خبر جالب دیگر</a></h6>
                        		        <p>در این قسمت میتوانید خبر خود را بنویسید. این یک نوشته ی آزمایشی است که صرفا برای پر کردن این بخش به کار رفته و جنبه ی دیگری ندارد. شما میتوانید این ناحیه را با محتوای دلخواه خود پر کنید.</p>
                        		    </div>
                        		</div>
                        	</div>
                        </div> <!-- /slide -->


		                <!--  ==========  -->
						<!--  = Slide =  -->
						<!--  ==========  -->
                        <div class="slide">
                        	<div class="row">
                        		<div class="span6">
                        		    <div class="news-item">
                        		        <div class="published">12 بهمن 1392</div>
                        		        <h6><a href="#">عنوان خبر شما</a></h6>
                        		        <p>در این قسمت میتوانید خبر خود را بنویسید. این یک نوشته ی آزمایشی است که صرفا برای پر کردن این بخش به کار رفته و جنبه ی دیگری ندارد. شما میتوانید این ناحیه را با محتوای دلخواه خود پر کنید.</p>
                        		    </div>
                        		</div>
                        		<div class="span6">
                        		    <div class="news-item">
                        		        <div class="published">15 بهمن 1392</div>
                        		        <h6><a href="#">یک خبر جالب دیگر</a></h6>
                        		        <p>در این قسمت میتوانید خبر خود را بنویسید. این یک نوشته ی آزمایشی است که صرفا برای پر کردن این بخش به کار رفته و جنبه ی دیگری ندارد. شما میتوانید این ناحیه را با محتوای دلخواه خود پر کنید.</p>
                        		    </div>
                        		</div>
                        	</div>
                        </div> <!-- /slide -->

                    </div>
    		    </div>
    		</div> <!-- /news content -->
    	</div>
    </div> <!-- /latest news -->

    <!--  ==========  -->
    <!--  = Brands Carousel =  -->
    <!--  ==========  -->
	<div class="container blocks-spacer-last">

		<!--  ==========  -->
		<!--  = Title =  -->
		<!--  ==========  -->
		<div class="row">
		    <div class="span12">
		    	<div class="main-titles lined">
	                <h2 class="title"><span class="light">برند های</span> ما</h2>
                    <div class="arrows">
                        <a href="#" class="icon-chevron-right" id="brandsRight"></a>
                        <a href="#" class="icon-chevron-left" id="brandsLeft"></a>
                    </div>
	            </div>
		    </div>
		</div> <!-- /title -->

		<!--  ==========  -->
		<!--  = Logos =  -->
		<!--  ==========  -->
		<div class="row">
		    <div class="span12">
		    	<div class="brands carouFredSel" data-nav="brands" data-autoplay="true">
                    <img src="images/dummy/brands/brands_01.jpg" alt="" width="203" height="104" />
                    <img src="images/dummy/brands/brands_02.jpg" alt="" width="203" height="104" />
                    <img src="images/dummy/brands/brands_03.jpg" alt="" width="203" height="104" />
                    <img src="images/dummy/brands/brands_04.jpg" alt="" width="203" height="104" />
                    <img src="images/dummy/brands/brands_05.jpg" alt="" width="203" height="104" />
                    <img src="images/dummy/brands/brands_06.jpg" alt="" width="203" height="104" />
                </div>
		    </div>
		</div> <!-- /logos -->
	</div> <!-- /brands carousel -->
