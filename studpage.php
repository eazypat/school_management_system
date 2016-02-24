<?php //require('phplb.php'); ?>
<?php include('include/header.php');
//echo $_SERVER['PHP_SELF'];
$mnuEvents = "onMouseOver=\"MnuHoverChg(this,'Hover')\" onMouseOut=\"MnuHoverChg(this,'')\" onClick=\"DisplayCont(this)\"";
$regNo = $_GET['rn'];
$rst = $dbo->Select4rmdbtbFirstRw("studinfo_tb","","RegNo = '".$regNo."'");
$arrr = explode(",",$rst['FullName']);
$FN = $arrr[0];
 ?>


<div>
<!--Top Greeting and student details-->
<table style="float:left">
  <tr>
     <td><img src="images/emote_wink.png"/></td> <td style="font-size:2.5em; color:#96CC26; font-weight:bold; font-style:italic">Welcome</td>
  </tr>
</table>
   <table style="float:right; text-align:center">
      <tr>
          <td><img src="<?php echo $rst['passp'];   ?>" width="40" height="40" class="RoundGradient2" /></td>
      </tr>
      <tr>
          <td><?php echo $rst['FullName'];   ?></td>
      </tr>
      <tr>
          <td><span><?php echo $regNo;   ?></span></td>
      </tr>
   </table>
<div style="clear:both"></div>
  
  <!--Content-->
  <br />
 <div>
  <!-- menu side-->
  <div style="width:20%; float:left">
  <script language="javascript" type="text/javascript">
  <?php echo "var regNo = '" . $regNo."';"; ?>
   var CheckRst =  new function(){
	  this.Ajax = new TaquaAjax;
	  this.Check = function(studclass, term){
		  SH('loaderPage',1);
		  _('txtLoad').innerHTML = "Loading Result ...";
		  var ajaxpg = "checkRst.php";
		  var pstdata = "sclass="+escape(studclass) + "&term="+escape(term)+ "&reg="+escape(regNo);
		  //alert(pstdata);
		CheckRst.Ajax.PostResponse(pstdata,ajaxpg,CheckRst.HandleRst,"text",CheckRst.HandleErr);
	  }
	  
	  this.HandleRst = function(res){
		  SH('loaderPage',0);
		  if(res != "#"){
	    // document.location = 'Admissionform.php';
		SH('rstTbDiv',1);
		
		var rtn = res.split("~");
		if(trim(rtn[1]) == "0"){
			_('position').innerHTML = "";
			_('percentage').innerHTML =  "";
		_('rstgrid').innerHTML =  "";
		_('spt').innerHTML = "";
		_('quiz').innerHTML = "";
		_('comment').innerHTML = "";
		SH('approved',0);
		return;
		}
		_('position').innerHTML = "<span style=\"color:#F60\">Fourth</span> Position";
		_('percentage').innerHTML =  rtn[1] + "%";
		_('rstgrid').innerHTML =  rtn[0];
		_('spt').innerHTML = "Excelent";
		_('quiz').innerHTML = (Number(rtn[1]) > 50)?"Good":"Fair";
		_('comment').innerHTML = CheckRst.GetComment(Number(rtn[1]));
		SH('approved',1);
		//alert(res);
		  }else{
			alert("Problem Loading Result");  
		  }
       }
	   
	   this.GetComment = function(score){
		   if(score <= 30){
		return "Very Poor Result, To Repeat Class";
	}else if(score > 30 && $score <= 40){
		return "Poor Result, You need to work hard";
	}else if(score > 40 && $score <= 49){
		return "Fair Result, Work harder next time";
	}else if(score > 49 && $score <= 60){
		return "Good Result, You can still do better";
	}else if(score > 60 && $score <= 79){
		return "Very Good Result, Keep it up";
	}else{
		return "Excelent, Keep it up";
	}
	   }
	   
	   this.HandleErr = function(res){
		   SH('loaderPage',0);
		   alert(res);
	   }
   }
  
			     function DesableAll(CB){
					 if(CB.checked){
						_('inregno').disabled= "disabled" 
					 }else{
						_('inregno').disabled= "" 
					 }
					
				 }
				 
				 function ChkDisplayRst(All,type){
					 //alert('ss');
					 if (_('allstud')){
						 document.location = 'allstudRst.php'
						 document.getElementById().selectedIndex
					 }else{
						 var term = _('term').options[_('term').selectedIndex].value;
						 var stClass = _('studclass').options[_('studclass').selectedIndex].value
						 _('studRstH').innerHTML =stClass +" <span style=\"color:#F60\">"+term+" Term</span> Result";
						 SH('studRstH',1);
						 CheckRst.Check(stClass,term);
					 }
				 }
	</script>
  <script type="text/javascript">
   var curmnu = 'vR';
      function DisplayCont(mnu){
		 curmnu = mnu.id;
		 var mns = new Array('vR','Ass','Box');
		 for (i = 0; i< mns.length ;i++){
			 if (mns[i] != curmnu){
				 _(mns[i]).src = 'images/' + mns[i] + '.png';
			 }
		 }
		 
		 function Checkbrowser(arrItem){
			 if(window.ActiveXObject){
				 SMC(arrItem);
			 }else{
				 SMCFE(arrItem);
			 }
			 
		 }
		 
		 if (curmnu == 'vR'){
			 Checkbrowser(new Array('rstC','AssC','BoxC')); 
		 }else if(curmnu == 'Ass'){
			 //SMCFE();
			 Checkbrowser(new Array('AssC','rstC','BoxC'));
		 }else{
			 //SMCFE();
			 Checkbrowser(new Array('BoxC','AssC','rstC'));
		 }
		 
	  }
  	   function MnuHoverChg(mnu,type){
		    var id = mnu.id;
			if (curmnu != id){
				 if(window.ActiveXObject){
				     CSrc(id,'images/' + id + type + '.png');
			       }else{
				    FE(mnu,'in',20,'CSrc(\'' + id + '\',\'images/' + id + type + '.png\')','');
			      }
					
				
				
		   } 
		 }
  </script>
  <!--Menus-->
      <table style="margin:auto; width:auto">
         <tr>
            <td><img src="images/vRHover.png" id="vR" <?php echo $mnuEvents;  ?>  /></td>
         </tr>
         <tr>
            <td><img src="images/Ass.png"  id="Ass" <?php echo $mnuEvents;  ?>  /></td>
         </tr>
         <tr>
            <td><img src="images/Box.png"  id="Box" <?php echo $mnuEvents;  ?>  /></td>
         </tr>
      </table>
  </div>
   <!-- content side-->
   <div style="width:80%; float:right"> <!--508px-->
     <!--Result-->
    <?php include("include/resultCheck.php") ?>
     
     <!--Assignment-->
     <div style="text-align:center; display:none" id="AssC">
       <!--Assigment Header-->
       <div style="width:508px; margin:auto; background:url(images/Munbaremptysub.png) no-repeat; height:30px;">
             <div style=" padding-left:8px">
               <table style="width:auto; margin:auto">
                                   <tr>
                  <td>Filter: </td>
                  <td><input type="text"  style="width:150px" <?php echo $ELE  ?> />
                    </td>
                
                <td>Sort By: </td>
                 <td><select  style="width:auto" <?php echo $ELE  ?> >
                <option>Topic</option>
                <option>Date</option>
                <option>Subject</option>
                <option>Teacher</option>
                <option>Submission Date</option>
              </select>
                <label><input type="radio" value="ASC" name="ascdesc"  checked="checked" <?php echo $ELE  ?> />Asc</label><label><input type="radio" value="DESC" name="ascdesc"  <?php echo $ELE  ?> />Desc</label></td>
                <td style="padding-left:8px"><img title="Load Assignment" src="images/Assbtn.png" style="width:25px; height:25px" onMouseOver="SE(this,31,20,'','')" onMouseOut="SE(this,25,20,'','')" /></td>
                </tr>
                </table>
           </div>
           
       </div>
       <!--Body-->
       <div style="width:508px; height:390px; margin-top:10px; background-color:#FFF" class="RoundGradient2">
       <script type="text/javascript">
	    
	  function ShowAss(ID){
		  _('aTopic').innerHTML = _('Topic'+ID).innerHTML;
		  _('aADate').innerHTML = _('dt'+ID).innerHTML;
		   _('aSubj').innerHTML = _('Subj'+ID).value;
		   _('aTeacher').innerHTML = _('Teacher'+ID).value;
		  _('aSubDate').innerHTML = _('SubDate'+ID).value;
		  _('aStatus').innerHTML = _('Status'+ID).value;
		 // alert(_('Status'+ID).value);
		  _('aCont').innerHTML = _('Cont'+ID).value;
		  Status.currSubmit = ID;
	  }
	  
	  var Status = new function(){
		this.currSubmit = 0;  
		 this.Ajax = new TaquaAjax;
	  this.Change = function(){
		  if(Status.currSubmit == 0){
			 return; 
		  }
		  SH('loaderPage',1);
		  _('txtLoad').innerHTML = "Updating Assignment Status ...";
		  var ajaxpg = "checkRst.php";
		  var pstdata = "id="+escape(Status.currSubmit);
		  //alert(pstdata);
		CheckRst.Ajax.PostResponse(pstdata,ajaxpg,Status.HandleRst,"text",Status.HandleErr);
	  }
	  
	  this.HandleRst = function(res){
		   SH('loaderPage',0);
		  if(trim(res) == "#"){
			  _('aStatus').innerHTML = "Submitted";
			  _('Status'+Status.currSubmit).value = "Submitted";
			  alert("Status Updated Successfully");
		  }else{
			 alert(res); 
		  }
	  }
	  
	   this.HandleErr = function(res){
		  SH('loaderPage',0);
	  }
	  }
	   
	   </script>
           <!--Assignment List-->
           <div style="width:36%; height:350px; float:left; margin-left:5px; margin-top:5px; cursor:pointer" id="asslist" class="overflowdiv" >
           <?php
		   $rst_info1 = $dbo -> Select4rmdbtb("ass_tb","","RegNo LIKE '%".$regNo."%'");
		   if(is_array($rst_info1)){
			   while($rst = mysql_fetch_array($rst_info1[0])){
				  ?>
                  <div class="AssItem" style="margin-top:4px" onclick="ShowAss(<?php echo $rst['ID'] ?>)">
                 <div style="width:30%; float:left; overflow:hidden; color:#F60" id="dt<?php echo $rst['ID'] ?>"><?php echo $rst['ADate'] ?></div>
                 <div style="width:68%; float:right; overflow:hidden; text-align:left"  id="Topic<?php echo $rst['ID'] ?>" ><?php echo $rst['Topic'] ?></div>
                 <input type="hidden" id="Subj<?php echo $rst['ID'] ?>" value="<?php echo $rst['Subj'] ?>"  />
                  <input type="hidden" id="Teacher<?php echo $rst['ID'] ?>" value="<?php echo $rst['Teacher'] ?>"  />
                   <input type="hidden" id="SubDate<?php echo $rst['ID'] ?>" value="<?php echo $rst['SubDate'] ?>"  />
                    <input type="hidden" id="Status<?php echo $rst['ID'] ?>" value="<?php echo $rst['Status'] ?>"  />
                     <input type="hidden" id="Cont<?php echo $rst['ID'] ?>" value="<?php echo $rst['Cont'] ?>"  />
                 <div style="clear:both"></div>
               </div>
                  
                  <?php   
			   }
		   }
		     ?>
           
              <!-- <div class="AssItem" style="margin-top:4px">
                 <div style="width:30%; float:left; overflow:hidden; color:#F60">2/07/2013</div>
                 <div style="width:68%; float:right; overflow:hidden; text-align:left">Register all the keke in Akwa-Ibom State</div>
                 <div style="clear:both"></div>
               </div>
               <div class="AssItem" style="margin-top:4px">
                 <div style="width:30%; float:left; overflow:hidden; color:#F60">12/07/2013</div>
                 <div style="width:68%; float:right; overflow:hidden; text-align:left">Register all the keke </div>
                 <div style="clear:both"></div>
               </div>
               <div class="AssItem" style="margin-top:4px">
                 <div style="width:30%; float:left; overflow:hidden; color:#F60">2/07/2013</div>
                 <div style="width:68%; float:right; overflow:hidden; text-align:left">Register all the keke in Akwa-Ibom State Register all the keke in Akwa-Ibom State</div>
                 <div style="clear:both"></div>
               </div>
               <div class="AssItem" style="margin-top:4px">
                 <div style="width:30%; float:left; overflow:hidden; color:#F60">2/07/2013</div>
                 <div style="width:68%; float:right; overflow:hidden; text-align:left">Register all the keke in Akwa-Ibom State</div>
                 <div style="clear:both"></div>
               </div>
               <div class="AssItem" style="margin-top:4px">
                 <div style="width:30%; float:left; overflow:hidden; color:#F60">2/07/2013</div>
                 <div style="width:68%; float:right; overflow:hidden; text-align:left">Register all the keke in Akwa-Ibom State</div>
                 <div style="clear:both"></div>
               </div>
               <div class="AssItem" style="margin-top:4px">
                 <div style="width:30%; float:left; overflow:hidden; color:#F60">2/07/2013</div>
                 <div style="width:68%; float:right; overflow:hidden; text-align:left">Register all the keke in Akwa-Ibom State</div>
                 <div style="clear:both"></div>
               </div>
               <div class="AssItem" style="margin-top:4px">
                 <div style="width:30%; float:left; overflow:hidden; color:#F60">12/07/2013</div>
                 <div style="width:68%; float:right; overflow:hidden; text-align:left">Register all the keke </div>
                 <div style="clear:both"></div>
               </div>
               <div class="AssItem" style="margin-top:4px">
                 <div style="width:30%; float:left; overflow:hidden; color:#F60">2/07/2013</div>
                 <div style="width:68%; float:right; overflow:hidden; text-align:left">Register all the keke in Akwa-Ibom State Register all the keke in Akwa-Ibom State</div>
                 <div style="clear:both"></div>
               </div>
               <div class="AssItem" style="margin-top:4px">
                 <div style="width:30%; float:left; overflow:hidden; color:#F60">2/07/2013</div>
                 <div style="width:68%; float:right; overflow:hidden; text-align:left">Register all the keke in Akwa-Ibom State</div>
                 <div style="clear:both"></div>
               </div>
               <div class="AssItem" style="margin-top:4px">
                 <div style="width:30%; float:left; overflow:hidden; color:#F60">2/07/2013</div>
                 <div style="width:68%; float:right; overflow:hidden; text-align:left">Register all the keke in Akwa-Ibom State</div>
                 <div style="clear:both"></div>
               </div>
                  <div class="AssItem" style="margin-top:4px">
                 <div style="width:30%; float:left; overflow:hidden; color:#F60">2/07/2013</div>
                 <div style="width:68%; float:right; overflow:hidden; text-align:left">Register all the keke in Akwa-Ibom State</div>
                 <div style="clear:both"></div>
               </div>
               <div class="AssItem" style="margin-top:4px">
                 <div style="width:30%; float:left; overflow:hidden; color:#F60">2/07/2013</div>
                 <div style="width:68%; float:right; overflow:hidden; text-align:left">Register all the keke in Akwa-Ibom State</div>
                 <div style="clear:both"></div>
               </div>
               <div class="AssItem" style="margin-top:4px">
                 <div style="width:30%; float:left; overflow:hidden; color:#F60">12/07/2013</div>
                 <div style="width:68%; float:right; overflow:hidden; text-align:left">Register all the keke </div>
                 <div style="clear:both"></div>
               </div>
               <div class="AssItem" style="margin-top:4px">
                 <div style="width:30%; float:left; overflow:hidden; color:#F60">2/07/2013</div>
                 <div style="width:68%; float:right; overflow:hidden; text-align:left">Register all the keke in Akwa-Ibom State Register all the keke in Akwa-Ibom State</div>
                 <div style="clear:both"></div>
               </div>
               <div class="AssItem" style="margin-top:4px">
                 <div style="width:30%; float:left; overflow:hidden; color:#F60">2/07/2013</div>
                 <div style="width:68%; float:right; overflow:hidden; text-align:left">Register all the keke in Akwa-Ibom State</div>
                 <div style="clear:both"></div>
               </div>-->
           </div>
           
           <!--vertical line-->
           <div class="RoundGradient2" style="width:1px; height:350px;float:left;margin-top:5px; margin-left:10px " id="linedivp3"></div>
           <!--assignment content-->
           <div style="width:58%; height:380px; float:right; margin-right:5px; margin-top:5px; text-align:left" class="overflowdiv">
              <div style="margin-top:2px"><span style="color:#F60">Topic:</span> <span id="aTopic" style="color:#154A75"></span> </div>
              <div style="margin-top:2px"><span style="color:#F60">Date:</span> <span id="aADate" style="color:#154A75"></span></div>
              <div style="margin-top:2px"><span style="color:#F60">Subject:</span> <span id="aSubj" style="color:#154A75"></span></div>
              <div style="margin-top:2px"><span style="color:#F60">Teacher:</span> <span id="aTeacher" style="color:#154A75"></span></div>
              <div style="margin-top:2px"><span style="color:#F60">Submission Date:</span> <span id="aSubDate" style="color:#154A75"></span></div>
              <div style="margin-top:2px"><span style="color:#F60">Status:</span> <span id="aStatus" style="color:#154A75"></span></div>
              <br />
              <div class="RoundGradient2" style="width:90%; margin:auto; height:1px" id="linedivp3"></div>
              <br />
              <!--Assignment txt-->
              <div style="padding:5px; height:140px" class="overflowdiv" id="aCont">
                  
              </div>
              
              <br />
              <!--Tools-->
           <div style="text-align:center; width:114px; margin:auto" onclick="Status.Change()">
              <div style="width:50px; float:left; margin-right:5px">
                 <div><img src="images/submitedico.png" width="33" height="33" onMouseOver="SE(this,43,20,'','')" onMouseOut="SE(this,33,20,'','')" /></div>
                 <div style="text-align:center">Submited</div>
              </div>
              <!--<div style="width:50px; float:left; margin-left:5px">
                 <div><img src="images/deleteico.png" width="33" height="33" onMouseOver="SE(this,43,20,'','')" onMouseOut="SE(this,33,20,'','')" /></div>
                 <div style="text-align:center">Delete</div>
              </div>-->
              <div style="clear:both"></div>
           </div>

           </div>
           <div style="clear:both"></div>
          
       </div>
     </div>
     
     <!--Box-->
   <?php include("include/box.php") ?>

  </div>
  <div style="clear:both"></div>
 </div>
</div>
 <?php include('include/footer.php'); ?>   