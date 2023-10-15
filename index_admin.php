

<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body onload="display_error();">
    <section class="ad_section_login">
        <div class="login_flexbox">
            <div class="logo">
                <img src="src/resource/logo.png" alt="Проблема с логотипом">
                <h1>Smart office <div>Admin</div></h1>
                <p>работа-наш второй дом</p>
            </div>
            <form class="form" action="main_admin_page.php" method="post">
                
                <div class="form_h1">Авторизация</div>
                <p style="display:none;" id="err_log_pas">Логин или пароль неверные!</p>
                <div class="form_login form_block">
                    <p class="login_form_p">Логин</p>
                    <input type="text" class="login_form_input" name="login">
                </div>
                <div class="form_password form_block">
                    <p class="login_form_p">Пароль</p>
                    <input type="password" class="login_form_input" name="password">
                </div>
                <div class="form_fogot_password"><a href="">Забыли пароль?</a></div>
                <button class="form_submit">
                    Продолжить
                    <img src="src/resource/row.svg"></img>
                </button>
            </form>
        </div>
    </section>
    
</body>
</html>


