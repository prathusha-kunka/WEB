<?php include('authentication.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>WELCOME</title>
</head>
<style type="text/css">
	form
	{
    	margin: 0 auto;
    	font-size: 20px;
	}
      .form-label-left
      {
          width:150px;
      }
      .form-line
      {
          padding-top:12px;
          padding-bottom:12px;
      }
      .form-label-right
      {
          width:150px;
      }
      body, html
	  {
	  	margin:0;
	    padding:0;
	    height: 100%;
		vertical-align: middle;
	  }
	  .register
	  {
	 	background-image: url("5.jpg");
	    height: 834px;
	    background-position: center;
	    background-repeat: no-repeat;
	    background-size: cover;

	  }
      .form-all
      {
          margin:0px auto;
          padding-top:0px;
          width:500px;
          color:#525 !important;
          font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
          font-size:14px;
      }
      .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
          color: #525;
      }

</style>
<body>
	<form class="register" id="form-label-left " action="sign_up.php">
		<h1><center>STUDENT ADDMISSION FORM<center></h1>
		<h2>Fill The Details</h2>
		<div>
			<label><b>Student Name :</b></label>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<span>
				<label>First Name</label>&nbsp;&nbsp;
				<input type="text" name="fname" required="true" autofocus="true">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span>
			<span>
				<label>Middle Name</label>&nbsp;&nbsp;
				<input type="text" name="mname" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span>
			<span>
				<label>Last Name</label>&nbsp;&nbsp;
				<input type="text" name="lname" required="true">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span>
		</div>
        <br>
		<div>
			<label required="true"><b>Birth Date:</b></label>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<span>
				<label>Month</label>&nbsp;&nbsp;&nbsp;
				<select name="month">
					<option value=" "></option>
	                <option value="January"> January </option>
	                <option value="February"> February </option>
	                <option value="March"> March </option>
	                <option value="April"> April </option>
	                <option value="May"> May </option>
	                <option value="June"> June </option>
	                <option value="July"> July </option>
	                <option value="August"> August </option>
	                <option value="September"> September </option>
	                <option value="October"> October </option>
	                <option value="November"> November </option>
	                <option value="December"> December </option>
				</select>
			</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<span>
				<label required="true">Date</label>
				<select name="date">
					<option value=" "></option>
					<option value="1"> 1 </option>
	                <option value="2"> 2 </option>
	                <option value="3"> 3 </option>
	                <option value="4"> 4 </option>
	                <option value="5"> 5 </option>
	                <option value="6"> 6 </option>
	                <option value="7"> 7 </option>
	                <option value="8"> 8 </option>
	                <option value="9"> 9 </option>
	                <option value="10"> 10 </option>
	                <option value="11"> 11 </option>
	                <option value="12"> 12 </option>
	                <option value="13"> 13 </option>
	                <option value="14"> 14 </option>
	                <option value="15"> 15 </option>
	                <option value="16"> 16 </option>
	                <option value="17"> 17 </option>
	                <option value="18"> 18 </option>
	                <option value="19"> 19 </option>
	                <option value="20"> 20 </option>
	                <option value="21"> 21 </option>
	                <option value="22"> 22 </option>
	                <option value="23"> 23 </option>
	                <option value="24"> 24 </option>
	                <option value="25"> 25 </option>
	                <option value="26"> 26 </option>
	                <option value="27"> 27 </option>
	                <option value="28"> 28 </option>
	                <option value="29"> 29 </option>
	                <option value="30"> 30 </option>
	                <option value="31"> 31 </option>
				</select>
			</span>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label required="true">Year</label>
				<select name="year">
					<option value=" "></option>
					<option value="2019"> 2019 </option>
	                <option value="2018"> 2018 </option>
	                <option value="2017"> 2017 </option>
	                <option value="2016"> 2016 </option>
	                <option value="2015"> 2015 </option>
	                <option value="2014"> 2014 </option>
	                <option value="2013"> 2013 </option>
	                <option value="2012"> 2012 </option>
	                <option value="2011"> 2011 </option>
	                <option value="2010"> 2010 </option>
	                <option value="2009"> 2009 </option>
	                <option value="2008"> 2008 </option>
	                <option value="2007"> 2007 </option>
	                <option value="2006"> 2006 </option>
	                <option value="2005"> 2005 </option>
	                <option value="2004"> 2004 </option>
	                <option value="2003"> 2003 </option>
	                <option value="2002"> 2002 </option>
	                <option value="2001"> 2001 </option>
	                <option value="2000"> 2000 </option>
	                <option value="1999"> 1999 </option>
	                <option value="1998"> 1998 </option>
	                <option value="1997"> 1997 </option>
	                <option value="1996"> 1996 </option>
	                <option value="1995"> 1995 </option>
				</select>
			</span>
		</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div>
			<label required="true"><b>Gender</b></label>&nbsp;&nbsp;&nbsp;
			<select name="gender">
				<option value=" "></option>
				<option>Male</option>	
				<option>Female</option>
				<option>Others</option>
			</select>
		</div>
		<br>
		<div>
			<label><b>Address:</b></label>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<span>
				<label>Street Address 1:</label>&nbsp;&nbsp;&nbsp;
				<input type="text" name="s_add" required="true">
			</span>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<span>
				<label>Street Address 2:</label>&nbsp;&nbsp;&nbsp;
				<input type="text" name="s_add2">
			</span>
			<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span>
				<label>City</label>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="city" required="true">
			</span>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<span>
				<label>State</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="state" required="true">
			</span><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<span>&nbsp;&nbsp;&nbsp;
				<label>Pincode</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="pincode" required="true">
			</span>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<span>
				<label  required="true">Country</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<select name="country">
					  <option value=" "> Please Select </option>
                      <option value="Afghanistan"> Afghanistan </option>
                      <option value="Albania"> Albania </option>
                      <option value="Bangladesh"> Bangladesh </option>
                      <option value="Brazil"> Brazil </option>
                      <option value="China"> China </option>
                      <option value="Colombia"> Colombia </option>
                      <option value="Congo"> Congo </option>
                      <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                      <option value="Denmark"> Denmark </option>                      
                      <option value="Egypt"> Egypt </option>
                      <option value="Ethiopia"> Ethiopia </option>
                      <option value="France"> France </option>                   
                      <option value="Georgia"> Georgia </option>
                      <option value="Germany"> Germany </option>
                      <option value="India"> India </option>
                      <option value="Indonesia"> Indonesia </option>
                      <option value="Iran"> Iran </option>
                      <option value="Italy"> Italy </option>
                      <option value="Japan"> Japan </option>
                      <option value="Kenya"> Kenya </option>
                      <option value="North Korea"> North Korea </option>
                      <option value="Kuwait"> Kuwait </option>
                      <option value="Malaysia"> Malaysia </option>
                      <option value="Maldives"> Maldives </option>
                      <option value="Nepal"> Nepal </option>
                      <option value="Netherlands"> Netherlands </option>
                      <option value="Pakistan"> Pakistan </option>
                      <option value="Philippines"> Philippines </option>
                      <option value="Republic of the Congo"> Republic of the Congo </option>
                      <option value="Russia"> Russia </option>
                      <option value="Saudi Arabia"> Saudi Arabia </option>
                      <option value="Sweden"> Sweden </option>
                      <option value="Switzerland"> Switzerland </option>
                      <option value="Syria"> Syria </option>
                      <option value="Taiwan"> Taiwan </option>
                      <option value="Tajikistan"> Tajikistan </option>
                      <option value="Tanzania"> Tanzania </option>
                      <option value="Thailand"> Thailand </option>
                      <option value="Turkey"> Turkey </option>
                      <option value="Uganda"> Uganda </option>
                      <option value="Ukraine"> Ukraine </option>
                      <option value="United Arab Emirates"> United Arab Emirates </option>
                      <option value="United Kingdom"> United Kingdom </option>
                      <option value="Vatican City"> Vatican City </option>
                      <option value="Venezuela"> Venezuela </option>
                      <option value="Vietnam"> Vietnam </option>
                      <option value="Yemen"> Yemen </option>
                      <option value="Zambia"> Zambia </option>
                      <option value="Zimbabwe"> Zimbabwe </option>
                      <option value="other"> Other </option>
				</select>
			</span>
		</div>
		<br>
		<div>
			<span>
				<label><b>Student's E-mail ID</b></label>
				<input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  required="true"/>
			</span>
		</div>
		<br>
		<div>
			<span>
				<label><b>Phone Number</b></label>
				<input type="number" name="phone" required="true"/>
			</span>
		</div>
		<br>
		<div>
			<span>
				<label><b>Age</b></label>&nbsp;&nbsp;&nbsp;
				<input type="number" name="age" required="true"/>
			</span>
		</div>
		<br>

		<div>
			<span>
				<label><b>Department Name</b></label>&nbsp;&nbsp;
				<input type="text" name="d_id" required="true">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span>
		</div>
		<br>
		<div>
			<label><b>Marks</b></label>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<span>
				<label>10th marks</label>
				<input type="number" name="marks10" required="true"/>
			</span>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<span>
				<label>12th marks</label>
				<input type="number" name="marks12" required="true"/>
			</span>
		</div>
		<br>
		<div>
			<span>
				<label><b>Quota</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
				<select name="quota">
					<option value=" "></option>
					<option>PESSAT</option>
					<option>CET</option>
					<option>VILLAGE</option>
				</select>
			</span>
		</div>
		<br>
		<input type="button" onclick="location.href='parent.php'" value="NEXT" name="next">
	</form>
</body>
</html>