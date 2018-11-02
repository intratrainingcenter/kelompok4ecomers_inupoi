
<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
				
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
			@foreach ($cart as $carts)
					
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
<<<<<<< HEAD
							<img src="{{Storage::url($carts->gambar)}}" alt="IMG">
=======
							<img src="{{asset('cozastore/images/item-cart-01.jpg')}}" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								anjing
							</a>

							<span class="header-cart-item-info">
								1 x $19.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="{{asset('cozastore/images/item-cart-02.jpg')}}" alt="IMG">
>>>>>>> login
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								{{$carts->nama_produk}}
							</a>

							<span class="header-cart-item-info">
									{{"$.".number_format($carts->harga)}}
							</span>
						</div>
					</li>

					@endforeach
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: {{"$. ".number_format($purchases)}}
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="{{Route('Inupoi.Transaksi')}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>