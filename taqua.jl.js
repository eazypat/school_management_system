// taqua.jl 1.0 by Taquatech C 2013

//Globals
 var EffectArr = null; //old curent fade object (element details)
 var SEffectobj = null;//hold the cureent effect details

/*//protyping

//protype to display/Hide object

Object.prototype.HideFE = rhidef;
Object.prototype.pSH = shows;
Object.prototype.Show = rshow;
Object.prototype.Hide = rhide;

function shows (state){
	SH(this,state);
}



function rshow(){
	SH(this,1);
}


function rhide(){
	
	SH(this,0);
}


function rhidef(Delay){
	
	SHFE(this,0,Delay);
}

//protype to display/Hide object
Object.prototype.pTSH = Tshow;
function Tshow(){
	TSH(this);
}

//protype to show hide with fade effect
Object.prototype.pSHFE = showF;
function showF(state, delay){
	 alert('s');
	SHFE(this,state,delay);
}

//protype to display/Hide object whit fade effect
Object.prototype.pTSHFE = TshowFs;
function TshowFs(Delay,ShowFunction,HideFunction){
	TSHFE(this,Delay,ShowFunction,HideFunction);
}

//prototype to check object display state
Object.prototype.isShows = iss;
function iss(){
	//alert('jj');
	if (this.style.display == 'block'){
		return true;
	}else{
		return false;
	}
}


*/
//Get element by ID-------------------------------------------------
 function _(){	 
	 if (arguments.length == 1){
		 //check the type of single parameter sent
		 if (typeof(arguments[0]) == 'string'){
			 var ID = arguments[0];
			 return document.getElementById(ID);
		 }else if (typeof(arguments[0]) == 'object'){
			 //check if it has element (class or array)
			 var obj = arguments[0];
			 //check if it is not an array or class
			 
			 if (typeof(obj.length) == 'undefined'){// if it does not contain subelement
			     //return back the object
				 return obj;
			 }else{
				//get all the ID and get element into an array
				var arrelem = new Array(obj.length);
				 for (i = 0; i < obj.length; i++){
					 arrelem[i] = document.getElementById(String(obj[i]));
				 }
				 return arrelem; 
			 }
		 }
		 
		//if multiple parameters 
	 }else if ( arguments.length > 1){
		 var arrelem = new Array(arguments.length);
		 for (i = 0; i < arguments.length; i++){
			 arrelem[i] = document.getElementById(String(arguments[i]));
		 }
		 return arrelem;
	 }else{
		return null; 
	 }
	 	 
 }

 //----------------------------------------------------------------------

 
 
//Show/Hide ID object (Show or Hide)----------------------------------------
function SH(ID,Show){
	//alert('aaa');
	
	var elem = RP(ID);
	
	if (Show == 1){
		elem.style.display = 'block';
	}else{
		elem.style.display = 'none';
	}
}
//----------------------------------------------------------------------

// Show/Hide Element with Fade Effet
function SHFE(ID,Show,DelaySpeed){
	var elem = RP(ID);
	
	if (Show == 1){
		SO(0,ID);
		FE(ID,'in',DelaySpeed,'SH(\'' + RID(ID) + '\',1)','');
	
	}else{
		FE(ID,'out',DelaySpeed,'','SH(\'' + RID(ID) + '\',0)');
	}
	
}



//Togle Show/Hide Element (Toggle Show/Hide)-----------------------------
function TSH(ID,ShowFunction,HideFunction){
	var elem = RP(ID);
	var state = elem.style.display;
	if (state == 'none'){
		elem.style.display = 'block';
		eval(ShowFunction);
	}else{
		elem.style.display = 'none';
		eval(HideFunction);
	}
	
}
//----------------------------------------------------------------------

//Resolve ID return string id value
function RID(ID){
	if ( typeof ID != 'string'){
		if (typeof ID.id == 'undefined'){
			return '';
		}
		ID = ID.id;
	}
	return ID;
}

//Toggle Show/Hide Element with Fade Effet
function TSHFE(ID,DelaySpeed,ShowFunction,HideFunction){
	
	var elem = RP(ID);
	var state = elem.style.display;
	
	if (state == 'none'){
		//alert(state);
		SO(0,ID);
		 
		FE(ID,'in',DelaySpeed,'SH(\'' + RID(ID) + '\',1)','');
		eval(ShowFunction);
	
	}else{
		//eval(HideFunction);
		FE(ID,'out',DelaySpeed,'','SH(\'' + RID(ID) + '\',0)');
		eval(HideFunction);
	}
	
}

//Change Background Color (Background Color)-----------------------------
function BgC(ID, Color){
	
		RP(ID).style.backgroundColor = Color;

}
//----------------------------------------------------------------------




//Confirm user (Confirm Redirect)----------------------------------------------
function CR(ConfirmFunction,UrlValid,UrlInvalid){
	//alert('aa');
	if (eval(ConfirmFunction) == true){
		document.location = UrlValid
	}else{
		document.location = UrlInvalid
	}
}
//----------------------------------------------------------------------------





//function to return element if parameter is either the elemnt or ID (Resolve Parameter)
function RP(parameter){
	if(typeof(parameter) == "object"){
		return parameter;
	}else if(typeof(parameter) == "string"){
		return _(parameter);
	}
}
//------------------------------------------------------------------------------


//Change Src of an object (Change Source)--------------------------------------------
function CSrc(ID,path){
	RP(ID).src = path;
	//alert(path);
}
//-------------------------------------------------------------------------------

//End all effect
function EAE(){
	//clear fade
	if (EffectArr != null){	
		  if (EffectArr.type == 'out'){
			  SO(0,EffectArr.ID);
		  }else{
			  SO(1,EffectArr.ID);
		  }
		 EffectArr = null; 
	}
	
	//end scale
	if (SEffectobj != null){
		ForceSEComplete();
	}
}


//fading system--------------------------------------------------------------------

// fade effect 
function FE(ID,type,SpeedDelay,StartFunction,EndFunction){
	//check if fadding is on progress complete it
	//alert(EffectArr);
	EAE();
	
	eval(StartFunction);
    this.Speed = SpeedDelay;
	this.type = type;
	this.EndFunction = EndFunction;
	this.ID = ID;
	
	//if (window.ActiveXObject){//IE
	//reset element opacity to default
		if (type == 'out'){
			this.CurOp = 1;
		}else{
			this.CurOp = 0;
		}
	//}else{
		//this.CurOp = RP(ID).style.opacity;
	//}
	
	EffectArr = this;
   Fade(); //start fading
}

//Set Opacity
function SO(op,ID){
	 
	if ( window.ActiveXObject ){//IE
	
		_(ID).style.filter = 'alpha(opacity=' +  (op * 100) + ')';
   }else{ //Other browser
   //alert(_(ID).data);
   
     _(ID).style.opacity = String(op);
	 
	//alert(typeof(ID));
   }
}

//perform check and set opacity else stop dont set timmer loop Loop Set Opacity
function LSO(Condition){
	  
	if(Condition){
		
	   SO(EffectArr.CurOp,EffectArr.ID); //set the opacity
	   
	  setTimeout(Fade,EffectArr.Speed); //set timmer to repeat this procedure
   }else{
	  
	eval(EffectArr.EndFunction);
	   EffectArr = null;	 
   }
 
}


//fading procedure
function Fade(){
//alert(EffectArr.CurOp);
try{
	if(EffectArr.type == 'out'){
	 
	  EffectArr.CurOp = parseFloat(EffectArr.CurOp ) - 0.05;
	  LSO(parseFloat(EffectArr.CurOp) > -0.05);
  }else{
	  EffectArr.CurOp = parseFloat(EffectArr.CurOp ) + 0.05;
	  LSO(parseFloat(EffectArr.CurOp ) < 1.05);
  }
}catch(err){
	
}
  
}
//-------------------------------------------------------------------------------------




//Scale Effect ---------------------------------------------------------------------------
function SE(ID,ScaleTo,SpeedDelay,StartFunction,EndFunction){
	//check if a perticular scalling is in progress force it to complete
	
	Speed = SpeedDelay;
	EAE();
	//run start function
	eval(StartFunction);
	var MaxW = ScaleTo;
	this.ID = ID;
	this.MaxW = MaxW;
	this.speed = Speed;
	this.EndFunction = EndFunction;
	var scalee = false;// if scaleto value is not equals to widthval
	var type = '';
	if (MaxW < RV(_(ID).style.width)){
		type = 'in';
		scalee = true;
		
	}else if (MaxW > RV(_(ID).style.width)){
		type = 'out';
		scalee = true;
	}
	this.type = type;
	SEffectobj = this;
	if(scalee){
		Scale();
	}
	
}

//force the current scalling to end
function ForceSEComplete(){
	//if(SEffectobj.type == 'out'){
		
		CurrentW = RV(_(SEffectobj.ID).style.width);
		//alert(CurrentW);
		//if (SEffectobj.type == 'out'){
			RemainingW = SEffectobj.MaxW - CurrentW;
			SetElem(RemainingW);
			
		//}
		SEffectobj = null;
	//}
}

//set element size directly
function SetElem(SetVal){
	  elem = _(SEffectobj.ID);
	  var marginval = SetVal/2;
	  elem.style.width = (RV(elem.style.width) + SetVal) + 'px';
	  elem.style.height = (RV(elem.style.height) + SetVal) + 'px';
	  elem.style.marginBottom = (RV(elem.style.marginBottom) - marginval) + 'px';
	  elem.style.marginTop = (RV(elem.style.marginTop) - marginval) + 'px';
	  elem.style.marginLeft = (RV(elem.style.marginLeft) - marginval) + 'px';
	  elem.style.marginRight = (RV(elem.style.marginRight) - marginval) + 'px';
}

//scale module
function Scale(){
	//alert('kk');
	/*if (){
		
	}*/
	try{
		var ID = SEffectobj.ID;
	var MaxW = SEffectobj.MaxW;
	var Speed = SEffectobj.speed;
	var elem = _(ID);
	var W = elem.style.width;
	
	if(W == '' || W == null){ // if width is not set as style use the html width
		W = elem.width;
		
	}
	var elemW = RV(W);
	//alert(W);
	if(SEffectobj.type == 'out'){
			if (elemW <= MaxW){
				elem.style.width = (elemW + 2) + 'px';
				elem.style.height = (elemW + 2) + 'px';	
				//alert( elem.style.paddingBottom);
				elem.style.marginBottom = (RV(elem.style.marginBottom) - 1) + 'px';
				elem.style.marginTop = (RV(elem.style.marginTop) - 1) + 'px';
				elem.style.marginLeft = (RV(elem.style.marginLeft) - 1) + 'px';
				elem.style.marginRight = (RV(elem.style.marginRight) - 1) + 'px';
				//alert('w-' + elem.style.width + ', h-' + elem.style.height + ' b-,' + elem.style.marginBottom + ', t-' + elem.style.marginTop + ', l-' + elem.style.marginLeft + ', r-' + elem.style.marginRight)
				setTimeout(Scale,Speed);
			}else{
				eval(SEffectobj.EndFunction);
				SEffectobj = null;
			}
			
	}else{
		
			if (elemW >= MaxW){
				elem.style.width = (elemW - 2) + 'px';
				elem.style.height = (elemW - 2) + 'px';
				elem.style.marginBottom = (RV(elem.style.marginBottom) + 1) + 'px';
				elem.style.marginTop = (RV(elem.style.marginTop) + 1) + 'px';
				elem.style.marginLeft = (RV(elem.style.marginLeft) + 1) + 'px';
				elem.style.marginRight = (RV(elem.style.marginRight) + 1) + 'px';
				setTimeout(Scale,Speed);
			}else{
				eval(SEffectobj.EndFunction);
				SEffectobj = null;
			}
		
	   }
	}catch(err){
		
	}
	

}
//------------------------------------------------------------------------------------


//Resolve Value- get the numeric value of a value containimg unit
function RV(val){
	if (parseFloat(val)){
		return parseFloat(val);
	}else{
	return Number(val.substr(0,val.length-2));
	}
}


//Perform Menuclick show action (Show Menu Content)
function SMC(){
	//Check the number of argument recieved
	if(arguments.length == 1){
		
		arrmenuCont = _(arguments[0]);
		
	}else if(arguments.length > 1){
		arrmenuCont = _(arguments);
		
	}else{
		return;
	}
	//alert(arrmenuCont.length);
	//check if returned element is one
	if (typeof(arrmenuCont.length) == 'undefined'){
		RP(arrmenuCont).style.display = "block";
	}else{
		//alert({'faq,personnel,account'});
		if (arrmenuCont.length > 0){
			for(i=0;i<arrmenuCont.length;i++){
				if(i == 0){
					arrmenuCont[i].style.display = "block";
				}else{
					arrmenuCont[i].style.display = "none";
				}
			}
		}
	
	}
		//set back color
		/*arrmenu = _("mfaq","mpersonnel","maccount");
		arrmenu[0].className = "InnerHeadersicontextDiv";
		arrmenu[1].className = "InnerHeadersicontextDivW";
		arrmenu[2].className = "InnerHeadersicontextDivW";*/	
}

//Perform Menuclick show action (Show Menu Content Fade Effect) with Fade effect
//Requires Modifications
function SMCFE(){
 
	var str = '';
		if(arguments.length == 1){// if argument is 1
		
		ids = arguments[0];
		
	}else if(arguments.length > 1){ //if more than 1 put teh entire array
		ids = arguments;
		
	}else{
		return;
	}
		
	//alert(arrmenuCont.length);
	//check if returned element is one
	if (typeof(ids.length) == 'undefined'){// if is not an array
		if(typeof(arrmenuCont.id) != 'undefined'){ //if it has an id value set the SMC paramter to be the only string
			id = RP(arrmenuCont).id;
			str = '\'' + id + '\'';
		}
	}else{// if it is an array process the parameters as concatinated string of the ids
		
		if (ids.length > 0){
			//alert(ids.length);
			for(i = 0; i < ids.length; i++){
				
				if(i == 0){
					var id = RID(ids[i]);
				}
				str += ',\'' + RID(ids[i]) + "\'";
				
			}
			
		str = str.substr(1,str.length);// remove the leading comma
		}
	}
		
		if (str != ''){//if parameter is formed
		//alert(str);
		//alert(id);
			if (_(id).style.display == 'none'){
				
		  SO(0,id);
		  //alert(str)
		  FE(id, 'in',10, 'SMC(' + str + ')',''); //Fade in the display
		     }
		}
		
		
	
}


//Load file
 function LF(InputFileName,DisplayTxtElemID,EndFunction,fakeobj){
	 <!--document.getElementById('')-->
	 //Remove if one of dsame name exist
	 var DisplayTxt = DisplayTxtElemID;
	 var InputFile = InputFileName;
	 if(_(InputFile) != null){ 
		 _(InputFile).parentNode.removeChild(_(InputFile));
		 //alert('removed');
		 
	 }
	 
	 
	 //create a file element
	 var fileElem = document.createElement('input');
	 fileElem.setAttribute('name',InputFile);
	 fileElem.setAttribute('id',InputFile);
	 fileElem.setAttribute('style','display:none');
	 fileElem.setAttribute('type','file');
	 //alert('ss')
	 //add to the parent element
	 //document.getElementById('').parentNode.removeChild()
	 _(fakeobj).parentNode.appendChild(fileElem);
	 
	 
	 
	_(InputFile).onchange = function onchange(){LoadText(InputFile,DisplayTxt,EndFunction)};
	 _(InputFile).click();
     
 }
  function LoadText(InputFile,DisplayTxt,EndFunction){
	 //alert('aa')
	 //alert(InputFile);
	 _(DisplayTxt).innerHTML = _(InputFile).value;
	 //return _(InputFile).value;
	 eval(EndFunction);
	 event.preventDefault();
 }
 
 var trim = function(val){
	return val.replace(/^\s+|\s+$/g,'')
}
 
 //Trim last n character 
var triml = function(val,n){
	if (val != null && val.length > n){
		val = val.substr(0,val.length-n)
	}
	return val;
}
 //Ajax
 //------------------------------------------
  

 

 
