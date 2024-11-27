<?php

namespace App\Traits;

trait HasCreateAction
{
    abstract function getRouteName(): string;
    abstract function getMessage(): string;
    public function submit()
    {
        $this->form->store();
        return redirect()->route($this->getRouteName())->with('success', $this->getMessage());
    }
}
