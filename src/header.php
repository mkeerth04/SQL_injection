<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="index.php" class="navbar-brand">ONLINE AUCTION STORE</a>
                   </div>
				  
					
				   
					
					
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
						<br>
						 <li> 
						   <form action="products.php"  method="POST">
								<div id="formarea">
								<table align="left">
											<tr>
												<td>: <input type="text" name="search"></td>
											</tr>
								</table>
									
										<td align="left"> <input type="submit" value="Search"></td>
									</table>
								</div>
							</form>
						</li>
						   
						   
						   
						   
						   <!--<div class="form-group">
								<input type="text" name="search"></td> 
							</div>
							
							<li><a href="products.php"><span class="glyphicon glyphicon-search-items"></span> Search</a></li>-->
							
							
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> 
                           <?php
                           }else{
                            ?>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>