<?php //require('phplb.php'); ?>
<?php include('include/header.php'); 
$mnuEvents = "onMouseOver=\"MnuHoverChg(this,'Hover')\" onMouseOut=\"MnuHoverChg(this,'')\" onClick=\"DisplayCont(this)\"";
if(isset($_GET['pc'])){
	$rstT = $dbo->Select4rmdbtbFirstRw("teacher_tb","","PassCode = '".$_GET['pc']."'");
	if($rstT == NULL || $rstT == ""){
		$phpf->redirect("index.php");
	}else{
	   $FNm = 	$rstT['FullName'];
	   $passp = $rstT['passp'];
	   $TID = $rstT['TID'];
	}
}else{
	$phpf->redirect("index.php");
}
?>
<noscript>
<span>Javascript is disabled: this application requires javascript see your browser documentation on how to enable Javascript</span>
</noscript>
<div>
<script type="text/javascript">
  var Nme = '<?php echo $FNm  ?>';
</script>
<!--Top Greeting and student details-->
<table style="float:left">
  <tr>
     <td><img src="images/emote_smile.png"/></td> <td style="font-size:2.5em; color:#96CC26; font-weight:bold; font-style:italic">Welcome</td>
  </tr>
</table>
   <table style="float:right; text-align:center">
      <tr>
          <td><img src="<?php echo $passp  ?>" width="40" height="40" class="RoundGradient2" /></td>
      </tr>
      <tr>
          <td><?php echo $FNm  ?></td>
      </tr>
      <tr>
          <td><span><?php echo $TID  ?></span></td>
      </tr>
   </table>
<div style="clear:both"></div>
 <br />
 <div>
   <!-- menu side-->
  <div style="width:98%">
  <script type="text/javascript">
  var curmnu = 'Ass';
      function DisplayCont(mnu){
		 //_('ts').pSH(1);
		 curmnu = mnu.id;
		// var mnsarr = new Array('vR','Ass','Box','vS','Uload','Acc');
		 var mnsarr = new Array('Ass','vS','Uload','Acc');
		 //alert(mnsarr)
		 for (i = 0; i < mnsarr.length; i++){
		 //for (var i in mnsarr){
			  //alert(i)
			 if (mnsarr[i] != curmnu){
				 
				 _(mnsarr[i]).src = 'images/' + mnsarr[i] + '.png';
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
			 Checkbrowser(new Array('rstC','AssC','BoxC','ViewS','UloadC','AccC')); 
		 }else */
		 if(curmnu == 'Ass'){
			 //SMCFE();
			 Checkbrowser(new Array('AssC','ViewS','UloadC','AccC'));
		/* }else if(curmnu == 'Box'){
			 //SMCFE();
			 Checkbrowser(new Array('BoxC','AssC','rstC','ViewS','UloadC','AccC'));*/
		 }else if(curmnu == 'vS'){
			 //SMCFE();
			 Checkbrowser(new Array('ViewS','AssC','UloadC','AccC'));
	      }else if(curmnu == 'Acc'){
			 //SMCFE();
			 Checkbrowser(new Array('AccC','ViewS','AssC','UloadC'));
		 }else{
			 //SMCFE();
			 Checkbrowser(new Array('UloadC','AssC','ViewS','AccC'));
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
         
            <td><img src="images/AssHover.png"  id="Ass" <?php echo $mnuEvents;  ?> /></td>
                  
         <td><img src="images/vS.png"  id="vS" <?php echo $mnuEvents;  ?> /></td>
            
            <!--<td><img src="images/Box.png"  id="Box" <?php //echo $mnuEvents;  ?> /></td>-->
          
 <td><img src="images/Uload.png"  id="Uload" <?php echo $mnuEvents;  ?> /></td>
   
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
<?php //include("include/box.php") ?>

  <!--Account settings-->
<?php include("include/account.php") ?>  

<!--Load result-->
 <?php include("include/loadRst.php") ?>
 
   <!--Send ass-->
<?php include("include/sendAsspage.php") ?>
   
 <!--View Stud-->
<?php include("include/viewstud.php") ?> 
  



 
   </div>

</div>
 <?php include('include/footer.php'); ?>   