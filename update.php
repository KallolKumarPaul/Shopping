<?php
	if(isset($user_detail)){
		foreach($user_detail as $ud){
			$skill = explode(",",$ud['skill']);
			$gender = explode(",",$ud['gender']);
			?>
			<center>
			<form action='<?php echo base_url()?>Db_Controller/update/<?php echo $ud['id']?>' method='POST' enctype='multipart/form-data'>

			<input type="text" name="name" value='<?php echo $ud['name']?>'><br>
			<input type="text" name="email" readonly value="<?php echo $ud['email']?>"><br><br>
			<select name='city'>
		<option>Select a City</option>
		<option value="Mumbai"<?php echo $ud['city']=='Mumbai'?'Selected':''?>>Mumbai</option>
		<option value="Delhi"<?php echo $ud['city']=='Delhi'?'Selected':''?>>Delhi</option>
		<option value="Bangalore"<?php echo $ud['city']=='Bangalore'?'Selected':''?>>Bangalore</option>
		<option value="Jaipur" <?php echo $ud['city']=='Jaipur'?'Selected':''?>>Jaipur</option>
		<option value="Ranchi" <?php echo $ud['city']=='Ranchi'?'Selected':''?>>Ranchi</option>
		<option value="Kolkata" <?php echo $ud['city']=='Kolkata'?'Selected':''?>>Kolkata</option>
		<option value="Jaisalmir" <?php echo $ud['city']=='Jaisalmir'?'Selected':''?>>Jaisalmir</option>
</select><br>
Select skill: C<input type='checkbox' <?php echo in_array('C',$skill)?'Checked':''?> name='sk[]' value='C'>
					  C++<input type='checkbox' <?php echo in_array('C++',$skill)?'Checked':''?> name='sk[]' value='C++'>
					  PHP<input type='checkbox' <?php echo in_array('PHP',$skill)?'Checked':''?> name='sk[]' value='PHP'>
					  Java<input type='checkbox' <?php echo in_array('Java',$skill)?'Checked':''?> name='sk[]' value='Java'>
	<br>
	Gender: Male<input type='radio' value='Male' <?php echo $ud['gender']=='Male'?'Checked':''?> name='gender[]'>Female<input type='radio' value='Female' <?php echo $ud['gender']=='Female'?'Checked':''?> name='gender[]'>Others<input type='radio' value='Others' <?php echo $ud['gender']=='Others'?'Checked':''?> name='gender[]'><br>
			<img src="<?php echo base_url()."/uploads/".$ud['image']?>" height='100' width='100'><br>
			<input type='file' name='image'><br>
			<input type='submit' name='submit' value='Submit'>
			<a href="<?php echo base_url()?>Db_Controller/logout"><button>Logout</button></a>
			</form>
			</center>
			";
<?php
		}
	}
?>