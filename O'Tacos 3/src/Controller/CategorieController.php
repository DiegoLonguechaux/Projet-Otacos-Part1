<?php 
/*indique où "vit" ce fichier */


 namespace App\Controller;
 /* le nom de la classe doit êtrecohérent avec le nom du fichier */

 use Symfony\Component\Routing\Annotation\Route;
 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 use Symfony\Component\HttpFoundation\Response;
 use App\Service\CreditsInterface;
 use App\Service\Categorie;
 use App\Service\Option;
 use PDO;


 class CategorieController extends AbstractController 
 {
     private $listtacos=[];
     private $listfrite=[];
     private $listboisson=[];
     private $listtacosoptionclassic=[];
    //  private $listtacosoptionroyal=[];

     /**
     * @Route("/")
     */

     
    public function accueil()
    {
        return $this->render('accueil.html.twig');
    }



     public function __construct() {

        $tacos=[];
        $frite=[];
        $boisson=[];
        $tacosoptionclassic=[];
        // $tacosoptionroyal=[];

             $cnx = new PDO("mysql:host=mmi.unilim.fr;dbname=longuechaux1", "longuechaux1", "longuechaux1");
             $cnx->query('SET CHARACTER SET utf8');
             $answer = $cnx->query("SELECT PRODUITS.idproduit, PRODUITS.nom, PRODUITS.prix, PRODUITS.images,  PRODUITS.description FROM PRODUITS INNER JOIN CLASSER USING (idproduit) Left join CATEGORIE USING (idcategorie) WHERE CATEGORIE.nom = 'tacos'"); 
             $res = $answer->fetchAll(PDO::FETCH_OBJ);

             foreach ($res as $value) {
                $tacos[] = new Categorie ($value->idproduit, $value->nom, $value->description, $value->images, $value->prix);
             }
           
             $this->listtacos = $tacos;


            $answer = $cnx->query("SELECT PRODUITS.idproduit, PRODUITS.nom, PRODUITS.prix, PRODUITS.images,  PRODUITS.description FROM PRODUITS INNER JOIN CLASSER USING (idproduit) Left join CATEGORIE USING (idcategorie) WHERE CATEGORIE.nom = 'frites'"); 
            $res = $answer->fetchAll(PDO::FETCH_OBJ);

            foreach ($res as $value) {
                $frite[] = new Categorie ($value->idproduit, $value->nom, $value->description, $value->images, $value->prix);
            }
        
            $this->listfrite = $frite;

            $answer = $cnx->query("SELECT PRODUITS.idproduit, PRODUITS.nom, PRODUITS.prix, PRODUITS.images,  PRODUITS.description FROM PRODUITS INNER JOIN CLASSER USING (idproduit) Left join CATEGORIE USING (idcategorie) WHERE CATEGORIE.nom = 'boissons'"); 
            $res = $answer->fetchAll(PDO::FETCH_OBJ);

            foreach ($res as $value) {
                $boisson[] = new Categorie ($value->idproduit, $value->nom, $value->description, $value->images, $value->prix);
            }
        
            $this->listboisson = $boisson;

            $answer = $cnx->query("SELECT PRODUITS.nom, PRODUITS.images, PRODUITS.prix, OPTIONS.nomoption, OPTIONS.prixoption FROM PRODUITS INNER JOIN CLASSER USING (idproduit) INNER JOIN CATEGORIE USING (idcategorie) INNER JOIN OPTIONNER USING (idcategorie) INNER JOIN OPTIONS USING (idOption) WHERE PRODUITS.nom = 'O-tacos - classique'; "); 
            $res = $answer->fetchAll(PDO::FETCH_OBJ);

            foreach ($res as $value) {
                $tacosoptionclassic[] = new Option ($value->nom, $value->images, $value->prix, $value->nomoption, $value->prixoption);
            }
        
            $this->listtacosoptionclassic = $tacosoptionclassic;


        //     $answer = $cnx->query("SELECT PRODUITS.nom, PRODUITS.images, PRODUITS.prix, OPTIONS.nomoption, OPTIONS.prixoption FROM PRODUITS INNER JOIN CLASSER USING (idproduit) INNER JOIN CATEGORIE USING (idcategorie) INNER JOIN OPTIONNER USING (idcategorie) INNER JOIN OPTIONS USING (idOption) WHERE PRODUITS.nom = 'O-tacos - royal';  "); 
        //     $res = $answer->fetchAll(PDO::FETCH_OBJ);

        //     foreach ($res as $value) {
        //         $tacosoptionroyal[] = new Option ($value->nom, $value->images, $value->prix, $value->nomoption, $value->prixoption);
        //     }
        
        //     $this->listtacosoptionroyal = $tacosoptionroyal;

        }

     /*La méthode que l'on veut éxécuter en remplacement de la page par defaut de symfony. Le nom de la méthode peu importe */
    
         // Attention, ci-après, ce n'est pas un commentaire !
         // Notez bien le /** */ et non un /* */
         // La directive @Route indique ici que l'on associe la route
         // "/" à la méthode home pour que Symfony l'exécute chaque fois
         // que l'on accède à la racine de notre site.
      


    /**
      * @Route("/click&collect")
      */
     public function renderTacos(): Response
     {   
         $template = './tacos.html.twig';
         $template = './frite.html.twig';
         $template = './boisson.html.twig';
         return $this->render('./base.html.twig', ['listeTacos'=>$this->listtacos, 'listeFrite'=>$this->listfrite, 'listeBoisson'=>$this->listboisson ]);
     }


        /**
      * @Route("/click&collect/tacosclassicoptions")
      */
     public function renderOption(): Response
     {   
        $template = './tacosoptions.html.twig';
        return $this->render('./pageoptionstacos.html.twig', ['listeTacosOption'=>$this->listtacosoptionclassic]);
     }


     

/**
    * @Route("/{collection}")
    */
    public function filterTacos($collection)
    {


          switch ($collection){
              case 'tacos':
                
                 return $this->render('./base.html.twig',[ 'listeTacos'=>$this->listtacos]);
                  break;
              case 'frites':
                
                  return $this->render('./base.html.twig',[ 'listeFrite'=>$this->listfrite]);
                 break;
              case 'boissons':
                
                  return $this->render('./base.html.twig',[ 'listeBoisson'=>$this->listboisson]);
                  break;
          }

    }



    /**
     * @Route("/goto/credits")
     */
    public function goto(CreditsInterface $credits): Response
    {
        return new Response ($credits->getCredits());
    }


   

    


}
    


     






