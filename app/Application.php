<?php

declare(strict_types=1);

namespace Homework;

class Application
{
    public function run(): void
    {
        $results = null;
        if (!empty($_POST)) {
            $results = 'TODO: Implement requirements and display shipping rates';
        }

        echo $this->renderView('views/form.php', ['results' => $results]);
    }

    public function renderView(string $filePath, array $variables = []): string
    {
        ob_start();
        extract($variables, EXTR_OVERWRITE);
        include($filePath);

        return ob_get_clean();
    }
}
