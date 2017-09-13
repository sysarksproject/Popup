<html>
<head>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
  <script data-require="jquery@*" data-semver="2.1.4" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" href="invoice.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="java.js"></script> 
   <link rel="stylesheet" href="select.css">
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
function validate_form1() {
          if (!(/^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(19|20)\d{2}$/).test(document.emp.startdate.value)) {
                    alert("You have entered an invalid date!")
                    return (false)
                }
            }
			function isNumberKey1(evt) {
                var charCode = (evt.which) ? evt.which : event.keyCode;
                if (charCode != 46 && charCode > 31 &&
                    (charCode < 48 || charCode > 57)) {
                    alert("Enter Number");
                    return false;
                }
                return true;
            }
			function myFunction() {
    document.getElementById("myForm1").reset();
}
</script>
   </head>
   <style>
   div.container1 {
    width:900px;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color:lightgrey;
    clear: left;
    text-align: center;
	width:900px;
	border:1px solid black;
	margin-top:20px;
	margin-left:25px;
    }
	</style>
<body style="background-color:lightgrey; width:1000px; border: 2px solid black;margin-left:20px;">
<div class="container">
<div>
<header>
<h4 style="color:black;">Service Report</h4>


<p style="text-align:center; color:black;">SR#<p>


<p style="text-align:center;color:black;">(auto-generates-use for invoice #????)</p>


 <div class="row customRow">
 
        <div class="col-xs-3">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left;  margin-bottom:2px;color:black;">Customer</h3>
           <select class="form-control customFormControl" placeholder="select customer or new" id="date" name="date" type="text"></select>
            
        </div>
		<div class="col-xs-3">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;color:black;">Project Refrence#</h3>
           <select class="form-control customFormControl" placeholder="PO or Ref Number(def/sel/new)" id="date" name="date" type="text" ></select>
            
        </div>
		<div class="col-xs-3">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;color:black;">Rate</h3>
           <select class="form-control customFormControl" placeholder="Default rate or Custom" id="date" name="date" type="text"></select>
            
         </div>
		 
</div>
</div>	
</header>

<h3 style="margin-right:230px; margin-left:25px;">Tasks</h3>
<?php
$conn = new mysqli('localhost', 'root', 'asha@123', 'popup') or die(mysqli_error());
 $popup_query = $conn->query("SELECT * FROM `tasks`")or (mysqli_error($conn));
while($popup_fetch = $popup_query->fetch_array()){
			?>
 <div class="parent_colapse" id="mydiv">
<button for="itemFirst" aria-expanded="false" data-target="#collapsible_obj_0" data-toggle="collapse" class="btn btn-default" style="margin-left:25px;">Task</button>
<form name="emp" id="myForm" action="addtask.php" method="POST" onsubmit="return validate_form();">
<div>

   <div class="row customRow" style="margin-left:0px; " name"itemFirst[]">
        <div class="col-xs-2">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px; margin-left:12px;">Task Date</h3>
         <input type="text"  class="form-control customFormControl" placeholder="dd/mm/yyy"  name="startdate"  type="text" style="margin-left:12px;" readonly value="<?php echo $popup_fetch['startdate']?>"></input>
        </div>
		<div class="col-xs-2">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Quantity</h3>
           <input type="number" class="form-control customFormControl"  onkeypress="return isNumberKey(evt)"  name="enddate" type="text" readonly value="<?php echo $popup_fetch['enddate']?>"></input>
            
        </div>
		<div class="col-xs-2">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">No of Hours</h3>
           <input type="number" class="form-control customFormControl" placeholder="Auto Calculate" onkeyup="sum();" id="txt1" onkeypress="return isNumberKey(evt)" readonly name="duration" type="text" value="<?php echo $popup_fetch['duration']?>"></input>
            
        </div>
		<div class="col-xs-2">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Hourly Rate</h3>
           <input type="number" class="form-control customFormControl"  onkeyup="sum();" id="txt2" onkeypress="return isNumberKey(evt)" readonly name="taskamt" type="text" value="<?php echo $popup_fetch['taskamt']?>"></input>
            
        </div>
		</div>
		<div style="height: 0px; margin-left:25px;" aria-expanded="false" id="collapsible_obj_0" class="collapse">
  <div class="row customRow">
   <div class="col-xs-5">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;margin-left:2px;">Task Amount</h3>
          <input  name="descr"  onkeypress="return isNumberKey(evt)" id="txt3"  readonly class="form-control customFormControl" value="<?php echo $popup_fetch['descr']?>"></input>
            
        </div>
		</div>
		<div class="row customRow">
		<div class="col-xs-8">
		<h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Description</h3>
		<input type="text" name="taskdetail" onkeypress="return isNumberKey(evt)" placeholder="Enter Text" readonly class="form-control customFormControl" style="height:90px; overflow-y: scroll;height: 100px;resize: none;" value="<?php echo $popup_fetch['taskdetail']?>"></input>
		</div>
		</div>
		
		

<button href="#" class="duplicate_butt" id="submit_button" style="margin-left:2px;">Add</button>
<button href="#" name="save_task">Save</button>

<button href="#" class="remove_this_div hidden_button">Remove</button>
</div>
  </div>
</form>

</div>
</div>
<?php
		}  
        ?>
<h3 style="margin-right:230px; margin-left:40px;">Expenses</h3>
<?php
$conn = new mysqli('localhost', 'root', 'asha@123', 'popup') or die(mysqli_error());
 $exp_query = $conn->query("SELECT * FROM `expenses`")or (mysqli_error($conn));
while($exp_fetch = $exp_query->fetch_array()){
			?>
<div class="parent_colapse1">
<button aria-expanded="false" data-target="#collapsible_obj1_0" data-toggle="collapse" class="btn btn-default" style="margin-left:40px;">Expense</button>
<form name="emp1" id="myForm1" action="addexpense.php" method="POST" onsubmit="return validate_form1();">
<div style="38px;">
   <div class="row customRow">
        <div class="col-xs-2">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;margin-left:33px;">Date</h3>
           <input class="form-control customFormControl" placeholder="dd/mm/yyy" id="date" name="expensedate" type="text" style="margin-left:33px;" readonly value="<?php echo $exp_fetch['expensedate']?>"></input>

        </div>
		<div class="col-xs-2">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px; margin-left:15px;">Expense Type</h3>
           <input class="form-control customFormControl" id="date" style="margin-left:15px;" name="expensetype" type="text" readonly value="<?php echo $exp_fetch['expensetype']?>"></input>
            
        </div>

   <div class="col-xs-5">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;">Expenses Description</h3>
           <input type="text" class="form-control customFormControl" id="date" placeholder="Software Description" name="expensedescr" type="text" readonly value="<?php echo $exp_fetch['expensedescr']?>"></input>
            
        </div>
		</div>
		<div style="height: 0px;" aria-expanded="false" id="collapsible_obj1_0" class="collapse">
		 <div class="row customRow">
		<div class="col-xs-3">
            <h3 style="font-size: x-small;font-weight: bold; text-align: left; margin-bottom:2px;margin-left:28px;">Expense amount</h3>
           <input type="number" class="form-control customFormControl" id="date" onkeypress="return isNumberKey1(evt)" style="margin-left:28px;" name="expenseamount"  style="margin-left:20px;" readonly value="<?php echo $exp_fetch['expenseamount']?>"></input>
		</div>
		</div>
		
<button href="#" class="duplicate_butt1" id="submit_button1" style="margin-left:28px;">Add</button>
<button href="#" name="save_expense">Save</button>
<button href="#" class="remove_this_div1 hidden_button">Remove</button>
 </div>
</div>
</form>
<br><br>
 </div>
</div>
<?php
		}  
        ?>
<div class="row customRow">
   <div class="col-xs-5">
            <h4 style="font-size:12px; text-align: left;margin-left:25px; color:black;">Technical notes(not shared with customer)</h4>
           <input type="text" class="form-control customFormControl" id="date" placeholder="Enter Text" name="date" type="text" style="height:50px;margin-bottom:15px;margin-left:25px;"></input>
            
        </div>
		</div>
		<div class="row customRow">
		<span style="width: 70px; height:52px; margin-left:370px;">
        <button style="width: 100px;">Save</button>
        <button style="width: 130px;">Submit Invoice</button>
    </span>
		<input type="checkbox" name="checkbox" id="checkbox_id" value="value"style="margin-left:40px;">
        <label for="checkbox_id">Detail Invoice?(Summary Default)</label>
		</div>
		</body>
		</html>
<script>
(function($){
  var target = "collapsible_obj_0";
  var i = 1;
  
	var appendMeDiv = $('.parent_colapse');
	var submitButton = $('#submit_button');
	
	$('.remove_this_div').hide().on('click', function(e) {
		
		$(this).closest('.parent_colapse').remove();
	});
	$('.duplicate_butt').on('click', function(e) {
		e.preventDefault();
		appendMeDiv.clone(true).insertAfter(".parent_colapse:last").find('.remove_this_div').show();	
	$(".parent_colapse:last > button").attr("data-target", "#"+target+i);
    $(".parent_colapse:last .collapse").attr("id", target+i);
    i++;
	$(document).on("click",".button",function(){
     alert();
  });
	});
	
})(jQuery);

(function($){
  var target = "collapsible_obj1_0";
  var i = 1;
  
	var appendMeDiv = $('.parent_colapse1');
	var submitButton = $('#submit_button1');
	
	$('.remove_this_div1').hide().on('click', function(e) {
		
		$(this).closest('.parent_colapse1').remove();
	});
	$('.duplicate_butt1').on('click', function(e) {
		e.preventDefault();
		appendMeDiv.clone(true).insertAfter(".parent_colapse1:last").find('.remove_this_div1').show();	
	$(".parent_colapse1:last > button").attr("data-target", "#"+target+i);
    $(".parent_colapse1:last .collapse").attr("id", target+i);
    i++;
	$(document).on("click",".button1",function(){
     alert();
  });
	});
	
})(jQuery);
  
   
</script>