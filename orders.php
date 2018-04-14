<html>
<head>
<script>
function sayHello(form)
{
 var chat;
 chat=form.chattext.value;
 document.write(chat);
}
</script>
</head>
<body>
<FORM NAME="form">
            Name: <input type='text' name="chattext" /> <br />
            Time: <textarea  cols="40" rows="10" name="time"></textarea>
            <INPUT TYPE='BUTTON' VALUE="Say Hello" 
                ONCLICK="sayHello(this.form)">
        </FORM>
</body>
</html>