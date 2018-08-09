<?php
echo "<br/>login = ". $_POST['login'];
echo "<br/>email = ". $_POST['email'];
echo "<br/>username = ". $_POST['username'];
echo "<br/>age = ". $_POST['age'];

//if (isset($_POST['termsOfUse'])) {
//    if ($_POST['termsOfUse'] == 'on') {
//        echo "<br/> Юзер согласился не читая пользовательского соглашения";
//    };
//} else {
//        echo "<br/> Юзер прочитал соглашение и конечно же не согласился";
//};

if (isset($_POST['termsOfUse'])) {
    switch ($_POST['termsOfUse']){
        case false:
            echo "<br/> Юзер прочитал соглашение и конечно же не согласился";
            break;
        case "on":
            echo "<br/> Юзер согласился не читая пользовательского соглашения";
            break;
    }
}
