function validate_contact()
{
		var arr=new Array();
arr[0] 		=			isBlank('txtName','Enter your name');
arr[1]		=			isBlank('txtEnquiry','Enter enquiry');
arr[2]		=			isBlank('txtEmail','Enter valid email id');
if(arr[2]	==	true)
{
	arr[2]		=			emailCheck('txtEmail','Enter valid email id');
}

var flag    =			true;
for(var ctr=0;ctr<arr.length;ctr++)
{

		if(arr[ctr]==false)
		{
			flag=false;
		}
}
var arr_val=new Array();
if(flag==true)
{
	
	arr_val[0]=getVal('txtName');
	arr_val[1]=getVal('txtEmail');
	arr_val[2]=getVal('txtEnquiry');
	var qrstring="";
	for(var x=0;x<arr_val.length;x++)
	{
		var objN="a"+x;
		qrstring += "&"+objN+"="+arr_val[x];
	}
	var url     =    "submitting.php?act=1"+qrstring;
	process(url,contactUpdated);	

}

	return false;
}
function contactUpdated()
{
	var data  = handleResponse("text");
	if(data!=undefined)
	{
		if(data=="OK")
		{
		document.getElementById('cform').style.display='none';
		document.getElementById('cformafter').innerHTML="Thank you contacting with us. We will contact you soon";
		document.getElementById('cformafter').style.display='';
		setTimeout('delayer_refresh("index.html")', 5000);
		}
	}
}

function delayer()
{
	window.location="index.php";
}
function delayer_refresh(url)
{
	window.location=url;
}

function isBlank(objName,DefValue)
{

    if( (document.getElementById(objName).value == "") ||  (document.getElementById(objName).value== DefValue) ){
		document.getElementById(objName).style.color ="red";
		document.getElementById(objName).value = DefValue;
		return false;
	}
	else
	{
		return true;
	}
	
}
function getCheckedVal(objName)
{
	var chk=document.getElementById(objName).checked;
	if(chk==true)
	{
		return '1';
	}
	else
	{
	return '0';
	}
}
function isBlankDDL(objName,DefValue,DisplaySpan)
{

    if( (document.getElementById(objName).value == "0") ||  (document.getElementById(objName).value == "") || (document.getElementById(objName).value== DefValue) ){
		document.getElementById(DisplaySpan).style.color ="red";
		document.getElementById(DisplaySpan).innerHTML = DefValue;
		return false;
	}
	else
	{
		document.getElementById(DisplaySpan).innerHTML = '';
		return true;
		
	}
	
}
function changecolor(objName,DefValue){ 
  
    if(document.getElementById(objName).value == DefValue){	
	document.getElementById(objName).style.color ="#111111";
	document.getElementById(objName).value = "";  
	
	}
	
}

function getVal(objName){   
    return document.getElementById(objName).value;
}


function emailCheck(objName,DefValue)
{
	if( (!echeck(document.getElementById(objName).value)) ||  (document.getElementById(objName).value== DefValue) ){
		
document.getElementById(objName).style.color ="red";
document.getElementById(objName).value = DefValue;
return false;
	}
	else
	{
		return true;
		}
	
}

// used to show controls based the selection 


function echeck(value) {
var re = new RegExp(/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i);

if (re.test(value)) {
     return true;
} 
else{ 
     return false;
} 

}
