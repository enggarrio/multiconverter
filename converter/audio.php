<!DOCTYPE html>
<html lang="en">
<head>
	<title>Audio | Multimedia Converter</title>
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
					Audio Converter
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Choose Your File">
					<span class="label-input100">FILE</span>
					<input class="input100" type="file" name="file">
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Input file type *</span>
					<div>
						<select class="js-select2" name="inputformat">
							<option value="aac">AAC</option>
							<option value="mp3">MP3</option>
							<option value="mp4a">MP4A</option>
							<option value="wav">WAV</option>
							<option value="wma">WMA</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Output file type *</span>
					<div>
						<select class="js-select2" name="outputformat">
							<option value="aac">AAC</option>
							<option value="mp3">MP3</option>
							<option value="mp4a">MP4A</option>
							<option value="wav">WAV</option>
							<option value="wma">WMA</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Audio Codec *</span>
					<div>
						<select class="js-select2" name="converteroptions[audio_codec]">
							<option value="PCM_S24LE">PCM_S16LE</option>
							<option value="PCM_S24LE">PCM_S24LE</option>
							<option value="PCM_S24LE">PCM_S32LE</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Audio Bitrate *</span>
					<div>
						<select class="js-select2" name="converteroptions[audio_bitrate]">
							<option value="32">very low (32 kbps)</option>
							<option value="64">low (64 kbps)</option>
							<option value="128">middle (128 kbps)</option>
							<option value="256">high (256 kbps)</option>
							<option value="320">very high (320 kbps)</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Audio Channels *</span>
					<div>
						<select class="js-select2" name="converteroptions[audio_channels]">
							<option value="">no change</option>
							<option value="1">mono</option>
							<option value="2">stereo</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Audio Frequency *</span>
					<div>
						<select class="js-select2" name="converteroptions[audio_frequency]">
							<option value="">no change</option>
							<option value="8000">8000 Hz</option>
							<option value="11025">11025 Hz</option>
							<option value="22050">22050 Hz</option>
							<option value="24000">24000 Hz</option>
							<option value="32000">32000 Hz</option>
							<option value="44100">44100 Hz</option>
							<option value="48000">48000 Hz</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Audio Normalization *</span>
					<div>
						<select class="js-select2" name="converteroptions[audio_normalize]">
							<option value="">no change</option>
							<option value="-60dB">-60 dB</option>
							<option value="-50dB">-50 dB</option>
							<option value="-40dB">-40 dB</option>
							<option value="-30dB">-30 dB</option>
							<option value="-20dB">-20 dB</option>
							<option value="-10dB">-10 dB</option>
							<option value="+10dB">+10 dB</option>
							<option value="+20dB">+20 dB</option>
							<option value="+30dB">+30 dB</option>
							<option value="+40dB">+40 dB</option>
							<option value="+50dB">+50 dB</option>
							<option value="+60dB">+60 dB</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<input type="hidden" name="apikey" value="RjoWdTotAbDTt9Zeo2ENrslTCVcQZhbjM2KeWtbtKT7iemPLL8o3hy0DhYnfUdqH">
				<input type="hidden" name="input" value="upload">
				<input type="hidden" name="wait" value="true">
				<input type="hidden" name="download" value="true">

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
