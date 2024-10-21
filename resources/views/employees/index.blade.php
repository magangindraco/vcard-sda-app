<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="vendor/bootstrap-5.3.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome-free-6.5.1-web/css/all.min.css">
	<link rel="stylesheet" href="fonts/HelveticaNeue/HelveticaNeue.css">
	<style>
		* {
			outline: solid 1px green;
			outline: solid 1px transparent;
		}

		html {
			height: 100%;
		}

		body {
			min-height: 100%;
		}

		body {
			display: grid;
			grid-template-columns: 1fr;
			grid-template-rows: auto 1fr auto;
			text-align: center;
			background: #d1d2d2;
		}

		.container-fluid {
			padding: 0;
		}

		@media (min-width: 768px) {
			.container-fluid {
				max-width: 480px;
			}
		}

		.fs-sm {
			font-size: small !important;
		}

		.fs-lg {
			font-size: large !important;
		}

		.bg-primary {
			background: #842c2d !important;
		}

		a {
			color: inherit;
		}

		a:hover,
		a.active,
		a:focus {
			color: #842c2d;
		}
	</style>
</head>

<body>

	<header>
		<div class="container-fluid d-flex flex-column row-gap-4 pt-5 bg-primary text-white">
			<div>
				<img src="img/logo.png" class="w-50 h-auto" alt="SDA">
			</div>
			<div>
				<div class="img-wrapper ratio ratio-1x1 bg-light rounded-circle mx-auto overflow-hidden position-relative"
					style="width: 45%;">
					<img src="img/user.png" alt="">
				</div>
			</div>
			<div>
				<h5 class="text-capitalize fs-3">agus sudiyento</h5>
				<p class="lh-sm">
					PT. SDA GLOBAL<br>Managing Director
				</p>
			</div>
			<div class="btn-group w-100">
				<a href="https://beta.tokosda.com/" target="_blank"
					class="btn btn-outline-light btn-lg rounded-0 border-bottom-0 border-start-0 lh-sm py-3">
					<i class="fas fa-globe-asia fa-lg"></i>
					<br>
					<small class="fs-sm">WEBSITE</small>
				</a>
				<a href="" target="_blank"
					class="btn btn-outline-light btn-lg rounded-0 border-bottom-0 border-end-0 lh-sm py-3">
					<i class="fas fa-user-circle fa-lg"></i>
					<br>
					<small class="fs-sm">SAVE CONTACT</small>
				</a>
			</div>
		</div>
	</header>

	<main class="h-100">
		<div class="container-fluid bg-white h-100 p-5">
			<ul class="list-unstyled m-0 text-start d-grid row-gap-3">
				<li>
					<a href="#" target="_blank" class="text-decoration-none d-flex align-baseline column-gap-3">
						<div class="mt-2 opacity-50">
							<i class="fas fa-phone fa-lg"></i>
						</div>
						<div>
							<span class="fs-lg">+62 31 546 8800</span>
							<br><small class="fs-sm opacity-50">Office</small>
						</div>
					</a>
				</li>
				<li>
					<a href="#" target="_blank" class="text-decoration-none d-flex align-baseline column-gap-3">
						<div class="mt-2 opacity-50">
							<i class="fas fa-mobile fa-lg"></i>
						</div>
						<div>
							<span class="fs-lg">+62 812 9797 1221</span>
							<br><small class="fs-sm opacity-50">Mobile</small>
						</div>
					</a>
				</li>
				<li>
					<a href="#" target="_blank" class="text-decoration-none d-flex align-baseline column-gap-3">
						<div class="mt-2 opacity-50">
							<i class="fas fa-envelope fa-lg"></i>
						</div>
						<div>
							<span class="fs-lg">agus@sdaglobal.co.id</span>
							<br><small class="fs-sm opacity-50">Email</small>
						</div>
					</a>
				</li>
				<li>
					<a href="#" target="_blank" class="text-decoration-none d-flex align-baseline column-gap-3">
						<div class="mt-2 opacity-50">
							<i class="fas fa-location fa-lg"></i>
						</div>
						<div>
							<span class="fs-lg">
								Komp. Margomulyo Indah I Blok A No. 7-8 Jl. Margomulyo Indah I, Balongsari - Tandes, Surabaya
								60186, Jawa Timur - Indonesia
							</span>
							<br><small class="fs-sm opacity-50">Show on map</small>
						</div>
					</a>
				</li>
				<li>
					<a href="#" target="_blank" class="text-decoration-none d-flex align-baseline column-gap-3">
						<div class="mt-2 opacity-50">
							<i class="fas fa-globe-asia fa-lg"></i>
						</div>
						<div>
							<span class="fs-lg">www.sdaglobal.co.id</span>
							<br><small class="fs-sm opacity-50">Website</small>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</main>

	<footer>
		<div class="container-fluid bg-black text-white py-3">
			&copy;
			<script>document.write(new Date().getFullYear())</script>,
			SDA All Rights Reserved.
		</div>
	</footer>

</body>

</html>