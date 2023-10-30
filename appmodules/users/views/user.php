<?php
    class UserView {
        
        function add(){
            $fragment = file_get_contents(STATIC_DIR . 'users/user/create.html', true);

            $dict =  ["TITLE" => "Agregar Usuario" ,  "CONTENT"=>$fragment];
            print Template()->show($dict);
        }
    }
?>
