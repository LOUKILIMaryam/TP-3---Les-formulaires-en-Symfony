<?php

namespace App\Controller;

use App\Form\Type\ProduitType; // Import du formulaire
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class FormController extends AbstractController
{
    #[Route('/form', name: 'app_form')]
    public function index(Request $request): Response
    {
        // Crée le formulaire à partir de ProduitType sans valeurs par défaut
        $form = $this->createForm(ProduitType::class);

        // Traite la soumission du formulaire
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
        
            dd($data); // debug pour voir les valeurs reçues
        }

        return $this->render('form/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
