<?php

declare(strict_types=1);

namespace Temporal\Tests\Functional\Client;

/**
 * @group client
 * @group functional
 */
class UpsertSearchAttributesWorkflowTestCase extends ClientTestCase
{
    // TODO: doesn't work on the new test server ¯\_(ツ)_/¯
    // public function testUpsertSearchAttributes()
    // {
    //     $client = $this->createClient();
    //     $workflow = $client->newUntypedWorkflowStub('UpsertSearchAttributesWorkflow');
    //
    //     $e = $client->start($workflow);
    //
    //     $this->assertNotEmpty($e->getExecution()->getID());
    //     $this->assertNotEmpty($e->getExecution()->getRunID());
    //
    //     $this->assertSame('done', $workflow->getResult());
    // }
}
