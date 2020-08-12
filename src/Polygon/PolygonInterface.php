<?php

/*
 * This file is part of the Geotools library.
 *
 * (c) Antoine Corcy <contact@sbin.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Magento24\Geotools\Polygon;

use Magento24\Geotools\Coordinate\CoordinateInterface;
use Magento24\Geotools\GeometryInterface;

/**
 * @author Gabriel Bull <me@gabrielbull.com>
 */
interface PolygonInterface extends GeometryInterface
{
    /**
     * @param  CoordinateInterface $coordinate
     * @return boolean
     */
    public function pointInPolygon(CoordinateInterface $coordinate);

    /**
     * @param  CoordinateInterface $coordinate
     * @return boolean
     */
    public function pointOnBoundary(CoordinateInterface $coordinate);

    /**
     * @param  CoordinateInterface $coordinate
     * @return boolean
     */
    public function pointOnVertex(CoordinateInterface $coordinate);
}
