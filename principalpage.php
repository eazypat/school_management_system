<?php //require('phplb.php'); ?>
<?php include('include/header.php'); 
$mnuEvents = "onMouseOver=\"MnuHoverChg(this,'Hover')\" onMouseOut=\"MnuHoverChg(this,'')\" onClick=\"DisplayCont(this)\"";
$FN = "Princ";
?>
<noscript>
<span>Javascript is disabled: this application requires javascript see your browser documentation on how to enable Javascript</span>
</noscript>
<div>
<!--Top Greeting and student details-->
<table style="float:left">
  <tr>
     <td><img src="images/emote_smile.png"/></td> <td style="font-size:2.5em; color:#96CC26; font-weight:bold; font-style:italic">Welcome</td>
  </tr>
</table>
   <table style="float:right; text-align:center">
      <tr>
          <td><img src="images/principalMnu.png" width="40" height="40" class="RoundGradient2" /></td>
      </tr>
      <tr>
          <td>Principal</td>
      </tr>
      <tr>
          <td><span>Principal</span></td>
      </tr>
   </table>
<div style="clear:both"></div>
 <br />
 <div>
   <!-- menu side-->
  <div style="width:98%">
  <script type="text/javascript">
  var curmnu = 'Teacher';
      function DisplayCont(mnu){
		  
		 curmnu = mnu.id;
		 var mns = new Array('Teacher','Box','vS','Perm','Acc');
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
		 
		/* if (curmnu == 'vR'){
			 Checkbrowser(new Array('rstC','ViewTC','BoxC','ViewS','CalenC','AccC')); 
		 }else*/ if(curmnu == 'Teacher'){
			 //SMCFE();
			 Checkbrowser(new Array('ViewTC','BoxC','ViewS','CalenC','AccC'));
		 }else if(curmnu == 'Box'){
			 //SMCFE();
			 Checkbrowser(new Array('BoxC','ViewTC','ViewS','CalenC','AccC'));
		 }else if(curmnu == 'vS'){
			 //SMCFE();
			 Checkbrowser(new Array('ViewS','ViewTC','BoxC','CalenC','AccC'));
		}else if(curmnu == 'Acc'){
			 //SMCFE();
			 Checkbrowser(new Array('AccC','ViewS','ViewTC','BoxC','CalenC'));
		 }else{
			 //SMCFE();
			 Checkbrowser(new Array('CalenC','BoxC','ViewTC','ViewS','AccC'));
			  
		 }
		 
		
		 
		 /*if (curmnu == 'vR'){
			 if(window.ActiveXObject){
				 SMC('rstC','AssC','BoxC','ViewS','UloadC');
			 }else{
				SMCFE('rstC','AssC','BoxC','ViewS','UloadC'); 
			 }	 
		 }else if(curmnu == 'Ass'){
			 SMCFE('AssC','rstC','BoxC','ViewS','UloadC');
			 
		 }else if(curmnu == 'Box'){
			 SMCFE('BoxC','AssC','rstC','ViewS','UloadC');
			 
		 }else if(curmnu == 'vS'){
			 SMCFE('ViewS','AssC','rstC','BoxC','UloadC');
			 
		 }else{
			 SMCFE('UloadC','BoxC','AssC','rstC','ViewS');
		 }*/
		 
		/* if (curmnu == 'VR'){
			 _('Ass').src = 'images/Ass.png';
		 }else if(){
			 
		 }else{
			 
		 }*/
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
         
            <!--<td><img src="images/vRHover.png" id="vR" <?php //echo $mnuEvents;  ?>  /></td>-->
         
            <td><img src="images/TeacherHover.png"  id="Teacher" <?php echo $mnuEvents;  ?> /></td>
                  
         <td><img src="images/vS.png"  id="vS" <?php echo $mnuEvents;  ?> /></td>
            
            <td><img src="images/Box.png"  id="Box" <?php echo $mnuEvents;  ?> /></td>
          
 <td><img src="images/Perm.png"  id="Perm" <?php echo $mnuEvents;  ?> /></td>
 
 <td><img src="images/Acc.png"  id="Acc" <?php echo $mnuEvents;  ?> /></td>
      </table>
  </div>
 </div>
 
 <br />
 <!-- content side-->
   <div style="width:96%; margin:auto"> <!--508px-->
   <!--Check Students result-->
<?php //include("include/resultCheck.php") ?>

<!--Box-->
<?php include("include/box.php") ?>

<!--Load result-->
 <?php include("include/calender.php") ?>
   
 <!--View Stud-->
<?php include("include/viewstud.php") ?> 
  
  <!--Send ass-->
<?php include("include/viewTeacher.php") ?> 

  <!--Account setting-->
<?php include("include/account.php") ?> 
 
   </div>

</div>

 <?php include('include/footer.php'); ?>   