<!DOCTYPE html>

<html>

<head>
  <title>Utvalgte filmer</title>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/referanseside.css">


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,550, 600" rel="stylesheet">



    <script src="js/change.js"></script>
    <script src="js/toggle.js"></script>
    <script src="js/toggle_visibility.js"></script>

    <script document.getElementByVideo('quality-setting').innerHTML="High Quality";></script>
    <meta name="viewport" content="width=device-width">

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
</head>



<body>








  <!-- ____________________________________________ Header I Ole Hallvard ___________________________________________   -->






<?php include("includes/Toppmeny.php"); ?>






<!-- ____________________________________________ Toppbilde ___________________________________________   -->




 



<div class="toppbilde-wrapper">


	<div class="toppbilde"></div>
  <div id="Millumfilmer" class="toppbilde"></div>
 	 

 	 <div class="vektor-container">

      		<svg x="0" y="0" width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none"  fill="white" > 
        	<path d="

     
       		M 
      		 0,0,
     		 27,13.5,
       		 100, 2
 
       		L 
       		100, 20 
       		0,20
      

      		  Z" /> 
      		</svg>
   </div>


</div>









  <!-- ____________________________________________ Introtekst + knapper ___________________________________________   -->











<div class="introtekst">

 		<h1>Utvalgte filmer</h1>

		<h2>Filmene kan lastes ned som ulike filstø233rrelser og språk.</h2>

</div>







		<div class="valg">
		
        <a class="knapp-filformater" href="omfilformater.php" target="_blank">Om filformater</a>
           		
       <div class="knapp-filformater" onclick="toggle_visibility('foo');toggle(this);"><span>Språk</span></div>
          
    </div>




    <div id="foo">


          <div class="sprakvalg">
            <a id="hoverfarge" class="knapp-filformater fargeendring  href="#">Norsk</a>
            <a id="hoverfarge" class="knapp-filformater fargeendring" href="#">Svenska</a>
            <a id="hoverfarge" class="knapp-filformater fargeendring" href="#">English</a>
          </div>


     </div>


  </div>











  <!-- ____________________________________________ Filmer ___________________________________________   -->






<div class="film-container">



 <!-- __________ Film 1 ___________  -->




		<div class="video-responsive">
    		<iframe src="https://player.vimeo.com/video/273356449" frameborder="0" > </iframe>
		</div>
    



		<div class="filminfo">

			<h3>Millum Procurement</h3>
			<h4>Slik får dere de ansatte til å følge leverandøravtalene<br></h4>



  <!-- __________ Nedlastning ___________  -->



			<div class="wrap">
    			<div class="cell storrelse"><h5>Liten</h5></div>
    			<div class="cell aspekt"><h6>Kvadratisk</h6></div>
    			<div class="cell aspektm"><h6>Kvad.</h6></div>
    			<div class="cell mb"><h6>29 MB</h6></div>
    			<div class="cell knapper"><a class="knapp-filformater2" href="Kundeside_kode/download/Millum_Procurement_270418_.mp4" download> Last ned</a></div>

				</div>

				<div class="wrap">
    			<div class="cell storrelse"><h5>Medium</h5></div>
    			<div class="cell aspekt"><h6>Kvadratisk</h6></div>
    			<div class="cell aspektm"><h6>Kvad.</h6></div>
    			<div class="cell mb"><h6>59 MB</h6></div>
          <div class="cell knapper"><a class="knapp-filformater2" href="Kundeside_kode/download/Millum_Procurement_270418_.mp4" download> Last ned</a></div>
				</div>

				
		</div>













<!-- __________ Film 2 ___________  -->



		<div class="video-responsive">
    		<iframe src="https://player.vimeo.com/video/275492462" frameborder="0" allowfullscreen></iframe>
		</div>




		<div class="filminfo">

			<div class="desktoptekst"><h3>Millum Trade </div>
      <div class="mobiltekst"><h3>Millum Trade <font color="#00a0ff"><b>(Skisse)</h3></b></div>

			<h4>Slik gjør dere salg til kunder uten innkjøpsportal mer effektive og lønnsomme</h4>
    







 <!-- __________ Nedlastning ___________  -->



			<div class="wrap">
    			<div class="cell storrelse"><h5>Ferdig</h5></div>
    			<div class="cell aspekt"><h6>02.06.18</h6></div>
    			<div class="cell aspektm"><h6>02.06</h6></div>
    			<div class="cell mb"><h6>29 MB</h6></div>
    			<div class="cell knapper"><a class="knapp-filformater2" href="Kundeside_kode/download/Millum_Trade_Utkast1_310518.mp4" download> Last ned</a></div>
				</div>

				
				
		</div>














<!-- __________ Film 3 ___________  -->




		<div class="video-responsive">
    		<iframe src="https://player.vimeo.com/video/288492614" frameborder="0" allowfullscreen></iframe>
		</div>



		<div class="filminfo">

			<div class="desktoptekst"><h3>Millum Commerce</h3></b></div>
      <div class="mobiltekst"><h3>Millum Commerce</b></div>

			<h4>Slik sikrer du deg flere kunder – som holder seg til avtalene dere har gjort.</h4>
    

 <!-- __________ Nedlastning ___________  -->

			<div class="wrap">
    			<div class="cell storrelse"><h5>Ferdig</h5></div>
    			<div class="cell aspekt"><h6>02.06.18</h6></div>
    			<div class="cell aspektm"><h6>02.06</h6></div>
    			<div class="cell mb"><h6>29 MB</h6></div>
    			<div class="cell knapper"><a class="knapp-filformater2" href="Kundeside_kode/download/Millum_Trade_Utkast1_310518.mp4" download> Last ned</a></div>
				</div>

				
				
		</div>







</div>










  <!-- ____________________________________________ Footer ___________________________________________   -->




<?php include("includes/footer.php"); ?>











</body>
</html>
