<?php

namespace App\Services;

class ControllerServices {
    /**
     * @var string $name
     */
    private string $name;

    /**
     * @param string $newName
     * @return string
     */
    // section name
    public function setName(string $newName): string {
        return $this->name = $newName;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }
}
