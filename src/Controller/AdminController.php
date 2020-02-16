<?php

namespace App\Controller;

use App\Entity\Author;
use App\Form\AuthorFormType;
use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends ControllerResolver
{
    /** @var EntityManagerInterface */
    private $entityManager;

    /** @var ObjectRepository */
    private $authorRepository;

    /** @var ObjectRepository */
    private $blogPostRepository;

    /**
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->blogPostRepository = $entityManager->getRepository('App:BlogPost');
        $this->authorRepository = $entityManager->getRepository('App:Author');
    }

    /**
     * @Route("/admin/author/create", name="author_create")
     */
    public function createAuthorAction(Request $request)
    {
        if ($this->authorRepository->findOneBy($this->getName()
                ->getUsername())) {
            // Redirect to dashboard.
            $this->addFlash('error', 'Unable to create author, author already exists!');

            return $this->redirectToRoute('homepage');
        }

        $author = new Author();
        $author->setUsername($this->getName()->getUsername());

        $form = $this->createForm(AuthorFormType::class, $author);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($author);
            $this->entityManager->flush($author);

            $request->getSession()->set('user_is_author', true);
            $this->addFlash('success', 'Congratulations! You are now an author.');

            return $this->redirectToRoute('homepage');
        }

        return $this->render('admin/create_author.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
