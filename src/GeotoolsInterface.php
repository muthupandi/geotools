<?php

/*
 * This file is part of the Geotools library.
 *
 * (c) Antoine Corcy <contact@sbin.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Magento24\Geotools;

use Geocoder\Geocoder as GeocoderInterface;
use Magento24\Geotools\Batch\BatchInterface;
use Magento24\Geotools\Convert\ConvertInterface;
use Magento24\Geotools\Coordinate\CoordinateInterface;
use Magento24\Geotools\Vertex\VertexInterface;
use Magento24\Geotools\Distance\DistanceInterface;
use Magento24\Geotools\Geohash\GeohashInterface;

/**
 * Geotools interface
 *
 * @author Antoine Corcy <contact@sbin.dk>
 */
interface GeotoolsInterface
{
    /**
     * Transverse Mercator is not the same as UTM.
     * A scale factor is required to convert between them.
     *
     * @var double
     */
    const UTM_SCALE_FACTOR = 0.9996;

    /**
     * The ratio meters per mile.
     *
     * @var double
     */
    const METERS_PER_MILE = 1609.344;

    /**
     * The ratio feet per meter.
     *
     * @var double
     */
    const FEET_PER_METER = 0.3048;

    /**
     * The kilometer unit.
     *
     * @var string
     */
    const KILOMETER_UNIT = 'km';

    /**
     * The mile unit.
     *
     * @var string
     */
    const MILE_UNIT = 'mi';

    /**
     * The feet unit.
     *
     * @var string
     */
    const FOOT_UNIT = 'ft';

    /**
     * Returns an instance of Distance.
     *
     * @return DistanceInterface
     */
    public function distance();

    /**
     * Returns an instance of Vertex.
     *
     * @return VertexInterface
     */
    public function vertex();

    /**
     * Returns an instance of Batch.
     *
     * @param GeocoderInterface $geocoder The Geocoder instance to use.
     *
     * @return BatchInterface
     */
    public function batch(GeocoderInterface $geocoder);

    /**
     * Returns an instance of Geohash.
     *
     * @return GeohashInterface
     */
    public function geohash();

    /**
     * Returns an instance of Convert.
     *
     * @param CoordinateInterface $coordinates The coordinates to convert.
     *
     * @return ConvertInterface
     */
    public function convert(CoordinateInterface $coordinates);
}
