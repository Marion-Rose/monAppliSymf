<?php 
 
namespace App\Controller; 

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; 
use Symfony\Component\Form\Extension\Core\Type\DateType; 
use Symfony\Component\Form\Extension\Core\Type\SubmitType; 
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\HttpFoundation\JsonResponse; 
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use App\Entity\Produit; 
use App\Form\ProduitType;


class AdminController extends AbstractController 
{ 
    #[Route('/insert', name:'insert')]
    #[Route("/admin")]
    #[IsGranted('ROLE_ADMIN')]
    function insert(Request $request, EntityManagerInterface $entityManager) 
    { 
        $produit = new Produit; 
        $formProduit = $this->createForm(ProduitType::class, $produit); 
        $formProduit->add('creer', SubmitType::class, array( 'label' => 'Insertion d\'un produit',
            'validation_groups'=>array('registration', 'all')));
    
        $formProduit->handleRequest($request); 
    
        if ($request->isMethod('post') && $formProduit->isValid()) { 
            $file = $formProduit['lienImage']->getData(); 
    
            if (!is_string($file)) { 
                $filename = $file->getClientOriginalName(); 
                $file->move( 
                    $this->getParameter('images_directory'), 
                    $filename 
                ); 
    
                $produit->setLienImage($filename); 
    
            } else { 
                $session = $request->getSession(); 
                $session->getFlashBag()->add('message', 
                    'Vous devez choisir une image pour le produit'); 
                $session->set('statut', 'danger'); 
    
                return $this->redirect($this->generateUrl('insert')); 
            } 

            $entityManager->persist($produit); 
            $entityManager->flush(); 

            $session=$request->getSession(); 
            $session->getFlashBag()->add('message','un nouveau produit a été ajouté'); 
            $session->set('statut','success'); 
            return $this->redirect($this->generateUrl('liste')); 
        } 

        return $this->render('administration/create.html.twig', array('my_form' => $formProduit->createView())); 
    } 

    #[Route("/update/{id}", name:"update")]
    #[Route("/admin")]
    #[IsGranted('ROLE_ADMIN')]
    function update(Request $request, $id,EntityManagerInterface $entityManager) 
    { 
 
        $produitRepository=$entityManager->getRepository(Produit::class); 
        $produit=$produitRepository->find($id); 
 
        $img=$produit->getLienImage(); 
        $formProduit= $this->createForm(ProduitType::class,$produit); 
 
        // ajoute un bouton submit 
 
        $formProduit->add('creer', SubmitType::class,array( 
            'label'=>'Mise à jour d\'un produit',
            'validation_groups'=>array('all')
        )); 
        $formProduit->handleRequest($request); 
 
        if($request->isMethod('post') && $formProduit->isValid() ){  
 
            // insertion dans la base 
 
        $file = $formProduit['lienImage']->getData(); 
 
            if(!is_string($file)){ 
 
            $filename=$file->getClientOriginalName(); 
            $file->move(  
                    $this->getParameter('images_directory'),  
                    $filename  
                    );  
            $produit->setLienImage($filename); 
            } else { 
 
                $produit->setLienImage($img); 
            } 
            $entityManager->persist($produit); 
            $entityManager->flush(); 
            $session=$request->getSession(); 
            $session->getFlashBag()->add('message', 
                                'Le produit a été mis à jour'); 
            $session->set('statut','success'); 
            return $this->redirect($this->generateUrl('liste')); 
        } 
        
        return $this->render('administration/create.html.twig', array('my_form'=>$formProduit->createView()));
 
    } 

    #[Route("/delete/{id}", name:"delete")]
    #[Route("/admin")]
    #[IsGranted('ROLE_ADMIN')]
    public function delete(Request $request, $id, EntityManagerInterface $entityManager)
    {
        $produitRepository=$entityManager->getRepository(Produit::class);
        $produit=$produitRepository->find($id);
        $entityManager->remove($produit);
        $entityManager->flush();
        $session=$request->getSession();
        $session->getFlashBag()->add('message','le produit a été supprimé');
        $session->set('statut','success');
        return $this->redirect($this->generateUrl('liste'));
    } 
} 
