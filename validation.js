function val1(a)
{
document.getElementById(a).innerHTML="";
}
function validation2()
{
	var a=document.f.t.value;
	var b=document.f.t1.value;
	var c=document.f.t2.value;
	var d=document.f.t3.value;
    flag=true;

	var alpha=/^[a-z A-Z]+$/;
	var alpha2=/^[A-Z]+$/;
	var first=a.charAt(0);
	var no=/^[0-9]+$/;
	var ct=0;
	var at=0;
	var nt=0;
	var dt=0;
	for(i=0;i<c.length;i++)
	{
		var schar=c.charAt(i);
		if(schar.match(alpha))
		{
			ct++;
		}
		if(schar.match(no))
		{
			nt++;
		}
		if(schar=="@")
		{
			at++;
		}
		if(schar==".")
		{
			dt++;
		}
	}
		if(a=="" && b=="" && c=="" && d=="")
	{
		alert("full form is empty");
		flag=false;
	}
else
	{
		if(a=="")
		{
			document.getElementById('name').innerHTML="Name field is blank";
			flag=false;
		}
		else if(a.length<5)
		{
			document.getElementById('name').innerHTML="Name must be having 5 characters";
			flag=false;
		}
		else if(!(a.match(alpha)))
		{
			document.getElementById('name').innerHTML="Enter only character";
			flag=false;
		}
		else if(!(first.match(alpha2)))
		{
			document.getElementById('name').innerHTML="First character is the capital";
			flag=false;
		}
		if(b=="")
		{
			document.getElementById('placename').innerHTML="Placename is blank";
			flag=false;
		}
		
		if(c=="")
		{
			document.getElementById('id').innerHTML="email is blank";
			flag=false;
		}
		else if(ct<1 || dt<1 ||nt<1 || at!=1)
		{
			document.getElementById('id').innerHTML="Invaild Email-id";
			flag=false;
		}
		else if(firstno=="@" || firstno==".")
		{
			document.getElementById('id').innerHTML="Invaild first character";
			flag=false;
		}
		
		
		if(d=="")
		{
			document.getElementById('msg').innerHTML="Message is blank";
			flag=false;
		}
		
	}
	return flag;
}
