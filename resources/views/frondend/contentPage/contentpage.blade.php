@extends('frondend.contact')
@section('title', 'INUPOI')
@section('content')
<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form action="{{ Route('Inupoi.sendmail') }}" method="post">
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Send Us A Message
						</h4>
						<div class="bor8 m-b-20 how-pos4-parent">
							@if (Auth::guard('web')->check())
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="email" value="{{Auth::guard('web')->user()->email}}">
							<img class="how-pos4 pointer-none" src="{{asset('cozastore/images/icons/icon-email.png')}}" alt="ICON">
							@else
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="email">
							<img class="how-pos4 pointer-none" src="{{asset('cozastore/images/icons/icon-email.png')}}" alt="ICON">
							@endif
						</div>
						<div class="bor8 m-b-30">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="title" placeholder="How Can We Help?"></textarea>
						</div>
						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" type="submit">
							Send Massage
						</button>
						{{ csrf_field() }}
					</form>
				</div>
				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Address
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
								Inupoi Store Center , Ruko Suhat Indah no.10, Malang
							</p>
						</div>
					</div>
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Lets Talk
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								+628123456789
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Sale Support
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								InupiCorp@gmail.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection
