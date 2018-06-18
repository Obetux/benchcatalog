<?php

namespace App\Repository;

use App\Entity\VODContent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method VODContent|null find($id, $lockMode = null, $lockVersion = null)
 * @method VODContent|null findOneBy(array $criteria, array $orderBy = null)
 * @method VODContent[]    findAll()
 * @method VODContent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VODContentRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, VODContent::class);
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
