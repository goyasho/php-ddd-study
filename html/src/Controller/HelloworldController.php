<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Helloworld Controller
 *
 * @method \App\Model\Entity\Helloworld[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HelloworldController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $data = "Hello World";
        $this->set("view_data", $data);
        $this->render ( 'hello_world' );
    }
}
