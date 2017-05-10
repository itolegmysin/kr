<?php

namespace Blogger\BlogBundle\Entity\Repository;

/**
 * RoleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RoleRepository extends \Doctrine\ORM\EntityRepository{
    public function getRole($name){
        $qb = $this->createQueryBuilder('r')
            ->select('r')
            ->where('r.name = :r_name')
            ->setParameter('r_name', $name);
        return $qb->getQuery()->getResult();
    }
}
