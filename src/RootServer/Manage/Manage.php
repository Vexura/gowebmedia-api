<?php


namespace GoWebMediaAPI\RootServer\Manage;

use GoWebMediaAPI\GoWebMediaAPI;

class Manage
{
    private $GoWebMediaAPI;

    public function __construct(GoWebMediaAPI $TekBaseAPI)
    {
        $this->GoWebMediaAPI = $TekBaseAPI;
    }

    public function osList(){
        return $this->GoWebMediaAPI->get('products/rootserver/osList');
    }

    public function get(int $vm_id){
        return $this->GoWebMediaAPI->get('products/rootserver/' . $vm_id . '/get');
    }

    public function stats(int $vm_id){
        return $this->GoWebMediaAPI->get('products/rootserver/' . $vm_id . '/stats');
    }

    public function start(int $vm_id){
        return $this->GoWebMediaAPI->post('products/rootserver/' . $vm_id . '/start');
    }

    public function kill(int $vm_id){
        return $this->GoWebMediaAPI->post('products/rootserver/' . $vm_id . '/stop');
    }

    public function stop(int $vm_id){
        return $this->GoWebMediaAPI->post('products/rootserver/' . $vm_id . '/shutdown');
    }

    public function restart(int $vm_id){
        return $this->GoWebMediaAPI->post('products/rootserver/' . $vm_id . '/restart');
    }

    public function reinstall(int $vm_id, int $os_id, string $root_password){
        return $this->GoWebMediaAPI->post('products/rootserver/' . $vm_id . '/reinstall', [
            "password" => $root_password,
            "os" => $os_id
        ]);
    }

    public function delete(int $vm_id){
        return $this->GoWebMediaAPI->delete('products/rootserver/' . $vm_id . '/delete');
    }

    public function create(string $cpu_type, string $hostname, int $cores, int $disk, int $ram, int $backups, string $root_password, int $os_id, int $ipv4, int $ipv6 = 0){
        return $this->GoWebMediaAPI->post('products/rootserver/order' . $cpu_type, [
            "hostname" => $hostname,
            "cores" => $cores,
            "disk" => $disk,
            "ram" => $ram,
            "backups" => $backups,
            "root_password" => $root_password,
            "ipv4_addresses" => $ipv4,
            "ipv6_subnets" => $ipv6,
            "os" => $os_id,
        ]);
    }

    public function edit(int $vm_id, int $cores, int $disk, int $ram, int $backups, int $ipv4, int $ipv6 = 0){
        return $this->GoWebMediaAPI->post('products/rootserver/manage/' . $vm_id . '/edit', [
            "cores" => $cores,
            "disk" => $disk,
            "ram" => $ram,
            "backups" => $backups,
            "ipv4_addresses" => $ipv4,
            "ipv6_subnets" => $ipv6,
        ]);
    }
}