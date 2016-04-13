<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="style2.css" media="screen" title="no title" charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <title>Utente</title>
  </head>
  <body>
    <?php require_once ("header.php")  ?>
    <div class="Box utente">

      <div class="titolo testobianco"> <h1>Impostazioni Personali</h1></div>



<div class="informazioniutente largo100">
  <form class="datiutente" action="index.html" method="post">

<div class="datiutente">

          <label for="nome">Nome</label>
          <br>
          <input type="text" name="nome" value="Luca">
<br>
          <label for="cognome">Cognome</label>
          <br>
          <input type="text" name="cognome" value="Bottone">
<br>
          <label for="citta">Città</label>
          <br>
          <input type="text" name="name" value="Lodi">
</div>

<div class="datiaccesso">
          <label for="e-mail">E-mail</label>
          <br>
          <input type="text" name="name" value="luca.bottoni@gmail.com">
<br>
          <label for="password">Password</label>
          <br>
          <input type="text" name="name" value="********">
<br>
          <input type="submit" name="name" value="Salva">


</div>

  </div>

  </form>
</div>
        <div class="barra">


        </div>
        <div class="preferiti">
          <h2>Preferiti</h2>
  </div>
  <div class="barrainfo testobianco">
    <div class="nome">Gelateria</div>
    <div class="informazioni">Informazioni</div>
    <div class="icone">Social</div>

  </div>

          <div class="risultati overflow">


      <hr>
              <div class="risultato">

                  <div class="nome"><h2>Gelato Mania</h2></div>
                  <div class="informazioni">Via Dante 27<br>Tel. 02 34567890<br>Chiuso: Lunedì</div>
                  <div class="icone"><img src="ico/phone.png" alt="phone" /> <img src="ico/cuore.png" alt="star" /> <img src="ico/friends.png" alt="friends" /><br><img src="ico/stelline.png" alt="stelline" /></div>

              </div>
      <hr>
              <div class="risultato">

                  <div class="nome"><h2>Gelato One</h2></div>
                  <div class="informazioni">Via Lagorai 15<br>Tel. 02 3324356758 <br> Chiuso: Lunedì</div>
                  <div class="icone"><img src="ico/phone.png" alt="phone" /> <img src="ico/cuore.png" alt="star" /> <img src="ico/friends.png" alt="friends" /><br><img src="ico/stelline.png" alt="stelline" /></div>

              </div>
      <hr>
              <div class="risultato">

                  <div class="nome"><h2>Antica Gelateria</h2></div>
                  <div class="informazioni">Via Lodi 9<br>Tel. 02 56776879 <br> Chiuso: Martedì</div>
                  <div class="icone"><img src="ico/phone.png" alt="phone" /> <img src="ico/cuore.png" alt="star" /> <img src="ico/friends.png" alt="friends" /><br><img src="ico/stelline.png" alt="stelline" /></div>

              </div>


          </div>







  </body>
</html>
