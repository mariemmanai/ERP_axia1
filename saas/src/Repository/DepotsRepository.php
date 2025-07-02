<?php

namespace App\Repository;

use App\Entity\Depots;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Depots>
 *
 * @method Depots|null find($id, $lockMode = null, $lockVersion = null)
 * @method Depots|null findOneBy(array $criteria, array $orderBy = null)
 * @method Depots[]    findAll()
 * @method Depots[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DepotsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Depots::class);
    }

    public function save(Depots $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Depots $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    // Vous pouvez ajouter ici vos méthodes personnalisées de requête
    // Par exemple:
    /*
    public function findByExampleField($value): array
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}