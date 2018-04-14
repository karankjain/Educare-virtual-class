<?php
    $Options = Array ( 
        1 => Array ( 
            'Apple' ,
            'Orange'
        ) , 
        2 => Array ( 
            'Radish' ,
            'Lettuce'
        )
    ) ; 

    forEach ( $Options [ $_GET [ 'option' ] ] as $Item ) {
        printf ( '<option value="%s">%s</option>' , $Item , $Item ) ;
    }