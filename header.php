<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Stay-Home.css">
    <title>AT Home</title>
  </head>
  <body>
    <header>
      <nav>
        <div class="logo">
          <h3>Home Connect</h3>
        </div>


        <div  class="menu">
          <ul class="categorie">
            <li>
              <a href="#">Menu</a>
          <ul>
            <li><a href="#">Mes appareils</a></li>
            <li><a href="#">Plus d'appareils</a></li>
            <li><a href="#">Paramètre</a></li>
            <li><a href="#">Nous contacter</a></li>
          </ul>
          </li>
          </ul>
          <ul class="connection">
            <li><a href="Login.html">Connection</a></i></li>
          </ul>

        </div>
      </div>
    </header>

  </body>
</html>

<style media="screen">
*{
  margin: 0px;
  padding: 0px;
}
nav{
  display: flex;
  justify-content: space-around;
  align-items:center;
  min-height: 20vh;
  background-color: #5D4954;
  font-family: 'Poppins', sans-serif;
}
.logo{
  color: rgb(226,226,226);
  text-transform: uppercase;
  letter-spacing: 5px;
  font-size: 20px;
  background-color: #5D4954;

}
.menu{
z-index: 1;
 display: flex;
  margin: 0;
}
.menu ul{
margin: 0;
padding: 0;
line-height: 30px;
}
.menu li{
  list-style-type: none;
  float: left;
  position: relative;
  color: white;

}
.menu ul li a{
  color: #000;
  text-decoration: none;
  width: 130px;
  height: 30px;
  display: block;


}
.menu ul ul{
  position: absolute;
  visibility:hidden;
}
.menu ul li:hover ul{
  visibility: visible;
}
.connection{
  background-color: rgb(93,73,84,0.8);
  text-align: center;
  border: 0.5px solid #A2939B;
  border-radius:100px;
  margin: 1px;
}
.categorie li a{
  background-color: rgb(93,73,84,0.8);
  text-align: center;
  border: 0.5px solid #A2939B;
  border-radius:100px;
  margin: 1px;
}
</style>
