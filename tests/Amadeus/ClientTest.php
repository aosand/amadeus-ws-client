<?php
/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus;

use Amadeus\Client\Params;
use Psr\Log\NullLogger;
use Test\Amadeus\BaseTestCase;

/**
 * ClientTest
 *
 * @package Amadeus
 */
class ClientTest extends BaseTestCase
{
    public function testCanCreateClient()
    {
        $par = new Params([
            'sessionHandlerParams' => [
                'wsdl' => '/var/fake/file/path',
                'stateful' => true,
                'logger' => new NullLogger(),
                'authParams' => [
                    'officeId' => 'BRUXXXXXX',
                    'originatorTypeCode' => 'U',
                    'originator' => 'WSXXXXXX',
                    'organizationId' => 'NMC-XXXXXX',
                    'passwordLength' => '4',
                    'passwordData' => base64_encode('TEST')
                ]
            ],
            'requestCreatorParams' => [
                'originatorOfficeId' => 'BRUXXXXXX',
                'receivedFrom' => 'some RF string'
            ]
        ]);

        $client = new Client($par);

        $this->assertTrue($client->getStateful());
    }


}
