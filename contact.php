<?php
    session_start();

    error_reporting(0);

    $title = "Зв`язок";

    require_once "block/header.php";
?>
<div class="main_c">
    <h1 class="m">Напиши нами</h1>

    <div class="block_c">
        <img src="style/gerb-ukr.jpg">
        <div class="text-success"><?=$_SESSION['success_mail']?></div>
        <form action="check_contact.php" method="post">
            <input type="text" name="username" value="<?=$_SESSION['user_name']?>"  placeholder="Ведіть ім'я" class="from-control">
            <div class="text-danger"><?=$_SESSION['error_username']?></div><br>
            <input type="text" name="email" value="<?=$_SESSION['email']?>"  placeholder="Ведіть email" class="from-control">
            <div class="text-danger"><?=$_SESSION['error_email']?></div><br>
            <input type="text" name="subject" value="<?=$_SESSION['subject']?>"  placeholder="Тема повідомлення" class="from-control">
            <div class="text-danger"><?=$_SESSION['error_subject']?></div><br>
            <textarea name="message" placeholder="Ваше повідомлення" class="from-control"><?=$_SESSION['message']?></textarea>
            <div class="text-danger"><?=$_SESSION['error_message']?></div><br>
            <button type="submit" class="btn btn-success">Відправити повідомлення</button>
        </form>
        <img src="style/gerb-ukr.jpg">
    </div>
</div>
<?php
    require_once "block/footer.php";
?>
