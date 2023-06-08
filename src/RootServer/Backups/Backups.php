<?php


namespace GoWebMediaAPI\RootServer\Backups;

use GoWebMediaAPI\GoWebMediaAPI;

class Backups
{
    private $GoWebMediaAPI;

    public function __construct(GoWebMediaAPI $TekBaseAPI)
    {
        $this->GoWebMediaAPI = $TekBaseAPI;
    }

    public function list(int $vm_id){
        return $this->GoWebMediaAPI->get('products/rootserver/manage/' . $vm_id . '/backups');
    }

    public function create(int $vm_id){
        return $this->GoWebMediaAPI->post('products/rootserver/' . $vm_id . '/backups/create');
    }

    public function delete(int $vm_id, string $backupId){
        return $this->GoWebMediaAPI->delete('products/rootserver/' . $vm_id . '/backups/delete', [
            "backupId" => $backupId
        ]);
    }

}