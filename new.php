<html>
    <head>
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <script type="text/javascript">
            $(function(){
                $('#combo').change(function(){
                    console.log($(this));
                    $.get( "ABC.php" , { option : $(this).val() } , function ( data ) {
                        $ ( '#comboB' ) . html ( data ) ;
                    } ) ;
                });
            });
        </script>
    </head>
    <body>
        <div id="comboBox">
            <fieldset>
                <form>
                    <select name="combo" id="combo">
                        <option value="">-- Select</option>
                        <option value="1">Fruits</option>
                        <option value="2">Vegetables</option>
                    </select>
                    <select name="comboB" id="comboB">
                        <option value="">--</option>
                    </select>
                </form>
            </fieldset>
        </div>
    </body>
</html>
