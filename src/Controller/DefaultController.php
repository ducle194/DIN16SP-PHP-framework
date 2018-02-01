<?php
  namespace App\Controller;

  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use Symfony\Component\HttpFoundation\Request;

  class DefaultController extends Controller{
    /**
     * @Route("/", name="index")
     */
    public function index(Request $request){
      $ctx = '';
      $action = $request->query->get('action');
      if ($action == "mouseClicked"){
        $ctx = 'Updated';
      }

      return $this->render('lab1/link.html.twig', ['ctx' => $ctx]);
    }
  }
 ?>
