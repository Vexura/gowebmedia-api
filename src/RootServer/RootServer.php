<?php


namespace GoWebMediaAPI\RootServer;

use GoWebMediaAPI\GoWebMediaAPI;
use GoWebMediaAPI\RootServer\Backups\Backups;
use GoWebMediaAPI\RootServer\Manage\Manage;

class RootServer
{
    private $GoWebMediaAPI;
    /**
     * @var Backups
     */
    private $backupsHandler;
    /**
     * @var Backups
     */
    private $manageHandler;

    public function __construct(GoWebMediaAPI $TekBaseAPI)
    {
        $this->GoWebMediaAPI = $TekBaseAPI;
    }

    public function list(){
        return $this->GoWebMediaAPI->get('products/rootserver/list');
    }

    public function backups(): Backups
    {
        if(!$this->backupsHandler) $this->backupsHandler = new Backups($this->GoWebMediaAPI);
        return $this->backupsHandler;
    }

    public function manage(): Manage
    {
        if(!$this->manageHandler) $this->manageHandler = new Manage($this->GoWebMediaAPI);
        return $this->manageHandler;
    }

}