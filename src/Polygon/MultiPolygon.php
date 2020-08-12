<?php

namespace Magento24\Geotools\Polygon;

use Magento24\Geotools\Coordinate\CoordinateInterface;
use Magento24\Geotools\GeometryCollection;

class MultiPolygon extends GeometryCollection implements PolygonInterface
{
    const TYPE = 'MULTIPOLYGON';

    /**
     * @return string
     */
    public function getGeometryType()
    {
        return self::TYPE;
    }

    /**
     * @param  CoordinateInterface $coordinate
     * @return boolean
     */
    public function pointInPolygon(CoordinateInterface $coordinate)
    {
        /** @var PolygonInterface $polygon */
        foreach ($this->elements as $polygon) {
            if ($polygon->pointInPolygon($coordinate)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param  CoordinateInterface $coordinate
     * @return boolean
     */
    public function pointOnBoundary(CoordinateInterface $coordinate)
    {
        /** @var PolygonInterface $polygon */
        foreach ($this->elements as $polygon) {
            if ($polygon->pointOnBoundary($coordinate)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param  CoordinateInterface $coordinate
     * @return boolean
     */
    public function pointOnVertex(CoordinateInterface $coordinate)
    {
        /** @var PolygonInterface $polygon */
        foreach ($this->elements as $polygon) {
            if ($polygon->pointOnVertex($coordinate)) {
                return true;
            }
        }

        return false;
    }
}
