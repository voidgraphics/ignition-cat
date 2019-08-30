<?php

namespace VoidGraphics\CatTab;

use Facade\Ignition\Tabs\Tab as BaseTab;

class Tab extends BaseTab
{
    public function name(): string
    {
        return 'Random Cat';
    }

    public function component(): string
    {
        return 'ignition-cat';
    }

    public function registerAssets()
    {
        $this->script('ignition-cat', __DIR__.'/../dist/js/tab.js');
    }

    public function meta(): array
    {
        return [
            'title' => $this->name(),
        ];
    }
}
