<?php

namespace App\Traits;

trait HasDeleteAction
{
    abstract function getModel();
    abstract function getRouteName(): string;
    abstract function getSuccessMessage(): string;
    public function delete($id)
    {
        $data = $this->getModel()::findOrFail($id);
        $data->delete();
        session()->flash('success', $this->getSuccessMessage());
        return $this->redirect(route($this->getRouteName()), true);
    }
}
