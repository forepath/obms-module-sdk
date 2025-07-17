<?php

declare(strict_types=1);

namespace OBMS\ModuleSDK\Products\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Trait HasService.
 *
 * This trait defines the method to get model instance.
 *
 * @author Marcel Menk <marcel.menk@ipvx.io>
 */
trait HasService
{
    public static ?Collection $settings;

    /**
     * Get service model instance.
     *
     * @param int $id
     *
     * @return Collection
     */
    public function get(int $id)
    {
        /* @var Model $modelName */
        $modelName = $this->model();

        return $modelName::find($id);
    }
}
