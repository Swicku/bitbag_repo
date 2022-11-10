<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

#[ORM\Entity]
#[ORM\Table(name: 'sylius_product')]
class Product extends BaseProduct implements ColorInterface
{
    #[ORM\Column(name: 'color', type: 'string', nullable: true)]
    protected ?string $color;

    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }

    public function setColor(?string $color): Product
    {
        $this->color = $color;
        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }
}
