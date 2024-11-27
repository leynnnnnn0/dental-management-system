<?php

namespace App\Traits;

trait HasUpdateAction
{
    abstract function getSuccessMessage(): string;
    abstract function getRouteName(): string;
    public function submit()
    {
        $this->form->update();
        return redirect()->route($this->getRouteName())->with('success', $this->getSuccessMessage());
    }
}
