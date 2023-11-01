<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property int $id
 * @property string $user_id
 * @property int $jancode
 * @property string|null $category
 * @property string $pname
 * @property string|null $store
 * @property string|null $created
 * @property string|null $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Item extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'jancode' => true,
        'category' => true,
        'pname' => true,
        'store' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
    ];
}
