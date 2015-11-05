
<html>
	
		
				  <form name="person_info" onSubmit="validate()" id="form">
    				<label for="Name" class="label1">Name</label>
   				    <input type="text" class="form-control" id="Name" name="Name" placeholder="Enter Here">
                 
    			 	<label for="Address" class="label1">Address</label>
   				    <input type="text" class="form-control" id="Address" name="Address" placeholder="Enter Here">
                    
   					<label for="City" class="label1">City</label>
   				    <input type="text" class="form-control" id="City" name="City" placeholder="Enter Here" >	
                    
					<label for="Province" class="label1">Province</label>
   				    <input type="text" class="form-control" id="Province" name="Province" placeholder="Enter Here" >
                    
 					<label for="PostalCode" class="label1">Postal Code</label>
   				    <input type="text" class="form-control" id="PostalCode" name="PostalCode" placeholder="Enter Here" >
                    
   					<label for="Telephone" class="label1">Telephone</label>
  				    <input type="text" class="form-control" id="Telephone"  name="Telephone" placeholder="Enter Here" >
                    
 				   <label for="Email address" class="label1">Email address</label>
    			   <input type="email" class="form-control" id="Email address" name="EmailAddress" placeholder="Enter Here" ><br>
 
    			
  		
	
				
			
					<label for="Pizzasize" class="label1">Pizza Size</label>
					<select class="form-control" id="Pizzasize" name="Pizzasize">
						<option value="notselected" >Select From Options</option>
  						<option value="small" >Small</option>
  						<option value="medium" >Medium</option>
  						<option value="large" >Large</option>
  						<option value="extralarge" >Extra-Large</option>
					</select>
                    
					<label for="crust" class="label1">Crust Type</label>
   					<select class="form-control" id="crust" name="crust">
						<option value="NotSelected" >Select From Options</option>
  						<option value="HandTossed">Hand-Tossed</option>
                        <option value="Pan">Pan</option>
                        <option value="Stuffed">Stuffed</option>
                        <option value="Thin">Thin</option>
					</select>
                    
					<label for="toppings" class="label1">Toppings</label><br>
                    <table id="table1"><tr><td>
					<label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox1" value="option1" name="chk[]" checked="checked">White  Onion
					</label></td>
               
					<td><label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox2" value="option2" name="chk[]"> Tomato
					</label></td>
               
					<td><label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox3" value="option3" name="chk[]"> Green Olives
					</label></td></tr>
					
					<tr><td><label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox4" value="option4" name="chk[]"> PineApple
					</label></td>
               
					<td><label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox5" value="option5" name="chk[]"> Spinach
					</label></td>
               
					<td><label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox6" value="option6" name="chk[]"> Mushrooms
					</label></td></tr>
               
					<tr><td><label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox7" value="option7" name="chk[]">Pepperoni
					</label></td>
               
					<td><label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox8" value="option8" name="chk[]"> Bacon
					</label></td>
               
					<td><label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox9" value="option9" name="chk[]"> Chicken
					</label></td></tr> 
               
					<tr><td><label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox10" value="option10" name="chk[]"> Fried EggPlant
					</label></td>
               
					<td><label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox11" value="option11" name="chk11"> Ham
					</label></td>
               
					<td><label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox12" value="option12" name="chk12"> Red Onion
					</label></td></tr></table>
               
					<label for="location" class="label1">Location</label>
					<select class="form-control" id="location" name="location">
						<option value="Not Selected">Select Location</option>
						<option value="ontario">Ontario</option>
						<option value="quebec">Quebec</option>
						<option value="manitoba">Manitoba</option>
						<option value="saskatchewan">Saskatchewan</option>
					</select><br><br>
               
					<input class="btn btn-success" id="submitbutton" type="submit" value="Submit">
                    <input class="btn btn-primary" id="resetbutton" type="reset" value="Reset">
				</form>
	
</html>