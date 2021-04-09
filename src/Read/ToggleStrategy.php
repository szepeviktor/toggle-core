<?php

declare(strict_types=1);

namespace Pheature\Core\Toggle\Read;

use JsonSerializable;

interface ToggleStrategy extends JsonSerializable
{
    public function isSatisfiedBy(ConsumerIdentity $identity): bool;

    /**
     * @return array<string, string|array>
     */
    public function toArray(): array;
}
