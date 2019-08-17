<h1><font color="black" >Jquery section</font></h1>
<style type="">

form #name
{
  font-size:25px;
  border: 1px solid black;
  border-radius:12px;
  outline-color:transparent;
  text-indent:10px;
}
form #submit
{
  font-size:25px;
  border: 0px solid black;
  margin-top:5px;
  background-color:#4caf50;
  border-radius:12px;
  outline-color:transparent;
}
form #submit:hover
{
  font-size:25px;
  border: 0px solid #005;
  background-color:#2196f3;
}

.loader
{
  display:none;
  /*display:inline-block;*/
  font-size:18px;
  margin-top:35px;
}

</style>


<form class="form" id="form" method="post">
  <input type="text" id="name" name="name" placeholder="Votre nom"><br//>
  <input type="submit" id="submit" value="Envoyer">
</form>

<div class="loader" id="loader">
  <p></p>
</div>
