<?php 
//Le manager connait toutes les pages du sites 
//Son rôle est de construire et renvoyer celles-ci.
//Le handler s'occupe quand à lui de gérer une session (un handler/session). 
class Manager 
{
    public static function connection(){
        $dictionary['title'] = "Page de connexion"; 
        $headSegmentsList[0] = "head.php";
        $bodySegmentsList[0] = "connection.html"; 
        $bodySegmentsList[1] = "inscription.php"; 
        $bodySegmentsList[2] = "scriptlinks.html";
        //Les scripts sont chargés vers la fin afin d'éviter que l'utilisateur ne puisse rien voir pdt le chargement de ceux-ci.
        $pageConnexion = new Page($headSegmentsList, $bodySegmentsList, $dictionary);
    }
    //On pourra déterminer plus tard si ça doit être public ou non

    public static function home(){
        $dictionary['title'] = "Journal"; 
        $dictionary['person'] = Session::getConnectedPerson(); 
        $headSegmentsList[0] = "head.php"; 
        $bodySegmentsList[0]= "menu.php"; 
        $bodySegmentsList[1]="friends.php"; 
        $bodySegmentsList[2]="recherche.php"; 
        $bodySegmentsList[3]="pendingFriendRequests.php"; 
        $bodySegmentsList[4] = "scriptlinks.html";
        
        $pageConnexion = new Page($headSegmentsList, $bodySegmentsList, $dictionary);
    }

    public static function research($researchResults){
        $dictionary['title'] = "Recherche"; 
        $dictionary['results']=$researchResults; 
        $dictionary['person'] = Session::getConnectedPerson(); 
        $headSegmentsList[0] = "head.php"; 
        $bodySegmentsList[0]= "menu.php"; 
        $bodySegmentsList[1]="recherche.php"; 
        $bodySegmentsList[1]="results.php"; 
        $bodySegmentsList[4] = "scriptlinks.html";

        $pageConnexion = new Page($headSegmentsList, $bodySegmentsList, $dictionary);
    }
}
?>