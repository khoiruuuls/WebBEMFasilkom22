<!-- ======= Header ======= -->
<header id="header" class="header fixed-top border-0">
	<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

		<a href="{{ route('home') }}" class="logo d-flex align-items-center">
			<img src="{{ url('frontend/assets/img/navbar_22.png') }}" alt="">
			<!-- <span>BEM Fasilkom Unsika</span> -->
		</a>

		<nav id="navbar" class="navbar">
			<ul class="menu">
				<li class="dropdown"><a href="#"><i class="bi bi-people mx-2" style="font-size: 1rem"></i><span> Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
					<ul>
						{{-- <li><a href="{{ route('gd') }}">Grand Design</a>
				</li> --}}
				<li><a href="{{ route('visimisi') }}">Visi Misi</a></li>
				<li><a href="{{ route('struktur') }}">Struktur Organisasi</a></li>
				<li><a href="{{ route('filosofi') }}">Logo</a></li>
			</ul>
			</li>
			<li class="dropdown"><a href="#"><i class="bi bi-person-badge mx-2" style="font-size: 1rem"></i><span> Profil</span> <i class="bi bi-chevron-down"></i></a>
				<ul>
					<li><a href="{{ route('bph') }}">Badan Pengurus Harian</a></li>
					<li class="dropdown"><a href="#"><span>PSDM</span> <i class="bi bi-chevron-right"></i></a>
						<ul>
							<li><a href="{{ route('kaderisasi') }}">Kaderisasi</a></li>
							<li><a href="{{ route('pp') }}">PP</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#"><span>Minat & Bakat</span> <i class="bi bi-chevron-right"></i></a>
						<ul>
							<li><a href="{{ route('keilmuan') }}">Keilmuan</a></li>
							<li><a href="{{ route('olahraga') }}">Olahraga</a></li>
							<li><a href="{{ route('senbud') }}">Seni Budaya</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#"><span>Sosial Politik</span> <i class="bi bi-chevron-right"></i></a>
						<ul>
							<li><a href="{{ route('adkesma') }}">Adkesma</a></li>
							<li><a href="{{ route('kastrat') }}">Kastrat</a></li>
							<li><a href="{{ route('pengmas') }}">Pengmas</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#"><span>Kominfo</span> <i class="bi bi-chevron-right"></i></a>
						<ul>
							<li><a href="{{ route('bismit') }}">Bismit</a></li>
							<li><a href="{{ route('media') }}">Media</a></li>
							<li><a href="{{ route('pti') }}">PTI</a></li>
							<li><a href="{{ route('humas') }}">Humas</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a class="nav-link" href="{{ route('news') }}"><i class="bi bi-newspaper mx-2" style="font-size: 1rem"></i><span>Fasilkom News</span><i class=" bi bi-chevron-down" style="visibility: hidden"></i></a></li>
			<li><a class="nav-link" href="{{ route('kontak') }}"><i class="bi bi-envelope-open mx-2" style="font-size: 1rem"></i><span>Kontak</span><i class=" bi bi-chevron-down" style="visibility: hidden"></i></a></li>
			<li><a class="nav-link" href="{{ route('aplikasi') }}"><i class="bi bi-app-indicator mx-2" style="font-size: 1rem"></i><span>Aplikasi Publik</span><i class=" bi bi-chevron-down" style="visibility: hidden"></i></a></li>
			{{-- <li class="dropdown"><a href="#"><i class="bi bi-app-indicator mx-2" style="font-size: 1rem"></i><span>Aplikasi Publik <span class="badge bg-primary fw-light mx-1" style="background-color: #eeb34c !important;">New</span></span> <i class=" bi bi-chevron-down"></i></a>
					<ul>
						<li class="dropdown"><a href="#"><span>Bismit</span> <i class="bi bi-chevron-right"></i></a>
							<ul>
								<li><a href="{{ route('merchandise') }}">Merchandise</a></li>
			</ul>
			</li>
			<li class="dropdown"><a href="#"><span>Media</span> <i class="bi bi-chevron-right"></i></a>
				<ul>
					<li><a href="{{ route('mading') }}">Mading Online</a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#"><span>PP</span> <i class="bi bi-chevron-right"></i></a>
				<ul>
					<li><a href="{{ route('karya-tulis') }}">Karya Tulis Keputrian</a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#"><span>Olahraga</span> <i class="bi bi-chevron-right"></i></a>
				<ul>
					<li><a href="{{ route('fasilkom-cup') }}">Fasilkom Cup</a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#"><span>Pengmas</span> <i class="bi bi-chevron-right"></i></a>
				<ul>
					<li><a href="{{ route('foto-kegiatan') }}">Foto Kegiatan</a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#"><span>Kastrat</span> <i class="bi bi-chevron-right"></i></a>
				<ul>
					<li><a href="{{ route('info-kajian') }}">Info Kajian</a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#"><span>Adkesma</span> <i class="bi bi-chevron-right"></i></a>
				<ul>
					<li><a href="{{ route('apr') }}">APR</a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#"><span>Keilmuan</span> <i class="bi bi-chevron-right"></i></a>
				<ul>
					<li><a href="{{ route('pkm-centre') }}">PKM Centre</a></li>
					<li><a href="{{ route('elearning') }}">E-Learning Fasilkom</a></li>
				</ul>
			</li>
			<li><a href="{{ route('pinjam') }}">Pinjam BEM</a></li>
			<li><a href="{{ route('lpj') }}">LPJ Online</a></li>
			<li><a href="{{ route('game') }}">Game</a></li>
			</ul>
			</li> --}}
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav>
		<!-- End Navbar -->
	</div>
</header>
<!-- End Header -->