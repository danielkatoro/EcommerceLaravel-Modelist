@extends('layouts/master')

@section('content')
	<div class="hero-wrap hero-bread" style="background-image:url(images/xbg_6.jpg.pagespeed.ic.FoMmN96gAy.jpg)">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-0 bread">Checkout</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checkout</span>
					</p>
				</div>
			</div>
		</div>
	</div>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-8 ftco-animate">
					<form action="#" class="billing-form bg-light p-3 p-md-5">
						<h3 class="mb-4 billing-heading">Billing Details</h3>
						<div class="row align-items-end">
							<div class="col-md-6">
								<div class="form-group">
									<label for="firstname">Firt Name</label>
									<input type="text" class="form-control" placeholder="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="lastname">Last Name</label>
									<input type="text" class="form-control" placeholder="">
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="country">State / Country</label>
									<div class="select-wrap">
										<div class="icon"><span class="ion-ios-arrow-down"></span></div>
										<select name="" id="" class="form-control">
											<option value="">France</option>
											<option value="">Italy</option>
											<option value="">Philippines</option>
											<option value="">South Korea</option>
											<option value="">Hongkong</option>
											<option value="">Japan</option>
										</select>
									</div>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="streetaddress">Street Address</label>
									<input type="text" class="form-control" placeholder="House number and street name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control"
										placeholder="Appartment, suite, unit etc: (optional)">
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="towncity">Town / City</label>
									<input type="text" class="form-control" placeholder="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="postcodezip">Postcode / ZIP *</label>
									<input type="text" class="form-control" placeholder="">
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="phone">Phone</label>
									<input type="text" class="form-control" placeholder="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="emailaddress">Email Address</label>
									<input type="text" class="form-control" placeholder="">
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-md-12">
								<div class="form-group mt-4">
									<div class="radio">
										<label class="mr-3"><input type="radio" name="optradio"> Create an Account?
										</label>
										<label><input type="radio" name="optradio"> Ship to different address</label>
									</div>
								</div>
							</div>
						</div>
					</form>
					<div class="row mt-5 pt-3 d-flex">
						<div class="col-md-6 d-flex">
							<div class="cart-detail cart-total bg-light p-3 p-md-4">
								<h3 class="billing-heading mb-4">Cart Total</h3>
								<p class="d-flex">
									<span>Subtotal</span>
									<span>$20.60</span>
								</p>
								<p class="d-flex">
									<span>Delivery</span>
									<span>$0.00</span>
								</p>
								<p class="d-flex">
									<span>Discount</span>
									<span>$3.00</span>
								</p>
								<hr>
								<p class="d-flex total-price">
									<span>Total</span>
									<span>$17.60</span>
								</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="cart-detail bg-light p-3 p-md-4">
								<h3 class="billing-heading mb-4">Payment Method</h3>
								<div class="form-group">
									<div class="col-md-12">
										<div class="radio">
											<label><input type="radio" name="optradio" class="mr-2"> Direct Bank
												Tranfer</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<div class="radio">
											<label><input type="radio" name="optradio" class="mr-2"> Check
												Payment</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<div class="radio">
											<label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<div class="checkbox">
											<label><input type="checkbox" value="" class="mr-2"> I have read and accept
												the terms and conditions</label>
										</div>
									</div>
								</div>
								<p><a href="#" class="btn btn-primary py-3 px-4">Place an order</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h1 class="big">Products</h1>
					<h2 class="mb-4">Related Products</h2>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="product">
						<a href="#" class="img-prod"><img class="img-fluid"
								src="images/xproduct-1.jpg.pagespeed.ic.Ydimmp9gdt.jpg" alt="Colorlib Template"></a>
						<div class="text py-3 px-3">
							<h3><a href="#">Young Woman Wearing Dress</a></h3>
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span>$120.00</span></p>
								</div>
								<div class="rating">
									<p class="text-right">
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
									</p>
								</div>
							</div>
							<hr>
							<p class="bottom-area d-flex">
								<a href="#" class="add-to-cart"><span>Add to cart <i
											class="ion-ios-add ml-1"></i></span></a>
								<a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="product">
						<a href="#" class="img-prod"><img class="img-fluid"
								src="images/xproduct-2.jpg.pagespeed.ic.i2dHUSi5Gk.jpg" alt="Colorlib Template"></a>
						<div class="text py-3 px-3">
							<h3><a href="#">Young Woman Wearing Dress</a></h3>
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span>$120.00</span></p>
								</div>
								<div class="rating">
									<p class="text-right">
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
									</p>
								</div>
							</div>
							<hr>
							<p class="bottom-area d-flex">
								<a href="#" class="add-to-cart"><span>Add to cart <i
											class="ion-ios-add ml-1"></i></span></a>
								<a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="product">
						<a href="#" class="img-prod"><img class="img-fluid"
								src="images/xproduct-3.jpg.pagespeed.ic.6IQFkBrzlj.jpg" alt="Colorlib Template"></a>
						<div class="text py-3 px-3">
							<h3><a href="#">Young Woman Wearing Dress</a></h3>
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span>$120.00</span></p>
								</div>
								<div class="rating">
									<p class="text-right">
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
									</p>
								</div>
							</div>
							<hr>
							<p class="bottom-area d-flex">
								<a href="#" class="add-to-cart"><span>Add to cart <i
											class="ion-ios-add ml-1"></i></span></a>
								<a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="product">
						<a href="#" class="img-prod"><img class="img-fluid"
								src="images/xproduct-4.jpg.pagespeed.ic.y08R7oo18U.jpg" alt="Colorlib Template"></a>
						<div class="text py-3 px-3">
							<h3><a href="#">Young Woman Wearing Dress</a></h3>
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span>$120.00</span></p>
								</div>
								<div class="rating">
									<p class="text-right">
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
									</p>
								</div>
							</div>
							<hr>
							<p class="bottom-area d-flex">
								<a href="#" class="add-to-cart"><span>Add to cart <i
											class="ion-ios-add ml-1"></i></span></a>
								<a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section-parallax">
		<div class="parallax-img d-flex align-items-center">
			<div class="container">
				<div class="row d-flex justify-content-center py-5">
					<div class="col-md-7 text-center heading-section ftco-animate">
						<h1 class="big">Subscribe</h1>
						<h2>Subcribe to our Newsletter</h2>
						<div class="row d-flex justify-content-center mt-5">
							<div class="col-md-8">
								<form action="#" class="subscribe-form">
									<div class="form-group d-flex">
										<input type="text" class="form-control" placeholder="Enter email address">
										<input type="submit" value="Subscribe" class="submit px-3">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endsection