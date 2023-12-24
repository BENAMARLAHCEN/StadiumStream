<?php

namespace App\Controller;

use App\Model\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = new Team;
        $team = $teams->selectAllTeam();
        $this->adminView('TeamList', $team);
    }
    public function Add()
    {

        $this->adminView('AddTeam');
    }
    public function Edit($id)
    {
        $teams = new Team;
        $team = $teams->selectTeam($id);
        $this->adminView('EditTeam', $team[0]);
    }

    public function AddTeam()
    {
        $newTeam = new Team;
        
        $logo = $_FILES['logo']['name'];
        $logo_tmp_name = $_FILES['logo']['tmp_name'];
        $logo_folder = __DIR__."\\..\\..\\public\\asset\\uploads\\" . $logo;
        unset($_POST['logo']);
        $_POST['logo'] = $logo;
        if (empty($logo)) {
            echo "image that you have entered is note exist!";
        } else if ($newTeam->addTeam($_POST)) {

            if (move_uploaded_file($logo_tmp_name, $logo_folder)) {
                header('location:../Team');
            }
            
        } else {
            header('location:Add');
        }
    }

    public function DeleteTeam($id)
    {
        $newTeam = new Team;
        if ($newTeam->DeleteTeam($id)) {
            header('location:../../Team');
        } else {
            header('location:../errors');
        }
    }
    public function UpdateTeam()
    {
        $newTeam = new Team;
        $id = $_POST['id'];
        unset($_POST['id']);
        if ($newTeam->UpdateTeam($_POST, $id)) {
            header('location:../Team');
        } else {
            header('location:errors');
        }
    }





    // public function addTeam()
    // {

    //     unset($_POST['submit']);

    //     if (Users::addUsers($_POST) === false) { // controller
    //     } else {
    //         $this->index();
    //     }
    // }


    // public function editTeam()
    // {
    //     $where = "id = $_GET[id]";
    //     $user = Users::getUserData($where);
    //     include_once "../App/View/edit.php";
    // }

    // public function readTeam()
    // {
    //     $where = "id = $_GET[id]";
    //     $user = Users::getUserData($where);
    //     $user = $user[0];
    //     include_once "../App/View/read.php";
    // }


    // public function UpdateTeam()
    // {
    //     if (isset($_POST['id'])) {
    //         $id = $_POST['id'];
    //         unset($_POST['submit']);
    //         unset($_POST['id']);
    //         if (Users::UpdateUsers($_POST, $id) === false) {
    //         } else {
    //             $this->index();
    //         }
    //     } else {
    //         $this->index();
    //     }
    // }

    public function deletTeam()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $delete = new Team;
            if ($delete->DeleteTeam($id) === false) {
            } else {
                $this->index();
            }
        } else $this->index();
    }
}
