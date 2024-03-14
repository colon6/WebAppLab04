/*
function popupfunction(x)

{

document.getElementById('popup'+x).style.display='block';

document.getElementById('fade'+x).style.display='block';

}



function popupclose(x)

{

document.getElementById('popup'+x).style.display='none';

document.getElementById('fade'+x).style.display='none';

}
*/

	
		function addToCart(X)
			{
			
				document.getElementById("cart").innerHTML += "<br>" + X;

			}

			function showcart()
			{
			
			document.getElementById('cart').style.display="none";
			}
