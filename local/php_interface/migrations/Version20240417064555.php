<?php

namespace Sprint\Migration;


class Version20240417064555 extends Version
{
    protected $description   = "Перенос";
    protected $moduleVersion = "4.6.1";

    /**
     * @throws Exceptions\MigrationException
     * @throws Exceptions\RestartException
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $this->getExchangeManager()
             ->HlblockElementsImport()
             ->setExchangeResource('hlblock_elements.xml')
             ->setLimit(20)
             ->execute(function ($item) {
                 $this->getHelperManager()
                      ->Hlblock()
                      ->addElement(
                          $item['hlblock_id'],
                          $item['fields']
                      );
             });
    }

    /**
     * @throws Exceptions\MigrationException
     * @throws Exceptions\RestartException
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function down()
    {
        $ok = $this->getHelperManager()->Hlblock()->deleteHlblockIfExists('RealEstateAgents');
        
        if ($ok) {
            $this->outSuccess('Highload-блок удален');
        } else {
            $this->outError('Ошибка удаления highload-блока');
        }
    }


}
