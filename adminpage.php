<?php //require('phplb.php'); ?>
<?php include('include/header.php'); 
$mnuEvents = "onMouseOver=\"MnuHoverChg(this,'Hover')\" onMouseOut=\"MnuHoverChg(this,'')\" onClick=\"DisplayCont(this)\"";
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
          <td><img src="images/42-15217478.jpg" width="40" height="40" class="RoundGradient2" /></td>
      </tr>
      <tr>
          <td>Glades Okon Ekpeyong</td>
      </tr>
      <tr>
          <td><span>Administrator</span></td>
      </tr>
   </table>
<div style="clear:both"></div>
 <br />
 <div>
   <!-- menu side-->
  <div style="width:98%">
  <script type="text/javascript">
  var curmnu = 'rT';
      function DisplayCont(mnu){
		  
		 curmnu = mnu.id;
		 var mns = new Array('rT','uT','Box','uS','sS','Acc');
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
		 
		 if (curmnu == 'rT'){
			 Checkbrowser(new Array('rTC','uTC','BoxC','sSC','uSC','AccC')); 
		 }else if(curmnu == 'uT'){
			 //SMCFE();
			 Checkbrowser(new Array('uTC','rTC','BoxC','sSC','uSC','AccC'));
		 }else if(curmnu == 'Box'){
			 //SMCFE();
			 Checkbrowser(new Array('BoxC','rTC','uTC','sSC','uSC','AccC'));
		 }else if(curmnu == 'uS'){
			 //SMCFE();
			 Checkbrowser(new Array('uSC','BoxC','rTC','uTC','sSC','AccC'));
		 }else if(curmnu == 'Acc'){
			 //SMCFE();
			 Checkbrowser(new Array('AccC','uSC','BoxC','rTC','uTC','sSC'));	 
		 }else{
			 //SMCFE();
			 Checkbrowser(new Array('sSC','BoxC','rTC','uTC','uSC','AccC'));
			  
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
         
            <td><img src="images/rTHover.png" id="rT" <?php echo $mnuEvents;  ?>  /></td>
         
            <td><img src="images/uT.png"  id="uT" <?php echo $mnuEvents;  ?> /></td>
                  
         <td><img src="images/uS.png"  id="uS" <?php echo $mnuEvents;  ?> /></td>
            
            <td><img src="images/Box.png"  id="Box" <?php echo $mnuEvents;  ?> /></td>
          
 <td><img src="images/sS.png"  id="sS" <?php echo $mnuEvents;  ?> /></td>
 
  <td><img src="images/Acc.png"  id="Acc" <?php echo $mnuEvents;  ?> /></td>
      </table>
  </div>
 </div>
 
 <br />
 <!-- content side-->
   <div style="width:96%; margin:auto"> <!--508px-->
   <!--Update Students result-->
<?php include("include/updateStud.php") ?>

<!--Box-->
<?php include("include/box.php") ?>

<!--Teachers registration-->
 <?php include("include/regTeacher.php") ?>
   
 <!--View Stud-->
<?php include("include/settings.php") ?> 
  
  <!--Send ass-->
<?php include("include/updateTeacher.php") ?> 

  <!--account Settings-->
<?php include("include/account.php") ?> 
 
   </div>

</div>

 <?php include('include/footer.php'); ?>   