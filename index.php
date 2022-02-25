<?php session_start();?>
<?php
include('h.php');
?>
<style type="text/css">
#btn{
width:100%;
}
</style>

<BODY BACKGROUND="bg.png"> 
</BODY> 

<div class="container" style="padding-top:100px">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <span class="glyphicon "> </span>
      <h3 align="center">
      <BODY>
      <IMG SRC="logo.png" align="middle" width = "250" HEIGHT = "250" > 
      </BODY>
       </h3> 
       <FONT FACE = "Fixedsys"> <H4><B> Username</B></H4>  </FONT>
      <form  name="formlogin" action="checklogin.php" method="POST" id="login" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="username" class="form-control" required placeholder="Username" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
          <FONT FACE = "Fixedsys"> <H4><B> Password </B></H4>  </FONT>
            <input type="password" name="password" class="form-control" required placeholder="Password" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            
          <button type="submit" class="btn btn-success" id="btn">
            <span class="glyphicon glyphicon-log-in"> </span>
             Login </button>

               <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
               </label>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>