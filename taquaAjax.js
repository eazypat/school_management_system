// Taqua Ajax

 var TaquaAjax = function(){
	 
	this.req = null;
	this.url = '';
	this.method = "GET";
	this.HandleResp = null;
	this.HandleError = null;
	this.GetStr = null;
	this.readyState = null;
	this.responseText = '';
	this.status = null;
	this.statusText = '';
	
	this.asyn = true;
	this.format = 'text';
	this.postData = null;
	this.mtype = null;
	//initialize the XMLHTTPRequest Object
	this.init = function(){
		if(!this.req){ //if req is null create a new xmlhttprequest
			if (window.XMLHttpRequest){
			   this.req = new window.XMLHttpRequest	
			}else{
			   if(window.ActiveXObject){
				  try{
					 this.req = new ActiveXObject("Msxml2.XMLHTTP"); 
				  }catch(err1){
					  try{
						  this.req = new ActiveXObject("Microsoft.XMLHTTP");
					  }catch(err2){
						  return false;
					  }
				  }
			   }
				
			}
	  
		}
	return this.req;
	};
	
	//send request
	this.SendReq = function(){
	
		if(!this.init()){
			//alert(this.init()); //create the xmlhttprequest object
			alert('Cannot perform operation, unable to create required object');
			return;
		}
			//alert('inside-' + this.req);
		//process url
		//var rand = parseInt(Math.random() * 9999999999999999);
		var st = new Date;
		st = st.getTime();
		var inte = (this.GetStr)?'&':'?'; //if getstring is supplied concatinate rand else use only rand
		this.url += inte + 'rand=' + st ;
		//alert(this.url);
		//alert(this.GetStr);
		this.req.open(this.method, this.url, this.asyn); //open a server connection
		
		//Set the content type to form if request method is post
		if(this.method == 'POST'){
			this.req.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		}
		
		//overide the mimetype if set
		if(this.mtype){
			try{
				this.req.overrideMimeType(this.mtype);
			}catch(er){
				//cannot overide the mimetype
			}
		}
		
		var main = this; //lost - focus - problem put the current class/ object in a variable so as to use it in the another function
		this.req.onreadystatechange = function(){ //function to execute when request state change
		
			var responce = null; //variable to hold the returned responce
			 if(main.req.readyState == 4){ //if request operation complete
				 switch (main.format){ //check format expected and intialize responce as required
					 case 'text':
					 responce = main.req.responseText;
					 break;
					 case 'xml':
					 
					 responce = main.req.responseXML
					// alert(responce);
					 break;
					 case 'object':
					 responce = main.req;
					 break;
				 }
				 //alert(responce);
		       if(main.req.status >= 200 && main.req.status <= 299){ //if no http error
				   main.HandleResp(responce); //call the responce handler sending the responce as parameter
		        }else{
					//alert(main.req.status);
					if(main.HandleError){ //if there is user specified error Handler Use it
						main.HandleError(main.req.status);
					}else{
						main.HandleErr(responce); //error handler(in built)
					}
			     
		        }
	          }
		};
		this.req.send(this.postData);
	};
	
	//function to set the mtype/ header
	this.setmtype = function(mimetype){
		this.mtype = mimetype;
	}
	
	//Handle error
	this.HandleErr = function(responseT){
		var errorwin;
		try{
		/*errorwin = window.open('','errorWindow');
		errorwin.document.body.innerHTML = this.req.statusText;*/
		//alert('error - ' + responseT);
		}catch(e){
			alert('Error occured, but details cannot be displayed');
		}
		//this.abort() //abort the entire request
	}
	
	//Abort the request
	this.abort = function(){
		if(this.req){
		  this.req.onreadystatechange = function() {};
		  this.req.abort();
		  this.req = null;
		}
		
	}
	
	//Alow user to call the retuest
	this.GetResponse = function(url,handler,format,GetStr,ErrHandler){
		this.GetStr = GetStr;
		if(GetStr == null || empty(GetStr)){
			this.GetStr = null;	
		}else{
			url += '?' + GetStr;
		}
		this.HandleError = ErrHandler || null;
		this.url = url;
		this.HandleResp = handler;
		this.format = format || 'text';
		this.SendReq(); //send the request
	}
	
	
	this.PostResponse = function(postData,url,handler,format,ErrHandler){
		
		this.url = url;
		this.HandleResp = handler;
		this.HandleError = ErrHandler || null;
		this.format = format || 'text';
		this.method = 'POST';
		this.postData = postData;
		this.SendReq(); 
	}
	
	/*this.Get = function(url,handler,ErrHandler){
		this.PostResponse("",url,handler,"text",ErrHandler);
	}*/
	
 }