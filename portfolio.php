<?php include 'includements/header.html'; ?>

<section class="portfoliosectionOne container-fluid">
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<p class="projectTitle"> Portfolio projecten </p>
		</div>
	</div>
	<div class="row projectsRow">
		<div class="col-md-10 offset-md-1">
			<div class="row">
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="projectItem">
								<img class="projectImage" src="img/dmFront.png" alt="DM front image"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="projectDescription">
								Afstuderen
								
								<i class="fas fa-chevron-down projectChevronDown" id="chevronDown1" onclick="toggleProject(1, 'open')"> </i>
								<i class="fas fa-chevron-up projectChevronUp"  id="chevronUp1" onclick="toggleProject(1, 'close')" style="display:none;"> </i>
							</div>
							<div  id="details1" class="projectDetails">
								Voor mijn afstuderen aan de opleiding communication and multimedia design ben ik bezig geweest met de ontwikkeling van een digitaal, interactief meetinstrument.
								Het meetinstrument bevat een voorkant voor de gebruiker waarin een enquête kan worden ingevuld. De achterkant bevat een administratief systeem voor het bijhouden van enquêtes en data.
								Deze webaplicatie is gebouwd met het CakePHP framework, Javascript en Jquery, CSS en Bootstrap en HTML.
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="projectItem">
								<img class="projectImage" src="img/cmsFront.png" alt="CMS front image"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="projectDescription">
								CMS
								
								<i class="fas fa-chevron-down projectChevronDown" id="chevronDown2" onclick="toggleProject(2, 'open')"> </i>
								<i class="fas fa-chevron-up projectChevronUp"  id="chevronUp2" onclick="toggleProject(2, 'close')" style="display:none;"> </i>
							</div>
							<div  id="details2" class="projectDetails">
								In mijn vrije tijd ben ik bezig met de ontwikkeling van mijn eigen CMS. Dit CMS wil inzetten om in de toekomst eenvoudig eigen websites te kunnen beheren.
								Het CMS is nog in een vrij vroege staat en is nog niet bruikbaar. De ontwikkeling hiervan leert mij wel steeds meer nieuwe technieken, vooral op het gebied van Javascript
								aangezien het een one-page-application is.
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="projectItem">
								<img class="projectImage" src="img/iwpFront.png" alt="CMS front image"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="projectDescription">
								IWP-project
								
								<i class="fas fa-chevron-down projectChevronDown" id="chevronDown3" onclick="toggleProject(3, 'open')"> </i>
								<i class="fas fa-chevron-up projectChevronUp"  id="chevronUp3" onclick="toggleProject(3, 'close')" style="display:none;"> </i>
							</div>
							<div  id="details3" class="projectDetails">
								Dit schooljaar ben ik met een groep van studenten bezig geweest met de ontwikkeling van een interface voor een systeem dat schade op basis van aardbevingen overzichtelijk
								kan weergeven. Dit project was uiteindelijk vooral ontwerpen omdat er geen tijd over was voor de realisatie. Maar het was zeer interessant om te zien hoe de sensoren in
								het echt in werking trenden en hoe wij onze interface daarmee konden vullen.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include 'includements/footer.html'; ?>

<script>

	function toggleProject(number, action) {
		let tab = document.getElementById('details' + number);
		let chevronUp = document.getElementById('chevronUp' + number);
		let chevronDown = document.getElementById('chevronDown' + number);
		
		if (action == 'open') {
			tab.style.display = 'inherit';
			chevronUp.style.display = 'inherit';
			chevronDown.style.display = 'none';
		} else if (action == 'close') {
			tab.style.display = 'none';
			chevronUp.style.display = 'none';
			chevronDown.style.display = 'inherit';
		}
	}

</script>