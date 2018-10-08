<?php

/*
 * This file is part of Laravel Love.
 *
 * (c) Anton Komarev <a.komarev@cybercog.su>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Cog\Contracts\Love\Reacter\Models;

use Cog\Contracts\Love\Reactant\Models\Reactant;
use Cog\Contracts\Love\ReactionType\Models\ReactionType;

interface Reacter
{
    public function reactTo(Reactant $reactant, ReactionType $reactionType): void;

    public function unreactTo(Reactant $reactant, ReactionType $reactionType): void;

    public function isReactedTo(Reactant $reactant): bool;

    public function isNotReactedTo(Reactant $reactant): bool;

    public function isReactedWithTypeTo(Reactant $reactant, ReactionType $reactionType): bool;

    public function isNotReactedWithTypeTo(Reactant $reactant, ReactionType $reactionType): bool;
}