<?php
declare(strict_types=1);

namespace GuzabaPlatform\Cart\Interfaces;

use GuzabaPlatform\Catalog\Base\Interfaces\Item;

interface CartInterface
{
    /**
     * If the item is already added it updates the quantity.
     * If the quantity is set to 0 it removes the item.
     * For negative amounts throws \InvalidArgumentException
     * Returns FALSE only if an Item is provided with quantity 0 which does not exist in the cart.
     * Must also store the time when the item was added.
     * @param Item $Item
     * @param int $quantity
     * @return bool
     */
    public function add(Item $Item, int $quantity) : bool ;

    public function has(Item $Item) : bool ;

    /**
     * Returns TRUE if the Item was present in the cart, FALSE otherwise.
     * @param Item $Item
     * @return bool
     */
    public function remove(Item $Item) : bool ;

    public function remove_all() : void ;

    public function get_total_cost() : float ;

    /**
     * Returns a collection/array of Item
     * @return iterable
     */
    public function get_all_items() : iterable ;

    /**
     * Returns all the meta data about the items (when these were added to the cart)
     * @return iterable
     */
    public function get_all_items_meta() : iterable ;
}