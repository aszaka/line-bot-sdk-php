<?php

/**
 * Copyright 2018 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */
namespace LINE\Tests\LINEBot\MessageBuilder\Flex\ComponentBuilder;

use PHPUnit\Framework\TestCase;
use LINE\LINEBot\MessageBuilder\Flex\ComponentBuilder\FillerComponentBuilder;

class FillerComponentBuilderTest extends TestCase
{

    private static $tests = [
        [
            'param' => null,
            'json' => <<<JSON
{
  "type":"filler"
}
JSON
        ],
    ];

    public function test()
    {
        foreach (self::$tests as $t) {
            $componentBuilder = new FillerComponentBuilder();
            $this->assertEquals(json_decode($t['json'], true), $componentBuilder->build());

            $componentBuilder = FillerComponentBuilder::builder();
            $this->assertEquals(json_decode($t['json'], true), $componentBuilder->build());
        }
    }
}
