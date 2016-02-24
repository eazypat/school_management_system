<?php
 sleep(3);
require("phplb.php");
require("config.php");
header('Content-type: text/plain');
function GetGrade($score){
	if($score <= 30){
		return "F";
	}elseif($score > 30 && $score <= 40){
		return "E";
	}elseif($score > 40 && $score <= 49){
		return "D";
	}elseif($score > 49 && $score <= 60){
		return "C";
	}elseif($score > 60 && $score <= 79){
		return "B";
	}else{
		return "A";
	}
}
if($phpf->CheckPost_r('sclass','term','reg') ){
	$rst_info1 = $dbo -> Select4rmdbtb("result_tb","","StudClass ='".$_POST['sclass']."' AND Term ='".$_POST['term']."' AND RegNo ='".$_POST['reg']."'");
	$rtn = "";
	if(is_array($rst_info1)){
		$rtn = "<table width=\"100%\" style=\"border:#93C1EF solid thin; border-collapse:collapse; background-color:#FFF;display:block; width:1; font-size:1.0em; margin:auto\" border=\"1\" bordercolor=\"#93C1EF\">";
		$cnt = 0;
		$totCA = 0;
		$totAss = 0;
		$totExam = 0;
		$totTot = 0;
		$avg = 0;
		while($rst = mysql_fetch_array($rst_info1[0])){
			$cnt++;
			$tot = $rst['CA'] + $rst['Ass'] + $rst['Exam'];
			$caind = ($rst['CA'] <= 5)?"style=\"color:#F30\"":"";
			$assind = ($rst['Ass'] <= 5)?"style=\"color:#F30\"":"";
			$examind = ($rst['Exam'] <= 15)?"style=\"color:#F30\"":"";
			$totind = ($tot <= 30)?"style=\"color:#F30\"":"";
			$rtn .= "<tr>
              <td width=\"10\">{$cnt}</td><td width=\"138\">".$rst['Subj']."</td><td width=\"32\" {$caind} >".$rst['CA']."</td><td width=\"32\" {$assind}>".$rst['Ass']."</td><td width=\"43\" {$examind} >".$rst['Exam']."</td><td width=\"43\" {$totind}  >".$tot."</td><td width=\"57\" {$totind}  >".$tot."%</td><td width=\"42\" {$totind}  >".GetGrade($tot)."</td><td width=\"121\">".$rst['Teacher']."</td>
             </tr>";
			
			$totCA += $rst['CA'];
			$totAss += $rst['Ass'];
			$totExam += $rst['Exam'];
			$totTot += $tot;
		}
		if($cnt != 0){
		$avg = floor($totTot/$cnt);
		$rtn .= "<tr>
              <td style=\"color:#F30; text-align:right\" colspan=\"2\">Overall: &nbsp;</td><td>{$totCA}</td><td>{$totAss}</td><td>{$totExam}</td><td>{$totTot}</td><td class=\"GoodRst\">{$avg}%</td><td class=\"GoodRst\">".GetGrade($avg)."</td><td>&nbsp;</td>
             </tr>";
		}
		
		$rtn .= "</table>";
		$rtn .= "~".$avg;
		
	}else{
		$rtn = "#";
	}
echo $rtn;
}elseif($phpf->CheckPost_r('id')){
	$AssID = $_POST['id'];
	$rst_info1 = $dbo -> Updatedbtb("ass_tb",array('Status' => 'Submitted'),"ID = ".trim($AssID));
	if(is_array($rst_info1)){
		echo "#";
	}else{
	   echo "##";	
	}
}elseif($phpf->CheckPost_r('tofrom','sTopic','bcont')){
	$inst = $dbo -> Insert2DbTb(array('Topic' => $_POST['sTopic'],
		                           'FromTo' => $_POST['tofrom'],
		                           'Content' => $_POST['bcont']
		                           )
		                    ,"box_tb");
							
			//if($inst == "#"){
				echo $inst;
			
//tofrom	
	
}elseif($phpf->CheckPost_r('aTopic','aSubDate','aCont')){
	$inst = $dbo -> Insert2DbTb(array('Topic' => $_POST['aTopic'],
		                           'ADate' => $_POST['aDate'],
		                           'Cont' => $_POST['aCont'],
		                           'Subj' => $_POST['aSubj'],
		                           'Teacher' => $_POST['aTeacher'],
		                           'Status' => "Not Submitted",
		                           'RegNo' => $_POST['aRegs']
		                           )
		                    ,"ass_tb");
							
			//if($inst == "#"){
				echo $inst;
//aTopic	
}elseif($phpf->CheckPost_r('studClass')){
//studClass	
	$rst_info1 = $dbo -> Select4rmdbtb("studinfo_tb","","AdminsTo ='".$_POST['studClass']."'");
	if(is_array($rst_info1)){
		$rtn = "<table id=\"resTb2\" width=\"598\" style=\"border:#93C1EF solid thin; border-collapse:collapse; background-color:#FFF;display:block; width:598px; font-size:1.0em; margin:auto\" border=\"1\" bordercolor=\"#93C1EF\" class=\"RoundGradient2\"  >
			   <tr style=\"text-align:center; font-weight:bold; background-color:#93C1EF\">
				<th width=\"20\">S/N</th>
               <th width=\"110\">Reg. No.</th>
               <th width=\"160\">Name</th>
               <th width=\"60\">CA</th>
                <th width=\"60\">Ass</th>
                <th width=\"60\">Exam</th>
                 <th width=\"68\">Total</th>
                 <th width=\"60\">Grade</th>
                 
                 </tr>";
				 $cnt = 0;
		while($rst = mysql_fetch_array($rst_info1[0])){
			$cnt++;
			$rtn .= "  <tr>
                  <td>{$cnt}</td>
                 <td id=\"{$cnt}reg\">".$rst['RegNo']."</td>
                 <td id=\"{$cnt}nm\">".$rst['FullName']."</td>
                 <td><input  id=\"{$cnt}ca\" type=\"text\" style=\"border:none; width:98%\" onfocus=\"_('resTb2').className = 'RoundGradientHover'\" onblur=\"_('resTb2').className = 'RoundGradient2'; calc('{$cnt}')\"  onkeyup=\"CheckTxt(this)\" /> </td>
                 <td><input id=\"{$cnt}ass\" type=\"text\" style=\"border:none; width:98%\" onfocus=\"_('resTb2').className = 'RoundGradientHover'\" onblur=\"_('resTb2').className = 'RoundGradient2'; calc('{$cnt}')\"  onkeyup=\"CheckTxt(this)\" /> </td>
                 <td><input id=\"{$cnt}exam\" type=\"text\" style=\"border:none; width:98%\" onfocus=\"_('resTb2').className = 'RoundGradientHover'\" onblur=\"_('resTb2').className = 'RoundGradient2'; calc('{$cnt}')\" onkeyup=\"CheckTxt(this)\" /> </td>
                 <td><div id=\"{$cnt}tot\"></div></td>
                 <td><div id=\"{$cnt}grade\"></div></td>
                 </tr>";
			
		}
		$rtn .= "</table>~{$cnt}";
		echo $rtn;
		
	}else{
		echo "#";
	}
}elseif($phpf->CheckPost_r('rst','sbClass','rstterm','rstsubj','TNm')){
	$rstt = $_POST['rst'];
	$rstarr = explode("~",$rstt);
	for($s = 0; $s < count($rstarr) - 1 ; $s++){
		$rstr = $rstarr[$s];
		$rstcont = explode(";",$rstr);
		$TArr = explode(",",$_POST['TNm']);
		$TArr[1] = trim($TArr[1]);
		$init = strtoupper(substr($TArr[1],0,1));
		$inst = $dbo -> Insert2DbTb(array('RegNo' => $rstcont[0],
		                           'Subj' => $_POST['rstsubj'],
		                           'CA' => (int)$rstcont[2],
		                           'Ass' => (int)$rstcont[3],
		                           'Exam' => (int)$rstcont[4],
		                           'Teacher' =>  $init. ". " .$TArr[0] ,
		                           'StudClass' => $_POST['sbClass'],
								   'Term' => $_POST['rstterm']
		                           )
		                    ,"result_tb");
		if($inst != "#"){
			echo "##";
			return;
		}
	}
	echo "#";
}

?>


