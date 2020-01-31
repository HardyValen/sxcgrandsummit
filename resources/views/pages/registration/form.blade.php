<!DOCTYPE html>
<html>
<head>
 
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
 
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
 
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
 
input[type=submit]:hover {
  background-color: #45a049;
}
 
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
   
</head>
<body>
 
<h1>PLACEHOLDER FOR FORM</h1>
 
<div class="container">
 
    <form method="POST" action="/store">
 
        {{ csrf_field() }}
 
       <div>
          <label >Nama</label>
          <input type="text" name="nama" placeholder="Masukan Nama Anda">
      </div>
      <div>
            <label >Gender</label><br>
            <input type="radio" name="gender" value="male"> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
            <input type="radio" name="gender" value="other"> Other <br>
            <br>
      </div>
       <div>
            <label >Email</label>
            <input name="email" placeholder="Masukan Email Anda">
      </div>
      <div>
            <input type="submit" value="Register">
      </div>
 
    </form>  
 
 </div>   
 
</body>
</html>