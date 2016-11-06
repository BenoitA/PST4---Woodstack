<?php


/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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

/**
 * Controller managing the registration
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class ClientController extends Controller
{
    public function ClientAction(Request $request)
    {
        //on crée un objet client
		$client = new Client();
		
		//on crée le formbuilder grace au service form factory
		$formBuilder = $this->get('form.factory')->createBuilder('form', $client);
		
		//on ajoute les champs de l'entité que l'on veut à notre formulaire
		$formBuilder
			->add('nom', 'text')
			->add('prenom', 'text')
			->add('adresse', 'text')
			->add('code_postal', 'number')
			->add('ville', 'text')
			->add('commercial', 'text')
			->add('telephone', 'text')
			->add('save', 'submit')
		;
		
		//A partir du formBuilder, on génère le formulaire
		$form = $formBuilder->getForm();
		
		// Lien requete / formulaire
		// A partir de maintenant, la variable $client contient les
		//valeurs entrées dans le formulaire par le visiteur
		$form->handleRequest($request);
		
		//On verifie que les valeurs entrées sont correctes
		if ($form->isValid()) {
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($client);
			$em->flush();
			
			$request->getSession()->getFlashBag()->add('notice', 'Client enregistré.');
			//On redirige vers la page de visualisation du client créé
			return $this->redirect($this->generateUrl('ws_woodstack_client', array('id' => $client->getId())));
			
		}
		
		//On passe la methode createview du formulaire à la vue
		//afin qu'elle puisse afficher le formulaire toute seule
			
        return $this->render('WSWoodstackBundle:Client:client.html.twig', array('form'=> $form->createView(),
		));
        
    }

}
?>
