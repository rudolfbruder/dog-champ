@extends('layouts.app')
@section('title')
DogChamp - Domovska stranka
@endsection
@section('content')
<div class="row mt-5">
	<div class="col-lg-12">
		<div class="card-deck">
			<div class="card shadow animated fadeInLeft" id="Card1">
				<img class="card-img-top" src="{{url('/img/home/card4.jpg')}}" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Kompletný prehľad vašich výsledkov</h5>
					<div class="sub-menu" id="dropDownMenu">
						<ul>
							<li>Prehľad všetkých vašich výsledkov</li>
							<li>Vytvorený sumár</li>
							<li>Pridávanie výsledkov po sútaži</li>
							<li>Osobné štatistiky</li>
							<li>Historický prehľad</li>
						</ul>
					</div>
				</div>
				<div class="card-footer">
					<small class="text-muted">Kliknite sem pre viac info</small>
				</div>
			</div>
			<div class="card shadow animated fadeInDown" id="Card2">
				<img class="card-img-top" src="{{url('/img/home/card3.jpg')}}" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Úspechy vášho šampióna online</h5>
					<div class="sub-menu" id="dropDownMenu">
						<ul>
							<li>Vždy dostupné nech ste kdekoľvek</li>
							<li>Všetko pekne na jednom mieste</li>
							<li>Zdieľanie s vašimi známimi</li>
							<li>Dáta sú bezpečne uchované</li>
							<li>Možnosť zobrazenia aj v smartfóne</li>
						</ul>
					</div>
				</div>
				<div class="card-footer">
					<small class="text-muted">Kliknite sem pre viac info</small>
				</div>
			</div>
			<div class="card shadow animated fadeInRight" id="Card3">
				<img class="card-img-top" src="{{url('/img/home/card1.jpg')}}" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Galéria ostatných šampiónov</h5>
					<div class="sub-menu" id="dropDownMenu">
						<ul>
							<li>Prezrite si úspechy vašich priateľov</li>
							<li>Prezrite si psov vasich priatelov</li>
							<li>Rebricek vsetkych sampionov</li>
							<li>Foto galeria ostatnych psov</li>
							<li>Ziskajte inspiraciu</li>
						</ul>
					</div>
				</div>
				<div class="card-footer">
					<small class="text-muted">Kliknite sem pre viac info</small>
				</div>
			</div>
		</div>
	</div>
</div>
<hr class="mt-5">
<div class="row mt-5">
	<div class="col-lg-7">
		<h2 class="featurette-heading">Zaregistrujte si svojho psíka! <span class="text-muted">Bude to super.</span>
		</h2>
		<p class="red">Založte si účet na DogChamp a zadajte profil vášho psíka aj s fotkami a vašimi výhrami. Zmerajte
			si svoj úspech, body za sezónu a všetko si prejdite v kompletnom dashboarde.</p>
	</div>
	<div class="col-lg-5">
		<img src="{{url('/img/home/RowPicture.jpeg')}}" class="rounded img-fluid" alt="">
	</div>
</div>
<hr>
<div class="row mt-5 mb-5">
	<div class="col-lg-5">
		<img src="{{url('/img/home/CarouselBckg2.jpeg')}}" class="rounded img-fluid" alt="">
	</div>
	<div class="col-lg-7">
		<h2 class="featurette-heading">Máte viacej psov? <span class="text-muted">Nie je problém!</span></h2>
		<p>Na DogChamp si viete zaregistrovať niekoľko psov naraz, každý pes bude, ako samostatná jednotka a bude mať
			vlastný prehľad. Taktiež je tu možnosť sumáru.</p>
	</div>
</div>
@endsection