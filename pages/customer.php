<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../dist/css/InvoicingSystem.css">
   <link rel="stylesheet" href="../dist/css/select.css"> 
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <!-- Trigger the modal with a button -->
  <a data-toggle="modal" data-target="#myModal">Create New</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         
        </div>
        <div class="CustomDiv  col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="row customRow">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <span class="pull-left"><h3 style="color:black;font-weight:bold;">Customer Profile</h3></span>
            <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle pull-right" style="opacity:1"></span></button>
        </div>


    </div>
    <div class="row customRow">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <span class="customSpan">Contact Name</span>
            <input type="text" class="form-control customFormControl" />
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <span class="customSpan">Company Name</span>
            <input type="text" class="form-control customFormControl" />
        </div>

    </div>
    <div class="row customRow">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <span class="customSpan">Customer No</span>
            <input type="text" class="form-control customFormControl" />
        </div>
    </div>
    <div class="row customRow">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <span class="customSpan">Address 1</span>
            <input type="text" class="form-control customFormControl" />
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <span class="customSpan">Address 2</span>
            <input type="text" class="form-control customFormControl" />
        </div>

    </div>

    <div class="row customRow">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <span class="customSpan">State</span>
            <select name="company" class="form-control customFormControl"></select>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <span class="customSpan">City</span>
            <select name="company" class="form-control customFormControl"></select>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <span class="customSpan">Zip</span>
            <input type="text" class="form-control customFormControl" />
        </div>
    </div>


    <div class="row customRow">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <span class="customSpan">Phone</span>
            <input type="text" class="form-control customFormControl" />
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <span class="customSpan">Fax</span>
            <input type="text" class="form-control customFormControl" />
        </div>

    </div>

    <div class="row customRow">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <span class="customSpan">E-mail :</span>
            <input type="text" class="form-control customFormControl" />
        </div>
    </div>



    <!--<div class="row customRow">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">

        </div>-->
    <div class="row customRowFooterControls">
        <div class="col-lg-4 pull-right">
            <button type="button" class="w3-btn w3-green w3-margin-bottom customButton">Confirm</button>
        </div>
    </div>
</div>
        
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>
