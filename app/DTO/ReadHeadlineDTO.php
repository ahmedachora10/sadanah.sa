<?php

namespace App\DTO;

class ReadHeadlineDTO {
    public function __construct(
        public readonly ?string $title = null,
        public readonly ?string $subTitle = null,
    ) {}
}