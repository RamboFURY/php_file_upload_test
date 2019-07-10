<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Application</title>
    <style>
    footer
    {
    padding: 10px ;
    height: 30px;
    margin-top: 0px;
    background-color: #101010;
    color:#9d9d9d;
    bottom: 0;
    width: 100%;
    position: fixed; }
    </style>

</head>

<body>
  <div class="navbar navbar-inverse navbar-fixed-top">
              <div class="container">
                    <div class="navbar-header">
                      <a class="navbar-brand">Job Application</a>
                    </div>
              </div>
  </div>

  <div class="container">
      <div class="row">
          <div class="col-xs-4 col-xs-offset-4">
<br><br><br>
              <div class="panel panel-primary">
                  <div class="panel-heading"><h3>Apply Here for Job</h3></div>
                  <div class="panel-body">
                    <form method="POST" action="upload.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">

                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" required="required" name="name" placeholder="">
                        </div>
                        <div class="form-group">

                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" required="required" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="">
                            </div>


                  <div class="form-group">

                          <label for="mob">Phone</label>
                          <input type="tel" class="form-control" id="mob" required="required" name="mob"  placeholder="">
                      </div>
                      <div class="form-group">
                      <input type="file" name="fileToUpload" id="fileToUpload">
                      <br>
                      <input type="submit" class="btn btn-primary btn-block" value="Upload CV and Submit" name="submit">
                    </div>





                </form>
              </div>
            </div>
          </div>
        </div>
      </div>


  <footer class="footer">
    <div class="container">
       <center>
          <p>Job Application</p>

       </center>
    </div>
</footer>

</body>
</html>
