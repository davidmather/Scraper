

<?php
set_time_limit (400);
$array = array();
$pages = array(
"http://jobseeker.fas.ie/Default.aspx?q=B+fomdowzS8kaDnSlUDk1zaMUPiFEeNrlmOYU5gMZQYfCBe63sXdX1w5KdjcI6KB9QiM+cgurHyeZril30oQQK6n7GqaAwKr16uyOmyeCc2SkMoCC12xhx8dx5Vcaz3fyCGmp6eN1RvnQqxh050VRrEVjEl+FmX2g4JBfto1wUs/3YGtB9QKbmeiXJI27v8rMP+ydzcUgHlAGbAetNyu3+sQLMH+RwwUFONmI0EzmRM8+u4nU+nbEBHVdihLIYinsX9Bre7iKXmbAdOGO8dmw37BzUvOOkKMOPnGrc2i4mTtQJvzLVOiRWmxyJj5WxYJgg6sgsVESNucgpRyONZ0zEKfcpIrBFh+yOACmJkeckIrt9b6am38L9IVI26SqfRtaBKFR91tGveej6hq3OaQ78cFIGVdG34X2aezScBAjkD+bBBPiyo7mXfgsvQrlDs6uQM6wBavRkDGk5zHtg5jUwGFXSfzdEkI",
"http://jobseeker.fas.ie/Default.aspx?q=B+fomdowzS8kaDnSlUDk1zaMUPiFEeNrlmOYU5gMZQYfCBe63sXdX1w5KdjcI6KB9QiM+cgurHyeZril30oQQK6n7GqaAwKr16uyOmyeCc2SkMoCC12xhx8dx5Vcaz3fmZ30k9kHJfFch7HTYoOX2T/I2Ya6a4Sl8tpRWKJFoou0mAZrj774w61jCgzH78fnSLkJrGrbfB+ay7UjhENWRfrYfxLbgOlsyHFUB8v8sD6eFx5jNuWsL7pWV53pTwU91wUgmub3ONyMRsMXTTXpf+Vedh6CJCKE9Bv55dibFb9pTWOQiG5TDeXaasOjwdyJ38LNm06gz5XF/N8LMiehkZ2CGgKe0o2RkUgwKZYJFynJI0V5wWjCdqKEREwOBjCEM9SHbeO3n+cbwl+dBDJ0WWKm+w4sJ+LnuRhPUTptWPzG1++Fy9Cz0Cf+sjLtAxUCyPS14W5eW2GIkPYhHsc13DZsEux/ATCM",
"http://jobseeker.fas.ie/Default.aspx?q=B+fomdowzS8kaDnSlUDk1zaMUPiFEeNrlmOYU5gMZQYfCBe63sXdX1w5KdjcI6KB9QiM+cgurHyeZril30oQQK6n7GqaAwKr16uyOmyeCc2SkMoCC12xhx8dx5Vcaz3feeVujCw0DUtR8emcDOlEiN9YlOmwIInVMBXdhi0Hlmq7LbHb8Gd2PZtmihtiGW2nITwcc6nzWe4e1QwkCgYUP8oHcNJXY7cPRvWGyMJkfO1PXueEX9uRdcUnHGAg2k3JQq3TwJvOxWMGskn5eLikms2z35t86k1WkUwjTPJXv+ZBNw0SWQoiTSOSKxXs/D7hpaDijE0Zqvk+WWyeLkFGOjYdHFzNg2dI+R16fLLsDQD9+Ar6/hj8fiVykKYySZOm2dOJAf4F/DlzJBzUBrOTmyX2sea9gXifhWOImkoqL15MIVaOhDrQ/7PJWWAxG64aiTNfGBsWGwA6GYHFBjxQVxteOeinzTEJ",
"http://jobseeker.fas.ie/Default.aspx?q=B+fomdowzS8kaDnSlUDk1zaMUPiFEeNrlmOYU5gMZQYfCBe63sXdX1w5KdjcI6KB9QiM+cgurHyeZril30oQQK6n7GqaAwKr16uyOmyeCc2SkMoCC12xhx8dx5Vcaz3fMrJw2JklFvpxGsd3ob8pWoe3ej3XGbvDXlOEsFKttWJO+xZF0+VrIr5sCQdMTf3mUharzy4VVrxr3pkAyYOToQXZvZp5NeWOjWU9nUDHmP8hYyzLnQv6Fq3jfI89m1J9NcsIsJscN1Z1R5L83pRZ7HUsYmyMGib9UlXmhwTam9xqt+xLf/0FFsjDSkkc/3hA7bfI+Y/rwxnF+b28LeRyLBelXgOFYrR2rk6sKbblxSkijLIyxtFOuZVlnNNZdTFPUimmQxctHkhsH4PnBjEmkhOQ6R1dWpF0fRySOGEjwRYfC+6eNr1eqQGIyAFmVguJRq1vEF5YHBtuRYz6zZAnztaE1Wprk8iv",
"http://jobseeker.fas.ie/Default.aspx?q=B+fomdowzS8kaDnSlUDk1zaMUPiFEeNrlmOYU5gMZQYfCBe63sXdX1w5KdjcI6KB9QiM+cgurHyeZril30oQQK6n7GqaAwKr16uyOmyeCc2SkMoCC12xhx8dx5Vcaz3fAFHFybaQPnbR17NZapHRqWWSZQUzRmH9KHDCfgUMp388ZyrL11UjQ98N9JhdFnpdUvzJn5Le1obleYRodJ3teGKi4qg5Dfz8XXpk1G1BImtuwPX25xRkaa7jzoKsAdWGi6YnLpRLbNBjHrsZarjS1AjYrS2dNTjt7luZXeq1USzvNtwH4N+2oI4cXE0ZE11L/51W0/IrAbfw2QVMOw1FZEFQP5cRLIrBqW9DRb5FQGatx8ZerZNTvzZpx6L6SyGjWW7/PW7cje0AkUDSFW8Vt/zipoE4l7kvsmZ9HfH3S3Y5uMp3SMCD19Lu/unlNq7jMJanZZdmrt1FOvLkDOFdC8y3++I1D2u7",
"http://jobseeker.fas.ie/Default.aspx?q=B+fomdowzS8kaDnSlUDk1zaMUPiFEeNrlmOYU5gMZQYfCBe63sXdX1w5KdjcI6KB9QiM+cgurHyeZril30oQQK6n7GqaAwKr16uyOmyeCc2SkMoCC12xhx8dx5Vcaz3fbpSzsZoy5gsepNpxCWvHIYD8GQp6h3Flm73mVLIp+skadAY5NzpE9u52230NA3eBu6H1AqOF0+eFyX5fZ6Tkr4rCnj4jdhN5zXPKq7Wwzk6udWwKwksN/ZJ+GqJ848Bujyt5hJbNp8XQ6sbUN4dl+LixPiR8TrFacBCC9JQayUArvvctGHVTnzcNU5tL0C52uCojDphlYYTA1Tt+rl28saiIBumOqVUqaSJrBjfdjvyIsAxvVebl2RNZVLBjsPG4KNEANkDsN0BvdiNhAOEGzgCJT+tHQtY9CEhBkd2zcNT2IUYQFgZqqUVSvav2Q+rk91UQrCcLiVf8WGYyNns2eQj2xxL5ZDRb",
"http://jobseeker.fas.ie/Default.aspx?q=B+fomdowzS8kaDnSlUDk1zaMUPiFEeNrlmOYU5gMZQYfCBe63sXdX1w5KdjcI6KB9QiM+cgurHyeZril30oQQK6n7GqaAwKr16uyOmyeCc2SkMoCC12xhx8dx5Vcaz3fEChDETTKB9l3au27pZetF5D9Mj09/MEn0oq7H8v8UBrtLzg1C81jqtPseKP128JPRtCdshy4egqMPt23CxlTVehJkxa3dPvNHCsm93YvliCjrWr6K7IQ6bzjSJ4HpLAL3rZOIOqIq2KtdSzCyeLPHwUBptAosEz5f+LYtGtjqJH7aculkPDEf+IFuJTL6Hj+nFlwf2LgrtEE9agLQ57KtYW/cN3nGRaC+GpSfFAw1uNupRdPN1flmTcYaTy0qWmbcgaf5kKviS3cpKeSw9gg0J6uL995KaqqHgCBCjp5zp27IVLFfGseU/pFavZwwETgm//lbEw1+mJvVH4zXiFMtBLbnvCf37uL"
);
foreach($pages as $page){
$content = file_get_contents($page);

  $count=0;
  $regexp = "<a\s[^>]*href=(\"??)([^\" >]*?)\\1[^>]*>(.*)<\/a>";
  if(preg_match_all("/$regexp/siU", $content, $matches, PREG_SET_ORDER)) {
    foreach($matches as $match) {
	
	if (preg_match('/Default.aspx?/',$match[2])&&(preg_match('/fomdowz/',$match[2]))&&($count<42)){
		
		$test=trim($match[2],"'");
		$count=$count+1;
		if(isset($test)){
			$contents = file_get_contents("http://jobseeker.fas.ie/".$test);
			    if(preg_match_all("/$regexp/siU", $contents, $matchees, PREG_SET_ORDER)) {
			    foreach($matchees as $matche) {
				
				if (preg_match('/mailto/',$matche[2])){
					
					array_push($array,trim($matche[3],"'"));
				    
				}

			      
			      // $match[3] = link text
			    }
			 }
		
	    
		}
	}
	else {
		
	
	}

      
      // $match[3] = link text
    }
    }
}

$array = array_unique($array);

    date_default_timezone_set( 'Europe/Dublin' ); //eircom
    $from_email = 'davidmather@live.ie'; //sender email
   
    $subject = 'Job Application'; //subject of email
    $message = file_get_contents("cv3.html"); //message body
   
    //get file details we need
    $file_tmp_name    = $_FILES['my_file']['tmp_name'];
    $file_name        = $_FILES['my_file']['name'];
    $file_size        = $_FILES['my_file']['size'];
    $file_type        = $_FILES['my_file']['type'];
    $file_error       = $_FILES['my_file']['error'];
   
    $user_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    if($file_error>0)
    {
        die('upload error');
    }
    
    //read from the uploaded file & base64_encode content for the mail
    $handle = fopen($file_tmp_name, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $encoded_content = chunk_split(base64_encode($content));


        $boundary = md5("sanwebe");
	
        //header
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "From:".$from_email."\r\n";
        $headers .= "Reply-To: ".$user_email."" . "\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary = {$boundary}\r\n\r\n";
       
        //plain text
        $body = "--{$boundary}\r\n";
        $body .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= chunk_split(base64_encode($message));
       
        //attachment
        $body .= "--{$boundary}\r\n";
        $body .="Content-Type: {$file_type}; name=\"{$file_name}\"\r\n";
        $body .="Content-Disposition: attachment; filename=\"{$file_name}\"\r\n";
        $body .="Content-Transfer-Encoding: base64\r\n";
        $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
        $body .= $encoded_content;
	foreach($array as $recipient_email){
	if (!filter_var($recipient_email, FILTER_VALIDATE_EMAIL)) {
	  
	}
	else
	{
		 echo $t."</br>";
		 $sentMail = @mail($recipient_email, $subject, $body, $headers);
		    if($sentMail) //output success or failure messages
		    {      
		        
		    }else{
		        die('Could not send mail! Please check your PHP mail configuration.');  
		    }
	}
}




?>

