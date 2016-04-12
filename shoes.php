<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Shoes</title>
    <meta name="description" content="" lang="en-EN">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="cleartype" content="on">
    <meta http-equiv="imagetoolbar" content="no" />

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	
	
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

    <script type="text/javascript" src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	
	 <link  href='css/jqueryui/jquery-ui.min.css'  rel="stylesheet" />
	<link  href='css/font-awesome.css'  rel="stylesheet" />
    <link  href='css/main.css'  rel="stylesheet" />

	<script type="text/javascript" src="js/main.js"></script>
</head>

<body>
	
		
	<div class='beforeHeader'>
		<!-- <div class='yellowLine'>
		
			<div class="topContainer">
				<div id='topLogin'><a href="#">SIGN IN</a> | <a href="#">REGISTER</a></div>
				<div id='topShip'>
				
					<ul  class='countryContainer'>
					
						
						<li><a href='javascript:void(0)'><img src="img/flag.png" /></a></li>
						<li><a href='javascript:void(0)'><img src="img/flag.png" /></a></li>
						<li  class='active'><a href='javascript:void(0)'><img src="img/flag.png" /></a></li>
						
					</ul>
				</div>
			</div>
		</div>-->
		
		
		<?php require_once('navigation.php') ?>
		
		<header class='pageShoes'></header>
		
	</div>
	
	<img class='shadow' src='img/shadow.png'>
	<div class="home">
		<a href="#">Home</a> >
		<a href="#" class="bold">Search Shoes</a>
		
		<div class='rightFilter'>
		
			<span>Sort By:</span>
		
			<select>
				<option value=1>Option</option>
				<option value=1>Option</option>
				<option value=1>Option</option>
				<option value=1>Option</option>
			</select>
		</div>
	</div>
	
	<div id='content' class='shoesContent'>
		<div class="filtersContainer">
		
			<div class="filterBlock">
				<div class="filterButton">
					<span class="priceRange">PRICE RANGE</span>
					<i class="fa fa-caret-right"></i>
				</div>
				<div class="filterContent">
					<div id='priceDisplay'>Price Range: GBP <span id='priceFromSpan'></span> - <span id='priceToSpan'></span> </div>
					<div id="slider-range"></div>
					<input type='hidden' name='priceFrom'  id='priceFrom'>
					<input type='hidden' name='priceTo' id='priceTo'>
				</div>
			</div>
			
			<div class="filterBlock">
				<div class="filterButton">
					<span class="priceRange">CATEGORY</span>
					<i class="fa fa-caret-right"></i>
				</div>
				<div class="filterContent">
					<div class='filterCheckbox'>
						<label> <input type='checkbox'> Size XS/EU7/US6.5 <span class='numberLeft'>(11)</span></label>
					</div>
					
					<div class='filterCheckbox'>
						<label> <input type='checkbox'> Size XS/EU7/US6.5 <span class='numberLeft'>(11)</span></label>
					</div>
					
					<div class='filterCheckbox'>
						<label> <input type='checkbox'> Size XS/EU7/US6.5 <span class='numberLeft'>(11)</span></label>
					</div>
					
					<div class='filterCheckbox'>
						<label> <input type='checkbox'> Size XS/EU7/US6.5 <span class='numberLeft'>(11)</span></label>
					</div>
					
					<div class='filterCheckbox'>
						<label> <input type='checkbox'> Size XS/EU7/US6.5 <span class='numberLeft'>(11)</span></label>
					</div>
				</div>
			</div>
			
			<div class="filterBlock">
				<div class="filterButton">
					<span class="priceRange">SHOP BY COLLECTION</span>
					<i class="fa fa-caret-right"></i>
				</div>
				<div class="filterContent">
					<div class='filterCheckbox'>
						<label> <input type='checkbox'> Size XS/EU7/US6.5 <span class='numberLeft'>(11)</span></label>
					</div>
					
					<div class='filterCheckbox'>
						<label> <input type='checkbox'> Size XS/EU7/US6.5 <span class='numberLeft'>(11)</span></label>
					</div>
					
					<div class='filterCheckbox'>
						<label> <input type='checkbox'> Size XS/EU7/US6.5 <span class='numberLeft'>(11)</span></label>
					</div>
					
					<div class='filterCheckbox'>
						<label> <input type='checkbox'> Size XS/EU7/US6.5 <span class='numberLeft'>(11)</span></label>
					</div>
					
					<div class='filterCheckbox'>
						<label> <input type='checkbox'> Size XS/EU7/US6.5 <span class='numberLeft'>(11)</span></label>
					</div>
				</div>
			</div>
			
			<div class="filterBlock">
				<div class="filterButton">
					<span class="priceRange">SHOE SIZE</span>
					<i class="fa fa-caret-right"></i>
				</div>
				<div class="filterContent">
					<div class='filterCheckbox'>
						<label> <input type='checkbox'> Size XS/EU7/US6.5 <span class='numberLeft'>(11)</span></label>
					</div>
					
					<div class='filterCheckbox'>
						<label> <input type='checkbox'> Size XS/EU7/US6.5 <span class='numberLeft'>(11)</span></label>
					</div>
					
					<div class='filterCheckbox'>
						<label> <input type='checkbox'> Size XS/EU7/US6.5 <span class='numberLeft'>(11)</span></label>
					</div>
					
					<div class='filterCheckbox'>
						<label> <input type='checkbox'> Size XS/EU7/US6.5 <span class='numberLeft'>(11)</span></label>
					</div>
					
					<div class='filterCheckbox'>
						<label> <input type='checkbox'> Size XS/EU7/US6.5 <span class='numberLeft'>(11)</span></label>
					</div>
				</div>
			</div>
			
			<div class="filterBlock">
				<div class="filterButton">
					<span class="priceRange">COLOUR</span>
					<i class="fa fa-caret-right"></i>
				</div>
				<div class="filterContent">
				<div class='filterCheckbox'>
						<label> <input type='checkbox'> Size XS/EU7/US6.5 <span class='numberLeft'>(11)</span></label>
					</div>
					
					<div class='filterCheckbox'>
						<label> <input type='checkbox'> Size XS/EU7/US6.5 <span class='numberLeft'>(11)</span></label>
					</div>
					
					<div class='filterCheckbox'>
						<label> <input type='checkbox'> Size XS/EU7/US6.5 <span class='numberLeft'>(11)</span></label>
					</div>
					
					<div class='filterCheckbox'>
						<label> <input type='checkbox'> Size XS/EU7/US6.5 <span class='numberLeft'>(11)</span></label>
					</div>
					
					<div class='filterCheckbox'>
						<label> <input type='checkbox'> Size XS/EU7/US6.5 <span class='numberLeft'>(11)</span></label>
					</div>
				</div>
			</div>
		</div>
		<div class="shoes">
			
			<div class="products3">
			
				<div class="model">
					<div class="img">
						<img src="img/shoes/1.jpg"/>
						<div class="overlay">
							<a href="page2.php">
								<span>VIEW</span>
							</a>
						</div>
					</div>
					<a class="itemDescription">Little Mistress Leonie Strappy Heeled Sandals</a>
				    <a class="itemPrice">&#8364 63.38</a>
					
				</div>
				
				<div class="model">
					<div class="img">
						<img src="img/shoes/2.jpg"/>
						<div class="overlay">
							<a href="page2.php">
								<span>VIEW</span>
							</a>
						</div>
					</div>
					<a class="itemDescription">Ted Baker Meshi Suede Heeled Shoes</a>
					<a class="itemPrice">&#8364 91.55</a>
				
				</div>
				
				<div class="model">
					<div class="img">
						<img src="img/shoes/3.jpg"/>
						<div class="overlay">
							<a href="page2.php">
								<span>VIEW</span>
							</a>
						</div>
					</div>
					<a class="itemDescription">Truffle Collection Helen Tie Up Heeled Sandals</a>
					<a class="itemPrice">&#8364 67.60</a>
					
				</div>
			</div>
		
			<div class="products3">	
				<div class="model">
					<div class="img">
						<img src="img/shoes/4.jpg"/>
						<div class="overlay">
							<a href="page2.php">
								<span>VIEW</span>
							</a>
						</div>
					</div>
					<a class="itemDescription">Me & Zena Astral Traveller Cord Necklace</a>
					<a class="itemPrice">&#8364 16.90</a>
	
				</div>
				
				
				
				<div class="model">
					<div class="img">
						<img src="img/shoes/5.jpg"/>
						<div class="overlay">
							<a href="page2.php">
								<span>VIEW</span>
							</a>
						</div>
					</div>
					<a class="itemDescription">Truffle Collection Honor Mid Heeled Sandals</a>
					<a class="itemPrice">&#8364 59.15</a>
					
				</div>
				<div class="model">
					<div class="img">
						<img src="img/shoes/6.jpg"/>
						<div class="overlay">
							<a href="page2.php">
								<span>VIEW</span>
							</a>
						</div>
					</div>
					<a class="itemDescription">Little Mistress Tia Heeled Sandals</a>
					<a class="itemPrice">&#8364 63.38</a>
					
				</div>
			</div>
			
			<div class="products3">
				<div class="model">
					<div class="img">
						<img src="img/shoes/7.jpg"/>
						<div class="overlay">
							<a href="page2.php">
								<span>VIEW</span>
							</a>
						</div>
					</div>
					<a class="itemDescription">Nylon Collar Necklace</a>
					<a class="itemPrice">&#8364 42.25</a>
					
				</div>
				
				<div class="model">
					<div class="img">
						<img src="img/shoes/8.jpg"/>
						<div class="overlay">
							<a href="page2.php">
								<span>VIEW</span>
							</a>
						</div>
					</div>
					<a class="itemDescription">Dune Quilted Purse</a>
					<a class="itemPrice">&#8364 49.30</a>
				
				</div>
				
				
				
				<div class="model">
					<div class="img">
						<img src="img/shoes/9.jpg"/>
						<div class="overlay">
							<a href="page2.php">
								<span>VIEW</span>
							</a>
						</div>
					</div>
					<a class="itemDescription">Mi-Pac Duffel Tapestry Black</a>
					<a class="itemPrice">&#8364 49.30</a>
					
				</div>
			</div>
			<div class="products3">
				<div class="model">
					<div class="img">
						<img src="img/shoes/10.jpg"/>
						<div class="overlay">
							<a href="page2.php">
								<span>VIEW</span>
							</a>
						</div>
					</div>
					<a class="itemDescription">Dune Grab Bag With Optional Cross Body Strap</a>
					<a class="itemPrice">&#8364 91.55</a>
					
				</div>
				
				<div class="model">
					<div class="img">
						<img src="img/shoes/11.jpg"/>
						<div class="overlay">
							<a href="page2.php">
								<span>VIEW</span>
							</a>
						</div>
					</div>
					<a class="itemDescription">Cheap Monday Round Sunglasses</a>
					<a class="itemPrice">&#8364 28.17</a>
					
				</div>
				
				<div class="model">
					<div class="img">
						<img src="img/shoes/12.jpg"/>
						<div class="overlay">
							<a href="page2.php">
								<span>VIEW</span>
							</a>
						</div>
					</div>
					<a class="itemDescription">Cheap Monday Sunglasses</a>
					<a class="itemPrice">&#8364 28.17</a>
					
				</div>
			</div>
			
			<div class="products3">
				<div class="model">
					<div class="img">
						<img src="img/shoes/13.jpg"/>
						<div class="overlay">
							<a href="page2.php">
								<span>VIEW</span>
							</a>
						</div>
					</div>
					<a class="itemDescription">Orelia Tassel And Bead Bracelet</a>
					<a class="itemPrice">&#8364 21.13</a>
					
				</div>
				
				<div class="model">
					<div class="img">
						<img src="img/shoes/14.jpg"/>
						<div class="overlay">
							<a href="page2.php">
								<span>VIEW</span>
							</a>
						</div>
					</div>
					<a class="itemDescription">Truffle Collection Helen Cut Out Heeled Sandals</a>
					<a class="itemPrice">&#8364 67.60</a>
					
				</div>
				
				<div class="model">
					<div class="img">
						<img src="img/shoes/15.jpg"/>
						<div class="overlay">
							<a href="page2.php">
								<span>VIEW</span>
							</a>
						</div>
					</div>
					<a class="itemDescription">Krystal Wrap Choker Necklace With Swarovski Crystal And Feather</a>
					<a class="itemPrice">&#8364 77.46</a>
					
				</div>
			</div>
			
			<div class="products3">
				<div class="model">
					<div class="img">
						<img src="img/shoes/16.jpg"/>
						<div class="overlay">
							<a href="page2.php">
								<span>VIEW</span>
							</a>
						</div>
					</div>
					<a class="itemDescription">Park Lane Embossed Leather Bag</a>
					<a class="itemPrice">&#8364 91.55</a>
					
				</div>
				
				<div class="model">
					<div class="img">
						<img src="img/shoes/17.jpg"/>
						<div class="overlay">
							<a href="page2.php">
								<span>VIEW</span>
							</a>
						</div>
					</div>
					<a class="itemDescription">Orelia Gold Leaf Resin Spear Pendant Necklace</a>
					<a class="itemPrice">&#8364 28.17</a>
					
				</div>
				
				<div class="model">
					<div class="img">
						<img src="img/shoes/18.jpg"/>
						<div class="overlay">
							<a href="page2.php">
								<span>VIEW</span>
							</a>
						</div>
					</div>
					<a class="itemDescription">Dune Reversible Shopper Bag</a>
					<a class="itemPrice">&#8364 97.18</a>
					
				</div>
			</div>
			
		</div>
		
		
			
			<div class="page">
		
					<div class="page1">
						<div class='pageNumbers'>
							<a href="#"><</a>
							<a href="#">1</a>
							<a href="#">2</a>
							<a href="#">3</a>
							<a href="#">4</a>
							<a href="#">5</a>
							<a href="#">></a>
						</div>
						
					</div>
					
			</div>
	</div>
	
	<img class='shadow ' src='img/shadow.png'>
	
	<?php require_once('footer.php') ?>
    
    <script>
    
    	$('.filterButton').click(function(){
    		
    		
    		if($(this).next().css('display')=='block')
    		{
    			$(this).next().css('display','none');
    		}
    		else
    		{
    			$(this).next().css('display','block');
    		}
    		
    		if($(this).hasClass('blackButton'))
    		{
    			$(this).removeClass('blackButton');
    			$(this).find('i.fa-caret-down').removeClass('fa-caret-down').addClass('fa-caret-right')
        		
    		}
    		else
    		{	
    			$(this).addClass('blackButton');
    			$(this).find('i.fa-caret-right').removeClass('fa-caret-right').addClass('fa-caret-down')
    		}
    		
    		
    		
    	});
    
    </script>
</body>
	
	
