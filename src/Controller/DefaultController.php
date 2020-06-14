<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index()
    {
        $entityManager =  $this->getDoctrine()->getManager();
        $realisations = $entityManager->getRepository('App:Realisation')->findAll();
        $competences = $entityManager->getRepository('App:Competence')->findAll();
        $educations = $entityManager->getRepository('App:Education')->findAll();
        $personne = $entityManager->getRepository('App:Personne')->find(1);
        return  $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'realisations'=>$realisations,
            'competences'=>$competences,
            'educations'=>$educations,
            'personne'=>$personne,
        ]);

    }


}
