<?php

namespace App\Http\Livewire\Panel\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;
    public $searchTerm;
    public $sortColumn = 'created_at';
    public $sortDirection = 'asc';


    /**
     * Table header
     *
     * @return void
     */
    private function headerConfig()
    {
        return [
            'id' => '#',
            'profile_photo_path' => [
                'label' => 'Featured Image',
                'func' => function ($value) {
                    if (!empty($value))
                        return '<img class="user-image img-circle shadow" width="40px" src="'.url('storage/'. $value).'"  />';

                    else
                        return 'No Featured Image';
                }
            ],
            'name' => 'Name',
            'email' => 'E-Mail',
            // 'created_at' => [
            //     'label' => 'Action',
            //     'func' => function($value) {
            //         return $value->diffForHumans();
            //     }
            // ]
            'Action' => [
                'label' => 'Action',
                'func' => function ($value) {

                        return 'action button';


                }
            ]

        ];
    }
    public function addTodo($id){
       return  dd($id);
    }
    public function render()
    {
        return view('livewire.panel.admin.users',[
            'data' => User::paginate(10),
            'headers' => $this->headerConfig()
        ]);
    }
}
