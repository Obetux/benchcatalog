<?php

namespace App\Repository;

use App\Entity\VodContent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method VodContent|null find($id, $lockMode = null, $lockVersion = null)
 * @method VodContent|null findOneBy(array $criteria, array $orderBy = null)
 * @method VodContent[]    findAll()
 * @method VodContent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VODContentRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, VodContent::class);
    }

//    /**
//     * @return VODContent[] Returns an array of VODContent objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VODContent
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
