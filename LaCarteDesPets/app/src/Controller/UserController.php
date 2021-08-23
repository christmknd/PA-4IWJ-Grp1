<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{


    /**
     * @Route("/", name="user_show", methods={"GET"})
     */
    public function show(): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $this->getUser()
        ]);
    }

    /**
     * @Route("/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request): Response
    {
        $user = $this->getUser();
        $email = $user->getEmail();
        $form = $this->createForm(UserType::class, $user);
        if ($user->getTypeDeCompte()=="personne"){
            $form->remove('siret');
        }
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Si le mail a été modifié, le compte n'est pas vérifier
            if($email!==$form->get('email')->getData()){
                $user->setIsVerified(false);
            }
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_show');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/", name="user_delete", methods={"POST"})
     */
    public function delete(Request $request): Response
    {
        $session = new Session();
        $session->invalidate();
        if ($this->isCsrfTokenValid('delete'.$this->getUser()->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($this->getUser());
            $entityManager->flush();
        }
        return $this->redirectToRoute('default');
    }
}
