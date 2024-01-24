<html>

<head>

<title>ARM Medi Lab</title>
	     <link rel=" shoutcut icon" type="image/png" href="img/favicon.png">
	<style>
	
		
		.container {
	width: 680px;
	height: 500px;
	margin:6% auto;
	border-radius: 25px;
	background-color: rgba(0,0,0,0.1);
	box-shadow: 0 0 17px #333;
}
.header {
	text-align: center;
	padding-top: 75px;
	
}

.header h1 {
	color: #333;
	font-size: 45px;
	margin-bottom: 80px;
	margin-top: -10%;
	text-align: center;
	
	
	
}
.two-col {
			overflow: hidden;/* Makes this div contain its floats */
		}

		.two-col .col1,
		.two-col .col2 {
			width: 48%;
		}

		.two-col .col1 {
			float: left;
			
		}

		.two-col .col2 {
			float: right;
			
		}

		.two-col label {
			display: block;
		}
		input[type=text], select, textarea {
		  width: 40%;
		  padding: 12px;
		  border: 1px solid #ccc;
		  border-radius: 10px;
		  
		  margin-top: 6px;
		  margin-bottom: 16px;
		
		}
.center{
margin-right:50%;

}	

.tx
{

 width: 47%;
 padding: 12px;
 margin-left: 100px;
 margin-top: -2.0%;
 


}
.bx
{

 width: 47%;
 padding: 12px;
 float : right;
 margin-top : -106px;
 margin-right: 100px;


}
.button{

border-radius: 10px;
}
.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
	font-weight: bold;
  background-color:#008ae6;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
	width: 270px;
	height: 40px;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
  margin-top: -2%;
  border-radius: 10px
}

.btn:hover {
	box-shadow: 2px 2px 5px #555;
	background-color: #008ae6;
}
. btn:input:hover {
	box-shadow: 2px 2px 5px #555;
	background-color: #ddd;
}	
.border {
  border-style: solid;
  border-width: thin;
  border-radius : 25px;
  
  width: 670px;
	height: 365px;
	margin-left: 0.5%;
	margin-top:-0.5%;
}
.little {

border-style: solid;
  border-width: thin;
  border-radius : 25px;
  
  width: 670px;
	height: 45px;
	margin-left: 0.5%;
	margin-top:-10%;

}
	</style>
</head>

<body>

	<div class="container">
 	   <div class="header">
	
	
	       <h1 style="color: #095d83"  >Payment method</h1>
		   <div class="little">
		   <h2   type="radio "style="color: #095d83 ; margin-left:-60% ; margin-top:-0.2%" > <label> Paypal </h2> </label>
		    <img  class ="" src="images/Paypal.png" alt="" width="50px" height="40px" style="margin-top:-6.6% ; margin-left: 60%">
		   </div>
		   <br>
		   
		   
		  
		   
		    <div = class = "border">
		   <h2  style="color: #095d83 ; margin-left:-60%" > Card </h2>
		   <img  class ="" src="images/card.png" alt="" width="200px" height="50px" style="margin-top:-7.9% ; margin-left: 35%">

		    
	<div class="main up">
	   <div class="col1">
	   
	       <label for="cname" style = "text-align:center">Cardholder's name:</label><br>
           <input type="text" id="cname" name="cardname" placeholder="Name on card" required><br>
		   
		    <label for="ccnum">Card number:</label><br>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-1111-1111-1111" required><br>
			
			<div class="tx">
			<label for="expmonth">Expiry date:</label><br>
            <input type="text" id="expmonth" name="expmonth" placeholder="MM/YY" required>
			</div>
			<div  class = "bx">
			 <label for="cvv" >CVV</label><br>
             <input type="text" id="cvv" name="cvv" placeholder="Code" required>
			 </div>
			 
			 <input type="submit" value="Pay now" class="btn">
			
			  
			  </div>
			 
			 
			
 				
	   </div>
	  </div>
	</div>
	
	
	</div>
	
	
	
	
</body>

</html>