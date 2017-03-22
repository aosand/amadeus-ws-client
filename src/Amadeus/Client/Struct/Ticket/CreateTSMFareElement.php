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

namespace Amadeus\Client\Struct\Ticket;

use Amadeus\Client\RequestOptions\TicketCreateTsmFareElOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Ticket\CreateTSMFareElement\FareElementInfo;
use Amadeus\Client\Struct\Ticket\DisplayTSMFareElement\FareElementTattoo;

/**
 * Ticket_CreateTSMFareElement
 *
 * @package Amadeus\Client\Struct\Ticket
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class CreateTSMFareElement extends BaseWsMessage
{
    /**
     * @var FareElementTattoo
     */
    public $fareElementTattoo;

    /**
     * @var FareElementInfo
     */
    public $fareElementInfo;


    /**
     * Ticket_CreateTSMFareElement constructor.
     *
     * @param TicketCreateTsmFareElOptions $requestOptions
     */
    public function __construct($requestOptions)
    {
        $this->fareElementTattoo = new FareElementTattoo(
            $requestOptions->tattoo,
            $requestOptions->type
        );

        $this->fareElementInfo = new FareElementInfo($requestOptions->info);
    }
}
