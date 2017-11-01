<?php
// src/Blogger/BlogBundle/Controller/PageController.php
namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// Import new namespaces
use Blogger\BlogBundle\Entity\Enquiry;
use Blogger\BlogBundle\Form\EnquiryType;


class PageController extends Controller
{
	
	
	
    public function indexAction()
    {
        return $this->render('BloggerBlogBundle:Page:index.html.twig');
    }


    public function contactAction()
    {
     $enquiry = new Enquiry();
    $form = $this->createForm(new EnquiryType(), $enquiry);

    $request = $this->getRequest();
    if ($request->getMethod() == 'POST') {
        $form->bind($request);

        if ($form->isValid()) {
        	if ($form->isValid()) {
        	
        		$message = \Swift_Message::newInstance()
        		->setSubject('Contact enquiry from symblog')
        		->setFrom('enquiries@symblog.co.uk')
        		->setTo('amro.masters@gmail.com')
        		->setBody($this->renderView('BloggerBlogBundle:Page:contactEmail.txt.twig', array('enquiry' => $enquiry)));
        		$this->get('mailer')->send($message);
        	
                $this->get('session')->getFlashBag()->add('success', 'Votre demande de contact a bien été envoyée. Merci!');        	
        		// Redirect - This is important to prevent users re-posting
        		// the form if they refresh the page
        		return $this->redirect($this->generateUrl('BloggerBlogBundle_contact'));
        	}
        	
         
        }
    }

    return $this->render('BloggerBlogBundle:Page:contact.html.twig', array(
        'form' => $form->createView()
    ));
    }
    }
    
    
    
    
