<?php
session_start();
include 'connection.php';
          $query="SELECT * FROM users WHERE email='".$_SESSION["email"]."'";
          if( $query_run = mysqli_query($connection, $query) ){
            $row = mysqli_fetch_assoc($query_run);
            $name = $row['name'];
            }
        ?>

<html>
<head>
<title>Register | Annual Alumni Meet &middot; IIT Kharagpur</title>
<link rel="stylesheet" href="css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<style type="text/css">
   @media only screen and (min-width: 768px){
    .signup{
      padding: 5px 100px;
    }
    .mentor-reg a{
      margin-top: 30px;
      display: inline-block;
    }
    .mentor-text {
      margin-left: 60px !important;
    }
    .mentor-top {
      margin-top: 20px;
      margin-left: 60px;
      width: 860px;
      height: 60px;
      border-radius: 6px;
      margin-bottom: 20px;
    }
      .ac-mentor img{
        margin-left: 80px;
    }
    }
    @media only screen and (max-width: 468px){
      .ac-mentor img{
        margin: 0px auto;
        max-width:100%;
    }
    .mentor-top {
      max-width: 100%;
      height: 60px;
    }
   }
</style>
    <script>
    $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
  $( function() {
    $( ".datepicker" ).datepicker({ dateFormat: 'dd-mm-yy' ,maxDate: '0'});
  } );
    </script>
</head>
<body>
<div class="_wrapper">
<?php include 'navbar.php';?>
<div class="row signup">
 <form action="registerupdate.php" method="post">
      <div class="heading">
      <center>
        <h class="subheading"><b>Personal Details</b> </h>
      </center>
    </div>

      <div class="input-field col s12">

        <input value="<?php echo $row['name']; ?>"  type="text"  name="name" id="name" class="validate"  required>
         <label for="name">Name *</label>
      </div>

      <div class="input-field col s12">

        <input value="<?php echo $row['email']; ?>"  type="email"  name="email" id="email" required>
        <label for="email">Email ID *</label>
      </div>
      <div class="input-field col s12">

        <input value="<?php echo $row['address']; ?>"  type="text" name="address" id="address"  >
         <label for="address">Address </label>
      </div>
      <div class="input-field col s12">
        <input value="<?php echo $row['city']; ?>"  type="text" id="city" name="city" required>
        <label for="city">City *</label>
      </div>
      <div class="input-field col s12">


        <input value="<?php echo $row['state']; ?>"  type="text" id="state" name="state"  >
       <label for="state">State </label>
      </div>
      <div class="input-field col s12">

        <input value="<?php echo $row['country']; ?>"  type="text"  name="country" id="country" required>
         <label for="country">Country *</label>
      </div>
      <div class="input-field col s12">

        <input value="<?php echo $row['zipCode']; ?>"  type="text" id="zipcode" name="zipCode" >
       <label for="zipcode">Zip Code </label>
      </div>
      <div class="input-field col s12">

        <input value="<?php echo $row['mobile']; ?>"  type="text"  name="mobile" id="mobile" required>
          <label for="mobile">Mobile *</label>
      </div>
      <div class="col s12" style="margin-top:15px;">
         <label for="dob">DOB *</label>
        <input value="<?php echo $row['dob']; ?>"  type="date" name="dob" required id="dob">

      </div>
      <div class="input-field col s12" style="margin-bottom:30px;">

        <input value="<?php echo $row['marital']; ?>"  type="text"  name="marital" id="marital">
             <label for="marital">Marital Status</label>
      </div>

     <div class="heading">
      <center>
        <h class="subheading" ><b>Where do you work ?</b> </h>
      </center>
    </div>
      <div class="input-field col s12">

        <input value="<?php echo $row['industry']; ?>"  type="text" id="ind" name="industry"  >
          <label for="ind">Industry </label>
      </div>
      <div class="input-field col s12">

        <input value="<?php echo $row['profession']; ?>"  type="text" id="prof" name="profession" >
        <label for="prof">Profession </label>
      </div>
      <div class="input-field col s12">

        <input value="<?php echo $row['orgName']; ?>"  type="text" id="org" name="orgName" required>
        <label for="org">Organisation Name *</label>
      </div>
      <div class="input-field col s12">

        <input value="<?php echo $row['designation']; ?>"  type="text" id="desig" name="designation" required>
        <label for="desig">Designation *</label>
      </div>
      <div class="input-field col s12">

        <input value="<?php echo $row['work_city']; ?>"  type="text" id="city" name="work_city">
        <label for="city">City</label>
      </div>
      <div class="input-field col s12">

        <input value="<?php echo $row['work_state']; ?>"  type="text" id="state" name="work_state">
     <label for="state">State</label>
      </div>
      <div class="input-field col s12">

        <input value="<?php echo $row['work_country']; ?>"  type="text" id="Country" name="work_country">
            <label for="Country">Country</label>
      </div>
      <div class="input-field col s12">

        <input value="<?php echo $row['work_zipCode']; ?>"  type="text" id="zip" name="work_zipCode">
        <label for="zip">Zip Code</label>
      </div>
      <div class="input-field col s12" style="margin-bottom:30px;">

        <input value="<?php echo $row['work_address']; ?>"  type="text" id="address" name="work_address">
       <label for="address">Address</label>
      </div>
       <div class="heading">
      <center><br>
        <h class="subheading"><b>Nostalgic Section</b> </h>
      </center>
    </div>
      <div class="input-field col s12">

        <input value="<?php echo $row['rollNum']; ?>"  type="text" id="roll" name="rollNum">
      <label for="roll">Roll Number</label>
      </div>
      <div class="input-field col s12">
        <input value="<?php echo $row['joinYear']; ?>"  type="number" min="1951" max="2006" id="join" name="joinYear" required>
     <label for="join">Join Year *</label>
      </div>
      <div class="input-field col s12">

        <input value="<?php echo $row['degree']; ?>"  type="text" id="degree" name="degree" required>
        <label for="degree">Degree *</label>
      </div>
      <div class="input-field col s12">

        <input value="<?php echo $row['department']; ?>"  type="text" id="dept" name="department" required>
         <label for="dept">Department *</label>
      </div>
      <div class="input-field col s12">

        <input value="<?php echo $row['hall']; ?>"  type="text" id="hall" name="hall" required>
      <label for="hall">Hall *</label>
      </div>
      <div class="input-field col s12">
        <input value="<?php echo $row['graduatingYear']; ?>"  type="number" min="1955" max="2010" id="yog" name="graduatingYear" required>
       <label for="yog">Year of Graduating *</label>
      </div>
      <div class="input-field col s12"  style="margin-bottom:20px;">

        <input value="<?php echo $row['accompanyingNo']; ?>"  type="number" min="0" id="accompanyingNo" name="accompanyingNo">
        <label for="accompanyingNo">Accompaniments</label>
      </div>
      <div class="col l12 m12 s12">
        <button type="submit" class="btn btn-success btn-lg btn-block col l4 m5 s12" name="button" style="width:25%;float: left;">SUBMIT</button><div class="col l2 m2" style="min-width: 100px;"></div><a href="home.php" class="btn btn-success btn-lg btn-block col l4 m5 s12" style="width:25%;float: right;">Cancel</a>

      </div>
    </form>
 </div>

  </div>
  <?php include 'footer.php';?>

  </body>
  </html>