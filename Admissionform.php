<?php include('include/header.php'); ?>
<?php 
if (isset($_FILES['lfile'])){
	if(!isset($_POST['EntID']) || trim($_POST['EntID']) == ""){
	?>
<script type="text/javascript">
alert('Invalid Entrance Exam Number')
</script>
<?php	
	}else{
		
		$uploadPassp = $dbo->UploadFile('lfile',1000000,true,true,$extr=".jpg");
		if($uploadPassp['Success'] == false){
				?>
	<script type="text/javascript">
alert('Invalid Image (must not be an image file and not greater than 1000KB')
</script>
<?php
		}else{
			$attn = "";
			$passp = $uploadPassp['Filename'];
			if(trim($_POST['SchAttendn']) != "nill"){
				$att = (int)$_POST['SchAttendn'];
				for($d=1; $d <= $att; $d++){
					for($s=2; $s<5; $s++){
						$attn .= ";".$_POST['input'.$d.$s];
					}
					$attn .= "~";
				}
			}
			$regNo = $_POST['EntID']."/".rand(100,1000);
			$nm = $_POST['sur'].", ".$_POST['first']." ".$_POST['other'];
			$inst = $dbo -> Insert2DbTb(array('EntID' => $_POST['EntID'],
		                           'FullName' => $nm,
		                           'Gender' => $_POST['Gender'],
		                           'DOB' => $_POST['DOB'],
		                           'POB' => $_POST['POB'],
		                           'Nat' => $_POST['Nat'],
		                           'State' => $_POST['State'],
		                           'LGA' => $_POST['LGA'],
		                           'AdminsTo' => $_POST['AdminsTo'],
		                           'SchAttend' => $attn,
		                           'GName' => $_POST['GName'],
		                           'GPhone' => $_POST['GPhone'],
		                           'GAddr' => $_POST['GAddr'],
		                           'NKName' => $_POST['NKName'],
		                           'NKPhone' => $_POST['NKPhone'],
		                           'NKAddr' => $_POST['NKAddr'],
		                           
		                           'Geno' => $_POST['Geno'],
		                           'BldGrp' => $_POST['BldGrp'],
		                           'Des' => $_POST['Des'],
		                           'Spt' => $_POST['Spt'],
								   'Hob' => $_POST['Hob'],
								   'passp' => $passp,
								   'MotSpch' => $_POST['MotSpch'],
								   'RegNo' => $regNo
		                           )
		                    ,"studinfo_tb");
							
			if($inst == "#"){
				$phpf->redirect("index.php?nm=".urlencode($nm)."&rn=".urlencode($regNo));
			}
		}
		
	 
	}
?>
<?php	
}else{
	if(isset($_POST['submit'])){
	?>
	<script type="text/javascript">
alert('No Image file found')
</script>
<?php	
	}
}

?>
<p>Carefully fill the form, you will be responsible for any error. After completing all fields in all the categories click the Submit button to submit form. Print the confirmation page to complete your registration in the school.</p>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" name="frm" id="form1">
<!--Entranse Exam ID-->
<div><label>Entrance Exam ID*: <input type="text" style="width:200px" name="EntID" <?php echo $ELE  ?> /></label></div>
<br />
<!--Personal Details Dropdown-->
<div  onmouseover="_('linedivp').className = 'RoundGradientHover'" onmouseout="_('linedivp').className = 'RoundGradient2'" style="cursor:pointer" onclick="TSHFE('persn',20,'CSrc(\'persnImg\',\'images/dropdownimg.png\')','CSrc(\'persnImg\',\'images/dropdownimgup.png\')')" >
<table style=" width:100%">
<tr>
  <td width="100" style="font-size:1.1em; font-weight:bold" >Personal Details</td>
  <td width="490" ><div class="RoundGradient2" style="width:100%; margin:auto; height:1px" id="linedivp"></div></td>
  <td width="30"><img src="images/dropdownimgup.png" id="persnImg"  /></td>
</tr>
</table>
</div>
<!--Personal Details Div-->
<div id="persn"  style="display:none">
<table style="width:97%; margin:auto">
  <tr>
    <td width="67%" style="vertical-align:top">
    
    <!--Name-->
    <div>
       <label>Full Name (SN|FN|ON)*: 
            <input type="text"  style="width:80px" name="sur" <?php echo $ELE  ?> /></label>
            <label><input type="text"  style="width:80px" name="first" <?php echo $ELE  ?> /></label>
            <label><input type="text"  style="width:80px" name="other" <?php echo $ELE  ?> /></label>
    </div>
    
    <!--Gender/DOB-->
    <div style="margin-top:10px">
       <label>Gender*: 
          <select name="Gender"  style="width:125px" <?php echo $ELE  ?> >
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
       </label> 
       <label>DOB*: <input type="text" name="DOB"  style="width:130px" <?php echo $ELE  ?> /></label><!--<img src="images/browse.png"  />-->
    </div>
    
   <!-- POB/Nationality-->
   <div style="margin-top:10px">
       <label>POB*: 
          <input name="POB" type="text"  style="width:130px" <?php echo $ELE  ?> />
       </label> 
       <label>Nationality*: <input type="text" name="Nat"  style="width:130px" <?php echo $ELE  ?> /></label>
    </div>
    
    <!--State/LGA-->
     <div style="margin-top:10px">
       <label>State*: 
          <select  style="width:150px" <?php echo $ELE  ?>  >
            <option value="Akwa Ibom">Akwa Ibom</option>
            <option value="Abia">Abia</option>            <option value="Adamawa">Adamawa</option><option value="Anambra">Anambra</option><option value="Bauchi">Bauchi</option><option value="Benue">Benue</option><option value="Bayelsa">Bayelsa</option><option value="Cross-river">Cross-river</option><option value="Delta">Delta</option><option value="Ed0">Edo</option><option value="Enugu">Enugu</option><option value="Ebonyi">Ebonyi</option><option value="Ekiti">Ekiti</option><option value="Gombe">Gombe</option><option value="Imo">Imo</option><option value="Jigawa">Jigawa</option><option value="Kaduna">Kaduna</option><option value="Kano">Kano</option><option value="Katsina">Katsina</option><option value="Kebbi">Kebbi</option><option value="Kogi">Kogi</option><option value="Kwara">Kwara</option><option value="Lagos">Lagos</option><option value="Nasarawa">Nasarawa</option><option value="Niger">Niger</option><option value="Ogun">Ogun</option><option value="Ondo">Ondo</option><option value="Osun">Osun</option><option value="Oyo">Oyo</option><option value="Plateau">Plateau</option><option value="Rivers">Rivers</option><option value="Sokoto">Sokoto</option><option value="Taraba">Taraba</option><option value="Yobe">Yobe</option><option value="Zamfara">Zamfara</option><option value="FCT">Abuja</option>
          </select>
       </label> 
       <label>LGA*: 
           <input type="text" name="LGA"  style="width:130px" <?php echo $ELE  ?> /></label>
       </label>
    </div>
    
    </td>
    <td width="33%">
    <!--<form action="Admissionform.php" enctype="multipart/form-data" method="post" name="upload" id="upform" onsubmit="alert('aaa')">-->
    <!--Passport-->
    <div style="width:100%">
      <!-- <img src="images/42-15523334.jpg" style=" margin-left:38px; width:120px; height:120px" class="RoundGradient2" id="passp" />-->
      <div style="width:120px; margin-left:38px; text-align:center">Select a Passport Photgraph</div>
       <div style="width:100%">
      <div><table style="margin:auto" onClick="LF('lfile','loadTxt','',this)" ><tr><td><img src="images/folder_remote_blue.png" width="30" height="30"  onmouseover="SE(this,40,20,'','')" onMouseOut="SE(this,30,20,'','')" /></td><td ><div style="font-size:0.8em; color:#F30" id="loadTxt" ></div></td></tr></table></div>
      <!--<input type="file" id="lfile" style="visibility:hidden" onchange="" name="lfile" />
               <input  type="file" name="lfile" id="lfile"  style=" display:none"   />-->
       </div>
    </div>
   <!-- </form>-->
    </td>
  </tr>

</table>

</div>

<br />
<!--Accademic Details Dropdown-->
<div  onmouseover="_('linedivp2').className = 'RoundGradientHover'" onmouseout="_('linedivp2').className = 'RoundGradient2'" style="cursor:pointer"onclick="TSHFE('acada',20,'CSrc(\'acadaImg\',\'images/dropdownimg.png\')','CSrc(\'acadaImg\',\'images/dropdownimgup.png\')')" >
<table style=" width:100%">
<tr>
  <td width="114" style="font-size:1.1em; font-weight:bold" >Accademic Details</td>
  <td width="476" ><div class="RoundGradient2" style="width:100%; margin:auto; height:1px" id="linedivp2"></div></td>
  <td width="30"><img src="images/dropdownimgup.png" id="acadaImg"  /></td>
</tr>
</table>
</div>
<!--Accademic Details Div-->
<div id="acada"  style="display:none">
    <div style="text-align:center">
    <!--Admited into-->
       <div>
       <label>Admission into: 
            <select name="AdminsTo" style="width:150px" <?php echo $ELE  ?> >
            <option value="Pry 1">Pry 1</option>
            <option value="Pry 2">Pry 2</option>
            <option value="Pry 3">Pry 3</option>
            <option value="Pry 4">Pry 4</option>
            <option value="Pry 5">Pry 5</option>
            <option value="Pry 6">Pry 6</option>
            <option value="JSS 1">JSS 1</option>
            <option value="JSS 2">JSS 2</option>
            <option value="JSS 3">JSS 3</option>
            <option value="SSS 1">SSS 1</option>
            <option value="SSS 2">SSS 2</option>
            <option value="SSS 3">SSS 3</option>
          </select>
            </label>
       </div>
       <!--number of Attended School Drop down-->
       <script type="text/javascript">
	     function LoadAcadaTb(ITem){
			  
			 var elemtb = _('acadaTb');
			 if (ITem.value == 'nill'){// if nothing
				 FE(elemtb,'out',20,'','_(\'acadaTb\').style.display = \'none\'');
			 }else{
				 
				   var val = Number(ITem.value);
				 
				    
				   //clear all element of the table
				   var len = elemtb.childNodes.length;
				   for(p = 0; p < len; p++){
					   elemtb.removeChild(elemtb.childNodes.item(0));
				   }
				   
				   //create new header
				  // document.getElementById('').insertRow(0);  
				   var trh = document.createElement('tr');
				   trh.setAttribute('style','text-align:center; font-weight:bold; background-color:#93C1EF');
				   var th0 = document.createElement('th');
				   th0.setAttribute('width','35');
				   th0.setAttribute('style','text-align:center');
				   th0.innerHTML = '';
				   trh.appendChild(th0);
				   var th = document.createElement('th')
				   th.setAttribute('width','221')
				   th.innerHTML = 'School';
				   trh.appendChild(th);
				   var th2 = document.createElement('th')
				   th2.setAttribute('width','145')
				   th2.innerHTML = 'OverAll Grade';
				   trh.appendChild(th2);
					var th3 = document.createElement('th')
				   th3.setAttribute('width','149')
				   th3.innerHTML = 'Year';
				   trh.appendChild(th3);
				   elemtb.appendChild(trh); 
				   /*<th width="35"></th>
               <th width="221">School</th>
               <th width="145">OverAll Grade</th>
               <th width="119">Year</th>*/
					
					 //create dynamic rows
				   for(j = 1; j <= val; j++){
					   
					   var tr = document.createElement('tr');
					   
					   for (i = 1; i < 5; i++){
						 var td1 = document.createElement('td');
						 if(i == 1){
							td1.innerHTML = String(j); 
						 }else{
							  var input1 = document.createElement('input');
						 input1.setAttribute('type','text');
						 input1.setAttribute('style','border:none; width:99%');
						 input1.setAttribute('onfocus','_(\'acadaTb\').className = \'RoundGradientHover\'');
						 input1.setAttribute('onblur','_(\'acadaTb\').className = \'RoundGradient2\'');
						 input1.setAttribute('name','input' + String(j) + String(i));
						 td1.appendChild(input1);
						 }
						
						 tr.appendChild(td1);
						 
					   }
					   
					  elemtb.appendChild(tr); 
				   }
				    
				   SO(0,elemtb);
				  SH(elemtb,1);
				  FE(elemtb,'in',20,'','');
			 }
		 }
		
	   </script>
       <div style="margin-top:10px">
       <label>School Attended: 
       <select id="SchAttendn" name="SchAttendn"  style="width:150px" <?php echo $ELE  ?> onchange="LoadAcadaTb(this)" id="ss">
            <option  selected="selected" value="nill" >Nill</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
          </select>
            </label>
       </div>

       <!--Attended School Details-->
       <div  style="margin-top:10px">
          <table id="acadaTb" width="550" style=" margin:auto;border:#93C1EF solid thin; border-collapse:collapse; background-color:#FFF;display:none" border="1" bordercolor="#93C1EF" class="RoundGradient2"   onfocus="_(this).className = 'RoundGradientHover'" onblur="_(this).className = 'RoundGradient2'" >
             <tr style="text-align:center; font-weight:bold; background-color:#93C1EF">
             <th width="35"></th>
               <th width="221">School</th>
               <th width="145">OverAll Grade</th>
               <th width="149">Year</th>
             </tr>
             
            
          </table>
       </div>
       
    </div>

</div>
       <script type="text/javascript">
	    LoadAcadaTb(_('ss'))
	/*	document.onmousedown = checkelement(window.event);
		function checkelement(e){
			
			var ret = null;
			if (e.srcElement) {
			ret = e.srcElement;
			}
			else if (e.target) {
			ret = e.target;
			}
			while (!ret.id && ret) {
			ret = ret.parentNode;
			}
			alert(ret)
		}*/
	   </script>
<br />
<!--Guadian/NOK Details Dropdown-->
<div  onmouseover="_('linedivp3').className = 'RoundGradientHover'" onmouseout="_('linedivp3').className = 'RoundGradient2'" style="cursor:pointer" onclick="TSHFE('guard',20,'CSrc(\'guardImg\',\'images/dropdownimg.png\')','CSrc(\'guardImg\',\'images/dropdownimgup.png\')')">
<table style=" width:100%">
<tr>
  <td width="180" style="font-size:1.1em; font-weight:bold" >Guardian / Next of Kin Details</td>
  <td width="410" ><div class="RoundGradient2" style="width:100%; margin:auto; height:1px" id="linedivp3"></div></td>
  <td width="30"><img src="images/dropdownimgup.png" id="guardImg"  /></td>
</tr>
</table>
</div>
<!--Guadian/NOK Details Div-->
<div id="guard"  style="display:none">
<table style="width:90%; margin:auto; text-align:center">
  <tr>
    <td width="67%" style="vertical-align:top">
    

    
    <!--Names-->
    <div style="margin-top:10px">
       <label>Guardian Name: 
          <input type="text" style="width:150px" <?php echo $ELE  ?> name="GName" />
       </label> 
       <label>Next of Kin Name: <input type="text"  style="width:150px" <?php echo $ELE  ?> name="NKName" /></label>
    </div>
    
    
     <!--Phone Numbers-->
    <div style="margin-top:10px">
       <label>Guardian Phone No.: 
          <input type="text" style="width:150px" <?php echo $ELE  ?>  name="GPhone"/>
       </label> 
       <label>Next of Kin Phone No.: <input type="text" style="width:150px" <?php echo $ELE  ?> name="NKPhone" /></label>
    </div>
    
         <!--Address-->
    <div style="margin-top:10px; vertical-align:top">
       <label>
       <div style="width:100px; float:left">Guardian Address: </div>
          <div style="width:auto; float:left"><textarea  style="width:150px" <?php echo $ELE  ?> name="GAddr"></textarea>
          </div>
       </label> 
       <label style="">
       <div style="width:120px; float:left">Next of Kin Address:</div> 
       <div style="width:auto; float:left"><textarea  style="width:150px" <?php echo $ELE  ?> name="NKAddr" ></textarea>
       </div>
       </label>
    </div>
    
    </td>
  
  </tr>

</table>

</div>
<div style="clear:both"></div>

<br />
<!--Medical Details Dropdown-->
<div  onmouseover="_('linedivp4').className = 'RoundGradientHover'" onmouseout="_('linedivp4').className = 'RoundGradient2'" style="cursor:pointer" onclick="TSHFE('medic',20,'CSrc(\'medicImg\',\'images/dropdownimg.png\')','CSrc(\'medicImg\',\'images/dropdownimgup.png\')')" >
<table style=" width:100%">
<tr>
  <td width="96" style="font-size:1.1em; font-weight:bold" >Medical Details</td>
  <td width="494" ><div class="RoundGradient2" style="width:100%; margin:auto; height:1px" id="linedivp4"></div></td>
  <td width="30"><img src="images/dropdownimgup.png" id="medicImg"  /></td>
</tr>
</table>
</div>
<!--Medical Details Div-->
<div id="medic"  style="display:none">
    <div style="text-align:center">
    <!--Genotype-->
       <div>
       <label>Genotype: 
            <select name="Geno"  style="width:150px" <?php echo $ELE  ?> >
            <option value="AA">AA</option>
            <option value="AB">AB</option>
            <option value="SS">SS</option>
          </select>
       </label>
       </div>
       <!--Blood Group-->
       <div style="margin-top:10px">
       <label>Blood Group: 
       <select name="BldGrp"  style="width:150px" <?php echo $ELE  ?>>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="A">A</option>
            <option value="B">B</option>
            
          </select>
            </label>
       </div>
        <!--Desability-->
       <div style="margin-top:10px">
       <label>Desability: 
       <input name="Des" type="text"  style="width:150px" <?php echo $ELE  ?> />
            
            </label>
       </div>
      
       
    </div>

</div>

<br />
<!--Extral Curricullum Details Dropdown-->
<div  onmouseover="_('linedivp5').className = 'RoundGradientHover'" onmouseout="_('linedivp5').className = 'RoundGradient2'" style="cursor:pointer"  onclick="TSHFE('curr',20,'CSrc(\'currImg\',\'images/dropdownimg.png\')','CSrc(\'currImg\',\'images/dropdownimgup.png\')')">
<table style=" width:100%">
<tr>
  <td width="114" style="font-size:1.1em; font-weight:bold" >Extra Curriculum</td>
  <td width="476" ><div class="RoundGradient2" style="width:100%; margin:auto; height:1px" id="linedivp5"></div></td>
  <td width="30"><img src="images/dropdownimgup.png" id="currImg"  /></td>
</tr>
</table>
</div>
<!--Extral Curricullum Details Div-->
<div id="curr" style="display:none">
    <div style="text-align:center">
            <!--Sport-->
       <div style="margin-top:10px">
       <label>Sport: 
       <input name="Spt" type="text" style="width:150px" <?php echo $ELE  ?> />
            
            </label>
       </div>
       
              <!--Hobbies-->
       <div style="margin-top:10px">
       <label>Hobbies: 
       <input type="text" name="Hob"  style="width:150px" <?php echo $ELE  ?> />
            
            </label>
       </div>
       
       <br />
        <!--Motivational Speech-->
       <div style="margin-top:10px">
      <div> Motivational Speech</div>
       <div><textarea name="MotSpch"   rows="5" style="width:200px" <?php echo $ELE  ?> ></textarea></div>
         
       </div>
      
       
    </div>

</div>

<br />
<br />
<!--Submit button-->
<div>
    <div style="text-align:center">
           <input type="submit" class="RoundGradient2" style="background-color:#93C1EF; color:#FFF; font-weight:bold" value="Submit"   onmouseover="_(this).className = 'RoundGradientHover'" onmouseout="_(this).className = 'RoundGradient2'" name="submit"   />
    </div>
    
</div>
</form>

<br />
 <?php include('include/footer.php'); ?>             