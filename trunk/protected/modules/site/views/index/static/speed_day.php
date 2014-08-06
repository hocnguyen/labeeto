<section id="wrap-slide-content">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<?php for($i=0;$i<10;$i++){
				$this->renderPartial('/index/static/aSlider',array(
					'link_img' => $this->baseUrl . "/images/girl/girl_$i.jpg",
					'title' => 'Girl Number '.$i,
				));
			} ?> 
		</div>
		<div class="pagination"></div>
	</div>
</section>

<section class="container" id="upgrade-membership">
	<div class="container">
		<header class="dotted-divider">
			<h2>3 Reasons to Start Membership Today</h2>
		</header>
		<ul>
			<li class="find-people">
				<div class="icon icon-quote-ring"></div>
				<h3>
				Find People Like You
				</h3>
				<p>
				Use advanced search options, find out who else is subscribed,
				and see who's been checking you out.
				</p>
			</li>
			<li class="meet-up">
				<div class="icon icon-email"></div>
				<h3>
				Make Plans to Meet Up
				</h3>
				<p>
				Read all of your messages, contact the people who interest you
				and make plans to get together.
				</p>
			</li>
			<li class="get-offline">
				<div class="icon icon-badge"></div>
				<h3>
				Get Offline, Guaranteed
				</h3>
				<p>
				If you don't make a connection that leads to a real,
				honest-to-goodness date, we'll refund the entire cost of your
				subscription.
				</p>
			</li>
		</ul>
		<p class="action">
			<a class="dc_awb_medium dc_awb_teal dc_flat startMember" href="#">Start Membership</a>
		</p>
	</div>
</section>