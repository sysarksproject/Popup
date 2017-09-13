<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>iBill.biz Themes</title>

    <!-- Bootstrap Core CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="../dist/css/InvoicingSystem.css">
   <link rel="stylesheet" href="../dist/css/select.css">
   <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">
     
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <script type="text/javascript">
  function validate_form() {
          if (!(/^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(19|20)\d{2}$/).test(document.emp.startdate.value)) {
                    alert("You have entered an invalid date!")
                    return (false)
                }
            }
            function isNumberKey(evt) {
                var charCode = (evt.which) ? evt.which : event.keyCode;
                if (charCode != 46 && charCode > 31 &&
                    (charCode < 48 || charCode > 57)) {
                    alert("Enter Number");
                    return false;
                }
                return true;
            }
</script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
 </head>
 <style>
 .customspanHeader {
    font-weight: bold;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    /*color :#23527c;*/
    color: #777;
    
    /*color: #333;*/
 }
 .customSpan {
    font-size: x-small;
    font-weight: bold;
 }
 .customSpanLabel {
    font-size: 12px;
    font-weight: bold;
    color: #777;
     margin-right:30px;
 }
 .customSpan {
        font-size: x-small;
        font-weight: bold;
       
    }
    
    </style>
 <body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="background-color:#394a59; color:white;"> iBill.biz</a>
                
            </div>
            
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                
                <div class="sidebar-nav navbar-collapse">
             
                   
                    <ul class="nav" id="side-menu">
                        
                        <li class="sidebar-search">
                            
                                
                            <h3 style="color:white;"><img src="../acme-logo.gif" height="40" width="40"> ACME Inc. </h3>
                            
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html" style="color:white;"><i class="fa fa-home fa-fw"></i> Home </a>
                        </li>
                        <li>
                           <a href="#" style="color:white;"><i class="fa fa-wrench fa-fw"></i> Service reports <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">         
                                 <li>  
                                 <a href="pages/Customer.html" style="color:white;">
                                     Create New</a>
                                </li>
                                <li>
                                    <a href="morris.html"style="color:white;">Open/Append Existing</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#" style="color:white;"><i class="fa fa-wrench fa-fw"></i> Setup <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html" style="color:white;">miCompany</a>
                                </li>
                                <li>
                                    <a href="buttons.html" style="color:white;">miCustomer</a>
                                </li>
                                <li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#" style="color:white;"><i class="fa fa-area-chart fa-fw"></i> Reports/Review<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html" style="color:white;">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html" style="color:white;">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html" style="color:white;">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html" style="color:white;">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html" style="color:white;"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html" style="color:white;">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                    
                
       
                </div>
                
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        
      <!--header<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->

      <!--sidebar start-->
       
        <!-- Navigation -->
       

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="color:white;">Home</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color:white;">Service Reports</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                    
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-plus fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" > <br> </div>
                                    <div>
                                         <a href="updated1.php">Create New</a>
                                 
 </div>
 </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">More Info</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-building fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>
                                         Open/Append     
                                        </div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">More Info</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color:white;">Setup</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-pencil-square-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" > <br></div>
                                    <div>
                                        <a href="" data-target="#taskmodal" data-toggle="modal" style="color:white;">MiCompany</a>
                                      <div class="modal" id="taskmodal">
                                              <div class="modal-dialog">
                                                  <div class="modal-content">
                                                      <div class="modal-header" style="background-color:lightslategrey;">
                                                          
            </div>
           
<div class="CustomDiv  col-lg-12 col-md-12 col-sm-12 col-xs-12">
   
    <div class="row customRow">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <span class="pull-left"><h3 style="color:black;font-weight:bold;"><i class="fa fa-pencil-square-o" style="font-size:30px;">Tasks</i></h3></span>
            <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle pull-right" style="opacity:1"></span></button>
        </div>
</div>

<div class="row customRow">
    <form name="emp" id="myForm" action="addtask.php" method="POST" onsubmit="return validate_form();">   
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Task Date</h3>
            <input type="text"  name="startdate" required class="form-control customFormControl">
                </div>
             </div>
		
             <div class="row customRow">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Quantity</h3>
              <input type="number" name="enddate"  value="" onkeypress="return isNumberKey(evt)" class="form-control customFormControl" />
             </div>
      </div>   
      <div class="row customRow">

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">No of Hours</h3> 
            <input type="number" name="duration" value="" onkeypress="return isNumberKey(evt)" onkeyup="sum();" id="txt1" class="form-control customFormControl"  />
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Hourly Rate</h3>
           
            <input type="number"  name="taskamt" value="" onkeypress="return isNumberKey(evt)" onkeyup="sum();" id="txt2" class="form-control customFormControl"/>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Task Amount</h3>

            <input  name="descr" onkeypress="return isNumberKey(evt)" id="txt3" readonly class="form-control customFormControl" />
        </div>
    </div>  
	
    <div class="row customRow">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Description</h3>
           
            <textarea type="text"  name="taskdetail"   class="form-control customFormControl" style="height:90px;"></textarea>
        </div>
    </div>
    
    <div class="row customRowFooterControls">
        <div class="col-lg-4 pull-right">
        <button href="#" class="btn btn-success" name="save_task">Confirm</button>
		<button  class="btn btn-success" onclick="myFunction()" value="Reset form">Refresh</button>
		</div>
        </div>
        </form>
    </div>
   
</div>
</div>
</div>
  </div>
   </div>
</div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">More Info</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">25</div>
                                    <div>
                                   <a href="" data-target="#loginmodal" data-toggle="modal" style="color:white;">MiCustomer</a>
                                          <div class="modal fade" id="loginmodal">
                                              <div class="modal-dialog">
                                                  <div class="modal-content">
                                                      <div class="modal-header" style="background-color:lightslategrey;">
                                                          
            </div>
                <div class="CustomDiv  col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="row customRow">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <span class="pull-left"><h3 style="color:black;font-weight:bold;"><i class="fa fa-plus" style="font-size:30px;">Customer Profile</i></h3></span>
            <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle pull-right" style="opacity:1"></span></button>
        </div>

    </div>
                <div class="row customRow">
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Customer ID</h3>
            <input type="text" class="form-control customFormControl" />
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Company Name</h3>
            <input type="text" class="form-control customFormControl" />
        </div>

    </div>
    <div class="row customRow">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Customer No</h3>
            <input type="text" class="form-control customFormControl" />
        </div>
      
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Contact Name</h3>
            <input type="text" class="form-control customFormControl" />
        </div> 

    </div>
    <div class="row customRow">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Address</h3>
            <input type="text" class="form-control customFormControl" />
        </div>

        
    </div>
    

    <div class="row customRow">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">State</h3>
            <select name="company" class="form-control customFormControl"></select>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">City</h3>
            <select name="company" class="form-control customFormControl"></select>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Zip</h3>
            <input type="text" class="form-control customFormControl" />
        </div>
    </div>

    <div class="row customRow">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Phone</h3>
            <input type="text" class="form-control customFormControl" />
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Fax</h3>
            
            <input type="text" class="form-control customFormControl" />
        </div>

    </div>

    <div class="row customRow">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Email</h3>
            <input type="text" class="form-control customFormControl" />
        </div>
    </div>
    <br>
    <div class="footer">
        <div class="col-lg-4 pull-right">
            <button type="button" class="w3-btn w3-green w3-margin-bottom customButton">Confirm</button>
        </div>
    </div>
</div>
</div>
</div>
</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">More Info</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color:white;">Reports/Review</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-pencil-square-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>
                                        
                                        <a href="" data-target="#expensesmodal" data-toggle="modal" style="color:white;">Open/Append</a>
                                      <div class="modal" id="expensesmodal">
                                              <div class="modal-dialog">
                                                  <div class="modal-content">
                                                      <div class="modal-header" style="background-color:lightslategrey;">
                                                          
            </div>
                                    
        <div class="CustomDiv  col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row customRow">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <span class="pull-left"><h3 style="color:black;font-weight:bold;"><i class="fa fa-users" style="font-size:30px;">Expenses</i></h3></span>
            <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle pull-right" style="opacity:1"></span></button>

        </div>
        </div>
        <div class="row customRow">
            <form name="emps" id="myform" action="addexpense.php" method="POST" onsubmit="return checkForm();"> 
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Expense Date</h3>
               
                <input  type="text" name="expensedate" value="" required class="form-control customFormControl"/>
            </div>
        </div>
        <div class="row customRow">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Expense Type</h3>
               
                <input type="text" id="click1" name="expensetype" value="" required   class="form-control customFormControl" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Expense Amount</h3>
                
                <input type="number" id="south1" name="expenseamount" required onkeypress="return isNumberKey(evt)" value=""  class="form-control customFormControl" />
            </div>  
        </div>
        <div class="row customRow">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Description</h3>
            
            <input type="text" id="north1" name="expensedescr" value="" required  class="form-control customFormControl"/>
        </div>
        </div>
        
       <div class="row customRow">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Receipts</h3>
            
         <div class="row customRow"> 
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-left">
		<a href="index.html" ><h3 style="font-size: x-small; text-align: left; margin-bottom:1px; ">Receipt 1</h3></a>
		</div>
		</div>
		<div class="row customRow">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-left">
		<a href="index.html" ><h3 style="font-size: x-small; text-align: left;margin-bottom:1px;">Receipt 2</h3></a>
		</div>
		</div>
		<div class="row customRow">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-left">
		<a href="index.html" ><h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Receipt 3</h3></a>
		</div>
		</div>
            <div class="w3-btn w3-green image-preview-input pull-left">
                <span class="glyphicon glyphicon-open"></span>
                <span>Upload Receipt</span>
                <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview" /> <!-- rename it -->
            </div>

        </div>
    </div>  
    <div class="row customRowFooterControls">        
        <div class="col-lg-4 pull-right">
           <button href="#" class="btn btn-success" name="save_expense">Confirm</button>
		<button  class="btn btn-success" onclick="myFunctions()" value="Reset form">Refresh</button>
        </div>
        </div>
  </form>
    </div>
    </div>
    </div>
    </div>  
    </div>
    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">More Info</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-pencil-square-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>
                                        Open/Append 
                                       
                                        </div>
                                </div>
                            </div>
                            
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">More Info</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
      </div>  <!-- /#page-wrapper -->

    
    
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src="../dist/js/InvoicingSystemApp.js"></script>
    <script src="../dist/js/InvoicingSystemController.js"></script>
    <script src="../dist/js/InvoicingSystemData.js"></script>
    <script src="../dist/js/InvoicingSystemService.js"></script>
  <script type="text/javascript">  
  function sum() {
            var txtFirstNumberValue = document.getElementById('txt1').value;
            var txtSecondNumberValue = document.getElementById('txt2').value;
            var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt3').value = result;
            }
        }
		function myFunction() {
    document.getElementById("myForm").reset();
}
function myFunctions() {
    document.getElementById("myform").reset();
}
</script>		

</body>

</html>
