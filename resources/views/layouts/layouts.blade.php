<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    >
</head>
<style>

.btn1{
    margin:0 0 0 970px; padding:7px 13px; background-color:red; color:white;
    border-style:none; -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;

}
.btn1:hover{
    background-color:#EE0000; color:white;
}

.title0{text-align:center; font-family: 'Noto Serif JP', sans-serif;}
.title{font-size:50pt;}
body{ background:radial-gradient(#FFFFFF, #CC99CC); }

.menyu1 {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: #1b2538;
}
.menyu2 {
	float: left;
	border-right: 1px solid #bbbbbb;
  margin:0 0 0 220px;
  font-family: 'Kaushan Script', cursive;
}
.menyu2 a {
	display: inline-block;
	color: white;
	text-align: center;
  margin: 0 50px 0 60px;
	padding: 20px 20px 20px 25px;
	text-decoration: none;
}
.menyu2:last-child {
	border-right: none;
}
.menyu2 a:hover:not(.active) {
	background-color: #a9bce2;
}
.active {
	background-color: #da3c41;
  transition: background-color 2s linear;
}

.menu-drawer .btn {font-size: 27px; background: #fff; width: 70px;  
padding: 4px 0; cursor: pointer; text-align: center; top: 0; right: 0; }
      .menu-drawer .btn::before, .menu-drawer .btn::after {font-family: "Font Awesome 5 Free"; font-weight: 900;}
      .menu-drawer .btn::before {content: "\f0c9";}
      .menu-drawer .btn::after {content: "\f00d";}
      .menu-drawer .other {background: rgba(0, 0, 0, 0.2); top: 0; left: 0;width: 100%; height: 100vh;}
      .menu-drawer .content {display: table; border: 1px solid #ebebeb;border-radius: 4px; background: #fff; width: 90vw; top: 34px; right: 0;text-align: center;}
      @media screen and (min-width: 415px) {
        .menu-drawer .content {width: 350px;}
      }
      .menu-drawer .content h2 {font-size: 16px; font-weight: 700; color: #fff;background: #383838; margin: 0; padding: .7em; border-radius: 4px 4px 0 0;}
      .menu-drawer .content h2 i {color: #383838; background: #fff;border-radius: 50%; padding: .4em; margin-right: .5em;}
      .menu-drawer .content .menu {height: 210px; overflow-y: auto;}
      .menu-drawer .content a {border-bottom: 1px solid #ebebeb; padding: 1rem 0 0 0; text-decoration: none; color: #858585; display: block; width: 100%;display: flex; flex-flow: column;}
      .menu-drawer .content a i {font-size: 27px;}
      .menu-drawer .content p {color: #858585;}
      .menu-drawer .btn,
      .menu-drawer .content,
      .menu-drawer .other {position: fixed;}
      .menu-drawer .btn,
      .menu-drawer .content {z-index: 1001;}
      .menu-drawer .other {z-index: 1000;}

      .menu-drawer #chk {display: none;}
      .menu-drawer #chk ~ .btn::before {display: block;}
      .menu-drawer #chk ~ .btn::after {display: none;}
      .menu-drawer #chk ~ .other {display: none;}
      .menu-drawer #chk:checked ~ .btn::before {display: none;}
      .menu-drawer #chk:checked ~ .btn::after {display: block;}
      .menu-drawer #chk:checked ~ .other {display: block;}

      .menu-drawer #chk ~ .content {transform: translate(350%, 0); transition: transform 0.3s ease-in-out;}
      .menu-drawer #chk:checked ~ .content {transform: none;} 

</style>
<body>
    <div>
        @yield('content')
        <div class="content5">
        @yield('content5')</div>
    </div>
</body>
</html>