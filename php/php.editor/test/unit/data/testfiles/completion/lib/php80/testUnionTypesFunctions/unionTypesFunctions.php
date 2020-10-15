<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Test;

class UnionTypes1{}
class UnionTypes2{}

function union_types(null|int|float $param1, string|object $param): UnionTypes1| UnionTypes2 {
}

$closure = function(null|int|float $param1, string| object $param): iterable|false {
};

$arrow = fn(null|int|float $param1, string|object $param): \Test\UnionTypes1|\Test\UnionTypes2|null {
};