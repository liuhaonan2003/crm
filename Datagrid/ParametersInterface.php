<?php

namespace Oro\Bundle\GridBundle\Datagrid;

interface ParametersInterface
{
    const FILTER_PARAMETERS = '_filter';
    const SORT_PARAMETERS   = '_sort_by';
    const PAGER_PARAMETERS  = '_pager';

    /**
     * Get parameter value from parameters container
     *
     * @param string $type
     * @param mixed $default
     * @return array
     */
    public function get($type, $default = null);

    /**
     * @param string $type
     * @param mixed $value
     * @return void
     */
    public function set($type, $value);

    /**
     * @return array
     */
    public function toArray();
}
