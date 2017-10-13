<div class="container" style="background:#1F9C70;">




    <div class="text-container" style="text-align:center; background:#1F9C70;">
        <h1> Joina vår community! </h1>
        <img src="<?= $app->link("img/coffee-cup(1).png") ?>" style="height:64px;">
        <p> Så du kan ställa frågor eller dela med dig!</p>


        <!-- img style -->

    <img src="<?= $app->link("img/coffee-beans.png") ?>" style="float:left;">
    <img src="<?= $app->link("img/cookie.png") ?>" style="float:right;">



        <form action="/action_page.php" style="margin:auto; width:60%;">


           <input type="text" placeholder="Mejladress" name="email" required>


           <input type="password" placeholder="Lösenord" name="psw" required>

           <input type="password" placeholder="Lösenord igen" name="psw-repeat" required>


            <input type="submit" class="signupbtn" value="Skapa konto">

            <div style="margin:auto; text-align:center; position: relative;">

       </form>

    </div>
</div>
