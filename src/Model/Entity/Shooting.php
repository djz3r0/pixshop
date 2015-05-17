<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Shooting Entity.
 */
class Shooting extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'customer_id' => true,
        'date' => true,
        'customer' => true,
    ];
}
