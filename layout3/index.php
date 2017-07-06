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
			<li id='current-item'><span>Layout3</span></li>&emsp;&emsp;
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
	 <div class="body">
        <div class="content">
            <div class="heading">
                <span>Blog Post Title</span><br/><br/>by <font color="#4e94ce">Test</font>
            </div>
            <div class="line"></div>
            <span class="clock">
            	<img src="clock.jpg"> Posted on August 24 ,2013 at 9:00 PM
            </span>
            <div class="line"></div>
            <img src="img.gif">
            <div class="line"></div>
            <div class="heading2">
            	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapoente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?
            </div>
            <div class="para">
                <p>Lorem ipsum dolor sit amet, consectetur adipsicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipsicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, lure!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipscing elit. Error, nostrum, aliquid, animl, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipsicing elit, Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempora quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>
            </div>
        </div>
     	<div class="sidebar">
            <div class="search">
                <div class="heading_sidebar">Blog Search</div>
                <input type="text" id="text_search">
                <div id="image">
                    <img src="icon.png">
                </div>
            </div>
            <div class="second_blog">
                <div class="heading_sidebar">Blog Categories</div>
                <div class="category"><br/>
                	<span> Category Name <label class="space"> Category Name </label></span>
                	<span> Category Name <label class="space"> Category Name </label></span>
                	<span> Category Name <label class="space"> Category Name </label></span>
                	<span> Category Name <label class="space"> Category Name </label></span><br/><br/>
                </div>
                <div class="dropdown">
                    <select>
                        <option>Category Name</option>
                        <option>Category Name</option>
                        <option>Category Name</option>
                        <option>Category Name</option>
                        <option>Category Name</option>
                        <option>Category Name</option>
                        <option>Category Name</option>
                        <option>Category Name</option>
                    </select>
                </div>
            </div>
            <div id="third_blog">
                <div class="heading_sidebar">Side Widget Well</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipsicing elit. Inverntore, perspiciatis adipsci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
            </div>
        </div>  
	    <div style="clear: both;"></div> 
        <div class="line"></div>    
	    <div class="footer">
	        <div id="footer_text">Copyright @ your website 2014</div>
	    	<div style="clear: both;"></div>
	    </div>
	</div>
</body>
</html>