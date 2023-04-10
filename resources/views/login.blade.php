<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <form action="{{ route('auth')}}" method="POST" >
@csrf
    <h1>Login</h1>
    <hr>
    <label for="email">
        <input type="email" name="email" id="email" placeholder="Email" required/>
    </label>
    <label for="password">
        <input type="password" name="password" id="password" placeholder="Password" required/>
    </label>
    <label for="submit">
        <input type="submit" id="submit" value="Login">
    </label>
    </form>
</div>
</body>
</html>

<style>
 body{
    background-color: #65658F;
    color: whitesmoke;
}
.container{
    display: block;
    margin: 10% auto;
    width: 30%;
    max-width: 80vh;
    height: 50%;
    max-height: 50%;
    border: solid 2px #120A19;
    background-color: rgba(84, 41, 124, .9);
    box-shadow: 0 15px 25px rgba(0,0,0,.6);
    border-radius: 10px;
}

h1{
    font-size: 10vh ;
    display: flex;
    margin: 4% auto;
    justify-content: center;
    font-family: sans-serif;
    font-size: 30px;
}
hr{
    width: 60%;
    border: 1px solid #120A19;
}

label{
    display: block;
    margin: auto;
    padding: 2vh;
    

}
input[type="email"], input[type="password"]{
    display: block;
    margin: 2% auto;
    width: 85%;
    height: 4vh;
    max-height: 30px;
    border-radius: 5px;
    border: solid 2px #120A19;
    background-color: #DBD6DF;
}


input[type="submit"]{
    display:block;
    margin: 4% auto;
    width: 30%;
    height: 4vh;
    background-color: #120A19;
    color: whitesmoke;
    border-radius: 10px;
    cursor: pointer;
}

input:hover {
    transform: scale(1.05);
}

</style>