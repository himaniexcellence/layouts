<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#pull").click(function(){
				$('.new_list').toggle();
			});
			var window = $(window).width();
			if(window > 450){
		        $('#pull').hide();
		        $('li').show();
		        $('#xample').hide();
		    }
		});
	</script>
</head>
<body>
	
	<nav class="header" id="navigation">
		<ul class="header">
			<li id="pull"><font color="white">&#9776;</font> Layout 3</li>
			<li id='current-item'><span>Layout2</span></li>&emsp;&emsp;
			<li id="xample"><a href="#">About</a></li>&emsp;&emsp;
			<li id="xample"><a href="#">Services</a></li>&emsp;&emsp;
			<li id="xample"><a href="#">Contacts</a></li>
		</ul>	
		<ul class="new_list"><br/><br/>
			<li>About</li>&emsp;&emsp;<br/><br/>
			<li>Services</li>&emsp;&emsp;<br/><br/>
			<li>Contacts</li>
		</ul>
			
	</nav>
	<div id="body">
		<div id="heading">
			<label id="large_heading">Sample Heading</label><br/>
			<div id="small_heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsa, ipsam, eligendi, in quo possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</div>
			<label id="block">Call to action!</label>
		</div>
		<div class="line"></div>

	<div id="wrap">
		<label class="features">Latest Features</label><br/>
		<div class="grid">
			<div class="box">
				<img src="img.gif">
			</div>
			<div class="data"><br/>
				<label class="heading2">Feature Label</label><br/>
				<div class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div><br/>
				<label id="block" style="padding: 4% 4% 4% 4%; margin: 0 auto;">Buy Now!</label>
				<label id="block" style="padding: 4% 4% 4% 4%; margin: 0 auto; background-color:white; color: black; border:1px solid #cccccc;">More Info</label>
			</div>
		</div>

		<div class="grid">
			<div class="box">
				<img src="img.gif">
			</div>
			<div class="data"><br/>
				<label class="heading2">Feature Label</label><br/>
				<div class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div><br/>
				<label id="block" style="padding: 4% 4% 4% 4%; margin: 0 auto;">Buy Now!</label>
				<label id="block" style="padding: 4% 4% 4% 4%; margin: 0 auto; background-color:white; color: black; border:1px solid #cccccc;">More Info</label>
			</div>
		</div>

		<div class="grid">
			<div class="box">
				<img src="img.gif">
			</div>
			<div class="data"><br/>
				<label class="heading2">Feature Label</label><br/>
				<div class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div><br/>
				<label id="block" style="padding: 4% 4% 4% 4%; margin: 0 auto;">Buy Now!</label>
				<label id="block" style="padding: 4% 4% 4% 4%; margin: 0 auto; background-color:white; color: black; border:1px solid #cccccc;">More Info</label>
			</div>
		</div>

		<div class="grid">
			<div class="box">
				<img src="img.gif">
			</div>
			<div class="data"><br/>
				<label class="heading2">Feature Label</label><br/>
				<div class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div><br/>
				<label id="block" style="padding: 4% 4% 4% 4%; margin: 0 auto;">Buy Now!</label>
				<label id="block" style="padding: 4% 4% 4% 4%; margin: 0 auto; background-color:white; color: black; border:1px solid #cccccc;">More Info</label>
			</div>
		</div>
		
	</div><br/>
</div>
	<div class="line"></div>
	<div id="footer">
		<label id="footer_text">Copyright &copy; Your Website 2014</label><br/><br/>
	</div>
</body>
</html>