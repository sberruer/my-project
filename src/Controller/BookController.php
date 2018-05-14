<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Book;
use App\Entity\Author;
use App\Repository\BookRepository;
use App\Repository\AuthorRepository;

class BookController extends AbstractController
{
    /**
     * @Route("/book", name="book")
     */
    public function index(BookRepository $repository)
    {
        $books = $repository->findAll();
        
        return $this->render('book/index.html.twig', [
            'controller_name' => 'BookController',
            'books' => $books,
        ]);
    }
    
    /**
     * @Route("/book/create", name="book_create")
     */
    public function create(AuthorRepository $authorRepository, BookRepository $bookRepository)
    {
        $author = new Author();
        $author->setFirstname("Laura");
        $author->setLastname("MAVREL");
        $authorRepository->save($author);
        
        $book = new Book();
        $book->setIsbn("978001002");
        $book->setName("Mon livre2");
        $book->addAuthor($author);
        $bookRepository->save($book);
        
        $bookRepository->flush();
        
        return $this->render('book/index.html.twig', [
            'controller_name' => 'BookController',
        ]);
    }
}
