@extends('livewire.delete')
<style>
    body {
  background: #edf0f1;
  padding: 80px 0 0 0;
}

body, input, button {
  font-family: 'Roboto', sans-serif;
}

.noFill {
  fill: none;
}

header {
  width: 100%;
  height: 80px;

  position: fixed;
  padding: 15px;
  top: 0;
  left: 0;
  z-index: 5;

  background: #25b99a;
  box-shadow: 0px 2px 4px rgba(44, 62, 80, 0.15);
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
}

header input {
  width: 100%;
  height: 50px;
  float: left;
  color: #fff;
  font-size: 15px;
  font-weight: 400;
  text-indent: 18px;
  padding: 0 60px 0 0;
  background: rgba(255, 255, 255, 0.2);
  border-radius: 5px 25px 25px 5px;
  border: 0px;
  box-shadow: none;
  outline: none;

  -webkit-appearance: none;
  -moz-appearance: none;
}

header input::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.75);
}

header input:-moz-input-placeholder {
  color: rgba(255, 255, 255, 0.75);
}

header input::-moz-input-placeholder {
  color: rgba(255, 255, 255, 0.75);
}

header input:-ms-input-placeholder {
  color: rgba(255, 255, 255, 0.75);
}

header button {
  width: 50px;
  height: 50px;

  position:absolute;
  top:15px;
  right:15px;
  z-index:2;

  border-radius: 25px;
  background: #fff;
  border: 0px;
  box-shadow: none;
  outline: none;
  cursor: pointer;

  -webkit-appearance: none;
  -moz-appearance: none;
}

header button svg {
  width: 16px;
  height: 16px;

  position: absolute;
  top: 50%;
  left: 50%;

  margin: -8px 0 0 -8px;
}

header button svg .fill {
  fill: #25b99a;
}

.container {
  width: 100%;
  float: left;
  padding: 15px;
}

ul.todo {
  width: 100%;
  float: left;
}

ul.todo li {
  width: 100%;
  min-height: 50px;
  float: left;
  font-size: 14px;
  font-weight: 500;
  color: #444;
  line-height: 22px;

  background: #fff;
  border-radius: 5px;
  position: relative;
  box-shadow: 0px 1px 2px rgba(44, 62, 80, 0.10);
  margin: 0 0 10px 0;
  padding: 14px 100px 14px 14px;
  word-break: break-word;
}

ul.todo li:last-of-type {
  margin: 0;
}

ul.todo li .buttons {
  width: 100px;
  height: 50px;

  position: absolute;
  top: 0;
  right: 0;
}

ul.todo li .buttons button {
  width: 50px;
  height: 50px;
  float: left;
  background: none;
  position: relative;
  border: 0px;
  box-shadow: none;
  outline: none;
  cursor: pointer;

  -webkit-appearance: none;
  -moz-appearance: none;
}

ul.todo li .buttons button:last-of-type:before {
  content: '';
  width: 1px;
  height: 30px;
  background: #edf0f1;

  position: absolute;
  top: 10px;
  left: 0;
}

ul.todo li .buttons button svg {
  width: 22px;
  height: 22px;

  position: absolute;
  top: 50%;
  left: 50%;

  margin: -11px 0 0 -11px;
}

ul.todo li .buttons button.complete svg {
  border-radius: 11px;
  border: 1.5px solid #25b99a;

  transition: background 0.2s ease;
}

ul.todo#completed li .buttons button.complete svg {
  background: #25b99a;
  border: 0px;
}

ul.todo:not(#completed) li .buttons button.complete:hover svg {
  background: rgba(37, 185, 154, 0.75);
}

ul.todo:not(#completed) li .buttons button.complete:hover svg .fill {
  fill: #fff;
}

ul.todo#completed li .buttons button.complete svg .fill {
  fill: #fff;
}

ul.todo li .buttons button svg .fill {
  transition: fill 0.2s ease;
}

ul.todo li .buttons button.remove svg .fill {
  fill: #c0cecb;
}

ul.todo li .buttons button.remove:hover svg .fill {
  fill: #e85656;
}

ul.todo li .buttons button.complete svg .fill {
  fill: #25b99a;
}

ul.todo#completed {
  position: relative;
  padding: 60px 0 0 0;
}

ul.todo#completed:before {
  content: '';
  width: 150px;
  height: 1px;
  background: #d8e5e0;

  position: absolute;
  top: 30px;
  left: 50%;

  margin: 0 0 0 -75px;
}

ul.todo#todo:empty:after {
  content: 'You have nothing to-do!';
  margin: 15px 0 0 0;
}

ul.todo#completed:empty:after {
  content: 'You have yet to complete any tasks.';
}

ul.todo#todo:after,
ul.todo#completed:after {
  width: 100%;
  display: block;
  text-align: center;
  font-size: 12px;
  color: #aaa;
}


</style>
<!DOCTYPE html>
<html>
	<head>
        <!-- Content Type Meta tag -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <!--Responsive Viewport Meta tag-->
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        
		<title>Todo list app</title>
        
		<!-- Roboto font embed -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

		<!-- Stylesheets -->
		<link rel="stylesheet" type="text/css" href="/resources/css/style.css">
		<link rel="stylesheet" type="text/css" href="resources/css/reset.min.css">
	</head>
	<body>

		<form action="" method="POST">
			@csrf
			<header>
				<input type="text" placeholder="Enter an activity.." id="item" name="activity">
				@csrf
				<button id="add" href='/todo/store'>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve"><g><path class="fill" d="M16,8c0,0.5-0.5,1-1,1H9v6c0,0.5-0.5,1-1,1s-1-0.5-1-1V9H1C0.5,9,0,8.5,0,8s0.5-1,1-1h6V1c0-0.5,0.5-1,1-1s1,0.5,1,1v6h6C15.5,7,16,7.5,16,8z"/></g></svg>
				</button>
			</header>
		</form>
		<div>
			@yield('content')
		</div>
	</body>
</html>
