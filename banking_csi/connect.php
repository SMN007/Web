<HTML>
    <HEAD>
        <TITLE>LOGIN PAGE</TITLE>
<LINK REL="STYLESHEET" HREF="style.css" TYPE="TEXT/CSS"/>
    </HEAD>
    
    <BODY>
        
        <DIV ID="WRAPPER">
        <DIV ID="HEADER">
            <DIV ID="H1"></DIV>
            <DIV ID="H2">
                <ul>
                    <li><a HREF="index.html">HOME</a></li>
                    <li><a HREF="reg.html">REGISTER</a></li>
                    <li><a HREF="about.html">ABOUT</a></li>
                    <li><a HREF="contact.html">CONTACT</a></li>
                </ul>
            </DIV>
            </DIV>
        <DIV ID="MENU"></DIV>
        <DIV ID="CONTENT">
    <?php
	$userid=$_POST["uid"];
	$password=$_POST["pwd"];
	$name=$_POST["name"];
	$contact=$_POST["contact"];
	$email=$_POST["email"];
	$address=$_POST["address"];
	$gender=$_POST["gender"];
	$lastqual=$_POST["lq"];
	$interests=implode(",", $_POST['interests']);
include ("connection.php");
$sql = "insert into user_details
(
user_id,
password,
Name,
Contact,
Email,
Address,
Gender,
Qual,
Interests
)
values('$userid','$password','$name','$contact','$email',
'$address','$gender','$lastqual','$interests')";

	//$result = mysql_query($sql);
    $result = mysqli_query($con,$sql);
	if ($result)
		{
		echo "<b>"."<i>"." Successfully Data Inserted"."</i>"."</b>"."<br>";
		echo "<b>"."<i>"." Click Here For Login"."<a href='index.html'>Login</a>"."</i>"."</b>";
		}
	else
		{
		//echo die(mysql_error());
        echo die(mysqli_error($con));
		}
?>
    </DIV>
        <DIV ID="COMMENT"></DIV>
        <DIV ID="FOOTER"></DIV>
        </DIV>
        
    </BODY>
</HTML>




