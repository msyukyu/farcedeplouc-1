<form method="POST">
    <table>		
        <?php
            $key=0;
            foreach($dictionary['results'] as $result){
                include_once "pages/html/result.php";
            }
        ?>
    </table>
</form>

