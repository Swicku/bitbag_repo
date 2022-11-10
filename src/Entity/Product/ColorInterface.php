<?php

declare(strict_types=1);


namespace App\Entity\Product;

interface ColorInterface
{
    public function setColor(?string $color): self;

    public function getColor(): ?string;
}
