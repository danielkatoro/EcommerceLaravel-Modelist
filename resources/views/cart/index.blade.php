@extends('layouts/master')

@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-0 bread">My Cart</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
				</div>
			</div>
		</div>
	</div>
	<section class="ftco-section ftco-cart">
		<div class="container">
			<div class="row">
				<div class="col-md-12 ftco-animate">
					<div class="cart-list">
						<table class="table">
							<thead class="thead-primary">
								<tr class="text-center">
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>Product</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
                                @if(Cart::count() > 0)
                                @foreach(Cart::content() as $product)
								<tr class="text-center">
									<!-- <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a> -->
                                    <td  class="product-remove">
                                    <form action="{{route('cart.delete',$product->rowId)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="col-2" type="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="ion-ios-close">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></button>
                                    </form>
                                    </td>
									<td class="image-prod">
										<div class="img"
											style="background-image:url(images/xproduct-3.jpg.pagespeed.ic.6IQFkBrzlj.jpg)">
										</div>
									</td>
									<td class="product-name">
										<h3>{{$product->model->title}}</h3>
										<p>{{$product->model->subtitle}}</p>
									</td>
									<td class="price">{{$product->model->getFormatPrice()}}</td>
									<td class="quantity">
										<div class="input-group mb-3">
											<input type="text" name="quantity"
												class="quantity form-control input-number" value="1" min="1" max="100">
										</div>
									</td>
									<td class="total">$4.90</td>
								</tr>
								@endforeach
                                @else
                                    <p>Votre panier est vider <a href="{{route('products.index')}}">Boutique</a></p>
                                @endif
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row justify-content-end">
				<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
					<div class="cart-total mb-3">
						<h3>Totals du panier</h3>
						<p class="d-flex">
							<span>Sous total</span>
							<span>{{getPrice(Cart::subtotal())}}</span>
						</p>
						<p class="d-flex">
							<span>Taxe TVA (16%)</span>
							<span>{{getPrice(Cart::tax())}}</span>
						</p>
						<p class="d-flex">
							<span>Reductions</span>
							<span>$0,00</span>
						</p>
						<hr>
						<p class="d-flex total-price">
							<span>Total</span>
							<span>{{getPrice(Cart::total())}}</span>
						</p>
					</div>
					<p class="text-center"><a href="{{route('checkout.index')}}" class="btn btn-primary py-3 px-4">Passer à la caisset</a></p>
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