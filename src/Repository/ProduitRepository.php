<?php

namespace App\Repository;

use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Produit>
 *
 * @method Produit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produit[]    findAll()
 * @method Produit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit::class);
    }

    public function orderingProduit() 
    { 
        $conn = $this->getEntityManager()->getConnection(); 
 
        $sql="SELECT * FROM produit p 
        INNER JOIN reference r ON p.reference_id=r.id 
        INNER JOIN produit_distributeur pd ON p.id=pd.produit_id 
        INNER JOIN distributeur d ON pd.distributeur_id=d.id 
        ORDER BY p.id DESC"; 
        $stmt = $conn->prepare($sql); 
        $resultSet =$stmt->executeQuery(); 
 
        // returns an array of arrays (i.e. a raw data set) 
        $listeProduits=$resultSet->fetchAllAssociative(); 
 
        return $listeProduits; 
    } 

    public function getLastProduit() 
    { 
 
        $lastProduit=$this->createQueryBuilder('p') 
        ->orderBy('p.id', 'DESC') 
        ->setMaxResults(1) 
        ->getQuery() 
        ->getOneOrNullResult(); 
 
        return $lastProduit; 
 
    } 

//    /**
//     * @return Produit[] Returns an array of Produit objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Produit
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
