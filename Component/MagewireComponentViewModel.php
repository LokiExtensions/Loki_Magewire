<?php
declare(strict_types=1);

namespace Yireo\LokiComponentsMagewire\Component;

use Yireo\LokiComponents\Component\ComponentViewModel;

class MagewireComponentViewModel extends ComponentViewModel
{
    public function getJsComponentName(): ?string
    {
        return 'LokiMagewireComponent';
    }

    public function getJsData(): array
    {
        return [
            ...parent::getJsData(),
        ];
    }
}
