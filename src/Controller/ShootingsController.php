<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Shootings Controller
 *
 * @property \App\Model\Table\ShootingsTable $Shootings
 */
class ShootingsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Customers']
        ];
        $this->set('shootings', $this->paginate($this->Shootings));
        $this->set('_serialize', ['shootings']);
    }

    /**
     * View method
     *
     * @param string|null $id Shooting id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shooting = $this->Shootings->get($id, [
            'contain' => ['Customers']
        ]);
        $this->set('shooting', $shooting);
        $this->set('_serialize', ['shooting']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shooting = $this->Shootings->newEntity();
        if ($this->request->is('post')) {
            $shooting = $this->Shootings->patchEntity($shooting, $this->request->data);
            if ($this->Shootings->save($shooting)) {
                $this->Flash->success('The shooting has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The shooting could not be saved. Please, try again.');
            }
        }
        $customers = $this->Shootings->Customers->find('list', ['limit' => 200]);
        $this->set(compact('shooting', 'customers'));
        $this->set('_serialize', ['shooting']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Shooting id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shooting = $this->Shootings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shooting = $this->Shootings->patchEntity($shooting, $this->request->data);
            if ($this->Shootings->save($shooting)) {
                $this->Flash->success('The shooting has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The shooting could not be saved. Please, try again.');
            }
        }
        $customers = $this->Shootings->Customers->find('list', ['limit' => 200]);
        $this->set(compact('shooting', 'customers'));
        $this->set('_serialize', ['shooting']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Shooting id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shooting = $this->Shootings->get($id);
        if ($this->Shootings->delete($shooting)) {
            $this->Flash->success('The shooting has been deleted.');
        } else {
            $this->Flash->error('The shooting could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
