<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use App\Entity\Kontakturlap;
use App\Form\KontakturlapFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;


class KontakturlapController extends AbstractController
{

    /**
     *  @Route("/show")
     */
    public function show(Environment $twig, Request $request, EntityManagerInterface $entityManager)
    {
        $kontakturlap = new Kontakturlap();
        
        $form = $this->createForm(KontakturlapFormType::class, $kontakturlap);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager->persist($kontakturlap);
            $entityManager->flush();

            return new Response('Köszönjük szépen a kérdésedet. Válaszunkkal hamarosan keresünk a megadott e-mail címen.');
        }

        return new Response($twig->render('kontakturlap/show.html.twig', ['kontakturlap_form' => $form->createView()]));
    }
}