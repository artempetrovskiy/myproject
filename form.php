<html>
    <body>
        <form method="get">
            Login: <input type="text" name="login">
            E-mail: <input type="text" name="email">
            <input type="submit" value="Send">
        </form>
        <?php
        echo "<br/>login = " . $_GET['login'];
        echo "<br/>email = " . $_GET['email'];
        ?>
    </body>
</html>
