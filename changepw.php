<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>비밀번호 변경</title>
</head>
<body>
<section>
        <div class="mainCon">
            <div class="registerTitle">비밀번호 변경</div>
            <div class="changePw">
            <form action="member_process.php?mode=changepw" method="post">
                <input type="hidden" name="userid" value="<?= $_GET['id']?>">
                <p>새 비밀번호 입력 : <input type="pw1"  name="pw1" size="30"></p>
                <p class="findEmail">새 비밀번호 확인 : <input type="pw2"  name="pw2" size="30"></p>
                <p><input type="radio"  name="type" id="type" value="tattooist" checked/>타투이스트
                    <input type="radio"  name="type" id="type" value="noraml"/>일반 회원</p>
                <div class="findBtn">
                <input type="submit" value="변경">&nbsp;&nbsp;&nbsp;
                <input type="button" value="취소" onclick="history.back(1)">
                </div>
            </form>
            </div>
        </div>
    </section>
</body>
</html>