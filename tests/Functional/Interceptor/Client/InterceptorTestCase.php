<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Tests\Functional\Interceptor\Client;

use Temporal\Client\GRPC\ServiceClient;
use Temporal\Client\WorkflowClient;
use Temporal\Tests\Functional\FunctionalTestCase;

/**
 * @group client
 */
abstract class InterceptorTestCase extends FunctionalTestCase
{
    /**
     * @param string $connection
     * @return WorkflowClient
     */
    protected function createClient(string $connection = 'localhost:7233'): WorkflowClient
    {
        return new WorkflowClient(
            ServiceClient::create($connection)
        );
    }
}
