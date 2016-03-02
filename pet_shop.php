<?php
import head.php ?>
<!-- This file will be linked to by a button in the game's Inn at any town. As I am attempting to make the entire pet system modular and capable of either being present or not and still have the remainder of the game function the same I felt this was the best place to start for now. Likely this will be a lengthy process as I am constantly a perpetual perfectionist expecting that things should continually become better until the point that they do not become invinted at all (see also, babage analytical engine)-->
<h1>Welcome to the Zugra petshop</h1><br>
<h4>A place where adorable pets can be adopted by the heros and adventurers in Zugra. A pet will be a fabulous companion to keep you company and will help you in epic battles when you decide to bite off a bit more than you are capable of masticating.</h4><br>
<!--
come on let's get this looking a little fancyish

ps. I think a gif image of some pets moving a bit might be a nice touch?
-->
<a href="pet_adopt.php">Would You like to adopt a pet today?</a><br><!-- We have a button that takes us to the adoption page-->
<a href="pet_revive.php">Do you need me to revive a dead pet?</a><br><!-- We have a button that takes us to the revive page-->
<div class="banner">&nbsp;</div>
					
			       <div id="content">
				   
				        <div class="content">
								<ul>
									<li>
										<a href="pet_shop.php"><img src="images/puppy.jpg" width="114" height="160" alt="Pet Shop" title="Pet Shop"></a>
										<h2>What they need</h2>
										<p>Mirum est notare quam littera gothica, quam nunc putamus parum clara m, ant epo suerit li tterar. <a class="more" href="index.html">View all</a></p>
									</li>
									<li>
										<a href="pet_shop.php"><img src="images/cat.jpg" width="114" height="160" alt="Pet Shop" title="Pet Shop"></a>
										<h2>Something good</h2>
										<p>Gothica, quam nun c putamus parum claram, anteposuerit litterarum formas humani tatis per seacula. <a class="more" href="index.html">View all</a></p>
									</li>
									<li>
										<a href="pet_shop.php"><img src="images/koi.jpg" width="114" height="160" alt="Pet Shop" title="Pet Shop"></a>
										<h2>Kinds of Fish</h2>
										<p>Quam nunc putamus parum claram, antep osuerit litter arum formas humanitatis per seacula quarta. <a class="more" href="index.html">View all</a></p>
									</li>
									<li>
										<a href="pet_shop.php"><img src="images/bird.jpg" width="114" height="160" alt="Pet Shop" title="Pet Shop"></a>
										<h2>Fun birds</h2>
										<p>Mirum est notare quam littera gothica , quam nunc putamus parum claram, anteposuerit. <a class="more" href="index.html">View all</a></p>
									</li>
								</ul>
						</div>
						
					    <div id="sidebar">
								<div class="search">
									<input type="text" name="s" value="Find"><button>&nbsp;</button>
									<label for="articles"><input type="radio" id="articles"> Articles</label>
									<label for="products"><input type="radio" id="products" checked> PetMart Products</label>
								</div>
								
                                <div class="section"> 								
									<ul class="navigation">
										<li class="active"><a href="pet_shop.php">Shopping Guides</a></li>
										<li><a href="pet_shop.php">Discounted Items</a></li>
									</ul>
									
									<div class="aside">
									 <div>
										<div>
											 <ul>
												<li><a href="pet_shop.php">Pet Accesories </a> <a class="more" href="pet_shop.php">see all</a></li>
												<li><a href="pet_shop.php">Bath Essentials</a> <a class="more" href="pet_shop.php">see all</a></li>
												<li><a href="pet_shop.php">Pet Food</a> <a class="more" href="pet_shop.php">see all</a></li>
												<li><a href="pet_shop.php">Pet Vitamins</a> <a class="more" href="pet_shop.php">see all</a></li>
												<li><a href="pet_shop.php">Pet Needs</a> <a class="more" href="pet_shop.php">see all</a></li>
												<li><a href="pet_shop.php">Pet Toy and Treats</a> <a class="more" href="pet_shop.php">see all</a></li>
												<li><a href="pet_shop.php">Pet Supplies</a> <a class="more" href="pet_shop.php">see all</a></li>
												<li><a href="pet_shop.php">Pet Emergency Kit</a> <a class="more" href="pet_shop.php">see all</a></li>
											 </ul>
										</div>
									 </div>
									</div>
								</div>
								
					    </div>
				   </div>
				   
				   <div class="featured">
				        <ul>
							<li><a href="index.html"><img src="images/organic-and-chemical-free.jpg" width="300" height="90" alt="Pet Shop" title="Pet Shop" ></a></li>
							<li><a href="index.html"><img src="images/good-food.jpg" width="300" height="90" alt="Pet Shop" title="Pet Shop" ></a></li>
							<li class="last"><a href="index.html"><img src="images/pet-grooming.jpg" width="300" height="90" alt="Pet Shop" title="Pet Shop" ></a></li>
						</ul>
				        
				   </div>
				  
			
			</div>
<!-- What other information could be contained on this page? Imagine it as a pet shop, Can we fill it with caged beasts and a NPC that seems to appreciate the company of beasts as opposed to humanoids? Rudimentary run on a MVP so a lot of work is needed here obviously-->
<?php import footer.php ?>
