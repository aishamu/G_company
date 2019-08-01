<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Scoreboard
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130602

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Scoreboard</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="http://malsup.github.com/jquery.form.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet"href="{{asset('css/app.css')}}">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<style>

html, body {
	height: 100%;
}

img{

  width: 400px;
 height: 400px;
}
body {
	margin: 0px;
	padding: 0px;
	background: #FFFFFF url(images/bg01.png) repeat;
	font-family: 'Source Sans Pro', sans-serif;
	font-size: 12pt;
	font-weight: 300;
	color: #363636;
}


h1, h2, h3 {
	margin: 0;
	padding: 0;
}

p, ol, ul {
	margin-top: 0px;
}

p {
	line-height: 190%;
}

strong {
}

a {
	color: #171717;
}

a:hover {
	text-decoration: none;
}

a img {
	border: none;
}

	.image
	{
		display: inline-block;
	}

		.image img
		{
			display: block;
			width: 100%;
		}

	.image-full
	{
		display: block;
		width: 100%;
		margin: 0 0 2em 0;
	}

	.image-left
	{
		float: left;
		margin: 0 2em 2em 0;
	}

	.image-centered
	{
		display: block;
		margin: 0 0 2em 0;
	}

		.image-centered img
		{
			margin: 0 auto;
			width: auto;
		}

hr {
	display: none;
}

	ul.style2
	{
		margin: 0;
		padding: 0;
		list-style: none;
	}

	ul.style2 li
	{
		border-top: solid 1px #E5E5E5;
		padding: 0.80em 0;
	}

	ul.style2 li:first-child
	{
		border-top: 0;
		padding-top: 0;
	}

/*********************************************************************************/
/* Social Icon Styles                                                            */
/*********************************************************************************/

	ul.contact
	{
		margin: 0;
		padding: 2em 0em 0em 0em;
		list-style: none;
	}

	ul.contact li
	{
		display: inline-block;
		padding: 0em 0.30em;
		font-size: 1em;
	}

	ul.contact li span
	{
		display: none;
		margin: 0;
		padding: 0;
	}

	ul.contact li a
	{
		color: #FFF;
	}

	ul.contact li a:before
	{
		display: inline-block;
		background: #3f3f3f;
		width: 40px;
		height: 40px;
		line-height: 40px;
		border-radius: 20px;
		text-align: center;
		color: #FFFFFF;
	}

	ul.contact li a.icon-twitter:before { background: #2DAAE4; }
	ul.contact li a.icon-facebook:before { background: #39599F; }
	ul.contact li a.icon-dribbble:before { background: #C4376B;	}
	ul.contact li a.icon-tumblr:before { background: #31516A; }
	ul.contact li a.icon-rss:before { background: #F2600B; }


/*********************************************************************************/
/* Heading Titles                                                                */
/*********************************************************************************/

	.title
	{
		margin-bottom: 2em;
		text-transform: uppercase;
	}

	.title h2
	{
		letter-spacing: 0.20em;
		font-weight: 700;
		font-size: 2em;
		color: #171717;
	}

	.title .byline
	{
		letter-spacing: 0.15em;
		text-transform: uppercase;
		font-weight: 400;
		font-size: 0.90em;
		color: #6F6F6F;
	}

/** WRAPPER */

#wrapper {
	background: #FFFFFF url(images/bg01.png) repeat;
}

#footer-wrapper
{
	background: #0F0F0F;
}

.container {
	width: 1200px;
	margin: 0px auto;
}

.clearfix {
	clear: both;
}


/*********************************************************************************/
/* Header                                                                        */
/*********************************************************************************/

	#header-wrapper
	{
		padding-bottom: 3em;
		background: #E8E8E8 url(images/bg01.png) repeat;
	box-shadow: inset 0 -10px 10px -10px rgba(0,0,0,.1);
	}

	#header
	{
		position: relative;
		overflow: hidden;
		text-align: center;
	}

/*********************************************************************************/
/* Logo                                                                          */
/*********************************************************************************/

	#logo
	{
		width: 500px;
		height: 100px;
		margin: 0 auto;
		text-transform: uppercase;
	}

	#logo h1
	{
		letter-spacing: 0.10em;
		font-size: 3em;
	}

	#logo p
	{
		letter-spacing: 0.10em;
		color: #292A28;
	}

	#logo a
	{
		text-decoration: none;
		color: #292A28;
	}

/*********************************************************************************/
/* Banner                                                                        */
/*********************************************************************************/

	#banner
	{
		position: absolute;
		left: 0;
		overflow: hidden;
		z-index: 1;
	}

	#banner .image
	{
		border: 5px solid #FFFFFF;
	}


/** MENU */

#menu {
	overflow: hidden;
	margin-bottom: 2em;
	background: #25292B;
	box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
	height: 100px;
}

#menu ul {
	margin: 0;
	padding: 0px 0px 0px 0px;
	list-style: none;
	line-height: normal;
	text-align: center;
}

#menu li {
	display: inline-block;
}

#menu a {
	display: block;
	letter-spacing: 1px;
	line-height: 100px;
	padding: 0 40px;
	text-decoration: none;
	text-align: center;
	text-transform: uppercase;
	font-size: 0.80em;
	font-weight: 600;
	border: none;
	color: #FFF;
}

#menu a:hover, #menu .current_page_item a {
	text-decoration: none;
}

#menu .current_page_item a {
	background: #FFC31F;
}

/** PAGE */

#page
{
	position: relative;
	overflow: hidden;
	padding: 6em 0em 5em 0em;
}

/** CONTENT */

#content
{
	float: right;
	width: 790px;
}

/*********************************************************************************/
/* Sidebar                                                                       */
/*********************************************************************************/

	#sidebar
	{
		float: left;
		width: 345px;
	}

	#sidebar .title h2
	{
		font-size: 1.6em;
	}

	#sidebar .box1
	{
		margin-bottom: 3em;
	}

/*********************************************************************************/
/* Footer                                                                        */
/*********************************************************************************/

	#footer
	{
		overflow: hidden;
		padding: 5em 0em;
		text-align: center;
		text-transform: uppercase;
		color: #6F6F6F;
	}

	#footer h2
	{
		letter-spacing: 0.20em;
		font-weight: 700;
		font-size: 2.4em;
		color: #FFF;
	}

	#footer .byline
	{
		letter-spacing: 0.15em;
		text-transform: uppercase;
		font-weight: 400;
		font-size: 0.90em;
		color: #6F6F6F;
	}

/*********************************************************************************/
/* Copyright                                                                     */
/*********************************************************************************/

	#copyright
	{
		overflow: hidden;
		padding: 5em 0em;
		text-align: center;
	}

	#copyright p
	{
		letter-spacing: 0.20em;
		text-align: center;
		text-transform: uppercase;
		font-size: 0.80em;
		color: #6F6F6F;
	}

	#copyright a
	{
		text-decoration: none;
		color: #8C8C8C;
	}

/*********************************************************************************/
/* Welcome                                                                       */
/*********************************************************************************/

	#welcome
	{
		overflow: hidden;
		padding: 5em 0em;
		border-bottom: 1px solid #E5E5E5;
		text-align: center;
	}

	#welcome h2
	{
		letter-spacing: 0.20em;
		text-transform: uppercase;
		font-size: 2.6em;
	}

	#welcome p
	{
		font-size: 1.3em;
	}

	#welcome .byline
	{
		display: block;
		padding: 0em 0em 1.5em 0em;
		letter-spacing: 0.15em;
		text-transform: uppercase;
		font-weight: 400;
		font-size: 1.2em;
		color: #6F6F6F;
	}

/*********************************************************************************/
/* Portfolio                                                                     */
/*********************************************************************************/

	#portfolio-wrapper
	{
		background: #272925;
		padding: 6em 0em;
	}

	#portfolio
	{
		overflow: hidden;
		text-align: center;
		color: #8E8E8E;
	}

	#portfolio .title h2
	{
		font-size: 1.2em;
		color: #FFF;
	}

	#portfolio .byline
	{
		font-size: 1em;
		color: #EEA7C1;
	}

	#column1,
	#column2,
	#column3,
	#column4
	{
		width: 282px;
	}

	#column1,
	#column2
	{
		float: left;
		margin-right: 24px;
	}

	#column3
	{
		float: left;
	}

	#column4
	{
		float: right;
	}

/*********************************************************************************/
/* Button Style                                                                  */
/*********************************************************************************/

	.button
	{
		display: inline-block;
		padding: 1em 3em 1em 2em;
		letter-spacing: 0.20em;
		text-decoration: none;
		text-transform: uppercase;
		font-weight: 400;
		font-size: 0.90em;
		color: #FFF;
	}

		.button:before
		{
			display: inline-block;
			background: #FFC31F;
			margin-right: 1em;
			width: 40px;
			height: 40px;
			line-height: 40px;
			border-radius: 20px;
			text-align: center;
			color: #272925;
		}


    *{
     margin: 0px;
     padding: 0px;
    }
    body{
     font-family: arial;
    }
    .main{

     margin: 2%;
    }

    .card{
         width: 20%;
         display: inline-block;
         box-shadow: 1px 1px 10px grey;
         border-radius: 5px;
         margin: 2%;
        }

    .image img{
      width: 100%;
      border-top-right-radius: 2px;
      border-top-left-radius: 2px;



     }

    .title{

      text-align: center;
      padding: 10px;

     }

    h1{
      font-size: 20px;
     }

    .des{
      padding: 3px;
      text-align: center;

      padding-top: 10px;
            border-bottom-right-radius: 5px;
      border-bottom-left-radius: 5px;
    }
    button{
      margin-top: 40px;
      margin-bottom: 10px;
      background-color: white;
      border: 1px solid black;
      border-radius: 5px;
      padding:10px;
    }
    button:hover{
      background-color: black;
      color: white;
      transition: .5s;
      cursor: pointer;
    }

		a {
		  text-decoration: none;
		  display: inline-block;
		  padding: 8px 16px;
		}

		a:hover {
		  background-color: #ddd;
		  color: black;
		}

		.previous {
		  background-color: #f1f1f1;
		  color: black;
		}

	

		.round {
		  border-radius: 50%;
		}

</style>
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
<div id="wrapper">
  @include('inc.nav')

	<div id="page" class="container">
     @yield('content')



</body>
</html>
