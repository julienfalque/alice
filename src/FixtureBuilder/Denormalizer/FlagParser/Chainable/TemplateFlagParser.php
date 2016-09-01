<?php

/*
 * This file is part of the Alice package.
 *  
 * (c) Nelmio <hello@nelm.io>
 *  
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable;

use Nelmio\Alice\Definition\Flag\TemplateFlag;
use Nelmio\Alice\Definition\FlagBag;
use Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\ChainableFlagParserInterface;
use Nelmio\Alice\NotClonableTrait;

final class TemplateFlagParser implements ChainableFlagParserInterface
{
    use NotClonableTrait;

    /**
     * @inheritdoc
     */
    public function canParse(string $element): bool
    {
        return 'template' === $element;
    }

    /**
     * @inheritdoc
     */
    public function parse(string $element): FlagBag
    {
        return (new FlagBag(''))->withFlag(new TemplateFlag());
    }
}
