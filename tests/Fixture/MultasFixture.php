<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MultasFixture
 */
class MultasFixture extends TestFixture
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
                'nombreEquipo' => 'Lorem ipsum dolor sit amet',
                'usuario' => 'Lorem ipsum dolor sit amet',
                'multa' => 1.5,
                'prestamo_id' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-04-23 22:07:23',
                'modified' => '2022-04-23 22:07:23',
            ],
        ];
        parent::init();
    }
}
