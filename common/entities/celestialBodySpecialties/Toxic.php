<?php

namespace common\entities\celestialBodySpecialties;

use common\entities\CelestialBodySpecialty as CelestialBodySpecialtyEntity;

/**
 * @Entity
 * @author Benjamin Wöster <benjamin.woester@gmail.com>
 */
class Toxic extends CelestialBodySpecialtyEntity
{
  public function getType() {
    return CelestialBodySpecialtyEntity::DISCR_TOXIC;
  }
}
