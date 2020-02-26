<?php
declare(strict_types=1);
namespace Sirius\Validation\Rule;

class NotMatch extends Match
{
    const MESSAGE = 'This input does match {item}';
    const LABELED_MESSAGE = '{label} does match {item}';

    public function validate($value, string $valueIdentifier = null)
    {
        parent::validate($value, $valueIdentifier);
        $this->success = ! $this->success;

        return $this->success;
    }
}
