<?php

/**
 * Copyright 2016 LINE Corporation
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

namespace LINE;

class Setting
{
    public static function getSetting()
    {
        return [
            'settings' => [
                'displayErrorDetails' => true, // set to false in production

                'logger' => [
                    'name' => 'slim-app',
                    'path' => __DIR__ . '/../../../logs/app.log',
                ],

                'bot' => [
                    'channelToken' => getenv('LINEBOT_CHANNEL_TOKEN') ?: 'aAMls5K18jevEiIZZlJ1zyu5u8gLxv7FGOYcaHak5tt2Zni2NfzWs5nfapzErLNnBsK8TlaCnHJvxBg1md67eMxWaFPl9GE/sCKzFpC0mM1ai70aKau/lF+0svFNjCWq8Zv1+RMvO4eRAVeYfoEybwdB04t89/1O/w1cDnyilFU=',
                    'channelSecret' => getenv('LINEBOT_CHANNEL_SECRET') ?: '047a51ae1557c6a602e7a417d2e68182',
                ],

                'apiEndpointBase' => getenv('LINEBOT_API_ENDPOINT_BASE'),
            ],
        ];
    }
}
