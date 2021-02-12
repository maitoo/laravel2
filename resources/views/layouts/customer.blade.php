<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Londrina+Shadow" rel="stylesheet">

    
    <style>
    body {font-size:16pt; color:black; margin: 0px; }
    h1 { font-size:60pt; text-align:center; color:white;
    margin:-70px 0px 30px 0px; letter-spacing:-4pt; font-family: 'Londrina Shadow', cursive;}

    h2 {font-size:30pt; text-align:center; color:white;
    margin:-40px 0px 30px 0px; letter-spacing:-4pt;}
    
    .content {margin:50px; text-align:center;}
    
    tr {margin:20px 0px -30px 0px;}

    th {background-color:#3498db; color:#fff; padding:5px 10px; padding-color:black;}

    td {border: solid 1px #aaa; color:black; padding:5px 10px; font-size:13pt;
        background-color: white;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all  0.3s ease;
    }

    table {border-collapse: collapse; width:1390px; text-align:center; margin:10px 8px 10px; table-layout: fixed;}

    table th, table td {border: solid 1px black;}
    
    .disp-img2{
    background-image:url(../image/Go-back_3672.png);             
    background-repeat:  no-repeat;                              
    width:65px;                                   
    height:70pX;
    align:left;
    object-fit: cover;
    margin: 10px 45px; 
    background-color: transparent;
    border-color: transparent;                                
    }

    .disp-img2:hover {
        backdrop-filter: blur(12px);
    }
    
    h1 {
    color: #fff;
    font-family: 'Oswald', sans-serif;
    font-size: 60px;
    font-weight: 700;
    }

    h1 span {
    display: inline-block;
    position: relative;
    transform-style: preserve-3d;
    perspective: 500px;
    -webkit-font-smoothing: antialiased;
    }

    h1 span::before,
    h1 span::after {
    display: none;
    position: absolute;
    top: 0;
    left: -1px;
    transform-origin: left top;
    transition: all ease-out .3s;
    content: attr(data-text);
    }

    h1 span::before {
    z-index: 1;
    color: rgba(0,0,0,0.2);
    transform: scale(1.1,1) skew(0deg,20deg);
    }

    h1 span::after {
    z-index: 2;
    color: #3498db;
    text-shadow: -1px 0 1px #3498db,
                    1px 0 1px #fff;
    transform: rotateY(-40deg);
    }

    h1 span:hover::before { transform: scale(1.1,1) skew(0deg,5deg); }

    h1 span:hover::after { transform: rotateY(-10deg); }

    h1 span + span { margin-left: .3em; }

    @media (min-width: 20em) {
    h1 { font-size: 2em; }

    h1 span::before,
    h1 span::after {
        display: block;
    }
    }

    @media (min-width: 30em) {
    h1 { font-size: 100px; }
    }

    @media (min-width: 40em) {
    h1 { font-size: 100px; }
    }

    @media (min-width: 60em) {
    h1 { font-size: 100px; }
    }
    
    html,body {
    background-image:url(../image/tree.jpg);
    background-color: white;
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    }

    .search {background: silver; color: black; border-color: silver; height: 50px;}

    .search:hover {opacity: 0.8;}

    .country {margin: 10px 20px; border: 1px solid black;
      letter-spacing: 2px;}

    .country {position:relative;
	  border-radius: 7px;
	  background: #ffffff;
    }

    .country option:nth-child(2n) {
      background: lightgrey;
    }
</style>

</div>
<body>
    <h1 aria-label="CodePen">
    <span data-text="顧">顧</span>
    <span data-text="客">客</span>
    <span data-text="情">情</span>
    <span data-text="報">報</span>
    </h1>
    
    <h2>@yield('sub_title')</h2>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
