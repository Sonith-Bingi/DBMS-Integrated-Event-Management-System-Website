<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="style2.css" />
  </head>
  <body>
    <div class="signupSection">
  <div class="info">
     <h1><b>XZ EVENTS</b></h1>
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <h5>Events made more eventful</h5>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h4 style="background-color:DodgerBlue;">Enter Details</h4>
          </div>
          <div class="panel-body">
            <form action="connect.php" method="post">
              <div class="form-group">
                <label for="eventName">Event Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="eventName"
                  name="eventName"
                />
              </div>
              <div class="form-group">
                <label for="eventType">Event Type</label>
                <input
                  type="text"
                  class="form-control"
                  id="eventType"
                  name="eventType"
                />
              </div>
              <div class="form-group">
                <label for="location">Location</label>
                <div>
                  <label for="Hyderabad" class="radio-inline" 
                    ><input
                      type="radio"
                      name="location"
                      value="HYD"
                      id="Hyderabad"
                    />HYD</label
                  >
                  <label for="Bangalore" class="radio-inline"
                    ><input
                      type="radio"
                      name="location"
                      value="BLR"
                      id="Bangalore"
                    />BLR</label
                  >
                  <label for="Mumbai" class="radio-inline"
                    ><input
                      type="radio"
                      name="location"
                      value="MUM"
                      id="Mumbai"
                    />MUM</label
                  >
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="budget">Event Budget</label>
                <input
                  type="number"
                  class="form-control"
                  id="budget"
                  name="budget"
                />
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input
                  type="number"
                  class="form-control"
                  id="number"
                  name="number"
                />
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
        </div>
        </div>
        </div>
      </div>
    </div>
     <h1><?php echo $_SESSION['name']; ?></h1>
     <b><a href="logout.php" style="color:SlateBlue;">Logout</a></b>
  </body>
</html>
