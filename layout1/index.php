<html>
<head>
	<!--layout1-->
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
			<li id="pull"><font color="white">&#9776;</font> Layout 1</li>
			<li id='current-item'><span>Layout1</span></li>&emsp;&emsp;
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
			<label id="large_heading">Page Heading</label><label id="small_heading"> Secondary Text</label>
		</div>
		<div class="line"></div>

	<div id="wrap">
<!-- 1 -->		
		<div class="grid">
			<div class="box">
				<img src="img.gif">
			</div>
			<div class="data"><br/>
				<label class="heading2">Project Name</label>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
			</div>
		</div>
<!-- 2 -->
		<div class="grid">
			<div class="box">
				<img src="img.gif">
			</div>
			<div class="data"><br/>
				<label class="heading2">Project Name</label>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
			</div>
		</div>
<!-- 3 -->
		<div class="grid">
			<div class="box">
				<img src="img.gif">
			</div>
			<div class="data"><br/>
				<label class="heading2">Project Name</label>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
			</div>
		</div>
<!-- 4 -->
		<div class="grid">
			<div class="box">
				<img src="img.gif">
			</div>
			<div class="data"><br/>
				<label class="heading2">Project Name</label>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
			</div>
		</div>
<!-- 5 -->
		<div class="grid">
			<div class="box">
				<img src="img.gif">
			</div>
			<div class="data"><br/>
				<label class="heading2">Project Name</label>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
			</div>
		</div>
<!-- 6 -->
		<div class="grid">
			<div class="box">
				<img src="img.gif">
			</div>
			<div class="data"><br/>
				<label class="heading2">Project Name</label>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
			</div>
		</div>
<!-- 7 -->
		<div class="grid">
			<div class="box">
				<img src="img.gif">
			</div>
			<div class="data"><br/>
				<label class="heading2">Project Name</label>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
			</div>
		</div>
<!-- 8 -->
		<div class="grid">
			<div class="box">
				<img src="img.gif">
			</div>
			<div class="data"><br/>
				<label class="heading2">Project Name</label>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
			</div>
		</div>
<!-- 9 -->
		<div class="grid">
			<div class="box">
				<img src="img.gif">
			</div>
			<div class="data"><br/>
				<label class="heading2">Project Name</label>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
			</div>
		</div>
	</div><br/>
</div>
	<div class="line"></div>
	<div id="footer"><br/>
		<label id="footer_text">Copyright &copy; Your Website 2014</label><br/><br/>
	</div>
</body>
</html>