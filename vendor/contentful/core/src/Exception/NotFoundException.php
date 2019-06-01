<?php

/**
 * This file is part of the contentful/contentful-core package.
 *
 * @copyright 2015-2019 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Contentful\Core\Exception;

use Contentful\Core\Api\Exception;

/**
 * A NotFoundException indicates that the desired resource could not be found on the server.
 */
class NotFoundException extends Exception
{
}
