<?php

namespace Psy\Readline;

use Psy\TabCompletion\AutoCompleter;
use Psy\Readline\Hoa\Autocompleter as HoaAutocompleter;

class HoaAutocompleterAdapter implements HoaAutocompleter
{
    /** @var AutoCompleter */
    private $autoCompleter;

    public function __construct(AutoCompleter $autoCompleter)
    {
        $this->autoCompleter = $autoCompleter;
    }

    public function complete(string $prefix, int $index, array $info)
    {
        return $this->autoCompleter->complete($prefix, $index, $info);
    }

    public function getWordDefinition(): string
    {
        return '.';
    }
}
