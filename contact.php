<?php
    session_start();

    $title = "Зв`язок";

    require_once "block/header.php";
?>
    <h1 class="mt-5">Напиши з нами</h1>

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


<?php
    require_once "block/footer.php";
?>
