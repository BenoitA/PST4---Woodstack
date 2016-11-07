<?php

namespace WS\WoodstackBundle\Controller;

use WS\WoodstackBundle\Entity\User;
use WS\WoodstackBundle\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class WoodController extends Controller{
	
	public function indexAction(){
		

    // Pour récupérer la liste de toutes les annonces : on utilise findAll()
		
		$em = $this->getDoctrine()->getManager();
		$clients = $em->getRepository('WSWoodstackBundle:Client')->findAll();
		return $this->render('WSWoodstackBundle:Wood:index.html.twig', array(
			'clients'=> $clients,
			));

   
    
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
	
	public function showAction(Client $client) {
		return $this->render('WSWoodstackBundle:Wood:show.html.twig', array(
			'client' => $client,
			));
	}
	
}