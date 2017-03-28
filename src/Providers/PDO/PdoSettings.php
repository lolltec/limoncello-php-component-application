<?php namespace Limoncello\Application\Providers\PDO;

/**
 * Copyright 2015-2017 info@neomerx.com
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
 */

use Limoncello\Contracts\Settings\SettingsInterface;

/**
 * @package Limoncello\Application
 */
abstract class PdoSettings implements SettingsInterface
{
    /** Settings key */
    const USER_NAME = 0;

    /** Settings key */
    const PASSWORD = self::USER_NAME + 1;

    /** Settings key */
    const PDO_CONNECTION_STRING = self::PASSWORD + 1;

    /** Settings key */
    const PDO_OPTIONS = self::PDO_CONNECTION_STRING + 1;
}