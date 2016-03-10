<?php


namespace WS\WoodstackBundle\Controller;

use WS\WoodstackBundle\Entity\Client;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Exception\AccountStatusException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NavbarController extends Controller{
	public function NavbarAction($page){
		if ($page < 1) {
      // On déclenche une exception NotFoundHttpException, cela va afficher
      // une page d'erreur 404 (qu'on pourra personnaliser plus tard d'ailleurs)
		throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
		}
		
		return $this->render('WSWoodstackBundle:Navbar:Navbar.html.twig');
	}
}
?>
