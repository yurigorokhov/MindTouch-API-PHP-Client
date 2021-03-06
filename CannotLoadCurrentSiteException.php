<?php
/*
 * MindTouch API PHP Client
 * Copyright (C) 2006-2013 MindTouch, Inc.
 * www.mindtouch.com  oss@mindtouch.com
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace MindTouch\ApiClient;

use Exception;

class CannotLoadCurrentSiteException extends Exception {

    private $Result;

    /**
     * @param ApiResult $Result
     */
    public function __construct($Result) {
        $this->Result = $Result;
        parent::__construct(
            "\n" .
            'Request: ' . $Result->getVal('request/uri') . "\n" .
            'Error: ' . $Result->getError() . "\n"
        );
    }

    /**
     * @return ApiResult
     */
    public function getResult() { return $this->Result; }
}
