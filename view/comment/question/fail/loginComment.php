<div>
    <h1> Ställ din fråga </h1>
    <div style="position:relative;">
            <div style="background:white; opacity: 0.8; height:100%; border:solid 2px; color:black; width:100%; font-size:16px; position:absolute;">
                <h3> Du behöver vara inloggad för att göra en kommentar </h3>
                <a href="<?= $this->url('user/login') ?>"> Logga in </a> <br>
                <a href="<?= $this->url('user/create') ?>"> Skapa konto </a>
            </div>


            <form action="<?=$this->url('comment/create')?>" method="post">
                 <textarea style="border:1px solid;" type="text" placeholder="comment" name="comment"></textarea>
                 <button disabled type="submit">Skicka</button>
            </form>
    </div>
</div>
