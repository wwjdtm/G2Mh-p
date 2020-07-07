<?php

      $to = "nukky@naver.com";

      $subject = "홈페이지를 통한 이메일 문의";
   
      $contents = $_POST['comment']."\r\n"." 문의자 : ".$_POST['name']."\r\n"."From: ".$_POST['email']."\r\n";
   
    //   $headers = "From: ".$_POST['email']."\r\n";

    $headers = " ";
   
   
   
      mail($to, $subject, $contents, $headers);
?>
<meta charset="utf-8">

<script>

    alert("전송되었습니다.");
    location='/';
</script>