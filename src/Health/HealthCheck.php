<?php namespace DCarbone\PHPConsulAPI\Health;

/*
   Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
*/

use DCarbone\PHPConsulAPI\AbstractObjectModel;

/**
 * Class HealthCheck
 * @package DCarbone\PHPConsulAPI\Health
 */
class HealthCheck extends AbstractObjectModel
{
    /** @var string */
    public $Node = '';
    /** @var string */
    public $CheckID = '';
    /** @var string */
    public $Name = '';
    /** @var string */
    public $Status = '';
    /** @var string */
    public $Notes = '';
    /** @var string */
    public $Output = '';
    /** @var string */
    public $ServiceID = '';
    /** @var string */
    public $ServiceName = '';
}