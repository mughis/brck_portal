<html>
<?php	
	$stn=$_POST['stn'];
	$fn=$_POST['fn'];
	$english=$_POST['eng'];
	$maths=$_POST['math'];
	$physics=$_POST['phy'];
	$chemistry=$_POST['chy'];
        $computer=$_POST['com'];
	$total=$english+$maths+$physics+$chemistry+$computer;
	$remark1=0;
	$remark2=0;
	$remark3=0;
	$remark4=0;
	$remark5=0;
	$percentage = ($total*100)/500;
	$eng='English';
	$math='Maths';
	$phy='Physics';
	$chem='Chemistry';
        $com='Computer';

	
	if($english >= 90){
		$remark1= "A+";  
	}else if($english >= 80 && $english <= 89){
		$remark1="A";     
        }else if($english >= 70 && $english <= 79){
		$remark1="B";     
        }else if($english >= 60 && $english <= 69){
		$remark1="C"; 
        }else if($english >= 50 && $english <= 59){
		$remark1="D";         
	}else{
		$remark1='Fail';
	}

        if($maths >= 90){
		$remark2= "A+";  
	}else if($maths >= 80 && $maths <= 89){
		$remark2="A";     
        }else if($maths >= 70 && $maths <= 79){
		$remark2="B";     
        }else if($maths >= 60 && $maths <= 69){
		$remark2="C"; 
        }else if($maths >= 50 && $maths <= 59){
		$remark2="D";         
	}else{
		$remark2='Fail';
	}

        if($physics >= 90){
		$remark3= "A+";  
	}else if($physics >= 80 && $physics <= 89){
		$remark3="A";     
        }else if($physics >= 70 && $physics <= 79){
		$remark3="B";     
        }else if($physics >= 60 && $physics <= 69){
		$remark3="C"; 
        }else if($physics >= 50 && $physics <= 59){
		$remark3="D";         
	}else{
		$remark3='Fail';
	}

        if($chemistry >= 90){
		$remark4= "A+";  
	}else if($chemistry >= 80 && $chemistry <= 89){
		$remark4="A";     
        }else if($chemistry >= 70 && $chemistry <= 79){
		$remark4="B";     
        }else if($chemistry >= 60 && $chemistry <= 69){
		$remark4="C"; 
        }else if($chemistry >= 50 && $chemistry <= 59){
		$remark4="D";         
	}else{
		$remark4='Fail';
	}

	if($computer >= 90){
		$remark5= "A+";  
	}else if($computer >= 80 && $computer <= 89){
		$remark5="A";     
        }else if($computer >= 70 && $computer <= 79){
		$remark5="B";     
        }else if($computer >= 60 && $computer <= 69){
		$remark5="C"; 
        }else if($computer >= 50 && $computer <= 59){
		$remark5="D";         
	}else{
		$remark5='Fail';
	}

	
?>

<center>
    <table border=1>
	<tr>
	    <td>
		<table width=100%>
			<tr><td><font size='4'>Name of Student....:<?php echo "$stn"; ?></font></td></tr>
			<tr><td><font size='4'>Father Name........:<?php echo" Mr.$fn";?></font></td></tr>
		</table>
            </td>
	</tr>
	<tr>
	    <td>
		<table border=1 width=100%>
			<tr><th><i>Subject code</i></th><th><i>Subject name</i></th><th><i>Total Marks</i></th><th><i>Obtained Marks</i></th><th><i>Grade</i></th></tr>
			
			<tr><td>101</td><td>English  </td><td>100</td><td><?php echo "$english"; ?>  </td><td><?php echo "$remark1"; ?></td></tr>
			<tr><td>102</td><td>Maths    </td><td>100</td><td><?php echo "$maths"; ?>    </td><td><?php echo "$remark2"; ?></td></tr>
			<tr><td>103</td><td>Physics  </td><td>100</td><td><?php echo "$physics"; ?>  </td><td><?php echo "$remark3"; ?></td></tr>
			<tr><td>104</td><td>Chemistry</td><td>100</td><td><?php echo "$chemistry"; ?></td><td><?php echo "$remark4"; ?></td></tr>
                        <tr><td>105</td><td>Computer </td><td>100</td><td><?php echo "$computer"; ?>  </td><td><?php echo "$remark5"; ?></td></tr>
			<tr><td></td><td><b>Total</b></td><td><b>500</b></td><td><b><?php echo "$total"; ?><b></td><td></td></tr>
                        
		</table>
	    </td>
	</tr>
		<tr>
		<td>
			<table>
				<tr><td><b><font size='4'>Result:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$percentage"."%"; ?></font></b></td></tr>
			</table>
		</td>
		</tr>
	</table>
</center>

</html>
