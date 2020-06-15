<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;


class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     * @param Request $request
     * @param MailerInterface
     * @param $mailer
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request  $request, MailerInterface $mailer)
    {
        $em = $this->getDoctrine()->getManager();
        $contact = new contact();
        $form  = $this->createForm(ContactType::class, $contact);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()){
            $em->persist($contact);
            $em->flush();


            $email = (new Email())
                ->from('monportfoliosymfony@example.com')
                ->to($contact->getEmail())
                ->subject('test from my portfolio')
                ->text('Sending emails is fun again!')
                ->html('<p> '.$contact->getname().', thank you for message</p>');

            $mailer->send($email);
        }

        return $this->render('contact/index.html.twig', [
              'form'=> $form->createView(),
        ]);
    }
}