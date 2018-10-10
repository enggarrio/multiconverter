<!DOCTYPE html>
<html lang="en">
<head>
	<title>Video | Multimedia Converter</title>
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
					Video Converter
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Choose Your File">
					<span class="label-input100">FILE</span>
					<input class="input100" type="file" name="file">
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Input file type *</span>
					<div>
						<select class="js-select2" name="inputformat">
							<option value="3gp">3GP</option>
							<option value="avi">AVI</option>
							<option value="flv">FLV</option>
							<option value="mkv">MKV</option>
							<option value="mov">MOV</option>
							<option value="mp4">MP4</option>
							<option value="wmv">WMV</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Output file type *</span>
					<div>
						<select class="js-select2" name="outputformat">
							<option value="3gp">3GP</option>
							<option value="avi">AVI</option>
							<option value="flv">FLV</option>
							<option value="mkv">MKV</option>
							<option value="mov">MOV</option>
							<option value="mp4">MP4</option>
							<option value="wmv">WMV</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<!--Video setting-->
				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Video Bitrate *</span>
					<div>
						<select class="js-select2" name="converteroptions[video_bitrate]">
							<option value="250">very low (250 kbps)</option>
							<option value="2000">low (2000 kbps)</option>
							<option value="5000">middle (5000 kbps)</option>
							<option value="8000">high (8000 kbps)</option>
							<option value="16000">very high (16000 kbps)</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Video Aspect Ratio *</span>
					<div>
						<select class="js-select2" name="converteroptions[video_ratio]">
							<option value="">no change</option>
							<option value="1:1">1:1</option>
							<option value="3:2">3:2</option>
							<option value="16:9">16:9</option>
							<option value="4:3">4:3</option>
							<option value="2.20:1">2.20:1</option>
							<option value="2.35:1">2.35:1</option>
							<option value="1.85:1">1.85:1</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Video Resolution *</span>
					<div>
						<select class="js-select2" name="converteroptions[video_resolution]">
							<option value="">no change</option>
							<option value="240x160">240x160</option>
							<option value="320x240">320x240 (240p)</option>
							<option value="480x320">480x320 (320p)</option>
							<option value="640x480">640x480 (480p)</option>
							<option value="720x480">720x480</option>
							<option value="852x480">852x480</option>
							<option value="1280x720">1280x720 (720p)</option>
							<option value="1920x1080">1920x1080 (1080p)</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Video FPS *</span>
					<div>
						<select class="js-select2" name="converteroptions[video_fps]">
							<option value="">no change</option>
							<option value="1">1fps</option>
							<option value="2">2fps</option>
							<option value="5">5fps</option>
							<option value="10">10fps</option>
							<option value="12">12fps</option>
							<option value="15">15fps</option>
							<option value="20">20fps</option>
							<option value="23.976">23.976fps NTSC</option>
							<option value="25">25fps PAL</option>
							<option value="29.97">29.97fps NTSC</option>
							<option value="50">50fps</option>
							<option value="59.97">59.97fps</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<!--Audio setting-->
				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Audio Codec *</span>
					<div>
						<select class="js-select2" name="converteroptions[audio_codec]">
							<option value="AAC">AAC</option>
							<option value="AAC_HE_1">AAC-HE version 1</option>
							<option value="AAC_HE_2">AAC-HE version 2</option>
							<option value="MP3">MP3</option>
							<option value="AC3">AC3</option>
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
				<input type="hidden" name="converteroptions[video_codec]" value="MPEG4">
				<input type="hidden" name="converteroptions[audio_all_streams]" value="true">

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
