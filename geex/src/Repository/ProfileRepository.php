<?php
namespace App\Repository;

use App\Entity\Profiles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ProfileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Profiles::class);
    }

    public function findOneByIntitule(string $intitule): ?Profiles
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.intitule = :intitule')
            ->setParameter('intitule', $intitule)
            ->getQuery()
            ->getOneOrNullResult();
    }
}