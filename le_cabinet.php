<?php include("header.php"); ?>

<section> <!-- page de presentation du cabinet -->
		<div id="panneau_le_cabinet">
			<div class="le_cabinet_texte">
				<h1>Le cabinet</h1>
			</div>
		</div> 


<div class="w3-content w3-display-container" style="max-width:800px">
  	<img class="mySlides" src="img/gallerie/batiment_slide.jpg" style="width:100%">
  	<img class="mySlides" src="img/gallerie/box1_slide.jpg" style="width:100%">
  	<img class="mySlides" src="img/gallerie/cabinet1_slide.jpg" style="width:100%">
  	<img class="mySlides" src="img/gallerie/cabinet2_slide.jpg" style="width:100%">
  	<img class="mySlides" src="img/gallerie/cabinet3_slide.jpg" style="width:100%">
  	<img class="mySlides" src="img/gallerie/cabinet4_slide.jpg" style="width:100%">
  	<img class="mySlides" src="img/gallerie/cabinet5_slide.jpg" style="width:100%">
  	<img class="mySlides" src="img/gallerie/cabinet6_slide.jpg" style="width:100%">
  	<img class="mySlides" src="img/gallerie/cabinet7_slide.jpg" style="width:100%">
  	<img class="mySlides" src="img/gallerie/presse_slide.jpg" style="width:100%">
  	<img class="mySlides" src="img/gallerie/machines_slide.jpg" style="width:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:40%;text-align:center;margin:auto;">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)" style="float:left;">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)" style="float:right;">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>



















<!--  
<div class='diapo_auto_rwd'>

	<input name="diapo" id='slide1' type="radio" class='slide_diapo'>

	<input name="diapo" id='slide2' type="radio" class='slide_diapo'>

	<input name="diapo" id='slide3' type="radio" class='slide_diapo'>

	<input name="diapo" id='slide4' type="radio" class='slide_diapo'>

	<input name="diapo" id='slide5' type="radio" class='slide_diapo'>

	<input name="diapo" id='slide6' type="radio" class='slide_diapo'>

	<input name="diapo" id='slide7' type="radio" class='slide_diapo'>

	<input name="diapo" id='slide8' type="radio" class='slide_diapo'>

	<input name="diapo" id='slide9' type="radio" class='slide_diapo'>

	<input name="diapo" id='slide10' type="radio" class='slide_diapo'>

	<input name="diapo" id='slide11' type="radio" class='slide_diapo'>

	<input name="diapo" id='lance-diapo' type="radio" checked>

	<input name="diapo" id='pause1' type="radio" class='pause_diapo'>

	<input name="diapo" id='pause2' type="radio" class='pause_diapo'>

	<input name="diapo" id='pause3' type="radio" class='pause_diapo'>

	<input name="diapo" id='pause4' type="radio" class='pause_diapo'>

	<input name="diapo" id='pause5' type="radio" class='pause_diapo'>

	<input name="diapo" id='pause6' type="radio" class='pause_diapo'>

	<input name="diapo" id='pause7' type="radio" class='pause_diapo'>

	<input name="diapo" id='pause8' type="radio" class='pause_diapo'>

	<input name="diapo" id='pause9' type="radio" class='pause_diapo'>

	<input name="diapo" id='pause10' type="radio" class='pause_diapo'>

	<input name="diapo" id='pause11' type="radio" class='pause_diapo'>

<ul>

	<li><img src="img/gallerie/batiment_slide.jpg" alt></li>
	<li class='image1 slide_diapo'><img src='img/gallerie/batiment_slide.jpg' alt></li>
	<li class='image2 slide_diapo'><img src='img/gallerie/box1_slide.jpg' alt></li>	
	<li class='image3 slide_diapo'><img src='img/gallerie/cabinet1_slide.jpg' alt></li>
	<li class='image4 slide_diapo'><img src='img/gallerie/cabinet2_slide.jpg' alt></li>
	<li class='image5 slide_diapo'><img src='img/gallerie/cabinet3_slide.jpg' alt></li>
	<li class='image6 slide_diapo'><img src='img/gallerie/cabinet4_slide.jpg' alt></li>
	<li class='image7 slide_diapo'><img src='img/gallerie/cabinet5_slide.jpg' alt></li>
	<li class='image8 slide_diapo'><img src='img/gallerie/cabinet6_slide.jpg' alt></li>
	<li class='image9 slide_diapo'><img src='img/gallerie/cabinet7_slide.jpg' alt></li>
	<li class='image10 slide_diapo'><img src='img/gallerie/presse_slide.jpg' alt></li>
	<li class='image11 slide_diapo'><img src='img/gallerie/machines_slide.jpg' alt></li>


</ul>
	<div class='lancement_arret'>
			<label class='lance_diapo' for='lance-diapo'></label>
			<label class='pause_diapo image1' for='pause1'></label>
			<label class='pause_diapo image2' for='pause2'></label>
			<label class='pause_diapo image3' for='pause3'></label>
			<label class='pause_diapo image4' for='pause4'></label>
			<label class='pause_diapo image5' for='pause5'></label>
			<label class='pause_diapo image6' for='pause6'></label>
			<label class='pause_diapo image7' for='pause7'></label>
			<label class='pause_diapo image8' for='pause8'></label>
			<label class='pause_diapo image9' for='pause9'></label>
			<label class='pause_diapo image10' for='pause10'></label>
			<label class='pause_diapo image11' for='pause11'></label>
	</div>

	<div class='precedent'>
		<label class='image1' for='slide1'></label>
		<label class='image2' for='slide2'></label>
		<label class='image3' for='slide3'></label>
		<label class='image4' for='slide4'></label>
		<label class='image5' for='slide5'></label>
		<label class='image6' for='slide6'></label>
		<label class='image7' for='slide7'></label>
		<label class='image8' for='slide8'></label>
		<label class='image9' for='slide9'></label>
		<label class='image10' for='slide10'></label>
		<label class='image11' for='slide11'></label>
	</div>

	<div class='suivant'>
		<label class='image1' for='slide1'></label>
		<label class='image2' for='slide2'></label>
		<label class='image3' for='slide3'></label>
		<label class='image4' for='slide4'></label>
		<label class='image5' for='slide5'></label>
		<label class='image6' for='slide6'></label>
		<label class='image7' for='slide7'></label>
		<label class='image8' for='slide8'></label>
		<label class='image9' for='slide9'></label>
		<label class='image10' for='slide10'></label>
		<label class='image11' for='slide11'></label>
	</div>		

</div>
?>

-->















	<!--	<div id="gallerie">

				<div class="photo"><img src=img/gallerie/batiment_mini.jpg class="gallerie" alt="batiment_exterieur"></div>
				
				<div class="photo"><img src=img/gallerie/salle_sport_mini.jpg alt="salle_sport"></div>

				<div class="photo"><img src=img/gallerie/box1_mini.jpg alt="box1"></div>
				
				<div class="photo"><img src=img/gallerie/salle_sport_mini.jpg alt="salle_sport"></div>
				
				<div class="photo"><img src=img/gallerie/salle_sport_mini.jpg alt="salle_sport"></div>

				<div class="photo"><img src=img/gallerie/salle_sport_mini.jpg alt="salle_sport"></div>

		</div>


	-->
</section>

</body>


<?php include("footer.php"); ?>

</html> 