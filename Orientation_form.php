<html>
    <head>
        <title>
            迎新活動報名表
        </title>
    <body bgcolor="#E6D6F0">
        <meta charset = "UTF-8">
        <h1><B><center>迎新活動報名表</center></B></h1>
        <hr>

        <form action = "Orientation_result.php" method="POST">
            <h1><b>基本資料(含保險資料)</b></h1>
            <OL>
                <H2><OL>姓名：<input type = "text" size = "30" name = "studentName"></OL></H2>
                <H2><OL>學號：<input type = "text" size = "30" name = "studentID"></OL></H2>
                <H2><OL>性別：<input type = "radio" name = "studentGender" value = "男" size = "30">男 <input type = "radio" name= "studentGender" value = "女" size = "30">女 <input type = "radio" name= "studentGender" value = "其他" size = "30">其他</OL></H2>
                <H2><OL>生日：<input type = "date" name = "studentBtd" size = "30"></OL></H2>
                <H2><OL>身分證：<input type = "text" name = "studentIDcard" size = "30"></OL></H2>
                <H2><OL>飲食：<input type = "radio" name = "studentEating" value = "葷食" size = "30">葷食 <input type = "radio" name = "studentEating" value = "素食" size = "30">素食</OL></H2>
            </OL>
            <h1><b>聯絡資料</b></h1>
            <OL>
                <H2><OL>電話：<input type = "text" name = "studentPhone" size = "30"></OL></H2>
                <H2><OL>Email：<input type = "email" name = "studnetEmail" size = "30"></OL></H2>
                <table border="1" style="font-size: 24px;">
                    <tr><td></td><td><center>姓名</center></td><td><center>電話</center></td><td><center>關係</center></td></tr>
                    <tr><td>緊急聯絡人1</td><td><input type = "text" name="contact1Name" style="font-size: 24px;"></td><td><input type = "text" name="contact1Phone" style="font-size: 24px;"></td><td><input type = "text" name="contact1Relationship" style="font-size: 24px;"></td></tr>
                    <tr><td>緊急聯絡人2</td><td><input type = "text" name="contact2Name" style="font-size: 24px;"></td><td><input type = "text" name="contact2Phone" style="font-size: 24px;"></td><td><input type = "text" name="contact2Relationship" style="font-size: 24px;"></td></tr>
                    <tr><td>緊急聯絡人3</td><td><input type = "text" name="contact3Name" style="font-size: 24px;"></td><td><input type = "text" name="contact3Phone" style="font-size: 24px;"></td><td><input type = "text" name="contact3Relationship" style="font-size: 24px;"></td></tr>
                </table>
            </OL>
            <h1><b>活動細節事項</b></h1>
            <OL>
                <H2><OL>通勤需求：<input type = checkbox name = "commute[]" value = "去程">去程 <input type = checkbox size = "30" name = "commute[]" value = "回程">回程</OL></H2>
                <H2><OL>付款方式：<input type = radio name = "payMethods" value = "現金" size = "30">現金 <input type = radio name = "payMethods" value = "信用卡" size = "30">信用卡 <input type = radio name = "payMethods" value = "超商" size = "30">超商</OL></H2>
                <H2><OL>參加證明顏色偏好：<input type = color name = "likeColor"></OL></H2>
            </OL>

            <H2>其他需求：</H2>
            <textarea cols="40" rows="10" name="uComment" style="resize: none; font-size: 25px;"></textarea>
            <center><input type = "submit" value = "送出" style="font-size: 24px;"><input type = "reset" value = "清除"style="font-size: 24px;"></center>
        </form>
    </body>
</html>