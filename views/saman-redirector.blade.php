<html>
    <body>
        <script>
        	var form = document.createElement("FORM");
        	form.setAttribute("method", "POST");
        	form.setAttribute("action", "{{$url}}");
        	form.setAttribute("target", "_self");

            var token = document.createElement("input");
			token.setAttribute("name", "Token");
			token.setAttribute("value", "{{$token}}");

            form.appendChild(token);

			var redirectUrl = document.createElement("input");
			redirectUrl.setAttribute("name", "redirectUrl");
			redirectUrl.setAttribute("value", "{{$redirectUrl}}");
            form.appendChild(redirectUrl);

			document.body.appendChild(form);
            form.submit();
        	//document.write(form.outerHTML());
        	document.body.removeChild(form);
        </script>
    </body>
</html>
