<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel BBS</title>

    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    >
</head>
<body>
<style>
.mb-4{margin:190;}
        .menyu1 {
	list-style-type: none;
	margin: -300,0,0,0;
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
.title0{text-align:center; font-family: 'Noto Serif JP', sans-serif;
        }
    .title{font-size:50pt; margin:-360}
</style>
    <div class="content4">
        @yield('content4')
    <div>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>