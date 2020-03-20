@extends('layouts.master')
    @section('contents')
	<div class="profile-card">
		<div class="profile-cover">
			<div class="menu-container">
				<a class="list-icon" title="بیشتر" href="javascript:void(0);"></a>
				<ul class="profile-actions" style="display: none;">
					<li><a href="#">دنبال کنید</a></li>
					<li><a href="#">درخواست دوستی</a></li>
					<li><a href="#">لایک</a></li>
				</ul>
			</div>
			<div class="profile-avatar">
				<div class="btns-container">
					<div class="profile-links">
						{{-- <a class="zoom-avatar" href="#"><img src="https://dl.dropboxusercontent.com/s/5liaxzvwbfuqzpo/zoom.png"></a> --}}
						<a class="read-more" href="#"><img src="https://dl.dropboxusercontent.com/s/62dfoo9h44o58lw/more.png"></a>
						<a class="view-map" href="#"><img src="https://dl.dropboxusercontent.com/s/9ofmihok0h64lvn/location.png"></a>
					</div>
				</div>
				<a href="#"><img src="pics/avatar.jpg" alt="Mostafa KF" /></a>
			</div>
			<div class="profile-details">
				<h1 style="color:#fff">نام و نام خانوادگی</h1>
				<h6 style="color:#fff">{{auth()->user()->name}}</h6>
			</div>
		</div>
		<div class="profile-info" style="display: none;">
			<h1>درباره ما</h1>
			<div class="info-area">
				لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
			</div>
			<div class="clear"></div>
		</div>
		<div class="profile-map" style="display: none;">
			<iframe width="100%" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Saveology+New+York&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=40.052282,86.572266&amp;t=h&amp;ie=UTF8&amp;hq=Saveology&amp;hnear=New+York&amp;ll=40.552027,-74.420902&amp;spn=0.357117,0.912844&amp;iwloc=near&amp;output=embed"></iframe>
			<div class="clear"></div>
		</div>
		<div class="profile-content">
			<ul style="list-style:none">
				<li>
					<a href="{{route('favorites')}}">محصولات مورد علاقه</a>
				</li>
				<li>
					<a href="{{route('bought')}}">محصولات خریداری شده</a>
				</li>
				<li>
                    <a href="{{route('factors')}}">فاکتور ها</a>
				</li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<script src="js/jquery-3.1.1.min.js"></script>
    <script  src="js/scripts.js"></script>
    @include('layouts.home')
@endsection
