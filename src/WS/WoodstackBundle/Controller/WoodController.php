<?php

namespace WS\WoodstackBundle\Controller;

use WS\WoodstackBundle\Entity\User;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class WoodController extends Controller{
	
	public function indexAction($page){
		if ($page < 1) {
      // On déclenche une exception NotFoundHttpException, cela va afficher
      // une page d'erreur 404 (qu'on pourra personnaliser plus tard d'ailleurs)
		throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
		}
		//return new Response("Hello World !");

    // Pour récupérer la liste de toutes les annonces : on utilise findAll()
		
    

    // L'appel de la vue ne change pas
			return $this->render('WSWoodstackBundle:Wood:index.html.twig');
    
	}
	
	public function loginAction(Request $request){
			//$user = new User();
			/*$formBuilder = $this->get('form.factory')->createBuilder('form', $user);
			$formBuilder
				->add('login',	'login')
				->add('password',	'password')
				;
				
			$form = $formBuilder->getForm();*/
			return $this->render('WSWoodstackBundle:Security:login.html.twig');/*, array('form' => $form->createView(),));*/
			
			
			
	}
	
	public function registerAction(){
		
		
		
		return $this->render('WSWoodstackBundle:Registration:register.html.twig');
	}
	
}