<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link type="text/css" href="style.css" rel="stylesheet">
      <link type="text/css" href="style2.css" rel="stylesheet">
    <title>Risultati Root</title>
  </head>
  <?php require_once ("header.php")  ?>
  <body>
    <form action="mailto:paul.sergentu@gmail.com" method="GET" name="inserimentogelati">

    <div class="buttons largo100">

    <h2>Stai cercando un gelato...</h2>

              <div class="button">
        <label for="gusto1">Ai gusti</label>
        <br>
        <select class="gusti" name="gusto1">
          <option value="1"> Mela</option>
          <option value="2"> Melograno</option>
        </select>


        <select class="gusti" name="gusto2">
          <option value="1"> Mela</option>
          <option value="2"> Melograno</option>
        </select>


        <select class="gusti" name="gusto3">
          <option value="1"> Mela</option>
          <option value="2"> Melograno</option>
        </select>
          </div>



      <div class="button">
        <label for="citta">nella provincia di:</label>
        <br>
        <select class="gusti" name="gusto3">
          <option value="1"> Mela</option>
          <option value="2"> Melograno</option>
        </select>
      </div>

      <div class="button">
        <label for="periodo">il giorno:</label>
        <br>
        <select class="gusti" name="gusto3">
          <option value="1"> Mela</option>
          <option value="2"> Melograno</option>
        </select>
      </div>


      <div class= "largo100 boss">
        <input class="pulsante" type="button" value="Cerca">
      </div>

    </div>

    <div class="barrainfo testobianco">
        <div class="nome">Gusti</div>
        <div class="informazioni">Statistiche</div>

    </div>

    </form>

        <div class="risultati overflow">

    <hr>
            <div class="risultato">

                <div class="nome"><h2>Fragola</h2></div>
                <div class="informazioni percentuale"><meter min="0" low="30" high="100" max="100" value="20"></div>
                <div class="statistica"> 1908 Ricerche </div>


            </div>
    <hr>
            <div class="risultato">

                <div class="nome"><h2>Limone</h2></div>
                <div class="informazioni"><meter min="100" max="500" value="300"></div>
                <div class="statistica"> 1300 Ricerche </div>
            </div>


    <hr>
            <div class="risultato">

                <div class="nome"><h2>Cioccolato</h2></div>
                <div class="informazioni"><meter min="100" max="500" value="200"></div>
                <div class="statistica"> 900 Ricerche </div>
            </div>

        </div>



        </div>


      </body>
  </body>
</html>
