<?php
$ELE = " class=\"RoundGradient2\" onmouseover=\"this.className = 'RoundGradientHover'\" onmouseout=\"this.className = 'RoundGradient2'\"";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>All Student Result</title>
<script type="text/javascript" src="taqua.jl.js"></script>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<style media="all" type="text/css">
td {
	 padding:4px;
}

.bold{
	font-weight:bold
	
}
</style>

</head>

<body>
<script type="text/javascript">
<!--Show comment box-->
  function ShowCommentBx(RegNo,e){
	  //alert('gg');
	  var elem = _('commentbx');
	  var scr = 0;
	
	  //alert(window.document.body.scrollTop);
	if(typeof(window.scrollY) == 'undefined'){
		scr = (document.compatMode && document.compatMode != "BackCompat")? document.documentElement.scrollTop : document.body.scrollTop;
	}else{
		scr = window.scrollY;
	}
	
	  elem.style.top = (e.clientY + scr) + 'px';
	    //event.canc
	  elem.style.left = e.clientX + 'px';
	  elem.style.display = 'block'
  }
</script>
<!--Load Comment Page-->
<div style="width:350px;background-color:#FFF; padding:4px; position:absolute; display:none" class="RoundGradient2" id="commentbx" >
   <!--Image,Name,ID-->
  <div>
  <table  style=" width:99%">
    <tr>
       <td width="21%" rowspan="2"><img src="images/42-15523334.jpg" width="40" height="40" class="RoundGradient2"  /></td><td width="72%">Kejemilobi abayomi Oluwaseun</td><td width="7%"><img src="images/chatclose.png" title="Cancel" onclick="_('commentbx').style.display = 'none'" /></td>
    </tr>
    <tr>
      <td colspan="2">AS/345678GFR</td>
    </tr>
  </table>
  </div>
  
  <div>
   <br />
 <div class="RoundGradient2" style="width:90%; margin:auto; height:1px" id="linedivp3"></div>
  
  Comment:
  </div>
  
  <!--Textarea-->
  <div>
 <textarea style="width:98%; height:100px; border:none" ></textarea>
</div>

<!--Save button-->
<div style="text-align:center">
 <img src="images/savefloppy.png" width="22" height="22" onMouseOver="SE(this,40,20,'','')" onMouseOut="SE(this,22,20,'','')" />
</div>

</div>
<!--Banner-->
 <div style="width:680px; margin:auto">
   <img src="images/generalBanner.png" />
 </div>
 <!--Header-->
 <div style="text-align:center; font-size:1.5em; font-weight:bold">JSS 3 <span style="color:#F60">First Term</span> Result(2013)</div>
 <br />
 <div>
 <!-- <div style="text-align:center"><img src="images/teacherMnuonly.png" title="Back To Teacher Zone" onclick="document.location = 'teacherpage.php'"  /></div>-->
  
  </div>
 <!--Results-->
 <div>

   <table title="Double-Click to enter comment"  class="RoundGradient2" style="border:#EDF5FC solid thin; border-collapse:collapse; width:auto; font-size:0.9em; margin:auto; text-align:center; cursor:pointer" border="1" bordercolor="#EDF5FC" >
         <!--Header-->
      <tr style="text-align:center; background-color:#93C1EF; width:auto; " bgcolor="#93C1EF">
          <td rowspan="2"><img src="images/marked.png" /></td>
          <td rowspan="2" width="">S/N</td>
          <td rowspan="2" width="">RegNo</td>
          
          <td colspan="3" >Math.</td>
          <td colspan="3" >Eng. Lang</td>  
          <td colspan="3" >Biology</td>  
          <td colspan="3" >Chemistry</td>  
          <td colspan="3" >Geography</td>  
          <td colspan="3" >Physics</td>  
          <td colspan="3" >Account</td>  
          <td colspan="3" >Lit. Eng.</td>  
          <td colspan="3" >Comerce</td>
        
          <td colspan="3"><span>Overall</span>	</td> 
                    
      </tr>
      <tr style="text-align:center; background-color:#93C1EF; width:auto; ">
          <td>CA</td><td>Exam</td><td class="bold">Total</td>
          <td>CA</td><td>Exam</td><td class="bold">Total</td>
          <td>CA</td><td>Exam</td><td class="bold">Total</td>
          <td>CA</td><td>Exam</td><td class="bold">Total</td>
          <td>CA</td><td>Exam</td><td class="bold">Total</td>
          <td>CA</td><td>Exam</td><td class="bold">Total</td>
          <td>CA</td><td>Exam</td><td class="bold">Total</td>
          <td>CA</td><td>Exam</td><td class="bold">Total</td>
          
          <td>CA</td><td>Exam</td><td class="bold">Total</td>
          <td><span>Total</span></td><td><span>Rate(%)</span></td><td class="bold"><span>Grade</span></td>
          
      </tr>
      
      <!--Result Body-->
      <tr <?php echo $ELE  ?> ondblclick="ShowCommentBx('regno',event)" >
      <td><input type="checkbox"  /></td>
      <td>1</td> <!--SN-->
      <td>AK/CT/09876RFF</td> <!--RegNo-->
      
      <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td><span>20</span></td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
      
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td class="pointAttract">6</td> <!--Exam-->
      <td class="bold"><span>26</span></td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td class="pointAttract">6</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">51</td>  <!--Total-->
      
        <!--Math-->
      <td>2789</td> <!--CA-->
      <td>60%</td> <!--Exam-->
      <td class="bold">B</td>  <!--Total-->
      
      </tr>
      
        <tr bgcolor="#EDF5FC" <?php echo $ELE  ?> ondblclick="ShowCommentBx('regno',event)" >
        <td><input type="checkbox"  /></td>
      <td>1</td> <!--SN-->
      <td>AK/CT/09876RFF</td> <!--RegNo-->
      
      <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td><span>20</span></td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td><span>45</span></td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td class="pointAttract">6</td> <!--Exam-->
      <td class="bold"><span>26</span></td>  <!--Total-->
      
    
      
        <!--Math-->
      <td class="pointAttract">6</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">51</td>  <!--Total-->
      
        <!--Math-->
      <td>2789</td> <!--CA-->
      <td>60%</td> <!--Exam-->
      <td class="bold">B</td>  <!--Total-->
      
      </tr>
      
            <tr <?php echo $ELE  ?> >
      <td><input type="checkbox"  /></td>
      <td>1</td> <!--SN-->
      <td>AK/CT/09876RFF</td> <!--RegNo-->
      
      <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td><span>20</span></td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
      
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td class="pointAttract">6</td> <!--Exam-->
      <td class="bold"><span>26</span></td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td class="pointAttract">6</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">51</td>  <!--Total-->
      
        <!--Math-->
      <td>2789</td> <!--CA-->
      <td>60%</td> <!--Exam-->
      <td class="bold">B</td>  <!--Total-->
      
      </tr>
      
        <tr bgcolor="#EDF5FC" <?php echo $ELE  ?>>
        <td><input type="checkbox"  /></td>
      <td>1</td> <!--SN-->
      <td>AK/CT/09876RFF</td> <!--RegNo-->
      
      <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td><span>20</span></td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td><span>45</span></td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td class="pointAttract">6</td> <!--Exam-->
      <td class="bold"><span>26</span></td>  <!--Total-->
      
    
      
        <!--Math-->
      <td class="pointAttract">6</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">51</td>  <!--Total-->
      
        <!--Math-->
      <td>2789</td> <!--CA-->
      <td>60%</td> <!--Exam-->
      <td class="bold">B</td>  <!--Total-->
      
      </tr>
      
            <tr <?php echo $ELE  ?> >
      <td><input type="checkbox"  /></td>
      <td>1</td> <!--SN-->
      <td>AK/CT/09876RFF</td> <!--RegNo-->
      
      <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td><span>20</span></td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
      
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td class="pointAttract">6</td> <!--Exam-->
      <td class="bold"><span>26</span></td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td class="pointAttract">6</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">51</td>  <!--Total-->
      
        <!--Math-->
      <td>2789</td> <!--CA-->
      <td>60%</td> <!--Exam-->
      <td class="bold">B</td>  <!--Total-->
      
      </tr>
      
        <tr bgcolor="#EDF5FC" <?php echo $ELE  ?>>
        <td><input type="checkbox"  /></td>
      <td>1</td> <!--SN-->
      <td>AK/CT/09876RFF</td> <!--RegNo-->
      
      <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td><span>20</span></td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td><span>45</span></td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td class="pointAttract">6</td> <!--Exam-->
      <td class="bold"><span>26</span></td>  <!--Total-->
      
    
      
        <!--Math-->
      <td class="pointAttract">6</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">51</td>  <!--Total-->
      
        <!--Math-->
      <td>2789</td> <!--CA-->
      <td>60%</td> <!--Exam-->
      <td class="bold">B</td>  <!--Total-->
      
      </tr>
      
            <tr <?php echo $ELE  ?> >
      <td><input type="checkbox"  /></td>
      <td>1</td> <!--SN-->
      <td>AK/CT/09876RFF</td> <!--RegNo-->
      
      <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td><span>20</span></td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
      
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td class="pointAttract">6</td> <!--Exam-->
      <td class="bold"><span>26</span></td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td class="pointAttract">6</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">51</td>  <!--Total-->
      
        <!--Math-->
      <td>2789</td> <!--CA-->
      <td>60%</td> <!--Exam-->
      <td class="bold">B</td>  <!--Total-->
      
      </tr>
      
        <tr bgcolor="#EDF5FC" <?php echo $ELE  ?>>
        <td><input type="checkbox"  /></td>
      <td>1</td> <!--SN-->
      <td>AK/CT/09876RFF</td> <!--RegNo-->
      
      <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td><span>20</span></td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td><span>45</span></td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td class="pointAttract">6</td> <!--Exam-->
      <td class="bold"><span>26</span></td>  <!--Total-->
      
    
      
        <!--Math-->
      <td class="pointAttract">6</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">51</td>  <!--Total-->
      
        <!--Math-->
      <td>2789</td> <!--CA-->
      <td>60%</td> <!--Exam-->
      <td class="bold">B</td>  <!--Total-->
      
      </tr>
      
            <tr <?php echo $ELE  ?> >
      <td><input type="checkbox"  /></td>
      <td>1</td> <!--SN-->
      <td>AK/CT/09876RFF</td> <!--RegNo-->
      
      <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td><span>20</span></td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
      
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td class="pointAttract">6</td> <!--Exam-->
      <td class="bold"><span>26</span></td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td class="pointAttract">6</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">51</td>  <!--Total-->
      
        <!--Math-->
      <td>2789</td> <!--CA-->
      <td>60%</td> <!--Exam-->
      <td class="bold">B</td>  <!--Total-->
      
      </tr>
      
        <tr bgcolor="#EDF5FC" <?php echo $ELE  ?>>
        <td><input type="checkbox"  /></td>
      <td>1</td> <!--SN-->
      <td>AK/CT/09876RFF</td> <!--RegNo-->
      
      <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td><span>20</span></td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td><span>45</span></td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td class="pointAttract">6</td> <!--Exam-->
      <td class="bold"><span>26</span></td>  <!--Total-->
      
    
      
        <!--Math-->
      <td class="pointAttract">6</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">51</td>  <!--Total-->
      
        <!--Math-->
      <td>2789</td> <!--CA-->
      <td>60%</td> <!--Exam-->
      <td class="bold">B</td>  <!--Total-->
      
      </tr>
      
            <tr <?php echo $ELE  ?> >
      <td><input type="checkbox"  /></td>
      <td>1</td> <!--SN-->
      <td>AK/CT/09876RFF</td> <!--RegNo-->
      
      <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td><span>20</span></td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
      
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td class="pointAttract">6</td> <!--Exam-->
      <td class="bold"><span>26</span></td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td class="pointAttract">6</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">51</td>  <!--Total-->
      
        <!--Math-->
      <td>2789</td> <!--CA-->
      <td>60%</td> <!--Exam-->
      <td class="bold">B</td>  <!--Total-->
      
      </tr>
      
        <tr bgcolor="#EDF5FC" <?php echo $ELE  ?>>
        <td><input type="checkbox"  /></td>
      <td>1</td> <!--SN-->
      <td>AK/CT/09876RFF</td> <!--RegNo-->
      
      <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td><span>20</span></td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td><span>45</span></td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td class="pointAttract">6</td> <!--Exam-->
      <td class="bold"><span>26</span></td>  <!--Total-->
      
    
      
        <!--Math-->
      <td class="pointAttract">6</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">51</td>  <!--Total-->
      
        <!--Math-->
      <td>2789</td> <!--CA-->
      <td>60%</td> <!--Exam-->
      <td class="bold">B</td>  <!--Total-->
      
      </tr>
      
            <tr <?php echo $ELE  ?> >
      <td><input type="checkbox"  /></td>
      <td>1</td> <!--SN-->
      <td>AK/CT/09876RFF</td> <!--RegNo-->
      
      <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td><span>20</span></td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
      
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td class="pointAttract">6</td> <!--Exam-->
      <td class="bold"><span>26</span></td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td class="pointAttract">6</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">51</td>  <!--Total-->
      
        <!--Math-->
      <td>2789</td> <!--CA-->
      <td>60%</td> <!--Exam-->
      <td class="bold">B</td>  <!--Total-->
      
      </tr>
      
        <tr bgcolor="#EDF5FC" <?php echo $ELE  ?>>
        <td><input type="checkbox"  /></td>
      <td>1</td> <!--SN-->
      <td>AK/CT/09876RFF</td> <!--RegNo-->
      
      <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td><span>20</span></td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td><span>45</span></td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td class="pointAttract">6</td> <!--Exam-->
      <td class="bold"><span>26</span></td>  <!--Total-->
      
    
      
        <!--Math-->
      <td class="pointAttract">6</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">51</td>  <!--Total-->
      
        <!--Math-->
      <td>2789</td> <!--CA-->
      <td>60%</td> <!--Exam-->
      <td class="bold">B</td>  <!--Total-->
      
      </tr>
      
            <tr <?php echo $ELE  ?> >
      <td><input type="checkbox"  /></td>
      <td>1</td> <!--SN-->
      <td>AK/CT/09876RFF</td> <!--RegNo-->
      
      <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td><span>20</span></td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
      
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td class="pointAttract">6</td> <!--Exam-->
      <td class="bold"><span>26</span></td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td class="pointAttract">6</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">51</td>  <!--Total-->
      
        <!--Math-->
      <td>2789</td> <!--CA-->
      <td>60%</td> <!--Exam-->
      <td class="bold">B</td>  <!--Total-->
      
      </tr>
      
        <tr bgcolor="#EDF5FC" <?php echo $ELE  ?>>
        <td><input type="checkbox"  /></td>
      <td>1</td> <!--SN-->
      <td>AK/CT/09876RFF</td> <!--RegNo-->
      
      <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td><span>20</span></td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td><span>45</span></td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td class="pointAttract">6</td> <!--Exam-->
      <td class="bold"><span>26</span></td>  <!--Total-->
      
    
      
        <!--Math-->
      <td class="pointAttract">6</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">51</td>  <!--Total-->
      
        <!--Math-->
      <td>2789</td> <!--CA-->
      <td>60%</td> <!--Exam-->
      <td class="bold">B</td>  <!--Total-->
      
      </tr>
      
            <tr <?php echo $ELE  ?> >
      <td><input type="checkbox"  /></td>
      <td>1</td> <!--SN-->
      <td>AK/CT/09876RFF</td> <!--RegNo-->
      
      <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td><span>20</span></td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
      
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td class="pointAttract">6</td> <!--Exam-->
      <td class="bold"><span>26</span></td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td class="pointAttract">6</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">51</td>  <!--Total-->
      
        <!--Math-->
      <td>2789</td> <!--CA-->
      <td>60%</td> <!--Exam-->
      <td class="bold">B</td>  <!--Total-->
      
      </tr>
      
        <tr bgcolor="#EDF5FC" <?php echo $ELE  ?>>
        <td><input type="checkbox"  /></td>
      <td>1</td> <!--SN-->
      <td>AK/CT/09876RFF</td> <!--RegNo-->
      
      <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td><span>20</span></td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td><span>45</span></td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td class="pointAttract">6</td> <!--Exam-->
      <td class="bold"><span>26</span></td>  <!--Total-->
      
    
      
        <!--Math-->
      <td class="pointAttract">6</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">51</td>  <!--Total-->
      
        <!--Math-->
      <td>2789</td> <!--CA-->
      <td>60%</td> <!--Exam-->
      <td class="bold">B</td>  <!--Total-->
      
      </tr>
      
            <tr <?php echo $ELE  ?> >
      <td><input type="checkbox"  /></td>
      <td>1</td> <!--SN-->
      <td>AK/CT/09876RFF</td> <!--RegNo-->
      
      <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td><span>20</span></td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
      
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td class="pointAttract">6</td> <!--Exam-->
      <td class="bold"><span>26</span></td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td class="pointAttract">6</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">51</td>  <!--Total-->
      
        <!--Math-->
      <td>2789</td> <!--CA-->
      <td>60%</td> <!--Exam-->
      <td class="bold">B</td>  <!--Total-->
      
      </tr>
      
        <tr bgcolor="#EDF5FC" <?php echo $ELE  ?>>
        <td><input type="checkbox"  /></td>
      <td>1</td> <!--SN-->
      <td>AK/CT/09876RFF</td> <!--RegNo-->
      
      <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td><span>20</span></td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td><span>45</span></td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td class="pointAttract">6</td> <!--Exam-->
      <td class="bold"><span>26</span></td>  <!--Total-->
      
    
      
        <!--Math-->
      <td class="pointAttract">6</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">51</td>  <!--Total-->
      
        <!--Math-->
      <td>2789</td> <!--CA-->
      <td>60%</td> <!--Exam-->
      <td class="bold">B</td>  <!--Total-->
      
      </tr>
      
            <tr <?php echo $ELE  ?> >
      <td><input type="checkbox"  /></td>
      <td>1</td> <!--SN-->
      <td>AK/CT/09876RFF</td> <!--RegNo-->
      
      <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td><span>20</span></td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
      
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td class="pointAttract">6</td> <!--Exam-->
      <td class="bold"><span>26</span></td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td class="pointAttract">6</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">51</td>  <!--Total-->
      
        <!--Math-->
      <td>2789</td> <!--CA-->
      <td>60%</td> <!--Exam-->
      <td class="bold">B</td>  <!--Total-->
      
      </tr>
      
        <tr bgcolor="#EDF5FC" <?php echo $ELE  ?>>
        <td><input type="checkbox"  /></td>
      <td>1</td> <!--SN-->
      <td>AK/CT/09876RFF</td> <!--RegNo-->
      
      <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td><span>20</span></td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td><span>45</span></td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">65</td>  <!--Total-->
      
        <!--Math-->
      <td>20</td> <!--CA-->
      <td class="pointAttract">6</td> <!--Exam-->
      <td class="bold"><span>26</span></td>  <!--Total-->
      
    
      
        <!--Math-->
      <td class="pointAttract">6</td> <!--CA-->
      <td>45</td> <!--Exam-->
      <td class="bold">51</td>  <!--Total-->
      
        <!--Math-->
      <td>2789</td> <!--CA-->
      <td>60%</td> <!--Exam-->
      <td class="bold">B</td>  <!--Total-->
      
      </tr>
     
     
 
      
   </table>
 </div>
</body>
</html>