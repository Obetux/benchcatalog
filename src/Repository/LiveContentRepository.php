<?php

namespace App\Repository;

use App\Entity\LiveContent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LiveContent|null find($id, $lockMode = null, $lockVersion = null)
 * @method LiveContent|null findOneBy(array $criteria, array $orderBy = null)
 * @method LiveContent[]    findAll()
 * @method LiveContent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LiveContentRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LiveContent::class);
    }

//    /**
//     * @return LiveContent[] Returns an array of LiveContent objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LiveContent
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
