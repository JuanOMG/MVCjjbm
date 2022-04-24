<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EquiposFixture
 */
class EquiposFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-04-23 22:01:22',
                'modified' => '2022-04-23 22:01:22',
            ],
        ];
        parent::init();
    }
}
