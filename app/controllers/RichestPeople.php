<?php
require "../app/models/RichPeople.php";



class RichestPeople extends Controller {
    private array $last_people = [];

    public function __construct()   
    {
        $this->peopleData = $this->model("RichPeople");        
    }

    public function index() {
        $people = $this->peopleData->getPeople();
        $rows ="";

        foreach($people as $value) {
            $rows .= "<tr>
                <td>" . htmlentities($value->Name) . "</td>
                <td>" . number_format($value->Networth) . "</td>
                <td>" . number_format($value->MyAge) . "</td>
                <td>" . htmlentities($value->Company) . "</td>
                </tr>";


        }

        $data = [
            'title' => '<h1>Landenoverzicht</h1>',
            'RichestPeople' => $rows
          ];
          $this->view('RichestPeople/index', $data);
        }

}
