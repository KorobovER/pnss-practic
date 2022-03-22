<h2>Регистрация нового пользователя</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <p type="ФИО:"><input type="text" name="name" placeholder="Введите Фамилию Имя Отчество"></p>
    <p type="Логин:"><input type="text" name="login" placeholder="Введите логин"></p>
    <p type="Пароль:"><input type="password" name="password" placeholder="Введите пароль"></p>
    <p type="Дата рождения:"><input type="date" name="birth"></p>
    <button>Зарегистрироваться</button>
</form>
