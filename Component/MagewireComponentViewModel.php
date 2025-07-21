<?php
declare(strict_types=1);

namespace Loki\Magewire\Component;

use Loki\Components\Component\ComponentViewModel;

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
