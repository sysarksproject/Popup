                       <div class="modal" id="invoicemodal">
                                              <div class="modal-dialog">
                                                  <div class="modal-content">
                                                      <div class="modal-header" style="background-color:lightslategrey;">
                                                          
            </div>
            
     <body style="background-color:lightgrey; width:900px; border: 2px solid black; margin-left:20px;">
  
   <header><b style="font-size:20px;height:100%;">Employee Application</b></header>
   <form name="emp" action="" onsubmit="return validate_form();" method="post">
            <table align="center" width="70%" cellspacing="2" cellpadding="2" border="5" style="background-color:white; margin-top:30px;">
                
                <tr>
                    <td align="left" valign="top" width="41%" style="font-size:15px;">Employee Name</td>
     
                    <td width="57%" id="name">
					<div id="boy">
    <label style="font-size:15px;">Mr</label>
    <input type="text" name="itemselect" class="example" />
</div>
<div id="girl">
    <label style="font-size:15px;">Mrs</label>
    <input type="text" name="itemselect" class="example" />
</div></td>
                </tr>
				<tr>
                    <td align="left" valign="top" width="41%" style="font-size:15px;" >Gender</td>
     
                    
					<td id="gender" width="57%" style="font-size:15px;">
					<label style="font-size:15px;">Male</label>
       <input type="radio" id="male_c" class="gender">
       <label style="font-size:15px;">Female</label>
       <input type="radio" name="female_c" class="gender">
					
					
					</td>
                </tr>
				
                <tr>
                    <td align="left" valign="top" width="41%" style="font-size:15px;">Employee Number</td>
                    <td width="57%">
                        <input type="text" value="" name="num" onkeypress="return isNumberKey(event)" size="24" style="font-size:15px;"></td>
                </tr>
                <tr>
                    <td align="left" valign="top" width="41%" style="font-size:15px;">Address</td>
     
                    <td width="57%"><textarea rows="4" maxlen="200" name="S2" cols="20" style="font-size:15px;"></textarea></td>
                </tr>
				<tr>
     
                <td align="left" valign="top" width="41%" style="font-size:15px;">Contact Number</td>
                <td width="57%">
                    <input type="text" value="" onkeypress="return isNumberKey(event)" name="txtFName1" size="24" style="font-size:15px;"></td>
                </tr>
				<tr>
     
                <td align="left" valign="top" width="41%" style="font-size:15px;">Current Salary</td>
                <td width="57%">
                    <input type="text" value="" onkeypress="return isNumberKey(event)" name="txtFName1" size="24" style="font-size:15px;"></td>
                </tr>
				<tr>
     
                <td align="left" valign="top" width="41%" style="font-size:15px;">Experience</td>
                <td width="57%">
                    <input type="text" value="" onkeypress="return isNumberKey(event)" name="txtFName1" size="24" style="font-size:15px;"></td>
                </tr>
                <tr>
                    <td align="left" valign="top" width="41%" style="font-size:15px;">Job Location</td>
                    <td width="57%" style="font-size:15px;"><select name="mydropdown">
    <option value="Default">Default</option>
    <option value="Chennai">Chennai</option>
    <option value="Bangalore">Bangalore</option>
    <option value="Chennai">Pune</option>
    <option value="Bangalore">Mysore</option>
    <option value="Chennai">Chandigarh</option>
     
    </select></td>
     
     
                </tr>
     
                <tr>
                    <td align="left" valign="top" width="41%" style="font-size:15px;">Designation</td>
                    <td width="57%" style="font-size:15px;">
                        <select name="mydropdown">
    <option value="Default">Default</option>
    <option value="Systems Engineer">Systems Engineer</option>
    <option value="Senior Systems Engineer">Senior Systems Engineer</option>
    <option value="Technology Analyst">Technology Analyst</option>
    <option value="Technology Lead">Technology Lead</option>
    <option value="Project Manager">Project Manager</option>
     
     
    </select></td>
     
     
                </tr>
                <tr>
                    <td align="left" valign="top" width="41%" style="font-size:15px;">Email</td>
                    <td width="57%">
                        <input type="text" value="" name="email_id" size="24" style="font-size:15px;"></td>
                </tr>
				<tr>
 <div class="row customRow">
 <td>
   <form id="form1" runat="server">
    <input type='file' id="imgInp" style="margin-left:9px;"/></td>
   <td><img id="blah" src="#" alt="your image" style="width:100px; height:100px; margin-left:100px;" />
	</td>
	</tr>
     
                <tr>
                    <td colspan="2">
                        <p align="center">
                            <input type="submit" value="  Submit" name="B4" style="margin-top:8px;">&nbsp;&nbsp;
                           </td>
                </tr>
				
</form>
			</div>
     
            </table>
        </form>
   <br>
    </body>
	<footer></footer>
            </div>
            </div>
            

</div>