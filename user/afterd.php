<html>
<head>
<style>
body
{
background: black;
background-size:1400px;
background-repeat:no-repeat;

}
.container
{
position: relative;
  text-align: center;
}
.text
{
font-size:70px;
text-align:center;
font-weight:bold;
top:15%;
left:50%;
color: black;
text-shadow: 1px 3px 0 #969696, 1px 13px 5px #aba8a8;
position:absolute;
 transform: translate(-50%, -50%);
}
.button {
  border-radius: 4px;
  position:absolute;
  top: 85%;
  left:40%;
  color: black;
  background: grey;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 300px;
  transition: all 0.5s;
  cursor: pointer;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  position: absolute;
  opacity: 0;
  top: 60%;
  left:50%;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>


<body>
<div class="container">
<div class="text">We are coming!</div>
<img src = "deli.gif" style="width:1400px; height:900px;">
<a href="userhome.php"><button class="button" ><span>Want to go back to home? </span></button></a>
</div>

</body>

<footer>

</footer>

</html>