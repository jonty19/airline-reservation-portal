<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <title></title>
    <?php

    $connection = mysql_connect("localhost", "root", "abc");
    $db = mysql_select_db("airline_booking_portal", $connection);
    if(isset($_POST['UploadBtn'])){
      $name = $_POST['name'];
      $id = $_POST['identity_id'];
      $email= $_POST['mail'];
      $age= $_POST['age'];
      $phone = $_POST['phonenumber'];
      $date = $_POST['date'];
      $timing = $_POST['timing'];
      $from= $_POST['fr'];
      $to = $_POST['to'];
      $query = mysql_query("insert into international(name, id_no, email, age, phone_no, date, timing, airline_from, airline_to) values ('$name', '$id','$email','$age','$phone','$date','$timing','$from','$to')");
      echo "<script type='text/javascript'>alert('submitted successfully !')</script>";
      }
      else {
        echo "<script type='text/javascript'>alert('failed !')</script>";
      }
    mysql_close($connection);

     ?>
  </head>
  <body>
    <h1 class="text-center text-info">Inter-national Flights Booking Portal</h1> <hr> <hr>
    <h3 class="text-info text-center">Fill Up Details:</h3>
    <form class="form-horizantal" role="form" name="stdInfo" action="" method="post">
      <div class="form-group">
        <label for="stdName" class="col-sm-2 control-label text-info">User Name:</label>
        <div class="col-sm-10">
          <input type="name" class="form-control" id="name" name="name" placeholder="Enter your Name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="stdName" class="col-sm-2 control-label text-info">Identity Number:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="identity" name="identity_id" placeholder="Enter your any id Number" required>
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-2 control-label text-info">Email Id:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="mail" name="mail" placeholder="Enter your Email" required>
        </div>
      </div>
      <div class="form-group">
        <label for="dates" class="col-sm-2 control-label text-info">age:</label>
        <div class="col-sm-2">
          <input type="number" name="age" max="100" required>
        </div>
      </div>
      <div class="form-group">
        <label for="stdPhoneNo" class="col-sm-2 control-label text-info">Phone Number:</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter your Phone Number" required>
        </div>
      </div>
      <div class="form-group">
        <label for="dates" class="col-sm-2 control-label text-info">Dates of booking:</label>
        <div class="col-sm-2">
          <input type="date" name="date" min="25-11-2017" max="28-11-2017" required>
        </div>
      </div>
      <div class="form-group">
        <label for="flighttiming" class="col-sm-2 control-label text-info">Flight Timing:</label>
        <div class="col-sm-10">
          <select name="timing">
          <option value="6:15">6:15</option>
          <option value="8:00">8:00</option>
          <option value="10:30">10:30</option>
          <option value="16:25">16:25</option>
          <option value="18:45">18:45</option>
          <option value="21:35">21:35</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="flighttiming" class="col-sm-2 control-label text-info">From:</label>
        <div class="col-sm-10">
          <select name="fr">
          <option value="CCU">CCU</option>
          <option value="CAA">CAA</option>
          <option value="BOM">BOM</option>
          <option value="AMD">AMD</option>
          <option value="BHU">BHU</option>
          <option value="DEL">DEL</option>
          </select>
        </div>
        <label for="flighttiming" class="col-sm-2 control-label text-info">TO:</label>
        <div class="col-sm-10">
          <select name="to">
          <option value="CCU">CCU</option>
          <option value="CAA">CAA</option>
          <option value="BOM">BOM</option>
          <option value="AMD">AMD</option>
          <option value="BHU">BHU</option>
          <option value="DEL">DEL</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
          <input type="submit" class="btn btn-info btn-lg btn-lg" name="UploadBtn" value="Upload>>">
        </div>
      </div>
    </form>
  </body>
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" ></script>
</html>
