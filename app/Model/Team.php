<?php
namespace App\Model;

class Team extends Crud{

    private int $id;
    public function __construct()
    {
        parent::__construct();
    }

    public function selectAllTeam(){
        return $this->selectRecords('teams');
    }
    public function selectTeam($id){
        return $this->selectRecords('teams','*','id = '.$id);
    }
    public function addTeam(array $data){
        return $this->insertRecord('teams',$data);
    }
    public function DeleteTeam(int $id){
        return $this->deleteRecord('teams',$id);
    }
    public function UpdateTeam(array $data,int $id){
        return $this->updateRecord('teams',$data,$id);
    }
}
