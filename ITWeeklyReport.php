<?php


?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Welcome !</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    
                   
                </ul>
            </div>
        </div>
    </nav>
   

    </div>
     <form method="POST" action="add.php">
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Date:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="csedate" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Name:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="csename" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Inquirey From Count:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="csemstudtask" required>
                    </div>
                </div>     
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Feedback From Count:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="csemstudtask" required>
                    </div>
                </div>  
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">CISEH Broture:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="csemstudtask" required>
                    </div>
                </div>  
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">CPTE Broture:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="csemstudtask" required>
                    </div>
                </div>    
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">CAAD Broture:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="csemstudtask" required>
                    </div>
                </div>       
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Fees Pending:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="csemstudtask" required>
                    </div>
                </div> 
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Internal Discussion:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="csemstudtask" required>
                    </div>
                </div>   
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Encouragement Ideas:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="csemstudtask" required>
                    </div>
                </div> 
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Exam Schedule:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="csemstudtask" required>
                    </div>
                </div>   
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Certificate Status:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="csemstudtask" required>
                    </div>
                </div>    
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Feedback From Students:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="csemstudtask" required>
                    </div>
                </div>           
        



            </div> 
            </div>
            <center>
            <div class="modal-footer">

        <button type="reset" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Reset</button>
         <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>

         </center>
            </form>

  <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
