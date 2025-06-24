<?php

namespace App\Repository;

use App\Entity\Numenclat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class NomenclatureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Numenclat::class);
    }

    public function save(Numenclat $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Numenclat $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findAllWithProduitAndMatiere()
    {
        return $this->createQueryBuilder('n')
            ->leftJoin('n.produit', 'p')
            ->addSelect('p')
            ->leftJoin('n.matiere', 'm')
            ->addSelect('m')
            ->orderBy('p.reference', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findByProduit($produitId)
    {
        return $this->createQueryBuilder('n')
            ->leftJoin('n.produit', 'p')
            ->addSelect('p')
            ->leftJoin('n.matiere', 'm')
            ->addSelect('m')
            ->where('n.produit = :produitId')
            ->setParameter('produitId', $produitId)
            ->getQuery()
            ->getResult();
    }
}