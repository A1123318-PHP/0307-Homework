<html>
    <head>
        <title>
            報名表收到內容
        </title>
    </head>
    
    <body bgcolor="#E6D6F0">
        <meta charset = "UTF-8">
        <h1><B><center>報名表收到內容</center></B></h1>
        <hr>
        <?php
        $sName = $_POST["studentName"];
        $sID = $_POST["studentID"];
        $sGender = $_POST["studentGender"];
        $sBtd = $_POST["studentBtd"];
        $sIDCard = $_POST["studentIDcard"];
        $sEating = $_POST["studentEating"];
        $sPhone = $_POST["studentPhone"];
        $sEmail = $_POST["studnetEmail"];
        $sContact1Name = $_POST["contact1Name"];
        $sContact1Phone = $_POST["contact1Phone"];
        $sContact1Relationship = $_POST["contact1Relationship"];
        $sContact2Name = $_POST["contact2Name"];
        $sContact2Phone = $_POST["contact2Phone"];
        $sContact2Relationship = $_POST["contact2Relationship"];
        $sContact3Name = $_POST["contact3Name"];
        $sContact3Phone = $_POST["contact3Phone"];
        $sContact3Relationship = $_POST["contact3Relationship"];
        $sCommute = $_POST["commute"];
        $sColor = $_POST["likeColor"];
        $sPayMethods = $_POST["payMethods"];
        $sComment = $_POST["uComment"];
        echo "姓名：".$sName."<br>";
        echo "學號：".$sID."<br>";
        echo "性別：".$sGender."<br>";
        echo "生日：".$sBtd."<br>";
        echo "身分證：".$sIDCard."<br>";
        echo "飲食：".$sEating."<br>";
        echo "電話：".$sPhone."<br>";
        echo "Email：".$sEmail."<br>";
        if($sContact1Name == "" && $sContact1Phone == "" && $sContact1Relationship == ""){
            echo "緊急聯絡人1未填寫<br>";
        }else{
            echo "緊急聯絡人1姓名：".$sContact1Name." 電話：".$sContact1Phone." 關係：".$sContact1Relationship."<br>";
        }
        if($sContact2Name == "" && $sContact2Phone == "" && $sContact2Relationship == ""){
            echo "緊急聯絡人2未填寫<br>";
        }else{
            echo "緊急聯絡人2姓名：".$sContact2Name." 電話：".$sContact2Phone." 關係：".$sContact2Relationship."<br>";
        }
        if($sContact3Name == "" && $sContact3Phone == "" && $sContact3Relationship == ""){
            echo "緊急聯絡人3未填寫<br>";
        }else{
            echo "緊急聯絡人3姓名：".$sContact3Name." 電話：".$sContact3Phone." 關係：".$sContact3Relationship."<br>";
        }
        $CommuteCount = count($sCommute);
        if($CommuteCount > 0){
            echo "通勤需求：";
            for($i = 0; $i < $CommuteCount; $i++){
                if($i == $CommuteCount - 1){
                    echo $sCommute[$i];
                }else{
                    echo $sCommute[$i]." , ";
                }
            }
            echo "<br>";
        }else{
            echo "通勤需求未填寫<br>";
        }
        echo "付款方式：".$sPayMethods."<br>";
        echo "參加證明顏色偏好：".$sColor."<br>";
        echo "其他需求：<br>".nl2br($sComment);
        ?>
    </body>
</html>