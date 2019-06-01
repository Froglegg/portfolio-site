<?php

/**
 * This file is part of the contentful/rich-text package.
 *
 * @copyright 2015-2018 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Contentful\RichText\NodeMapper;

use Contentful\Core\Api\LinkResolverInterface;
use Contentful\RichText\Exception\MapperException;
use Contentful\RichText\Node\NodeInterface;
use Contentful\RichText\ParserInterface;

interface NodeMapperInterface
{
    /**
     * @param ParserInterface       $parser
     * @param LinkResolverInterface $linkResolver
     * @param array                 $data
     *
     * @throws MapperException
     *
     * @return NodeInterface
     */
    public function map(ParserInterface $parser, LinkResolverInterface $linkResolver, array $data): NodeInterface;
}
