<!doctype html>

<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="css/main.css">

	<script>
		/*
		document.getElementById("input").addEventListener("keydown", fncr);
		*/
		
		function obj(id)
		{
			return document.getElementById(id);
		}
		
		function subj(obj)
		{
			return window.getComputedStyle(obj);
		}
		
		function txt(id)
		{
			return obj(id).innerHTML;
		}
		
		function onLode()
		{
			obj("input").style.marginTop = subj(obj("output")).getPropertyValue('margin-top');
		}
		
		function clicw()
		{
			obj("input").focus();
			
		}
		
		function fncr() {
			if (obj("input").value != txt("output"))
			{
				obj("output").innerHTML = obj("input").value;
				
			}
			setPointer();
		}
		
		function setPointer()
		{
			var escp = "";
			var i = 0;
			var len = getCurPos();
			for ( i = 0; i < len; i++ )
			{
				escp += "&nbsp;";
			}
			obj("pointer").innerHTML = escp + "<span>_</span>";
		}
		
		function getCurPos()
		{
			obj("ex").innerHTML = obj("input").selectionStart + "-v";
			return obj("input").selectionStart;
		}
		
		function xml()
		{
			if ( event.key == "Enter" || event.key == "Return" )
			{
				
			}
			else
			{
				
			}
		}
		
		
		function ajx()
		{
			
		}
		
		
		
  </script>
  
</head>
