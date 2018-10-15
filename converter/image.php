<!DOCTYPE html>
<html lang="en">
<head>
	<title>Image | Multimedia Converter</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="https://api.cloudconvert.com/convert" method="POST" enctype="multipart/form-data">
				<div class="btn">
					<a href="../"><button class="contact100-form-btn" type="button">
						<span>
							<i class="fa fa-long-arrow-left m-l-7" aria-hidden="true"></i>
							Back
						</span>
					</button></a>
				</div>
				
				<span class="contact100-form-title">
					Image Converter
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Choose Your File">
					<span class="label-input100">FILE</span>
					<input class="input100" type="file" name="file">
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Input file type *</span>
					<div>
						<select class="js-select2" name="inputformat">
							<option value="jpg">JPG</option>
							<option value="jpeg">JPEG</option>
							<option value="png">PNG</option>
							<option value="bmp">BMP</option>
							<option value="tiff">TIFF</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Output file type *</span>
					<div>
						<select class="js-select2" name="outputformat">
							<option value="jpg">JPG</option>
							<option value="jpeg">JPEG</option>
							<option value="png">PNG</option>
							<option value="bmp">BMP</option>
							<option value="tiff">TIFF</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="wrap-input100 bg1">
					<span class="label-input100">Resolution (px)</span>
					<input class="input100" type="text" name="converteroptions[resize]" placeholder="widthxheight (100x150)">
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Color Depth</span>
					<div>
						<select class="js-select2" name="converteroptions[command]">
							<option value="">No change</option>
							<option value="{INPUTFILE} -depth 1 {OUTPUTFILE}">1</option>
							<option value="{INPUTFILE} -depth 2 {OUTPUTFILE}">2</option>
							<option value="{INPUTFILE} -depth 4 {OUTPUTFILE}">4</option>
							<option value="{INPUTFILE} -depth 8 {OUTPUTFILE}">8</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Gray Scale</span>
					<div>
						<select class="js-select2" name="converteroptions[grayscale]">
							<option value="false">No</option>
							<option value="true">Yes</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<input type="hidden" name="apikey" value="RjoWdTotAbDTt9Zeo2ENrslTCVcQZhbjM2KeWtbtKT7iemPLL8o3hy0DhYnfUdqH">
				<input type="hidden" name="input" value="upload">
				<input type="hidden" name="wait" value="true">
				<input type="hidden" name="download" value="true">
				<input type="hidden" name="converteroptions[resizemode]" value="scale">
    			<input type="hidden" name="converteroptions[strip_metatags]" value="false">
    			<input type="hidden" name="converteroptions[resizeenlarge]" value="true">

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit" value="Convert!">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
				
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
