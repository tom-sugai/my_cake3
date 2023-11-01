<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $pname
 * @property string $jancode
 * @property string $image_url
 * @property string $site_url
 * @property string|null $created
 * @property string|null $modified
 *
 * @property \App\Model\Entity\Item[] $items
 */
class Product extends Entity
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
        'pname' => true,
        'jancode' => true,
        'image_url' => true,
        'site_url' => true,
        'created' => true,
        'modified' => true,
        'items' => true,
    ];
}
