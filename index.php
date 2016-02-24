<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>School Managemant System</title>
<script type="text/javascript" src="taqua.jl.js"></script>
<script type="text/javascript" src="taquaAjax.js"></script>
<link href="css/css.css" rel="stylesheet" type="text/css" />
</head>
<?php $mnuEvent = "onmouseover=\"X = event.clientX; Y = event.clientY;SE(this,60,20,'','SetLoc(X,Y,' + this.id + ')')\" onmouseout=\"SE(this,42,20,'','ClearInfoBx()')\"";  ?>
<body <?php if(isset($_GET['nm']) && isset($_GET['rn'])){echo "onload=\"showRegRst('".$_GET['nm']."','".$_GET['rn']."')\"";}   ?>>
<div id="loaderPage" >
  <img src="images/ajaxloading.gif" alt="Loading" />
  <div id="txtLoad" >Verifying PIN ..</div>

</div>
<div id="Container">
<!--Banner-->
  <div id="Banner">
   <img src="images/banner.png" />
  </div>
  
  <!--Left Flower-->
  <div style="width:146px; height:auto; float:left">
   <img src="images/leftflower.png" />
  </div>
  
 <!-- Menu Box-->
 <!--<div style="position:absolute; width:706px; height:44px; background:url(images/infoboxpic.png) no-repeat"></div>-->
<div style="width:708px; float:left">
  <script type="text/javascript" >
/*  function ScaleIten(ID){
var elem = _(ID);
	var W = elem.style.width;
	var elemW = Number(W.substr(0,W.length - 2));
	alert(elemW);
	//document.getElementById('').style.marginBottom
  }*/
  var showRegRst = function(nm,rn){
	  alert(nm + " , Registered Successfull \n" + "Registration Number: " + rn);
	  
  }
  
  
  
  var CheckPIN =  new function(){
	  this.Ajax = new TaquaAjax;
	  this.Check = function(pin){
		  SH('loaderPage',1);
		  _('txtLoad').innerHTML = "Verifying PIN ...";
		  var ajaxpg = "checkPin.php";
		  var pstdata = "pin="+escape(pin);
		CheckPIN.Ajax.PostResponse(pstdata,ajaxpg,CheckPIN.HandlePin,"text",CheckPIN.HandleErr);
	  }
	  
	  this.HandlePin = function(res){
		  SH('loaderPage',0);
		  if(res == "#"){
	     document.location = 'Admissionform.php';
		  }else{
			alert("Invalid PIN or the PIN has been used by another Student");  
		  }
       }
	   
	   this.HandleErr = function(res){
		   SH('loaderPage',0);
		   alert(res)
	   }
	   
	   //student login
	   
	    this.CheckReg = function(reg){
		  SH('loaderPage',1);
		   _('txtLoad').innerHTML = "Verifying Registration Number ...";
		  var ajaxpg = "checkPin.php";
		  CheckPIN.regNo = reg;
		  var pstdata = "reg="+escape(reg);
		CheckPIN.Ajax.PostResponse(pstdata,ajaxpg,CheckPIN.HandleReg,"text",CheckPIN.HandleErrReg);
	  }
	  
	   
	   this.HandleReg = function(res){
		  SH('loaderPage',0);
		  if(res == "#"){
	     document.location = 'studpage.php?rn='+escape(CheckPIN.regNo);
		  }else{
			alert("Invalid Registration Number");  
		  }
       }
	   
	   this.HandleErrReg = function(res){
		   SH('loaderPage',0);
		   alert(res)
	   }
	   
	   //student login
	   
	    this.CheckTeacher = function(PassCode){
		  SH('loaderPage',1);
		   _('txtLoad').innerHTML = "Verifying Pass-Code ...";
		  var ajaxpg = "checkPin.php";
		  CheckPIN.TPassCode = PassCode;
		  var pstdata = "TPassCode="+escape(PassCode);
		CheckPIN.Ajax.PostResponse(pstdata,ajaxpg,CheckPIN.HandleT,"text",CheckPIN.HandleErrT);
	  }
	  
	   
	   this.HandleT = function(res){
		  SH('loaderPage',0);
		  if(res == "#"){
	     document.location = 'teacherpage.php?pc='+escape(CheckPIN.TPassCode);
		  }else{
			alert("Invalid Pass-Code");
		  }
       }
	   
	   this.HandleErrT = function(res){
		   SH('loaderPage',0);
		   alert(res)
	   }
	   
	   //check principal
	   this.CheckPrinc = function(PassCode){
		  SH('loaderPage',1);
		   _('txtLoad').innerHTML = "Verifying Pass-Code ...";
		  var ajaxpg = "checkPin.php";
		 // CheckPIN.PPassCode = PassCode;
		  var pstdata = "PPassCode="+escape(PassCode);
		CheckPIN.Ajax.PostResponse(pstdata,ajaxpg,CheckPIN.HandleP,"text",CheckPIN.HandleErrP);
	  }
	  
	   
	   this.HandleP = function(res){
		  SH('loaderPage',0);
		  if(res == "#"){
	     document.location = 'principalpage.php';
		  }else{
			alert("Invalid Pass-Code");
		  }
       }
	   
	   this.HandleErrP = function(res){
		   SH('loaderPage',0);
		   alert(res)
	   }
  }
  
  
  
  
  //function open page
  function CheckLoadPage(OBJ){
	  //alert(OBJ.src);
	  if (_('inputbxHeader').innerHTML == 'Scratch Card PIN: '){
		  if(trim(_('inputfield').value) != ""){
		  CheckPIN.Check(_('inputfield').value);
		  }
		  /*document.location = 'Admissionform.php';*/
	  }else if(_('inputbxHeader').innerHTML == 'Student Registration Number: '){
		  if(trim(_('inputfield').value) != ""){
		  CheckPIN.CheckReg(_('inputfield').value);
		  }
		  //document.location = 'studpage.php';
	  }else if(_('inputbxHeader').innerHTML == 'Teacher Pass-code: '){
		  if(trim(_('inputfield').value) != ""){
		  CheckPIN.CheckTeacher(_('inputfield').value);
		  }
		  
	  }else if(_('inputbxHeader').innerHTML == 'Principal Pass-code: '){
		   if(trim(_('inputfield').value) != ""){
		  CheckPIN.CheckPrinc(_('inputfield').value);
		  }
	  }else if(_('inputbxHeader').innerHTML == 'Administrator Pass-code: '){
		  document.location = 'adminpage.php';
	  }else{
		  
	  }
	  
	  
  }
  
  //Display the input box base on the menu clicked
  function DisplayInput(mnu,headerText){
	 
	   
	    //alert('gg');
		  _('inputbxHeader').innerHTML = headerText;
		  CSrc('inputboxImg',mnu.src);
		  _('inputfield').value = '';
	      //_('inputbx').style.display = 'block';
		  if (window.ActiveXObject){// IE dont fade
			  SH('inputbx',1)
		  }else{
		  FE('inputbx','in',40,'SO(0,\'inputbx\');SH(\'inputbx\',1);','');
		  }
		 // alert(window.scrollMaxX);
		 _('inputbx').scrollIntoView();
		 _('inputfield').focus();
  }
  
  //load and display the info box
  function SetLoc(X,Y,mnu){
	  var inhtml = '';
	if (mnu == 1){
		inhtml = '<div style=\"font-size:1.3em; font-weight:bold;border-bottom:#006 solid thin;\">Admission Zone</div><div style=\"padding-left:10px; font-size:0.72em\">Register Student<br />* Personal details<br />* Academic details<br />* Guidians / Nest of Kin<br />etc.</div>';
	}else if(mnu == 2){
				inhtml = '<div style=\"font-size:1.3em; font-weight:bold;border-bottom:#006 solid thin;\">Student Zone</div><div style=\"padding-left:10px; font-size:0.72em\">* Check result<br />* View assignment<br />* Send/Recieve informations<br />etc.</div>';
	}else if(mnu == 3){
				inhtml = '<div style=\"font-size:1.3em; font-weight:bold;border-bottom:#006 solid thin;\">Teacher Zone</div><div style=\"padding-left:10px; font-size:0.72em\">* Check student result<br />* View student<br />* Load assignment<br />* Send/Recieve info.<br />etc.</div>';
	}else if(mnu == 4){
				inhtml = '<div style=\"font-size:1.3em; font-weight:bold;border-bottom:#006 solid thin;\">Principal Zone</div><div style=\"padding-left:10px; font-size:0.72em\">* Manage permission<br />* View student result<br />* View student details<br />* Send/Recieve info.<br />etc.</div>';
	}else if(mnu == 5){
				inhtml = '<div style=\"font-size:1.3em; font-weight:bold;border-bottom:#006 solid thin;\">Administrator</div><div style=\"padding-left:10px; font-size:0.72em\">* Register teachers<br />* Edit student details<br />* Edit school details<br />* General settings<br />etc.</div>';
	}else{
				inhtml = '<div style=\"font-size:1.3em; font-weight:bold;border-bottom:#006 solid thin;\">About Us</div><div style=\"padding-left:10px; font-size:0.72em\">* The school<br />* Accademic Facilities<br />* Goals and Objectives<br />etc.</div>';
	}
	  var elem = _("infobox");
	  elem.innerHTML = inhtml;
	  //set location
	  elem.style.left = (X + 10) + 'px';
	  iebody = (document.compatMode && document.compatMode != "BackConpat")? document.documentElement : document.body;
	  var winscroll = (typeof(window.scrollY) == 'undefined')? iebody.scrollTop : window.scrollY;
	  elem.style.top = ((Y - 10 + winscroll) - RV(elem.style.height)) + 'px';
	  //alert(document.body.scrollTop);
	  //set visibility
	 
	
	 if (!window.ActiveXObject){// not IE fade
		 SO(0,'infobox');
	 elem.style.display = 'block';
	  //set opacity using Fade Effect
	  FE('infobox','in',20,'','');
	 }else{
		  elem.style.display = 'block';
	 }
  }
  
  //close info box
  function ClearInfoBx(){
	 // var elem = _("infobox");
	 if (window.ActiveXObject){ //IE dont fade
		 _('infobox').style.display = 'none';
	 }else{
		  FE('infobox','out',20,'','_(\'infobox\').style.display = \'none\'');
	 }
	 
  }
  
  </script>
  <!--Menus-->
    <div style="width:708px; background:url(images/menuHeaderempty.png); height:70px">
    <table cellpadding="0" cellspacing="0">
    <tr style="cursor:pointer">
    
       <td>
           <img src="images/admmissionMnuonly.png" style="margin-top:14px; margin-bottom:14px; margin-left:38px; margin-right:38px; width:42px; height:42px" title="Admission" <?php echo $mnuEvent ?>  onclick="DisplayInput(this,'Scratch Card PIN: ')" id="1" />  
       </td>
       
       <td>
          <img src="images/studentMnuonly.png" style="margin-top:14px; margin-bottom:14px; margin-left:38px; margin-right:38px; width:42px; height:42px" title="Student"  <?php echo $mnuEvent ?> onclick="DisplayInput(this,'Student Registration Number: ')" id="2"/>       </td>
          
       <td>
          <img src="images/teacherMnuonly.png" style="margin-top:14px; margin-bottom:14px; margin-left:38px; margin-right:38px; width:42px; height:42px" title="Teacher"  <?php echo $mnuEvent ?> onclick="DisplayInput(this,'Teacher Pass-code: ')" id="3" />
       </td>
       
       <td>
         <img src="images/principalMnuonly.png" style="margin-top:14px; margin-bottom:14px; margin-left:38px; margin-right:38px; width:42px; height:42px"  title="Principal"  <?php echo $mnuEvent ?>  onclick="DisplayInput(this,'Principal Pass-code: ')" id="4" />
       </td>
       
       <td>
       <img src="images/AdminMnuonly.png" style="margin-top:14px; margin-bottom:14px; margin-left:38px; margin-right:38px; width:42px; height:42px" title="Administrator"  <?php echo $mnuEvent ?> onclick="DisplayInput(this,'Administrator Pass-code: ')" id="5"/>
       </td>
       
       <td >
         <img src="images/aboutonlymnu.png" style="margin-top:14px; margin-bottom:14px; margin-left:38px; margin-right:38px; width:42px; height:42px" title="School"  <?php echo $mnuEvent ?> onclick="document.location='aboutpage.php'" id="6"/>
       </td>
       
    </tr>
    </table>
    </div>
    
       <!--Infobox-->
    <div style="background: url(images/infoboxpic.png) no-repeat; width:203px; height:97px; position:absolute; display:none; padding:4px; color: #003" id="infobox">   
    </div>
    
    <div>
    <!--Input div-->
      <div style="width:275px; height:72px; background:url(images/inputbox.png) no-repeat; margin:auto; display:none;" id="inputbx" >
        <!--Title-->
        <div style="font-family:'Gill Sans MT Condensed', Calibri, Verdana, Candara; font-size:1.03em; padding-left:10px" id="inputbxHeader"></div>
        <!--Input-->
        <div>
           <div class="RoundGradient" style="height:33px; width:248px; margin-left:8px">
              <table cellpadding="0" cellspacing="2">
                 <tr>
                    <td width="30" style="margin-right:5px"><img src="images/lock_open.png" width="30" height="30" /></td>
                    <td width="180"><input type="password" name="logintxt" id="inputfield" style="background-color: ; width:172px" class="RoundGradient"  /></td>
                    <td width="10"><img src="images/teacherMnuonly.png" width="30" height="30" id="inputboxImg" onclick="CheckLoadPage(this)" /></td>
                 </tr>
              </table>
           </div>
        </div>
      </div>
    </div>
    
 
    <br />
    <div style="text-align:center">&copy; 2014 Project Computer Engineering</div>
    <br />
</div>
  <!--right Flower-->
  <div style="width:146px; height:auto; float:right">
   <img src="images/rightflower.png" />
  </div>
  <div style="clear:both"></div>
</div>
<br />
<div><marquee behavior="slide" direction="left" style="font-size:1.2em; color:#7AAF45;" loop="100">School session ends on the 25th of August 2013</marquee></div>
<br />
</body>
</html>