<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include 'header.php';
     ?>
     <div class="ens">
       <br>
       <div class="bloc1">
        <h4>100%</h4><br>

       </div>
       <p>100% de vos apareils sont connecter à l'application</p>
       <hr>
       <div class="bloc2">
         <br>
         <p>Vos appareils connecté:</p>
         <img src="image/enceinte.png" alt="">
         <img src="image/ampoule.png" alt="">
         <img src="image/plus.jpg" alt="">
         <img src="image/googlehome.png" alt="">
         <img src="image/alexa.png" alt="">
       </div>
       <hr>
     </div>
  </body>
</html>

<script type="text/javascript">

  alert('Activer le bluetooth pour pouvoir vous connecter')
  void window.alert('Activer le bluetooth pour pouvoir vous connecter')
</script>

<style media="screen">
.ens{
  text-align: center;
}
.ens p{
  font-family: monospace,sans-serif;
}
.bloc1{
  display: inline-flex;
  border:20px solid #2c3e50;
  border-radius: 50%;
  width: 100px;
  height: 100px;
}
.bloc1 h4{
  font-size: 40px;
  text-align: center;
  margin-top: 25%;
  background: -webkit-linear-gradient(45deg, #09009f, #00ff95 80%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;

}
hr{
  border: 4px solid  #5D4954;
  margin-top: 10px;
  width: 50%;
  margin-left: 25%;
  align: center;
}
.bloc2 img{
  margin-top: 10px;
  border: 10px solid  #2c3e50;
  border-radius: 50%;
  width: 70px;
}
</style>
